<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API outgoing number selection response returned to authenticated clients.
*/
class OutgoingNumberSelectionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $campaignId Messaging campaign identifier associated with this outgoing number selection response.
    */
    private ?string $campaignId = null;
    
    /**
     * @var bool|null $canSend Indicates whether Leadping can send outbound messages using this outgoing number selection response.
    */
    private ?bool $canSend = null;
    
    /**
     * @var string|null $displayNumber Human-readable phone number shown in Leadping UI and API responses.
    */
    private ?string $displayNumber = null;
    
    /**
     * @var array<EligibleOutgoingNumberResponse>|null $eligibleNumbers Phone numbers that are eligible to send the requested outbound message or call.
    */
    private ?array $eligibleNumbers = null;
    
    /**
     * @var string|null $healthLabel Short label describing the health state for display in dashboards.
    */
    private ?string $healthLabel = null;
    
    /**
     * @var OutgoingNumberSelectionResponse_healthStatus|null $healthStatus Defines the supported SMS readiness health assessments.
    */
    private ?OutgoingNumberSelectionResponse_healthStatus $healthStatus = null;
    
    /**
     * @var string|null $healthWarning Warning text that explains a potential health or readiness issue.
    */
    private ?string $healthWarning = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this outgoing number selection response.
    */
    private ?string $number = null;
    
    /**
     * @var string|null $phoneNumberId Leadping phone number ID connected to this outgoing number selection response.
    */
    private ?string $phoneNumberId = null;
    
    /**
     * @var string|null $reasonLabel Human-readable label for the reason code on this outgoing number selection response.
    */
    private ?string $reasonLabel = null;
    
    /**
     * @var OutgoingNumberSelectionResponse_selectionReason|null $selectionReason Defines the supported Outgoing Number Selection Reason values.
    */
    private ?OutgoingNumberSelectionResponse_selectionReason $selectionReason = null;
    
    /**
     * @var string|null $setupMessage Human-readable setup guidance shown for this outgoing number selection response.
    */
    private ?string $setupMessage = null;
    
    /**
     * @var string|null $sourceId Lead source ID considered when Leadping selected the outgoing phone number.
    */
    private ?string $sourceId = null;
    
    /**
     * @var bool|null $wasManuallyOverridden Indicates whether a user manually overrode Leadping's automatic number selection for this outgoing number selection response.
    */
    private ?bool $wasManuallyOverridden = null;
    
    /**
     * Instantiates a new OutgoingNumberSelectionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutgoingNumberSelectionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutgoingNumberSelectionResponse {
        return new OutgoingNumberSelectionResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the campaignId property value. Messaging campaign identifier associated with this outgoing number selection response.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the canSend property value. Indicates whether Leadping can send outbound messages using this outgoing number selection response.
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
     * Gets the eligibleNumbers property value. Phone numbers that are eligible to send the requested outbound message or call.
     * @return array<EligibleOutgoingNumberResponse>|null
    */
    public function getEligibleNumbers(): ?array {
        return $this->eligibleNumbers;
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
            'eligibleNumbers' => fn(ParseNode $n) => $o->setEligibleNumbers($n->getCollectionOfObjectValues([EligibleOutgoingNumberResponse::class, 'createFromDiscriminatorValue'])),
            'healthLabel' => fn(ParseNode $n) => $o->setHealthLabel($n->getStringValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(OutgoingNumberSelectionResponse_healthStatus::class)),
            'healthWarning' => fn(ParseNode $n) => $o->setHealthWarning($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'phoneNumberId' => fn(ParseNode $n) => $o->setPhoneNumberId($n->getStringValue()),
            'reasonLabel' => fn(ParseNode $n) => $o->setReasonLabel($n->getStringValue()),
            'selectionReason' => fn(ParseNode $n) => $o->setSelectionReason($n->getEnumValue(OutgoingNumberSelectionResponse_selectionReason::class)),
            'setupMessage' => fn(ParseNode $n) => $o->setSetupMessage($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'wasManuallyOverridden' => fn(ParseNode $n) => $o->setWasManuallyOverridden($n->getBooleanValue()),
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
     * Gets the healthStatus property value. Defines the supported SMS readiness health assessments.
     * @return OutgoingNumberSelectionResponse_healthStatus|null
    */
    public function getHealthStatus(): ?OutgoingNumberSelectionResponse_healthStatus {
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
     * Gets the number property value. E.164 phone number exposed by this outgoing number selection response.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the phoneNumberId property value. Leadping phone number ID connected to this outgoing number selection response.
     * @return string|null
    */
    public function getPhoneNumberId(): ?string {
        return $this->phoneNumberId;
    }

    /**
     * Gets the reasonLabel property value. Human-readable label for the reason code on this outgoing number selection response.
     * @return string|null
    */
    public function getReasonLabel(): ?string {
        return $this->reasonLabel;
    }

    /**
     * Gets the selectionReason property value. Defines the supported Outgoing Number Selection Reason values.
     * @return OutgoingNumberSelectionResponse_selectionReason|null
    */
    public function getSelectionReason(): ?OutgoingNumberSelectionResponse_selectionReason {
        return $this->selectionReason;
    }

    /**
     * Gets the setupMessage property value. Human-readable setup guidance shown for this outgoing number selection response.
     * @return string|null
    */
    public function getSetupMessage(): ?string {
        return $this->setupMessage;
    }

    /**
     * Gets the sourceId property value. Lead source ID considered when Leadping selected the outgoing phone number.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this outgoing number selection response.
     * @return bool|null
    */
    public function getWasManuallyOverridden(): ?bool {
        return $this->wasManuallyOverridden;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeBooleanValue('canSend', $this->getCanSend());
        $writer->writeStringValue('displayNumber', $this->getDisplayNumber());
        $writer->writeCollectionOfObjectValues('eligibleNumbers', $this->getEligibleNumbers());
        $writer->writeStringValue('healthLabel', $this->getHealthLabel());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('healthWarning', $this->getHealthWarning());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('phoneNumberId', $this->getPhoneNumberId());
        $writer->writeStringValue('reasonLabel', $this->getReasonLabel());
        $writer->writeEnumValue('selectionReason', $this->getSelectionReason());
        $writer->writeStringValue('setupMessage', $this->getSetupMessage());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeBooleanValue('wasManuallyOverridden', $this->getWasManuallyOverridden());
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
     * Sets the campaignId property value. Messaging campaign identifier associated with this outgoing number selection response.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the canSend property value. Indicates whether Leadping can send outbound messages using this outgoing number selection response.
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
     * Sets the eligibleNumbers property value. Phone numbers that are eligible to send the requested outbound message or call.
     * @param array<EligibleOutgoingNumberResponse>|null $value Value to set for the eligibleNumbers property.
    */
    public function setEligibleNumbers(?array $value): void {
        $this->eligibleNumbers = $value;
    }

    /**
     * Sets the healthLabel property value. Short label describing the health state for display in dashboards.
     * @param string|null $value Value to set for the healthLabel property.
    */
    public function setHealthLabel(?string $value): void {
        $this->healthLabel = $value;
    }

    /**
     * Sets the healthStatus property value. Defines the supported SMS readiness health assessments.
     * @param OutgoingNumberSelectionResponse_healthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?OutgoingNumberSelectionResponse_healthStatus $value): void {
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
     * Sets the number property value. E.164 phone number exposed by this outgoing number selection response.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the phoneNumberId property value. Leadping phone number ID connected to this outgoing number selection response.
     * @param string|null $value Value to set for the phoneNumberId property.
    */
    public function setPhoneNumberId(?string $value): void {
        $this->phoneNumberId = $value;
    }

    /**
     * Sets the reasonLabel property value. Human-readable label for the reason code on this outgoing number selection response.
     * @param string|null $value Value to set for the reasonLabel property.
    */
    public function setReasonLabel(?string $value): void {
        $this->reasonLabel = $value;
    }

    /**
     * Sets the selectionReason property value. Defines the supported Outgoing Number Selection Reason values.
     * @param OutgoingNumberSelectionResponse_selectionReason|null $value Value to set for the selectionReason property.
    */
    public function setSelectionReason(?OutgoingNumberSelectionResponse_selectionReason $value): void {
        $this->selectionReason = $value;
    }

    /**
     * Sets the setupMessage property value. Human-readable setup guidance shown for this outgoing number selection response.
     * @param string|null $value Value to set for the setupMessage property.
    */
    public function setSetupMessage(?string $value): void {
        $this->setupMessage = $value;
    }

    /**
     * Sets the sourceId property value. Lead source ID considered when Leadping selected the outgoing phone number.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the wasManuallyOverridden property value. Indicates whether a user manually overrode Leadping's automatic number selection for this outgoing number selection response.
     * @param bool|null $value Value to set for the wasManuallyOverridden property.
    */
    public function setWasManuallyOverridden(?bool $value): void {
        $this->wasManuallyOverridden = $value;
    }

}
