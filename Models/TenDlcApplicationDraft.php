<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Describes 10DLC application draft data used in Leadping API requests and responses.
*/
class TenDlcApplicationDraft implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $ageGated Whether campaign content is age gated.
    */
    private ?bool $ageGated = null;
    
    /**
     * @var bool|null $autoRenewal Whether the campaign subscription renews automatically.
    */
    private ?bool $autoRenewal = null;
    
    /**
     * @var string|null $brandEntityType Legal entity type registered with Telnyx.
    */
    private ?string $brandEntityType = null;
    
    /**
     * @var TenDlcRegistrationStatus|null $brandStatus Defines the provider lifecycle for an individual 10DLC brand or campaign.
    */
    private ?TenDlcRegistrationStatus $brandStatus = null;
    
    /**
     * @var string|null $businessContactEmail Individual representative email required for public-company verification.
    */
    private ?string $businessContactEmail = null;
    
    /**
     * @var TenDlcRegistrationStatus|null $campaignStatus Defines the provider lifecycle for an individual 10DLC brand or campaign.
    */
    private ?TenDlcRegistrationStatus $campaignStatus = null;
    
    /**
     * @var string|null $city Legal business city.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $companyName Company name for this 10DLC application draft.
    */
    private ?string $companyName = null;
    
    /**
     * @var array<string>|null $complianceWarnings The compliance warnings included with this 10DLC application draft.
    */
    private ?array $complianceWarnings = null;
    
    /**
     * @var string|null $contactEmail Contact email for this 10DLC application draft.
    */
    private ?string $contactEmail = null;
    
    /**
     * @var string|null $contactName Contact name for this 10DLC application draft.
    */
    private ?string $contactName = null;
    
    /**
     * @var string|null $contactPhone Contact phone for this 10DLC application draft.
    */
    private ?string $contactPhone = null;
    
    /**
     * @var string|null $country ISO two-letter country of registration.
    */
    private ?string $country = null;
    
    /**
     * @var bool|null $directLending Whether messages concern direct lending or loan arrangements.
    */
    private ?bool $directLending = null;
    
    /**
     * @var string|null $displayName Customer-facing brand or DBA name.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $ein EIN for this 10DLC application draft.
    */
    private ?string $ein = null;
    
    /**
     * @var bool|null $embeddedLink Whether campaign messages contain links.
    */
    private ?bool $embeddedLink = null;
    
    /**
     * @var string|null $embeddedLinkSample Representative embedded link submitted for review.
    */
    private ?string $embeddedLinkSample = null;
    
    /**
     * @var bool|null $embeddedPhone Whether campaign messages contain phone numbers.
    */
    private ?bool $embeddedPhone = null;
    
    /**
     * @var int|null $expectedMonthlyVolume Expected monthly volume for this 10DLC application draft.
    */
    private ?int $expectedMonthlyVolume = null;
    
    /**
     * @var string|null $helpKeywords Comma-separated help keywords.
    */
    private ?string $helpKeywords = null;
    
    /**
     * @var string|null $helpMessage Help response with customer-care information.
    */
    private ?string $helpMessage = null;
    
    /**
     * @var string|null $industry The Telnyx brand vertical for this 10DLC application draft. The JSON name is retained for backward compatibility.
    */
    private ?string $industry = null;
    
    /**
     * @var bool|null $isReseller Whether the brand resells services to other businesses.
    */
    private ?bool $isReseller = null;
    
    /**
     * @var DateTime|null $lastSubmittedAt UTC timestamp for last submitted at on this 10DLC application draft.
    */
    private ?DateTime $lastSubmittedAt = null;
    
    /**
     * @var array<string>|null $messageExamples The message examples included with this 10DLC application draft.
    */
    private ?array $messageExamples = null;
    
    /**
     * @var array<string>|null $missingFields The missing fields included with this 10DLC application draft.
    */
    private ?array $missingFields = null;
    
    /**
     * @var bool|null $numberPool Whether the campaign uses a number pool.
    */
    private ?bool $numberPool = null;
    
    /**
     * @var string|null $optinKeywords Comma-separated opt-in keywords.
    */
    private ?string $optinKeywords = null;
    
    /**
     * @var string|null $optInLanguage Opt in language for this 10DLC application draft.
    */
    private ?string $optInLanguage = null;
    
    /**
     * @var string|null $optinMessage Opt-in confirmation response.
    */
    private ?string $optinMessage = null;
    
    /**
     * @var string|null $optoutKeywords Comma-separated opt-out keywords.
    */
    private ?string $optoutKeywords = null;
    
    /**
     * @var string|null $optoutMessage Opt-out confirmation response.
    */
    private ?string $optoutMessage = null;
    
    /**
     * @var string|null $postalCode Legal business postal code.
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $privacyPolicyUrl Public privacy-policy URL that explains how messaging recipient data is handled.
    */
    private ?string $privacyPolicyUrl = null;
    
    /**
     * @var string|null $rejectionReason The human-readable rejection reason explaining this 10DLC application draft.
    */
    private ?string $rejectionReason = null;
    
    /**
     * @var string|null $state Legal business state or region.
    */
    private ?string $state = null;
    
    /**
     * @var string|null $stockExchange Public-company stock exchange.
    */
    private ?string $stockExchange = null;
    
    /**
     * @var string|null $stockSymbol Public-company stock ticker.
    */
    private ?string $stockSymbol = null;
    
    /**
     * @var string|null $street Legal business street address.
    */
    private ?string $street = null;
    
    /**
     * @var bool|null $subscriberHelp Whether the program responds to help keywords.
    */
    private ?bool $subscriberHelp = null;
    
    /**
     * @var bool|null $subscriberOptin Whether subscribers opt in before messaging.
    */
    private ?bool $subscriberOptin = null;
    
    /**
     * @var bool|null $subscriberOptout Whether the program supports opt-out keywords.
    */
    private ?bool $subscriberOptout = null;
    
    /**
     * @var array<string>|null $subUseCases Selected sub-use cases for a mixed campaign.
    */
    private ?array $subUseCases = null;
    
    /**
     * @var bool|null $termsAndConditions Acceptance of the carrier campaign terms.
    */
    private ?bool $termsAndConditions = null;
    
    /**
     * @var string|null $termsUrl Public terms-of-service URL governing the messaging program.
    */
    private ?string $termsUrl = null;
    
    /**
     * @var bool|null $trustedFormRequired Whether TrustedForm required applies to this 10DLC application draft.
    */
    private ?bool $trustedFormRequired = null;
    
    /**
     * @var DateTime|null $updatedAt UTC timestamp for updated at on this 10DLC application draft.
    */
    private ?DateTime $updatedAt = null;
    
    /**
     * @var string|null $useCase Use case for this 10DLC application draft.
    */
    private ?string $useCase = null;
    
    /**
     * @var string|null $useCaseDescription Use case description for this 10DLC application draft.
    */
    private ?string $useCaseDescription = null;
    
    /**
     * @var int|null $version Version for this 10DLC application draft.
    */
    private ?int $version = null;
    
    /**
     * @var string|null $websiteUrl Public business website URL submitted to carriers during brand review.
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
     * Gets the ageGated property value. Whether campaign content is age gated.
     * @return bool|null
    */
    public function getAgeGated(): ?bool {
        return $this->ageGated;
    }

    /**
     * Gets the autoRenewal property value. Whether the campaign subscription renews automatically.
     * @return bool|null
    */
    public function getAutoRenewal(): ?bool {
        return $this->autoRenewal;
    }

    /**
     * Gets the brandEntityType property value. Legal entity type registered with Telnyx.
     * @return string|null
    */
    public function getBrandEntityType(): ?string {
        return $this->brandEntityType;
    }

    /**
     * Gets the brandStatus property value. Defines the provider lifecycle for an individual 10DLC brand or campaign.
     * @return TenDlcRegistrationStatus|null
    */
    public function getBrandStatus(): ?TenDlcRegistrationStatus {
        return $this->brandStatus;
    }

    /**
     * Gets the businessContactEmail property value. Individual representative email required for public-company verification.
     * @return string|null
    */
    public function getBusinessContactEmail(): ?string {
        return $this->businessContactEmail;
    }

    /**
     * Gets the campaignStatus property value. Defines the provider lifecycle for an individual 10DLC brand or campaign.
     * @return TenDlcRegistrationStatus|null
    */
    public function getCampaignStatus(): ?TenDlcRegistrationStatus {
        return $this->campaignStatus;
    }

    /**
     * Gets the city property value. Legal business city.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the companyName property value. Company name for this 10DLC application draft.
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
     * Gets the contactEmail property value. Contact email for this 10DLC application draft.
     * @return string|null
    */
    public function getContactEmail(): ?string {
        return $this->contactEmail;
    }

    /**
     * Gets the contactName property value. Contact name for this 10DLC application draft.
     * @return string|null
    */
    public function getContactName(): ?string {
        return $this->contactName;
    }

    /**
     * Gets the contactPhone property value. Contact phone for this 10DLC application draft.
     * @return string|null
    */
    public function getContactPhone(): ?string {
        return $this->contactPhone;
    }

    /**
     * Gets the country property value. ISO two-letter country of registration.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the directLending property value. Whether messages concern direct lending or loan arrangements.
     * @return bool|null
    */
    public function getDirectLending(): ?bool {
        return $this->directLending;
    }

    /**
     * Gets the displayName property value. Customer-facing brand or DBA name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the ein property value. EIN for this 10DLC application draft.
     * @return string|null
    */
    public function getEin(): ?string {
        return $this->ein;
    }

    /**
     * Gets the embeddedLink property value. Whether campaign messages contain links.
     * @return bool|null
    */
    public function getEmbeddedLink(): ?bool {
        return $this->embeddedLink;
    }

    /**
     * Gets the embeddedLinkSample property value. Representative embedded link submitted for review.
     * @return string|null
    */
    public function getEmbeddedLinkSample(): ?string {
        return $this->embeddedLinkSample;
    }

    /**
     * Gets the embeddedPhone property value. Whether campaign messages contain phone numbers.
     * @return bool|null
    */
    public function getEmbeddedPhone(): ?bool {
        return $this->embeddedPhone;
    }

    /**
     * Gets the expectedMonthlyVolume property value. Expected monthly volume for this 10DLC application draft.
     * @return int|null
    */
    public function getExpectedMonthlyVolume(): ?int {
        return $this->expectedMonthlyVolume;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'ageGated' => fn(ParseNode $n) => $o->setAgeGated($n->getBooleanValue()),
            'autoRenewal' => fn(ParseNode $n) => $o->setAutoRenewal($n->getBooleanValue()),
            'brandEntityType' => fn(ParseNode $n) => $o->setBrandEntityType($n->getStringValue()),
            'brandStatus' => fn(ParseNode $n) => $o->setBrandStatus($n->getEnumValue(TenDlcRegistrationStatus::class)),
            'businessContactEmail' => fn(ParseNode $n) => $o->setBusinessContactEmail($n->getStringValue()),
            'campaignStatus' => fn(ParseNode $n) => $o->setCampaignStatus($n->getEnumValue(TenDlcRegistrationStatus::class)),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
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
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'directLending' => fn(ParseNode $n) => $o->setDirectLending($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'ein' => fn(ParseNode $n) => $o->setEin($n->getStringValue()),
            'embeddedLink' => fn(ParseNode $n) => $o->setEmbeddedLink($n->getBooleanValue()),
            'embeddedLinkSample' => fn(ParseNode $n) => $o->setEmbeddedLinkSample($n->getStringValue()),
            'embeddedPhone' => fn(ParseNode $n) => $o->setEmbeddedPhone($n->getBooleanValue()),
            'expectedMonthlyVolume' => fn(ParseNode $n) => $o->setExpectedMonthlyVolume($n->getIntegerValue()),
            'helpKeywords' => fn(ParseNode $n) => $o->setHelpKeywords($n->getStringValue()),
            'helpMessage' => fn(ParseNode $n) => $o->setHelpMessage($n->getStringValue()),
            'industry' => fn(ParseNode $n) => $o->setIndustry($n->getStringValue()),
            'isReseller' => fn(ParseNode $n) => $o->setIsReseller($n->getBooleanValue()),
            'lastSubmittedAt' => fn(ParseNode $n) => $o->setLastSubmittedAt($n->getDateTimeValue()),
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
            'numberPool' => fn(ParseNode $n) => $o->setNumberPool($n->getBooleanValue()),
            'optinKeywords' => fn(ParseNode $n) => $o->setOptinKeywords($n->getStringValue()),
            'optInLanguage' => fn(ParseNode $n) => $o->setOptInLanguage($n->getStringValue()),
            'optinMessage' => fn(ParseNode $n) => $o->setOptinMessage($n->getStringValue()),
            'optoutKeywords' => fn(ParseNode $n) => $o->setOptoutKeywords($n->getStringValue()),
            'optoutMessage' => fn(ParseNode $n) => $o->setOptoutMessage($n->getStringValue()),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'privacyPolicyUrl' => fn(ParseNode $n) => $o->setPrivacyPolicyUrl($n->getStringValue()),
            'rejectionReason' => fn(ParseNode $n) => $o->setRejectionReason($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'stockExchange' => fn(ParseNode $n) => $o->setStockExchange($n->getStringValue()),
            'stockSymbol' => fn(ParseNode $n) => $o->setStockSymbol($n->getStringValue()),
            'street' => fn(ParseNode $n) => $o->setStreet($n->getStringValue()),
            'subscriberHelp' => fn(ParseNode $n) => $o->setSubscriberHelp($n->getBooleanValue()),
            'subscriberOptin' => fn(ParseNode $n) => $o->setSubscriberOptin($n->getBooleanValue()),
            'subscriberOptout' => fn(ParseNode $n) => $o->setSubscriberOptout($n->getBooleanValue()),
            'subUseCases' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSubUseCases($val);
            },
            'termsAndConditions' => fn(ParseNode $n) => $o->setTermsAndConditions($n->getBooleanValue()),
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
     * Gets the helpKeywords property value. Comma-separated help keywords.
     * @return string|null
    */
    public function getHelpKeywords(): ?string {
        return $this->helpKeywords;
    }

    /**
     * Gets the helpMessage property value. Help response with customer-care information.
     * @return string|null
    */
    public function getHelpMessage(): ?string {
        return $this->helpMessage;
    }

    /**
     * Gets the industry property value. The Telnyx brand vertical for this 10DLC application draft. The JSON name is retained for backward compatibility.
     * @return string|null
    */
    public function getIndustry(): ?string {
        return $this->industry;
    }

    /**
     * Gets the isReseller property value. Whether the brand resells services to other businesses.
     * @return bool|null
    */
    public function getIsReseller(): ?bool {
        return $this->isReseller;
    }

    /**
     * Gets the lastSubmittedAt property value. UTC timestamp for last submitted at on this 10DLC application draft.
     * @return DateTime|null
    */
    public function getLastSubmittedAt(): ?DateTime {
        return $this->lastSubmittedAt;
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
     * Gets the numberPool property value. Whether the campaign uses a number pool.
     * @return bool|null
    */
    public function getNumberPool(): ?bool {
        return $this->numberPool;
    }

    /**
     * Gets the optinKeywords property value. Comma-separated opt-in keywords.
     * @return string|null
    */
    public function getOptinKeywords(): ?string {
        return $this->optinKeywords;
    }

    /**
     * Gets the optInLanguage property value. Opt in language for this 10DLC application draft.
     * @return string|null
    */
    public function getOptInLanguage(): ?string {
        return $this->optInLanguage;
    }

    /**
     * Gets the optinMessage property value. Opt-in confirmation response.
     * @return string|null
    */
    public function getOptinMessage(): ?string {
        return $this->optinMessage;
    }

    /**
     * Gets the optoutKeywords property value. Comma-separated opt-out keywords.
     * @return string|null
    */
    public function getOptoutKeywords(): ?string {
        return $this->optoutKeywords;
    }

    /**
     * Gets the optoutMessage property value. Opt-out confirmation response.
     * @return string|null
    */
    public function getOptoutMessage(): ?string {
        return $this->optoutMessage;
    }

    /**
     * Gets the postalCode property value. Legal business postal code.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the privacyPolicyUrl property value. Public privacy-policy URL that explains how messaging recipient data is handled.
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
     * Gets the state property value. Legal business state or region.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the stockExchange property value. Public-company stock exchange.
     * @return string|null
    */
    public function getStockExchange(): ?string {
        return $this->stockExchange;
    }

    /**
     * Gets the stockSymbol property value. Public-company stock ticker.
     * @return string|null
    */
    public function getStockSymbol(): ?string {
        return $this->stockSymbol;
    }

    /**
     * Gets the street property value. Legal business street address.
     * @return string|null
    */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Gets the subscriberHelp property value. Whether the program responds to help keywords.
     * @return bool|null
    */
    public function getSubscriberHelp(): ?bool {
        return $this->subscriberHelp;
    }

    /**
     * Gets the subscriberOptin property value. Whether subscribers opt in before messaging.
     * @return bool|null
    */
    public function getSubscriberOptin(): ?bool {
        return $this->subscriberOptin;
    }

    /**
     * Gets the subscriberOptout property value. Whether the program supports opt-out keywords.
     * @return bool|null
    */
    public function getSubscriberOptout(): ?bool {
        return $this->subscriberOptout;
    }

    /**
     * Gets the subUseCases property value. Selected sub-use cases for a mixed campaign.
     * @return array<string>|null
    */
    public function getSubUseCases(): ?array {
        return $this->subUseCases;
    }

    /**
     * Gets the termsAndConditions property value. Acceptance of the carrier campaign terms.
     * @return bool|null
    */
    public function getTermsAndConditions(): ?bool {
        return $this->termsAndConditions;
    }

    /**
     * Gets the termsUrl property value. Public terms-of-service URL governing the messaging program.
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
     * Gets the updatedAt property value. UTC timestamp for updated at on this 10DLC application draft.
     * @return DateTime|null
    */
    public function getUpdatedAt(): ?DateTime {
        return $this->updatedAt;
    }

    /**
     * Gets the useCase property value. Use case for this 10DLC application draft.
     * @return string|null
    */
    public function getUseCase(): ?string {
        return $this->useCase;
    }

    /**
     * Gets the useCaseDescription property value. Use case description for this 10DLC application draft.
     * @return string|null
    */
    public function getUseCaseDescription(): ?string {
        return $this->useCaseDescription;
    }

    /**
     * Gets the version property value. Version for this 10DLC application draft.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Gets the websiteUrl property value. Public business website URL submitted to carriers during brand review.
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
        $writer->writeBooleanValue('ageGated', $this->getAgeGated());
        $writer->writeBooleanValue('autoRenewal', $this->getAutoRenewal());
        $writer->writeStringValue('brandEntityType', $this->getBrandEntityType());
        $writer->writeEnumValue('brandStatus', $this->getBrandStatus());
        $writer->writeStringValue('businessContactEmail', $this->getBusinessContactEmail());
        $writer->writeEnumValue('campaignStatus', $this->getCampaignStatus());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeCollectionOfPrimitiveValues('complianceWarnings', $this->getComplianceWarnings());
        $writer->writeStringValue('contactEmail', $this->getContactEmail());
        $writer->writeStringValue('contactName', $this->getContactName());
        $writer->writeStringValue('contactPhone', $this->getContactPhone());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeBooleanValue('directLending', $this->getDirectLending());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('ein', $this->getEin());
        $writer->writeBooleanValue('embeddedLink', $this->getEmbeddedLink());
        $writer->writeStringValue('embeddedLinkSample', $this->getEmbeddedLinkSample());
        $writer->writeBooleanValue('embeddedPhone', $this->getEmbeddedPhone());
        $writer->writeIntegerValue('expectedMonthlyVolume', $this->getExpectedMonthlyVolume());
        $writer->writeStringValue('helpKeywords', $this->getHelpKeywords());
        $writer->writeStringValue('helpMessage', $this->getHelpMessage());
        $writer->writeStringValue('industry', $this->getIndustry());
        $writer->writeBooleanValue('isReseller', $this->getIsReseller());
        $writer->writeDateTimeValue('lastSubmittedAt', $this->getLastSubmittedAt());
        $writer->writeCollectionOfPrimitiveValues('messageExamples', $this->getMessageExamples());
        $writer->writeCollectionOfPrimitiveValues('missingFields', $this->getMissingFields());
        $writer->writeBooleanValue('numberPool', $this->getNumberPool());
        $writer->writeStringValue('optinKeywords', $this->getOptinKeywords());
        $writer->writeStringValue('optInLanguage', $this->getOptInLanguage());
        $writer->writeStringValue('optinMessage', $this->getOptinMessage());
        $writer->writeStringValue('optoutKeywords', $this->getOptoutKeywords());
        $writer->writeStringValue('optoutMessage', $this->getOptoutMessage());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('privacyPolicyUrl', $this->getPrivacyPolicyUrl());
        $writer->writeStringValue('rejectionReason', $this->getRejectionReason());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('stockExchange', $this->getStockExchange());
        $writer->writeStringValue('stockSymbol', $this->getStockSymbol());
        $writer->writeStringValue('street', $this->getStreet());
        $writer->writeBooleanValue('subscriberHelp', $this->getSubscriberHelp());
        $writer->writeBooleanValue('subscriberOptin', $this->getSubscriberOptin());
        $writer->writeBooleanValue('subscriberOptout', $this->getSubscriberOptout());
        $writer->writeCollectionOfPrimitiveValues('subUseCases', $this->getSubUseCases());
        $writer->writeBooleanValue('termsAndConditions', $this->getTermsAndConditions());
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
     * Sets the ageGated property value. Whether campaign content is age gated.
     * @param bool|null $value Value to set for the ageGated property.
    */
    public function setAgeGated(?bool $value): void {
        $this->ageGated = $value;
    }

    /**
     * Sets the autoRenewal property value. Whether the campaign subscription renews automatically.
     * @param bool|null $value Value to set for the autoRenewal property.
    */
    public function setAutoRenewal(?bool $value): void {
        $this->autoRenewal = $value;
    }

    /**
     * Sets the brandEntityType property value. Legal entity type registered with Telnyx.
     * @param string|null $value Value to set for the brandEntityType property.
    */
    public function setBrandEntityType(?string $value): void {
        $this->brandEntityType = $value;
    }

    /**
     * Sets the brandStatus property value. Defines the provider lifecycle for an individual 10DLC brand or campaign.
     * @param TenDlcRegistrationStatus|null $value Value to set for the brandStatus property.
    */
    public function setBrandStatus(?TenDlcRegistrationStatus $value): void {
        $this->brandStatus = $value;
    }

    /**
     * Sets the businessContactEmail property value. Individual representative email required for public-company verification.
     * @param string|null $value Value to set for the businessContactEmail property.
    */
    public function setBusinessContactEmail(?string $value): void {
        $this->businessContactEmail = $value;
    }

    /**
     * Sets the campaignStatus property value. Defines the provider lifecycle for an individual 10DLC brand or campaign.
     * @param TenDlcRegistrationStatus|null $value Value to set for the campaignStatus property.
    */
    public function setCampaignStatus(?TenDlcRegistrationStatus $value): void {
        $this->campaignStatus = $value;
    }

    /**
     * Sets the city property value. Legal business city.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the companyName property value. Company name for this 10DLC application draft.
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
     * Sets the contactEmail property value. Contact email for this 10DLC application draft.
     * @param string|null $value Value to set for the contactEmail property.
    */
    public function setContactEmail(?string $value): void {
        $this->contactEmail = $value;
    }

    /**
     * Sets the contactName property value. Contact name for this 10DLC application draft.
     * @param string|null $value Value to set for the contactName property.
    */
    public function setContactName(?string $value): void {
        $this->contactName = $value;
    }

    /**
     * Sets the contactPhone property value. Contact phone for this 10DLC application draft.
     * @param string|null $value Value to set for the contactPhone property.
    */
    public function setContactPhone(?string $value): void {
        $this->contactPhone = $value;
    }

    /**
     * Sets the country property value. ISO two-letter country of registration.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the directLending property value. Whether messages concern direct lending or loan arrangements.
     * @param bool|null $value Value to set for the directLending property.
    */
    public function setDirectLending(?bool $value): void {
        $this->directLending = $value;
    }

    /**
     * Sets the displayName property value. Customer-facing brand or DBA name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->displayName = $value;
    }

    /**
     * Sets the ein property value. EIN for this 10DLC application draft.
     * @param string|null $value Value to set for the ein property.
    */
    public function setEin(?string $value): void {
        $this->ein = $value;
    }

    /**
     * Sets the embeddedLink property value. Whether campaign messages contain links.
     * @param bool|null $value Value to set for the embeddedLink property.
    */
    public function setEmbeddedLink(?bool $value): void {
        $this->embeddedLink = $value;
    }

    /**
     * Sets the embeddedLinkSample property value. Representative embedded link submitted for review.
     * @param string|null $value Value to set for the embeddedLinkSample property.
    */
    public function setEmbeddedLinkSample(?string $value): void {
        $this->embeddedLinkSample = $value;
    }

    /**
     * Sets the embeddedPhone property value. Whether campaign messages contain phone numbers.
     * @param bool|null $value Value to set for the embeddedPhone property.
    */
    public function setEmbeddedPhone(?bool $value): void {
        $this->embeddedPhone = $value;
    }

    /**
     * Sets the expectedMonthlyVolume property value. Expected monthly volume for this 10DLC application draft.
     * @param int|null $value Value to set for the expectedMonthlyVolume property.
    */
    public function setExpectedMonthlyVolume(?int $value): void {
        $this->expectedMonthlyVolume = $value;
    }

    /**
     * Sets the helpKeywords property value. Comma-separated help keywords.
     * @param string|null $value Value to set for the helpKeywords property.
    */
    public function setHelpKeywords(?string $value): void {
        $this->helpKeywords = $value;
    }

    /**
     * Sets the helpMessage property value. Help response with customer-care information.
     * @param string|null $value Value to set for the helpMessage property.
    */
    public function setHelpMessage(?string $value): void {
        $this->helpMessage = $value;
    }

    /**
     * Sets the industry property value. The Telnyx brand vertical for this 10DLC application draft. The JSON name is retained for backward compatibility.
     * @param string|null $value Value to set for the industry property.
    */
    public function setIndustry(?string $value): void {
        $this->industry = $value;
    }

    /**
     * Sets the isReseller property value. Whether the brand resells services to other businesses.
     * @param bool|null $value Value to set for the isReseller property.
    */
    public function setIsReseller(?bool $value): void {
        $this->isReseller = $value;
    }

    /**
     * Sets the lastSubmittedAt property value. UTC timestamp for last submitted at on this 10DLC application draft.
     * @param DateTime|null $value Value to set for the lastSubmittedAt property.
    */
    public function setLastSubmittedAt(?DateTime $value): void {
        $this->lastSubmittedAt = $value;
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
     * Sets the numberPool property value. Whether the campaign uses a number pool.
     * @param bool|null $value Value to set for the numberPool property.
    */
    public function setNumberPool(?bool $value): void {
        $this->numberPool = $value;
    }

    /**
     * Sets the optinKeywords property value. Comma-separated opt-in keywords.
     * @param string|null $value Value to set for the optinKeywords property.
    */
    public function setOptinKeywords(?string $value): void {
        $this->optinKeywords = $value;
    }

    /**
     * Sets the optInLanguage property value. Opt in language for this 10DLC application draft.
     * @param string|null $value Value to set for the optInLanguage property.
    */
    public function setOptInLanguage(?string $value): void {
        $this->optInLanguage = $value;
    }

    /**
     * Sets the optinMessage property value. Opt-in confirmation response.
     * @param string|null $value Value to set for the optinMessage property.
    */
    public function setOptinMessage(?string $value): void {
        $this->optinMessage = $value;
    }

    /**
     * Sets the optoutKeywords property value. Comma-separated opt-out keywords.
     * @param string|null $value Value to set for the optoutKeywords property.
    */
    public function setOptoutKeywords(?string $value): void {
        $this->optoutKeywords = $value;
    }

    /**
     * Sets the optoutMessage property value. Opt-out confirmation response.
     * @param string|null $value Value to set for the optoutMessage property.
    */
    public function setOptoutMessage(?string $value): void {
        $this->optoutMessage = $value;
    }

    /**
     * Sets the postalCode property value. Legal business postal code.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the privacyPolicyUrl property value. Public privacy-policy URL that explains how messaging recipient data is handled.
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
     * Sets the state property value. Legal business state or region.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

    /**
     * Sets the stockExchange property value. Public-company stock exchange.
     * @param string|null $value Value to set for the stockExchange property.
    */
    public function setStockExchange(?string $value): void {
        $this->stockExchange = $value;
    }

    /**
     * Sets the stockSymbol property value. Public-company stock ticker.
     * @param string|null $value Value to set for the stockSymbol property.
    */
    public function setStockSymbol(?string $value): void {
        $this->stockSymbol = $value;
    }

    /**
     * Sets the street property value. Legal business street address.
     * @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value): void {
        $this->street = $value;
    }

    /**
     * Sets the subscriberHelp property value. Whether the program responds to help keywords.
     * @param bool|null $value Value to set for the subscriberHelp property.
    */
    public function setSubscriberHelp(?bool $value): void {
        $this->subscriberHelp = $value;
    }

    /**
     * Sets the subscriberOptin property value. Whether subscribers opt in before messaging.
     * @param bool|null $value Value to set for the subscriberOptin property.
    */
    public function setSubscriberOptin(?bool $value): void {
        $this->subscriberOptin = $value;
    }

    /**
     * Sets the subscriberOptout property value. Whether the program supports opt-out keywords.
     * @param bool|null $value Value to set for the subscriberOptout property.
    */
    public function setSubscriberOptout(?bool $value): void {
        $this->subscriberOptout = $value;
    }

    /**
     * Sets the subUseCases property value. Selected sub-use cases for a mixed campaign.
     * @param array<string>|null $value Value to set for the subUseCases property.
    */
    public function setSubUseCases(?array $value): void {
        $this->subUseCases = $value;
    }

    /**
     * Sets the termsAndConditions property value. Acceptance of the carrier campaign terms.
     * @param bool|null $value Value to set for the termsAndConditions property.
    */
    public function setTermsAndConditions(?bool $value): void {
        $this->termsAndConditions = $value;
    }

    /**
     * Sets the termsUrl property value. Public terms-of-service URL governing the messaging program.
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
     * Sets the updatedAt property value. UTC timestamp for updated at on this 10DLC application draft.
     * @param DateTime|null $value Value to set for the updatedAt property.
    */
    public function setUpdatedAt(?DateTime $value): void {
        $this->updatedAt = $value;
    }

    /**
     * Sets the useCase property value. Use case for this 10DLC application draft.
     * @param string|null $value Value to set for the useCase property.
    */
    public function setUseCase(?string $value): void {
        $this->useCase = $value;
    }

    /**
     * Sets the useCaseDescription property value. Use case description for this 10DLC application draft.
     * @param string|null $value Value to set for the useCaseDescription property.
    */
    public function setUseCaseDescription(?string $value): void {
        $this->useCaseDescription = $value;
    }

    /**
     * Sets the version property value. Version for this 10DLC application draft.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->version = $value;
    }

    /**
     * Sets the websiteUrl property value. Public business website URL submitted to carriers during brand review.
     * @param string|null $value Value to set for the websiteUrl property.
    */
    public function setWebsiteUrl(?string $value): void {
        $this->websiteUrl = $value;
    }

}
