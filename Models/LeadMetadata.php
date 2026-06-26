<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for lead attribution metadata data.
*/
class LeadMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $assignedPhoneNumberId Phone number ID assigned to the lead, business, or source.
    */
    private ?string $assignedPhoneNumberId = null;
    
    /**
     * @var string|null $businessId Business ID that owns this lead's attribution metadata.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $complianceBlockedReason Reason Leadping blocked this operation for compliance.
    */
    private ?string $complianceBlockedReason = null;
    
    /**
     * @var string|null $complianceStatus Compliance status used to decide whether Leadping can send messages.
    */
    private ?string $complianceStatus = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this lead attribution metadata was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $externalId External system identifier used to reconcile this lead attribution metadata across integrations.
    */
    private ?string $externalId = null;
    
    /**
     * @var string|null $importBatchId Bulk import batch ID that created or updated this lead.
    */
    private ?string $importBatchId = null;
    
    /**
     * @var string|null $ipAddress IP address captured with the request for audit and compliance review.
    */
    private ?string $ipAddress = null;
    
    /**
     * @var bool|null $isImported Indicates whether this lead was imported rather than captured through a live source.
    */
    private ?bool $isImported = null;
    
    /**
     * @var string|null $landingPage Landing page URL where the lead submitted their information.
    */
    private ?string $landingPage = null;
    
    /**
     * @var string|null $origin System or workflow that created this event.
    */
    private ?string $origin = null;
    
    /**
     * @var string|null $product Product or offer associated with the lead or source.
    */
    private ?string $product = null;
    
    /**
     * @var string|null $pubId Publisher ID supplied by the lead source for attribution.
    */
    private ?string $pubId = null;
    
    /**
     * @var string|null $referrer Referring page or traffic source that sent the lead into Leadping.
    */
    private ?string $referrer = null;
    
    /**
     * @var string|null $sellerLeadId Seller-provided lead identifier used to deduplicate and reconcile lead delivery.
    */
    private ?string $sellerLeadId = null;
    
    /**
     * @var string|null $smsConsentPhoneNumber Phone number where SMS consent was captured or evaluated.
    */
    private ?string $smsConsentPhoneNumber = null;
    
    /**
     * @var string|null $smsConsentStatus Current SMS consent status recorded for this lead.
    */
    private ?string $smsConsentStatus = null;
    
    /**
     * @var DateTime|null $smsHelpRequestedAt UTC timestamp when the lead requested SMS help instructions.
    */
    private ?DateTime $smsHelpRequestedAt = null;
    
    /**
     * @var bool|null $smsOptedOut Indicates whether the lead has opted out of SMS communication.
    */
    private ?bool $smsOptedOut = null;
    
    /**
     * @var DateTime|null $smsOptInAt UTC timestamp when the lead opted in to SMS communication.
    */
    private ?DateTime $smsOptInAt = null;
    
    /**
     * @var DateTime|null $smsOptOutAt UTC timestamp when the lead opted out of SMS communication.
    */
    private ?DateTime $smsOptOutAt = null;
    
    /**
     * @var LeadMetadata_sourceMetadata|null $sourceMetadata Source-provided key-value metadata retained for lead attribution and integration troubleshooting.
    */
    private ?LeadMetadata_sourceMetadata $sourceMetadata = null;
    
    /**
     * @var string|null $subId Affiliate or publisher sub ID captured for lead attribution.
    */
    private ?string $subId = null;
    
    /**
     * @var string|null $trustedFormUrl TrustedForm certificate URL used as proof of consumer consent.
    */
    private ?string $trustedFormUrl = null;
    
    /**
     * @var string|null $userAgent Browser or client user agent captured when this lead attribution metadata was submitted.
    */
    private ?string $userAgent = null;
    
    /**
     * @var string|null $userId User ID associated with this lead's attribution metadata.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $utmCampaign UTM campaign parameter captured for lead attribution reporting.
    */
    private ?string $utmCampaign = null;
    
    /**
     * @var string|null $utmContent UTM content parameter captured for lead attribution reporting.
    */
    private ?string $utmContent = null;
    
    /**
     * @var string|null $utmMedium UTM medium parameter captured for lead attribution reporting.
    */
    private ?string $utmMedium = null;
    
    /**
     * @var string|null $utmSource UTM source parameter captured for lead attribution reporting.
    */
    private ?string $utmSource = null;
    
    /**
     * @var string|null $utmTerm UTM term parameter captured for lead attribution reporting.
    */
    private ?string $utmTerm = null;
    
    /**
     * @var string|null $vertical Industry vertical used for lead routing, compliance review, and reporting.
    */
    private ?string $vertical = null;
    
    /**
     * Instantiates a new LeadMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadMetadata {
        return new LeadMetadata();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedPhoneNumberId property value. Phone number ID assigned to the lead, business, or source.
     * @return string|null
    */
    public function getAssignedPhoneNumberId(): ?string {
        return $this->assignedPhoneNumberId;
    }

    /**
     * Gets the businessId property value. Business ID that owns this lead's attribution metadata.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the complianceBlockedReason property value. Reason Leadping blocked this operation for compliance.
     * @return string|null
    */
    public function getComplianceBlockedReason(): ?string {
        return $this->complianceBlockedReason;
    }

    /**
     * Gets the complianceStatus property value. Compliance status used to decide whether Leadping can send messages.
     * @return string|null
    */
    public function getComplianceStatus(): ?string {
        return $this->complianceStatus;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this lead attribution metadata was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the externalId property value. External system identifier used to reconcile this lead attribution metadata across integrations.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedPhoneNumberId' => fn(ParseNode $n) => $o->setAssignedPhoneNumberId($n->getStringValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'complianceBlockedReason' => fn(ParseNode $n) => $o->setComplianceBlockedReason($n->getStringValue()),
            'complianceStatus' => fn(ParseNode $n) => $o->setComplianceStatus($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'importBatchId' => fn(ParseNode $n) => $o->setImportBatchId($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'isImported' => fn(ParseNode $n) => $o->setIsImported($n->getBooleanValue()),
            'landingPage' => fn(ParseNode $n) => $o->setLandingPage($n->getStringValue()),
            'origin' => fn(ParseNode $n) => $o->setOrigin($n->getStringValue()),
            'product' => fn(ParseNode $n) => $o->setProduct($n->getStringValue()),
            'pubId' => fn(ParseNode $n) => $o->setPubId($n->getStringValue()),
            'referrer' => fn(ParseNode $n) => $o->setReferrer($n->getStringValue()),
            'sellerLeadId' => fn(ParseNode $n) => $o->setSellerLeadId($n->getStringValue()),
            'smsConsentPhoneNumber' => fn(ParseNode $n) => $o->setSmsConsentPhoneNumber($n->getStringValue()),
            'smsConsentStatus' => fn(ParseNode $n) => $o->setSmsConsentStatus($n->getStringValue()),
            'smsHelpRequestedAt' => fn(ParseNode $n) => $o->setSmsHelpRequestedAt($n->getDateTimeValue()),
            'smsOptedOut' => fn(ParseNode $n) => $o->setSmsOptedOut($n->getBooleanValue()),
            'smsOptInAt' => fn(ParseNode $n) => $o->setSmsOptInAt($n->getDateTimeValue()),
            'smsOptOutAt' => fn(ParseNode $n) => $o->setSmsOptOutAt($n->getDateTimeValue()),
            'sourceMetadata' => fn(ParseNode $n) => $o->setSourceMetadata($n->getObjectValue([LeadMetadata_sourceMetadata::class, 'createFromDiscriminatorValue'])),
            'subId' => fn(ParseNode $n) => $o->setSubId($n->getStringValue()),
            'trustedFormUrl' => fn(ParseNode $n) => $o->setTrustedFormUrl($n->getStringValue()),
            'userAgent' => fn(ParseNode $n) => $o->setUserAgent($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'utmCampaign' => fn(ParseNode $n) => $o->setUtmCampaign($n->getStringValue()),
            'utmContent' => fn(ParseNode $n) => $o->setUtmContent($n->getStringValue()),
            'utmMedium' => fn(ParseNode $n) => $o->setUtmMedium($n->getStringValue()),
            'utmSource' => fn(ParseNode $n) => $o->setUtmSource($n->getStringValue()),
            'utmTerm' => fn(ParseNode $n) => $o->setUtmTerm($n->getStringValue()),
            'vertical' => fn(ParseNode $n) => $o->setVertical($n->getStringValue()),
        ];
    }

    /**
     * Gets the importBatchId property value. Bulk import batch ID that created or updated this lead.
     * @return string|null
    */
    public function getImportBatchId(): ?string {
        return $this->importBatchId;
    }

    /**
     * Gets the ipAddress property value. IP address captured with the request for audit and compliance review.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the isImported property value. Indicates whether this lead was imported rather than captured through a live source.
     * @return bool|null
    */
    public function getIsImported(): ?bool {
        return $this->isImported;
    }

    /**
     * Gets the landingPage property value. Landing page URL where the lead submitted their information.
     * @return string|null
    */
    public function getLandingPage(): ?string {
        return $this->landingPage;
    }

    /**
     * Gets the origin property value. System or workflow that created this event.
     * @return string|null
    */
    public function getOrigin(): ?string {
        return $this->origin;
    }

    /**
     * Gets the product property value. Product or offer associated with the lead or source.
     * @return string|null
    */
    public function getProduct(): ?string {
        return $this->product;
    }

    /**
     * Gets the pubId property value. Publisher ID supplied by the lead source for attribution.
     * @return string|null
    */
    public function getPubId(): ?string {
        return $this->pubId;
    }

    /**
     * Gets the referrer property value. Referring page or traffic source that sent the lead into Leadping.
     * @return string|null
    */
    public function getReferrer(): ?string {
        return $this->referrer;
    }

    /**
     * Gets the sellerLeadId property value. Seller-provided lead identifier used to deduplicate and reconcile lead delivery.
     * @return string|null
    */
    public function getSellerLeadId(): ?string {
        return $this->sellerLeadId;
    }

    /**
     * Gets the smsConsentPhoneNumber property value. Phone number where SMS consent was captured or evaluated.
     * @return string|null
    */
    public function getSmsConsentPhoneNumber(): ?string {
        return $this->smsConsentPhoneNumber;
    }

    /**
     * Gets the smsConsentStatus property value. Current SMS consent status recorded for this lead.
     * @return string|null
    */
    public function getSmsConsentStatus(): ?string {
        return $this->smsConsentStatus;
    }

    /**
     * Gets the smsHelpRequestedAt property value. UTC timestamp when the lead requested SMS help instructions.
     * @return DateTime|null
    */
    public function getSmsHelpRequestedAt(): ?DateTime {
        return $this->smsHelpRequestedAt;
    }

    /**
     * Gets the smsOptedOut property value. Indicates whether the lead has opted out of SMS communication.
     * @return bool|null
    */
    public function getSmsOptedOut(): ?bool {
        return $this->smsOptedOut;
    }

    /**
     * Gets the smsOptInAt property value. UTC timestamp when the lead opted in to SMS communication.
     * @return DateTime|null
    */
    public function getSmsOptInAt(): ?DateTime {
        return $this->smsOptInAt;
    }

    /**
     * Gets the smsOptOutAt property value. UTC timestamp when the lead opted out of SMS communication.
     * @return DateTime|null
    */
    public function getSmsOptOutAt(): ?DateTime {
        return $this->smsOptOutAt;
    }

    /**
     * Gets the sourceMetadata property value. Source-provided key-value metadata retained for lead attribution and integration troubleshooting.
     * @return LeadMetadata_sourceMetadata|null
    */
    public function getSourceMetadata(): ?LeadMetadata_sourceMetadata {
        return $this->sourceMetadata;
    }

    /**
     * Gets the subId property value. Affiliate or publisher sub ID captured for lead attribution.
     * @return string|null
    */
    public function getSubId(): ?string {
        return $this->subId;
    }

    /**
     * Gets the trustedFormUrl property value. TrustedForm certificate URL used as proof of consumer consent.
     * @return string|null
    */
    public function getTrustedFormUrl(): ?string {
        return $this->trustedFormUrl;
    }

    /**
     * Gets the userAgent property value. Browser or client user agent captured when this lead attribution metadata was submitted.
     * @return string|null
    */
    public function getUserAgent(): ?string {
        return $this->userAgent;
    }

    /**
     * Gets the userId property value. User ID associated with this lead's attribution metadata.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the utmCampaign property value. UTM campaign parameter captured for lead attribution reporting.
     * @return string|null
    */
    public function getUtmCampaign(): ?string {
        return $this->utmCampaign;
    }

    /**
     * Gets the utmContent property value. UTM content parameter captured for lead attribution reporting.
     * @return string|null
    */
    public function getUtmContent(): ?string {
        return $this->utmContent;
    }

    /**
     * Gets the utmMedium property value. UTM medium parameter captured for lead attribution reporting.
     * @return string|null
    */
    public function getUtmMedium(): ?string {
        return $this->utmMedium;
    }

    /**
     * Gets the utmSource property value. UTM source parameter captured for lead attribution reporting.
     * @return string|null
    */
    public function getUtmSource(): ?string {
        return $this->utmSource;
    }

    /**
     * Gets the utmTerm property value. UTM term parameter captured for lead attribution reporting.
     * @return string|null
    */
    public function getUtmTerm(): ?string {
        return $this->utmTerm;
    }

    /**
     * Gets the vertical property value. Industry vertical used for lead routing, compliance review, and reporting.
     * @return string|null
    */
    public function getVertical(): ?string {
        return $this->vertical;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignedPhoneNumberId', $this->getAssignedPhoneNumberId());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('complianceBlockedReason', $this->getComplianceBlockedReason());
        $writer->writeStringValue('complianceStatus', $this->getComplianceStatus());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeStringValue('importBatchId', $this->getImportBatchId());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeBooleanValue('isImported', $this->getIsImported());
        $writer->writeStringValue('landingPage', $this->getLandingPage());
        $writer->writeStringValue('origin', $this->getOrigin());
        $writer->writeStringValue('product', $this->getProduct());
        $writer->writeStringValue('pubId', $this->getPubId());
        $writer->writeStringValue('referrer', $this->getReferrer());
        $writer->writeStringValue('sellerLeadId', $this->getSellerLeadId());
        $writer->writeStringValue('smsConsentPhoneNumber', $this->getSmsConsentPhoneNumber());
        $writer->writeStringValue('smsConsentStatus', $this->getSmsConsentStatus());
        $writer->writeDateTimeValue('smsHelpRequestedAt', $this->getSmsHelpRequestedAt());
        $writer->writeBooleanValue('smsOptedOut', $this->getSmsOptedOut());
        $writer->writeDateTimeValue('smsOptInAt', $this->getSmsOptInAt());
        $writer->writeDateTimeValue('smsOptOutAt', $this->getSmsOptOutAt());
        $writer->writeObjectValue('sourceMetadata', $this->getSourceMetadata());
        $writer->writeStringValue('subId', $this->getSubId());
        $writer->writeStringValue('trustedFormUrl', $this->getTrustedFormUrl());
        $writer->writeStringValue('userAgent', $this->getUserAgent());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('utmCampaign', $this->getUtmCampaign());
        $writer->writeStringValue('utmContent', $this->getUtmContent());
        $writer->writeStringValue('utmMedium', $this->getUtmMedium());
        $writer->writeStringValue('utmSource', $this->getUtmSource());
        $writer->writeStringValue('utmTerm', $this->getUtmTerm());
        $writer->writeStringValue('vertical', $this->getVertical());
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
     * Sets the assignedPhoneNumberId property value. Phone number ID assigned to the lead, business, or source.
     * @param string|null $value Value to set for the assignedPhoneNumberId property.
    */
    public function setAssignedPhoneNumberId(?string $value): void {
        $this->assignedPhoneNumberId = $value;
    }

    /**
     * Sets the businessId property value. Business ID that owns this lead's attribution metadata.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the complianceBlockedReason property value. Reason Leadping blocked this operation for compliance.
     * @param string|null $value Value to set for the complianceBlockedReason property.
    */
    public function setComplianceBlockedReason(?string $value): void {
        $this->complianceBlockedReason = $value;
    }

    /**
     * Sets the complianceStatus property value. Compliance status used to decide whether Leadping can send messages.
     * @param string|null $value Value to set for the complianceStatus property.
    */
    public function setComplianceStatus(?string $value): void {
        $this->complianceStatus = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this lead attribution metadata was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the externalId property value. External system identifier used to reconcile this lead attribution metadata across integrations.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->externalId = $value;
    }

    /**
     * Sets the importBatchId property value. Bulk import batch ID that created or updated this lead.
     * @param string|null $value Value to set for the importBatchId property.
    */
    public function setImportBatchId(?string $value): void {
        $this->importBatchId = $value;
    }

    /**
     * Sets the ipAddress property value. IP address captured with the request for audit and compliance review.
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the isImported property value. Indicates whether this lead was imported rather than captured through a live source.
     * @param bool|null $value Value to set for the isImported property.
    */
    public function setIsImported(?bool $value): void {
        $this->isImported = $value;
    }

    /**
     * Sets the landingPage property value. Landing page URL where the lead submitted their information.
     * @param string|null $value Value to set for the landingPage property.
    */
    public function setLandingPage(?string $value): void {
        $this->landingPage = $value;
    }

    /**
     * Sets the origin property value. System or workflow that created this event.
     * @param string|null $value Value to set for the origin property.
    */
    public function setOrigin(?string $value): void {
        $this->origin = $value;
    }

    /**
     * Sets the product property value. Product or offer associated with the lead or source.
     * @param string|null $value Value to set for the product property.
    */
    public function setProduct(?string $value): void {
        $this->product = $value;
    }

    /**
     * Sets the pubId property value. Publisher ID supplied by the lead source for attribution.
     * @param string|null $value Value to set for the pubId property.
    */
    public function setPubId(?string $value): void {
        $this->pubId = $value;
    }

    /**
     * Sets the referrer property value. Referring page or traffic source that sent the lead into Leadping.
     * @param string|null $value Value to set for the referrer property.
    */
    public function setReferrer(?string $value): void {
        $this->referrer = $value;
    }

    /**
     * Sets the sellerLeadId property value. Seller-provided lead identifier used to deduplicate and reconcile lead delivery.
     * @param string|null $value Value to set for the sellerLeadId property.
    */
    public function setSellerLeadId(?string $value): void {
        $this->sellerLeadId = $value;
    }

    /**
     * Sets the smsConsentPhoneNumber property value. Phone number where SMS consent was captured or evaluated.
     * @param string|null $value Value to set for the smsConsentPhoneNumber property.
    */
    public function setSmsConsentPhoneNumber(?string $value): void {
        $this->smsConsentPhoneNumber = $value;
    }

    /**
     * Sets the smsConsentStatus property value. Current SMS consent status recorded for this lead.
     * @param string|null $value Value to set for the smsConsentStatus property.
    */
    public function setSmsConsentStatus(?string $value): void {
        $this->smsConsentStatus = $value;
    }

    /**
     * Sets the smsHelpRequestedAt property value. UTC timestamp when the lead requested SMS help instructions.
     * @param DateTime|null $value Value to set for the smsHelpRequestedAt property.
    */
    public function setSmsHelpRequestedAt(?DateTime $value): void {
        $this->smsHelpRequestedAt = $value;
    }

    /**
     * Sets the smsOptedOut property value. Indicates whether the lead has opted out of SMS communication.
     * @param bool|null $value Value to set for the smsOptedOut property.
    */
    public function setSmsOptedOut(?bool $value): void {
        $this->smsOptedOut = $value;
    }

    /**
     * Sets the smsOptInAt property value. UTC timestamp when the lead opted in to SMS communication.
     * @param DateTime|null $value Value to set for the smsOptInAt property.
    */
    public function setSmsOptInAt(?DateTime $value): void {
        $this->smsOptInAt = $value;
    }

    /**
     * Sets the smsOptOutAt property value. UTC timestamp when the lead opted out of SMS communication.
     * @param DateTime|null $value Value to set for the smsOptOutAt property.
    */
    public function setSmsOptOutAt(?DateTime $value): void {
        $this->smsOptOutAt = $value;
    }

    /**
     * Sets the sourceMetadata property value. Source-provided key-value metadata retained for lead attribution and integration troubleshooting.
     * @param LeadMetadata_sourceMetadata|null $value Value to set for the sourceMetadata property.
    */
    public function setSourceMetadata(?LeadMetadata_sourceMetadata $value): void {
        $this->sourceMetadata = $value;
    }

    /**
     * Sets the subId property value. Affiliate or publisher sub ID captured for lead attribution.
     * @param string|null $value Value to set for the subId property.
    */
    public function setSubId(?string $value): void {
        $this->subId = $value;
    }

    /**
     * Sets the trustedFormUrl property value. TrustedForm certificate URL used as proof of consumer consent.
     * @param string|null $value Value to set for the trustedFormUrl property.
    */
    public function setTrustedFormUrl(?string $value): void {
        $this->trustedFormUrl = $value;
    }

    /**
     * Sets the userAgent property value. Browser or client user agent captured when this lead attribution metadata was submitted.
     * @param string|null $value Value to set for the userAgent property.
    */
    public function setUserAgent(?string $value): void {
        $this->userAgent = $value;
    }

    /**
     * Sets the userId property value. User ID associated with this lead's attribution metadata.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

    /**
     * Sets the utmCampaign property value. UTM campaign parameter captured for lead attribution reporting.
     * @param string|null $value Value to set for the utmCampaign property.
    */
    public function setUtmCampaign(?string $value): void {
        $this->utmCampaign = $value;
    }

    /**
     * Sets the utmContent property value. UTM content parameter captured for lead attribution reporting.
     * @param string|null $value Value to set for the utmContent property.
    */
    public function setUtmContent(?string $value): void {
        $this->utmContent = $value;
    }

    /**
     * Sets the utmMedium property value. UTM medium parameter captured for lead attribution reporting.
     * @param string|null $value Value to set for the utmMedium property.
    */
    public function setUtmMedium(?string $value): void {
        $this->utmMedium = $value;
    }

    /**
     * Sets the utmSource property value. UTM source parameter captured for lead attribution reporting.
     * @param string|null $value Value to set for the utmSource property.
    */
    public function setUtmSource(?string $value): void {
        $this->utmSource = $value;
    }

    /**
     * Sets the utmTerm property value. UTM term parameter captured for lead attribution reporting.
     * @param string|null $value Value to set for the utmTerm property.
    */
    public function setUtmTerm(?string $value): void {
        $this->utmTerm = $value;
    }

    /**
     * Sets the vertical property value. Industry vertical used for lead routing, compliance review, and reporting.
     * @param string|null $value Value to set for the vertical property.
    */
    public function setVertical(?string $value): void {
        $this->vertical = $value;
    }

}
