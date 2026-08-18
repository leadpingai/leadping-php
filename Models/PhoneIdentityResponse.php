<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes Leadping's canonical identity for a phone number, including normalization, carrier, line type, reputation, and lookup history.
*/
class PhoneIdentityResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when the resource was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $id Stable unique identifier of the resource.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $lastEnrichedAt The most recent time lookup data was enriched.
    */
    private ?DateTime $lastEnrichedAt = null;
    
    /**
     * @var PhoneIdentityResponse_lookup|null $lookup Provider lookup and enrichment data for the number.
    */
    private ?PhoneIdentityResponse_lookup $lookup = null;
    
    /**
     * @var array<PhoneIdentityLookupAction>|null $lookupActions Lookup, enrichment, and reputation actions performed for this identity.
    */
    private ?array $lookupActions = null;
    
    /**
     * @var DateTime|null $modifiedAt UTC timestamp when the resource was last modified, or null when it has not been updated.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name Human-readable display name of the resource.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $number The canonical E.164 phone number.
    */
    private ?string $number = null;
    
    /**
     * @var PhoneIdentityResponse_providerEnrichment|null $providerEnrichment Lossless provider response retained for administrative diagnostics.
    */
    private ?PhoneIdentityResponse_providerEnrichment $providerEnrichment = null;
    
    /**
     * Instantiates a new PhoneIdentityResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneIdentityResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneIdentityResponse {
        return new PhoneIdentityResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when the resource was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastEnrichedAt' => fn(ParseNode $n) => $o->setLastEnrichedAt($n->getDateTimeValue()),
            'lookup' => fn(ParseNode $n) => $o->setLookup($n->getObjectValue([PhoneIdentityResponse_lookup::class, 'createFromDiscriminatorValue'])),
            'lookupActions' => fn(ParseNode $n) => $o->setLookupActions($n->getCollectionOfObjectValues([PhoneIdentityLookupAction::class, 'createFromDiscriminatorValue'])),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
            'providerEnrichment' => fn(ParseNode $n) => $o->setProviderEnrichment($n->getObjectValue([PhoneIdentityResponse_providerEnrichment::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the id property value. Stable unique identifier of the resource.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lastEnrichedAt property value. The most recent time lookup data was enriched.
     * @return DateTime|null
    */
    public function getLastEnrichedAt(): ?DateTime {
        return $this->lastEnrichedAt;
    }

    /**
     * Gets the lookup property value. Provider lookup and enrichment data for the number.
     * @return PhoneIdentityResponse_lookup|null
    */
    public function getLookup(): ?PhoneIdentityResponse_lookup {
        return $this->lookup;
    }

    /**
     * Gets the lookupActions property value. Lookup, enrichment, and reputation actions performed for this identity.
     * @return array<PhoneIdentityLookupAction>|null
    */
    public function getLookupActions(): ?array {
        return $this->lookupActions;
    }

    /**
     * Gets the modifiedAt property value. UTC timestamp when the resource was last modified, or null when it has not been updated.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. Human-readable display name of the resource.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the number property value. The canonical E.164 phone number.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the providerEnrichment property value. Lossless provider response retained for administrative diagnostics.
     * @return PhoneIdentityResponse_providerEnrichment|null
    */
    public function getProviderEnrichment(): ?PhoneIdentityResponse_providerEnrichment {
        return $this->providerEnrichment;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('lastEnrichedAt', $this->getLastEnrichedAt());
        $writer->writeObjectValue('lookup', $this->getLookup());
        $writer->writeCollectionOfObjectValues('lookupActions', $this->getLookupActions());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('number', $this->getNumber());
        $writer->writeObjectValue('providerEnrichment', $this->getProviderEnrichment());
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
     * Sets the createdAt property value. UTC timestamp when the resource was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the id property value. Stable unique identifier of the resource.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastEnrichedAt property value. The most recent time lookup data was enriched.
     * @param DateTime|null $value Value to set for the lastEnrichedAt property.
    */
    public function setLastEnrichedAt(?DateTime $value): void {
        $this->lastEnrichedAt = $value;
    }

    /**
     * Sets the lookup property value. Provider lookup and enrichment data for the number.
     * @param PhoneIdentityResponse_lookup|null $value Value to set for the lookup property.
    */
    public function setLookup(?PhoneIdentityResponse_lookup $value): void {
        $this->lookup = $value;
    }

    /**
     * Sets the lookupActions property value. Lookup, enrichment, and reputation actions performed for this identity.
     * @param array<PhoneIdentityLookupAction>|null $value Value to set for the lookupActions property.
    */
    public function setLookupActions(?array $value): void {
        $this->lookupActions = $value;
    }

    /**
     * Sets the modifiedAt property value. UTC timestamp when the resource was last modified, or null when it has not been updated.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. Human-readable display name of the resource.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the number property value. The canonical E.164 phone number.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

    /**
     * Sets the providerEnrichment property value. Lossless provider response retained for administrative diagnostics.
     * @param PhoneIdentityResponse_providerEnrichment|null $value Value to set for the providerEnrichment property.
    */
    public function setProviderEnrichment(?PhoneIdentityResponse_providerEnrichment $value): void {
        $this->providerEnrichment = $value;
    }

}
