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
     * @var string|null $lookupType The lookupType property
    */
    private ?string $lookupType = null;
    
    /**
     * @var string|null $provider The provider property
    */
    private ?string $provider = null;
    
    /**
     * @var string|null $rawRecordJson The rawRecordJson property
    */
    private ?string $rawRecordJson = null;
    
    /**
     * @var DateTime|null $retrievedAt The retrievedAt property
    */
    private ?DateTime $retrievedAt = null;
    
    /**
     * @var int|null $schemaVersion The schemaVersion property
    */
    private ?int $schemaVersion = null;
    
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
            'schemaVersion' => fn(ParseNode $n) => $o->setSchemaVersion($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the lookupType property value. The lookupType property
     * @return string|null
    */
    public function getLookupType(): ?string {
        return $this->lookupType;
    }

    /**
     * Gets the provider property value. The provider property
     * @return string|null
    */
    public function getProvider(): ?string {
        return $this->provider;
    }

    /**
     * Gets the rawRecordJson property value. The rawRecordJson property
     * @return string|null
    */
    public function getRawRecordJson(): ?string {
        return $this->rawRecordJson;
    }

    /**
     * Gets the retrievedAt property value. The retrievedAt property
     * @return DateTime|null
    */
    public function getRetrievedAt(): ?DateTime {
        return $this->retrievedAt;
    }

    /**
     * Gets the schemaVersion property value. The schemaVersion property
     * @return int|null
    */
    public function getSchemaVersion(): ?int {
        return $this->schemaVersion;
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
        $writer->writeIntegerValue('schemaVersion', $this->getSchemaVersion());
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
     * Sets the lookupType property value. The lookupType property
     * @param string|null $value Value to set for the lookupType property.
    */
    public function setLookupType(?string $value): void {
        $this->lookupType = $value;
    }

    /**
     * Sets the provider property value. The provider property
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->provider = $value;
    }

    /**
     * Sets the rawRecordJson property value. The rawRecordJson property
     * @param string|null $value Value to set for the rawRecordJson property.
    */
    public function setRawRecordJson(?string $value): void {
        $this->rawRecordJson = $value;
    }

    /**
     * Sets the retrievedAt property value. The retrievedAt property
     * @param DateTime|null $value Value to set for the retrievedAt property.
    */
    public function setRetrievedAt(?DateTime $value): void {
        $this->retrievedAt = $value;
    }

    /**
     * Sets the schemaVersion property value. The schemaVersion property
     * @param int|null $value Value to set for the schemaVersion property.
    */
    public function setSchemaVersion(?int $value): void {
        $this->schemaVersion = $value;
    }

}
