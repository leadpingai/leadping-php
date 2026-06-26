<?php

namespace Leadping\OpenApiClient;

use Leadping\OpenApiClient\Analytics\AnalyticsRequestBuilder;
use Leadping\OpenApiClient\Automations\AutomationsRequestBuilder;
use Leadping\OpenApiClient\Businesses\BusinessesRequestBuilder;
use Leadping\OpenApiClient\Contact\ContactRequestBuilder;
use Leadping\OpenApiClient\Conversations\ConversationsRequestBuilder;
use Leadping\OpenApiClient\Dispositions\DispositionsRequestBuilder;
use Leadping\OpenApiClient\Events\EventsRequestBuilder;
use Leadping\OpenApiClient\Feedback\FeedbackRequestBuilder;
use Leadping\OpenApiClient\Leads\LeadsRequestBuilder;
use Leadping\OpenApiClient\Notifications\NotificationsRequestBuilder;
use Leadping\OpenApiClient\Outbound\OutboundRequestBuilder;
use Leadping\OpenApiClient\PaymentMethods\PaymentMethodsRequestBuilder;
use Leadping\OpenApiClient\PhoneNumbers\PhoneNumbersRequestBuilder;
use Leadping\OpenApiClient\Reports\ReportsRequestBuilder;
use Leadping\OpenApiClient\Sms\SmsRequestBuilder;
use Leadping\OpenApiClient\Sources\SourcesRequestBuilder;
use Leadping\OpenApiClient\Tags\TagsRequestBuilder;
use Leadping\OpenApiClient\Transactions\TransactionsRequestBuilder;
use Leadping\OpenApiClient\Usage\UsageRequestBuilder;
use Leadping\OpenApiClient\Users\UsersRequestBuilder;
use Leadping\OpenApiClient\Wallets\WalletsRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Serialization\Form\FormParseNodeFactory;
use Microsoft\Kiota\Serialization\Form\FormSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Multipart\MultipartSerializationWriterFactory;
use Microsoft\Kiota\Serialization\Text\TextParseNodeFactory;
use Microsoft\Kiota\Serialization\Text\TextSerializationWriterFactory;

/**
 * The main entry point of the SDK, exposes the configuration and the fluent API.
*/
class LeadpingOpenApiClient extends BaseRequestBuilder 
{
    /**
     * The analytics property
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The automations property
    */
    public function automations(): AutomationsRequestBuilder {
        return new AutomationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The businesses property
    */
    public function businesses(): BusinessesRequestBuilder {
        return new BusinessesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The contact property
    */
    public function contact(): ContactRequestBuilder {
        return new ContactRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The conversations property
    */
    public function conversations(): ConversationsRequestBuilder {
        return new ConversationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dispositions property
    */
    public function dispositions(): DispositionsRequestBuilder {
        return new DispositionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The events property
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The feedback property
    */
    public function feedback(): FeedbackRequestBuilder {
        return new FeedbackRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The leads property
    */
    public function leads(): LeadsRequestBuilder {
        return new LeadsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The notifications property
    */
    public function notifications(): NotificationsRequestBuilder {
        return new NotificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The outbound property
    */
    public function outbound(): OutboundRequestBuilder {
        return new OutboundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The paymentMethods property
    */
    public function paymentMethods(): PaymentMethodsRequestBuilder {
        return new PaymentMethodsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The phoneNumbers property
    */
    public function phoneNumbers(): PhoneNumbersRequestBuilder {
        return new PhoneNumbersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reports property
    */
    public function reports(): ReportsRequestBuilder {
        return new ReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sms property
    */
    public function sms(): SmsRequestBuilder {
        return new SmsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sources property
    */
    public function sources(): SourcesRequestBuilder {
        return new SourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tags property
    */
    public function tags(): TagsRequestBuilder {
        return new TagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transactions property
    */
    public function transactions(): TransactionsRequestBuilder {
        return new TransactionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The usage property
    */
    public function usage(): UsageRequestBuilder {
        return new UsageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The users property
    */
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The wallets property
    */
    public function wallets(): WalletsRequestBuilder {
        return new WalletsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new LeadpingOpenApiClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}');
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(TextSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(FormSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultSerializer(MultipartSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(TextParseNodeFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(FormParseNodeFactory::class);
        if (empty($this->requestAdapter->getBaseUrl())) {
            $this->requestAdapter->setBaseUrl('https://api.leadping.ai');
        }
        $this->pathParameters['baseurl'] = $this->requestAdapter->getBaseUrl();
    }

}
