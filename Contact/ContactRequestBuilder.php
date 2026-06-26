<?php

namespace Leadping\OpenApiClient\Contact;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\ContactRequest;
use Leadping\OpenApiClient\Models\ContactResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /contact
*/
class ContactRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ContactRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/contact');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Submits a public contact request to Leadping support, capturing sender details and message content without requiring authentication.
     * @param ContactRequest $body Request schema for the Leadping API contact form request, including the fields clients can send.
     * @param ContactRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContactResponse|null>
     * @throws Exception
    */
    public function post(ContactRequest $body, ?ContactRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContactResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Submits a public contact request to Leadping support, capturing sender details and message content without requiring authentication.
     * @param ContactRequest $body Request schema for the Leadping API contact form request, including the fields clients can send.
     * @param ContactRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ContactRequest $body, ?ContactRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ContactRequestBuilder
    */
    public function withUrl(string $rawUrl): ContactRequestBuilder {
        return new ContactRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
