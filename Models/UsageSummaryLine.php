<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing usage summary line data used by Leadping API contracts.
*/
class UsageSummaryLine implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BillableUnit|null $billableUnit The billable unit value for this usage summary line.
    */
    private ?BillableUnit $billableUnit = null;
    
    /**
     * @var UsageChannel|null $channel The channel value for this usage summary line.
    */
    private ?UsageChannel $channel = null;
    
    /**
     * @var float|null $customerChargeAmount The monetary customer charge amount for this usage summary line.
    */
    private ?float $customerChargeAmount = null;
    
    /**
     * @var float|null $internalCostAmount The monetary internal cost amount for this usage summary line.
    */
    private ?float $internalCostAmount = null;
    
    /**
     * @var float|null $providerCostAmount The monetary provider cost amount for this usage summary line.
    */
    private ?float $providerCostAmount = null;
    
    /**
     * @var float|null $quantity The quantity value for this usage summary line.
    */
    private ?float $quantity = null;
    
    /**
     * @var int|null $recordCount The record count for this usage summary line.
    */
    private ?int $recordCount = null;
    
    /**
     * @var UsageRecordStatus|null $status The current status for this usage summary line.
    */
    private ?UsageRecordStatus $status = null;
    
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
     * Gets the billableUnit property value. The billable unit value for this usage summary line.
     * @return BillableUnit|null
    */
    public function getBillableUnit(): ?BillableUnit {
        return $this->billableUnit;
    }

    /**
     * Gets the channel property value. The channel value for this usage summary line.
     * @return UsageChannel|null
    */
    public function getChannel(): ?UsageChannel {
        return $this->channel;
    }

    /**
     * Gets the customerChargeAmount property value. The monetary customer charge amount for this usage summary line.
     * @return float|null
    */
    public function getCustomerChargeAmount(): ?float {
        return $this->customerChargeAmount;
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
            'customerChargeAmount' => fn(ParseNode $n) => $o->setCustomerChargeAmount($n->getFloatValue()),
            'internalCostAmount' => fn(ParseNode $n) => $o->setInternalCostAmount($n->getFloatValue()),
            'providerCostAmount' => fn(ParseNode $n) => $o->setProviderCostAmount($n->getFloatValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getFloatValue()),
            'recordCount' => fn(ParseNode $n) => $o->setRecordCount($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(UsageRecordStatus::class)),
        ];
    }

    /**
     * Gets the internalCostAmount property value. The monetary internal cost amount for this usage summary line.
     * @return float|null
    */
    public function getInternalCostAmount(): ?float {
        return $this->internalCostAmount;
    }

    /**
     * Gets the providerCostAmount property value. The monetary provider cost amount for this usage summary line.
     * @return float|null
    */
    public function getProviderCostAmount(): ?float {
        return $this->providerCostAmount;
    }

    /**
     * Gets the quantity property value. The quantity value for this usage summary line.
     * @return float|null
    */
    public function getQuantity(): ?float {
        return $this->quantity;
    }

    /**
     * Gets the recordCount property value. The record count for this usage summary line.
     * @return int|null
    */
    public function getRecordCount(): ?int {
        return $this->recordCount;
    }

    /**
     * Gets the status property value. The current status for this usage summary line.
     * @return UsageRecordStatus|null
    */
    public function getStatus(): ?UsageRecordStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('billableUnit', $this->getBillableUnit());
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeFloatValue('customerChargeAmount', $this->getCustomerChargeAmount());
        $writer->writeFloatValue('internalCostAmount', $this->getInternalCostAmount());
        $writer->writeFloatValue('providerCostAmount', $this->getProviderCostAmount());
        $writer->writeFloatValue('quantity', $this->getQuantity());
        $writer->writeIntegerValue('recordCount', $this->getRecordCount());
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
     * Sets the billableUnit property value. The billable unit value for this usage summary line.
     * @param BillableUnit|null $value Value to set for the billableUnit property.
    */
    public function setBillableUnit(?BillableUnit $value): void {
        $this->billableUnit = $value;
    }

    /**
     * Sets the channel property value. The channel value for this usage summary line.
     * @param UsageChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?UsageChannel $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the customerChargeAmount property value. The monetary customer charge amount for this usage summary line.
     * @param float|null $value Value to set for the customerChargeAmount property.
    */
    public function setCustomerChargeAmount(?float $value): void {
        $this->customerChargeAmount = $value;
    }

    /**
     * Sets the internalCostAmount property value. The monetary internal cost amount for this usage summary line.
     * @param float|null $value Value to set for the internalCostAmount property.
    */
    public function setInternalCostAmount(?float $value): void {
        $this->internalCostAmount = $value;
    }

    /**
     * Sets the providerCostAmount property value. The monetary provider cost amount for this usage summary line.
     * @param float|null $value Value to set for the providerCostAmount property.
    */
    public function setProviderCostAmount(?float $value): void {
        $this->providerCostAmount = $value;
    }

    /**
     * Sets the quantity property value. The quantity value for this usage summary line.
     * @param float|null $value Value to set for the quantity property.
    */
    public function setQuantity(?float $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the recordCount property value. The record count for this usage summary line.
     * @param int|null $value Value to set for the recordCount property.
    */
    public function setRecordCount(?int $value): void {
        $this->recordCount = $value;
    }

    /**
     * Sets the status property value. The current status for this usage summary line.
     * @param UsageRecordStatus|null $value Value to set for the status property.
    */
    public function setStatus(?UsageRecordStatus $value): void {
        $this->status = $value;
    }

}
