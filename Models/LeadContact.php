<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for lead contact profile data.
*/
class LeadContact implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var LeadContact_coordinate|null $coordinate Latitude and longitude coordinate for this lead contact profile.
    */
    private ?LeadContact_coordinate $coordinate = null;
    
    /**
     * @var string|null $email Email address for the person represented by this lead contact profile.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $firstName First name of the lead, user, or contact represented by this lead contact profile.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $lastName Last name of the lead, user, or contact represented by this lead contact profile.
    */
    private ?string $lastName = null;
    
    /**
     * @var LeadContact_phone|null $phone Phone details for the lead, user, or business represented by this lead contact profile.
    */
    private ?LeadContact_phone $phone = null;
    
    /**
     * @var LeadContact_streetAddress|null $streetAddress Postal street address for the lead contact profile.
    */
    private ?LeadContact_streetAddress $streetAddress = null;
    
    /**
     * @var string|null $timeZoneId IANA or Windows time zone identifier used for local scheduling and reporting.
    */
    private ?string $timeZoneId = null;
    
    /**
     * Instantiates a new LeadContact and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadContact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadContact {
        return new LeadContact();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the coordinate property value. Latitude and longitude coordinate for this lead contact profile.
     * @return LeadContact_coordinate|null
    */
    public function getCoordinate(): ?LeadContact_coordinate {
        return $this->coordinate;
    }

    /**
     * Gets the email property value. Email address for the person represented by this lead contact profile.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'coordinate' => fn(ParseNode $n) => $o->setCoordinate($n->getObjectValue([LeadContact_coordinate::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getObjectValue([LeadContact_phone::class, 'createFromDiscriminatorValue'])),
            'streetAddress' => fn(ParseNode $n) => $o->setStreetAddress($n->getObjectValue([LeadContact_streetAddress::class, 'createFromDiscriminatorValue'])),
            'timeZoneId' => fn(ParseNode $n) => $o->setTimeZoneId($n->getStringValue()),
        ];
    }

    /**
     * Gets the firstName property value. First name of the lead, user, or contact represented by this lead contact profile.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the lastName property value. Last name of the lead, user, or contact represented by this lead contact profile.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the phone property value. Phone details for the lead, user, or business represented by this lead contact profile.
     * @return LeadContact_phone|null
    */
    public function getPhone(): ?LeadContact_phone {
        return $this->phone;
    }

    /**
     * Gets the streetAddress property value. Postal street address for the lead contact profile.
     * @return LeadContact_streetAddress|null
    */
    public function getStreetAddress(): ?LeadContact_streetAddress {
        return $this->streetAddress;
    }

    /**
     * Gets the timeZoneId property value. IANA or Windows time zone identifier used for local scheduling and reporting.
     * @return string|null
    */
    public function getTimeZoneId(): ?string {
        return $this->timeZoneId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('coordinate', $this->getCoordinate());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeObjectValue('phone', $this->getPhone());
        $writer->writeObjectValue('streetAddress', $this->getStreetAddress());
        $writer->writeStringValue('timeZoneId', $this->getTimeZoneId());
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
     * Sets the coordinate property value. Latitude and longitude coordinate for this lead contact profile.
     * @param LeadContact_coordinate|null $value Value to set for the coordinate property.
    */
    public function setCoordinate(?LeadContact_coordinate $value): void {
        $this->coordinate = $value;
    }

    /**
     * Sets the email property value. Email address for the person represented by this lead contact profile.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the firstName property value. First name of the lead, user, or contact represented by this lead contact profile.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the lastName property value. Last name of the lead, user, or contact represented by this lead contact profile.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the phone property value. Phone details for the lead, user, or business represented by this lead contact profile.
     * @param LeadContact_phone|null $value Value to set for the phone property.
    */
    public function setPhone(?LeadContact_phone $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the streetAddress property value. Postal street address for the lead contact profile.
     * @param LeadContact_streetAddress|null $value Value to set for the streetAddress property.
    */
    public function setStreetAddress(?LeadContact_streetAddress $value): void {
        $this->streetAddress = $value;
    }

    /**
     * Sets the timeZoneId property value. IANA or Windows time zone identifier used for local scheduling and reporting.
     * @param string|null $value Value to set for the timeZoneId property.
    */
    public function setTimeZoneId(?string $value): void {
        $this->timeZoneId = $value;
    }

}
