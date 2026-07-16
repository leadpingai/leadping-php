<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API feedback item response returned to authenticated clients.
*/
class FeedbackResponse implements AdditionalDataHolder, Parsable 
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
     * @var string|null $area Product area or app section connected to this feedback item response.
    */
    private ?string $area = null;
    
    /**
     * @var string|null $businessId Business ID connected to the feedback item, when the feedback came from a business workspace.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $clientVersion Client application version that submitted this feedback item response.
    */
    private ?string $clientVersion = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this feedback item response was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this feedback item response.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $message Message text supplied by the user or returned by the Leadping API for this feedback item response.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $route Application route where this feedback item response originated or should direct the user.
    */
    private ?string $route = null;
    
    /**
     * @var FeedbackStatus|null $status Current lifecycle status for this feedback item response in the Leadping API.
    */
    private ?FeedbackStatus $status = null;
    
    /**
     * @var FeedbackType|null $type Type classification used to route and interpret this feedback item response in the Leadping API.
    */
    private ?FeedbackType $type = null;
    
    /**
     * @var string|null $userId User ID for the person who submitted the feedback.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new FeedbackResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackResponse {
        return new FeedbackResponse();
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
     * Gets the area property value. Product area or app section connected to this feedback item response.
     * @return string|null
    */
    public function getArea(): ?string {
        return $this->area;
    }

    /**
     * Gets the businessId property value. Business ID connected to the feedback item, when the feedback came from a business workspace.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the clientVersion property value. Client application version that submitted this feedback item response.
     * @return string|null
    */
    public function getClientVersion(): ?string {
        return $this->clientVersion;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this feedback item response was created.
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
            'allowContact' => fn(ParseNode $n) => $o->setAllowContact($n->getBooleanValue()),
            'area' => fn(ParseNode $n) => $o->setArea($n->getStringValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'clientVersion' => fn(ParseNode $n) => $o->setClientVersion($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'route' => fn(ParseNode $n) => $o->setRoute($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FeedbackStatus::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(FeedbackType::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this feedback item response.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the message property value. Message text supplied by the user or returned by the Leadping API for this feedback item response.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the route property value. Application route where this feedback item response originated or should direct the user.
     * @return string|null
    */
    public function getRoute(): ?string {
        return $this->route;
    }

    /**
     * Gets the status property value. Current lifecycle status for this feedback item response in the Leadping API.
     * @return FeedbackStatus|null
    */
    public function getStatus(): ?FeedbackStatus {
        return $this->status;
    }

    /**
     * Gets the type property value. Type classification used to route and interpret this feedback item response in the Leadping API.
     * @return FeedbackType|null
    */
    public function getType(): ?FeedbackType {
        return $this->type;
    }

    /**
     * Gets the userId property value. User ID for the person who submitted the feedback.
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
        $writer->writeBooleanValue('allowContact', $this->getAllowContact());
        $writer->writeStringValue('area', $this->getArea());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('clientVersion', $this->getClientVersion());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('route', $this->getRoute());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the allowContact property value. Indicates whether the submitter permits Leadping support to contact them about the feedback.
     * @param bool|null $value Value to set for the allowContact property.
    */
    public function setAllowContact(?bool $value): void {
        $this->allowContact = $value;
    }

    /**
     * Sets the area property value. Product area or app section connected to this feedback item response.
     * @param string|null $value Value to set for the area property.
    */
    public function setArea(?string $value): void {
        $this->area = $value;
    }

    /**
     * Sets the businessId property value. Business ID connected to the feedback item, when the feedback came from a business workspace.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the clientVersion property value. Client application version that submitted this feedback item response.
     * @param string|null $value Value to set for the clientVersion property.
    */
    public function setClientVersion(?string $value): void {
        $this->clientVersion = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this feedback item response was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this feedback item response.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the message property value. Message text supplied by the user or returned by the Leadping API for this feedback item response.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the route property value. Application route where this feedback item response originated or should direct the user.
     * @param string|null $value Value to set for the route property.
    */
    public function setRoute(?string $value): void {
        $this->route = $value;
    }

    /**
     * Sets the status property value. Current lifecycle status for this feedback item response in the Leadping API.
     * @param FeedbackStatus|null $value Value to set for the status property.
    */
    public function setStatus(?FeedbackStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the type property value. Type classification used to route and interpret this feedback item response in the Leadping API.
     * @param FeedbackType|null $value Value to set for the type property.
    */
    public function setType(?FeedbackType $value): void {
        $this->type = $value;
    }

    /**
     * Sets the userId property value. User ID for the person who submitted the feedback.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
