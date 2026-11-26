<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * UTC calendar usage budgets, settled spend, and pending usage reservations in USD.
*/
class SpendLimitsResponse implements AdditionalDataHolder, Parsable 
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
     * @var float|null $callingUsed Settled calling charges this period plus pending calling reservations.
    */
    private ?float $callingUsed = null;
    
    /**
     * @var float|null $dailyLimit Daily usage budget in USD. Null means no daily limit; zero stops new paid usage.
    */
    private ?float $dailyLimit = null;
    
    /**
     * @var DateTime|null $dailyResetsAt UTC timestamp when the next calendar day begins and daily spending resets.
    */
    private ?DateTime $dailyResetsAt = null;
    
    /**
     * @var float|null $dailySpent Settled usage spending in USD for the current UTC calendar day.
    */
    private ?float $dailySpent = null;
    
    /**
     * @var float|null $monthlyLimit Monthly usage budget in USD. Null means no monthly limit; zero stops new paid usage.
    */
    private ?float $monthlyLimit = null;
    
    /**
     * @var DateTime|null $monthlyResetsAt UTC timestamp when the next calendar month begins and monthly spending resets.
    */
    private ?DateTime $monthlyResetsAt = null;
    
    /**
     * @var float|null $monthlySpent Settled usage spending in USD for the current UTC calendar month.
    */
    private ?float $monthlySpent = null;
    
    /**
     * @var float|null $reserved Pending usage reservations in USD.
    */
    private ?float $reserved = null;
    
    /**
     * @var float|null $textingLimit Optional texting budget in USD.
    */
    private ?float $textingLimit = null;
    
    /**
     * @var SpendPeriod|null $textingPeriod Calendar period for an organization channel budget, in UTC.
    */
    private ?SpendPeriod $textingPeriod = null;
    
    /**
     * @var float|null $textingUsed Settled texting charges this period plus pending texting reservations.
    */
    private ?float $textingUsed = null;
    
    /**
     * Instantiates a new SpendLimitsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SpendLimitsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SpendLimitsResponse {
        return new SpendLimitsResponse();
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
     * Gets the callingUsed property value. Settled calling charges this period plus pending calling reservations.
     * @return float|null
    */
    public function getCallingUsed(): ?float {
        return $this->callingUsed;
    }

    /**
     * Gets the dailyLimit property value. Daily usage budget in USD. Null means no daily limit; zero stops new paid usage.
     * @return float|null
    */
    public function getDailyLimit(): ?float {
        return $this->dailyLimit;
    }

    /**
     * Gets the dailyResetsAt property value. UTC timestamp when the next calendar day begins and daily spending resets.
     * @return DateTime|null
    */
    public function getDailyResetsAt(): ?DateTime {
        return $this->dailyResetsAt;
    }

    /**
     * Gets the dailySpent property value. Settled usage spending in USD for the current UTC calendar day.
     * @return float|null
    */
    public function getDailySpent(): ?float {
        return $this->dailySpent;
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
            'callingUsed' => fn(ParseNode $n) => $o->setCallingUsed($n->getFloatValue()),
            'dailyLimit' => fn(ParseNode $n) => $o->setDailyLimit($n->getFloatValue()),
            'dailyResetsAt' => fn(ParseNode $n) => $o->setDailyResetsAt($n->getDateTimeValue()),
            'dailySpent' => fn(ParseNode $n) => $o->setDailySpent($n->getFloatValue()),
            'monthlyLimit' => fn(ParseNode $n) => $o->setMonthlyLimit($n->getFloatValue()),
            'monthlyResetsAt' => fn(ParseNode $n) => $o->setMonthlyResetsAt($n->getDateTimeValue()),
            'monthlySpent' => fn(ParseNode $n) => $o->setMonthlySpent($n->getFloatValue()),
            'reserved' => fn(ParseNode $n) => $o->setReserved($n->getFloatValue()),
            'textingLimit' => fn(ParseNode $n) => $o->setTextingLimit($n->getFloatValue()),
            'textingPeriod' => fn(ParseNode $n) => $o->setTextingPeriod($n->getEnumValue(SpendPeriod::class)),
            'textingUsed' => fn(ParseNode $n) => $o->setTextingUsed($n->getFloatValue()),
        ];
    }

    /**
     * Gets the monthlyLimit property value. Monthly usage budget in USD. Null means no monthly limit; zero stops new paid usage.
     * @return float|null
    */
    public function getMonthlyLimit(): ?float {
        return $this->monthlyLimit;
    }

    /**
     * Gets the monthlyResetsAt property value. UTC timestamp when the next calendar month begins and monthly spending resets.
     * @return DateTime|null
    */
    public function getMonthlyResetsAt(): ?DateTime {
        return $this->monthlyResetsAt;
    }

    /**
     * Gets the monthlySpent property value. Settled usage spending in USD for the current UTC calendar month.
     * @return float|null
    */
    public function getMonthlySpent(): ?float {
        return $this->monthlySpent;
    }

    /**
     * Gets the reserved property value. Pending usage reservations in USD.
     * @return float|null
    */
    public function getReserved(): ?float {
        return $this->reserved;
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
     * Gets the textingUsed property value. Settled texting charges this period plus pending texting reservations.
     * @return float|null
    */
    public function getTextingUsed(): ?float {
        return $this->textingUsed;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('callingLimit', $this->getCallingLimit());
        $writer->writeEnumValue('callingPeriod', $this->getCallingPeriod());
        $writer->writeFloatValue('callingUsed', $this->getCallingUsed());
        $writer->writeFloatValue('dailyLimit', $this->getDailyLimit());
        $writer->writeDateTimeValue('dailyResetsAt', $this->getDailyResetsAt());
        $writer->writeFloatValue('dailySpent', $this->getDailySpent());
        $writer->writeFloatValue('monthlyLimit', $this->getMonthlyLimit());
        $writer->writeDateTimeValue('monthlyResetsAt', $this->getMonthlyResetsAt());
        $writer->writeFloatValue('monthlySpent', $this->getMonthlySpent());
        $writer->writeFloatValue('reserved', $this->getReserved());
        $writer->writeFloatValue('textingLimit', $this->getTextingLimit());
        $writer->writeEnumValue('textingPeriod', $this->getTextingPeriod());
        $writer->writeFloatValue('textingUsed', $this->getTextingUsed());
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
     * Sets the callingUsed property value. Settled calling charges this period plus pending calling reservations.
     * @param float|null $value Value to set for the callingUsed property.
    */
    public function setCallingUsed(?float $value): void {
        $this->callingUsed = $value;
    }

    /**
     * Sets the dailyLimit property value. Daily usage budget in USD. Null means no daily limit; zero stops new paid usage.
     * @param float|null $value Value to set for the dailyLimit property.
    */
    public function setDailyLimit(?float $value): void {
        $this->dailyLimit = $value;
    }

    /**
     * Sets the dailyResetsAt property value. UTC timestamp when the next calendar day begins and daily spending resets.
     * @param DateTime|null $value Value to set for the dailyResetsAt property.
    */
    public function setDailyResetsAt(?DateTime $value): void {
        $this->dailyResetsAt = $value;
    }

    /**
     * Sets the dailySpent property value. Settled usage spending in USD for the current UTC calendar day.
     * @param float|null $value Value to set for the dailySpent property.
    */
    public function setDailySpent(?float $value): void {
        $this->dailySpent = $value;
    }

    /**
     * Sets the monthlyLimit property value. Monthly usage budget in USD. Null means no monthly limit; zero stops new paid usage.
     * @param float|null $value Value to set for the monthlyLimit property.
    */
    public function setMonthlyLimit(?float $value): void {
        $this->monthlyLimit = $value;
    }

    /**
     * Sets the monthlyResetsAt property value. UTC timestamp when the next calendar month begins and monthly spending resets.
     * @param DateTime|null $value Value to set for the monthlyResetsAt property.
    */
    public function setMonthlyResetsAt(?DateTime $value): void {
        $this->monthlyResetsAt = $value;
    }

    /**
     * Sets the monthlySpent property value. Settled usage spending in USD for the current UTC calendar month.
     * @param float|null $value Value to set for the monthlySpent property.
    */
    public function setMonthlySpent(?float $value): void {
        $this->monthlySpent = $value;
    }

    /**
     * Sets the reserved property value. Pending usage reservations in USD.
     * @param float|null $value Value to set for the reserved property.
    */
    public function setReserved(?float $value): void {
        $this->reserved = $value;
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

    /**
     * Sets the textingUsed property value. Settled texting charges this period plus pending texting reservations.
     * @param float|null $value Value to set for the textingUsed property.
    */
    public function setTextingUsed(?float $value): void {
        $this->textingUsed = $value;
    }

}
