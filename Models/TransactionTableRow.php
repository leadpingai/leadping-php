<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * List item schema for Leadping API billing transaction table row results shown in searchable tables.
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
     * @var TransactionTableRow_business|null $business The ID and name for this business.
    */
    private ?TransactionTableRow_business $business = null;
    
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
     * @var TransactionTableRow_lead|null $lead The ID and name for this lead.
    */
    private ?TransactionTableRow_lead $lead = null;
    
    /**
     * @var float|null $netAmount Net monetary amount after fees, credits, or adjustments.
    */
    private ?float $netAmount = null;
    
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
     * Gets the business property value. The ID and name for this business.
     * @return TransactionTableRow_business|null
    */
    public function getBusiness(): ?TransactionTableRow_business {
        return $this->business;
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
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([TransactionTableRow_business::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lead' => fn(ParseNode $n) => $o->setLead($n->getObjectValue([TransactionTableRow_lead::class, 'createFromDiscriminatorValue'])),
            'netAmount' => fn(ParseNode $n) => $o->setNetAmount($n->getFloatValue()),
            'paymentMethodDisplay' => fn(ParseNode $n) => $o->setPaymentMethodDisplay($n->getStringValue()),
            'transactionStatus' => fn(ParseNode $n) => $o->setTransactionStatus($n->getEnumValue(TransactionStatus::class)),
            'transactionType' => fn(ParseNode $n) => $o->setTransactionType($n->getEnumValue(TransactionType::class)),
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
     * Gets the lead property value. The ID and name for this lead.
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
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeObjectValue('business', $this->getBusiness());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('lead', $this->getLead());
        $writer->writeFloatValue('netAmount', $this->getNetAmount());
        $writer->writeStringValue('paymentMethodDisplay', $this->getPaymentMethodDisplay());
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
     * Sets the business property value. The ID and name for this business.
     * @param TransactionTableRow_business|null $value Value to set for the business property.
    */
    public function setBusiness(?TransactionTableRow_business $value): void {
        $this->business = $value;
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
     * Sets the lead property value. The ID and name for this lead.
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
