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
     * @var array<CustomerFailingAutomation>|null $failingAutomations Collection of failing automations included with this Leadping customer automation health.
    */
    private ?array $failingAutomations = null;
    
    /**
     * @var CustomerAutomationHealth_lastFailure|null $lastFailure Last failure associated with this Leadping customer automation health.
    */
    private ?CustomerAutomationHealth_lastFailure $lastFailure = null;
    
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
     * Gets the failingAutomations property value. Collection of failing automations included with this Leadping customer automation health.
     * @return array<CustomerFailingAutomation>|null
    */
    public function getFailingAutomations(): ?array {
        return $this->failingAutomations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failingAutomations' => fn(ParseNode $n) => $o->setFailingAutomations($n->getCollectionOfObjectValues([CustomerFailingAutomation::class, 'createFromDiscriminatorValue'])),
            'lastFailure' => fn(ParseNode $n) => $o->setLastFailure($n->getObjectValue([CustomerAutomationHealth_lastFailure::class, 'createFromDiscriminatorValue'])),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('failingAutomations', $this->getFailingAutomations());
        $writer->writeObjectValue('lastFailure', $this->getLastFailure());
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
     * Sets the failingAutomations property value. Collection of failing automations included with this Leadping customer automation health.
     * @param array<CustomerFailingAutomation>|null $value Value to set for the failingAutomations property.
    */
    public function setFailingAutomations(?array $value): void {
        $this->failingAutomations = $value;
    }

    /**
     * Sets the lastFailure property value. Last failure associated with this Leadping customer automation health.
     * @param CustomerAutomationHealth_lastFailure|null $value Value to set for the lastFailure property.
    */
    public function setLastFailure(?CustomerAutomationHealth_lastFailure $value): void {
        $this->lastFailure = $value;
    }

}
