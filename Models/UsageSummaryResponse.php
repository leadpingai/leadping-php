<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes usage summary response data used by Leadping.
*/
class UsageSummaryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<UsageCounterLine>|null $counters The named usage counters included with this usage summary.
    */
    private ?array $counters = null;
    
    /**
     * @var array<UsageSummaryLine>|null $lines The lines included with this usage summary.
    */
    private ?array $lines = null;
    
    /**
     * @var DateTime|null $periodEnd UTC timestamp for period end on this usage summary.
    */
    private ?DateTime $periodEnd = null;
    
    /**
     * @var DateTime|null $periodStart UTC timestamp for period start on this usage summary.
    */
    private ?DateTime $periodStart = null;
    
    /**
     * Instantiates a new UsageSummaryResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageSummaryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageSummaryResponse {
        return new UsageSummaryResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the counters property value. The named usage counters included with this usage summary.
     * @return array<UsageCounterLine>|null
    */
    public function getCounters(): ?array {
        return $this->counters;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'counters' => fn(ParseNode $n) => $o->setCounters($n->getCollectionOfObjectValues([UsageCounterLine::class, 'createFromDiscriminatorValue'])),
            'lines' => fn(ParseNode $n) => $o->setLines($n->getCollectionOfObjectValues([UsageSummaryLine::class, 'createFromDiscriminatorValue'])),
            'periodEnd' => fn(ParseNode $n) => $o->setPeriodEnd($n->getDateTimeValue()),
            'periodStart' => fn(ParseNode $n) => $o->setPeriodStart($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the lines property value. The lines included with this usage summary.
     * @return array<UsageSummaryLine>|null
    */
    public function getLines(): ?array {
        return $this->lines;
    }

    /**
     * Gets the periodEnd property value. UTC timestamp for period end on this usage summary.
     * @return DateTime|null
    */
    public function getPeriodEnd(): ?DateTime {
        return $this->periodEnd;
    }

    /**
     * Gets the periodStart property value. UTC timestamp for period start on this usage summary.
     * @return DateTime|null
    */
    public function getPeriodStart(): ?DateTime {
        return $this->periodStart;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('counters', $this->getCounters());
        $writer->writeCollectionOfObjectValues('lines', $this->getLines());
        $writer->writeDateTimeValue('periodEnd', $this->getPeriodEnd());
        $writer->writeDateTimeValue('periodStart', $this->getPeriodStart());
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
     * Sets the counters property value. The named usage counters included with this usage summary.
     * @param array<UsageCounterLine>|null $value Value to set for the counters property.
    */
    public function setCounters(?array $value): void {
        $this->counters = $value;
    }

    /**
     * Sets the lines property value. The lines included with this usage summary.
     * @param array<UsageSummaryLine>|null $value Value to set for the lines property.
    */
    public function setLines(?array $value): void {
        $this->lines = $value;
    }

    /**
     * Sets the periodEnd property value. UTC timestamp for period end on this usage summary.
     * @param DateTime|null $value Value to set for the periodEnd property.
    */
    public function setPeriodEnd(?DateTime $value): void {
        $this->periodEnd = $value;
    }

    /**
     * Sets the periodStart property value. UTC timestamp for period start on this usage summary.
     * @param DateTime|null $value Value to set for the periodStart property.
    */
    public function setPeriodStart(?DateTime $value): void {
        $this->periodStart = $value;
    }

}
