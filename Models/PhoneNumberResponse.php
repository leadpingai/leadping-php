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
     * @var PhoneNumberResponse_business|null $business Business summary connected to this phone number.
    */
    private ?PhoneNumberResponse_business $business = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var bool|null $enabled Indicates whether this phone number is active and available in the Leadping API.
    */
    private ?bool $enabled = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $leadpingOwned Indicates whether Leadping provisions and manages this phone number.
    */
    private ?bool $leadpingOwned = null;
    
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
     * @var string|null $phoneIdentityId Identifier of the canonical phone identity for this number.
    */
    private ?string $phoneIdentityId = null;
    
    /**
     * @var PhoneNumberRoutingMetadata|null $routing Routing metadata that connects this phone number to teams, campaigns, and sources.
    */
    private ?PhoneNumberRoutingMetadata $routing = null;
    
    /**
     * @var PhoneNumberReadiness|null $warmup SMS and call warmup for this phone number.
    */
    private ?PhoneNumberReadiness $warmup = null;
    
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
     * Gets the business property value. Business summary connected to this phone number.
     * @return PhoneNumberResponse_business|null
    */
    public function getBusiness(): ?PhoneNumberResponse_business {
        return $this->business;
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([PhoneNumberResponse_business::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'leadpingOwned' => fn(ParseNode $n) => $o->setLeadpingOwned($n->getBooleanValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'phoneIdentityId' => fn(ParseNode $n) => $o->setPhoneIdentityId($n->getStringValue()),
            'routing' => fn(ParseNode $n) => $o->setRouting($n->getObjectValue([PhoneNumberRoutingMetadata::class, 'createFromDiscriminatorValue'])),
            'warmup' => fn(ParseNode $n) => $o->setWarmup($n->getObjectValue([PhoneNumberReadiness::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the leadpingOwned property value. Indicates whether Leadping provisions and manages this phone number.
     * @return bool|null
    */
    public function getLeadpingOwned(): ?bool {
        return $this->leadpingOwned;
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
     * Gets the phoneIdentityId property value. Identifier of the canonical phone identity for this number.
     * @return string|null
    */
    public function getPhoneIdentityId(): ?string {
        return $this->phoneIdentityId;
    }

    /**
     * Gets the routing property value. Routing metadata that connects this phone number to teams, campaigns, and sources.
     * @return PhoneNumberRoutingMetadata|null
    */
    public function getRouting(): ?PhoneNumberRoutingMetadata {
        return $this->routing;
    }

    /**
     * Gets the warmup property value. SMS and call warmup for this phone number.
     * @return PhoneNumberReadiness|null
    */
    public function getWarmup(): ?PhoneNumberReadiness {
        return $this->warmup;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('business', $this->getBusiness());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('leadpingOwned', $this->getLeadpingOwned());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeStringValue('phoneIdentityId', $this->getPhoneIdentityId());
        $writer->writeObjectValue('routing', $this->getRouting());
        $writer->writeObjectValue('warmup', $this->getWarmup());
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
     * Sets the business property value. Business summary connected to this phone number.
     * @param PhoneNumberResponse_business|null $value Value to set for the business property.
    */
    public function setBusiness(?PhoneNumberResponse_business $value): void {
        $this->business = $value;
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
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the leadpingOwned property value. Indicates whether Leadping provisions and manages this phone number.
     * @param bool|null $value Value to set for the leadpingOwned property.
    */
    public function setLeadpingOwned(?bool $value): void {
        $this->leadpingOwned = $value;
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
     * Sets the phoneIdentityId property value. Identifier of the canonical phone identity for this number.
     * @param string|null $value Value to set for the phoneIdentityId property.
    */
    public function setPhoneIdentityId(?string $value): void {
        $this->phoneIdentityId = $value;
    }

    /**
     * Sets the routing property value. Routing metadata that connects this phone number to teams, campaigns, and sources.
     * @param PhoneNumberRoutingMetadata|null $value Value to set for the routing property.
    */
    public function setRouting(?PhoneNumberRoutingMetadata $value): void {
        $this->routing = $value;
    }

    /**
     * Sets the warmup property value. SMS and call warmup for this phone number.
     * @param PhoneNumberReadiness|null $value Value to set for the warmup property.
    */
    public function setWarmup(?PhoneNumberReadiness $value): void {
        $this->warmup = $value;
    }

}
