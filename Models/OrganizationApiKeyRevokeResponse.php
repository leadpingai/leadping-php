<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Confirms that an organization API key was revoked.
*/
class OrganizationApiKeyRevokeResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id Unique identifier of the revoked API key.
    */
    private ?string $id = null;
    
    /**
     * @var DateTime|null $revokedAt Date and time when the API key was revoked.
    */
    private ?DateTime $revokedAt = null;
    
    /**
     * Instantiates a new OrganizationApiKeyRevokeResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationApiKeyRevokeResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationApiKeyRevokeResponse {
        return new OrganizationApiKeyRevokeResponse();
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'revokedAt' => fn(ParseNode $n) => $o->setRevokedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the id property value. Unique identifier of the revoked API key.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the revokedAt property value. Date and time when the API key was revoked.
     * @return DateTime|null
    */
    public function getRevokedAt(): ?DateTime {
        return $this->revokedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeDateTimeValue('revokedAt', $this->getRevokedAt());
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
     * Sets the id property value. Unique identifier of the revoked API key.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the revokedAt property value. Date and time when the API key was revoked.
     * @param DateTime|null $value Value to set for the revokedAt property.
    */
    public function setRevokedAt(?DateTime $value): void {
        $this->revokedAt = $value;
    }

}
