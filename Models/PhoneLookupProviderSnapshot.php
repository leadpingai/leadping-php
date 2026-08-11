<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Lossless provider snapshot retained with a phone identity for replay, audits, and fields added by providers later.
*/
class PhoneLookupProviderSnapshot implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $lookupType The provider lookup product or operation that produced this snapshot.
    */
    private ?string $lookupType = null;
    
    /**
     * @var string|null $provider The provider that supplied the phone lookup record.
    */
    private ?string $provider = null;
    
    /**
     * @var string|null $rawRecordJson The complete provider response serialized as JSON for lossless audit and replay.
    */
    private ?string $rawRecordJson = null;
    
    /**
     * @var DateTime|null $retrievedAt The UTC timestamp when Leadping retrieved the provider record.
    */
    private ?DateTime $retrievedAt = null;
    
    /**
     * Instantiates a new PhoneLookupProviderSnapshot and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneLookupProviderSnapshot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneLookupProviderSnapshot {
        return new PhoneLookupProviderSnapshot();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'lookupType' => fn(ParseNode $n) => $o->setLookupType($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'rawRecordJson' => fn(ParseNode $n) => $o->setRawRecordJson($n->getStringValue()),
            'retrievedAt' => fn(ParseNode $n) => $o->setRetrievedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the lookupType property value. The provider lookup product or operation that produced this snapshot.
     * @return string|null
    */
    public function getLookupType(): ?string {
        return $this->lookupType;
    }

    /**
     * Gets the provider property value. The provider that supplied the phone lookup record.
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the rawRecordJson property value. The complete provider response serialized as JSON for lossless audit and replay.
     * @return string|null
    */
    public function getRawRecordJson(): ?string {
        return $this->rawRecordJson;
    }

    /**
     * Gets the retrievedAt property value. The UTC timestamp when Leadping retrieved the provider record.
     * @return DateTime|null
    */
    public function getRetrievedAt(): ?DateTime {
        return $this->retrievedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('lookupType', $this->getLookupType());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeStringValue('rawRecordJson', $this->getRawRecordJson());
        $writer->writeDateTimeValue('retrievedAt', $this->getRetrievedAt());
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
     * Sets the lookupType property value. The provider lookup product or operation that produced this snapshot.
     * @param string|null $value Value to set for the lookupType property.
    */
    public function setLookupType(?string $value): void {
        $this->lookupType = $value;
    }

    /**
     * Sets the provider property value. The provider that supplied the phone lookup record.
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the rawRecordJson property value. The complete provider response serialized as JSON for lossless audit and replay.
     * @param string|null $value Value to set for the rawRecordJson property.
    */
    public function setRawRecordJson(?string $value): void {
        $this->rawRecordJson = $value;
    }

    /**
     * Sets the retrievedAt property value. The UTC timestamp when Leadping retrieved the provider record.
     * @param DateTime|null $value Value to set for the retrievedAt property.
    */
    public function setRetrievedAt(?DateTime $value): void {
        $this->retrievedAt = $value;
    }

}
