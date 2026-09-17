<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Five-minute human-response SLA for a lead creation cohort.
*/
class CustomerResponseSlaPoint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $coveragePercent Timely leads divided by all eligible leads.
    */
    private ?float $coveragePercent = null;
    
    /**
     * @var int|null $eligibleLeads Mature leads in this bucket.
    */
    private ?int $eligibleLeads = null;
    
    /**
     * @var DateTime|null $endAt End of cohort bucket.
    */
    private ?DateTime $endAt = null;
    
    /**
     * @var string|null $label Bucket label.
    */
    private ?string $label = null;
    
    /**
     * @var int|null $pendingLeads Leads still within their first five minutes.
    */
    private ?int $pendingLeads = null;
    
    /**
     * @var DateTime|null $startAt Inclusive cohort bucket start.
    */
    private ?DateTime $startAt = null;
    
    /**
     * @var int|null $timelyLeads Eligible leads answered in five minutes.
    */
    private ?int $timelyLeads = null;
    
    /**
     * @var int|null $unrespondedLeads Eligible leads unanswered by observation cutoff.
    */
    private ?int $unrespondedLeads = null;
    
    /**
     * Instantiates a new CustomerResponseSlaPoint and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerResponseSlaPoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerResponseSlaPoint {
        return new CustomerResponseSlaPoint();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the coveragePercent property value. Timely leads divided by all eligible leads.
     * @return float|null
    */
    public function getCoveragePercent(): ?float {
        return $this->coveragePercent;
    }

    /**
     * Gets the eligibleLeads property value. Mature leads in this bucket.
     * @return int|null
    */
    public function getEligibleLeads(): ?int {
        return $this->eligibleLeads;
    }

    /**
     * Gets the endAt property value. End of cohort bucket.
     * @return DateTime|null
    */
    public function getEndAt(): ?DateTime {
        return $this->endAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'coveragePercent' => fn(ParseNode $n) => $o->setCoveragePercent($n->getFloatValue()),
            'eligibleLeads' => fn(ParseNode $n) => $o->setEligibleLeads($n->getIntegerValue()),
            'endAt' => fn(ParseNode $n) => $o->setEndAt($n->getDateTimeValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'pendingLeads' => fn(ParseNode $n) => $o->setPendingLeads($n->getIntegerValue()),
            'startAt' => fn(ParseNode $n) => $o->setStartAt($n->getDateTimeValue()),
            'timelyLeads' => fn(ParseNode $n) => $o->setTimelyLeads($n->getIntegerValue()),
            'unrespondedLeads' => fn(ParseNode $n) => $o->setUnrespondedLeads($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the label property value. Bucket label.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the pendingLeads property value. Leads still within their first five minutes.
     * @return int|null
    */
    public function getPendingLeads(): ?int {
        return $this->pendingLeads;
    }

    /**
     * Gets the startAt property value. Inclusive cohort bucket start.
     * @return DateTime|null
    */
    public function getStartAt(): ?DateTime {
        return $this->startAt;
    }

    /**
     * Gets the timelyLeads property value. Eligible leads answered in five minutes.
     * @return int|null
    */
    public function getTimelyLeads(): ?int {
        return $this->timelyLeads;
    }

    /**
     * Gets the unrespondedLeads property value. Eligible leads unanswered by observation cutoff.
     * @return int|null
    */
    public function getUnrespondedLeads(): ?int {
        return $this->unrespondedLeads;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('coveragePercent', $this->getCoveragePercent());
        $writer->writeIntegerValue('eligibleLeads', $this->getEligibleLeads());
        $writer->writeDateTimeValue('endAt', $this->getEndAt());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeIntegerValue('pendingLeads', $this->getPendingLeads());
        $writer->writeDateTimeValue('startAt', $this->getStartAt());
        $writer->writeIntegerValue('timelyLeads', $this->getTimelyLeads());
        $writer->writeIntegerValue('unrespondedLeads', $this->getUnrespondedLeads());
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
     * Sets the coveragePercent property value. Timely leads divided by all eligible leads.
     * @param float|null $value Value to set for the coveragePercent property.
    */
    public function setCoveragePercent(?float $value): void {
        $this->coveragePercent = $value;
    }

    /**
     * Sets the eligibleLeads property value. Mature leads in this bucket.
     * @param int|null $value Value to set for the eligibleLeads property.
    */
    public function setEligibleLeads(?int $value): void {
        $this->eligibleLeads = $value;
    }

    /**
     * Sets the endAt property value. End of cohort bucket.
     * @param DateTime|null $value Value to set for the endAt property.
    */
    public function setEndAt(?DateTime $value): void {
        $this->endAt = $value;
    }

    /**
     * Sets the label property value. Bucket label.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the pendingLeads property value. Leads still within their first five minutes.
     * @param int|null $value Value to set for the pendingLeads property.
    */
    public function setPendingLeads(?int $value): void {
        $this->pendingLeads = $value;
    }

    /**
     * Sets the startAt property value. Inclusive cohort bucket start.
     * @param DateTime|null $value Value to set for the startAt property.
    */
    public function setStartAt(?DateTime $value): void {
        $this->startAt = $value;
    }

    /**
     * Sets the timelyLeads property value. Eligible leads answered in five minutes.
     * @param int|null $value Value to set for the timelyLeads property.
    */
    public function setTimelyLeads(?int $value): void {
        $this->timelyLeads = $value;
    }

    /**
     * Sets the unrespondedLeads property value. Eligible leads unanswered by observation cutoff.
     * @param int|null $value Value to set for the unrespondedLeads property.
    */
    public function setUnrespondedLeads(?int $value): void {
        $this->unrespondedLeads = $value;
    }

}
