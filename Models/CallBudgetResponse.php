<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes a restriction on starting a call, including the calendar reset when applicable.
*/
class CallBudgetResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $reason The reason property
    */
    private ?string $reason = null;
    
    /**
     * @var DateTime|null $resetsAt The resetsAt property
    */
    private ?DateTime $resetsAt = null;
    
    /**
     * Instantiates a new CallBudgetResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallBudgetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallBudgetResponse {
        return new CallBudgetResponse();
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
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'resetsAt' => fn(ParseNode $n) => $o->setResetsAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the reason property value. The reason property
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the resetsAt property value. The resetsAt property
     * @return DateTime|null
    */
    public function getResetsAt(): ?DateTime {
        return $this->resetsAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeDateTimeValue('resetsAt', $this->getResetsAt());
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
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the resetsAt property value. The resetsAt property
     * @param DateTime|null $value Value to set for the resetsAt property.
    */
    public function setResetsAt(?DateTime $value): void {
        $this->resetsAt = $value;
    }

}
