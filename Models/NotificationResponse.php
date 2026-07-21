<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing notification data used by Leadping API contracts.
*/
class NotificationResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionButtonText The action button text value for this notification.
    */
    private ?string $actionButtonText = null;
    
    /**
     * @var string|null $actionUrl The URL associated with this notification.
    */
    private ?string $actionUrl = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $details The details value for this notification.
    */
    private ?string $details = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isRead Whether this notification is read.
    */
    private ?bool $isRead = null;
    
    /**
     * @var string|null $message The message value for this notification.
    */
    private ?string $message = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var NotificationPriority|null $priority The priority value for this notification.
    */
    private ?NotificationPriority $priority = null;
    
    /**
     * @var DateTime|null $readAt The date and time for the read at value on this notification.
    */
    private ?DateTime $readAt = null;
    
    /**
     * @var string|null $relatedEntityId The related entity ID associated with this notification.
    */
    private ?string $relatedEntityId = null;
    
    /**
     * @var string|null $relatedEntityType The related entity type classification for this notification.
    */
    private ?string $relatedEntityType = null;
    
    /**
     * @var NotificationType|null $type The type classification for this notification.
    */
    private ?NotificationType $type = null;
    
    /**
     * @var string|null $userId The user ID associated with this notification.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new NotificationResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NotificationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NotificationResponse {
        return new NotificationResponse();
    }

    /**
     * Gets the actionButtonText property value. The action button text value for this notification.
     * @return string|null
    */
    public function getActionButtonText(): ?string {
        return $this->actionButtonText;
    }

    /**
     * Gets the actionUrl property value. The URL associated with this notification.
     * @return string|null
    */
    public function getActionUrl(): ?string {
        return $this->actionUrl;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the details property value. The details value for this notification.
     * @return string|null
    */
    public function getDetails(): ?string {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionButtonText' => fn(ParseNode $n) => $o->setActionButtonText($n->getStringValue()),
            'actionUrl' => fn(ParseNode $n) => $o->setActionUrl($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isRead' => fn(ParseNode $n) => $o->setIsRead($n->getBooleanValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getEnumValue(NotificationPriority::class)),
            'readAt' => fn(ParseNode $n) => $o->setReadAt($n->getDateTimeValue()),
            'relatedEntityId' => fn(ParseNode $n) => $o->setRelatedEntityId($n->getStringValue()),
            'relatedEntityType' => fn(ParseNode $n) => $o->setRelatedEntityType($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(NotificationType::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The unique identifier for the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isRead property value. Whether this notification is read.
     * @return bool|null
    */
    public function getIsRead(): ?bool {
        return $this->isRead;
    }

    /**
     * Gets the message property value. The message value for this notification.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @return DateTime|null
    */
    public function getModifiedAt(): ?DateTime {
        return $this->modifiedAt;
    }

    /**
     * Gets the name property value. The display name for the entity.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the priority property value. The priority value for this notification.
     * @return NotificationPriority|null
    */
    public function getPriority(): ?NotificationPriority {
        return $this->priority;
    }

    /**
     * Gets the readAt property value. The date and time for the read at value on this notification.
     * @return DateTime|null
    */
    public function getReadAt(): ?DateTime {
        return $this->readAt;
    }

    /**
     * Gets the relatedEntityId property value. The related entity ID associated with this notification.
     * @return string|null
    */
    public function getRelatedEntityId(): ?string {
        return $this->relatedEntityId;
    }

    /**
     * Gets the relatedEntityType property value. The related entity type classification for this notification.
     * @return string|null
    */
    public function getRelatedEntityType(): ?string {
        return $this->relatedEntityType;
    }

    /**
     * Gets the type property value. The type classification for this notification.
     * @return NotificationType|null
    */
    public function getType(): ?NotificationType {
        return $this->type;
    }

    /**
     * Gets the userId property value. The user ID associated with this notification.
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
        $writer->writeStringValue('actionButtonText', $this->getActionButtonText());
        $writer->writeStringValue('actionUrl', $this->getActionUrl());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('details', $this->getDetails());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isRead', $this->getIsRead());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeEnumValue('priority', $this->getPriority());
        $writer->writeDateTimeValue('readAt', $this->getReadAt());
        $writer->writeStringValue('relatedEntityId', $this->getRelatedEntityId());
        $writer->writeStringValue('relatedEntityType', $this->getRelatedEntityType());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionButtonText property value. The action button text value for this notification.
     * @param string|null $value Value to set for the actionButtonText property.
    */
    public function setActionButtonText(?string $value): void {
        $this->actionButtonText = $value;
    }

    /**
     * Sets the actionUrl property value. The URL associated with this notification.
     * @param string|null $value Value to set for the actionUrl property.
    */
    public function setActionUrl(?string $value): void {
        $this->actionUrl = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the details property value. The details value for this notification.
     * @param string|null $value Value to set for the details property.
    */
    public function setDetails(?string $value): void {
        $this->details = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isRead property value. Whether this notification is read.
     * @param bool|null $value Value to set for the isRead property.
    */
    public function setIsRead(?bool $value): void {
        $this->isRead = $value;
    }

    /**
     * Sets the message property value. The message value for this notification.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the modifiedAt property value. The date and time when the entity was last modified, if applicable.
     * @param DateTime|null $value Value to set for the modifiedAt property.
    */
    public function setModifiedAt(?DateTime $value): void {
        $this->modifiedAt = $value;
    }

    /**
     * Sets the name property value. The display name for the entity.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the priority property value. The priority value for this notification.
     * @param NotificationPriority|null $value Value to set for the priority property.
    */
    public function setPriority(?NotificationPriority $value): void {
        $this->priority = $value;
    }

    /**
     * Sets the readAt property value. The date and time for the read at value on this notification.
     * @param DateTime|null $value Value to set for the readAt property.
    */
    public function setReadAt(?DateTime $value): void {
        $this->readAt = $value;
    }

    /**
     * Sets the relatedEntityId property value. The related entity ID associated with this notification.
     * @param string|null $value Value to set for the relatedEntityId property.
    */
    public function setRelatedEntityId(?string $value): void {
        $this->relatedEntityId = $value;
    }

    /**
     * Sets the relatedEntityType property value. The related entity type classification for this notification.
     * @param string|null $value Value to set for the relatedEntityType property.
    */
    public function setRelatedEntityType(?string $value): void {
        $this->relatedEntityType = $value;
    }

    /**
     * Sets the type property value. The type classification for this notification.
     * @param NotificationType|null $value Value to set for the type property.
    */
    public function setType(?NotificationType $value): void {
        $this->type = $value;
    }

    /**
     * Sets the userId property value. The user ID associated with this notification.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
