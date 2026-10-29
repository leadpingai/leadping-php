<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Current outcomes for non-deleted, non-demo leads created in the selected period.
*/
class CustomerLeadOutcomes implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $contactedLeads Distinct leads with a prospect reply or answered call since creation, through generation time.
    */
    private ?int $contactedLeads = null;
    
    /**
     * @var int|null $convertedLeads Leads whose current status category is Converted.
    */
    private ?int $convertedLeads = null;
    
    /**
     * @var float|null $medianFirstAttemptMinutes Median time to the first manual SMS send attempt or placed outbound call, among attempted leads only.
    */
    private ?float $medianFirstAttemptMinutes = null;
    
    /**
     * @var int|null $needsFollowUpLeads Enabled, unarchived open or qualified leads with an overdue incomplete follow-up, or neither a manual attempt nor contact.
    */
    private ?int $needsFollowUpLeads = null;
    
    /**
     * @var int|null $totalLeads Number of non-deleted, non-demo leads created in the selected period.
    */
    private ?int $totalLeads = null;
    
    /**
     * Instantiates a new CustomerLeadOutcomes and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerLeadOutcomes
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerLeadOutcomes {
        return new CustomerLeadOutcomes();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the contactedLeads property value. Distinct leads with a prospect reply or answered call since creation, through generation time.
     * @return int|null
    */
    public function getContactedLeads(): ?int {
        return $this->contactedLeads;
    }

    /**
     * Gets the convertedLeads property value. Leads whose current status category is Converted.
     * @return int|null
    */
    public function getConvertedLeads(): ?int {
        return $this->convertedLeads;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contactedLeads' => fn(ParseNode $n) => $o->setContactedLeads($n->getIntegerValue()),
            'convertedLeads' => fn(ParseNode $n) => $o->setConvertedLeads($n->getIntegerValue()),
            'medianFirstAttemptMinutes' => fn(ParseNode $n) => $o->setMedianFirstAttemptMinutes($n->getFloatValue()),
            'needsFollowUpLeads' => fn(ParseNode $n) => $o->setNeedsFollowUpLeads($n->getIntegerValue()),
            'totalLeads' => fn(ParseNode $n) => $o->setTotalLeads($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the medianFirstAttemptMinutes property value. Median time to the first manual SMS send attempt or placed outbound call, among attempted leads only.
     * @return float|null
    */
    public function getMedianFirstAttemptMinutes(): ?float {
        return $this->medianFirstAttemptMinutes;
    }

    /**
     * Gets the needsFollowUpLeads property value. Enabled, unarchived open or qualified leads with an overdue incomplete follow-up, or neither a manual attempt nor contact.
     * @return int|null
    */
    public function getNeedsFollowUpLeads(): ?int {
        return $this->needsFollowUpLeads;
    }

    /**
     * Gets the totalLeads property value. Number of non-deleted, non-demo leads created in the selected period.
     * @return int|null
    */
    public function getTotalLeads(): ?int {
        return $this->totalLeads;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('contactedLeads', $this->getContactedLeads());
        $writer->writeIntegerValue('convertedLeads', $this->getConvertedLeads());
        $writer->writeFloatValue('medianFirstAttemptMinutes', $this->getMedianFirstAttemptMinutes());
        $writer->writeIntegerValue('needsFollowUpLeads', $this->getNeedsFollowUpLeads());
        $writer->writeIntegerValue('totalLeads', $this->getTotalLeads());
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
     * Sets the contactedLeads property value. Distinct leads with a prospect reply or answered call since creation, through generation time.
     * @param int|null $value Value to set for the contactedLeads property.
    */
    public function setContactedLeads(?int $value): void {
        $this->contactedLeads = $value;
    }

    /**
     * Sets the convertedLeads property value. Leads whose current status category is Converted.
     * @param int|null $value Value to set for the convertedLeads property.
    */
    public function setConvertedLeads(?int $value): void {
        $this->convertedLeads = $value;
    }

    /**
     * Sets the medianFirstAttemptMinutes property value. Median time to the first manual SMS send attempt or placed outbound call, among attempted leads only.
     * @param float|null $value Value to set for the medianFirstAttemptMinutes property.
    */
    public function setMedianFirstAttemptMinutes(?float $value): void {
        $this->medianFirstAttemptMinutes = $value;
    }

    /**
     * Sets the needsFollowUpLeads property value. Enabled, unarchived open or qualified leads with an overdue incomplete follow-up, or neither a manual attempt nor contact.
     * @param int|null $value Value to set for the needsFollowUpLeads property.
    */
    public function setNeedsFollowUpLeads(?int $value): void {
        $this->needsFollowUpLeads = $value;
    }

    /**
     * Sets the totalLeads property value. Number of non-deleted, non-demo leads created in the selected period.
     * @param int|null $value Value to set for the totalLeads property.
    */
    public function setTotalLeads(?int $value): void {
        $this->totalLeads = $value;
    }

}
