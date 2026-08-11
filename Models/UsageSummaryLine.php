<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes usage summary line data used in Leadping API requests and responses.
*/
class UsageSummaryLine implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BillableUnit|null $billableUnit Billable unit for this usage summary line.
    */
    private ?BillableUnit $billableUnit = null;
    
    /**
     * @var UsageChannel|null $channel Channel for this usage summary line.
    */
    private ?UsageChannel $channel = null;
    
    /**
     * @var UsageStatus|null $status The current status for this usage summary line.
    */
    private ?UsageStatus $status = null;
    
    /**
     * Instantiates a new UsageSummaryLine and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageSummaryLine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageSummaryLine {
        return new UsageSummaryLine();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billableUnit property value. Billable unit for this usage summary line.
     * @return BillableUnit|null
    */
    public function getBillableUnit(): ?BillableUnit {
        return $this->billableUnit;
    }

    /**
     * Gets the channel property value. Channel for this usage summary line.
     * @return UsageChannel|null
    */
    public function getChannel(): ?UsageChannel {
        return $this->channel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billableUnit' => fn(ParseNode $n) => $o->setBillableUnit($n->getEnumValue(BillableUnit::class)),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(UsageChannel::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(UsageStatus::class)),
        ];
    }

    /**
     * Gets the status property value. The current status for this usage summary line.
     * @return UsageStatus|null
    */
    public function getStatus(): ?UsageStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('billableUnit', $this->getBillableUnit());
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the billableUnit property value. Billable unit for this usage summary line.
     * @param BillableUnit|null $value Value to set for the billableUnit property.
    */
    public function setBillableUnit(?BillableUnit $value): void {
        $this->billableUnit = $value;
    }

    /**
     * Sets the channel property value. Channel for this usage summary line.
     * @param UsageChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?UsageChannel $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the status property value. The current status for this usage summary line.
     * @param UsageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?UsageStatus $value): void {
        $this->status = $value;
    }

}
