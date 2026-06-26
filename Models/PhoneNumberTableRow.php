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
     * @var PhoneNumberTableRow_adminEnablementOverride|null $adminEnablementOverride Admin override that can enable or disable this record independently of normal status checks.
    */
    private ?PhoneNumberTableRow_adminEnablementOverride $adminEnablementOverride = null;
    
    /**
     * @var string|null $billingAttribution Billing attribution used to reconcile this phone number with subscription billing.
    */
    private ?string $billingAttribution = null;
    
    /**
     * @var string|null $business Business summary connected to this phone number table row.
    */
    private ?string $business = null;
    
    /**
     * @var string|null $capabilities SMS and voice capabilities available on this phone number.
    */
    private ?string $capabilities = null;
    
    /**
     * @var bool|null $enabled Indicates whether this phone number table row is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var PhoneNumberTableRow_healthStatus|null $healthStatus Defines the supported SMS Warmup Health State values.
    */
    private ?PhoneNumberTableRow_healthStatus $healthStatus = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this phone number table row.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $internalTestOnly Indicates whether this record is restricted to internal Leadping testing.
    */
    private ?bool $internalTestOnly = null;
    
    /**
     * @var PhoneNumberInventoryState|null $inventoryState Leadping inventory state for this phone number.
    */
    private ?PhoneNumberInventoryState $inventoryState = null;
    
    /**
     * @var bool|null $isMessagingProgramApproved Indicates whether this phone number is approved for the configured messaging program.
    */
    private ?bool $isMessagingProgramApproved = null;
    
    /**
     * @var string|null $location Geographic location metadata for the phone number, lead, or lookup result.
    */
    private ?string $location = null;
    
    /**
     * @var string|null $name Display name for this phone number table row in the Leadping API.
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
     * @var PhoneNumberProviderLifecycleState|null $providerLifecycleState Provider lifecycle state used to determine phone number readiness.
    */
    private ?PhoneNumberProviderLifecycleState $providerLifecycleState = null;
    
    /**
     * @var string|null $providerReconciliationStatus Reconciliation status comparing Leadping data with provider data.
    */
    private ?string $providerReconciliationStatus = null;
    
    /**
     * @var string|null $providerStatus Provider lifecycle or delivery status for this phone number table row.
    */
    private ?string $providerStatus = null;
    
    /**
     * @var string|null $routingSummary Human-readable routing summary for this phone number.
    */
    private ?string $routingSummary = null;
    
    /**
     * @var bool|null $smsReady Indicates whether SMS messaging is ready for this business or phone number.
    */
    private ?bool $smsReady = null;
    
    /**
     * @var InternalPhoneNumberStatus|null $status Current lifecycle status for this phone number table row in the Leadping API.
    */
    private ?InternalPhoneNumberStatus $status = null;
    
    /**
     * @var string|null $tenDlcCampaignId 10DLC campaign identifier associated with this sender or SMS event.
    */
    private ?string $tenDlcCampaignId = null;
    
    /**
     * @var string|null $tenDlcCampaignStatus 10DLC campaign status associated with this sender or SMS event.
    */
    private ?string $tenDlcCampaignStatus = null;
    
    /**
     * @var string|null $type Type classification used to route and interpret this phone number table row in the Leadping API.
    */
    private ?string $type = null;
    
    /**
     * @var string|null $user User summary connected to this phone number table row.
    */
    private ?string $user = null;
    
    /**
     * @var bool|null $voiceReady Indicates whether voice calling is ready for this business or phone number.
    */
    private ?bool $voiceReady = null;
    
    /**
     * @var int|null $warmupHealthScore Numeric sender warmup health score used by Leadping to assess deliverability readiness.
    */
    private ?int $warmupHealthScore = null;
    
    /**
     * @var bool|null $warmupOnly Indicates whether this phone number should only be used for warmup traffic.
    */
    private ?bool $warmupOnly = null;
    
    /**
     * @var int|null $warmupProgressPercent Percent complete for the SMS sender warmup plan.
    */
    private ?int $warmupProgressPercent = null;
    
    /**
     * @var PhoneNumberTableRow_warmupState|null $warmupState Defines the supported SMS Warmup Health State values.
    */
    private ?PhoneNumberTableRow_warmupState $warmupState = null;
    
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
     * Gets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @return PhoneNumberTableRow_adminEnablementOverride|null
    */
    public function getAdminEnablementOverride(): ?PhoneNumberTableRow_adminEnablementOverride {
        return $this->adminEnablementOverride;
    }

    /**
     * Gets the billingAttribution property value. Billing attribution used to reconcile this phone number with subscription billing.
     * @return string|null
    */
    public function getBillingAttribution(): ?string {
        return $this->billingAttribution;
    }

    /**
     * Gets the business property value. Business summary connected to this phone number table row.
     * @return string|null
    */
    public function getBusiness(): ?string {
        return $this->business;
    }

    /**
     * Gets the capabilities property value. SMS and voice capabilities available on this phone number.
     * @return string|null
    */
    public function getCapabilities(): ?string {
        return $this->capabilities;
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
            'adminEnablementOverride' => fn(ParseNode $n) => $o->setAdminEnablementOverride($n->getObjectValue([PhoneNumberTableRow_adminEnablementOverride::class, 'createFromDiscriminatorValue'])),
            'billingAttribution' => fn(ParseNode $n) => $o->setBillingAttribution($n->getStringValue()),
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getStringValue()),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getStringValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(PhoneNumberTableRow_healthStatus::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'internalTestOnly' => fn(ParseNode $n) => $o->setInternalTestOnly($n->getBooleanValue()),
            'inventoryState' => fn(ParseNode $n) => $o->setInventoryState($n->getEnumValue(PhoneNumberInventoryState::class)),
            'isMessagingProgramApproved' => fn(ParseNode $n) => $o->setIsMessagingProgramApproved($n->getBooleanValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'ownership' => fn(ParseNode $n) => $o->setOwnership($n->getStringValue()),
            'providerLifecycleState' => fn(ParseNode $n) => $o->setProviderLifecycleState($n->getEnumValue(PhoneNumberProviderLifecycleState::class)),
            'providerReconciliationStatus' => fn(ParseNode $n) => $o->setProviderReconciliationStatus($n->getStringValue()),
            'providerStatus' => fn(ParseNode $n) => $o->setProviderStatus($n->getStringValue()),
            'routingSummary' => fn(ParseNode $n) => $o->setRoutingSummary($n->getStringValue()),
            'smsReady' => fn(ParseNode $n) => $o->setSmsReady($n->getBooleanValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(InternalPhoneNumberStatus::class)),
            'tenDlcCampaignId' => fn(ParseNode $n) => $o->setTenDlcCampaignId($n->getStringValue()),
            'tenDlcCampaignStatus' => fn(ParseNode $n) => $o->setTenDlcCampaignStatus($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getStringValue()),
            'voiceReady' => fn(ParseNode $n) => $o->setVoiceReady($n->getBooleanValue()),
            'warmupHealthScore' => fn(ParseNode $n) => $o->setWarmupHealthScore($n->getIntegerValue()),
            'warmupOnly' => fn(ParseNode $n) => $o->setWarmupOnly($n->getBooleanValue()),
            'warmupProgressPercent' => fn(ParseNode $n) => $o->setWarmupProgressPercent($n->getIntegerValue()),
            'warmupState' => fn(ParseNode $n) => $o->setWarmupState($n->getEnumValue(PhoneNumberTableRow_warmupState::class)),
        ];
    }

    /**
     * Gets the healthStatus property value. Defines the supported SMS Warmup Health State values.
     * @return PhoneNumberTableRow_healthStatus|null
    */
    public function getHealthStatus(): ?PhoneNumberTableRow_healthStatus {
        return $this->healthStatus;
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this phone number table row.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the internalTestOnly property value. Indicates whether this record is restricted to internal Leadping testing.
     * @return bool|null
    */
    public function getInternalTestOnly(): ?bool {
        return $this->internalTestOnly;
    }

    /**
     * Gets the inventoryState property value. Leadping inventory state for this phone number.
     * @return PhoneNumberInventoryState|null
    */
    public function getInventoryState(): ?PhoneNumberInventoryState {
        return $this->inventoryState;
    }

    /**
     * Gets the isMessagingProgramApproved property value. Indicates whether this phone number is approved for the configured messaging program.
     * @return bool|null
    */
    public function getIsMessagingProgramApproved(): ?bool {
        return $this->isMessagingProgramApproved;
    }

    /**
     * Gets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @return string|null
    */
    public function getLocation(): ?string {
        return $this->location;
    }

    /**
     * Gets the name property value. Display name for this phone number table row in the Leadping API.
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
     * Gets the providerLifecycleState property value. Provider lifecycle state used to determine phone number readiness.
     * @return PhoneNumberProviderLifecycleState|null
    */
    public function getProviderLifecycleState(): ?PhoneNumberProviderLifecycleState {
        return $this->providerLifecycleState;
    }

    /**
     * Gets the providerReconciliationStatus property value. Reconciliation status comparing Leadping data with provider data.
     * @return string|null
    */
    public function getProviderReconciliationStatus(): ?string {
        return $this->providerReconciliationStatus;
    }

    /**
     * Gets the providerStatus property value. Provider lifecycle or delivery status for this phone number table row.
     * @return string|null
    */
    public function getProviderStatus(): ?string {
        return $this->providerStatus;
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
     * Gets the status property value. Current lifecycle status for this phone number table row in the Leadping API.
     * @return InternalPhoneNumberStatus|null
    */
    public function getStatus(): ?InternalPhoneNumberStatus {
        return $this->status;
    }

    /**
     * Gets the tenDlcCampaignId property value. 10DLC campaign identifier associated with this sender or SMS event.
     * @return string|null
    */
    public function getTenDlcCampaignId(): ?string {
        return $this->tenDlcCampaignId;
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
     * Gets the user property value. User summary connected to this phone number table row.
     * @return string|null
    */
    public function getUser(): ?string {
        return $this->user;
    }

    /**
     * Gets the voiceReady property value. Indicates whether voice calling is ready for this business or phone number.
     * @return bool|null
    */
    public function getVoiceReady(): ?bool {
        return $this->voiceReady;
    }

    /**
     * Gets the warmupHealthScore property value. Numeric sender warmup health score used by Leadping to assess deliverability readiness.
     * @return int|null
    */
    public function getWarmupHealthScore(): ?int {
        return $this->warmupHealthScore;
    }

    /**
     * Gets the warmupOnly property value. Indicates whether this phone number should only be used for warmup traffic.
     * @return bool|null
    */
    public function getWarmupOnly(): ?bool {
        return $this->warmupOnly;
    }

    /**
     * Gets the warmupProgressPercent property value. Percent complete for the SMS sender warmup plan.
     * @return int|null
    */
    public function getWarmupProgressPercent(): ?int {
        return $this->warmupProgressPercent;
    }

    /**
     * Gets the warmupState property value. Defines the supported SMS Warmup Health State values.
     * @return PhoneNumberTableRow_warmupState|null
    */
    public function getWarmupState(): ?PhoneNumberTableRow_warmupState {
        return $this->warmupState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('adminEnablementOverride', $this->getAdminEnablementOverride());
        $writer->writeStringValue('billingAttribution', $this->getBillingAttribution());
        $writer->writeStringValue('business', $this->getBusiness());
        $writer->writeStringValue('capabilities', $this->getCapabilities());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('internalTestOnly', $this->getInternalTestOnly());
        $writer->writeEnumValue('inventoryState', $this->getInventoryState());
        $writer->writeBooleanValue('isMessagingProgramApproved', $this->getIsMessagingProgramApproved());
        $writer->writeStringValue('location', $this->getLocation());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('ownership', $this->getOwnership());
        $writer->writeEnumValue('providerLifecycleState', $this->getProviderLifecycleState());
        $writer->writeStringValue('providerReconciliationStatus', $this->getProviderReconciliationStatus());
        $writer->writeStringValue('providerStatus', $this->getProviderStatus());
        $writer->writeStringValue('routingSummary', $this->getRoutingSummary());
        $writer->writeBooleanValue('smsReady', $this->getSmsReady());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('tenDlcCampaignId', $this->getTenDlcCampaignId());
        $writer->writeStringValue('tenDlcCampaignStatus', $this->getTenDlcCampaignStatus());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('user', $this->getUser());
        $writer->writeBooleanValue('voiceReady', $this->getVoiceReady());
        $writer->writeIntegerValue('warmupHealthScore', $this->getWarmupHealthScore());
        $writer->writeBooleanValue('warmupOnly', $this->getWarmupOnly());
        $writer->writeIntegerValue('warmupProgressPercent', $this->getWarmupProgressPercent());
        $writer->writeEnumValue('warmupState', $this->getWarmupState());
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
     * Sets the adminEnablementOverride property value. Admin override that can enable or disable this record independently of normal status checks.
     * @param PhoneNumberTableRow_adminEnablementOverride|null $value Value to set for the adminEnablementOverride property.
    */
    public function setAdminEnablementOverride(?PhoneNumberTableRow_adminEnablementOverride $value): void {
        $this->adminEnablementOverride = $value;
    }

    /**
     * Sets the billingAttribution property value. Billing attribution used to reconcile this phone number with subscription billing.
     * @param string|null $value Value to set for the billingAttribution property.
    */
    public function setBillingAttribution(?string $value): void {
        $this->billingAttribution = $value;
    }

    /**
     * Sets the business property value. Business summary connected to this phone number table row.
     * @param string|null $value Value to set for the business property.
    */
    public function setBusiness(?string $value): void {
        $this->business = $value;
    }

    /**
     * Sets the capabilities property value. SMS and voice capabilities available on this phone number.
     * @param string|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?string $value): void {
        $this->capabilities = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this phone number table row is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the healthStatus property value. Defines the supported SMS Warmup Health State values.
     * @param PhoneNumberTableRow_healthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?PhoneNumberTableRow_healthStatus $value): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this phone number table row.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the internalTestOnly property value. Indicates whether this record is restricted to internal Leadping testing.
     * @param bool|null $value Value to set for the internalTestOnly property.
    */
    public function setInternalTestOnly(?bool $value): void {
        $this->internalTestOnly = $value;
    }

    /**
     * Sets the inventoryState property value. Leadping inventory state for this phone number.
     * @param PhoneNumberInventoryState|null $value Value to set for the inventoryState property.
    */
    public function setInventoryState(?PhoneNumberInventoryState $value): void {
        $this->inventoryState = $value;
    }

    /**
     * Sets the isMessagingProgramApproved property value. Indicates whether this phone number is approved for the configured messaging program.
     * @param bool|null $value Value to set for the isMessagingProgramApproved property.
    */
    public function setIsMessagingProgramApproved(?bool $value): void {
        $this->isMessagingProgramApproved = $value;
    }

    /**
     * Sets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @param string|null $value Value to set for the location property.
    */
    public function setLocation(?string $value): void {
        $this->location = $value;
    }

    /**
     * Sets the name property value. Display name for this phone number table row in the Leadping API.
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
     * Sets the providerLifecycleState property value. Provider lifecycle state used to determine phone number readiness.
     * @param PhoneNumberProviderLifecycleState|null $value Value to set for the providerLifecycleState property.
    */
    public function setProviderLifecycleState(?PhoneNumberProviderLifecycleState $value): void {
        $this->providerLifecycleState = $value;
    }

    /**
     * Sets the providerReconciliationStatus property value. Reconciliation status comparing Leadping data with provider data.
     * @param string|null $value Value to set for the providerReconciliationStatus property.
    */
    public function setProviderReconciliationStatus(?string $value): void {
        $this->providerReconciliationStatus = $value;
    }

    /**
     * Sets the providerStatus property value. Provider lifecycle or delivery status for this phone number table row.
     * @param string|null $value Value to set for the providerStatus property.
    */
    public function setProviderStatus(?string $value): void {
        $this->providerStatus = $value;
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
     * Sets the status property value. Current lifecycle status for this phone number table row in the Leadping API.
     * @param InternalPhoneNumberStatus|null $value Value to set for the status property.
    */
    public function setStatus(?InternalPhoneNumberStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the tenDlcCampaignId property value. 10DLC campaign identifier associated with this sender or SMS event.
     * @param string|null $value Value to set for the tenDlcCampaignId property.
    */
    public function setTenDlcCampaignId(?string $value): void {
        $this->tenDlcCampaignId = $value;
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
     * Sets the user property value. User summary connected to this phone number table row.
     * @param string|null $value Value to set for the user property.
    */
    public function setUser(?string $value): void {
        $this->user = $value;
    }

    /**
     * Sets the voiceReady property value. Indicates whether voice calling is ready for this business or phone number.
     * @param bool|null $value Value to set for the voiceReady property.
    */
    public function setVoiceReady(?bool $value): void {
        $this->voiceReady = $value;
    }

    /**
     * Sets the warmupHealthScore property value. Numeric sender warmup health score used by Leadping to assess deliverability readiness.
     * @param int|null $value Value to set for the warmupHealthScore property.
    */
    public function setWarmupHealthScore(?int $value): void {
        $this->warmupHealthScore = $value;
    }

    /**
     * Sets the warmupOnly property value. Indicates whether this phone number should only be used for warmup traffic.
     * @param bool|null $value Value to set for the warmupOnly property.
    */
    public function setWarmupOnly(?bool $value): void {
        $this->warmupOnly = $value;
    }

    /**
     * Sets the warmupProgressPercent property value. Percent complete for the SMS sender warmup plan.
     * @param int|null $value Value to set for the warmupProgressPercent property.
    */
    public function setWarmupProgressPercent(?int $value): void {
        $this->warmupProgressPercent = $value;
    }

    /**
     * Sets the warmupState property value. Defines the supported SMS Warmup Health State values.
     * @param PhoneNumberTableRow_warmupState|null $value Value to set for the warmupState property.
    */
    public function setWarmupState(?PhoneNumberTableRow_warmupState $value): void {
        $this->warmupState = $value;
    }

}
