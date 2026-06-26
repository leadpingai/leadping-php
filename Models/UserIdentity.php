<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents a user's sign-in identity, including information about the identity provider and method of authentication.
*/
class UserIdentity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $issuer Gets or sets the identity provider that issued the sign-in identity (e.g., "contoso.com" or "facebook.com").
    */
    private ?string $issuer = null;
    
    /**
     * @var string|null $issuerAssignedId Gets or sets the unique identifier assigned to the user by the identity provider.
    */
    private ?string $issuerAssignedId = null;
    
    /**
     * @var string|null $signInType Gets or sets the method of sign-in used by the identity (e.g., "emailAddress", "userName", or "federated").
    */
    private ?string $signInType = null;
    
    /**
     * Instantiates a new UserIdentity and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserIdentity {
        return new UserIdentity();
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
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getStringValue()),
            'issuerAssignedId' => fn(ParseNode $n) => $o->setIssuerAssignedId($n->getStringValue()),
            'signInType' => fn(ParseNode $n) => $o->setSignInType($n->getStringValue()),
        ];
    }

    /**
     * Gets the issuer property value. Gets or sets the identity provider that issued the sign-in identity (e.g., "contoso.com" or "facebook.com").
     * @return string|null
    */
    public function getIssuer(): ?string {
        return $this->issuer;
    }

    /**
     * Gets the issuerAssignedId property value. Gets or sets the unique identifier assigned to the user by the identity provider.
     * @return string|null
    */
    public function getIssuerAssignedId(): ?string {
        return $this->issuerAssignedId;
    }

    /**
     * Gets the signInType property value. Gets or sets the method of sign-in used by the identity (e.g., "emailAddress", "userName", or "federated").
     * @return string|null
    */
    public function getSignInType(): ?string {
        return $this->signInType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('issuer', $this->getIssuer());
        $writer->writeStringValue('issuerAssignedId', $this->getIssuerAssignedId());
        $writer->writeStringValue('signInType', $this->getSignInType());
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
     * Sets the issuer property value. Gets or sets the identity provider that issued the sign-in identity (e.g., "contoso.com" or "facebook.com").
     * @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value): void {
        $this->issuer = $value;
    }

    /**
     * Sets the issuerAssignedId property value. Gets or sets the unique identifier assigned to the user by the identity provider.
     * @param string|null $value Value to set for the issuerAssignedId property.
    */
    public function setIssuerAssignedId(?string $value): void {
        $this->issuerAssignedId = $value;
    }

    /**
     * Sets the signInType property value. Gets or sets the method of sign-in used by the identity (e.g., "emailAddress", "userName", or "federated").
     * @param string|null $value Value to set for the signInType property.
    */
    public function setSignInType(?string $value): void {
        $this->signInType = $value;
    }

}
