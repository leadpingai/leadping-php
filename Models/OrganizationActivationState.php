<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes organization activation state data used in Leadping API requests and responses.
*/
class OrganizationActivationState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var DateTime|null $activatedAt UTC timestamp for activated at on this organization activation state.
    */
    private ?DateTime $activatedAt = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ActivationSubscriptionStatus|null $billingSubscriptionStatus The current billing subscription status for this organization activation state.
    */
    private ?ActivationSubscriptionStatus $billingSubscriptionStatus = null;
    
    /**
     * @var string|null $complianceNotes Compliance notes for this organization activation state.
    */
    private ?string $complianceNotes = null;
    
    /**
     * @var bool|null $controlledLaunch Whether controlled launch applies to this organization activation state.
    */
    private ?bool $controlledLaunch = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp for created at on this organization activation state.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $customerFacingStatus The current customer facing status for this organization activation state.
    */
    private ?string $customerFacingStatus = null;
    
    /**
     * @var DateTime|null $domainApprovedAt UTC timestamp for domain approved at on this organization activation state.
    */
    private ?DateTime $domainApprovedAt = null;
    
    /**
     * @var array<ActivationDomainOption>|null $domainOptions The domain options included with this organization activation state.
    */
    private ?array $domainOptions = null;
    
    /**
     * @var DateTime|null $domainPurchasedAt The date and time the selected domain was purchased.
    */
    private ?DateTime $domainPurchasedAt = null;
    
    /**
     * @var string|null $domainSearchId Identifies the active domain search run.
    */
    private ?string $domainSearchId = null;
    
    /**
     * @var OrganizationActivationState_domainSearchStage|null $domainSearchStage Defines the stages of a domain search.
    */
    private ?OrganizationActivationState_domainSearchStage $domainSearchStage = null;
    
    /**
     * @var DateTime|null $domainSearchUpdatedAt The last time domain search progress changed.
    */
    private ?DateTime $domainSearchUpdatedAt = null;
    
    /**
     * @var array<ActivationTimelineEvent>|null $events The events included with this organization activation state.
    */
    private ?array $events = null;
    
    /**
     * @var DateTime|null $failedAt UTC timestamp for failed at on this organization activation state.
    */
    private ?DateTime $failedAt = null;
    
    /**
     * @var string|null $industry Industry for this organization activation state.
    */
    private ?string $industry = null;
    
    /**
     * @var DateTime|null $launchApprovedAt UTC timestamp for launch approved at on this organization activation state.
    */
    private ?DateTime $launchApprovedAt = null;
    
    /**
     * @var DateTime|null $launchReviewRequestedAt UTC timestamp for launch review requested at on this organization activation state.
    */
    private ?DateTime $launchReviewRequestedAt = null;
    
    /**
     * @var ActivationLaunchReviewStatus|null $launchReviewStatus The current launch review status for this organization activation state.
    */
    private ?ActivationLaunchReviewStatus $launchReviewStatus = null;
    
    /**
     * @var string|null $offer Offer for this organization activation state.
    */
    private ?string $offer = null;
    
    /**
     * @var ActivationOnboardingStatus|null $onboardingStatus The current onboarding status for this organization activation state.
    */
    private ?ActivationOnboardingStatus $onboardingStatus = null;
    
    /**
     * @var string|null $organizationDescription Organization description for this organization activation state.
    */
    private ?string $organizationDescription = null;
    
    /**
     * @var DateTime|null $paymentMethodConfirmedAt UTC timestamp for payment method confirmed at on this organization activation state.
    */
    private ?DateTime $paymentMethodConfirmedAt = null;
    
    /**
     * @var ActivationPaymentStatus|null $paymentStatus The current payment status for this organization activation state.
    */
    private ?ActivationPaymentStatus $paymentStatus = null;
    
    /**
     * @var string|null $selectedDomain Selected domain for this organization activation state.
    */
    private ?string $selectedDomain = null;
    
    /**
     * @var string|null $serviceArea Service area for this organization activation state.
    */
    private ?string $serviceArea = null;
    
    /**
     * @var CustomerActivationStatus|null $status The current status for this organization activation state.
    */
    private ?CustomerActivationStatus $status = null;
    
    /**
     * @var DateTime|null $subscriptionActiveAt UTC timestamp for subscription active at on this organization activation state.
    */
    private ?DateTime $subscriptionActiveAt = null;
    
    /**
     * @var DateTime|null $subscriptionPendingAt UTC timestamp for subscription pending at on this organization activation state.
    */
    private ?DateTime $subscriptionPendingAt = null;
    
    /**
     * @var string|null $targetAudience Target audience for this organization activation state.
    */
    private ?string $targetAudience = null;
    
    /**
     * @var DateTime|null $telephonyPartiallyProvisionedAt UTC timestamp for telephony partially provisioned at on this organization activation state.
    */
    private ?DateTime $telephonyPartiallyProvisionedAt = null;
    
    /**
     * @var DateTime|null $telephonyProvisioningStartedAt UTC timestamp for telephony provisioning started at on this organization activation state.
    */
    private ?DateTime $telephonyProvisioningStartedAt = null;
    
    /**
     * @var DateTime|null $telephonyReadyAt UTC timestamp for telephony ready at on this organization activation state.
    */
    private ?DateTime $telephonyReadyAt = null;
    
    /**
     * @var ActivationTelephonyStatus|null $telephonyStatus The current telephony status for this organization activation state.
    */
    private ?ActivationTelephonyStatus $telephonyStatus = null;
    
    /**
     * @var string|null $tenDlcApplicationId Identifier of the first-class 10DLC application entity for this organization.
    */
    private ?string $tenDlcApplicationId = null;
    
    /**
     * @var OrganizationActivationState_tenDlcDraft|null $tenDlcDraft 10DLC draft for this organization activation state.
    */
    private ?OrganizationActivationState_tenDlcDraft $tenDlcDraft = null;
    
    /**
     * @var TenDlcApplicationStatus|null $tenDlcStatus The current 10DLC status for this organization activation state.
    */
    private ?TenDlcApplicationStatus $tenDlcStatus = null;
    
    /**
     * @var DateTime|null $updatedAt UTC timestamp for updated at on this organization activation state.
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * @var string|null $websiteGenerationResult The latest persisted website generation progress message.
    */
    private ?string $websiteGenerationResult = null;
    
    /**
     * @var string|null $websiteNeeds Website needs for this organization activation state.
    */
    private ?string $websiteNeeds = null;
    
    /**
     * @var WebsiteLifecycleStatus|null $websiteStatus The current website status for this organization activation state.
    */
    private ?WebsiteLifecycleStatus $websiteStatus = null;
    
    /**
     * @var string|null $websiteUrl The URL associated with this organization activation state.
    */
    private ?string $websiteUrl = null;
    
    /**
     * Instantiates a new OrganizationActivationState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationActivationState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationActivationState {
        return new OrganizationActivationState();
    }

    /**
     * Gets the activatedAt property value. UTC timestamp for activated at on this organization activation state.
     * @return DateTime|null
    */
    public function getActivatedAt(): ?DateTime {
        return $this->activatedAt;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billingSubscriptionStatus property value. The current billing subscription status for this organization activation state.
     * @return ActivationSubscriptionStatus|null
    */
    public function getBillingSubscriptionStatus(): ?ActivationSubscriptionStatus {
        return $this->billingSubscriptionStatus;
    }

    /**
     * Gets the complianceNotes property value. Compliance notes for this organization activation state.
     * @return string|null
    */
    public function getComplianceNotes(): ?string {
        return $this->complianceNotes;
    }

    /**
     * Gets the controlledLaunch property value. Whether controlled launch applies to this organization activation state.
     * @return bool|null
    */
    public function getControlledLaunch(): ?bool {
        return $this->controlledLaunch;
    }

    /**
     * Gets the createdAt property value. UTC timestamp for created at on this organization activation state.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the customerFacingStatus property value. The current customer facing status for this organization activation state.
     * @return string|null
    */
    public function getCustomerFacingStatus(): ?string {
        return $this->customerFacingStatus;
    }

    /**
     * Gets the domainApprovedAt property value. UTC timestamp for domain approved at on this organization activation state.
     * @return DateTime|null
    */
    public function getDomainApprovedAt(): ?DateTime {
        return $this->domainApprovedAt;
    }

    /**
     * Gets the domainOptions property value. The domain options included with this organization activation state.
     * @return array<ActivationDomainOption>|null
    */
    public function getDomainOptions(): ?array {
        return $this->domainOptions;
    }

    /**
     * Gets the domainPurchasedAt property value. The date and time the selected domain was purchased.
     * @return DateTime|null
    */
    public function getDomainPurchasedAt(): ?DateTime {
        return $this->domainPurchasedAt;
    }

    /**
     * Gets the domainSearchId property value. Identifies the active domain search run.
     * @return string|null
    */
    public function getDomainSearchId(): ?string {
        return $this->domainSearchId;
    }

    /**
     * Gets the domainSearchStage property value. Defines the stages of a domain search.
     * @return OrganizationActivationState_domainSearchStage|null
    */
    public function getDomainSearchStage(): ?OrganizationActivationState_domainSearchStage {
        return $this->domainSearchStage;
    }

    /**
     * Gets the domainSearchUpdatedAt property value. The last time domain search progress changed.
     * @return DateTime|null
    */
    public function getDomainSearchUpdatedAt(): ?DateTime {
        return $this->domainSearchUpdatedAt;
    }

    /**
     * Gets the events property value. The events included with this organization activation state.
     * @return array<ActivationTimelineEvent>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * Gets the failedAt property value. UTC timestamp for failed at on this organization activation state.
     * @return DateTime|null
    */
    public function getFailedAt(): ?DateTime {
        return $this->failedAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activatedAt' => fn(ParseNode $n) => $o->setActivatedAt($n->getDateTimeValue()),
            'billingSubscriptionStatus' => fn(ParseNode $n) => $o->setBillingSubscriptionStatus($n->getEnumValue(ActivationSubscriptionStatus::class)),
            'complianceNotes' => fn(ParseNode $n) => $o->setComplianceNotes($n->getStringValue()),
            'controlledLaunch' => fn(ParseNode $n) => $o->setControlledLaunch($n->getBooleanValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'customerFacingStatus' => fn(ParseNode $n) => $o->setCustomerFacingStatus($n->getStringValue()),
            'domainApprovedAt' => fn(ParseNode $n) => $o->setDomainApprovedAt($n->getDateTimeValue()),
            'domainOptions' => fn(ParseNode $n) => $o->setDomainOptions($n->getCollectionOfObjectValues([ActivationDomainOption::class, 'createFromDiscriminatorValue'])),
            'domainPurchasedAt' => fn(ParseNode $n) => $o->setDomainPurchasedAt($n->getDateTimeValue()),
            'domainSearchId' => fn(ParseNode $n) => $o->setDomainSearchId($n->getStringValue()),
            'domainSearchStage' => fn(ParseNode $n) => $o->setDomainSearchStage($n->getEnumValue(OrganizationActivationState_domainSearchStage::class)),
            'domainSearchUpdatedAt' => fn(ParseNode $n) => $o->setDomainSearchUpdatedAt($n->getDateTimeValue()),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([ActivationTimelineEvent::class, 'createFromDiscriminatorValue'])),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'industry' => fn(ParseNode $n) => $o->setIndustry($n->getStringValue()),
            'launchApprovedAt' => fn(ParseNode $n) => $o->setLaunchApprovedAt($n->getDateTimeValue()),
            'launchReviewRequestedAt' => fn(ParseNode $n) => $o->setLaunchReviewRequestedAt($n->getDateTimeValue()),
            'launchReviewStatus' => fn(ParseNode $n) => $o->setLaunchReviewStatus($n->getEnumValue(ActivationLaunchReviewStatus::class)),
            'offer' => fn(ParseNode $n) => $o->setOffer($n->getStringValue()),
            'onboardingStatus' => fn(ParseNode $n) => $o->setOnboardingStatus($n->getEnumValue(ActivationOnboardingStatus::class)),
            'organizationDescription' => fn(ParseNode $n) => $o->setOrganizationDescription($n->getStringValue()),
            'paymentMethodConfirmedAt' => fn(ParseNode $n) => $o->setPaymentMethodConfirmedAt($n->getDateTimeValue()),
            'paymentStatus' => fn(ParseNode $n) => $o->setPaymentStatus($n->getEnumValue(ActivationPaymentStatus::class)),
            'selectedDomain' => fn(ParseNode $n) => $o->setSelectedDomain($n->getStringValue()),
            'serviceArea' => fn(ParseNode $n) => $o->setServiceArea($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CustomerActivationStatus::class)),
            'subscriptionActiveAt' => fn(ParseNode $n) => $o->setSubscriptionActiveAt($n->getDateTimeValue()),
            'subscriptionPendingAt' => fn(ParseNode $n) => $o->setSubscriptionPendingAt($n->getDateTimeValue()),
            'targetAudience' => fn(ParseNode $n) => $o->setTargetAudience($n->getStringValue()),
            'telephonyPartiallyProvisionedAt' => fn(ParseNode $n) => $o->setTelephonyPartiallyProvisionedAt($n->getDateTimeValue()),
            'telephonyProvisioningStartedAt' => fn(ParseNode $n) => $o->setTelephonyProvisioningStartedAt($n->getDateTimeValue()),
            'telephonyReadyAt' => fn(ParseNode $n) => $o->setTelephonyReadyAt($n->getDateTimeValue()),
            'telephonyStatus' => fn(ParseNode $n) => $o->setTelephonyStatus($n->getEnumValue(ActivationTelephonyStatus::class)),
            'tenDlcApplicationId' => fn(ParseNode $n) => $o->setTenDlcApplicationId($n->getStringValue()),
            'tenDlcDraft' => fn(ParseNode $n) => $o->setTenDlcDraft($n->getObjectValue([OrganizationActivationState_tenDlcDraft::class, 'createFromDiscriminatorValue'])),
            'tenDlcStatus' => fn(ParseNode $n) => $o->setTenDlcStatus($n->getEnumValue(TenDlcApplicationStatus::class)),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'websiteGenerationResult' => fn(ParseNode $n) => $o->setWebsiteGenerationResult($n->getStringValue()),
            'websiteNeeds' => fn(ParseNode $n) => $o->setWebsiteNeeds($n->getStringValue()),
            'websiteStatus' => fn(ParseNode $n) => $o->setWebsiteStatus($n->getEnumValue(WebsiteLifecycleStatus::class)),
            'websiteUrl' => fn(ParseNode $n) => $o->setWebsiteUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the industry property value. Industry for this organization activation state.
     * @return string|null
    */
    public function getIndustry(): ?string {
        return $this->industry;
    }

    /**
     * Gets the launchApprovedAt property value. UTC timestamp for launch approved at on this organization activation state.
     * @return DateTime|null
    */
    public function getLaunchApprovedAt(): ?DateTime {
        return $this->launchApprovedAt;
    }

    /**
     * Gets the launchReviewRequestedAt property value. UTC timestamp for launch review requested at on this organization activation state.
     * @return DateTime|null
    */
    public function getLaunchReviewRequestedAt(): ?DateTime {
        return $this->launchReviewRequestedAt;
    }

    /**
     * Gets the launchReviewStatus property value. The current launch review status for this organization activation state.
     * @return ActivationLaunchReviewStatus|null
    */
    public function getLaunchReviewStatus(): ?ActivationLaunchReviewStatus {
        return $this->launchReviewStatus;
    }

    /**
     * Gets the offer property value. Offer for this organization activation state.
     * @return string|null
    */
    public function getOffer(): ?string {
        return $this->offer;
    }

    /**
     * Gets the onboardingStatus property value. The current onboarding status for this organization activation state.
     * @return ActivationOnboardingStatus|null
    */
    public function getOnboardingStatus(): ?ActivationOnboardingStatus {
        return $this->onboardingStatus;
    }

    /**
     * Gets the organizationDescription property value. Organization description for this organization activation state.
     * @return string|null
    */
    public function getOrganizationDescription(): ?string {
        return $this->organizationDescription;
    }

    /**
     * Gets the paymentMethodConfirmedAt property value. UTC timestamp for payment method confirmed at on this organization activation state.
     * @return DateTime|null
    */
    public function getPaymentMethodConfirmedAt(): ?DateTime {
        return $this->paymentMethodConfirmedAt;
    }

    /**
     * Gets the paymentStatus property value. The current payment status for this organization activation state.
     * @return ActivationPaymentStatus|null
    */
    public function getPaymentStatus(): ?ActivationPaymentStatus {
        return $this->paymentStatus;
    }

    /**
     * Gets the selectedDomain property value. Selected domain for this organization activation state.
     * @return string|null
    */
    public function getSelectedDomain(): ?string {
        return $this->selectedDomain;
    }

    /**
     * Gets the serviceArea property value. Service area for this organization activation state.
     * @return string|null
    */
    public function getServiceArea(): ?string {
        return $this->serviceArea;
    }

    /**
     * Gets the status property value. The current status for this organization activation state.
     * @return CustomerActivationStatus|null
    */
    public function getStatus(): ?CustomerActivationStatus {
        return $this->status;
    }

    /**
     * Gets the subscriptionActiveAt property value. UTC timestamp for subscription active at on this organization activation state.
     * @return DateTime|null
    */
    public function getSubscriptionActiveAt(): ?DateTime {
        return $this->subscriptionActiveAt;
    }

    /**
     * Gets the subscriptionPendingAt property value. UTC timestamp for subscription pending at on this organization activation state.
     * @return DateTime|null
    */
    public function getSubscriptionPendingAt(): ?DateTime {
        return $this->subscriptionPendingAt;
    }

    /**
     * Gets the targetAudience property value. Target audience for this organization activation state.
     * @return string|null
    */
    public function getTargetAudience(): ?string {
        return $this->targetAudience;
    }

    /**
     * Gets the telephonyPartiallyProvisionedAt property value. UTC timestamp for telephony partially provisioned at on this organization activation state.
     * @return DateTime|null
    */
    public function getTelephonyPartiallyProvisionedAt(): ?DateTime {
        return $this->telephonyPartiallyProvisionedAt;
    }

    /**
     * Gets the telephonyProvisioningStartedAt property value. UTC timestamp for telephony provisioning started at on this organization activation state.
     * @return DateTime|null
    */
    public function getTelephonyProvisioningStartedAt(): ?DateTime {
        return $this->telephonyProvisioningStartedAt;
    }

    /**
     * Gets the telephonyReadyAt property value. UTC timestamp for telephony ready at on this organization activation state.
     * @return DateTime|null
    */
    public function getTelephonyReadyAt(): ?DateTime {
        return $this->telephonyReadyAt;
    }

    /**
     * Gets the telephonyStatus property value. The current telephony status for this organization activation state.
     * @return ActivationTelephonyStatus|null
    */
    public function getTelephonyStatus(): ?ActivationTelephonyStatus {
        return $this->telephonyStatus;
    }

    /**
     * Gets the tenDlcApplicationId property value. Identifier of the first-class 10DLC application entity for this organization.
     * @return string|null
    */
    public function getTenDlcApplicationId(): ?string {
        return $this->tenDlcApplicationId;
    }

    /**
     * Gets the tenDlcDraft property value. 10DLC draft for this organization activation state.
     * @return OrganizationActivationState_tenDlcDraft|null
    */
    public function getTenDlcDraft(): ?OrganizationActivationState_tenDlcDraft {
        return $this->tenDlcDraft;
    }

    /**
     * Gets the tenDlcStatus property value. The current 10DLC status for this organization activation state.
     * @return TenDlcApplicationStatus|null
    */
    public function getTenDlcStatus(): ?TenDlcApplicationStatus {
        return $this->tenDlcStatus;
    }

    /**
     * Gets the updatedAt property value. UTC timestamp for updated at on this organization activation state.
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updatedAt;
    }

    /**
     * Gets the websiteGenerationResult property value. The latest persisted website generation progress message.
     * @return string|null
    */
    public function getWebsiteGenerationResult(): ?string {
        return $this->websiteGenerationResult;
    }

    /**
     * Gets the websiteNeeds property value. Website needs for this organization activation state.
     * @return string|null
    */
    public function getWebsiteNeeds(): ?string {
        return $this->websiteNeeds;
    }

    /**
     * Gets the websiteStatus property value. The current website status for this organization activation state.
     * @return WebsiteLifecycleStatus|null
    */
    public function getWebsiteStatus(): ?WebsiteLifecycleStatus {
        return $this->websiteStatus;
    }

    /**
     * Gets the websiteUrl property value. The URL associated with this organization activation state.
     * @return string|null
    */
    public function getWebsiteUrl(): ?string {
        return $this->websiteUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('activatedAt', $this->getActivatedAt());
        $writer->writeEnumValue('billingSubscriptionStatus', $this->getBillingSubscriptionStatus());
        $writer->writeStringValue('complianceNotes', $this->getComplianceNotes());
        $writer->writeBooleanValue('controlledLaunch', $this->getControlledLaunch());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('customerFacingStatus', $this->getCustomerFacingStatus());
        $writer->writeDateTimeValue('domainApprovedAt', $this->getDomainApprovedAt());
        $writer->writeCollectionOfObjectValues('domainOptions', $this->getDomainOptions());
        $writer->writeDateTimeValue('domainPurchasedAt', $this->getDomainPurchasedAt());
        $writer->writeStringValue('domainSearchId', $this->getDomainSearchId());
        $writer->writeEnumValue('domainSearchStage', $this->getDomainSearchStage());
        $writer->writeDateTimeValue('domainSearchUpdatedAt', $this->getDomainSearchUpdatedAt());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('industry', $this->getIndustry());
        $writer->writeDateTimeValue('launchApprovedAt', $this->getLaunchApprovedAt());
        $writer->writeDateTimeValue('launchReviewRequestedAt', $this->getLaunchReviewRequestedAt());
        $writer->writeEnumValue('launchReviewStatus', $this->getLaunchReviewStatus());
        $writer->writeStringValue('offer', $this->getOffer());
        $writer->writeEnumValue('onboardingStatus', $this->getOnboardingStatus());
        $writer->writeStringValue('organizationDescription', $this->getOrganizationDescription());
        $writer->writeDateTimeValue('paymentMethodConfirmedAt', $this->getPaymentMethodConfirmedAt());
        $writer->writeEnumValue('paymentStatus', $this->getPaymentStatus());
        $writer->writeStringValue('selectedDomain', $this->getSelectedDomain());
        $writer->writeStringValue('serviceArea', $this->getServiceArea());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeDateTimeValue('subscriptionActiveAt', $this->getSubscriptionActiveAt());
        $writer->writeDateTimeValue('subscriptionPendingAt', $this->getSubscriptionPendingAt());
        $writer->writeStringValue('targetAudience', $this->getTargetAudience());
        $writer->writeDateTimeValue('telephonyPartiallyProvisionedAt', $this->getTelephonyPartiallyProvisionedAt());
        $writer->writeDateTimeValue('telephonyProvisioningStartedAt', $this->getTelephonyProvisioningStartedAt());
        $writer->writeDateTimeValue('telephonyReadyAt', $this->getTelephonyReadyAt());
        $writer->writeEnumValue('telephonyStatus', $this->getTelephonyStatus());
        $writer->writeStringValue('tenDlcApplicationId', $this->getTenDlcApplicationId());
        $writer->writeObjectValue('tenDlcDraft', $this->getTenDlcDraft());
        $writer->writeEnumValue('tenDlcStatus', $this->getTenDlcStatus());
        $writer->writeDateTimeValue('updatedAt', $this->getUpdatedAt());
        $writer->writeStringValue('websiteGenerationResult', $this->getWebsiteGenerationResult());
        $writer->writeStringValue('websiteNeeds', $this->getWebsiteNeeds());
        $writer->writeEnumValue('websiteStatus', $this->getWebsiteStatus());
        $writer->writeStringValue('websiteUrl', $this->getWebsiteUrl());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activatedAt property value. UTC timestamp for activated at on this organization activation state.
     * @param DateTime|null $value Value to set for the activatedAt property.
    */
    public function setActivatedAt(?DateTime $value): void {
        $this->activatedAt = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the billingSubscriptionStatus property value. The current billing subscription status for this organization activation state.
     * @param ActivationSubscriptionStatus|null $value Value to set for the billingSubscriptionStatus property.
    */
    public function setBillingSubscriptionStatus(?ActivationSubscriptionStatus $value): void {
        $this->billingSubscriptionStatus = $value;
    }

    /**
     * Sets the complianceNotes property value. Compliance notes for this organization activation state.
     * @param string|null $value Value to set for the complianceNotes property.
    */
    public function setComplianceNotes(?string $value): void {
        $this->complianceNotes = $value;
    }

    /**
     * Sets the controlledLaunch property value. Whether controlled launch applies to this organization activation state.
     * @param bool|null $value Value to set for the controlledLaunch property.
    */
    public function setControlledLaunch(?bool $value): void {
        $this->controlledLaunch = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp for created at on this organization activation state.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the customerFacingStatus property value. The current customer facing status for this organization activation state.
     * @param string|null $value Value to set for the customerFacingStatus property.
    */
    public function setCustomerFacingStatus(?string $value): void {
        $this->customerFacingStatus = $value;
    }

    /**
     * Sets the domainApprovedAt property value. UTC timestamp for domain approved at on this organization activation state.
     * @param DateTime|null $value Value to set for the domainApprovedAt property.
    */
    public function setDomainApprovedAt(?DateTime $value): void {
        $this->domainApprovedAt = $value;
    }

    /**
     * Sets the domainOptions property value. The domain options included with this organization activation state.
     * @param array<ActivationDomainOption>|null $value Value to set for the domainOptions property.
    */
    public function setDomainOptions(?array $value): void {
        $this->domainOptions = $value;
    }

    /**
     * Sets the domainPurchasedAt property value. The date and time the selected domain was purchased.
     * @param DateTime|null $value Value to set for the domainPurchasedAt property.
    */
    public function setDomainPurchasedAt(?DateTime $value): void {
        $this->domainPurchasedAt = $value;
    }

    /**
     * Sets the domainSearchId property value. Identifies the active domain search run.
     * @param string|null $value Value to set for the domainSearchId property.
    */
    public function setDomainSearchId(?string $value): void {
        $this->domainSearchId = $value;
    }

    /**
     * Sets the domainSearchStage property value. Defines the stages of a domain search.
     * @param OrganizationActivationState_domainSearchStage|null $value Value to set for the domainSearchStage property.
    */
    public function setDomainSearchStage(?OrganizationActivationState_domainSearchStage $value): void {
        $this->domainSearchStage = $value;
    }

    /**
     * Sets the domainSearchUpdatedAt property value. The last time domain search progress changed.
     * @param DateTime|null $value Value to set for the domainSearchUpdatedAt property.
    */
    public function setDomainSearchUpdatedAt(?DateTime $value): void {
        $this->domainSearchUpdatedAt = $value;
    }

    /**
     * Sets the events property value. The events included with this organization activation state.
     * @param array<ActivationTimelineEvent>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->events = $value;
    }

    /**
     * Sets the failedAt property value. UTC timestamp for failed at on this organization activation state.
     * @param DateTime|null $value Value to set for the failedAt property.
    */
    public function setFailedAt(?DateTime $value): void {
        $this->failedAt = $value;
    }

    /**
     * Sets the industry property value. Industry for this organization activation state.
     * @param string|null $value Value to set for the industry property.
    */
    public function setIndustry(?string $value): void {
        $this->industry = $value;
    }

    /**
     * Sets the launchApprovedAt property value. UTC timestamp for launch approved at on this organization activation state.
     * @param DateTime|null $value Value to set for the launchApprovedAt property.
    */
    public function setLaunchApprovedAt(?DateTime $value): void {
        $this->launchApprovedAt = $value;
    }

    /**
     * Sets the launchReviewRequestedAt property value. UTC timestamp for launch review requested at on this organization activation state.
     * @param DateTime|null $value Value to set for the launchReviewRequestedAt property.
    */
    public function setLaunchReviewRequestedAt(?DateTime $value): void {
        $this->launchReviewRequestedAt = $value;
    }

    /**
     * Sets the launchReviewStatus property value. The current launch review status for this organization activation state.
     * @param ActivationLaunchReviewStatus|null $value Value to set for the launchReviewStatus property.
    */
    public function setLaunchReviewStatus(?ActivationLaunchReviewStatus $value): void {
        $this->launchReviewStatus = $value;
    }

    /**
     * Sets the offer property value. Offer for this organization activation state.
     * @param string|null $value Value to set for the offer property.
    */
    public function setOffer(?string $value): void {
        $this->offer = $value;
    }

    /**
     * Sets the onboardingStatus property value. The current onboarding status for this organization activation state.
     * @param ActivationOnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?ActivationOnboardingStatus $value): void {
        $this->onboardingStatus = $value;
    }

    /**
     * Sets the organizationDescription property value. Organization description for this organization activation state.
     * @param string|null $value Value to set for the organizationDescription property.
    */
    public function setOrganizationDescription(?string $value): void {
        $this->organizationDescription = $value;
    }

    /**
     * Sets the paymentMethodConfirmedAt property value. UTC timestamp for payment method confirmed at on this organization activation state.
     * @param DateTime|null $value Value to set for the paymentMethodConfirmedAt property.
    */
    public function setPaymentMethodConfirmedAt(?DateTime $value): void {
        $this->paymentMethodConfirmedAt = $value;
    }

    /**
     * Sets the paymentStatus property value. The current payment status for this organization activation state.
     * @param ActivationPaymentStatus|null $value Value to set for the paymentStatus property.
    */
    public function setPaymentStatus(?ActivationPaymentStatus $value): void {
        $this->paymentStatus = $value;
    }

    /**
     * Sets the selectedDomain property value. Selected domain for this organization activation state.
     * @param string|null $value Value to set for the selectedDomain property.
    */
    public function setSelectedDomain(?string $value): void {
        $this->selectedDomain = $value;
    }

    /**
     * Sets the serviceArea property value. Service area for this organization activation state.
     * @param string|null $value Value to set for the serviceArea property.
    */
    public function setServiceArea(?string $value): void {
        $this->serviceArea = $value;
    }

    /**
     * Sets the status property value. The current status for this organization activation state.
     * @param CustomerActivationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CustomerActivationStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the subscriptionActiveAt property value. UTC timestamp for subscription active at on this organization activation state.
     * @param DateTime|null $value Value to set for the subscriptionActiveAt property.
    */
    public function setSubscriptionActiveAt(?DateTime $value): void {
        $this->subscriptionActiveAt = $value;
    }

    /**
     * Sets the subscriptionPendingAt property value. UTC timestamp for subscription pending at on this organization activation state.
     * @param DateTime|null $value Value to set for the subscriptionPendingAt property.
    */
    public function setSubscriptionPendingAt(?DateTime $value): void {
        $this->subscriptionPendingAt = $value;
    }

    /**
     * Sets the targetAudience property value. Target audience for this organization activation state.
     * @param string|null $value Value to set for the targetAudience property.
    */
    public function setTargetAudience(?string $value): void {
        $this->targetAudience = $value;
    }

    /**
     * Sets the telephonyPartiallyProvisionedAt property value. UTC timestamp for telephony partially provisioned at on this organization activation state.
     * @param DateTime|null $value Value to set for the telephonyPartiallyProvisionedAt property.
    */
    public function setTelephonyPartiallyProvisionedAt(?DateTime $value): void {
        $this->telephonyPartiallyProvisionedAt = $value;
    }

    /**
     * Sets the telephonyProvisioningStartedAt property value. UTC timestamp for telephony provisioning started at on this organization activation state.
     * @param DateTime|null $value Value to set for the telephonyProvisioningStartedAt property.
    */
    public function setTelephonyProvisioningStartedAt(?DateTime $value): void {
        $this->telephonyProvisioningStartedAt = $value;
    }

    /**
     * Sets the telephonyReadyAt property value. UTC timestamp for telephony ready at on this organization activation state.
     * @param DateTime|null $value Value to set for the telephonyReadyAt property.
    */
    public function setTelephonyReadyAt(?DateTime $value): void {
        $this->telephonyReadyAt = $value;
    }

    /**
     * Sets the telephonyStatus property value. The current telephony status for this organization activation state.
     * @param ActivationTelephonyStatus|null $value Value to set for the telephonyStatus property.
    */
    public function setTelephonyStatus(?ActivationTelephonyStatus $value): void {
        $this->telephonyStatus = $value;
    }

    /**
     * Sets the tenDlcApplicationId property value. Identifier of the first-class 10DLC application entity for this organization.
     * @param string|null $value Value to set for the tenDlcApplicationId property.
    */
    public function setTenDlcApplicationId(?string $value): void {
        $this->tenDlcApplicationId = $value;
    }

    /**
     * Sets the tenDlcDraft property value. 10DLC draft for this organization activation state.
     * @param OrganizationActivationState_tenDlcDraft|null $value Value to set for the tenDlcDraft property.
    */
    public function setTenDlcDraft(?OrganizationActivationState_tenDlcDraft $value): void {
        $this->tenDlcDraft = $value;
    }

    /**
     * Sets the tenDlcStatus property value. The current 10DLC status for this organization activation state.
     * @param TenDlcApplicationStatus|null $value Value to set for the tenDlcStatus property.
    */
    public function setTenDlcStatus(?TenDlcApplicationStatus $value): void {
        $this->tenDlcStatus = $value;
    }

    /**
     * Sets the updatedAt property value. UTC timestamp for updated at on this organization activation state.
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

    /**
     * Sets the websiteGenerationResult property value. The latest persisted website generation progress message.
     * @param string|null $value Value to set for the websiteGenerationResult property.
    */
    public function setWebsiteGenerationResult(?string $value): void {
        $this->websiteGenerationResult = $value;
    }

    /**
     * Sets the websiteNeeds property value. Website needs for this organization activation state.
     * @param string|null $value Value to set for the websiteNeeds property.
    */
    public function setWebsiteNeeds(?string $value): void {
        $this->websiteNeeds = $value;
    }

    /**
     * Sets the websiteStatus property value. The current website status for this organization activation state.
     * @param WebsiteLifecycleStatus|null $value Value to set for the websiteStatus property.
    */
    public function setWebsiteStatus(?WebsiteLifecycleStatus $value): void {
        $this->websiteStatus = $value;
    }

    /**
     * Sets the websiteUrl property value. The URL associated with this organization activation state.
     * @param string|null $value Value to set for the websiteUrl property.
    */
    public function setWebsiteUrl(?string $value): void {
        $this->websiteUrl = $value;
    }

}
