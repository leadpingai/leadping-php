<?php

namespace Leadping\OpenApiClient\Leads\Intake;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IntakeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IntakeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IntakeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IntakeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IntakeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IntakeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IntakeRequestBuilderGetQueryParameters.
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
     * @param string|null $sourceKey The Leadping source key supplied as a query string parameter.
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
     * @return IntakeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $address1 = null, ?string $address2 = null, ?Date $birthDate = null, ?string $city = null, ?Date $dateOfBirth = null, ?float $directPostPrice = null, ?string $email = null, ?string $externalId = null, ?string $firstName = null, ?string $gender = null, ?string $landingPage = null, ?string $lastName = null, ?string $phone = null, ?string $phoneType = null, ?string $postalCode = null, ?float $price = null, ?string $product = null, ?string $referrer = null, ?string $sellerLeadId = null, ?string $sellerLeadIdentifier = null, ?string $sourceKey = null, ?string $sourceMetadata = null, ?string $state = null, ?string $subId = null, ?array $tagIds = null, ?array $tagNames = null, ?string $trustedFormUrl = null, ?string $utmCampaign = null, ?string $utmContent = null, ?string $utmMedium = null, ?string $utmSource = null, ?string $utmTerm = null, ?string $vertical = null, ?string $zip = null): IntakeRequestBuilderGetQueryParameters {
        return new IntakeRequestBuilderGetQueryParameters($address1, $address2, $birthDate, $city, $dateOfBirth, $directPostPrice, $email, $externalId, $firstName, $gender, $landingPage, $lastName, $phone, $phoneType, $postalCode, $price, $product, $referrer, $sellerLeadId, $sellerLeadIdentifier, $sourceKey, $sourceMetadata, $state, $subId, $tagIds, $tagNames, $trustedFormUrl, $utmCampaign, $utmContent, $utmMedium, $utmSource, $utmTerm, $vertical, $zip);
    }

}
