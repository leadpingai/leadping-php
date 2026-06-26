<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Request schema for the Leadping API lead intake request, including the fields clients can send.
*/
class LeadIntakeRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $address1 First street address line submitted by the lead intake source.
    */
    private ?string $address1 = null;
    
    /**
     * @var string|null $address2 Second street address line submitted by the lead intake source.
    */
    private ?string $address2 = null;
    
    /**
     * @var Date|null $birthDate Lead birth date used for demographic matching and insurance intake workflows.
    */
    private ?Date $birthDate = null;
    
    /**
     * @var string|null $city City for the lead or business postal address.
    */
    private ?string $city = null;
    
    /**
     * @var Date|null $dateOfBirth Lead date of birth supplied by intake sources and normalized into the lead profile.
    */
    private ?Date $dateOfBirth = null;
    
    /**
     * @var string|null $email Email address for the person represented by this lead intake request.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $externalId External system identifier used to reconcile this lead intake request across integrations.
    */
    private ?string $externalId = null;
    
    /**
     * @var string|null $firstName First name of the lead, user, or contact represented by this lead intake request.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $gender Lead gender supplied by intake sources and normalized when possible.
    */
    private ?string $gender = null;
    
    /**
     * @var string|null $landingPage Landing page URL where the lead submitted their information.
    */
    private ?string $landingPage = null;
    
    /**
     * @var string|null $lastName Last name of the lead, user, or contact represented by this lead intake request.
    */
    private ?string $lastName = null;
    
    /**
     * @var string|null $phone Phone details for the lead, user, or business represented by this lead intake request.
    */
    private ?string $phone = null;
    
    /**
     * @var string|null $phoneType Source-provided phone type, such as mobile, landline, or VoIP, used during lead intake normalization.
    */
    private ?string $phoneType = null;
    
    /**
     * @var string|null $postalCode Postal code for the lead or business address.
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $product Product or offer associated with the lead or source.
    */
    private ?string $product = null;
    
    /**
     * @var string|null $referrer Referring page or traffic source that sent the lead into Leadping.
    */
    private ?string $referrer = null;
    
    /**
     * @var string|null $sellerLeadId Seller-provided lead identifier used to deduplicate and reconcile lead delivery.
    */
    private ?string $sellerLeadId = null;
    
    /**
     * @var string|null $sellerLeadIdentifier Alternate seller-provided lead identifier used during intake normalization.
    */
    private ?string $sellerLeadIdentifier = null;
    
    /**
     * @var LeadIntakeRequest_sourceMetadata|null $sourceMetadata Source-provided key-value metadata retained for lead attribution and integration troubleshooting.
    */
    private ?LeadIntakeRequest_sourceMetadata $sourceMetadata = null;
    
    /**
     * @var string|null $state State, province, or region for the lead or business postal address.
    */
    private ?string $state = null;
    
    /**
     * @var string|null $subId Affiliate or publisher sub ID captured for lead attribution.
    */
    private ?string $subId = null;
    
    /**
     * @var array<string>|null $tagIds Tag IDs assigned to or filtered against this lead.
    */
    private ?array $tagIds = null;
    
    /**
     * @var array<string>|null $tagNames Tag names assigned to this lead when matching existing tags by name.
    */
    private ?array $tagNames = null;
    
    /**
     * @var string|null $trustedFormUrl TrustedForm certificate URL used as proof of consumer consent.
    */
    private ?string $trustedFormUrl = null;
    
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
     * @var string|null $zip ZIP code submitted by the lead intake source.
    */
    private ?string $zip = null;
    
    /**
     * Instantiates a new LeadIntakeRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadIntakeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadIntakeRequest {
        return new LeadIntakeRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the address1 property value. First street address line submitted by the lead intake source.
     * @return string|null
    */
    public function getAddress1(): ?string {
        return $this->address1;
    }

    /**
     * Gets the address2 property value. Second street address line submitted by the lead intake source.
     * @return string|null
    */
    public function getAddress2(): ?string {
        return $this->address2;
    }

    /**
     * Gets the birthDate property value. Lead birth date used for demographic matching and insurance intake workflows.
     * @return Date|null
    */
    public function getBirthDate(): ?Date {
        return $this->birthDate;
    }

    /**
     * Gets the city property value. City for the lead or business postal address.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the dateOfBirth property value. Lead date of birth supplied by intake sources and normalized into the lead profile.
     * @return Date|null
    */
    public function getDateOfBirth(): ?Date {
        return $this->dateOfBirth;
    }

    /**
     * Gets the email property value. Email address for the person represented by this lead intake request.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * Gets the externalId property value. External system identifier used to reconcile this lead intake request across integrations.
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
            'address1' => fn(ParseNode $n) => $o->setAddress1($n->getStringValue()),
            'address2' => fn(ParseNode $n) => $o->setAddress2($n->getStringValue()),
            'birthDate' => fn(ParseNode $n) => $o->setBirthDate($n->getDateValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'dateOfBirth' => fn(ParseNode $n) => $o->setDateOfBirth($n->getDateValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'gender' => fn(ParseNode $n) => $o->setGender($n->getStringValue()),
            'landingPage' => fn(ParseNode $n) => $o->setLandingPage($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'phoneType' => fn(ParseNode $n) => $o->setPhoneType($n->getStringValue()),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'product' => fn(ParseNode $n) => $o->setProduct($n->getStringValue()),
            'referrer' => fn(ParseNode $n) => $o->setReferrer($n->getStringValue()),
            'sellerLeadId' => fn(ParseNode $n) => $o->setSellerLeadId($n->getStringValue()),
            'sellerLeadIdentifier' => fn(ParseNode $n) => $o->setSellerLeadIdentifier($n->getStringValue()),
            'sourceMetadata' => fn(ParseNode $n) => $o->setSourceMetadata($n->getObjectValue([LeadIntakeRequest_sourceMetadata::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'subId' => fn(ParseNode $n) => $o->setSubId($n->getStringValue()),
            'tagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTagIds($val);
            },
            'tagNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTagNames($val);
            },
            'trustedFormUrl' => fn(ParseNode $n) => $o->setTrustedFormUrl($n->getStringValue()),
            'utmCampaign' => fn(ParseNode $n) => $o->setUtmCampaign($n->getStringValue()),
            'utmContent' => fn(ParseNode $n) => $o->setUtmContent($n->getStringValue()),
            'utmMedium' => fn(ParseNode $n) => $o->setUtmMedium($n->getStringValue()),
            'utmSource' => fn(ParseNode $n) => $o->setUtmSource($n->getStringValue()),
            'utmTerm' => fn(ParseNode $n) => $o->setUtmTerm($n->getStringValue()),
            'vertical' => fn(ParseNode $n) => $o->setVertical($n->getStringValue()),
            'zip' => fn(ParseNode $n) => $o->setZip($n->getStringValue()),
        ];
    }

    /**
     * Gets the firstName property value. First name of the lead, user, or contact represented by this lead intake request.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the gender property value. Lead gender supplied by intake sources and normalized when possible.
     * @return string|null
    */
    public function getGender(): ?string {
        return $this->gender;
    }

    /**
     * Gets the landingPage property value. Landing page URL where the lead submitted their information.
     * @return string|null
    */
    public function getLandingPage(): ?string {
        return $this->landingPage;
    }

    /**
     * Gets the lastName property value. Last name of the lead, user, or contact represented by this lead intake request.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the phone property value. Phone details for the lead, user, or business represented by this lead intake request.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the phoneType property value. Source-provided phone type, such as mobile, landline, or VoIP, used during lead intake normalization.
     * @return string|null
    */
    public function getPhoneType(): ?string {
        return $this->phoneType;
    }

    /**
     * Gets the postalCode property value. Postal code for the lead or business address.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the product property value. Product or offer associated with the lead or source.
     * @return string|null
    */
    public function getProduct(): ?string {
        return $this->product;
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
     * Gets the sellerLeadIdentifier property value. Alternate seller-provided lead identifier used during intake normalization.
     * @return string|null
    */
    public function getSellerLeadIdentifier(): ?string {
        return $this->sellerLeadIdentifier;
    }

    /**
     * Gets the sourceMetadata property value. Source-provided key-value metadata retained for lead attribution and integration troubleshooting.
     * @return LeadIntakeRequest_sourceMetadata|null
    */
    public function getSourceMetadata(): ?LeadIntakeRequest_sourceMetadata {
        return $this->sourceMetadata;
    }

    /**
     * Gets the state property value. State, province, or region for the lead or business postal address.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the subId property value. Affiliate or publisher sub ID captured for lead attribution.
     * @return string|null
    */
    public function getSubId(): ?string {
        return $this->subId;
    }

    /**
     * Gets the tagIds property value. Tag IDs assigned to or filtered against this lead.
     * @return array<string>|null
    */
    public function getTagIds(): ?array {
        return $this->tagIds;
    }

    /**
     * Gets the tagNames property value. Tag names assigned to this lead when matching existing tags by name.
     * @return array<string>|null
    */
    public function getTagNames(): ?array {
        return $this->tagNames;
    }

    /**
     * Gets the trustedFormUrl property value. TrustedForm certificate URL used as proof of consumer consent.
     * @return string|null
    */
    public function getTrustedFormUrl(): ?string {
        return $this->trustedFormUrl;
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
     * Gets the zip property value. ZIP code submitted by the lead intake source.
     * @return string|null
    */
    public function getZip(): ?string {
        return $this->zip;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('address1', $this->getAddress1());
        $writer->writeStringValue('address2', $this->getAddress2());
        $writer->writeDateValue('birthDate', $this->getBirthDate());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeDateValue('dateOfBirth', $this->getDateOfBirth());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('gender', $this->getGender());
        $writer->writeStringValue('landingPage', $this->getLandingPage());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeStringValue('phoneType', $this->getPhoneType());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('product', $this->getProduct());
        $writer->writeStringValue('referrer', $this->getReferrer());
        $writer->writeStringValue('sellerLeadId', $this->getSellerLeadId());
        $writer->writeStringValue('sellerLeadIdentifier', $this->getSellerLeadIdentifier());
        $writer->writeObjectValue('sourceMetadata', $this->getSourceMetadata());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('subId', $this->getSubId());
        $writer->writeCollectionOfPrimitiveValues('tagIds', $this->getTagIds());
        $writer->writeCollectionOfPrimitiveValues('tagNames', $this->getTagNames());
        $writer->writeStringValue('trustedFormUrl', $this->getTrustedFormUrl());
        $writer->writeStringValue('utmCampaign', $this->getUtmCampaign());
        $writer->writeStringValue('utmContent', $this->getUtmContent());
        $writer->writeStringValue('utmMedium', $this->getUtmMedium());
        $writer->writeStringValue('utmSource', $this->getUtmSource());
        $writer->writeStringValue('utmTerm', $this->getUtmTerm());
        $writer->writeStringValue('vertical', $this->getVertical());
        $writer->writeStringValue('zip', $this->getZip());
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
     * Sets the address1 property value. First street address line submitted by the lead intake source.
     * @param string|null $value Value to set for the address1 property.
    */
    public function setAddress1(?string $value): void {
        $this->address1 = $value;
    }

    /**
     * Sets the address2 property value. Second street address line submitted by the lead intake source.
     * @param string|null $value Value to set for the address2 property.
    */
    public function setAddress2(?string $value): void {
        $this->address2 = $value;
    }

    /**
     * Sets the birthDate property value. Lead birth date used for demographic matching and insurance intake workflows.
     * @param Date|null $value Value to set for the birthDate property.
    */
    public function setBirthDate(?Date $value): void {
        $this->birthDate = $value;
    }

    /**
     * Sets the city property value. City for the lead or business postal address.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the dateOfBirth property value. Lead date of birth supplied by intake sources and normalized into the lead profile.
     * @param Date|null $value Value to set for the dateOfBirth property.
    */
    public function setDateOfBirth(?Date $value): void {
        $this->dateOfBirth = $value;
    }

    /**
     * Sets the email property value. Email address for the person represented by this lead intake request.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the externalId property value. External system identifier used to reconcile this lead intake request across integrations.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->externalId = $value;
    }

    /**
     * Sets the firstName property value. First name of the lead, user, or contact represented by this lead intake request.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the gender property value. Lead gender supplied by intake sources and normalized when possible.
     * @param string|null $value Value to set for the gender property.
    */
    public function setGender(?string $value): void {
        $this->gender = $value;
    }

    /**
     * Sets the landingPage property value. Landing page URL where the lead submitted their information.
     * @param string|null $value Value to set for the landingPage property.
    */
    public function setLandingPage(?string $value): void {
        $this->landingPage = $value;
    }

    /**
     * Sets the lastName property value. Last name of the lead, user, or contact represented by this lead intake request.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the phone property value. Phone details for the lead, user, or business represented by this lead intake request.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the phoneType property value. Source-provided phone type, such as mobile, landline, or VoIP, used during lead intake normalization.
     * @param string|null $value Value to set for the phoneType property.
    */
    public function setPhoneType(?string $value): void {
        $this->phoneType = $value;
    }

    /**
     * Sets the postalCode property value. Postal code for the lead or business address.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the product property value. Product or offer associated with the lead or source.
     * @param string|null $value Value to set for the product property.
    */
    public function setProduct(?string $value): void {
        $this->product = $value;
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
     * Sets the sellerLeadIdentifier property value. Alternate seller-provided lead identifier used during intake normalization.
     * @param string|null $value Value to set for the sellerLeadIdentifier property.
    */
    public function setSellerLeadIdentifier(?string $value): void {
        $this->sellerLeadIdentifier = $value;
    }

    /**
     * Sets the sourceMetadata property value. Source-provided key-value metadata retained for lead attribution and integration troubleshooting.
     * @param LeadIntakeRequest_sourceMetadata|null $value Value to set for the sourceMetadata property.
    */
    public function setSourceMetadata(?LeadIntakeRequest_sourceMetadata $value): void {
        $this->sourceMetadata = $value;
    }

    /**
     * Sets the state property value. State, province, or region for the lead or business postal address.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

    /**
     * Sets the subId property value. Affiliate or publisher sub ID captured for lead attribution.
     * @param string|null $value Value to set for the subId property.
    */
    public function setSubId(?string $value): void {
        $this->subId = $value;
    }

    /**
     * Sets the tagIds property value. Tag IDs assigned to or filtered against this lead.
     * @param array<string>|null $value Value to set for the tagIds property.
    */
    public function setTagIds(?array $value): void {
        $this->tagIds = $value;
    }

    /**
     * Sets the tagNames property value. Tag names assigned to this lead when matching existing tags by name.
     * @param array<string>|null $value Value to set for the tagNames property.
    */
    public function setTagNames(?array $value): void {
        $this->tagNames = $value;
    }

    /**
     * Sets the trustedFormUrl property value. TrustedForm certificate URL used as proof of consumer consent.
     * @param string|null $value Value to set for the trustedFormUrl property.
    */
    public function setTrustedFormUrl(?string $value): void {
        $this->trustedFormUrl = $value;
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

    /**
     * Sets the zip property value. ZIP code submitted by the lead intake source.
     * @param string|null $value Value to set for the zip property.
    */
    public function setZip(?string $value): void {
        $this->zip = $value;
    }

}
