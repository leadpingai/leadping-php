<?php

namespace Leadping\OpenApiClient\PaymentMethods\Invoices\Item\PdfAccess;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PdfAccessRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PdfAccessRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PdfAccessRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PdfAccessRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PdfAccessRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PdfAccessRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PdfAccessRequestBuilderGetQueryParameters.
     * @param bool|null $download 
     * @return PdfAccessRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $download = null): PdfAccessRequestBuilderGetQueryParameters {
        return new PdfAccessRequestBuilderGetQueryParameters($download);
    }

}
