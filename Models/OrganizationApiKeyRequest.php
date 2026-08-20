<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Defines the display name and access configuration for a new Leadping organization API key.
*/
class OrganizationApiKeyRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $expiresInDays Number of days before the key expires. Null means no expiration.
    */
    private ?int $expiresInDays = null;
    
    /**
     * @var string|null $name Human-readable name used to identify the key.
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $permissions WorkOS permission slugs granted to the API key.
    */
    private ?array $permissions = null;
    
    /**
     * Instantiates a new OrganizationApiKeyRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationApiKeyRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationApiKeyRequest {
        return new OrganizationApiKeyRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expiresInDays property value. Number of days before the key expires. Null means no expiration.
     * @return int|null
    */
    public function getExpiresInDays(): ?int {
        return $this->expiresInDays;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expiresInDays' => fn(ParseNode $n) => $o->setExpiresInDays($n->getIntegerValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'permissions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPermissions($val);
            },
        ];
    }

    /**
     * Gets the name property value. Human-readable name used to identify the key.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the permissions property value. WorkOS permission slugs granted to the API key.
     * @return array<string>|null
    */
    public function getPermissions(): ?array {
        return $this->permissions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('expiresInDays', $this->getExpiresInDays());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfPrimitiveValues('permissions', $this->getPermissions());
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
     * Sets the expiresInDays property value. Number of days before the key expires. Null means no expiration.
     * @param int|null $value Value to set for the expiresInDays property.
    */
    public function setExpiresInDays(?int $value): void {
        $this->expiresInDays = $value;
    }

    /**
     * Sets the name property value. Human-readable name used to identify the key.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the permissions property value. WorkOS permission slugs granted to the API key.
     * @param array<string>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->permissions = $value;
    }

}
