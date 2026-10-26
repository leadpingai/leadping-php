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
     * @var float|null $dailyLimit The dailyLimit property
    */
    private ?float $dailyLimit = null;
    
    /**
     * @var DateTime|null $dailyResetsAt The dailyResetsAt property
    */
    private ?DateTime $dailyResetsAt = null;
    
    /**
     * @var float|null $dailySpent The dailySpent property
    */
    private ?float $dailySpent = null;
    
    /**
     * @var float|null $monthlyLimit The monthlyLimit property
    */
    private ?float $monthlyLimit = null;
    
    /**
     * @var DateTime|null $monthlyResetsAt The monthlyResetsAt property
    */
    private ?DateTime $monthlyResetsAt = null;
    
    /**
     * @var float|null $monthlySpent The monthlySpent property
    */
    private ?float $monthlySpent = null;
    
    /**
     * @var float|null $reserved The reserved property
    */
    private ?float $reserved = null;
    
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
     * Gets the dailyLimit property value. The dailyLimit property
     * @return float|null
    */
    public function getDailyLimit(): ?float {
        return $this->dailyLimit;
    }

    /**
     * Gets the dailyResetsAt property value. The dailyResetsAt property
     * @return DateTime|null
    */
    public function getDailyResetsAt(): ?DateTime {
        return $this->dailyResetsAt;
    }

    /**
     * Gets the dailySpent property value. The dailySpent property
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
            'dailyLimit' => fn(ParseNode $n) => $o->setDailyLimit($n->getFloatValue()),
            'dailyResetsAt' => fn(ParseNode $n) => $o->setDailyResetsAt($n->getDateTimeValue()),
            'dailySpent' => fn(ParseNode $n) => $o->setDailySpent($n->getFloatValue()),
            'monthlyLimit' => fn(ParseNode $n) => $o->setMonthlyLimit($n->getFloatValue()),
            'monthlyResetsAt' => fn(ParseNode $n) => $o->setMonthlyResetsAt($n->getDateTimeValue()),
            'monthlySpent' => fn(ParseNode $n) => $o->setMonthlySpent($n->getFloatValue()),
            'reserved' => fn(ParseNode $n) => $o->setReserved($n->getFloatValue()),
        ];
    }

    /**
     * Gets the monthlyLimit property value. The monthlyLimit property
     * @return float|null
    */
    public function getMonthlyLimit(): ?float {
        return $this->monthlyLimit;
    }

    /**
     * Gets the monthlyResetsAt property value. The monthlyResetsAt property
     * @return DateTime|null
    */
    public function getMonthlyResetsAt(): ?DateTime {
        return $this->monthlyResetsAt;
    }

    /**
     * Gets the monthlySpent property value. The monthlySpent property
     * @return float|null
    */
    public function getMonthlySpent(): ?float {
        return $this->monthlySpent;
    }

    /**
     * Gets the reserved property value. The reserved property
     * @return float|null
    */
    public function getReserved(): ?float {
        return $this->reserved;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('dailyLimit', $this->getDailyLimit());
        $writer->writeDateTimeValue('dailyResetsAt', $this->getDailyResetsAt());
        $writer->writeFloatValue('dailySpent', $this->getDailySpent());
        $writer->writeFloatValue('monthlyLimit', $this->getMonthlyLimit());
        $writer->writeDateTimeValue('monthlyResetsAt', $this->getMonthlyResetsAt());
        $writer->writeFloatValue('monthlySpent', $this->getMonthlySpent());
        $writer->writeFloatValue('reserved', $this->getReserved());
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
     * Sets the dailyLimit property value. The dailyLimit property
     * @param float|null $value Value to set for the dailyLimit property.
    */
    public function setDailyLimit(?float $value): void {
        $this->dailyLimit = $value;
    }

    /**
     * Sets the dailyResetsAt property value. The dailyResetsAt property
     * @param DateTime|null $value Value to set for the dailyResetsAt property.
    */
    public function setDailyResetsAt(?DateTime $value): void {
        $this->dailyResetsAt = $value;
    }

    /**
     * Sets the dailySpent property value. The dailySpent property
     * @param float|null $value Value to set for the dailySpent property.
    */
    public function setDailySpent(?float $value): void {
        $this->dailySpent = $value;
    }

    /**
     * Sets the monthlyLimit property value. The monthlyLimit property
     * @param float|null $value Value to set for the monthlyLimit property.
    */
    public function setMonthlyLimit(?float $value): void {
        $this->monthlyLimit = $value;
    }

    /**
     * Sets the monthlyResetsAt property value. The monthlyResetsAt property
     * @param DateTime|null $value Value to set for the monthlyResetsAt property.
    */
    public function setMonthlyResetsAt(?DateTime $value): void {
        $this->monthlyResetsAt = $value;
    }

    /**
     * Sets the monthlySpent property value. The monthlySpent property
     * @param float|null $value Value to set for the monthlySpent property.
    */
    public function setMonthlySpent(?float $value): void {
        $this->monthlySpent = $value;
    }

    /**
     * Sets the reserved property value. The reserved property
     * @param float|null $value Value to set for the reserved property.
    */
    public function setReserved(?float $value): void {
        $this->reserved = $value;
    }

}
