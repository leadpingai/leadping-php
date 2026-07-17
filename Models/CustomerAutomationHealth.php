<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents customer automation health data exposed by Leadping analytics.
*/
class CustomerAutomationHealth implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $automationCount Total number of automation records represented by this Leadping customer automation health.
    */
    private ?int $automationCount = null;
    
    /**
     * @var int|null $enabledCount Total number of enabled records represented by this Leadping customer automation health.
    */
    private ?int $enabledCount = null;
    
    /**
     * @var int|null $executions Number of executions represented by this Leadping customer automation health.
    */
    private ?int $executions = null;
    
    /**
     * @var array<CustomerFailingAutomation>|null $failingAutomations Collection of failing automations included with this Leadping customer automation health.
    */
    private ?array $failingAutomations = null;
    
    /**
     * @var int|null $failureCount Total number of failure records represented by this Leadping customer automation health.
    */
    private ?int $failureCount = null;
    
    /**
     * @var CustomerAutomationHealth_lastFailure|null $lastFailure Last failure associated with this Leadping customer automation health.
    */
    private ?CustomerAutomationHealth_lastFailure $lastFailure = null;
    
    /**
     * @var int|null $successCount Total number of success records represented by this Leadping customer automation health.
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
     * Gets the automationCount property value. Total number of automation records represented by this Leadping customer automation health.
     * @return int|null
    */
    public function getAutomationCount(): ?int {
        return $this->automationCount;
    }

    /**
     * Gets the enabledCount property value. Total number of enabled records represented by this Leadping customer automation health.
     * @return int|null
    */
    public function getEnabledCount(): ?int {
        return $this->enabledCount;
    }

    /**
     * Gets the executions property value. Number of executions represented by this Leadping customer automation health.
     * @return int|null
    */
    public function getExecutions(): ?int {
        return $this->executions;
    }

    /**
     * Gets the failingAutomations property value. Collection of failing automations included with this Leadping customer automation health.
     * @return array<CustomerFailingAutomation>|null
    */
    public function getFailingAutomations(): ?array {
        return $this->failingAutomations;
    }

    /**
     * Gets the failureCount property value. Total number of failure records represented by this Leadping customer automation health.
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
     * Gets the lastFailure property value. Last failure associated with this Leadping customer automation health.
     * @return CustomerAutomationHealth_lastFailure|null
    */
    public function getLastFailure(): ?CustomerAutomationHealth_lastFailure {
        return $this->lastFailure;
    }

    /**
     * Gets the successCount property value. Total number of success records represented by this Leadping customer automation health.
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
     * Sets the automationCount property value. Total number of automation records represented by this Leadping customer automation health.
     * @param int|null $value Value to set for the automationCount property.
    */
    public function setAutomationCount(?int $value): void {
        $this->automationCount = $value;
    }

    /**
     * Sets the enabledCount property value. Total number of enabled records represented by this Leadping customer automation health.
     * @param int|null $value Value to set for the enabledCount property.
    */
    public function setEnabledCount(?int $value): void {
        $this->enabledCount = $value;
    }

    /**
     * Sets the executions property value. Number of executions represented by this Leadping customer automation health.
     * @param int|null $value Value to set for the executions property.
    */
    public function setExecutions(?int $value): void {
        $this->executions = $value;
    }

    /**
     * Sets the failingAutomations property value. Collection of failing automations included with this Leadping customer automation health.
     * @param array<CustomerFailingAutomation>|null $value Value to set for the failingAutomations property.
    */
    public function setFailingAutomations(?array $value): void {
        $this->failingAutomations = $value;
    }

    /**
     * Sets the failureCount property value. Total number of failure records represented by this Leadping customer automation health.
     * @param int|null $value Value to set for the failureCount property.
    */
    public function setFailureCount(?int $value): void {
        $this->failureCount = $value;
    }

    /**
     * Sets the lastFailure property value. Last failure associated with this Leadping customer automation health.
     * @param CustomerAutomationHealth_lastFailure|null $value Value to set for the lastFailure property.
    */
    public function setLastFailure(?CustomerAutomationHealth_lastFailure $value): void {
        $this->lastFailure = $value;
    }

    /**
     * Sets the successCount property value. Total number of success records represented by this Leadping customer automation health.
     * @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value): void {
        $this->successCount = $value;
    }

}
