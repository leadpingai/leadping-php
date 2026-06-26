<?php

namespace Leadping\OpenApiClient\Leads\Intake;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Models\LeadIntakeRequest;
use Leadping\OpenApiClient\Models\LeadResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /leads/intake
*/
class IntakeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new IntakeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/leads/intake{?Address1*,Address2*,BirthDate*,City*,DateOfBirth*,DirectPostPrice*,Email*,ExternalId*,FirstName*,Gender*,LandingPage*,LastName*,Phone*,PhoneType*,PostalCode*,Price*,Product*,Referrer*,SellerLeadId*,SellerLeadIdentifier*,SourceMetadata*,State*,SubId*,TagIds*,TagNames*,TrustedFormUrl*,UtmCampaign*,UtmContent*,UtmMedium*,UtmSource*,UtmTerm*,Vertical*,Zip*,sourceKey*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Creates a source-authenticated lead from query parameters, supporting simple form posts, tracking metadata, and follow-up automation.
     * @param IntakeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LeadResponse|null>
     * @throws Exception
    */
    public function get(?IntakeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LeadResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a source-authenticated lead from a flat intake payload, capturing contact fields, metadata, and automation-ready lead details.
     * @param LeadIntakeRequest $body Request schema for the Leadping API lead intake request, including the fields clients can send.
     * @param IntakeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LeadResponse|null>
     * @throws Exception
    */
    public function post(LeadIntakeRequest $body, ?IntakeRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '403' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LeadResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a source-authenticated lead from query parameters, supporting simple form posts, tracking metadata, and follow-up automation.
     * @param IntakeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IntakeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Creates a source-authenticated lead from a flat intake payload, capturing contact fields, metadata, and automation-ready lead details.
     * @param LeadIntakeRequest $body Request schema for the Leadping API lead intake request, including the fields clients can send.
     * @param IntakeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(LeadIntakeRequest $body, ?IntakeRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return IntakeRequestBuilder
    */
    public function withUrl(string $rawUrl): IntakeRequestBuilder {
        return new IntakeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
