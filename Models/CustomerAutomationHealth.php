<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomerAutomationHealth implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $automationCount The automationCount property
    */
    private ?int $automationCount = null;
    
    /**
     * @var int|null $enabledCount The enabledCount property
    */
    private ?int $enabledCount = null;
    
    /**
     * @var int|null $executions The executions property
    */
    private ?int $executions = null;
    
    /**
     * @var array<CustomerFailingAutomation>|null $failingAutomations The failingAutomations property
    */
    private ?array $failingAutomations = null;
    
    /**
     * @var int|null $failureCount The failureCount property
    */
    private ?int $failureCount = null;
    
    /**
     * @var CustomerAutomationHealth_lastFailure|null $lastFailure The lastFailure property
    */
    private ?CustomerAutomationHealth_lastFailure $lastFailure = null;
    
    /**
     * @var int|null $successCount The successCount property
    */
    private ?int $successCount = null;
    
    /**
     * Instantiates a new CustomerAutomationHealth and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerAutomationHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerAutomationHealth {
        return new CustomerAutomationHealth();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the automationCount property value. The automationCount property
     * @return int|null
    */
    public function getAutomationCount(): ?int {
        return $this->automationCount;
    }

    /**
     * Gets the enabledCount property value. The enabledCount property
     * @return int|null
    */
    public function getEnabledCount(): ?int {
        return $this->enabledCount;
    }

    /**
     * Gets the executions property value. The executions property
     * @return int|null
    */
    public function getExecutions(): ?int {
        return $this->executions;
    }

    /**
     * Gets the failingAutomations property value. The failingAutomations property
     * @return array<CustomerFailingAutomation>|null
    */
    public function getFailingAutomations(): ?array {
        return $this->failingAutomations;
    }

    /**
     * Gets the failureCount property value. The failureCount property
     * @return int|null
    */
    public function getFailureCount(): ?int {
        return $this->failureCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automationCount' => fn(ParseNode $n) => $o->setAutomationCount($n->getIntegerValue()),
            'enabledCount' => fn(ParseNode $n) => $o->setEnabledCount($n->getIntegerValue()),
            'executions' => fn(ParseNode $n) => $o->setExecutions($n->getIntegerValue()),
            'failingAutomations' => fn(ParseNode $n) => $o->setFailingAutomations($n->getCollectionOfObjectValues([CustomerFailingAutomation::class, 'createFromDiscriminatorValue'])),
            'failureCount' => fn(ParseNode $n) => $o->setFailureCount($n->getIntegerValue()),
            'lastFailure' => fn(ParseNode $n) => $o->setLastFailure($n->getObjectValue([CustomerAutomationHealth_lastFailure::class, 'createFromDiscriminatorValue'])),
            'successCount' => fn(ParseNode $n) => $o->setSuccessCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the lastFailure property value. The lastFailure property
     * @return CustomerAutomationHealth_lastFailure|null
    */
    public function getLastFailure(): ?CustomerAutomationHealth_lastFailure {
        return $this->lastFailure;
    }

    /**
     * Gets the successCount property value. The successCount property
     * @return int|null
    */
    public function getSuccessCount(): ?int {
        return $this->successCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('automationCount', $this->getAutomationCount());
        $writer->writeIntegerValue('enabledCount', $this->getEnabledCount());
        $writer->writeIntegerValue('executions', $this->getExecutions());
        $writer->writeCollectionOfObjectValues('failingAutomations', $this->getFailingAutomations());
        $writer->writeIntegerValue('failureCount', $this->getFailureCount());
        $writer->writeObjectValue('lastFailure', $this->getLastFailure());
        $writer->writeIntegerValue('successCount', $this->getSuccessCount());
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
     * Sets the automationCount property value. The automationCount property
     * @param int|null $value Value to set for the automationCount property.
    */
    public function setAutomationCount(?int $value): void {
        $this->automationCount = $value;
    }

    /**
     * Sets the enabledCount property value. The enabledCount property
     * @param int|null $value Value to set for the enabledCount property.
    */
    public function setEnabledCount(?int $value): void {
        $this->enabledCount = $value;
    }

    /**
     * Sets the executions property value. The executions property
     * @param int|null $value Value to set for the executions property.
    */
    public function setExecutions(?int $value): void {
        $this->executions = $value;
    }

    /**
     * Sets the failingAutomations property value. The failingAutomations property
     * @param array<CustomerFailingAutomation>|null $value Value to set for the failingAutomations property.
    */
    public function setFailingAutomations(?array $value): void {
        $this->failingAutomations = $value;
    }

    /**
     * Sets the failureCount property value. The failureCount property
     * @param int|null $value Value to set for the failureCount property.
    */
    public function setFailureCount(?int $value): void {
        $this->failureCount = $value;
    }

    /**
     * Sets the lastFailure property value. The lastFailure property
     * @param CustomerAutomationHealth_lastFailure|null $value Value to set for the lastFailure property.
    */
    public function setLastFailure(?CustomerAutomationHealth_lastFailure $value): void {
        $this->lastFailure = $value;
    }

    /**
     * Sets the successCount property value. The successCount property
     * @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value): void {
        $this->successCount = $value;
    }

}
