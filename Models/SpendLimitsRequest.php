<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Organization usage budgets in USD. Null removes a limit; zero stops new paid usage.
*/
class SpendLimitsRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $callingLimit Optional calling budget in USD.
    */
    private ?float $callingLimit = null;
    
    /**
     * @var SpendPeriod|null $callingPeriod Calendar period for an organization channel budget, in UTC.
    */
    private ?SpendPeriod $callingPeriod = null;
    
    /**
     * @var float|null $dailyLimit Daily usage budget in USD for the UTC calendar day. Null removes the limit; zero stops new paid usage.
    */
    private ?float $dailyLimit = null;
    
    /**
     * @var float|null $monthlyLimit Monthly usage budget in USD for the UTC calendar month. Null removes the limit; zero stops new paid usage.
    */
    private ?float $monthlyLimit = null;
    
    /**
     * @var float|null $textingLimit Optional texting budget in USD.
    */
    private ?float $textingLimit = null;
    
    /**
     * @var SpendPeriod|null $textingPeriod Calendar period for an organization channel budget, in UTC.
    */
    private ?SpendPeriod $textingPeriod = null;
    
    /**
     * Instantiates a new SpendLimitsRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SpendLimitsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SpendLimitsRequest {
        return new SpendLimitsRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callingLimit property value. Optional calling budget in USD.
     * @return float|null
    */
    public function getCallingLimit(): ?float {
        return $this->callingLimit;
    }

    /**
     * Gets the callingPeriod property value. Calendar period for an organization channel budget, in UTC.
     * @return SpendPeriod|null
    */
    public function getCallingPeriod(): ?SpendPeriod {
        return $this->callingPeriod;
    }

    /**
     * Gets the dailyLimit property value. Daily usage budget in USD for the UTC calendar day. Null removes the limit; zero stops new paid usage.
     * @return float|null
    */
    public function getDailyLimit(): ?float {
        return $this->dailyLimit;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callingLimit' => fn(ParseNode $n) => $o->setCallingLimit($n->getFloatValue()),
            'callingPeriod' => fn(ParseNode $n) => $o->setCallingPeriod($n->getEnumValue(SpendPeriod::class)),
            'dailyLimit' => fn(ParseNode $n) => $o->setDailyLimit($n->getFloatValue()),
            'monthlyLimit' => fn(ParseNode $n) => $o->setMonthlyLimit($n->getFloatValue()),
            'textingLimit' => fn(ParseNode $n) => $o->setTextingLimit($n->getFloatValue()),
            'textingPeriod' => fn(ParseNode $n) => $o->setTextingPeriod($n->getEnumValue(SpendPeriod::class)),
        ];
    }

    /**
     * Gets the monthlyLimit property value. Monthly usage budget in USD for the UTC calendar month. Null removes the limit; zero stops new paid usage.
     * @return float|null
    */
    public function getMonthlyLimit(): ?float {
        return $this->monthlyLimit;
    }

    /**
     * Gets the textingLimit property value. Optional texting budget in USD.
     * @return float|null
    */
    public function getTextingLimit(): ?float {
        return $this->textingLimit;
    }

    /**
     * Gets the textingPeriod property value. Calendar period for an organization channel budget, in UTC.
     * @return SpendPeriod|null
    */
    public function getTextingPeriod(): ?SpendPeriod {
        return $this->textingPeriod;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('callingLimit', $this->getCallingLimit());
        $writer->writeEnumValue('callingPeriod', $this->getCallingPeriod());
        $writer->writeFloatValue('dailyLimit', $this->getDailyLimit());
        $writer->writeFloatValue('monthlyLimit', $this->getMonthlyLimit());
        $writer->writeFloatValue('textingLimit', $this->getTextingLimit());
        $writer->writeEnumValue('textingPeriod', $this->getTextingPeriod());
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
     * Sets the callingLimit property value. Optional calling budget in USD.
     * @param float|null $value Value to set for the callingLimit property.
    */
    public function setCallingLimit(?float $value): void {
        $this->callingLimit = $value;
    }

    /**
     * Sets the callingPeriod property value. Calendar period for an organization channel budget, in UTC.
     * @param SpendPeriod|null $value Value to set for the callingPeriod property.
    */
    public function setCallingPeriod(?SpendPeriod $value): void {
        $this->callingPeriod = $value;
    }

    /**
     * Sets the dailyLimit property value. Daily usage budget in USD for the UTC calendar day. Null removes the limit; zero stops new paid usage.
     * @param float|null $value Value to set for the dailyLimit property.
    */
    public function setDailyLimit(?float $value): void {
        $this->dailyLimit = $value;
    }

    /**
     * Sets the monthlyLimit property value. Monthly usage budget in USD for the UTC calendar month. Null removes the limit; zero stops new paid usage.
     * @param float|null $value Value to set for the monthlyLimit property.
    */
    public function setMonthlyLimit(?float $value): void {
        $this->monthlyLimit = $value;
    }

    /**
     * Sets the textingLimit property value. Optional texting budget in USD.
     * @param float|null $value Value to set for the textingLimit property.
    */
    public function setTextingLimit(?float $value): void {
        $this->textingLimit = $value;
    }

    /**
     * Sets the textingPeriod property value. Calendar period for an organization channel budget, in UTC.
     * @param SpendPeriod|null $value Value to set for the textingPeriod property.
    */
    public function setTextingPeriod(?SpendPeriod $value): void {
        $this->textingPeriod = $value;
    }

}
