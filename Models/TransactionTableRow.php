<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Summarizes billing transaction data in paginated and searchable results.
*/
class TransactionTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $amount Monetary amount for this billing transaction or wallet operation.
    */
    private ?float $amount = null;
    
    /**
     * @var TransactionTableRow_billableUnit|null $billableUnit Defines the supported Billable Unit values.
    */
    private ?TransactionTableRow_billableUnit $billableUnit = null;
    
    /**
     * @var float|null $billedAmount Customer-facing amount billed for the metered usage or wallet transaction.
    */
    private ?float $billedAmount = null;
    
    /**
     * @var TransactionTableRow_billingChannel|null $billingChannel Defines the supported Usage Channel values.
    */
    private ?TransactionTableRow_billingChannel $billingChannel = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this billing transaction table row was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $description Human-readable description that explains this billing transaction table row to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this billing transaction table row.
    */
    private ?string $id = null;
    
    /**
     * @var TransactionTableRow_lead|null $lead Identifier and display name of the related lead.
    */
    private ?TransactionTableRow_lead $lead = null;
    
    /**
     * @var float|null $netAmount Net monetary amount after fees, credits, or adjustments.
    */
    private ?float $netAmount = null;
    
    /**
     * @var TransactionTableRow_organization|null $organization Identifier and display name of the related organization.
    */
    private ?TransactionTableRow_organization $organization = null;
    
    /**
     * @var string|null $paymentMethodDisplay Masked or human-readable payment method shown for this transaction.
    */
    private ?string $paymentMethodDisplay = null;
    
    /**
     * @var string|null $pricingVersion Version of the pricing rules used to calculate the billed amount.
    */
    private ?string $pricingVersion = null;
    
    /**
     * @var float|null $quantity Number of billable units measured for this transaction, when usage-based pricing applies.
    */
    private ?float $quantity = null;
    
    /**
     * @var string|null $sourceEventId Identifier of the event that created this billing transaction, when available.
    */
    private ?string $sourceEventId = null;
    
    /**
     * @var string|null $sourceEventType Event type that created this billing transaction, when available.
    */
    private ?string $sourceEventType = null;
    
    /**
     * @var TransactionStatus|null $transactionStatus Processing status for this wallet transaction.
    */
    private ?TransactionStatus $transactionStatus = null;
    
    /**
     * @var TransactionType|null $transactionType Debit or credit classification for this wallet transaction.
    */
    private ?TransactionType $transactionType = null;
    
    /**
     * @var float|null $unitPrice Price charged per billable unit when usage-based pricing applies.
    */
    private ?float $unitPrice = null;
    
    /**
     * Instantiates a new TransactionTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TransactionTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TransactionTableRow {
        return new TransactionTableRow();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. Monetary amount for this billing transaction or wallet operation.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the billableUnit property value. Defines the supported Billable Unit values.
     * @return TransactionTableRow_billableUnit|null
    */
    public function getBillableUnit(): ?TransactionTableRow_billableUnit {
        return $this->billableUnit;
    }

    /**
     * Gets the billedAmount property value. Customer-facing amount billed for the metered usage or wallet transaction.
     * @return float|null
    */
    public function getBilledAmount(): ?float {
        return $this->billedAmount;
    }

    /**
     * Gets the billingChannel property value. Defines the supported Usage Channel values.
     * @return TransactionTableRow_billingChannel|null
    */
    public function getBillingChannel(): ?TransactionTableRow_billingChannel {
        return $this->billingChannel;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this billing transaction table row was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the description property value. Human-readable description that explains this billing transaction table row to API users.
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
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'billableUnit' => fn(ParseNode $n) => $o->setBillableUnit($n->getEnumValue(TransactionTableRow_billableUnit::class)),
            'billedAmount' => fn(ParseNode $n) => $o->setBilledAmount($n->getFloatValue()),
            'billingChannel' => fn(ParseNode $n) => $o->setBillingChannel($n->getEnumValue(TransactionTableRow_billingChannel::class)),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lead' => fn(ParseNode $n) => $o->setLead($n->getObjectValue([TransactionTableRow_lead::class, 'createFromDiscriminatorValue'])),
            'netAmount' => fn(ParseNode $n) => $o->setNetAmount($n->getFloatValue()),
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([TransactionTableRow_organization::class, 'createFromDiscriminatorValue'])),
            'paymentMethodDisplay' => fn(ParseNode $n) => $o->setPaymentMethodDisplay($n->getStringValue()),
            'pricingVersion' => fn(ParseNode $n) => $o->setPricingVersion($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getFloatValue()),
            'sourceEventId' => fn(ParseNode $n) => $o->setSourceEventId($n->getStringValue()),
            'sourceEventType' => fn(ParseNode $n) => $o->setSourceEventType($n->getStringValue()),
            'transactionStatus' => fn(ParseNode $n) => $o->setTransactionStatus($n->getEnumValue(TransactionStatus::class)),
            'transactionType' => fn(ParseNode $n) => $o->setTransactionType($n->getEnumValue(TransactionType::class)),
            'unitPrice' => fn(ParseNode $n) => $o->setUnitPrice($n->getFloatValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this billing transaction table row.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lead property value. Identifier and display name of the related lead.
     * @return TransactionTableRow_lead|null
    */
    public function getLead(): ?TransactionTableRow_lead {
        return $this->lead;
    }

    /**
     * Gets the netAmount property value. Net monetary amount after fees, credits, or adjustments.
     * @return float|null
    */
    public function getNetAmount(): ?float {
        return $this->netAmount;
    }

    /**
     * Gets the organization property value. Identifier and display name of the related organization.
     * @return TransactionTableRow_organization|null
    */
    public function getOrganization(): ?TransactionTableRow_organization {
        return $this->organization;
    }

    /**
     * Gets the paymentMethodDisplay property value. Masked or human-readable payment method shown for this transaction.
     * @return string|null
    */
    public function getPaymentMethodDisplay(): ?string {
        return $this->paymentMethodDisplay;
    }

    /**
     * Gets the pricingVersion property value. Version of the pricing rules used to calculate the billed amount.
     * @return string|null
    */
    public function getPricingVersion(): ?string {
        return $this->pricingVersion;
    }

    /**
     * Gets the quantity property value. Number of billable units measured for this transaction, when usage-based pricing applies.
     * @return float|null
    */
    public function getQuantity(): ?float {
        return $this->quantity;
    }

    /**
     * Gets the sourceEventId property value. Identifier of the event that created this billing transaction, when available.
     * @return string|null
    */
    public function getSourceEventId(): ?string {
        return $this->sourceEventId;
    }

    /**
     * Gets the sourceEventType property value. Event type that created this billing transaction, when available.
     * @return string|null
    */
    public function getSourceEventType(): ?string {
        return $this->sourceEventType;
    }

    /**
     * Gets the transactionStatus property value. Processing status for this wallet transaction.
     * @return TransactionStatus|null
    */
    public function getTransactionStatus(): ?TransactionStatus {
        return $this->transactionStatus;
    }

    /**
     * Gets the transactionType property value. Debit or credit classification for this wallet transaction.
     * @return TransactionType|null
    */
    public function getTransactionType(): ?TransactionType {
        return $this->transactionType;
    }

    /**
     * Gets the unitPrice property value. Price charged per billable unit when usage-based pricing applies.
     * @return float|null
    */
    public function getUnitPrice(): ?float {
        return $this->unitPrice;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeEnumValue('billableUnit', $this->getBillableUnit());
        $writer->writeFloatValue('billedAmount', $this->getBilledAmount());
        $writer->writeEnumValue('billingChannel', $this->getBillingChannel());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('lead', $this->getLead());
        $writer->writeFloatValue('netAmount', $this->getNetAmount());
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeStringValue('paymentMethodDisplay', $this->getPaymentMethodDisplay());
        $writer->writeStringValue('pricingVersion', $this->getPricingVersion());
        $writer->writeFloatValue('quantity', $this->getQuantity());
        $writer->writeStringValue('sourceEventId', $this->getSourceEventId());
        $writer->writeStringValue('sourceEventType', $this->getSourceEventType());
        $writer->writeEnumValue('transactionStatus', $this->getTransactionStatus());
        $writer->writeEnumValue('transactionType', $this->getTransactionType());
        $writer->writeFloatValue('unitPrice', $this->getUnitPrice());
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
     * Sets the amount property value. Monetary amount for this billing transaction or wallet operation.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the billableUnit property value. Defines the supported Billable Unit values.
     * @param TransactionTableRow_billableUnit|null $value Value to set for the billableUnit property.
    */
    public function setBillableUnit(?TransactionTableRow_billableUnit $value): void {
        $this->billableUnit = $value;
    }

    /**
     * Sets the billedAmount property value. Customer-facing amount billed for the metered usage or wallet transaction.
     * @param float|null $value Value to set for the billedAmount property.
    */
    public function setBilledAmount(?float $value): void {
        $this->billedAmount = $value;
    }

    /**
     * Sets the billingChannel property value. Defines the supported Usage Channel values.
     * @param TransactionTableRow_billingChannel|null $value Value to set for the billingChannel property.
    */
    public function setBillingChannel(?TransactionTableRow_billingChannel $value): void {
        $this->billingChannel = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this billing transaction table row was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this billing transaction table row to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this billing transaction table row.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lead property value. Identifier and display name of the related lead.
     * @param TransactionTableRow_lead|null $value Value to set for the lead property.
    */
    public function setLead(?TransactionTableRow_lead $value): void {
        $this->lead = $value;
    }

    /**
     * Sets the netAmount property value. Net monetary amount after fees, credits, or adjustments.
     * @param float|null $value Value to set for the netAmount property.
    */
    public function setNetAmount(?float $value): void {
        $this->netAmount = $value;
    }

    /**
     * Sets the organization property value. Identifier and display name of the related organization.
     * @param TransactionTableRow_organization|null $value Value to set for the organization property.
    */
    public function setOrganization(?TransactionTableRow_organization $value): void {
        $this->organization = $value;
    }

    /**
     * Sets the paymentMethodDisplay property value. Masked or human-readable payment method shown for this transaction.
     * @param string|null $value Value to set for the paymentMethodDisplay property.
    */
    public function setPaymentMethodDisplay(?string $value): void {
        $this->paymentMethodDisplay = $value;
    }

    /**
     * Sets the pricingVersion property value. Version of the pricing rules used to calculate the billed amount.
     * @param string|null $value Value to set for the pricingVersion property.
    */
    public function setPricingVersion(?string $value): void {
        $this->pricingVersion = $value;
    }

    /**
     * Sets the quantity property value. Number of billable units measured for this transaction, when usage-based pricing applies.
     * @param float|null $value Value to set for the quantity property.
    */
    public function setQuantity(?float $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the sourceEventId property value. Identifier of the event that created this billing transaction, when available.
     * @param string|null $value Value to set for the sourceEventId property.
    */
    public function setSourceEventId(?string $value): void {
        $this->sourceEventId = $value;
    }

    /**
     * Sets the sourceEventType property value. Event type that created this billing transaction, when available.
     * @param string|null $value Value to set for the sourceEventType property.
    */
    public function setSourceEventType(?string $value): void {
        $this->sourceEventType = $value;
    }

    /**
     * Sets the transactionStatus property value. Processing status for this wallet transaction.
     * @param TransactionStatus|null $value Value to set for the transactionStatus property.
    */
    public function setTransactionStatus(?TransactionStatus $value): void {
        $this->transactionStatus = $value;
    }

    /**
     * Sets the transactionType property value. Debit or credit classification for this wallet transaction.
     * @param TransactionType|null $value Value to set for the transactionType property.
    */
    public function setTransactionType(?TransactionType $value): void {
        $this->transactionType = $value;
    }

    /**
     * Sets the unitPrice property value. Price charged per billable unit when usage-based pricing applies.
     * @param float|null $value Value to set for the unitPrice property.
    */
    public function setUnitPrice(?float $value): void {
        $this->unitPrice = $value;
    }

}
