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
     * @var float|null $dailyLimit The dailyLimit property
    */
    private ?float $dailyLimit = null;
    
    /**
     * @var float|null $monthlyLimit The monthlyLimit property
    */
    private ?float $monthlyLimit = null;
    
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
     * Gets the dailyLimit property value. The dailyLimit property
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
            'dailyLimit' => fn(ParseNode $n) => $o->setDailyLimit($n->getFloatValue()),
            'monthlyLimit' => fn(ParseNode $n) => $o->setMonthlyLimit($n->getFloatValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('dailyLimit', $this->getDailyLimit());
        $writer->writeFloatValue('monthlyLimit', $this->getMonthlyLimit());
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
     * Sets the monthlyLimit property value. The monthlyLimit property
     * @param float|null $value Value to set for the monthlyLimit property.
    */
    public function setMonthlyLimit(?float $value): void {
        $this->monthlyLimit = $value;
    }

}
