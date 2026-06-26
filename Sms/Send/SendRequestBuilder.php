<?php

namespace Leadping\OpenApiClient\Sms\Send;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Leadping\OpenApiClient\Models\SendSmsRequest;
use Leadping\OpenApiClient\Models\SmsResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /sms/send
*/
class SendRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SendRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sms/send');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Sends an SMS message to a lead or phone number, applying current-business sender selection, scheduling, and delivery rules.
     * @param SendSmsRequest $body Request schema for the Leadping API SMS send request, including the fields clients can send.
     * @param SendRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SmsResponse|null>
     * @throws Exception
    */
    public function post(SendSmsRequest $body, ?SendRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '500' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SmsResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Sends an SMS message to a lead or phone number, applying current-business sender selection, scheduling, and delivery rules.
     * @param SendSmsRequest $body Request schema for the Leadping API SMS send request, including the fields clients can send.
     * @param SendRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SendSmsRequest $body, ?SendRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SendRequestBuilder
    */
    public function withUrl(string $rawUrl): SendRequestBuilder {
        return new SendRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
