<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Captured subscription cancellation feedback for retention and churn analysis.
*/
class BusinessSubscriptionCancellationInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $cancelAtPeriodEnd Whether the cancellation was scheduled for period end.
    */
    private ?bool $cancelAtPeriodEnd = null;
    
    /**
     * @var string|null $competitor The competitor named by the user, when applicable.
    */
    private ?string $competitor = null;
    
    /**
     * @var string|null $missingFeature The missing feature named by the user, when applicable.
    */
    private ?string $missingFeature = null;
    
    /**
     * @var string|null $notes Additional cancellation notes supplied by the user.
    */
    private ?string $notes = null;
    
    /**
     * @var string|null $reason The human-readable cancellation reason selected by the user.
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $reasonCode The normalized cancellation reason code selected by the user.
    */
    private ?string $reasonCode = null;
    
    /**
     * @var DateTime|null $requestedAt The date and time when cancellation was requested.
    */
    private ?DateTime $requestedAt = null;
    
    /**
     * @var string|null $requestedByUserId The user who requested cancellation.
    */
    private ?string $requestedByUserId = null;
    
    /**
     * @var string|null $technicalIssues The technical issue details supplied by the user, when applicable.
    */
    private ?string $technicalIssues = null;
    
    /**
     * Instantiates a new BusinessSubscriptionCancellationInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessSubscriptionCancellationInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessSubscriptionCancellationInfo {
        return new BusinessSubscriptionCancellationInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cancelAtPeriodEnd property value. Whether the cancellation was scheduled for period end.
     * @return bool|null
    */
    public function getCancelAtPeriodEnd(): ?bool {
        return $this->cancelAtPeriodEnd;
    }

    /**
     * Gets the competitor property value. The competitor named by the user, when applicable.
     * @return string|null
    */
    public function getCompetitor(): ?string {
        return $this->competitor;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancelAtPeriodEnd' => fn(ParseNode $n) => $o->setCancelAtPeriodEnd($n->getBooleanValue()),
            'competitor' => fn(ParseNode $n) => $o->setCompetitor($n->getStringValue()),
            'missingFeature' => fn(ParseNode $n) => $o->setMissingFeature($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'reasonCode' => fn(ParseNode $n) => $o->setReasonCode($n->getStringValue()),
            'requestedAt' => fn(ParseNode $n) => $o->setRequestedAt($n->getDateTimeValue()),
            'requestedByUserId' => fn(ParseNode $n) => $o->setRequestedByUserId($n->getStringValue()),
            'technicalIssues' => fn(ParseNode $n) => $o->setTechnicalIssues($n->getStringValue()),
        ];
    }

    /**
     * Gets the missingFeature property value. The missing feature named by the user, when applicable.
     * @return string|null
    */
    public function getMissingFeature(): ?string {
        return $this->missingFeature;
    }

    /**
     * Gets the notes property value. Additional cancellation notes supplied by the user.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the reason property value. The human-readable cancellation reason selected by the user.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the reasonCode property value. The normalized cancellation reason code selected by the user.
     * @return string|null
    */
    public function getReasonCode(): ?string {
        return $this->reasonCode;
    }

    /**
     * Gets the requestedAt property value. The date and time when cancellation was requested.
     * @return DateTime|null
    */
    public function getRequestedAt(): ?DateTime {
        return $this->requestedAt;
    }

    /**
     * Gets the requestedByUserId property value. The user who requested cancellation.
     * @return string|null
    */
    public function getRequestedByUserId(): ?string {
        return $this->requestedByUserId;
    }

    /**
     * Gets the technicalIssues property value. The technical issue details supplied by the user, when applicable.
     * @return string|null
    */
    public function getTechnicalIssues(): ?string {
        return $this->technicalIssues;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cancelAtPeriodEnd', $this->getCancelAtPeriodEnd());
        $writer->writeStringValue('competitor', $this->getCompetitor());
        $writer->writeStringValue('missingFeature', $this->getMissingFeature());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('reasonCode', $this->getReasonCode());
        $writer->writeDateTimeValue('requestedAt', $this->getRequestedAt());
        $writer->writeStringValue('requestedByUserId', $this->getRequestedByUserId());
        $writer->writeStringValue('technicalIssues', $this->getTechnicalIssues());
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
     * Sets the cancelAtPeriodEnd property value. Whether the cancellation was scheduled for period end.
     * @param bool|null $value Value to set for the cancelAtPeriodEnd property.
    */
    public function setCancelAtPeriodEnd(?bool $value): void {
        $this->cancelAtPeriodEnd = $value;
    }

    /**
     * Sets the competitor property value. The competitor named by the user, when applicable.
     * @param string|null $value Value to set for the competitor property.
    */
    public function setCompetitor(?string $value): void {
        $this->competitor = $value;
    }

    /**
     * Sets the missingFeature property value. The missing feature named by the user, when applicable.
     * @param string|null $value Value to set for the missingFeature property.
    */
    public function setMissingFeature(?string $value): void {
        $this->missingFeature = $value;
    }

    /**
     * Sets the notes property value. Additional cancellation notes supplied by the user.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->notes = $value;
    }

    /**
     * Sets the reason property value. The human-readable cancellation reason selected by the user.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the reasonCode property value. The normalized cancellation reason code selected by the user.
     * @param string|null $value Value to set for the reasonCode property.
    */
    public function setReasonCode(?string $value): void {
        $this->reasonCode = $value;
    }

    /**
     * Sets the requestedAt property value. The date and time when cancellation was requested.
     * @param DateTime|null $value Value to set for the requestedAt property.
    */
    public function setRequestedAt(?DateTime $value): void {
        $this->requestedAt = $value;
    }

    /**
     * Sets the requestedByUserId property value. The user who requested cancellation.
     * @param string|null $value Value to set for the requestedByUserId property.
    */
    public function setRequestedByUserId(?string $value): void {
        $this->requestedByUserId = $value;
    }

    /**
     * Sets the technicalIssues property value. The technical issue details supplied by the user, when applicable.
     * @param string|null $value Value to set for the technicalIssues property.
    */
    public function setTechnicalIssues(?string $value): void {
        $this->technicalIssues = $value;
    }

}
