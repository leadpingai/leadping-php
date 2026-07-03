<?php

namespace Leadping\OpenApiClient\Automations;

use Exception;
use Http\Promise\Promise;
use Leadping\OpenApiClient\Automations\All\AllRequestBuilder;
use Leadping\OpenApiClient\Automations\Item\AutomationsItemRequestBuilder;
use Leadping\OpenApiClient\Automations\Preview\PreviewRequestBuilder;
use Leadping\OpenApiClient\Models\AutomationRequest;
use Leadping\OpenApiClient\Models\AutomationResponse;
use Leadping\OpenApiClient\Models\ProblemDetails;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /automations
*/
class AutomationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The all property
    */
    public function all(): AllRequestBuilder {
        return new AllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The preview property
    */
    public function preview(): PreviewRequestBuilder {
        return new PreviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.automations.item collection
     * @param string $id The ID of the automation.
     * @return AutomationsItemRequestBuilder
    */
    public function byId(string $id): AutomationsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new AutomationsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AutomationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/automations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Creates an automation for current-business leads, configuring triggers, message steps, and follow-up behavior.
     * @param AutomationRequest $body Request schema for the Leadping API automation configuration request, including the fields clients can send.
     * @param AutomationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AutomationResponse|null>
     * @throws Exception
    */
    public function post(AutomationRequest $body, ?AutomationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
                '401' => [ProblemDetails::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AutomationResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates an automation for current-business leads, configuring triggers, message steps, and follow-up behavior.
     * @param AutomationRequest $body Request schema for the Leadping API automation configuration request, including the fields clients can send.
     * @param AutomationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AutomationRequest $body, ?AutomationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AutomationsRequestBuilder
    */
    public function withUrl(string $rawUrl): AutomationsRequestBuilder {
        return new AutomationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
