<?php

namespace Leadping\OpenApiClient\Notifications;

use Leadping\OpenApiClient\Notifications\Announcements\AnnouncementsRequestBuilder;
use Leadping\OpenApiClient\Notifications\Item\NotificationsItemRequestBuilder;
use Leadping\OpenApiClient\Notifications\MarkAllRead\MarkAllReadRequestBuilder;
use Leadping\OpenApiClient\Notifications\Me\MeRequestBuilder;
use Leadping\OpenApiClient\Notifications\UnreadCount\UnreadCountRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /notifications
*/
class NotificationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The announcements property
    */
    public function announcements(): AnnouncementsRequestBuilder {
        return new AnnouncementsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The markAllRead property
    */
    public function markAllRead(): MarkAllReadRequestBuilder {
        return new MarkAllReadRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The me property
    */
    public function me(): MeRequestBuilder {
        return new MeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unreadCount property
    */
    public function unreadCount(): UnreadCountRequestBuilder {
        return new UnreadCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Leadping/OpenApiClient.notifications.item collection
     * @param string $id The notification ID.
     * @return NotificationsItemRequestBuilder
    */
    public function byId(string $id): NotificationsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new NotificationsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new NotificationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/notifications');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
