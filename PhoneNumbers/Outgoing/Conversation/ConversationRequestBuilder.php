<?php

namespace Leadping\OpenApiClient\PhoneNumbers\Outgoing\Conversation;

use Leadping\OpenApiClient\PhoneNumbers\Outgoing\Conversation\Item\WithConversationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /phone-numbers/outgoing/conversation
*/
class ConversationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the Leadping/OpenApiClient.phoneNumbers.outgoing.conversation.item collection
     * @param string $conversationId The conversation identifier.
     * @return WithConversationItemRequestBuilder
    */
    public function byConversationId(string $conversationId): WithConversationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationId'] = $conversationId;
        return new WithConversationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConversationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/phone-numbers/outgoing/conversation');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
