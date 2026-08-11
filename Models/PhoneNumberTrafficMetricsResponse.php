<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes phone number traffic metrics data returned by Leadping.
*/
class PhoneNumberTrafficMetricsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<PhoneNumberTrafficTrendPoint>|null $trend Time-series buckets that show how the metric changes across the reporting window.
    */
    private ?array $trend = null;
    
    /**
     * @var DateTime|null $windowStartedAt UTC timestamp when the metrics reporting window starts.
    */
    private ?DateTime $windowStartedAt = null;
    
    /**
     * Instantiates a new PhoneNumberTrafficMetricsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberTrafficMetricsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberTrafficMetricsResponse {
        return new PhoneNumberTrafficMetricsResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'trend' => fn(ParseNode $n) => $o->setTrend($n->getCollectionOfObjectValues([PhoneNumberTrafficTrendPoint::class, 'createFromDiscriminatorValue'])),
            'windowStartedAt' => fn(ParseNode $n) => $o->setWindowStartedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the trend property value. Time-series buckets that show how the metric changes across the reporting window.
     * @return array<PhoneNumberTrafficTrendPoint>|null
    */
    public function getTrend(): ?array {
        return $this->trend;
    }

    /**
     * Gets the windowStartedAt property value. UTC timestamp when the metrics reporting window starts.
     * @return DateTime|null
    */
    public function getWindowStartedAt(): ?DateTime {
        return $this->windowStartedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('trend', $this->getTrend());
        $writer->writeDateTimeValue('windowStartedAt', $this->getWindowStartedAt());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the trend property value. Time-series buckets that show how the metric changes across the reporting window.
     * @param array<PhoneNumberTrafficTrendPoint>|null $value Value to set for the trend property.
    */
    public function setTrend(?array $value): void {
        $this->trend = $value;
    }

    /**
     * Sets the windowStartedAt property value. UTC timestamp when the metrics reporting window starts.
     * @param DateTime|null $value Value to set for the windowStartedAt property.
    */
    public function setWindowStartedAt(?DateTime $value): void {
        $this->windowStartedAt = $value;
    }

}
