<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing usage ledger data used by Leadping API contracts.
*/
class UsageLedgerTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BillableUnit|null $billableUnit The billable unit value for this usage ledger.
    */
    private ?BillableUnit $billableUnit = null;
    
    /**
     * @var UsageLedgerTableRow_business|null $business The ID and name for this business.
    */
    private ?UsageLedgerTableRow_business $business = null;
    
    /**
     * @var UsageChannel|null $channel The channel value for this usage ledger.
    */
    private ?UsageChannel $channel = null;
    
    /**
     * @var DateTime|null $createdAt The date and time for the created at value on this usage ledger.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var float|null $customerChargeAmount The monetary customer charge amount for this usage ledger.
    */
    private ?float $customerChargeAmount = null;
    
    /**
     * @var string|null $description The human-readable description of this usage ledger.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $id The unique ID for this usage ledger.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isBillable Whether this usage ledger is billable.
    */
    private ?bool $isBillable = null;
    
    /**
     * @var UsageLedgerTableRow_lead|null $lead The ID and name for this lead.
    */
    private ?UsageLedgerTableRow_lead $lead = null;
    
    /**
     * @var string|null $phoneNumber The phone number associated with this usage ledger.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $phoneNumberId The phone number ID associated with this usage ledger.
    */
    private ?string $phoneNumberId = null;
    
    /**
     * @var float|null $quantity The quantity value for this usage ledger.
    */
    private ?float $quantity = null;
    
    /**
     * @var UsageRecordStatus|null $status The current status for this usage ledger.
    */
    private ?UsageRecordStatus $status = null;
    
    /**
     * @var float|null $unitPrice The unit price value for this usage ledger.
    */
    private ?float $unitPrice = null;
    
    /**
     * @var UsageLedgerTableRow_user|null $user The ID and name for this user.
    */
    private ?UsageLedgerTableRow_user $user = null;
    
    /**
     * Instantiates a new UsageLedgerTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageLedgerTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageLedgerTableRow {
        return new UsageLedgerTableRow();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billableUnit property value. The billable unit value for this usage ledger.
     * @return BillableUnit|null
    */
    public function getBillableUnit(): ?BillableUnit {
        return $this->billableUnit;
    }

    /**
     * Gets the business property value. The ID and name for this business.
     * @return UsageLedgerTableRow_business|null
    */
    public function getBusiness(): ?UsageLedgerTableRow_business {
        return $this->business;
    }

    /**
     * Gets the channel property value. The channel value for this usage ledger.
     * @return UsageChannel|null
    */
    public function getChannel(): ?UsageChannel {
        return $this->channel;
    }

    /**
     * Gets the createdAt property value. The date and time for the created at value on this usage ledger.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the customerChargeAmount property value. The monetary customer charge amount for this usage ledger.
     * @return float|null
    */
    public function getCustomerChargeAmount(): ?float {
        return $this->customerChargeAmount;
    }

    /**
     * Gets the description property value. The human-readable description of this usage ledger.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billableUnit' => fn(ParseNode $n) => $o->setBillableUnit($n->getEnumValue(BillableUnit::class)),
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([UsageLedgerTableRow_business::class, 'createFromDiscriminatorValue'])),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(UsageChannel::class)),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'customerChargeAmount' => fn(ParseNode $n) => $o->setCustomerChargeAmount($n->getFloatValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isBillable' => fn(ParseNode $n) => $o->setIsBillable($n->getBooleanValue()),
            'lead' => fn(ParseNode $n) => $o->setLead($n->getObjectValue([UsageLedgerTableRow_lead::class, 'createFromDiscriminatorValue'])),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'phoneNumberId' => fn(ParseNode $n) => $o->setPhoneNumberId($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getFloatValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(UsageRecordStatus::class)),
            'unitPrice' => fn(ParseNode $n) => $o->setUnitPrice($n->getFloatValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([UsageLedgerTableRow_user::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. The unique ID for this usage ledger.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isBillable property value. Whether this usage ledger is billable.
     * @return bool|null
    */
    public function getIsBillable(): ?bool {
        return $this->isBillable;
    }

    /**
     * Gets the lead property value. The ID and name for this lead.
     * @return UsageLedgerTableRow_lead|null
    */
    public function getLead(): ?UsageLedgerTableRow_lead {
        return $this->lead;
    }

    /**
     * Gets the phoneNumber property value. The phone number associated with this usage ledger.
     * @return string|null
    */
    public function getPhoneNumber(): ?string {
        return $this->phoneNumber;
    }

    /**
     * Gets the phoneNumberId property value. The phone number ID associated with this usage ledger.
     * @return string|null
    */
    public function getPhoneNumberId(): ?string {
        return $this->phoneNumberId;
    }

    /**
     * Gets the quantity property value. The quantity value for this usage ledger.
     * @return float|null
    */
    public function getQuantity(): ?float {
        return $this->quantity;
    }

    /**
     * Gets the status property value. The current status for this usage ledger.
     * @return UsageRecordStatus|null
    */
    public function getStatus(): ?UsageRecordStatus {
        return $this->status;
    }

    /**
     * Gets the unitPrice property value. The unit price value for this usage ledger.
     * @return float|null
    */
    public function getUnitPrice(): ?float {
        return $this->unitPrice;
    }

    /**
     * Gets the user property value. The ID and name for this user.
     * @return UsageLedgerTableRow_user|null
    */
    public function getUser(): ?UsageLedgerTableRow_user {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('billableUnit', $this->getBillableUnit());
        $writer->writeObjectValue('business', $this->getBusiness());
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeFloatValue('customerChargeAmount', $this->getCustomerChargeAmount());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isBillable', $this->getIsBillable());
        $writer->writeObjectValue('lead', $this->getLead());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('phoneNumberId', $this->getPhoneNumberId());
        $writer->writeFloatValue('quantity', $this->getQuantity());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeFloatValue('unitPrice', $this->getUnitPrice());
        $writer->writeObjectValue('user', $this->getUser());
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
     * Sets the billableUnit property value. The billable unit value for this usage ledger.
     * @param BillableUnit|null $value Value to set for the billableUnit property.
    */
    public function setBillableUnit(?BillableUnit $value): void {
        $this->billableUnit = $value;
    }

    /**
     * Sets the business property value. The ID and name for this business.
     * @param UsageLedgerTableRow_business|null $value Value to set for the business property.
    */
    public function setBusiness(?UsageLedgerTableRow_business $value): void {
        $this->business = $value;
    }

    /**
     * Sets the channel property value. The channel value for this usage ledger.
     * @param UsageChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?UsageChannel $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the createdAt property value. The date and time for the created at value on this usage ledger.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the customerChargeAmount property value. The monetary customer charge amount for this usage ledger.
     * @param float|null $value Value to set for the customerChargeAmount property.
    */
    public function setCustomerChargeAmount(?float $value): void {
        $this->customerChargeAmount = $value;
    }

    /**
     * Sets the description property value. The human-readable description of this usage ledger.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the id property value. The unique ID for this usage ledger.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isBillable property value. Whether this usage ledger is billable.
     * @param bool|null $value Value to set for the isBillable property.
    */
    public function setIsBillable(?bool $value): void {
        $this->isBillable = $value;
    }

    /**
     * Sets the lead property value. The ID and name for this lead.
     * @param UsageLedgerTableRow_lead|null $value Value to set for the lead property.
    */
    public function setLead(?UsageLedgerTableRow_lead $value): void {
        $this->lead = $value;
    }

    /**
     * Sets the phoneNumber property value. The phone number associated with this usage ledger.
     * @param string|null $value Value to set for the phoneNumber property.
    */
    public function setPhoneNumber(?string $value): void {
        $this->phoneNumber = $value;
    }

    /**
     * Sets the phoneNumberId property value. The phone number ID associated with this usage ledger.
     * @param string|null $value Value to set for the phoneNumberId property.
    */
    public function setPhoneNumberId(?string $value): void {
        $this->phoneNumberId = $value;
    }

    /**
     * Sets the quantity property value. The quantity value for this usage ledger.
     * @param float|null $value Value to set for the quantity property.
    */
    public function setQuantity(?float $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the status property value. The current status for this usage ledger.
     * @param UsageRecordStatus|null $value Value to set for the status property.
    */
    public function setStatus(?UsageRecordStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the unitPrice property value. The unit price value for this usage ledger.
     * @param float|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?float $value): void {
        $this->unitPrice = $value;
    }

    /**
     * Sets the user property value. The ID and name for this user.
     * @param UsageLedgerTableRow_user|null $value Value to set for the user property.
    */
    public function setUser(?UsageLedgerTableRow_user $value): void {
        $this->user = $value;
    }

}
