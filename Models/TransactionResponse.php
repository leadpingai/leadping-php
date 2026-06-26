<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API billing transaction response returned to authenticated clients.
*/
class TransactionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $accountId Leadping account identifier used for wallet and transaction reconciliation.
    */
    private ?string $accountId = null;
    
    /**
     * @var string|null $accountName Display name of the wallet or account used for this transaction.
    */
    private ?string $accountName = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $amount Monetary amount for this billing transaction or wallet operation.
    */
    private ?float $amount = null;
    
    /**
     * @var string|null $businessId Business ID charged or credited by this wallet transaction.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $businessName Business display name shown for this wallet transaction.
    */
    private ?string $businessName = null;
    
    /**
     * @var string|null $correlationId Correlation ID used to trace this workflow or request across Leadping services.
    */
    private ?string $correlationId = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $createdBy Display name or identifier for the person or system that created this billing transaction response.
    */
    private ?string $createdBy = null;
    
    /**
     * @var string|null $description Human-readable description that explains this billing transaction response to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $gatewayId Payment gateway identifier linked to this transaction.
    */
    private ?string $gatewayId = null;
    
    /**
     * @var string|null $gatewayStatus Payment gateway status returned for this transaction.
    */
    private ?string $gatewayStatus = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $leadId Lead ID connected to this transaction when the charge came from lead activity.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $leadName Lead display name shown for lead-related wallet transactions.
    */
    private ?string $leadName = null;
    
    /**
     * @var TransactionResponse_metadata|null $metadata Structured metadata used for attribution, integrations, and reporting on this billing transaction response.
    */
    private ?TransactionResponse_metadata $metadata = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $modifiedBy Display name or identifier for the person or system that last modified this billing transaction response.
    */
    private ?string $modifiedBy = null;
    
    /**
     * @var float|null $netAmount Net monetary amount after fees, credits, or adjustments.
    */
    private ?float $netAmount = null;
    
    /**
     * @var string|null $notes Additional billing notes that explain the transaction for admins or customers.
    */
    private ?string $notes = null;
    
    /**
     * @var string|null $paymentMethodDisplay Masked or human-readable payment method shown for this transaction.
    */
    private ?string $paymentMethodDisplay = null;
    
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
     * Gets the accountId property value. Leadping account identifier used for wallet and transaction reconciliation.
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * Gets the accountName property value. Display name of the wallet or account used for this transaction.
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->accountName;
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
     * Gets the businessId property value. Business ID charged or credited by this wallet transaction.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the businessName property value. Business display name shown for this wallet transaction.
     * @return string|null
    */
    public function getBusinessName(): ?string {
        return $this->businessName;
    }

    /**
     * Gets the correlationId property value. Correlation ID used to trace this workflow or request across Leadping services.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the createdBy property value. Display name or identifier for the person or system that created this billing transaction response.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->createdBy;
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
            'accountId' => fn(ParseNode $n) => $o->setAccountId($n->getStringValue()),
            'accountName' => fn(ParseNode $n) => $o->setAccountName($n->getStringValue()),
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'businessName' => fn(ParseNode $n) => $o->setBusinessName($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'gatewayId' => fn(ParseNode $n) => $o->setGatewayId($n->getStringValue()),
            'gatewayStatus' => fn(ParseNode $n) => $o->setGatewayStatus($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'leadName' => fn(ParseNode $n) => $o->setLeadName($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([TransactionResponse_metadata::class, 'createFromDiscriminatorValue'])),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'modifiedBy' => fn(ParseNode $n) => $o->setModifiedBy($n->getStringValue()),
            'netAmount' => fn(ParseNode $n) => $o->setNetAmount($n->getFloatValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'paymentMethodDisplay' => fn(ParseNode $n) => $o->setPaymentMethodDisplay($n->getStringValue()),
            'transactionStatus' => fn(ParseNode $n) => $o->setTransactionStatus($n->getEnumValue(TransactionStatus::class)),
            'transactionType' => fn(ParseNode $n) => $o->setTransactionType($n->getEnumValue(TransactionType::class)),
        ];
    }

    /**
     * Gets the gatewayId property value. Payment gateway identifier linked to this transaction.
     * @return string|null
    */
    public function getGatewayId(): ?string {
        return $this->gatewayId;
    }

    /**
     * Gets the gatewayStatus property value. Payment gateway status returned for this transaction.
     * @return string|null
    */
    public function getGatewayStatus(): ?string {
        return $this->gatewayStatus;
    }

    /**
     * Gets the id property value. The unique identifier for the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the leadId property value. Lead ID connected to this transaction when the charge came from lead activity.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the leadName property value. Lead display name shown for lead-related wallet transactions.
     * @return string|null
    */
    public function getLeadName(): ?string {
        return $this->leadName;
    }

    /**
     * Gets the metadata property value. Structured metadata used for attribution, integrations, and reporting on this billing transaction response.
     * @return TransactionResponse_metadata|null
    */
    public function getMetadata(): ?TransactionResponse_metadata {
        return $this->metadata;
    }

    /**
     * Gets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the modifiedBy property value. Display name or identifier for the person or system that last modified this billing transaction response.
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        return $this->modifiedBy;
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
     * Gets the paymentMethodDisplay property value. Masked or human-readable payment method shown for this transaction.
     * @return string|null
    */
    public function getPaymentMethodDisplay(): ?string {
        return $this->paymentMethodDisplay;
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
        $writer->writeStringValue('accountId', $this->getAccountId());
        $writer->writeStringValue('accountName', $this->getAccountName());
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('businessName', $this->getBusinessName());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('gatewayId', $this->getGatewayId());
        $writer->writeStringValue('gatewayStatus', $this->getGatewayStatus());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('leadName', $this->getLeadName());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('modifiedBy', $this->getModifiedBy());
        $writer->writeFloatValue('netAmount', $this->getNetAmount());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeStringValue('paymentMethodDisplay', $this->getPaymentMethodDisplay());
        $writer->writeEnumValue('transactionStatus', $this->getTransactionStatus());
        $writer->writeEnumValue('transactionType', $this->getTransactionType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountId property value. Leadping account identifier used for wallet and transaction reconciliation.
     * @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value): void {
        $this->accountId = $value;
    }

    /**
     * Sets the accountName property value. Display name of the wallet or account used for this transaction.
     * @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value): void {
        $this->accountName = $value;
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
     * Sets the businessId property value. Business ID charged or credited by this wallet transaction.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the businessName property value. Business display name shown for this wallet transaction.
     * @param string|null $value Value to set for the businessName property.
    */
    public function setBusinessName(?string $value): void {
        $this->businessName = $value;
    }

    /**
     * Sets the correlationId property value. Correlation ID used to trace this workflow or request across Leadping services.
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the createdBy property value. Display name or identifier for the person or system that created this billing transaction response.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this billing transaction response to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the gatewayId property value. Payment gateway identifier linked to this transaction.
     * @param string|null $value Value to set for the gatewayId property.
    */
    public function setGatewayId(?string $value): void {
        $this->gatewayId = $value;
    }

    /**
     * Sets the gatewayStatus property value. Payment gateway status returned for this transaction.
     * @param string|null $value Value to set for the gatewayStatus property.
    */
    public function setGatewayStatus(?string $value): void {
        $this->gatewayStatus = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the leadId property value. Lead ID connected to this transaction when the charge came from lead activity.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the leadName property value. Lead display name shown for lead-related wallet transactions.
     * @param string|null $value Value to set for the leadName property.
    */
    public function setLeadName(?string $value): void {
        $this->leadName = $value;
    }

    /**
     * Sets the metadata property value. Structured metadata used for attribution, integrations, and reporting on this billing transaction response.
     * @param TransactionResponse_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?TransactionResponse_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the modifiedBy property value. Display name or identifier for the person or system that last modified this billing transaction response.
     * @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value): void {
        $this->modifiedBy = $value;
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
     * Sets the paymentMethodDisplay property value. Masked or human-readable payment method shown for this transaction.
     * @param string|null $value Value to set for the paymentMethodDisplay property.
    */
    public function setPaymentMethodDisplay(?string $value): void {
        $this->paymentMethodDisplay = $value;
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
