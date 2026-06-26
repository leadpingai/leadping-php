<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * API DTO containing ten dlc application draft data used by Leadping API contracts.
*/
class TenDlcApplicationDraft implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $companyName The company name value for this 10DLC application draft.
    */
    private ?string $companyName = null;
    
    /**
     * @var array<string>|null $complianceWarnings The compliance warnings included with this 10DLC application draft.
    */
    private ?array $complianceWarnings = null;
    
    /**
     * @var string|null $contactEmail The contact email value for this 10DLC application draft.
    */
    private ?string $contactEmail = null;
    
    /**
     * @var string|null $contactName The contact name value for this 10DLC application draft.
    */
    private ?string $contactName = null;
    
    /**
     * @var string|null $contactPhone The contact phone value for this 10DLC application draft.
    */
    private ?string $contactPhone = null;
    
    /**
     * @var string|null $ein The EIN value for this 10DLC application draft.
    */
    private ?string $ein = null;
    
    /**
     * @var string|null $industry The industry value for this 10DLC application draft.
    */
    private ?string $industry = null;
    
    /**
     * @var DateTime|null $lastSubmittedAt The date and time for the last submitted at value on this 10DLC application draft.
    */
    private ?DateTime $lastSubmittedAt = null;
    
    /**
     * @var string|null $leadSource The lead source value for this 10DLC application draft.
    */
    private ?string $leadSource = null;
    
    /**
     * @var array<string>|null $messageExamples The message examples included with this 10DLC application draft.
    */
    private ?array $messageExamples = null;
    
    /**
     * @var array<string>|null $missingFields The missing fields included with this 10DLC application draft.
    */
    private ?array $missingFields = null;
    
    /**
     * @var string|null $optInLanguage The opt in language value for this 10DLC application draft.
    */
    private ?string $optInLanguage = null;
    
    /**
     * @var string|null $privacyPolicyUrl The URL associated with this 10DLC application draft.
    */
    private ?string $privacyPolicyUrl = null;
    
    /**
     * @var string|null $rejectionReason The human-readable rejection reason explaining this 10DLC application draft.
    */
    private ?string $rejectionReason = null;
    
    /**
     * @var string|null $termsUrl The URL associated with this 10DLC application draft.
    */
    private ?string $termsUrl = null;
    
    /**
     * @var bool|null $trustedFormRequired Whether TrustedForm required applies to this 10DLC application draft.
    */
    private ?bool $trustedFormRequired = null;
    
    /**
     * @var DateTime|null $updatedAt The date and time for the updated at value on this 10DLC application draft.
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * @var string|null $useCase The use case value for this 10DLC application draft.
    */
    private ?string $useCase = null;
    
    /**
     * @var string|null $useCaseDescription The use case description value for this 10DLC application draft.
    */
    private ?string $useCaseDescription = null;
    
    /**
     * @var int|null $version The version value for this 10DLC application draft.
    */
    private ?int $version = null;
    
    /**
     * @var string|null $websiteUrl The URL associated with this 10DLC application draft.
    */
    private ?string $websiteUrl = null;
    
    /**
     * Instantiates a new TenDlcApplicationDraft and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenDlcApplicationDraft
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenDlcApplicationDraft {
        return new TenDlcApplicationDraft();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the companyName property value. The company name value for this 10DLC application draft.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the complianceWarnings property value. The compliance warnings included with this 10DLC application draft.
     * @return array<string>|null
    */
    public function getComplianceWarnings(): ?array {
        return $this->complianceWarnings;
    }

    /**
     * Gets the contactEmail property value. The contact email value for this 10DLC application draft.
     * @return string|null
    */
    public function getContactEmail(): ?string {
        return $this->contactEmail;
    }

    /**
     * Gets the contactName property value. The contact name value for this 10DLC application draft.
     * @return string|null
    */
    public function getContactName(): ?string {
        return $this->contactName;
    }

    /**
     * Gets the contactPhone property value. The contact phone value for this 10DLC application draft.
     * @return string|null
    */
    public function getContactPhone(): ?string {
        return $this->contactPhone;
    }

    /**
     * Gets the ein property value. The EIN value for this 10DLC application draft.
     * @return string|null
    */
    public function getEin(): ?string {
        return $this->ein;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'complianceWarnings' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setComplianceWarnings($val);
            },
            'contactEmail' => fn(ParseNode $n) => $o->setContactEmail($n->getStringValue()),
            'contactName' => fn(ParseNode $n) => $o->setContactName($n->getStringValue()),
            'contactPhone' => fn(ParseNode $n) => $o->setContactPhone($n->getStringValue()),
            'ein' => fn(ParseNode $n) => $o->setEin($n->getStringValue()),
            'industry' => fn(ParseNode $n) => $o->setIndustry($n->getStringValue()),
            'lastSubmittedAt' => fn(ParseNode $n) => $o->setLastSubmittedAt($n->getDateTimeValue()),
            'leadSource' => fn(ParseNode $n) => $o->setLeadSource($n->getStringValue()),
            'messageExamples' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMessageExamples($val);
            },
            'missingFields' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMissingFields($val);
            },
            'optInLanguage' => fn(ParseNode $n) => $o->setOptInLanguage($n->getStringValue()),
            'privacyPolicyUrl' => fn(ParseNode $n) => $o->setPrivacyPolicyUrl($n->getStringValue()),
            'rejectionReason' => fn(ParseNode $n) => $o->setRejectionReason($n->getStringValue()),
            'termsUrl' => fn(ParseNode $n) => $o->setTermsUrl($n->getStringValue()),
            'trustedFormRequired' => fn(ParseNode $n) => $o->setTrustedFormRequired($n->getBooleanValue()),
            'updatedAt' => fn(ParseNode $n) => $o->setUpdatedAt($n->getDateTimeValue()),
            'useCase' => fn(ParseNode $n) => $o->setUseCase($n->getStringValue()),
            'useCaseDescription' => fn(ParseNode $n) => $o->setUseCaseDescription($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
            'websiteUrl' => fn(ParseNode $n) => $o->setWebsiteUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the industry property value. The industry value for this 10DLC application draft.
     * @return string|null
    */
    public function getIndustry(): ?string {
        return $this->industry;
    }

    /**
     * Gets the lastSubmittedAt property value. The date and time for the last submitted at value on this 10DLC application draft.
     * @return DateTime|null
    */
    public function getLastSubmittedAt(): ?DateTime {
        return $this->lastSubmittedAt;
    }

    /**
     * Gets the leadSource property value. The lead source value for this 10DLC application draft.
     * @return string|null
    */
    public function getLeadSource(): ?string {
        return $this->leadSource;
    }

    /**
     * Gets the messageExamples property value. The message examples included with this 10DLC application draft.
     * @return array<string>|null
    */
    public function getMessageExamples(): ?array {
        return $this->messageExamples;
    }

    /**
     * Gets the missingFields property value. The missing fields included with this 10DLC application draft.
     * @return array<string>|null
    */
    public function getMissingFields(): ?array {
        return $this->missingFields;
    }

    /**
     * Gets the optInLanguage property value. The opt in language value for this 10DLC application draft.
     * @return string|null
    */
    public function getOptInLanguage(): ?string {
        return $this->optInLanguage;
    }

    /**
     * Gets the privacyPolicyUrl property value. The URL associated with this 10DLC application draft.
     * @return string|null
    */
    public function getPrivacyPolicyUrl(): ?string {
        return $this->privacyPolicyUrl;
    }

    /**
     * Gets the rejectionReason property value. The human-readable rejection reason explaining this 10DLC application draft.
     * @return string|null
    */
    public function getRejectionReason(): ?string {
        return $this->rejectionReason;
    }

    /**
     * Gets the termsUrl property value. The URL associated with this 10DLC application draft.
     * @return string|null
    */
    public function getTermsUrl(): ?string {
        return $this->termsUrl;
    }

    /**
     * Gets the trustedFormRequired property value. Whether TrustedForm required applies to this 10DLC application draft.
     * @return bool|null
    */
    public function getTrustedFormRequired(): ?bool {
        return $this->trustedFormRequired;
    }

    /**
     * Gets the updatedAt property value. The date and time for the updated at value on this 10DLC application draft.
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updatedAt;
    }

    /**
     * Gets the useCase property value. The use case value for this 10DLC application draft.
     * @return string|null
    */
    public function getUseCase(): ?string {
        return $this->useCase;
    }

    /**
     * Gets the useCaseDescription property value. The use case description value for this 10DLC application draft.
     * @return string|null
    */
    public function getUseCaseDescription(): ?string {
        return $this->useCaseDescription;
    }

    /**
     * Gets the version property value. The version value for this 10DLC application draft.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Gets the websiteUrl property value. The URL associated with this 10DLC application draft.
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
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeCollectionOfPrimitiveValues('complianceWarnings', $this->getComplianceWarnings());
        $writer->writeStringValue('contactEmail', $this->getContactEmail());
        $writer->writeStringValue('contactName', $this->getContactName());
        $writer->writeStringValue('contactPhone', $this->getContactPhone());
        $writer->writeStringValue('ein', $this->getEin());
        $writer->writeStringValue('industry', $this->getIndustry());
        $writer->writeDateTimeValue('lastSubmittedAt', $this->getLastSubmittedAt());
        $writer->writeStringValue('leadSource', $this->getLeadSource());
        $writer->writeCollectionOfPrimitiveValues('messageExamples', $this->getMessageExamples());
        $writer->writeCollectionOfPrimitiveValues('missingFields', $this->getMissingFields());
        $writer->writeStringValue('optInLanguage', $this->getOptInLanguage());
        $writer->writeStringValue('privacyPolicyUrl', $this->getPrivacyPolicyUrl());
        $writer->writeStringValue('rejectionReason', $this->getRejectionReason());
        $writer->writeStringValue('termsUrl', $this->getTermsUrl());
        $writer->writeBooleanValue('trustedFormRequired', $this->getTrustedFormRequired());
        $writer->writeDateTimeValue('updatedAt', $this->getUpdatedAt());
        $writer->writeStringValue('useCase', $this->getUseCase());
        $writer->writeStringValue('useCaseDescription', $this->getUseCaseDescription());
        $writer->writeIntegerValue('version', $this->getVersion());
        $writer->writeStringValue('websiteUrl', $this->getWebsiteUrl());
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
     * Sets the companyName property value. The company name value for this 10DLC application draft.
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->companyName = $value;
    }

    /**
     * Sets the complianceWarnings property value. The compliance warnings included with this 10DLC application draft.
     * @param array<string>|null $value Value to set for the complianceWarnings property.
    */
    public function setComplianceWarnings(?array $value): void {
        $this->complianceWarnings = $value;
    }

    /**
     * Sets the contactEmail property value. The contact email value for this 10DLC application draft.
     * @param string|null $value Value to set for the contactEmail property.
    */
    public function setContactEmail(?string $value): void {
        $this->contactEmail = $value;
    }

    /**
     * Sets the contactName property value. The contact name value for this 10DLC application draft.
     * @param string|null $value Value to set for the contactName property.
    */
    public function setContactName(?string $value): void {
        $this->contactName = $value;
    }

    /**
     * Sets the contactPhone property value. The contact phone value for this 10DLC application draft.
     * @param string|null $value Value to set for the contactPhone property.
    */
    public function setContactPhone(?string $value): void {
        $this->contactPhone = $value;
    }

    /**
     * Sets the ein property value. The EIN value for this 10DLC application draft.
     * @param string|null $value Value to set for the ein property.
    */
    public function setEin(?string $value): void {
        $this->ein = $value;
    }

    /**
     * Sets the industry property value. The industry value for this 10DLC application draft.
     * @param string|null $value Value to set for the industry property.
    */
    public function setIndustry(?string $value): void {
        $this->industry = $value;
    }

    /**
     * Sets the lastSubmittedAt property value. The date and time for the last submitted at value on this 10DLC application draft.
     * @param DateTime|null $value Value to set for the lastSubmittedAt property.
    */
    public function setLastSubmittedAt(?DateTime $value): void {
        $this->lastSubmittedAt = $value;
    }

    /**
     * Sets the leadSource property value. The lead source value for this 10DLC application draft.
     * @param string|null $value Value to set for the leadSource property.
    */
    public function setLeadSource(?string $value): void {
        $this->leadSource = $value;
    }

    /**
     * Sets the messageExamples property value. The message examples included with this 10DLC application draft.
     * @param array<string>|null $value Value to set for the messageExamples property.
    */
    public function setMessageExamples(?array $value): void {
        $this->messageExamples = $value;
    }

    /**
     * Sets the missingFields property value. The missing fields included with this 10DLC application draft.
     * @param array<string>|null $value Value to set for the missingFields property.
    */
    public function setMissingFields(?array $value): void {
        $this->missingFields = $value;
    }

    /**
     * Sets the optInLanguage property value. The opt in language value for this 10DLC application draft.
     * @param string|null $value Value to set for the optInLanguage property.
    */
    public function setOptInLanguage(?string $value): void {
        $this->optInLanguage = $value;
    }

    /**
     * Sets the privacyPolicyUrl property value. The URL associated with this 10DLC application draft.
     * @param string|null $value Value to set for the privacyPolicyUrl property.
    */
    public function setPrivacyPolicyUrl(?string $value): void {
        $this->privacyPolicyUrl = $value;
    }

    /**
     * Sets the rejectionReason property value. The human-readable rejection reason explaining this 10DLC application draft.
     * @param string|null $value Value to set for the rejectionReason property.
    */
    public function setRejectionReason(?string $value): void {
        $this->rejectionReason = $value;
    }

    /**
     * Sets the termsUrl property value. The URL associated with this 10DLC application draft.
     * @param string|null $value Value to set for the termsUrl property.
    */
    public function setTermsUrl(?string $value): void {
        $this->termsUrl = $value;
    }

    /**
     * Sets the trustedFormRequired property value. Whether TrustedForm required applies to this 10DLC application draft.
     * @param bool|null $value Value to set for the trustedFormRequired property.
    */
    public function setTrustedFormRequired(?bool $value): void {
        $this->trustedFormRequired = $value;
    }

    /**
     * Sets the updatedAt property value. The date and time for the updated at value on this 10DLC application draft.
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

    /**
     * Sets the useCase property value. The use case value for this 10DLC application draft.
     * @param string|null $value Value to set for the useCase property.
    */
    public function setUseCase(?string $value): void {
        $this->useCase = $value;
    }

    /**
     * Sets the useCaseDescription property value. The use case description value for this 10DLC application draft.
     * @param string|null $value Value to set for the useCaseDescription property.
    */
    public function setUseCaseDescription(?string $value): void {
        $this->useCaseDescription = $value;
    }

    /**
     * Sets the version property value. The version value for this 10DLC application draft.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->version = $value;
    }

    /**
     * Sets the websiteUrl property value. The URL associated with this 10DLC application draft.
     * @param string|null $value Value to set for the websiteUrl property.
    */
    public function setWebsiteUrl(?string $value): void {
        $this->websiteUrl = $value;
    }

}
