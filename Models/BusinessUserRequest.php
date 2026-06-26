<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API business user request, including the fields clients can send.
*/
class BusinessUserRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $email Email address for the person represented by this business user request.
    */
    private ?string $email = null;
    
    /**
     * @var BusinessUserRole|null $role Business role assigned to the user.
    */
    private ?BusinessUserRole $role = null;
    
    /**
     * @var string|null $userId User ID to add, update, or remove from the business.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new BusinessUserRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessUserRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessUserRequest {
        return new BusinessUserRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the email property value. Email address for the person represented by this business user request.
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
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(BusinessUserRole::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the role property value. Business role assigned to the user.
     * @return BusinessUserRole|null
    */
    public function getRole(): ?BusinessUserRole {
        return $this->role;
    }

    /**
     * Gets the userId property value. User ID to add, update, or remove from the business.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeStringValue('userId', $this->getUserId());
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
     * Sets the email property value. Email address for the person represented by this business user request.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the role property value. Business role assigned to the user.
     * @param BusinessUserRole|null $value Value to set for the role property.
    */
    public function setRole(?BusinessUserRole $value): void {
        $this->role = $value;
    }

    /**
     * Sets the userId property value. User ID to add, update, or remove from the business.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
