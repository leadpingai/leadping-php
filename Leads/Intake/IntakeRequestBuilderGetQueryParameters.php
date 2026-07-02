<?php

namespace Leadping\OpenApiClient\Leads\Intake;

use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * Creates a source-authenticated lead from query parameters, supporting simple form posts, tracking metadata, and follow-up automation.
*/
class IntakeRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("Address1")
     * @var string|null $address1 First street address line submitted by the lead intake source.
    */
    public ?string $address1 = null;
    
    /**
     * @QueryParameter("Address2")
     * @var string|null $address2 Second street address line submitted by the lead intake source.
    */
    public ?string $address2 = null;
    
    /**
     * @QueryParameter("BirthDate")
     * @var Date|null $birthDate Lead birth date used for demographic matching and insurance intake workflows.
    */
    public ?Date $birthDate = null;
    
    /**
     * @QueryParameter("City")
     * @var string|null $city City for the lead or business postal address.
    */
    public ?string $city = null;
    
    /**
     * @QueryParameter("DateOfBirth")
     * @var Date|null $dateOfBirth Lead date of birth supplied by intake sources and normalized into the lead profile.
    */
    public ?Date $dateOfBirth = null;
    
    /**
     * @QueryParameter("DirectPostPrice")
     * @var float|null $directPostPrice Direct-post price supplied by the lead source during intake.
    */
    public ?float $directPostPrice = null;
    
    /**
     * @QueryParameter("Email")
     * @var string|null $email Email address for the person represented by this lead intake request.
    */
    public ?string $email = null;
    
    /**
     * @QueryParameter("ExternalId")
     * @var string|null $externalId External system identifier used to reconcile this lead intake request across integrations.
    */
    public ?string $externalId = null;
    
    /**
     * @QueryParameter("FirstName")
     * @var string|null $firstName First name of the lead, user, or contact represented by this lead intake request.
    */
    public ?string $firstName = null;
    
    /**
     * @QueryParameter("Gender")
     * @var string|null $gender Lead gender supplied by intake sources and normalized when possible.
    */
    public ?string $gender = null;
    
    /**
     * @QueryParameter("LandingPage")
     * @var string|null $landingPage Landing page URL where the lead submitted their information.
    */
    public ?string $landingPage = null;
    
    /**
     * @QueryParameter("LastName")
     * @var string|null $lastName Last name of the lead, user, or contact represented by this lead intake request.
    */
    public ?string $lastName = null;
    
    /**
     * @QueryParameter("Phone")
     * @var string|null $phone Phone details for the lead, user, or business represented by this lead intake request.
    */
    public ?string $phone = null;
    
    /**
     * @QueryParameter("PhoneType")
     * @var string|null $phoneType Source-provided phone type, such as mobile, landline, or VoIP, used during lead intake normalization.
    */
    public ?string $phoneType = null;
    
    /**
     * @QueryParameter("PostalCode")
     * @var string|null $postalCode Postal code for the lead or business address.
    */
    public ?string $postalCode = null;
    
    /**
     * @QueryParameter("Price")
     * @var float|null $price Lead price or transaction price supplied to the Leadping API.
    */
    public ?float $price = null;
    
    /**
     * @QueryParameter("Product")
     * @var string|null $product Product or offer associated with the lead or source.
    */
    public ?string $product = null;
    
    /**
     * @QueryParameter("Referrer")
     * @var string|null $referrer Referring page or traffic source that sent the lead into Leadping.
    */
    public ?string $referrer = null;
    
    /**
     * @QueryParameter("SellerLeadId")
     * @var string|null $sellerLeadId Seller-provided lead identifier used to deduplicate and reconcile lead delivery.
    */
    public ?string $sellerLeadId = null;
    
    /**
     * @QueryParameter("SellerLeadIdentifier")
     * @var string|null $sellerLeadIdentifier Alternate seller-provided lead identifier used during intake normalization.
    */
    public ?string $sellerLeadIdentifier = null;
    
    /**
     * @var string|null $sourceKey The Leadping source key supplied as a query string parameter, or omitted when supplied as Authorization: Bearer lp_src_...
    */
    public ?string $sourceKey = null;
    
    /**
     * @QueryParameter("SourceMetadata")
     * @var string|null $sourceMetadata Source-provided key-value metadata retained for lead attribution and integration troubleshooting.
    */
    public ?string $sourceMetadata = null;
    
    /**
     * @QueryParameter("State")
     * @var string|null $state State, province, or region for the lead or business postal address.
    */
    public ?string $state = null;
    
    /**
     * @QueryParameter("SubId")
     * @var string|null $subId Affiliate or publisher sub ID captured for lead attribution.
    */
    public ?string $subId = null;
    
    /**
     * @QueryParameter("TagIds")
     * @var array<string>|null $tagIds Tag IDs assigned to or filtered against this lead.
    */
    public ?array $tagIds = null;
    
    /**
     * @QueryParameter("TagNames")
     * @var array<string>|null $tagNames Tag names assigned to this lead when matching existing tags by name.
    */
    public ?array $tagNames = null;
    
    /**
     * @QueryParameter("TrustedFormUrl")
     * @var string|null $trustedFormUrl TrustedForm certificate URL used as proof of consumer consent.
    */
    public ?string $trustedFormUrl = null;
    
    /**
     * @QueryParameter("UtmCampaign")
     * @var string|null $utmCampaign UTM campaign parameter captured for lead attribution reporting.
    */
    public ?string $utmCampaign = null;
    
    /**
     * @QueryParameter("UtmContent")
     * @var string|null $utmContent UTM content parameter captured for lead attribution reporting.
    */
    public ?string $utmContent = null;
    
    /**
     * @QueryParameter("UtmMedium")
     * @var string|null $utmMedium UTM medium parameter captured for lead attribution reporting.
    */
    public ?string $utmMedium = null;
    
    /**
     * @QueryParameter("UtmSource")
     * @var string|null $utmSource UTM source parameter captured for lead attribution reporting.
    */
    public ?string $utmSource = null;
    
    /**
     * @QueryParameter("UtmTerm")
     * @var string|null $utmTerm UTM term parameter captured for lead attribution reporting.
    */
    public ?string $utmTerm = null;
    
    /**
     * @QueryParameter("Vertical")
     * @var string|null $vertical Industry vertical used for lead routing, compliance review, and reporting.
    */
    public ?string $vertical = null;
    
    /**
     * @QueryParameter("Zip")
     * @var string|null $zip ZIP code submitted by the lead intake source.
    */
    public ?string $zip = null;
    
    /**
     * Instantiates a new IntakeRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $address1 First street address line submitted by the lead intake source.
     * @param string|null $address2 Second street address line submitted by the lead intake source.
     * @param Date|null $birthDate Lead birth date used for demographic matching and insurance intake workflows.
     * @param string|null $city City for the lead or business postal address.
     * @param Date|null $dateOfBirth Lead date of birth supplied by intake sources and normalized into the lead profile.
     * @param float|null $directPostPrice Direct-post price supplied by the lead source during intake.
     * @param string|null $email Email address for the person represented by this lead intake request.
     * @param string|null $externalId External system identifier used to reconcile this lead intake request across integrations.
     * @param string|null $firstName First name of the lead, user, or contact represented by this lead intake request.
     * @param string|null $gender Lead gender supplied by intake sources and normalized when possible.
     * @param string|null $landingPage Landing page URL where the lead submitted their information.
     * @param string|null $lastName Last name of the lead, user, or contact represented by this lead intake request.
     * @param string|null $phone Phone details for the lead, user, or business represented by this lead intake request.
     * @param string|null $phoneType Source-provided phone type, such as mobile, landline, or VoIP, used during lead intake normalization.
     * @param string|null $postalCode Postal code for the lead or business address.
     * @param float|null $price Lead price or transaction price supplied to the Leadping API.
     * @param string|null $product Product or offer associated with the lead or source.
     * @param string|null $referrer Referring page or traffic source that sent the lead into Leadping.
     * @param string|null $sellerLeadId Seller-provided lead identifier used to deduplicate and reconcile lead delivery.
     * @param string|null $sellerLeadIdentifier Alternate seller-provided lead identifier used during intake normalization.
     * @param string|null $sourceKey The Leadping source key supplied as a query string parameter, or omitted when supplied as Authorization: Bearer lp_src_...
     * @param string|null $sourceMetadata Source-provided key-value metadata retained for lead attribution and integration troubleshooting.
     * @param string|null $state State, province, or region for the lead or business postal address.
     * @param string|null $subId Affiliate or publisher sub ID captured for lead attribution.
     * @param array<string>|null $tagIds Tag IDs assigned to or filtered against this lead.
     * @param array<string>|null $tagNames Tag names assigned to this lead when matching existing tags by name.
     * @param string|null $trustedFormUrl TrustedForm certificate URL used as proof of consumer consent.
     * @param string|null $utmCampaign UTM campaign parameter captured for lead attribution reporting.
     * @param string|null $utmContent UTM content parameter captured for lead attribution reporting.
     * @param string|null $utmMedium UTM medium parameter captured for lead attribution reporting.
     * @param string|null $utmSource UTM source parameter captured for lead attribution reporting.
     * @param string|null $utmTerm UTM term parameter captured for lead attribution reporting.
     * @param string|null $vertical Industry vertical used for lead routing, compliance review, and reporting.
     * @param string|null $zip ZIP code submitted by the lead intake source.
    */
    public function __construct(?string $address1 = null, ?string $address2 = null, ?Date $birthDate = null, ?string $city = null, ?Date $dateOfBirth = null, ?float $directPostPrice = null, ?string $email = null, ?string $externalId = null, ?string $firstName = null, ?string $gender = null, ?string $landingPage = null, ?string $lastName = null, ?string $phone = null, ?string $phoneType = null, ?string $postalCode = null, ?float $price = null, ?string $product = null, ?string $referrer = null, ?string $sellerLeadId = null, ?string $sellerLeadIdentifier = null, ?string $sourceKey = null, ?string $sourceMetadata = null, ?string $state = null, ?string $subId = null, ?array $tagIds = null, ?array $tagNames = null, ?string $trustedFormUrl = null, ?string $utmCampaign = null, ?string $utmContent = null, ?string $utmMedium = null, ?string $utmSource = null, ?string $utmTerm = null, ?string $vertical = null, ?string $zip = null) {
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->birthDate = $birthDate;
        $this->city = $city;
        $this->dateOfBirth = $dateOfBirth;
        $this->directPostPrice = $directPostPrice;
        $this->email = $email;
        $this->externalId = $externalId;
        $this->firstName = $firstName;
        $this->gender = $gender;
        $this->landingPage = $landingPage;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->phoneType = $phoneType;
        $this->postalCode = $postalCode;
        $this->price = $price;
        $this->product = $product;
        $this->referrer = $referrer;
        $this->sellerLeadId = $sellerLeadId;
        $this->sellerLeadIdentifier = $sellerLeadIdentifier;
        $this->sourceKey = $sourceKey;
        $this->sourceMetadata = $sourceMetadata;
        $this->state = $state;
        $this->subId = $subId;
        $this->tagIds = $tagIds;
        $this->tagNames = $tagNames;
        $this->trustedFormUrl = $trustedFormUrl;
        $this->utmCampaign = $utmCampaign;
        $this->utmContent = $utmContent;
        $this->utmMedium = $utmMedium;
        $this->utmSource = $utmSource;
        $this->utmTerm = $utmTerm;
        $this->vertical = $vertical;
        $this->zip = $zip;
    }

}
