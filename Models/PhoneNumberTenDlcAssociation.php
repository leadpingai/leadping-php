<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for phone number 10DLC association data.
*/
class PhoneNumberTenDlcAssociation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $assignmentStatus Provider assignment status for linking the phone number to a 10DLC campaign.
    */
    private ?string $assignmentStatus = null;
    
    /**
     * @var string|null $brandId 10DLC brand identifier associated with this phone number or campaign.
    */
    private ?string $brandId = null;
    
    /**
     * @var string|null $campaignId Messaging campaign identifier associated with this phone number 10DLC association.
    */
    private ?string $campaignId = null;
    
    /**
     * @var string|null $campaignStatus 10DLC campaign status reported by the messaging provider.
    */
    private ?string $campaignStatus = null;
    
    /**
     * @var string|null $failureReason Human-readable reason explaining why this phone number 10DLC association failed.
    */
    private ?string $failureReason = null;
    
    /**
     * @var string|null $lastProviderEventId Most recent provider event identifier processed for this phone number 10DLC association.
    */
    private ?string $lastProviderEventId = null;
    
    /**
     * @var string|null $messagingProfileId Messaging profile identifier used for SMS routing with the provider.
    */
    private ?string $messagingProfileId = null;
    
    /**
     * @var DateTime|null $statusUpdatedAt UTC timestamp when s ta tu su pd at e d occurred for this phone number 10DLC association.
    */
    private ?DateTime $statusUpdatedAt = null;
    
    /**
     * Instantiates a new PhoneNumberTenDlcAssociation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberTenDlcAssociation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberTenDlcAssociation {
        return new PhoneNumberTenDlcAssociation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the assignmentStatus property value. Provider assignment status for linking the phone number to a 10DLC campaign.
     * @return string|null
    */
    public function getAssignmentStatus(): ?string {
        return $this->assignmentStatus;
    }

    /**
     * Gets the brandId property value. 10DLC brand identifier associated with this phone number or campaign.
     * @return string|null
    */
    public function getBrandId(): ?string {
        return $this->brandId;
    }

    /**
     * Gets the campaignId property value. Messaging campaign identifier associated with this phone number 10DLC association.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the campaignStatus property value. 10DLC campaign status reported by the messaging provider.
     * @return string|null
    */
    public function getCampaignStatus(): ?string {
        return $this->campaignStatus;
    }

    /**
     * Gets the failureReason property value. Human-readable reason explaining why this phone number 10DLC association failed.
     * @return string|null
    */
    public function getFailureReason(): ?string {
        return $this->failureReason;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentStatus' => fn(ParseNode $n) => $o->setAssignmentStatus($n->getStringValue()),
            'brandId' => fn(ParseNode $n) => $o->setBrandId($n->getStringValue()),
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'campaignStatus' => fn(ParseNode $n) => $o->setCampaignStatus($n->getStringValue()),
            'failureReason' => fn(ParseNode $n) => $o->setFailureReason($n->getStringValue()),
            'lastProviderEventId' => fn(ParseNode $n) => $o->setLastProviderEventId($n->getStringValue()),
            'messagingProfileId' => fn(ParseNode $n) => $o->setMessagingProfileId($n->getStringValue()),
            'statusUpdatedAt' => fn(ParseNode $n) => $o->setStatusUpdatedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the lastProviderEventId property value. Most recent provider event identifier processed for this phone number 10DLC association.
     * @return string|null
    */
    public function getLastProviderEventId(): ?string {
        return $this->lastProviderEventId;
    }

    /**
     * Gets the messagingProfileId property value. Messaging profile identifier used for SMS routing with the provider.
     * @return string|null
    */
    public function getMessagingProfileId(): ?string {
        return $this->messagingProfileId;
    }

    /**
     * Gets the statusUpdatedAt property value. UTC timestamp when s ta tu su pd at e d occurred for this phone number 10DLC association.
     * @return DateTime|null
    */
    public function getStatusUpdatedAt(): ?DateTime {
        return $this->statusUpdatedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignmentStatus', $this->getAssignmentStatus());
        $writer->writeStringValue('brandId', $this->getBrandId());
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeStringValue('campaignStatus', $this->getCampaignStatus());
        $writer->writeStringValue('failureReason', $this->getFailureReason());
        $writer->writeStringValue('lastProviderEventId', $this->getLastProviderEventId());
        $writer->writeStringValue('messagingProfileId', $this->getMessagingProfileId());
        $writer->writeDateTimeValue('statusUpdatedAt', $this->getStatusUpdatedAt());
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
     * Sets the assignmentStatus property value. Provider assignment status for linking the phone number to a 10DLC campaign.
     * @param string|null $value Value to set for the assignmentStatus property.
    */
    public function setAssignmentStatus(?string $value): void {
        $this->assignmentStatus = $value;
    }

    /**
     * Sets the brandId property value. 10DLC brand identifier associated with this phone number or campaign.
     * @param string|null $value Value to set for the brandId property.
    */
    public function setBrandId(?string $value): void {
        $this->brandId = $value;
    }

    /**
     * Sets the campaignId property value. Messaging campaign identifier associated with this phone number 10DLC association.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the campaignStatus property value. 10DLC campaign status reported by the messaging provider.
     * @param string|null $value Value to set for the campaignStatus property.
    */
    public function setCampaignStatus(?string $value): void {
        $this->campaignStatus = $value;
    }

    /**
     * Sets the failureReason property value. Human-readable reason explaining why this phone number 10DLC association failed.
     * @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value): void {
        $this->failureReason = $value;
    }

    /**
     * Sets the lastProviderEventId property value. Most recent provider event identifier processed for this phone number 10DLC association.
     * @param string|null $value Value to set for the lastProviderEventId property.
    */
    public function setLastProviderEventId(?string $value): void {
        $this->lastProviderEventId = $value;
    }

    /**
     * Sets the messagingProfileId property value. Messaging profile identifier used for SMS routing with the provider.
     * @param string|null $value Value to set for the messagingProfileId property.
    */
    public function setMessagingProfileId(?string $value): void {
        $this->messagingProfileId = $value;
    }

    /**
     * Sets the statusUpdatedAt property value. UTC timestamp when s ta tu su pd at e d occurred for this phone number 10DLC association.
     * @param DateTime|null $value Value to set for the statusUpdatedAt property.
    */
    public function setStatusUpdatedAt(?DateTime $value): void {
        $this->statusUpdatedAt = $value;
    }

}
