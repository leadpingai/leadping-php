<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes usage ledger data used in Leadping API requests and responses.
*/
class UsageLedgerTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $billableSeconds Billable seconds for this usage ledger.
    */
    private ?int $billableSeconds = null;
    
    /**
     * @var BillableUnit|null $billableUnit Billable unit for this usage ledger.
    */
    private ?BillableUnit $billableUnit = null;
    
    /**
     * @var UsageChannel|null $channel Channel for this usage ledger.
    */
    private ?UsageChannel $channel = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp for created at on this usage ledger.
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
     * @var int|null $durationSeconds Duration seconds for this usage ledger.
    */
    private ?int $durationSeconds = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this usage ledger.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isBillable Whether this usage ledger is billable.
    */
    private ?bool $isBillable = null;
    
    /**
     * @var UsageLedgerTableRow_lead|null $lead Identifier and display name of the related lead.
    */
    private ?UsageLedgerTableRow_lead $lead = null;
    
    /**
     * @var UsageLedgerTableRow_organization|null $organization Identifier and display name of the related organization.
    */
    private ?UsageLedgerTableRow_organization $organization = null;
    
    /**
     * @var string|null $phoneNumber The phone number associated with this usage ledger.
    */
    private ?string $phoneNumber = null;
    
    /**
     * @var string|null $phoneNumberId The phone number ID associated with this usage ledger.
    */
    private ?string $phoneNumberId = null;
    
    /**
     * @var float|null $quantity Quantity for this usage ledger.
    */
    private ?float $quantity = null;
    
    /**
     * @var int|null $smsSegments SMS segments for this usage ledger.
    */
    private ?int $smsSegments = null;
    
    /**
     * @var UsageStatus|null $status The current status for this usage ledger.
    */
    private ?UsageStatus $status = null;
    
    /**
     * @var float|null $unitPrice Unit price for this usage ledger.
    */
    private ?float $unitPrice = null;
    
    /**
     * @var UsageLedgerTableRow_user|null $user Identifier and display name of the related user.
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
     * Gets the billableSeconds property value. Billable seconds for this usage ledger.
     * @return int|null
    */
    public function getBillableSeconds(): ?int {
        return $this->billableSeconds;
    }

    /**
     * Gets the billableUnit property value. Billable unit for this usage ledger.
     * @return BillableUnit|null
    */
    public function getBillableUnit(): ?BillableUnit {
        return $this->billableUnit;
    }

    /**
     * Gets the channel property value. Channel for this usage ledger.
     * @return UsageChannel|null
    */
    public function getChannel(): ?UsageChannel {
        return $this->channel;
    }

    /**
     * Gets the createdAt property value. UTC timestamp for created at on this usage ledger.
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
     * Gets the durationSeconds property value. Duration seconds for this usage ledger.
     * @return int|null
    */
    public function getDurationSeconds(): ?int {
        return $this->durationSeconds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billableSeconds' => fn(ParseNode $n) => $o->setBillableSeconds($n->getIntegerValue()),
            'billableUnit' => fn(ParseNode $n) => $o->setBillableUnit($n->getEnumValue(BillableUnit::class)),
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getEnumValue(UsageChannel::class)),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'customerChargeAmount' => fn(ParseNode $n) => $o->setCustomerChargeAmount($n->getFloatValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'durationSeconds' => fn(ParseNode $n) => $o->setDurationSeconds($n->getIntegerValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isBillable' => fn(ParseNode $n) => $o->setIsBillable($n->getBooleanValue()),
            'lead' => fn(ParseNode $n) => $o->setLead($n->getObjectValue([UsageLedgerTableRow_lead::class, 'createFromDiscriminatorValue'])),
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([UsageLedgerTableRow_organization::class, 'createFromDiscriminatorValue'])),
            'phoneNumber' => fn(ParseNode $n) => $o->setPhoneNumber($n->getStringValue()),
            'phoneNumberId' => fn(ParseNode $n) => $o->setPhoneNumberId($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getFloatValue()),
            'smsSegments' => fn(ParseNode $n) => $o->setSmsSegments($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(UsageStatus::class)),
            'unitPrice' => fn(ParseNode $n) => $o->setUnitPrice($n->getFloatValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([UsageLedgerTableRow_user::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this usage ledger.
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
     * Gets the lead property value. Identifier and display name of the related lead.
     * @return UsageLedgerTableRow_lead|null
    */
    public function getLead(): ?UsageLedgerTableRow_lead {
        return $this->lead;
    }

    /**
     * Gets the organization property value. Identifier and display name of the related organization.
     * @return UsageLedgerTableRow_organization|null
    */
    public function getOrganization(): ?UsageLedgerTableRow_organization {
        return $this->organization;
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
     * Gets the quantity property value. Quantity for this usage ledger.
     * @return float|null
    */
    public function getQuantity(): ?float {
        return $this->quantity;
    }

    /**
     * Gets the smsSegments property value. SMS segments for this usage ledger.
     * @return int|null
    */
    public function getSmsSegments(): ?int {
        return $this->smsSegments;
    }

    /**
     * Gets the status property value. The current status for this usage ledger.
     * @return UsageStatus|null
    */
    public function getStatus(): ?UsageStatus {
        return $this->status;
    }

    /**
     * Gets the unitPrice property value. Unit price for this usage ledger.
     * @return float|null
    */
    public function getUnitPrice(): ?float {
        return $this->unitPrice;
    }

    /**
     * Gets the user property value. Identifier and display name of the related user.
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
        $writer->writeIntegerValue('billableSeconds', $this->getBillableSeconds());
        $writer->writeEnumValue('billableUnit', $this->getBillableUnit());
        $writer->writeEnumValue('channel', $this->getChannel());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeFloatValue('customerChargeAmount', $this->getCustomerChargeAmount());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeIntegerValue('durationSeconds', $this->getDurationSeconds());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isBillable', $this->getIsBillable());
        $writer->writeObjectValue('lead', $this->getLead());
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeStringValue('phoneNumber', $this->getPhoneNumber());
        $writer->writeStringValue('phoneNumberId', $this->getPhoneNumberId());
        $writer->writeFloatValue('quantity', $this->getQuantity());
        $writer->writeIntegerValue('smsSegments', $this->getSmsSegments());
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
     * Sets the billableSeconds property value. Billable seconds for this usage ledger.
     * @param int|null $value Value to set for the billableSeconds property.
    */
    public function setBillableSeconds(?int $value): void {
        $this->billableSeconds = $value;
    }

    /**
     * Sets the billableUnit property value. Billable unit for this usage ledger.
     * @param BillableUnit|null $value Value to set for the billableUnit property.
    */
    public function setBillableUnit(?BillableUnit $value): void {
        $this->billableUnit = $value;
    }

    /**
     * Sets the channel property value. Channel for this usage ledger.
     * @param UsageChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?UsageChannel $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp for created at on this usage ledger.
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
     * Sets the durationSeconds property value. Duration seconds for this usage ledger.
     * @param int|null $value Value to set for the durationSeconds property.
    */
    public function setDurationSeconds(?int $value): void {
        $this->durationSeconds = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this usage ledger.
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
     * Sets the lead property value. Identifier and display name of the related lead.
     * @param UsageLedgerTableRow_lead|null $value Value to set for the lead property.
    */
    public function setLead(?UsageLedgerTableRow_lead $value): void {
        $this->lead = $value;
    }

    /**
     * Sets the organization property value. Identifier and display name of the related organization.
     * @param UsageLedgerTableRow_organization|null $value Value to set for the organization property.
    */
    public function setOrganization(?UsageLedgerTableRow_organization $value): void {
        $this->organization = $value;
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
     * Sets the quantity property value. Quantity for this usage ledger.
     * @param float|null $value Value to set for the quantity property.
    */
    public function setQuantity(?float $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the smsSegments property value. SMS segments for this usage ledger.
     * @param int|null $value Value to set for the smsSegments property.
    */
    public function setSmsSegments(?int $value): void {
        $this->smsSegments = $value;
    }

    /**
     * Sets the status property value. The current status for this usage ledger.
     * @param UsageStatus|null $value Value to set for the status property.
    */
    public function setStatus(?UsageStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the unitPrice property value. Unit price for this usage ledger.
     * @param float|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?float $value): void {
        $this->unitPrice = $value;
    }

    /**
     * Sets the user property value. Identifier and display name of the related user.
     * @param UsageLedgerTableRow_user|null $value Value to set for the user property.
    */
    public function setUser(?UsageLedgerTableRow_user $value): void {
        $this->user = $value;
    }

}
