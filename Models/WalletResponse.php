<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API billing wallet response returned to authenticated clients.
*/
class WalletResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $balanceCalculatedAt UTC timestamp when Leadping last calculated the wallet balance.
    */
    private ?DateTime $balanceCalculatedAt = null;
    
    /**
     * @var string|null $businessId Business ID that owns this wallet balance or credit.
    */
    private ?string $businessId = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var WalletResponse_creditStatus|null $creditStatus Defines the lifecycle state for a wallet credit lot.
    */
    private ?WalletResponse_creditStatus $creditStatus = null;
    
    /**
     * @var string|null $currency ISO currency code used for the monetary amounts in this billing wallet response.
    */
    private ?string $currency = null;
    
    /**
     * @var DateTime|null $expiresAt UTC timestamp when the wallet credit expires.
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var DateTime|null $nextCreditExpirationAt UTC timestamp when the next wallet credit amount expires.
    */
    private ?DateTime $nextCreditExpirationAt = null;
    
    /**
     * @var string|null $originalTransactionId Original wallet transaction ID referenced by a reversal, refund, or adjustment.
    */
    private ?string $originalTransactionId = null;
    
    /**
     * @var DateTime|null $purchasedAt UTC timestamp when the wallet credit was purchased.
    */
    private ?DateTime $purchasedAt = null;
    
    /**
     * @var WalletResponse_sourceType|null $sourceType Defines the source that created a wallet credit lot.
    */
    private ?WalletResponse_sourceType $sourceType = null;
    
    /**
     * @var string|null $stripeChargeId Stripe charge identifier linked to this billing transaction.
    */
    private ?string $stripeChargeId = null;
    
    /**
     * @var string|null $stripeInvoiceId Stripe invoice identifier linked to this billing transaction.
    */
    private ?string $stripeInvoiceId = null;
    
    /**
     * @var string|null $stripePaymentIntentId Stripe payment intent identifier linked to this billing transaction.
    */
    private ?string $stripePaymentIntentId = null;
    
    /**
     * Instantiates a new WalletResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WalletResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WalletResponse {
        return new WalletResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the balanceCalculatedAt property value. UTC timestamp when Leadping last calculated the wallet balance.
     * @return DateTime|null
    */
    public function getBalanceCalculatedAt(): ?DateTime {
        return $this->balanceCalculatedAt;
    }

    /**
     * Gets the businessId property value. Business ID that owns this wallet balance or credit.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the creditStatus property value. Defines the lifecycle state for a wallet credit lot.
     * @return WalletResponse_creditStatus|null
    */
    public function getCreditStatus(): ?WalletResponse_creditStatus {
        return $this->creditStatus;
    }

    /**
     * Gets the currency property value. ISO currency code used for the monetary amounts in this billing wallet response.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the expiresAt property value. UTC timestamp when the wallet credit expires.
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expiresAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'balanceCalculatedAt' => fn(ParseNode $n) => $o->setBalanceCalculatedAt($n->getDateTimeValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'creditStatus' => fn(ParseNode $n) => $o->setCreditStatus($n->getEnumValue(WalletResponse_creditStatus::class)),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'nextCreditExpirationAt' => fn(ParseNode $n) => $o->setNextCreditExpirationAt($n->getDateTimeValue()),
            'originalTransactionId' => fn(ParseNode $n) => $o->setOriginalTransactionId($n->getStringValue()),
            'purchasedAt' => fn(ParseNode $n) => $o->setPurchasedAt($n->getDateTimeValue()),
            'sourceType' => fn(ParseNode $n) => $o->setSourceType($n->getEnumValue(WalletResponse_sourceType::class)),
            'stripeChargeId' => fn(ParseNode $n) => $o->setStripeChargeId($n->getStringValue()),
            'stripeInvoiceId' => fn(ParseNode $n) => $o->setStripeInvoiceId($n->getStringValue()),
            'stripePaymentIntentId' => fn(ParseNode $n) => $o->setStripePaymentIntentId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. The display name for the entity.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the nextCreditExpirationAt property value. UTC timestamp when the next wallet credit amount expires.
     * @return DateTime|null
    */
    public function getNextCreditExpirationAt(): ?DateTime {
        return $this->nextCreditExpirationAt;
    }

    /**
     * Gets the originalTransactionId property value. Original wallet transaction ID referenced by a reversal, refund, or adjustment.
     * @return string|null
    */
    public function getOriginalTransactionId(): ?string {
        return $this->originalTransactionId;
    }

    /**
     * Gets the purchasedAt property value. UTC timestamp when the wallet credit was purchased.
     * @return DateTime|null
    */
    public function getPurchasedAt(): ?DateTime {
        return $this->purchasedAt;
    }

    /**
     * Gets the sourceType property value. Defines the source that created a wallet credit lot.
     * @return WalletResponse_sourceType|null
    */
    public function getSourceType(): ?WalletResponse_sourceType {
        return $this->sourceType;
    }

    /**
     * Gets the stripeChargeId property value. Stripe charge identifier linked to this billing transaction.
     * @return string|null
    */
    public function getStripeChargeId(): ?string {
        return $this->stripeChargeId;
    }

    /**
     * Gets the stripeInvoiceId property value. Stripe invoice identifier linked to this billing transaction.
     * @return string|null
    */
    public function getStripeInvoiceId(): ?string {
        return $this->stripeInvoiceId;
    }

    /**
     * Gets the stripePaymentIntentId property value. Stripe payment intent identifier linked to this billing transaction.
     * @return string|null
    */
    public function getStripePaymentIntentId(): ?string {
        return $this->stripePaymentIntentId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('balanceCalculatedAt', $this->getBalanceCalculatedAt());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeEnumValue('creditStatus', $this->getCreditStatus());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeDateTimeValue('nextCreditExpirationAt', $this->getNextCreditExpirationAt());
        $writer->writeStringValue('originalTransactionId', $this->getOriginalTransactionId());
        $writer->writeDateTimeValue('purchasedAt', $this->getPurchasedAt());
        $writer->writeEnumValue('sourceType', $this->getSourceType());
        $writer->writeStringValue('stripeChargeId', $this->getStripeChargeId());
        $writer->writeStringValue('stripeInvoiceId', $this->getStripeInvoiceId());
        $writer->writeStringValue('stripePaymentIntentId', $this->getStripePaymentIntentId());
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
     * Sets the balanceCalculatedAt property value. UTC timestamp when Leadping last calculated the wallet balance.
     * @param DateTime|null $value Value to set for the balanceCalculatedAt property.
    */
    public function setBalanceCalculatedAt(?DateTime $value): void {
        $this->balanceCalculatedAt = $value;
    }

    /**
     * Sets the businessId property value. Business ID that owns this wallet balance or credit.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the creditStatus property value. Defines the lifecycle state for a wallet credit lot.
     * @param WalletResponse_creditStatus|null $value Value to set for the creditStatus property.
    */
    public function setCreditStatus(?WalletResponse_creditStatus $value): void {
        $this->creditStatus = $value;
    }

    /**
     * Sets the currency property value. ISO currency code used for the monetary amounts in this billing wallet response.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the expiresAt property value. UTC timestamp when the wallet credit expires.
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. The display name for the entity.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the nextCreditExpirationAt property value. UTC timestamp when the next wallet credit amount expires.
     * @param DateTime|null $value Value to set for the nextCreditExpirationAt property.
    */
    public function setNextCreditExpirationAt(?DateTime $value): void {
        $this->nextCreditExpirationAt = $value;
    }

    /**
     * Sets the originalTransactionId property value. Original wallet transaction ID referenced by a reversal, refund, or adjustment.
     * @param string|null $value Value to set for the originalTransactionId property.
    */
    public function setOriginalTransactionId(?string $value): void {
        $this->originalTransactionId = $value;
    }

    /**
     * Sets the purchasedAt property value. UTC timestamp when the wallet credit was purchased.
     * @param DateTime|null $value Value to set for the purchasedAt property.
    */
    public function setPurchasedAt(?DateTime $value): void {
        $this->purchasedAt = $value;
    }

    /**
     * Sets the sourceType property value. Defines the source that created a wallet credit lot.
     * @param WalletResponse_sourceType|null $value Value to set for the sourceType property.
    */
    public function setSourceType(?WalletResponse_sourceType $value): void {
        $this->sourceType = $value;
    }

    /**
     * Sets the stripeChargeId property value. Stripe charge identifier linked to this billing transaction.
     * @param string|null $value Value to set for the stripeChargeId property.
    */
    public function setStripeChargeId(?string $value): void {
        $this->stripeChargeId = $value;
    }

    /**
     * Sets the stripeInvoiceId property value. Stripe invoice identifier linked to this billing transaction.
     * @param string|null $value Value to set for the stripeInvoiceId property.
    */
    public function setStripeInvoiceId(?string $value): void {
        $this->stripeInvoiceId = $value;
    }

    /**
     * Sets the stripePaymentIntentId property value. Stripe payment intent identifier linked to this billing transaction.
     * @param string|null $value Value to set for the stripePaymentIntentId property.
    */
    public function setStripePaymentIntentId(?string $value): void {
        $this->stripePaymentIntentId = $value;
    }

}
