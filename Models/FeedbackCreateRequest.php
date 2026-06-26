<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API feedback creation request, including the fields clients can send.
*/
class FeedbackCreateRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $allowContact Indicates whether the submitter permits Leadping support to contact them about the feedback.
    */
    private ?bool $allowContact = null;
    
    /**
     * @var string|null $area Product area or app section connected to this feedback creation request.
    */
    private ?string $area = null;
    
    /**
     * @var string|null $clientVersion Client application version that submitted this feedback creation request.
    */
    private ?string $clientVersion = null;
    
    /**
     * @var string|null $message Message text supplied by the user or returned by the Leadping API for this feedback creation request.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $route Application route where this feedback creation request originated or should direct the user.
    */
    private ?string $route = null;
    
    /**
     * @var FeedbackCreateRequest_type|null $type Defines the type of product feedback submitted from inside Leadping.
    */
    private ?FeedbackCreateRequest_type $type = null;
    
    /**
     * Instantiates a new FeedbackCreateRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackCreateRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackCreateRequest {
        return new FeedbackCreateRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allowContact property value. Indicates whether the submitter permits Leadping support to contact them about the feedback.
     * @return bool|null
    */
    public function getAllowContact(): ?bool {
        return $this->allowContact;
    }

    /**
     * Gets the area property value. Product area or app section connected to this feedback creation request.
     * @return string|null
    */
    public function getArea(): ?string {
        return $this->area;
    }

    /**
     * Gets the clientVersion property value. Client application version that submitted this feedback creation request.
     * @return string|null
    */
    public function getClientVersion(): ?string {
        return $this->clientVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowContact' => fn(ParseNode $n) => $o->setAllowContact($n->getBooleanValue()),
            'area' => fn(ParseNode $n) => $o->setArea($n->getStringValue()),
            'clientVersion' => fn(ParseNode $n) => $o->setClientVersion($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'route' => fn(ParseNode $n) => $o->setRoute($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(FeedbackCreateRequest_type::class)),
        ];
    }

    /**
     * Gets the message property value. Message text supplied by the user or returned by the Leadping API for this feedback creation request.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the route property value. Application route where this feedback creation request originated or should direct the user.
     * @return string|null
    */
    public function getRoute(): ?string {
        return $this->route;
    }

    /**
     * Gets the type property value. Defines the type of product feedback submitted from inside Leadping.
     * @return FeedbackCreateRequest_type|null
    */
    public function getType(): ?FeedbackCreateRequest_type {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowContact', $this->getAllowContact());
        $writer->writeStringValue('area', $this->getArea());
        $writer->writeStringValue('clientVersion', $this->getClientVersion());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('route', $this->getRoute());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the allowContact property value. Indicates whether the submitter permits Leadping support to contact them about the feedback.
     * @param bool|null $value Value to set for the allowContact property.
    */
    public function setAllowContact(?bool $value): void {
        $this->allowContact = $value;
    }

    /**
     * Sets the area property value. Product area or app section connected to this feedback creation request.
     * @param string|null $value Value to set for the area property.
    */
    public function setArea(?string $value): void {
        $this->area = $value;
    }

    /**
     * Sets the clientVersion property value. Client application version that submitted this feedback creation request.
     * @param string|null $value Value to set for the clientVersion property.
    */
    public function setClientVersion(?string $value): void {
        $this->clientVersion = $value;
    }

    /**
     * Sets the message property value. Message text supplied by the user or returned by the Leadping API for this feedback creation request.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the route property value. Application route where this feedback creation request originated or should direct the user.
     * @param string|null $value Value to set for the route property.
    */
    public function setRoute(?string $value): void {
        $this->route = $value;
    }

    /**
     * Sets the type property value. Defines the type of product feedback submitted from inside Leadping.
     * @param FeedbackCreateRequest_type|null $value Value to set for the type property.
    */
    public function setType(?FeedbackCreateRequest_type $value): void {
        $this->type = $value;
    }

}
