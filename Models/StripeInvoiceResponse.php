<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Customer-safe Leadping invoice summary for billing.
*/
class StripeInvoiceResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $amount Total invoice amount in the invoice currency.
    */
    private ?float $amount = null;
    
    /**
     * @var DateTime|null $createdAt Date and time when the invoice was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var bool|null $hasPdf Indicates whether a downloadable PDF is available for the invoice.
    */
    private ?bool $hasPdf = null;
    
    /**
     * @var string|null $id Provider identifier for the invoice.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $number Human-readable invoice number, when assigned.
    */
    private ?string $number = null;
    
    /**
     * @var string|null $status Current provider-reported invoice status.
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new StripeInvoiceResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StripeInvoiceResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StripeInvoiceResponse {
        return new StripeInvoiceResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. Total invoice amount in the invoice currency.
     * @return float|null
    */
    public function getAmount(): ?float {
        return $this->amount;
    }

    /**
     * Gets the createdAt property value. Date and time when the invoice was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getFloatValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'hasPdf' => fn(ParseNode $n) => $o->setHasPdf($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the hasPdf property value. Indicates whether a downloadable PDF is available for the invoice.
     * @return bool|null
    */
    public function getHasPdf(): ?bool {
        return $this->hasPdf;
    }

    /**
     * Gets the id property value. Provider identifier for the invoice.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the number property value. Human-readable invoice number, when assigned.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the status property value. Current provider-reported invoice status.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('amount', $this->getAmount());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeBooleanValue('hasPdf', $this->getHasPdf());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('status', $this->getStatus());
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
     * Sets the amount property value. Total invoice amount in the invoice currency.
     * @param float|null $value Value to set for the amount property.
    */
    public function setAmount(?float $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the createdAt property value. Date and time when the invoice was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the hasPdf property value. Indicates whether a downloadable PDF is available for the invoice.
     * @param bool|null $value Value to set for the hasPdf property.
    */
    public function setHasPdf(?bool $value): void {
        $this->hasPdf = $value;
    }

    /**
     * Sets the id property value. Provider identifier for the invoice.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the number property value. Human-readable invoice number, when assigned.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the status property value. Current provider-reported invoice status.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

}
