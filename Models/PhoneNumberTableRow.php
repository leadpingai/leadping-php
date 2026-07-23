<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * List item schema for Leadping API phone number table row results shown in searchable tables.
*/
class PhoneNumberTableRow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $business Business summary connected to this phone number table row.
    */
    private ?string $business = null;
    
    /**
     * @var string|null $businessId Unique Leadping business identifier connected to this phone number table row.
    */
    private ?string $businessId = null;
    
    /**
     * @var bool|null $enabled Indicates whether this phone number table row is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this phone number table row.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name Optional display label for this phone number table row in the Leadping API.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this phone number table row.
    */
    private ?string $number = null;
    
    /**
     * @var string|null $ownership Ownership classification for this phone number, such as Leadping-owned or customer-owned.
    */
    private ?string $ownership = null;
    
    /**
     * @var string|null $routingSummary Human-readable routing summary for this phone number.
    */
    private ?string $routingSummary = null;
    
    /**
     * @var bool|null $smsReady Indicates whether SMS messaging is ready for this business or phone number.
    */
    private ?bool $smsReady = null;
    
    /**
     * @var string|null $tenDlcCampaignStatus 10DLC campaign status associated with this sender or SMS event.
    */
    private ?string $tenDlcCampaignStatus = null;
    
    /**
     * @var string|null $type Type classification used to route and interpret this phone number table row in the Leadping API.
    */
    private ?string $type = null;
    
    /**
     * @var bool|null $voiceReady Indicates whether voice calling is ready for this business or phone number.
    */
    private ?bool $voiceReady = null;
    
    /**
     * @var PhoneNumberReadiness|null $warmup Warmup state for this phone number.
    */
    private ?PhoneNumberReadiness $warmup = null;
    
    /**
     * Instantiates a new PhoneNumberTableRow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberTableRow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberTableRow {
        return new PhoneNumberTableRow();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the business property value. Business summary connected to this phone number table row.
     * @return string|null
    */
    public function getBusiness(): ?string {
        return $this->business;
    }

    /**
     * Gets the businessId property value. Unique Leadping business identifier connected to this phone number table row.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the enabled property value. Indicates whether this phone number table row is active and available in the Leadping API.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getStringValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'ownership' => fn(ParseNode $n) => $o->setOwnership($n->getStringValue()),
            'routingSummary' => fn(ParseNode $n) => $o->setRoutingSummary($n->getStringValue()),
            'smsReady' => fn(ParseNode $n) => $o->setSmsReady($n->getBooleanValue()),
            'tenDlcCampaignStatus' => fn(ParseNode $n) => $o->setTenDlcCampaignStatus($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'voiceReady' => fn(ParseNode $n) => $o->setVoiceReady($n->getBooleanValue()),
            'warmup' => fn(ParseNode $n) => $o->setWarmup($n->getObjectValue([PhoneNumberReadiness::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this phone number table row.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. Optional display label for this phone number table row in the Leadping API.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the number property value. E.164 phone number exposed by this phone number table row.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the ownership property value. Ownership classification for this phone number, such as Leadping-owned or customer-owned.
     * @return string|null
    */
    public function getOwnership(): ?string {
        return $this->ownership;
    }

    /**
     * Gets the routingSummary property value. Human-readable routing summary for this phone number.
     * @return string|null
    */
    public function getRoutingSummary(): ?string {
        return $this->routingSummary;
    }

    /**
     * Gets the smsReady property value. Indicates whether SMS messaging is ready for this business or phone number.
     * @return bool|null
    */
    public function getSmsReady(): ?bool {
        return $this->smsReady;
    }

    /**
     * Gets the tenDlcCampaignStatus property value. 10DLC campaign status associated with this sender or SMS event.
     * @return string|null
    */
    public function getTenDlcCampaignStatus(): ?string {
        return $this->tenDlcCampaignStatus;
    }

    /**
     * Gets the type property value. Type classification used to route and interpret this phone number table row in the Leadping API.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Gets the voiceReady property value. Indicates whether voice calling is ready for this business or phone number.
     * @return bool|null
    */
    public function getVoiceReady(): ?bool {
        return $this->voiceReady;
    }

    /**
     * Gets the warmup property value. Warmup state for this phone number.
     * @return PhoneNumberReadiness|null
    */
    public function getWarmup(): ?PhoneNumberReadiness {
        return $this->warmup;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('business', $this->getBusiness());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('ownership', $this->getOwnership());
        $writer->writeStringValue('routingSummary', $this->getRoutingSummary());
        $writer->writeBooleanValue('smsReady', $this->getSmsReady());
        $writer->writeStringValue('tenDlcCampaignStatus', $this->getTenDlcCampaignStatus());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeBooleanValue('voiceReady', $this->getVoiceReady());
        $writer->writeObjectValue('warmup', $this->getWarmup());
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
     * Sets the business property value. Business summary connected to this phone number table row.
     * @param string|null $value Value to set for the business property.
    */
    public function setBusiness(?string $value): void {
        $this->business = $value;
    }

    /**
     * Sets the businessId property value. Unique Leadping business identifier connected to this phone number table row.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this phone number table row is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this phone number table row.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. Optional display label for this phone number table row in the Leadping API.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the number property value. E.164 phone number exposed by this phone number table row.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the ownership property value. Ownership classification for this phone number, such as Leadping-owned or customer-owned.
     * @param string|null $value Value to set for the ownership property.
    */
    public function setOwnership(?string $value): void {
        $this->ownership = $value;
    }

    /**
     * Sets the routingSummary property value. Human-readable routing summary for this phone number.
     * @param string|null $value Value to set for the routingSummary property.
    */
    public function setRoutingSummary(?string $value): void {
        $this->routingSummary = $value;
    }

    /**
     * Sets the smsReady property value. Indicates whether SMS messaging is ready for this business or phone number.
     * @param bool|null $value Value to set for the smsReady property.
    */
    public function setSmsReady(?bool $value): void {
        $this->smsReady = $value;
    }

    /**
     * Sets the tenDlcCampaignStatus property value. 10DLC campaign status associated with this sender or SMS event.
     * @param string|null $value Value to set for the tenDlcCampaignStatus property.
    */
    public function setTenDlcCampaignStatus(?string $value): void {
        $this->tenDlcCampaignStatus = $value;
    }

    /**
     * Sets the type property value. Type classification used to route and interpret this phone number table row in the Leadping API.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

    /**
     * Sets the voiceReady property value. Indicates whether voice calling is ready for this business or phone number.
     * @param bool|null $value Value to set for the voiceReady property.
    */
    public function setVoiceReady(?bool $value): void {
        $this->voiceReady = $value;
    }

    /**
     * Sets the warmup property value. Warmup state for this phone number.
     * @param PhoneNumberReadiness|null $value Value to set for the warmup property.
    */
    public function setWarmup(?PhoneNumberReadiness $value): void {
        $this->warmup = $value;
    }

}
