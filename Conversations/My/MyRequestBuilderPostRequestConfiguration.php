<?php

namespace Leadping\OpenApiClient\Conversations\My;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MyRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MyRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?MyRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MyRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MyRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MyRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MyRequestBuilderPostQueryParameters.
     * @param string|null $archiveFilter Optional filter selecting active, archived, or all lead conversations.
     * @param bool|null $contactable Whether to include only conversations where calling is available.
     * @param bool|null $priority Orders the full filtered inbox by the next action before paging.
     * @param string|null $selectedConversationId Optional selected thread to include when it still matches the priority inbox.
     * @param bool|null $textingAvailable Whether to include only conversations where texting is available.
     * @return MyRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $archiveFilter = null, ?bool $contactable = null, ?bool $priority = null, ?string $selectedConversationId = null, ?bool $textingAvailable = null): MyRequestBuilderPostQueryParameters {
        return new MyRequestBuilderPostQueryParameters($archiveFilter, $contactable, $priority, $selectedConversationId, $textingAvailable);
    }

}
