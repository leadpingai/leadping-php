<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Measures automation execution activity within one analytics time bucket.
*/
class CustomerAutomationHealthPoint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $endAt Exclusive UTC end of the analytics bucket.
    */
    private ?DateTime $endAt = null;
    
    /**
     * @var int|null $executions Number of automation executions in the bucket.
    */
    private ?int $executions = null;
    
    /**
     * @var int|null $failureCount Number of failed automation executions in the bucket.
    */
    private ?int $failureCount = null;
    
    /**
     * @var string|null $label Display label identifying the analytics bucket.
    */
    private ?string $label = null;
    
    /**
     * @var DateTime|null $startAt Inclusive UTC start of the analytics bucket.
    */
    private ?DateTime $startAt = null;
    
    /**
     * @var int|null $successCount Number of successful automation executions in the bucket.
    */
    private ?int $successCount = null;
    
    /**
     * Instantiates a new CustomerAutomationHealthPoint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerAutomationHealthPoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerAutomationHealthPoint {
        return new CustomerAutomationHealthPoint();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the endAt property value. Exclusive UTC end of the analytics bucket.
     * @return DateTime|null
    */
    public function getEndAt(): ?DateTime {
        return $this->endAt;
    }

    /**
     * Gets the executions property value. Number of automation executions in the bucket.
     * @return int|null
    */
    public function getExecutions(): ?int {
        return $this->executions;
    }

    /**
     * Gets the failureCount property value. Number of failed automation executions in the bucket.
     * @return int|null
    */
    public function getFailureCount(): ?int {
        return $this->failureCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endAt' => fn(ParseNode $n) => $o->setEndAt($n->getDateTimeValue()),
            'executions' => fn(ParseNode $n) => $o->setExecutions($n->getIntegerValue()),
            'failureCount' => fn(ParseNode $n) => $o->setFailureCount($n->getIntegerValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'startAt' => fn(ParseNode $n) => $o->setStartAt($n->getDateTimeValue()),
            'successCount' => fn(ParseNode $n) => $o->setSuccessCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the label property value. Display label identifying the analytics bucket.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the startAt property value. Inclusive UTC start of the analytics bucket.
     * @return DateTime|null
    */
    public function getStartAt(): ?DateTime {
        return $this->startAt;
    }

    /**
     * Gets the successCount property value. Number of successful automation executions in the bucket.
     * @return int|null
    */
    public function getSuccessCount(): ?int {
        return $this->successCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('endAt', $this->getEndAt());
        $writer->writeIntegerValue('executions', $this->getExecutions());
        $writer->writeIntegerValue('failureCount', $this->getFailureCount());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeDateTimeValue('startAt', $this->getStartAt());
        $writer->writeIntegerValue('successCount', $this->getSuccessCount());
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
     * Sets the endAt property value. Exclusive UTC end of the analytics bucket.
     * @param DateTime|null $value Value to set for the endAt property.
    */
    public function setEndAt(?DateTime $value): void {
        $this->endAt = $value;
    }

    /**
     * Sets the executions property value. Number of automation executions in the bucket.
     * @param int|null $value Value to set for the executions property.
    */
    public function setExecutions(?int $value): void {
        $this->executions = $value;
    }

    /**
     * Sets the failureCount property value. Number of failed automation executions in the bucket.
     * @param int|null $value Value to set for the failureCount property.
    */
    public function setFailureCount(?int $value): void {
        $this->failureCount = $value;
    }

    /**
     * Sets the label property value. Display label identifying the analytics bucket.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the startAt property value. Inclusive UTC start of the analytics bucket.
     * @param DateTime|null $value Value to set for the startAt property.
    */
    public function setStartAt(?DateTime $value): void {
        $this->startAt = $value;
    }

    /**
     * Sets the successCount property value. Number of successful automation executions in the bucket.
     * @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value): void {
        $this->successCount = $value;
    }

}
