<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * The service or purchase requested by a lead.
*/
class LeadInquiry implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $budgetMaximum Maximum budget in the specified currency.
    */
    private ?float $budgetMaximum = null;
    
    /**
     * @var float|null $budgetMinimum Minimum budget in the specified currency.
    */
    private ?float $budgetMinimum = null;
    
    /**
     * @var string|null $currency ISO 4217 currency code for the budget.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $description Description of the requested work or purchase.
    */
    private ?string $description = null;
    
    /**
     * @var Date|null $desiredStartDate Requested start date.
    */
    private ?Date $desiredStartDate = null;
    
    /**
     * @var string|null $service Requested service or product.
    */
    private ?string $service = null;
    
    /**
     * @var LeadInquiry_urgency|null $urgency Supported LeadUrgency values.
    */
    private ?LeadInquiry_urgency $urgency = null;
    
    /**
     * Instantiates a new LeadInquiry and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadInquiry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadInquiry {
        return new LeadInquiry();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the budgetMaximum property value. Maximum budget in the specified currency.
     * @return float|null
    */
    public function getBudgetMaximum(): ?float {
        return $this->budgetMaximum;
    }

    /**
     * Gets the budgetMinimum property value. Minimum budget in the specified currency.
     * @return float|null
    */
    public function getBudgetMinimum(): ?float {
        return $this->budgetMinimum;
    }

    /**
     * Gets the currency property value. ISO 4217 currency code for the budget.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the description property value. Description of the requested work or purchase.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the desiredStartDate property value. Requested start date.
     * @return Date|null
    */
    public function getDesiredStartDate(): ?Date {
        return $this->desiredStartDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'budgetMaximum' => fn(ParseNode $n) => $o->setBudgetMaximum($n->getFloatValue()),
            'budgetMinimum' => fn(ParseNode $n) => $o->setBudgetMinimum($n->getFloatValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'desiredStartDate' => fn(ParseNode $n) => $o->setDesiredStartDate($n->getDateValue()),
            'service' => fn(ParseNode $n) => $o->setService($n->getStringValue()),
            'urgency' => fn(ParseNode $n) => $o->setUrgency($n->getEnumValue(LeadInquiry_urgency::class)),
        ];
    }

    /**
     * Gets the service property value. Requested service or product.
     * @return string|null
    */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Gets the urgency property value. Supported LeadUrgency values.
     * @return LeadInquiry_urgency|null
    */
    public function getUrgency(): ?LeadInquiry_urgency {
        return $this->urgency;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('budgetMaximum', $this->getBudgetMaximum());
        $writer->writeFloatValue('budgetMinimum', $this->getBudgetMinimum());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeDateValue('desiredStartDate', $this->getDesiredStartDate());
        $writer->writeStringValue('service', $this->getService());
        $writer->writeEnumValue('urgency', $this->getUrgency());
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
     * Sets the budgetMaximum property value. Maximum budget in the specified currency.
     * @param float|null $value Value to set for the budgetMaximum property.
    */
    public function setBudgetMaximum(?float $value): void {
        $this->budgetMaximum = $value;
    }

    /**
     * Sets the budgetMinimum property value. Minimum budget in the specified currency.
     * @param float|null $value Value to set for the budgetMinimum property.
    */
    public function setBudgetMinimum(?float $value): void {
        $this->budgetMinimum = $value;
    }

    /**
     * Sets the currency property value. ISO 4217 currency code for the budget.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the description property value. Description of the requested work or purchase.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the desiredStartDate property value. Requested start date.
     * @param Date|null $value Value to set for the desiredStartDate property.
    */
    public function setDesiredStartDate(?Date $value): void {
        $this->desiredStartDate = $value;
    }

    /**
     * Sets the service property value. Requested service or product.
     * @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value): void {
        $this->service = $value;
    }

    /**
     * Sets the urgency property value. Supported LeadUrgency values.
     * @param LeadInquiry_urgency|null $value Value to set for the urgency property.
    */
    public function setUrgency(?LeadInquiry_urgency $value): void {
        $this->urgency = $value;
    }

}
