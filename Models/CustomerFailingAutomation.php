<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Last failure associated with this Leadping customer automation health.
*/
class CustomerFailingAutomation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $automationId Unique identifier of the automation associated with this Leadping customer failing automation.
    */
    private ?string $automationId = null;
    
    /**
     * @var string|null $error Error associated with this Leadping customer failing automation.
    */
    private ?string $error = null;
    
    /**
     * @var DateTime|null $failedAt Date and time when the customer failing automation failed.
    */
    private ?DateTime $failedAt = null;
    
    /**
     * @var string|null $name Human-readable name of the customer failing automation.
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new CustomerFailingAutomation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerFailingAutomation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerFailingAutomation {
        return new CustomerFailingAutomation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the automationId property value. Unique identifier of the automation associated with this Leadping customer failing automation.
     * @return string|null
    */
    public function getAutomationId(): ?string {
        return $this->automationId;
    }

    /**
     * Gets the error property value. Error associated with this Leadping customer failing automation.
     * @return string|null
    */
    public function getError(): ?string {
        return $this->error;
    }

    /**
     * Gets the failedAt property value. Date and time when the customer failing automation failed.
     * @return DateTime|null
    */
    public function getFailedAt(): ?DateTime {
        return $this->failedAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automationId' => fn(ParseNode $n) => $o->setAutomationId($n->getStringValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. Human-readable name of the customer failing automation.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('automationId', $this->getAutomationId());
        $writer->writeStringValue('error', $this->getError());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the automationId property value. Unique identifier of the automation associated with this Leadping customer failing automation.
     * @param string|null $value Value to set for the automationId property.
    */
    public function setAutomationId(?string $value): void {
        $this->automationId = $value;
    }

    /**
     * Sets the error property value. Error associated with this Leadping customer failing automation.
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->error = $value;
    }

    /**
     * Sets the failedAt property value. Date and time when the customer failing automation failed.
     * @param DateTime|null $value Value to set for the failedAt property.
    */
    public function setFailedAt(?DateTime $value): void {
        $this->failedAt = $value;
    }

    /**
     * Sets the name property value. Human-readable name of the customer failing automation.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
