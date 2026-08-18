<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes billing transaction data returned by Leadping.
*/
class TransactionResponse implements AdditionalDataHolder, Parsable 
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
     * @var TransactionResponse_billableUnit|null $billableUnit Identifies the metered unit used to price Leadping usage, such as a message, call minute, lookup, or phone number.
    */
    private ?TransactionResponse_billableUnit $billableUnit = null;
    
    /**
     * @var float|null $billedAmount Customer-facing amount billed for the transaction.
    */
    private ?float $billedAmount = null;
    
    /**
     * @var TransactionResponse_billingChannel|null $billingChannel Identifies the messaging, calling, phone-number, lookup, or platform channel that generated billable usage.
    */
    private ?TransactionResponse_billingChannel $billingChannel = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when the resource was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $description Human-readable description that explains this billing transaction response to API users.
    */
    private ?string $description = null;
    
    /**
     * @var float|null $gatewayFeeAmount Payment gateway fee amount charged for the wallet transaction.
    */
    private ?float $gatewayFeeAmount = null;
    
    /**
     * @var string|null $gatewayStatus Payment gateway status returned for this transaction.
    */
    private ?string $gatewayStatus = null;
    
    /**
     * @var string|null $id Stable unique identifier of the resource.
    */
    private ?string $id = null;
    
    /**
     * @var TransactionResponse_lead|null $lead Identifier and display name of the related lead.
    */
    private ?TransactionResponse_lead $lead = null;
    
    /**
     * @var DateTime|null $modifiedAt UTC timestamp when the resource was last modified, or null when it has not been updated.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var float|null $netAmount Net monetary amount after fees, credits, or adjustments.
    */
    private ?float $netAmount = null;
    
    /**
     * @var string|null $notes Additional billing notes that explain the transaction for admins or customers.
    */
    private ?string $notes = null;
    
    /**
     * @var TransactionResponse_organization|null $organization Identifier and display name of the related organization.
    */
    private ?TransactionResponse_organization $organization = null;
    
    /**
     * @var string|null $paymentMethodDisplay Masked or human-readable payment method shown for this transaction.
    */
    private ?string $paymentMethodDisplay = null;
    
    /**
     * @var float|null $platformFeeAmount Leadping platform fee amount included in the transaction.
    */
    private ?float $platformFeeAmount = null;
    
    /**
     * @var TransactionStatus|null $transactionStatus Processing status for this wallet transaction.
    */
    private ?TransactionStatus $transactionStatus = null;
    
    /**
     * @var TransactionType|null $transactionType Debit or credit classification for this wallet transaction.
    */
    private ?TransactionType $transactionType = null;
    
    /**
     * Instantiates a new TransactionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TransactionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TransactionResponse {
        return new TransactionResponse();
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
     * Gets the billableUnit property value. Identifies the metered unit used to price Leadping usage, such as a message, call minute, lookup, or phone number.
     * @return TransactionResponse_billableUnit|null
    */
    public function getBillableUnit(): ?TransactionResponse_billableUnit {
        return $this->billableUnit;
    }

    /**
     * Gets the billedAmount property value. Customer-facing amount billed for the transaction.
     * @return float|null
    */
    public function getBilledAmount(): ?float {
        return $this->billedAmount;
    }

    /**
     * Gets the billingChannel property value. Identifies the messaging, calling, phone-number, lookup, or platform channel that generated billable usage.
     * @return TransactionResponse_billingChannel|null
    */
    public function getBillingChannel(): ?TransactionResponse_billingChannel {
        return $this->billingChannel;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when the resource was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the description property value. Human-readable description that explains this billing transaction response to API users.
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
            'billableUnit' => fn(ParseNode $n) => $o->setBillableUnit($n->getEnumValue(TransactionResponse_billableUnit::class)),
            'billedAmount' => fn(ParseNode $n) => $o->setBilledAmount($n->getFloatValue()),
            'billingChannel' => fn(ParseNode $n) => $o->setBillingChannel($n->getEnumValue(TransactionResponse_billingChannel::class)),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'gatewayFeeAmount' => fn(ParseNode $n) => $o->setGatewayFeeAmount($n->getFloatValue()),
            'gatewayStatus' => fn(ParseNode $n) => $o->setGatewayStatus($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lead' => fn(ParseNode $n) => $o->setLead($n->getObjectValue([TransactionResponse_lead::class, 'createFromDiscriminatorValue'])),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'netAmount' => fn(ParseNode $n) => $o->setNetAmount($n->getFloatValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'organization' => fn(ParseNode $n) => $o->setOrganization($n->getObjectValue([TransactionResponse_organization::class, 'createFromDiscriminatorValue'])),
            'paymentMethodDisplay' => fn(ParseNode $n) => $o->setPaymentMethodDisplay($n->getStringValue()),
            'platformFeeAmount' => fn(ParseNode $n) => $o->setPlatformFeeAmount($n->getFloatValue()),
            'transactionStatus' => fn(ParseNode $n) => $o->setTransactionStatus($n->getEnumValue(TransactionStatus::class)),
            'transactionType' => fn(ParseNode $n) => $o->setTransactionType($n->getEnumValue(TransactionType::class)),
        ];
    }

    /**
     * Gets the gatewayFeeAmount property value. Payment gateway fee amount charged for the wallet transaction.
     * @return float|null
    */
    public function getGatewayFeeAmount(): ?float {
        return $this->gatewayFeeAmount;
    }

    /**
     * Gets the gatewayStatus property value. Payment gateway status returned for this transaction.
     * @return string|null
    */
    public function getGatewayStatus(): ?string {
        return $this->gatewayStatus;
    }

    /**
     * Gets the id property value. Stable unique identifier of the resource.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lead property value. Identifier and display name of the related lead.
     * @return TransactionResponse_lead|null
    */
    public function getLead(): ?TransactionResponse_lead {
        return $this->lead;
    }

    /**
     * Gets the modifiedAt property value. UTC timestamp when the resource was last modified, or null when it has not been updated.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the netAmount property value. Net monetary amount after fees, credits, or adjustments.
     * @return float|null
    */
    public function getNetAmount(): ?float {
        return $this->netAmount;
    }

    /**
     * Gets the notes property value. Additional billing notes that explain the transaction for admins or customers.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the organization property value. Identifier and display name of the related organization.
     * @return TransactionResponse_organization|null
    */
    public function getOrganization(): ?TransactionResponse_organization {
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
     * Gets the platformFeeAmount property value. Leadping platform fee amount included in the transaction.
     * @return float|null
    */
    public function getPlatformFeeAmount(): ?float {
        return $this->platformFeeAmount;
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
        $writer->writeFloatValue('gatewayFeeAmount', $this->getGatewayFeeAmount());
        $writer->writeStringValue('gatewayStatus', $this->getGatewayStatus());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('lead', $this->getLead());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeFloatValue('netAmount', $this->getNetAmount());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeObjectValue('organization', $this->getOrganization());
        $writer->writeStringValue('paymentMethodDisplay', $this->getPaymentMethodDisplay());
        $writer->writeFloatValue('platformFeeAmount', $this->getPlatformFeeAmount());
        $writer->writeEnumValue('transactionStatus', $this->getTransactionStatus());
        $writer->writeEnumValue('transactionType', $this->getTransactionType());
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
     * Sets the billableUnit property value. Identifies the metered unit used to price Leadping usage, such as a message, call minute, lookup, or phone number.
     * @param TransactionResponse_billableUnit|null $value Value to set for the billableUnit property.
    */
    public function setBillableUnit(?TransactionResponse_billableUnit $value): void {
        $this->billableUnit = $value;
    }

    /**
     * Sets the billedAmount property value. Customer-facing amount billed for the transaction.
     * @param float|null $value Value to set for the billedAmount property.
    */
    public function setBilledAmount(?float $value): void {
        $this->billedAmount = $value;
    }

    /**
     * Sets the billingChannel property value. Identifies the messaging, calling, phone-number, lookup, or platform channel that generated billable usage.
     * @param TransactionResponse_billingChannel|null $value Value to set for the billingChannel property.
    */
    public function setBillingChannel(?TransactionResponse_billingChannel $value): void {
        $this->billingChannel = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when the resource was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this billing transaction response to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the gatewayFeeAmount property value. Payment gateway fee amount charged for the wallet transaction.
     * @param float|null $value Value to set for the gatewayFeeAmount property.
    */
    public function setGatewayFeeAmount(?float $value): void {
        $this->gatewayFeeAmount = $value;
    }

    /**
     * Sets the gatewayStatus property value. Payment gateway status returned for this transaction.
     * @param string|null $value Value to set for the gatewayStatus property.
    */
    public function setGatewayStatus(?string $value): void {
        $this->gatewayStatus = $value;
    }

    /**
     * Sets the id property value. Stable unique identifier of the resource.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lead property value. Identifier and display name of the related lead.
     * @param TransactionResponse_lead|null $value Value to set for the lead property.
    */
    public function setLead(?TransactionResponse_lead $value): void {
        $this->lead = $value;
    }

    /**
     * Sets the modifiedAt property value. UTC timestamp when the resource was last modified, or null when it has not been updated.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the netAmount property value. Net monetary amount after fees, credits, or adjustments.
     * @param float|null $value Value to set for the netAmount property.
    */
    public function setNetAmount(?float $value): void {
        $this->netAmount = $value;
    }

    /**
     * Sets the notes property value. Additional billing notes that explain the transaction for admins or customers.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->notes = $value;
    }

    /**
     * Sets the organization property value. Identifier and display name of the related organization.
     * @param TransactionResponse_organization|null $value Value to set for the organization property.
    */
    public function setOrganization(?TransactionResponse_organization $value): void {
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
     * Sets the platformFeeAmount property value. Leadping platform fee amount included in the transaction.
     * @param float|null $value Value to set for the platformFeeAmount property.
    */
    public function setPlatformFeeAmount(?float $value): void {
        $this->platformFeeAmount = $value;
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

}
