<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Admin override that can enable or disable this record independently of normal status checks.
*/
class AdminEnablementOverride implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $enabled The enabled property
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $reason The reason property
    */
    private ?string $reason = null;
    
    /**
     * @var DateTime|null $updatedAt The updatedAt property
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * @var string|null $updatedByUserId The updatedByUserId property
    */
    private ?string $updatedByUserId = null;
    
    /**
     * Instantiates a new AdminEnablementOverride and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminEnablementOverride
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminEnablementOverride {
        return new AdminEnablementOverride();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the enabled property value. The enabled property
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'updatedByUserId' => fn(ParseNode $n) => $o->setUpdatedByUserId($n->getStringValue()),
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
     * Gets the updatedAt property value. The updatedAt property
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updatedAt;
    }

    /**
     * Gets the updatedByUserId property value. The updatedByUserId property
     * @return string|null
    */
    public function getUpdatedByUserId(): ?string {
        return $this->updatedByUserId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeDateTimeValue('updatedAt', $this->getUpdatedAt());
        $writer->writeStringValue('updatedByUserId', $this->getUpdatedByUserId());
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
     * Sets the enabled property value. The enabled property
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the reason property value. The reason property
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the updatedAt property value. The updatedAt property
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

    /**
     * Sets the updatedByUserId property value. The updatedByUserId property
     * @param string|null $value Value to set for the updatedByUserId property.
    */
    public function setUpdatedByUserId(?string $value): void {
        $this->updatedByUserId = $value;
    }

}
