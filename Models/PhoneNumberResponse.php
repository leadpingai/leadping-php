<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API phone number returned to authenticated clients.
*/
class PhoneNumberResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PhoneNumberResponse_adminEnablementOverride|null $adminEnablementOverride Admin override that can enable or disable this record independently of normal status checks.
    */
    private ?PhoneNumberResponse_adminEnablementOverride $adminEnablementOverride = null;
    
    /**
     * @var PhoneNumberBillingAttribution|null $billing Billing attribution used to charge this phone number to the correct business and subscription item.
    */
    private ?PhoneNumberBillingAttribution $billing = null;
    
    /**
     * @var PhoneNumberResponse_business|null $business Business summary connected to this phone number.
    */
    private ?PhoneNumberResponse_business $business = null;
    
    /**
     * @var bool|null $callWarmupEnabled Indicates whether controlled voice call warmup is enabled for this phone number.
    */
    private ?bool $callWarmupEnabled = null;
    
    /**
     * @var string|null $callWarmupHealthReason Human-readable reason explaining voice call warmup health.
    */
    private ?string $callWarmupHealthReason = null;
    
    /**
     * @var DateTime|null $callWarmupNextActionAt UTC timestamp when the next voice call warmup action is due for this phone number.
    */
    private ?DateTime $callWarmupNextActionAt = null;
    
    /**
     * @var string|null $callWarmupPauseReason Human-readable reason voice call warmup is paused.
    */
    private ?string $callWarmupPauseReason = null;
    
    /**
     * @var PhoneNumberResponse_callWarmupStage|null $callWarmupStage Defines the supported voice call warmup stages for a Leadping-managed phone number.
    */
    private ?PhoneNumberResponse_callWarmupStage $callWarmupStage = null;
    
    /**
     * @var PhoneNumberResponse_callWarmupState|null $callWarmupState Defines the supported health states for controlled internal voice call warmup.
    */
    private ?PhoneNumberResponse_callWarmupState $callWarmupState = null;
    
    /**
     * @var string|null $campaignId Messaging campaign identifier associated with this phone number.
    */
    private ?string $campaignId = null;
    
    /**
     * @var PhoneNumberCapabilities|null $capabilities SMS and voice capabilities available on this phone number.
    */
    private ?PhoneNumberCapabilities $capabilities = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var bool|null $enabled Indicates whether this phone number is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var array<PhoneNumberEventRecord>|null $events Timeline events and provider events associated with this phone number.
    */
    private ?array $events = null;
    
    /**
     * @var string|null $healthReason Human-readable reason explaining the current health status.
    */
    private ?string $healthReason = null;
    
    /**
     * @var PhoneNumberResponse_healthStatus|null $healthStatus Defines the supported SMS Warmup Health State values.
    */
    private ?PhoneNumberResponse_healthStatus $healthStatus = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var PhoneNumberInventoryState|null $inventoryState Leadping inventory state for this phone number.
    */
    private ?PhoneNumberInventoryState $inventoryState = null;
    
    /**
     * @var bool|null $isApprovedTestDestination Indicates whether this phone number is approved for test messages or calls.
    */
    private ?bool $isApprovedTestDestination = null;
    
    /**
     * @var bool|null $isDefault Indicates whether this phone number is the default sender for the business.
    */
    private ?bool $isDefault = null;
    
    /**
     * @var bool|null $isInternalPool Indicates whether this phone number belongs to an internal Leadping number pool.
    */
    private ?bool $isInternalPool = null;
    
    /**
     * @var bool|null $isMessagingProgramApproved Indicates whether this phone number is approved for the configured messaging program.
    */
    private ?bool $isMessagingProgramApproved = null;
    
    /**
     * @var bool|null $isPreferred Indicates whether this phone number is preferred for outbound communication.
    */
    private ?bool $isPreferred = null;
    
    /**
     * @var bool|null $leadpingOwned Indicates whether Leadping provisions and manages this phone number.
    */
    private ?bool $leadpingOwned = null;
    
    /**
     * @var PhoneNumberResponse_location|null $location Geographic location metadata for the phone number, lead, or lookup result.
    */
    private ?PhoneNumberResponse_location $location = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $number E.164 phone number exposed by this phone number.
    */
    private ?string $number = null;
    
    /**
     * @var string|null $provider Telephony or payment provider connected to this phone number.
    */
    private ?string $provider = null;
    
    /**
     * @var string|null $providerError Provider error message captured while syncing this phone number.
    */
    private ?string $providerError = null;
    
    /**
     * @var string|null $providerOrderId Provider order identifier returned during phone number provisioning.
    */
    private ?string $providerOrderId = null;
    
    /**
     * @var string|null $providerOrderStatus Provider order status returned during phone number provisioning.
    */
    private ?string $providerOrderStatus = null;
    
    /**
     * @var string|null $providerPhoneNumberId Provider phone number identifier used to reconcile Leadping inventory with Telnyx.
    */
    private ?string $providerPhoneNumberId = null;
    
    /**
     * @var DateTime|null $providerReleasedAt UTC timestamp when the provider released this phone number.
    */
    private ?DateTime $providerReleasedAt = null;
    
    /**
     * @var DateTime|null $providerReleaseHoldStartsAt UTC timestamp when the provider release hold starts for this phone number.
    */
    private ?DateTime $providerReleaseHoldStartsAt = null;
    
    /**
     * @var string|null $providerReleaseReason Reason supplied when requesting provider release of this phone number.
    */
    private ?string $providerReleaseReason = null;
    
    /**
     * @var DateTime|null $providerReleaseRequestedAt UTC timestamp when release was requested for this provider phone number.
    */
    private ?DateTime $providerReleaseRequestedAt = null;
    
    /**
     * @var string|null $providerReleaseRequestedByName Display name of the person who requested provider release of this phone number.
    */
    private ?string $providerReleaseRequestedByName = null;
    
    /**
     * @var string|null $providerReleaseRequestedByUserId User ID of the person who requested provider release of this phone number.
    */
    private ?string $providerReleaseRequestedByUserId = null;
    
    /**
     * @var DateTime|null $providerReleaseScheduledAt UTC timestamp when provider release is scheduled for this phone number.
    */
    private ?DateTime $providerReleaseScheduledAt = null;
    
    /**
     * @var bool|null $providerReleaseUnassignAtHoldStart Indicates whether Leadping should unassign the phone number when the provider release hold starts.
    */
    private ?bool $providerReleaseUnassignAtHoldStart = null;
    
    /**
     * @var string|null $providerStatus Provider lifecycle or delivery status for this phone number.
    */
    private ?string $providerStatus = null;
    
    /**
     * @var DateTime|null $providerSyncedAt UTC timestamp when Leadping last synchronized this phone number with the provider.
    */
    private ?DateTime $providerSyncedAt = null;
    
    /**
     * @var PhoneNumberRoutingMetadata|null $routing Routing metadata that connects this phone number to teams, campaigns, and sources.
    */
    private ?PhoneNumberRoutingMetadata $routing = null;
    
    /**
     * @var string|null $sourceId Lead source ID assigned to this phone number for attribution and routing.
    */
    private ?string $sourceId = null;
    
    /**
     * @var InternalPhoneNumberStatus|null $status Current lifecycle status for this phone number in the Leadping API.
    */
    private ?InternalPhoneNumberStatus $status = null;
    
    /**
     * @var string|null $teamId Team ID used to route calls and messages for this phone number.
    */
    private ?string $teamId = null;
    
    /**
     * @var PhoneNumberTenDlcAssociation|null $tenDlc 10DLC registration and campaign association for this phone number.
    */
    private ?PhoneNumberTenDlcAssociation $tenDlc = null;
    
    /**
     * @var PhoneNumberResponse_user|null $user User summary connected to this phone number.
    */
    private ?PhoneNumberResponse_user $user = null;
    
    /**
     * @var bool|null $warmupEnabled Indicates whether SMS sender warmup is enabled for this phone number.
    */
    private ?bool $warmupEnabled = null;
    
    /**
     * @var int|null $warmupHealthScore Numeric sender warmup health score used by Leadping to assess deliverability readiness.
    */
    private ?int $warmupHealthScore = null;
    
    /**
     * @var DateTime|null $warmupNextActionAt UTC timestamp when the next SMS warmup action is due for this phone number.
    */
    private ?DateTime $warmupNextActionAt = null;
    
    /**
     * @var string|null $warmupPauseReason Human-readable reason SMS sender warmup is paused.
    */
    private ?string $warmupPauseReason = null;
    
    /**
     * @var int|null $warmupProgressPercent Percent complete for the SMS sender warmup plan.
    */
    private ?int $warmupProgressPercent = null;
    
    /**
     * @var PhoneNumberResponse_warmupState|null $warmupState Defines the supported SMS Warmup Health State values.
    */
    private ?PhoneNumberResponse_warmupState $warmupState = null;
    
    /**
     * Instantiates a new PhoneNumberResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberResponse {
        return new PhoneNumberResponse();
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
     * @return PhoneNumberResponse_adminEnablementOverride|null
    */
    public function getAdminEnablementOverride(): ?PhoneNumberResponse_adminEnablementOverride {
        return $this->adminEnablementOverride;
    }

    /**
     * Gets the billing property value. Billing attribution used to charge this phone number to the correct business and subscription item.
     * @return PhoneNumberBillingAttribution|null
    */
    public function getBilling(): ?PhoneNumberBillingAttribution {
        return $this->billing;
    }

    /**
     * Gets the business property value. Business summary connected to this phone number.
     * @return PhoneNumberResponse_business|null
    */
    public function getBusiness(): ?PhoneNumberResponse_business {
        return $this->business;
    }

    /**
     * Gets the callWarmupEnabled property value. Indicates whether controlled voice call warmup is enabled for this phone number.
     * @return bool|null
    */
    public function getCallWarmupEnabled(): ?bool {
        return $this->callWarmupEnabled;
    }

    /**
     * Gets the callWarmupHealthReason property value. Human-readable reason explaining voice call warmup health.
     * @return string|null
    */
    public function getCallWarmupHealthReason(): ?string {
        return $this->callWarmupHealthReason;
    }

    /**
     * Gets the callWarmupNextActionAt property value. UTC timestamp when the next voice call warmup action is due for this phone number.
     * @return DateTime|null
    */
    public function getCallWarmupNextActionAt(): ?DateTime {
        return $this->callWarmupNextActionAt;
    }

    /**
     * Gets the callWarmupPauseReason property value. Human-readable reason voice call warmup is paused.
     * @return string|null
    */
    public function getCallWarmupPauseReason(): ?string {
        return $this->callWarmupPauseReason;
    }

    /**
     * Gets the callWarmupStage property value. Defines the supported voice call warmup stages for a Leadping-managed phone number.
     * @return PhoneNumberResponse_callWarmupStage|null
    */
    public function getCallWarmupStage(): ?PhoneNumberResponse_callWarmupStage {
        return $this->callWarmupStage;
    }

    /**
     * Gets the callWarmupState property value. Defines the supported health states for controlled internal voice call warmup.
     * @return PhoneNumberResponse_callWarmupState|null
    */
    public function getCallWarmupState(): ?PhoneNumberResponse_callWarmupState {
        return $this->callWarmupState;
    }

    /**
     * Gets the campaignId property value. Messaging campaign identifier associated with this phone number.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the capabilities property value. SMS and voice capabilities available on this phone number.
     * @return PhoneNumberCapabilities|null
    */
    public function getCapabilities(): ?PhoneNumberCapabilities {
        return $this->capabilities;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the enabled property value. Indicates whether this phone number is active and available in the Leadping API.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * Gets the events property value. Timeline events and provider events associated with this phone number.
     * @return array<PhoneNumberEventRecord>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adminEnablementOverride' => fn(ParseNode $n) => $o->setAdminEnablementOverride($n->getObjectValue([PhoneNumberResponse_adminEnablementOverride::class, 'createFromDiscriminatorValue'])),
            'billing' => fn(ParseNode $n) => $o->setBilling($n->getObjectValue([PhoneNumberBillingAttribution::class, 'createFromDiscriminatorValue'])),
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([PhoneNumberResponse_business::class, 'createFromDiscriminatorValue'])),
            'callWarmupEnabled' => fn(ParseNode $n) => $o->setCallWarmupEnabled($n->getBooleanValue()),
            'callWarmupHealthReason' => fn(ParseNode $n) => $o->setCallWarmupHealthReason($n->getStringValue()),
            'callWarmupNextActionAt' => fn(ParseNode $n) => $o->setCallWarmupNextActionAt($n->getDateTimeValue()),
            'callWarmupPauseReason' => fn(ParseNode $n) => $o->setCallWarmupPauseReason($n->getStringValue()),
            'callWarmupStage' => fn(ParseNode $n) => $o->setCallWarmupStage($n->getEnumValue(PhoneNumberResponse_callWarmupStage::class)),
            'callWarmupState' => fn(ParseNode $n) => $o->setCallWarmupState($n->getEnumValue(PhoneNumberResponse_callWarmupState::class)),
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getObjectValue([PhoneNumberCapabilities::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([PhoneNumberEventRecord::class, 'createFromDiscriminatorValue'])),
            'healthReason' => fn(ParseNode $n) => $o->setHealthReason($n->getStringValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(PhoneNumberResponse_healthStatus::class)),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'inventoryState' => fn(ParseNode $n) => $o->setInventoryState($n->getEnumValue(PhoneNumberInventoryState::class)),
            'isApprovedTestDestination' => fn(ParseNode $n) => $o->setIsApprovedTestDestination($n->getBooleanValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'isInternalPool' => fn(ParseNode $n) => $o->setIsInternalPool($n->getBooleanValue()),
            'isMessagingProgramApproved' => fn(ParseNode $n) => $o->setIsMessagingProgramApproved($n->getBooleanValue()),
            'isPreferred' => fn(ParseNode $n) => $o->setIsPreferred($n->getBooleanValue()),
            'leadpingOwned' => fn(ParseNode $n) => $o->setLeadpingOwned($n->getBooleanValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([PhoneNumberResponse_location::class, 'createFromDiscriminatorValue'])),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'providerError' => fn(ParseNode $n) => $o->setProviderError($n->getStringValue()),
            'providerOrderId' => fn(ParseNode $n) => $o->setProviderOrderId($n->getStringValue()),
            'providerOrderStatus' => fn(ParseNode $n) => $o->setProviderOrderStatus($n->getStringValue()),
            'providerPhoneNumberId' => fn(ParseNode $n) => $o->setProviderPhoneNumberId($n->getStringValue()),
            'providerReleasedAt' => fn(ParseNode $n) => $o->setProviderReleasedAt($n->getDateTimeValue()),
            'providerReleaseHoldStartsAt' => fn(ParseNode $n) => $o->setProviderReleaseHoldStartsAt($n->getDateTimeValue()),
            'providerReleaseReason' => fn(ParseNode $n) => $o->setProviderReleaseReason($n->getStringValue()),
            'providerReleaseRequestedAt' => fn(ParseNode $n) => $o->setProviderReleaseRequestedAt($n->getDateTimeValue()),
            'providerReleaseRequestedByName' => fn(ParseNode $n) => $o->setProviderReleaseRequestedByName($n->getStringValue()),
            'providerReleaseRequestedByUserId' => fn(ParseNode $n) => $o->setProviderReleaseRequestedByUserId($n->getStringValue()),
            'providerReleaseScheduledAt' => fn(ParseNode $n) => $o->setProviderReleaseScheduledAt($n->getDateTimeValue()),
            'providerReleaseUnassignAtHoldStart' => fn(ParseNode $n) => $o->setProviderReleaseUnassignAtHoldStart($n->getBooleanValue()),
            'providerStatus' => fn(ParseNode $n) => $o->setProviderStatus($n->getStringValue()),
            'providerSyncedAt' => fn(ParseNode $n) => $o->setProviderSyncedAt($n->getDateTimeValue()),
            'routing' => fn(ParseNode $n) => $o->setRouting($n->getObjectValue([PhoneNumberRoutingMetadata::class, 'createFromDiscriminatorValue'])),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(InternalPhoneNumberStatus::class)),
            'teamId' => fn(ParseNode $n) => $o->setTeamId($n->getStringValue()),
            'tenDlc' => fn(ParseNode $n) => $o->setTenDlc($n->getObjectValue([PhoneNumberTenDlcAssociation::class, 'createFromDiscriminatorValue'])),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([PhoneNumberResponse_user::class, 'createFromDiscriminatorValue'])),
            'warmupEnabled' => fn(ParseNode $n) => $o->setWarmupEnabled($n->getBooleanValue()),
            'warmupHealthScore' => fn(ParseNode $n) => $o->setWarmupHealthScore($n->getIntegerValue()),
            'warmupNextActionAt' => fn(ParseNode $n) => $o->setWarmupNextActionAt($n->getDateTimeValue()),
            'warmupPauseReason' => fn(ParseNode $n) => $o->setWarmupPauseReason($n->getStringValue()),
            'warmupProgressPercent' => fn(ParseNode $n) => $o->setWarmupProgressPercent($n->getIntegerValue()),
            'warmupState' => fn(ParseNode $n) => $o->setWarmupState($n->getEnumValue(PhoneNumberResponse_warmupState::class)),
        ];
    }

    /**
     * Gets the healthReason property value. Human-readable reason explaining the current health status.
     * @return string|null
    */
    public function getHealthReason(): ?string {
        return $this->healthReason;
    }

    /**
     * Gets the healthStatus property value. Defines the supported SMS Warmup Health State values.
     * @return PhoneNumberResponse_healthStatus|null
    */
    public function getHealthStatus(): ?PhoneNumberResponse_healthStatus {
        return $this->healthStatus;
    }

    /**
     * Gets the id property value. The unique identifier for the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the inventoryState property value. Leadping inventory state for this phone number.
     * @return PhoneNumberInventoryState|null
    */
    public function getInventoryState(): ?PhoneNumberInventoryState {
        return $this->inventoryState;
    }

    /**
     * Gets the isApprovedTestDestination property value. Indicates whether this phone number is approved for test messages or calls.
     * @return bool|null
    */
    public function getIsApprovedTestDestination(): ?bool {
        return $this->isApprovedTestDestination;
    }

    /**
     * Gets the isDefault property value. Indicates whether this phone number is the default sender for the business.
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the isInternalPool property value. Indicates whether this phone number belongs to an internal Leadping number pool.
     * @return bool|null
    */
    public function getIsInternalPool(): ?bool {
        return $this->isInternalPool;
    }

    /**
     * Gets the isMessagingProgramApproved property value. Indicates whether this phone number is approved for the configured messaging program.
     * @return bool|null
    */
    public function getIsMessagingProgramApproved(): ?bool {
        return $this->isMessagingProgramApproved;
    }

    /**
     * Gets the isPreferred property value. Indicates whether this phone number is preferred for outbound communication.
     * @return bool|null
    */
    public function getIsPreferred(): ?bool {
        return $this->isPreferred;
    }

    /**
     * Gets the leadpingOwned property value. Indicates whether Leadping provisions and manages this phone number.
     * @return bool|null
    */
    public function getLeadpingOwned(): ?bool {
        return $this->leadpingOwned;
    }

    /**
     * Gets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @return PhoneNumberResponse_location|null
    */
    public function getLocation(): ?PhoneNumberResponse_location {
        return $this->location;
    }

    /**
     * Gets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. The display name for the entity.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the number property value. E.164 phone number exposed by this phone number.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the provider property value. Telephony or payment provider connected to this phone number.
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the providerError property value. Provider error message captured while syncing this phone number.
     * @return string|null
    */
    public function getProviderError(): ?string {
        return $this->providerError;
    }

    /**
     * Gets the providerOrderId property value. Provider order identifier returned during phone number provisioning.
     * @return string|null
    */
    public function getProviderOrderId(): ?string {
        return $this->providerOrderId;
    }

    /**
     * Gets the providerOrderStatus property value. Provider order status returned during phone number provisioning.
     * @return string|null
    */
    public function getProviderOrderStatus(): ?string {
        return $this->providerOrderStatus;
    }

    /**
     * Gets the providerPhoneNumberId property value. Provider phone number identifier used to reconcile Leadping inventory with Telnyx.
     * @return string|null
    */
    public function getProviderPhoneNumberId(): ?string {
        return $this->providerPhoneNumberId;
    }

    /**
     * Gets the providerReleasedAt property value. UTC timestamp when the provider released this phone number.
     * @return DateTime|null
    */
    public function getProviderReleasedAt(): ?DateTime {
        return $this->providerReleasedAt;
    }

    /**
     * Gets the providerReleaseHoldStartsAt property value. UTC timestamp when the provider release hold starts for this phone number.
     * @return DateTime|null
    */
    public function getProviderReleaseHoldStartsAt(): ?DateTime {
        return $this->providerReleaseHoldStartsAt;
    }

    /**
     * Gets the providerReleaseReason property value. Reason supplied when requesting provider release of this phone number.
     * @return string|null
    */
    public function getProviderReleaseReason(): ?string {
        return $this->providerReleaseReason;
    }

    /**
     * Gets the providerReleaseRequestedAt property value. UTC timestamp when release was requested for this provider phone number.
     * @return DateTime|null
    */
    public function getProviderReleaseRequestedAt(): ?DateTime {
        return $this->providerReleaseRequestedAt;
    }

    /**
     * Gets the providerReleaseRequestedByName property value. Display name of the person who requested provider release of this phone number.
     * @return string|null
    */
    public function getProviderReleaseRequestedByName(): ?string {
        return $this->providerReleaseRequestedByName;
    }

    /**
     * Gets the providerReleaseRequestedByUserId property value. User ID of the person who requested provider release of this phone number.
     * @return string|null
    */
    public function getProviderReleaseRequestedByUserId(): ?string {
        return $this->providerReleaseRequestedByUserId;
    }

    /**
     * Gets the providerReleaseScheduledAt property value. UTC timestamp when provider release is scheduled for this phone number.
     * @return DateTime|null
    */
    public function getProviderReleaseScheduledAt(): ?DateTime {
        return $this->providerReleaseScheduledAt;
    }

    /**
     * Gets the providerReleaseUnassignAtHoldStart property value. Indicates whether Leadping should unassign the phone number when the provider release hold starts.
     * @return bool|null
    */
    public function getProviderReleaseUnassignAtHoldStart(): ?bool {
        return $this->providerReleaseUnassignAtHoldStart;
    }

    /**
     * Gets the providerStatus property value. Provider lifecycle or delivery status for this phone number.
     * @return string|null
    */
    public function getProviderStatus(): ?string {
        return $this->providerStatus;
    }

    /**
     * Gets the providerSyncedAt property value. UTC timestamp when Leadping last synchronized this phone number with the provider.
     * @return DateTime|null
    */
    public function getProviderSyncedAt(): ?DateTime {
        return $this->providerSyncedAt;
    }

    /**
     * Gets the routing property value. Routing metadata that connects this phone number to teams, campaigns, and sources.
     * @return PhoneNumberRoutingMetadata|null
    */
    public function getRouting(): ?PhoneNumberRoutingMetadata {
        return $this->routing;
    }

    /**
     * Gets the sourceId property value. Lead source ID assigned to this phone number for attribution and routing.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->sourceId;
    }

    /**
     * Gets the status property value. Current lifecycle status for this phone number in the Leadping API.
     * @return InternalPhoneNumberStatus|null
    */
    public function getStatus(): ?InternalPhoneNumberStatus {
        return $this->status;
    }

    /**
     * Gets the teamId property value. Team ID used to route calls and messages for this phone number.
     * @return string|null
    */
    public function getTeamId(): ?string {
        return $this->teamId;
    }

    /**
     * Gets the tenDlc property value. 10DLC registration and campaign association for this phone number.
     * @return PhoneNumberTenDlcAssociation|null
    */
    public function getTenDlc(): ?PhoneNumberTenDlcAssociation {
        return $this->tenDlc;
    }

    /**
     * Gets the user property value. User summary connected to this phone number.
     * @return PhoneNumberResponse_user|null
    */
    public function getUser(): ?PhoneNumberResponse_user {
        return $this->user;
    }

    /**
     * Gets the warmupEnabled property value. Indicates whether SMS sender warmup is enabled for this phone number.
     * @return bool|null
    */
    public function getWarmupEnabled(): ?bool {
        return $this->warmupEnabled;
    }

    /**
     * Gets the warmupHealthScore property value. Numeric sender warmup health score used by Leadping to assess deliverability readiness.
     * @return int|null
    */
    public function getWarmupHealthScore(): ?int {
        return $this->warmupHealthScore;
    }

    /**
     * Gets the warmupNextActionAt property value. UTC timestamp when the next SMS warmup action is due for this phone number.
     * @return DateTime|null
    */
    public function getWarmupNextActionAt(): ?DateTime {
        return $this->warmupNextActionAt;
    }

    /**
     * Gets the warmupPauseReason property value. Human-readable reason SMS sender warmup is paused.
     * @return string|null
    */
    public function getWarmupPauseReason(): ?string {
        return $this->warmupPauseReason;
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
     * @return PhoneNumberResponse_warmupState|null
    */
    public function getWarmupState(): ?PhoneNumberResponse_warmupState {
        return $this->warmupState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('adminEnablementOverride', $this->getAdminEnablementOverride());
        $writer->writeObjectValue('billing', $this->getBilling());
        $writer->writeObjectValue('business', $this->getBusiness());
        $writer->writeBooleanValue('callWarmupEnabled', $this->getCallWarmupEnabled());
        $writer->writeStringValue('callWarmupHealthReason', $this->getCallWarmupHealthReason());
        $writer->writeDateTimeValue('callWarmupNextActionAt', $this->getCallWarmupNextActionAt());
        $writer->writeStringValue('callWarmupPauseReason', $this->getCallWarmupPauseReason());
        $writer->writeEnumValue('callWarmupStage', $this->getCallWarmupStage());
        $writer->writeEnumValue('callWarmupState', $this->getCallWarmupState());
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeObjectValue('capabilities', $this->getCapabilities());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeStringValue('healthReason', $this->getHealthReason());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeEnumValue('inventoryState', $this->getInventoryState());
        $writer->writeBooleanValue('isApprovedTestDestination', $this->getIsApprovedTestDestination());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeBooleanValue('isInternalPool', $this->getIsInternalPool());
        $writer->writeBooleanValue('isMessagingProgramApproved', $this->getIsMessagingProgramApproved());
        $writer->writeBooleanValue('isPreferred', $this->getIsPreferred());
        $writer->writeBooleanValue('leadpingOwned', $this->getLeadpingOwned());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeStringValue('providerError', $this->getProviderError());
        $writer->writeStringValue('providerOrderId', $this->getProviderOrderId());
        $writer->writeStringValue('providerOrderStatus', $this->getProviderOrderStatus());
        $writer->writeStringValue('providerPhoneNumberId', $this->getProviderPhoneNumberId());
        $writer->writeDateTimeValue('providerReleasedAt', $this->getProviderReleasedAt());
        $writer->writeDateTimeValue('providerReleaseHoldStartsAt', $this->getProviderReleaseHoldStartsAt());
        $writer->writeStringValue('providerReleaseReason', $this->getProviderReleaseReason());
        $writer->writeDateTimeValue('providerReleaseRequestedAt', $this->getProviderReleaseRequestedAt());
        $writer->writeStringValue('providerReleaseRequestedByName', $this->getProviderReleaseRequestedByName());
        $writer->writeStringValue('providerReleaseRequestedByUserId', $this->getProviderReleaseRequestedByUserId());
        $writer->writeDateTimeValue('providerReleaseScheduledAt', $this->getProviderReleaseScheduledAt());
        $writer->writeBooleanValue('providerReleaseUnassignAtHoldStart', $this->getProviderReleaseUnassignAtHoldStart());
        $writer->writeStringValue('providerStatus', $this->getProviderStatus());
        $writer->writeDateTimeValue('providerSyncedAt', $this->getProviderSyncedAt());
        $writer->writeObjectValue('routing', $this->getRouting());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('teamId', $this->getTeamId());
        $writer->writeObjectValue('tenDlc', $this->getTenDlc());
        $writer->writeObjectValue('user', $this->getUser());
        $writer->writeBooleanValue('warmupEnabled', $this->getWarmupEnabled());
        $writer->writeIntegerValue('warmupHealthScore', $this->getWarmupHealthScore());
        $writer->writeDateTimeValue('warmupNextActionAt', $this->getWarmupNextActionAt());
        $writer->writeStringValue('warmupPauseReason', $this->getWarmupPauseReason());
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
     * @param PhoneNumberResponse_adminEnablementOverride|null $value Value to set for the adminEnablementOverride property.
    */
    public function setAdminEnablementOverride(?PhoneNumberResponse_adminEnablementOverride $value): void {
        $this->adminEnablementOverride = $value;
    }

    /**
     * Sets the billing property value. Billing attribution used to charge this phone number to the correct business and subscription item.
     * @param PhoneNumberBillingAttribution|null $value Value to set for the billing property.
    */
    public function setBilling(?PhoneNumberBillingAttribution $value): void {
        $this->billing = $value;
    }

    /**
     * Sets the business property value. Business summary connected to this phone number.
     * @param PhoneNumberResponse_business|null $value Value to set for the business property.
    */
    public function setBusiness(?PhoneNumberResponse_business $value): void {
        $this->business = $value;
    }

    /**
     * Sets the callWarmupEnabled property value. Indicates whether controlled voice call warmup is enabled for this phone number.
     * @param bool|null $value Value to set for the callWarmupEnabled property.
    */
    public function setCallWarmupEnabled(?bool $value): void {
        $this->callWarmupEnabled = $value;
    }

    /**
     * Sets the callWarmupHealthReason property value. Human-readable reason explaining voice call warmup health.
     * @param string|null $value Value to set for the callWarmupHealthReason property.
    */
    public function setCallWarmupHealthReason(?string $value): void {
        $this->callWarmupHealthReason = $value;
    }

    /**
     * Sets the callWarmupNextActionAt property value. UTC timestamp when the next voice call warmup action is due for this phone number.
     * @param DateTime|null $value Value to set for the callWarmupNextActionAt property.
    */
    public function setCallWarmupNextActionAt(?DateTime $value): void {
        $this->callWarmupNextActionAt = $value;
    }

    /**
     * Sets the callWarmupPauseReason property value. Human-readable reason voice call warmup is paused.
     * @param string|null $value Value to set for the callWarmupPauseReason property.
    */
    public function setCallWarmupPauseReason(?string $value): void {
        $this->callWarmupPauseReason = $value;
    }

    /**
     * Sets the callWarmupStage property value. Defines the supported voice call warmup stages for a Leadping-managed phone number.
     * @param PhoneNumberResponse_callWarmupStage|null $value Value to set for the callWarmupStage property.
    */
    public function setCallWarmupStage(?PhoneNumberResponse_callWarmupStage $value): void {
        $this->callWarmupStage = $value;
    }

    /**
     * Sets the callWarmupState property value. Defines the supported health states for controlled internal voice call warmup.
     * @param PhoneNumberResponse_callWarmupState|null $value Value to set for the callWarmupState property.
    */
    public function setCallWarmupState(?PhoneNumberResponse_callWarmupState $value): void {
        $this->callWarmupState = $value;
    }

    /**
     * Sets the campaignId property value. Messaging campaign identifier associated with this phone number.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the capabilities property value. SMS and voice capabilities available on this phone number.
     * @param PhoneNumberCapabilities|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?PhoneNumberCapabilities $value): void {
        $this->capabilities = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the enabled property value. Indicates whether this phone number is active and available in the Leadping API.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the events property value. Timeline events and provider events associated with this phone number.
     * @param array<PhoneNumberEventRecord>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->events = $value;
    }

    /**
     * Sets the healthReason property value. Human-readable reason explaining the current health status.
     * @param string|null $value Value to set for the healthReason property.
    */
    public function setHealthReason(?string $value): void {
        $this->healthReason = $value;
    }

    /**
     * Sets the healthStatus property value. Defines the supported SMS Warmup Health State values.
     * @param PhoneNumberResponse_healthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?PhoneNumberResponse_healthStatus $value): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the inventoryState property value. Leadping inventory state for this phone number.
     * @param PhoneNumberInventoryState|null $value Value to set for the inventoryState property.
    */
    public function setInventoryState(?PhoneNumberInventoryState $value): void {
        $this->inventoryState = $value;
    }

    /**
     * Sets the isApprovedTestDestination property value. Indicates whether this phone number is approved for test messages or calls.
     * @param bool|null $value Value to set for the isApprovedTestDestination property.
    */
    public function setIsApprovedTestDestination(?bool $value): void {
        $this->isApprovedTestDestination = $value;
    }

    /**
     * Sets the isDefault property value. Indicates whether this phone number is the default sender for the business.
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the isInternalPool property value. Indicates whether this phone number belongs to an internal Leadping number pool.
     * @param bool|null $value Value to set for the isInternalPool property.
    */
    public function setIsInternalPool(?bool $value): void {
        $this->isInternalPool = $value;
    }

    /**
     * Sets the isMessagingProgramApproved property value. Indicates whether this phone number is approved for the configured messaging program.
     * @param bool|null $value Value to set for the isMessagingProgramApproved property.
    */
    public function setIsMessagingProgramApproved(?bool $value): void {
        $this->isMessagingProgramApproved = $value;
    }

    /**
     * Sets the isPreferred property value. Indicates whether this phone number is preferred for outbound communication.
     * @param bool|null $value Value to set for the isPreferred property.
    */
    public function setIsPreferred(?bool $value): void {
        $this->isPreferred = $value;
    }

    /**
     * Sets the leadpingOwned property value. Indicates whether Leadping provisions and manages this phone number.
     * @param bool|null $value Value to set for the leadpingOwned property.
    */
    public function setLeadpingOwned(?bool $value): void {
        $this->leadpingOwned = $value;
    }

    /**
     * Sets the location property value. Geographic location metadata for the phone number, lead, or lookup result.
     * @param PhoneNumberResponse_location|null $value Value to set for the location property.
    */
    public function setLocation(?PhoneNumberResponse_location $value): void {
        $this->location = $value;
    }

    /**
     * Sets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. The display name for the entity.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the number property value. E.164 phone number exposed by this phone number.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the provider property value. Telephony or payment provider connected to this phone number.
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the providerError property value. Provider error message captured while syncing this phone number.
     * @param string|null $value Value to set for the providerError property.
    */
    public function setProviderError(?string $value): void {
        $this->providerError = $value;
    }

    /**
     * Sets the providerOrderId property value. Provider order identifier returned during phone number provisioning.
     * @param string|null $value Value to set for the providerOrderId property.
    */
    public function setProviderOrderId(?string $value): void {
        $this->providerOrderId = $value;
    }

    /**
     * Sets the providerOrderStatus property value. Provider order status returned during phone number provisioning.
     * @param string|null $value Value to set for the providerOrderStatus property.
    */
    public function setProviderOrderStatus(?string $value): void {
        $this->providerOrderStatus = $value;
    }

    /**
     * Sets the providerPhoneNumberId property value. Provider phone number identifier used to reconcile Leadping inventory with Telnyx.
     * @param string|null $value Value to set for the providerPhoneNumberId property.
    */
    public function setProviderPhoneNumberId(?string $value): void {
        $this->providerPhoneNumberId = $value;
    }

    /**
     * Sets the providerReleasedAt property value. UTC timestamp when the provider released this phone number.
     * @param DateTime|null $value Value to set for the providerReleasedAt property.
    */
    public function setProviderReleasedAt(?DateTime $value): void {
        $this->providerReleasedAt = $value;
    }

    /**
     * Sets the providerReleaseHoldStartsAt property value. UTC timestamp when the provider release hold starts for this phone number.
     * @param DateTime|null $value Value to set for the providerReleaseHoldStartsAt property.
    */
    public function setProviderReleaseHoldStartsAt(?DateTime $value): void {
        $this->providerReleaseHoldStartsAt = $value;
    }

    /**
     * Sets the providerReleaseReason property value. Reason supplied when requesting provider release of this phone number.
     * @param string|null $value Value to set for the providerReleaseReason property.
    */
    public function setProviderReleaseReason(?string $value): void {
        $this->providerReleaseReason = $value;
    }

    /**
     * Sets the providerReleaseRequestedAt property value. UTC timestamp when release was requested for this provider phone number.
     * @param DateTime|null $value Value to set for the providerReleaseRequestedAt property.
    */
    public function setProviderReleaseRequestedAt(?DateTime $value): void {
        $this->providerReleaseRequestedAt = $value;
    }

    /**
     * Sets the providerReleaseRequestedByName property value. Display name of the person who requested provider release of this phone number.
     * @param string|null $value Value to set for the providerReleaseRequestedByName property.
    */
    public function setProviderReleaseRequestedByName(?string $value): void {
        $this->providerReleaseRequestedByName = $value;
    }

    /**
     * Sets the providerReleaseRequestedByUserId property value. User ID of the person who requested provider release of this phone number.
     * @param string|null $value Value to set for the providerReleaseRequestedByUserId property.
    */
    public function setProviderReleaseRequestedByUserId(?string $value): void {
        $this->providerReleaseRequestedByUserId = $value;
    }

    /**
     * Sets the providerReleaseScheduledAt property value. UTC timestamp when provider release is scheduled for this phone number.
     * @param DateTime|null $value Value to set for the providerReleaseScheduledAt property.
    */
    public function setProviderReleaseScheduledAt(?DateTime $value): void {
        $this->providerReleaseScheduledAt = $value;
    }

    /**
     * Sets the providerReleaseUnassignAtHoldStart property value. Indicates whether Leadping should unassign the phone number when the provider release hold starts.
     * @param bool|null $value Value to set for the providerReleaseUnassignAtHoldStart property.
    */
    public function setProviderReleaseUnassignAtHoldStart(?bool $value): void {
        $this->providerReleaseUnassignAtHoldStart = $value;
    }

    /**
     * Sets the providerStatus property value. Provider lifecycle or delivery status for this phone number.
     * @param string|null $value Value to set for the providerStatus property.
    */
    public function setProviderStatus(?string $value): void {
        $this->providerStatus = $value;
    }

    /**
     * Sets the providerSyncedAt property value. UTC timestamp when Leadping last synchronized this phone number with the provider.
     * @param DateTime|null $value Value to set for the providerSyncedAt property.
    */
    public function setProviderSyncedAt(?DateTime $value): void {
        $this->providerSyncedAt = $value;
    }

    /**
     * Sets the routing property value. Routing metadata that connects this phone number to teams, campaigns, and sources.
     * @param PhoneNumberRoutingMetadata|null $value Value to set for the routing property.
    */
    public function setRouting(?PhoneNumberRoutingMetadata $value): void {
        $this->routing = $value;
    }

    /**
     * Sets the sourceId property value. Lead source ID assigned to this phone number for attribution and routing.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->sourceId = $value;
    }

    /**
     * Sets the status property value. Current lifecycle status for this phone number in the Leadping API.
     * @param InternalPhoneNumberStatus|null $value Value to set for the status property.
    */
    public function setStatus(?InternalPhoneNumberStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the teamId property value. Team ID used to route calls and messages for this phone number.
     * @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value): void {
        $this->teamId = $value;
    }

    /**
     * Sets the tenDlc property value. 10DLC registration and campaign association for this phone number.
     * @param PhoneNumberTenDlcAssociation|null $value Value to set for the tenDlc property.
    */
    public function setTenDlc(?PhoneNumberTenDlcAssociation $value): void {
        $this->tenDlc = $value;
    }

    /**
     * Sets the user property value. User summary connected to this phone number.
     * @param PhoneNumberResponse_user|null $value Value to set for the user property.
    */
    public function setUser(?PhoneNumberResponse_user $value): void {
        $this->user = $value;
    }

    /**
     * Sets the warmupEnabled property value. Indicates whether SMS sender warmup is enabled for this phone number.
     * @param bool|null $value Value to set for the warmupEnabled property.
    */
    public function setWarmupEnabled(?bool $value): void {
        $this->warmupEnabled = $value;
    }

    /**
     * Sets the warmupHealthScore property value. Numeric sender warmup health score used by Leadping to assess deliverability readiness.
     * @param int|null $value Value to set for the warmupHealthScore property.
    */
    public function setWarmupHealthScore(?int $value): void {
        $this->warmupHealthScore = $value;
    }

    /**
     * Sets the warmupNextActionAt property value. UTC timestamp when the next SMS warmup action is due for this phone number.
     * @param DateTime|null $value Value to set for the warmupNextActionAt property.
    */
    public function setWarmupNextActionAt(?DateTime $value): void {
        $this->warmupNextActionAt = $value;
    }

    /**
     * Sets the warmupPauseReason property value. Human-readable reason SMS sender warmup is paused.
     * @param string|null $value Value to set for the warmupPauseReason property.
    */
    public function setWarmupPauseReason(?string $value): void {
        $this->warmupPauseReason = $value;
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
     * @param PhoneNumberResponse_warmupState|null $value Value to set for the warmupState property.
    */
    public function setWarmupState(?PhoneNumberResponse_warmupState $value): void {
        $this->warmupState = $value;
    }

}
