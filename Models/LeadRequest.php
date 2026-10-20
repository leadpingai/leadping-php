<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Defines the fields clients can send when working with lead.
*/
class LeadRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var LeadRequest_company|null $company Business represented by a lead contact.
    */
    private ?LeadRequest_company $company = null;
    
    /**
     * @var LeadContact|null $contact Public Leadping API schema for lead contact profile data.
    */
    private ?LeadContact $contact = null;
    
    /**
     * @var LeadRequest_contactPreferences|null $contactPreferences Preferred contact language, channel, and callback windows; does not grant consent.
    */
    private ?LeadRequest_contactPreferences $contactPreferences = null;
    
    /**
     * @var LeadRequest_customFields|null $customFields Industry-specific JSON scalar or scalar-array answers; keys are stable field identifiers.
    */
    private ?LeadRequest_customFields $customFields = null;
    
    /**
     * @var bool|null $enabled Whether the lead is enabled.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id Stable unique identifier of an existing resource to update; omit it when the API assigns an identifier during creation.
    */
    private ?string $id = null;
    
    /**
     * @var LeadRequest_inquiry|null $inquiry The service or purchase requested by a lead.
    */
    private ?LeadRequest_inquiry $inquiry = null;
    
    /**
     * @var LeadMetadata|null $metadata Public Leadping API schema for lead attribution metadata data.
    */
    private ?LeadMetadata $metadata = null;
    
    /**
     * @var LeadRequest_profile|null $profile Public Leadping API schema for lead demographic profile data.
    */
    private ?LeadRequest_profile $profile = null;
    
    /**
     * @var LeadRequest_serviceAddress|null $serviceAddress Describes a physical or mailing address using international locality, administrative-area, postal-code, and country fields.
    */
    private ?LeadRequest_serviceAddress $serviceAddress = null;
    
    /**
     * @var array<string>|null $tagIds Optional tag IDs assigned to this lead. Defaults to an empty list when omitted.
    */
    private ?array $tagIds = null;
    
    /**
     * @var array<string>|null $tagNames Optional tag names matched against existing tags. Defaults to an empty list when omitted.
    */
    private ?array $tagNames = null;
    
    /**
     * Instantiates a new LeadRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadRequest {
        return new LeadRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the company property value. Business represented by a lead contact.
     * @return LeadRequest_company|null
    */
    public function getCompany(): ?LeadRequest_company {
        return $this->company;
    }

    /**
     * Gets the contact property value. Public Leadping API schema for lead contact profile data.
     * @return LeadContact|null
    */
    public function getContact(): ?LeadContact {
        return $this->contact;
    }

    /**
     * Gets the contactPreferences property value. Preferred contact language, channel, and callback windows; does not grant consent.
     * @return LeadRequest_contactPreferences|null
    */
    public function getContactPreferences(): ?LeadRequest_contactPreferences {
        return $this->contactPreferences;
    }

    /**
     * Gets the customFields property value. Industry-specific JSON scalar or scalar-array answers; keys are stable field identifiers.
     * @return LeadRequest_customFields|null
    */
    public function getCustomFields(): ?LeadRequest_customFields {
        return $this->customFields;
    }

    /**
     * Gets the enabled property value. Whether the lead is enabled.
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
            'company' => fn(ParseNode $n) => $o->setCompany($n->getObjectValue([LeadRequest_company::class, 'createFromDiscriminatorValue'])),
            'contact' => fn(ParseNode $n) => $o->setContact($n->getObjectValue([LeadContact::class, 'createFromDiscriminatorValue'])),
            'contactPreferences' => fn(ParseNode $n) => $o->setContactPreferences($n->getObjectValue([LeadRequest_contactPreferences::class, 'createFromDiscriminatorValue'])),
            'customFields' => fn(ParseNode $n) => $o->setCustomFields($n->getObjectValue([LeadRequest_customFields::class, 'createFromDiscriminatorValue'])),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'inquiry' => fn(ParseNode $n) => $o->setInquiry($n->getObjectValue([LeadRequest_inquiry::class, 'createFromDiscriminatorValue'])),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([LeadMetadata::class, 'createFromDiscriminatorValue'])),
            'profile' => fn(ParseNode $n) => $o->setProfile($n->getObjectValue([LeadRequest_profile::class, 'createFromDiscriminatorValue'])),
            'serviceAddress' => fn(ParseNode $n) => $o->setServiceAddress($n->getObjectValue([LeadRequest_serviceAddress::class, 'createFromDiscriminatorValue'])),
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
        ];
    }

    /**
     * Gets the id property value. Stable unique identifier of an existing resource to update; omit it when the API assigns an identifier during creation.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the inquiry property value. The service or purchase requested by a lead.
     * @return LeadRequest_inquiry|null
    */
    public function getInquiry(): ?LeadRequest_inquiry {
        return $this->inquiry;
    }

    /**
     * Gets the metadata property value. Public Leadping API schema for lead attribution metadata data.
     * @return LeadMetadata|null
    */
    public function getMetadata(): ?LeadMetadata {
        return $this->metadata;
    }

    /**
     * Gets the profile property value. Public Leadping API schema for lead demographic profile data.
     * @return LeadRequest_profile|null
    */
    public function getProfile(): ?LeadRequest_profile {
        return $this->profile;
    }

    /**
     * Gets the serviceAddress property value. Describes a physical or mailing address using international locality, administrative-area, postal-code, and country fields.
     * @return LeadRequest_serviceAddress|null
    */
    public function getServiceAddress(): ?LeadRequest_serviceAddress {
        return $this->serviceAddress;
    }

    /**
     * Gets the tagIds property value. Optional tag IDs assigned to this lead. Defaults to an empty list when omitted.
     * @return array<string>|null
    */
    public function getTagIds(): ?array {
        return $this->tagIds;
    }

    /**
     * Gets the tagNames property value. Optional tag names matched against existing tags. Defaults to an empty list when omitted.
     * @return array<string>|null
    */
    public function getTagNames(): ?array {
        return $this->tagNames;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('company', $this->getCompany());
        $writer->writeObjectValue('contact', $this->getContact());
        $writer->writeObjectValue('contactPreferences', $this->getContactPreferences());
        $writer->writeObjectValue('customFields', $this->getCustomFields());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('inquiry', $this->getInquiry());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeObjectValue('profile', $this->getProfile());
        $writer->writeObjectValue('serviceAddress', $this->getServiceAddress());
        $writer->writeCollectionOfPrimitiveValues('tagIds', $this->getTagIds());
        $writer->writeCollectionOfPrimitiveValues('tagNames', $this->getTagNames());
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
     * Sets the company property value. Business represented by a lead contact.
     * @param LeadRequest_company|null $value Value to set for the company property.
    */
    public function setCompany(?LeadRequest_company $value): void {
        $this->company = $value;
    }

    /**
     * Sets the contact property value. Public Leadping API schema for lead contact profile data.
     * @param LeadContact|null $value Value to set for the contact property.
    */
    public function setContact(?LeadContact $value): void {
        $this->contact = $value;
    }

    /**
     * Sets the contactPreferences property value. Preferred contact language, channel, and callback windows; does not grant consent.
     * @param LeadRequest_contactPreferences|null $value Value to set for the contactPreferences property.
    */
    public function setContactPreferences(?LeadRequest_contactPreferences $value): void {
        $this->contactPreferences = $value;
    }

    /**
     * Sets the customFields property value. Industry-specific JSON scalar or scalar-array answers; keys are stable field identifiers.
     * @param LeadRequest_customFields|null $value Value to set for the customFields property.
    */
    public function setCustomFields(?LeadRequest_customFields $value): void {
        $this->customFields = $value;
    }

    /**
     * Sets the enabled property value. Whether the lead is enabled.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the id property value. Stable unique identifier of an existing resource to update; omit it when the API assigns an identifier during creation.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the inquiry property value. The service or purchase requested by a lead.
     * @param LeadRequest_inquiry|null $value Value to set for the inquiry property.
    */
    public function setInquiry(?LeadRequest_inquiry $value): void {
        $this->inquiry = $value;
    }

    /**
     * Sets the metadata property value. Public Leadping API schema for lead attribution metadata data.
     * @param LeadMetadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?LeadMetadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the profile property value. Public Leadping API schema for lead demographic profile data.
     * @param LeadRequest_profile|null $value Value to set for the profile property.
    */
    public function setProfile(?LeadRequest_profile $value): void {
        $this->profile = $value;
    }

    /**
     * Sets the serviceAddress property value. Describes a physical or mailing address using international locality, administrative-area, postal-code, and country fields.
     * @param LeadRequest_serviceAddress|null $value Value to set for the serviceAddress property.
    */
    public function setServiceAddress(?LeadRequest_serviceAddress $value): void {
        $this->serviceAddress = $value;
    }

    /**
     * Sets the tagIds property value. Optional tag IDs assigned to this lead. Defaults to an empty list when omitted.
     * @param array<string>|null $value Value to set for the tagIds property.
    */
    public function setTagIds(?array $value): void {
        $this->tagIds = $value;
    }

    /**
     * Sets the tagNames property value. Optional tag names matched against existing tags. Defaults to an empty list when omitted.
     * @param array<string>|null $value Value to set for the tagNames property.
    */
    public function setTagNames(?array $value): void {
        $this->tagNames = $value;
    }

}
