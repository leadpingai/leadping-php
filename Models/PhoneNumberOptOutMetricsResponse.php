<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes phone number opt-out metrics data returned by Leadping.
*/
class PhoneNumberOptOutMetricsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $windowStartedAt UTC timestamp when the metrics reporting window starts.
    */
    private ?DateTime $windowStartedAt = null;
    
    /**
     * Instantiates a new PhoneNumberOptOutMetricsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberOptOutMetricsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberOptOutMetricsResponse {
        return new PhoneNumberOptOutMetricsResponse();
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
            'windowStartedAt' => fn(ParseNode $n) => $o->setWindowStartedAt($n->getDateTimeValue()),
        ];
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
     * Sets the windowStartedAt property value. UTC timestamp when the metrics reporting window starts.
     * @param DateTime|null $value Value to set for the windowStartedAt property.
    */
    public function setWindowStartedAt(?DateTime $value): void {
        $this->windowStartedAt = $value;
    }

}
