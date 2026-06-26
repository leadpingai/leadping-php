<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API contact form request, including the fields clients can send.
*/
class ContactRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $email Email address for the person represented by this contact form request.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $message Message text supplied by the user or returned by the Leadping API for this contact form request.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $name Display name for this contact form request in the Leadping API.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $token Invitation or workflow token used to authorize this request.
    */
    private ?string $token = null;
    
    /**
     * Instantiates a new ContactRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContactRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContactRequest {
        return new ContactRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the email property value. Email address for the person represented by this contact form request.
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
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. Message text supplied by the user or returned by the Leadping API for this contact form request.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the name property value. Display name for this contact form request in the Leadping API.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the token property value. Invitation or workflow token used to authorize this request.
     * @return string|null
    */
    public function getToken(): ?string {
        return $this->token;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('token', $this->getToken());
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
     * Sets the email property value. Email address for the person represented by this contact form request.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the message property value. Message text supplied by the user or returned by the Leadping API for this contact form request.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the name property value. Display name for this contact form request in the Leadping API.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the token property value. Invitation or workflow token used to authorize this request.
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->token = $value;
    }

}
