<?php

namespace Leadping\OpenApiClient\PhoneCall\Item\Transfer;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TransferRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TransferRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?TransferRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TransferRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TransferRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TransferRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TransferRequestBuilderPostQueryParameters.
     * @param string|null $newPhoneNumber The phone number to transfer the call to.
     * @return TransferRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $newPhoneNumber = null): TransferRequestBuilderPostQueryParameters {
        return new TransferRequestBuilderPostQueryParameters($newPhoneNumber);
    }

}
