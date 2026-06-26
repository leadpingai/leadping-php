<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API eligible outgoing phone number returned to authenticated clients.
*/
class EligibleOutgoingNumberResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $campaignId Messaging campaign identifier associated with this eligible outgoing phone number.
    */
    private ?string $campaignId = null;
    
    /**
     * @var bool|null $canSend Indicates whether Leadping can send outbound messages using this eligible outgoing phone number.
    */
    private ?bool $canSend = null;
    
    /**
     * @var string|null $displayNumber Human-readable phone number shown in Leadping UI and API responses.
    */
    private ?string $displayNumber = null;
    
    /**
     * @var string|null $healthLabel Short label describing the health state for display in dashboards.
    */
    private ?string $healthLabel = null;
    
    /**
     * @var EligibleOutgoingNumberResponse_healthStatus|null $healthStatus Defines the supported SMS Warmup Health State values.
    */
    private ?EligibleOutgoingNumberResponse_healthStatus $healthStatus = null;
    
    /**
     * @var string|null $healthWarning Warning text that explains a potential health or readiness issue.
    */
    private ?string $healthWarning = null;
    
    /**
     * @var bool|null $isSelected Indicates whether this eligible outgoing phone number was selected for the requested operation.
    */
    private ?bool $isSelected = null;
    
    /**
     * @var string|null $label Short display label for this eligible outgoing phone number, formatted for charts, filters, or list views.
    */
    private ?string $label = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this eligible outgoing phone number.
    */
    private ?string $number = null;
    
    /**
     * @var string|null $phoneNumberId Leadping phone number ID connected to this eligible outgoing phone number.
    */
    private ?string $phoneNumberId = null;
    
    /**
     * @var string|null $reasonLabel Human-readable label for the reason code on this eligible outgoing phone number.
    */
    private ?string $reasonLabel = null;
    
    /**
     * @var OutgoingNumberSelectionReason|null $selectionReason Reason Leadping selected this outbound sender number.
    */
    private ?OutgoingNumberSelectionReason $selectionReason = null;
    
    /**
     * @var string|null $sourceId Lead source ID used to determine this phone number's outbound eligibility.
    */
    private ?string $sourceId = null;
    
    /**
     * @var string|null $teamId Team ID used to determine this phone number's outbound eligibility.
    */
    private ?string $teamId = null;
    
    /**
     * Instantiates a new EligibleOutgoingNumberResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EligibleOutgoingNumberResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EligibleOutgoingNumberResponse {
        return new EligibleOutgoingNumberResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the campaignId property value. Messaging campaign identifier associated with this eligible outgoing phone number.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the canSend property value. Indicates whether Leadping can send outbound messages using this eligible outgoing phone number.
     * @return bool|null
    */
    public function getCanSend(): ?bool {
        return $this->canSend;
    }

    /**
     * Gets the displayNumber property value. Human-readable phone number shown in Leadping UI and API responses.
     * @return string|null
    */
    public function getDisplayNumber(): ?string {
        return $this->displayNumber;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'canSend' => fn(ParseNode $n) => $o->setCanSend($n->getBooleanValue()),
            'displayNumber' => fn(ParseNode $n) => $o->setDisplayNumber($n->getStringValue()),
            'healthLabel' => fn(ParseNode $n) => $o->setHealthLabel($n->getStringValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(EligibleOutgoingNumberResponse_healthStatus::class)),
            'healthWarning' => fn(ParseNode $n) => $o->setHealthWarning($n->getStringValue()),
            'isSelected' => fn(ParseNode $n) => $o->setIsSelected($n->getBooleanValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'phoneNumberId' => fn(ParseNode $n) => $o->setPhoneNumberId($n->getStringValue()),
            'reasonLabel' => fn(ParseNode $n) => $o->setReasonLabel($n->getStringValue()),
            'selectionReason' => fn(ParseNode $n) => $o->setSelectionReason($n->getEnumValue(OutgoingNumberSelectionReason::class)),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'teamId' => fn(ParseNode $n) => $o->setTeamId($n->getStringValue()),
        ];
    }

    /**
     * Gets the healthLabel property value. Short label describing the health state for display in dashboards.
     * @return string|null
    */
    public function getHealthLabel(): ?string {
        return $this->healthLabel;
    }

    /**
     * Gets the healthStatus property value. Defines the supported SMS Warmup Health State values.
     * @return EligibleOutgoingNumberResponse_healthStatus|null
    */
    public function getHealthStatus(): ?EligibleOutgoingNumberResponse_healthStatus {
        return $this->healthStatus;
    }

    /**
     * Gets the healthWarning property value. Warning text that explains a potential health or readiness issue.
     * @return string|null
    */
    public function getHealthWarning(): ?string {
        return $this->healthWarning;
    }

    /**
     * Gets the isSelected property value. Indicates whether this eligible outgoing phone number was selected for the requested operation.
     * @return bool|null
    */
    public function getIsSelected(): ?bool {
        return $this->isSelected;
    }

    /**
     * Gets the label property value. Short display label for this eligible outgoing phone number, formatted for charts, filters, or list views.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the number property value. E.164 phone number exposed by this eligible outgoing phone number.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the phoneNumberId property value. Leadping phone number ID connected to this eligible outgoing phone number.
     * @return string|null
    */
    public function getPhoneNumberId(): ?string {
        return $this->phoneNumberId;
    }

    /**
     * Gets the reasonLabel property value. Human-readable label for the reason code on this eligible outgoing phone number.
     * @return string|null
    */
    public function getReasonLabel(): ?string {
        return $this->reasonLabel;
    }

    /**
     * Gets the selectionReason property value. Reason Leadping selected this outbound sender number.
     * @return OutgoingNumberSelectionReason|null
    */
    public function getSelectionReason(): ?OutgoingNumberSelectionReason {
        return $this->selectionReason;
    }

    /**
     * Gets the sourceId property value. Lead source ID used to determine this phone number's outbound eligibility.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the teamId property value. Team ID used to determine this phone number's outbound eligibility.
     * @return string|null
    */
    public function getTeamId(): ?string {
        return $this->teamId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeBooleanValue('canSend', $this->getCanSend());
        $writer->writeStringValue('displayNumber', $this->getDisplayNumber());
        $writer->writeStringValue('healthLabel', $this->getHealthLabel());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('healthWarning', $this->getHealthWarning());
        $writer->writeBooleanValue('isSelected', $this->getIsSelected());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('phoneNumberId', $this->getPhoneNumberId());
        $writer->writeStringValue('reasonLabel', $this->getReasonLabel());
        $writer->writeEnumValue('selectionReason', $this->getSelectionReason());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeStringValue('teamId', $this->getTeamId());
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
     * Sets the campaignId property value. Messaging campaign identifier associated with this eligible outgoing phone number.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the canSend property value. Indicates whether Leadping can send outbound messages using this eligible outgoing phone number.
     * @param bool|null $value Value to set for the canSend property.
    */
    public function setCanSend(?bool $value): void {
        $this->canSend = $value;
    }

    /**
     * Sets the displayNumber property value. Human-readable phone number shown in Leadping UI and API responses.
     * @param string|null $value Value to set for the displayNumber property.
    */
    public function setDisplayNumber(?string $value): void {
        $this->displayNumber = $value;
    }

    /**
     * Sets the healthLabel property value. Short label describing the health state for display in dashboards.
     * @param string|null $value Value to set for the healthLabel property.
    */
    public function setHealthLabel(?string $value): void {
        $this->healthLabel = $value;
    }

    /**
     * Sets the healthStatus property value. Defines the supported SMS Warmup Health State values.
     * @param EligibleOutgoingNumberResponse_healthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?EligibleOutgoingNumberResponse_healthStatus $value): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the healthWarning property value. Warning text that explains a potential health or readiness issue.
     * @param string|null $value Value to set for the healthWarning property.
    */
    public function setHealthWarning(?string $value): void {
        $this->healthWarning = $value;
    }

    /**
     * Sets the isSelected property value. Indicates whether this eligible outgoing phone number was selected for the requested operation.
     * @param bool|null $value Value to set for the isSelected property.
    */
    public function setIsSelected(?bool $value): void {
        $this->isSelected = $value;
    }

    /**
     * Sets the label property value. Short display label for this eligible outgoing phone number, formatted for charts, filters, or list views.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the number property value. E.164 phone number exposed by this eligible outgoing phone number.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the phoneNumberId property value. Leadping phone number ID connected to this eligible outgoing phone number.
     * @param string|null $value Value to set for the phoneNumberId property.
    */
    public function setPhoneNumberId(?string $value): void {
        $this->phoneNumberId = $value;
    }

    /**
     * Sets the reasonLabel property value. Human-readable label for the reason code on this eligible outgoing phone number.
     * @param string|null $value Value to set for the reasonLabel property.
    */
    public function setReasonLabel(?string $value): void {
        $this->reasonLabel = $value;
    }

    /**
     * Sets the selectionReason property value. Reason Leadping selected this outbound sender number.
     * @param OutgoingNumberSelectionReason|null $value Value to set for the selectionReason property.
    */
    public function setSelectionReason(?OutgoingNumberSelectionReason $value): void {
        $this->selectionReason = $value;
    }

    /**
     * Sets the sourceId property value. Lead source ID used to determine this phone number's outbound eligibility.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the teamId property value. Team ID used to determine this phone number's outbound eligibility.
     * @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value): void {
        $this->teamId = $value;
    }

}
