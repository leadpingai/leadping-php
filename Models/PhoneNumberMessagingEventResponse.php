<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API phone number messaging event returned to authenticated clients.
*/
class PhoneNumberMessagingEventResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this phone number messaging event was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $direction Communication direction for this phone number messaging event, such as inbound or outbound.
    */
    private ?string $direction = null;
    
    /**
     * @var string|null $eventType Event type used to classify this timeline, SMS, call, or automation event.
    */
    private ?string $eventType = null;
    
    /**
     * @var string|null $fromPhoneNumber Sender phone number used for this communication.
    */
    private ?string $fromPhoneNumber = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this phone number messaging event.
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isOptOut Indicates whether the recipient has opted out of further SMS communication.
    */
    private ?bool $isOptOut = null;
    
    /**
     * @var string|null $label Short display label for this phone number messaging event, formatted for charts, filters, or list views.
    */
    private ?string $label = null;
    
    /**
     * @var string|null $providerStatus Provider lifecycle or delivery status for this phone number messaging event.
    */
    private ?string $providerStatus = null;
    
    /**
     * @var string|null $textPreview Short preview of the SMS or conversation text for this phone number messaging event.
    */
    private ?string $textPreview = null;
    
    /**
     * @var string|null $toPhoneNumber Recipient phone number used for this communication.
    */
    private ?string $toPhoneNumber = null;
    
    /**
     * Instantiates a new PhoneNumberMessagingEventResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberMessagingEventResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberMessagingEventResponse {
        return new PhoneNumberMessagingEventResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this phone number messaging event was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the direction property value. Communication direction for this phone number messaging event, such as inbound or outbound.
     * @return string|null
    */
    public function getDirection(): ?string {
        return $this->direction;
    }

    /**
     * Gets the eventType property value. Event type used to classify this timeline, SMS, call, or automation event.
     * @return string|null
    */
    public function getEventType(): ?string {
        return $this->eventType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getStringValue()),
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getStringValue()),
            'fromPhoneNumber' => fn(ParseNode $n) => $o->setFromPhoneNumber($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isOptOut' => fn(ParseNode $n) => $o->setIsOptOut($n->getBooleanValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'providerStatus' => fn(ParseNode $n) => $o->setProviderStatus($n->getStringValue()),
            'textPreview' => fn(ParseNode $n) => $o->setTextPreview($n->getStringValue()),
            'toPhoneNumber' => fn(ParseNode $n) => $o->setToPhoneNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the fromPhoneNumber property value. Sender phone number used for this communication.
     * @return string|null
    */
    public function getFromPhoneNumber(): ?string {
        return $this->fromPhoneNumber;
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this phone number messaging event.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isOptOut property value. Indicates whether the recipient has opted out of further SMS communication.
     * @return bool|null
    */
    public function getIsOptOut(): ?bool {
        return $this->isOptOut;
    }

    /**
     * Gets the label property value. Short display label for this phone number messaging event, formatted for charts, filters, or list views.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->label;
    }

    /**
     * Gets the providerStatus property value. Provider lifecycle or delivery status for this phone number messaging event.
     * @return string|null
    */
    public function getProviderStatus(): ?string {
        return $this->providerStatus;
    }

    /**
     * Gets the textPreview property value. Short preview of the SMS or conversation text for this phone number messaging event.
     * @return string|null
    */
    public function getTextPreview(): ?string {
        return $this->textPreview;
    }

    /**
     * Gets the toPhoneNumber property value. Recipient phone number used for this communication.
     * @return string|null
    */
    public function getToPhoneNumber(): ?string {
        return $this->toPhoneNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('direction', $this->getDirection());
        $writer->writeStringValue('eventType', $this->getEventType());
        $writer->writeStringValue('fromPhoneNumber', $this->getFromPhoneNumber());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isOptOut', $this->getIsOptOut());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeStringValue('providerStatus', $this->getProviderStatus());
        $writer->writeStringValue('textPreview', $this->getTextPreview());
        $writer->writeStringValue('toPhoneNumber', $this->getToPhoneNumber());
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
     * Sets the createdAt property value. UTC timestamp when this phone number messaging event was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the direction property value. Communication direction for this phone number messaging event, such as inbound or outbound.
     * @param string|null $value Value to set for the direction property.
    */
    public function setDirection(?string $value): void {
        $this->direction = $value;
    }

    /**
     * Sets the eventType property value. Event type used to classify this timeline, SMS, call, or automation event.
     * @param string|null $value Value to set for the eventType property.
    */
    public function setEventType(?string $value): void {
        $this->eventType = $value;
    }

    /**
     * Sets the fromPhoneNumber property value. Sender phone number used for this communication.
     * @param string|null $value Value to set for the fromPhoneNumber property.
    */
    public function setFromPhoneNumber(?string $value): void {
        $this->fromPhoneNumber = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this phone number messaging event.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isOptOut property value. Indicates whether the recipient has opted out of further SMS communication.
     * @param bool|null $value Value to set for the isOptOut property.
    */
    public function setIsOptOut(?bool $value): void {
        $this->isOptOut = $value;
    }

    /**
     * Sets the label property value. Short display label for this phone number messaging event, formatted for charts, filters, or list views.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->label = $value;
    }

    /**
     * Sets the providerStatus property value. Provider lifecycle or delivery status for this phone number messaging event.
     * @param string|null $value Value to set for the providerStatus property.
    */
    public function setProviderStatus(?string $value): void {
        $this->providerStatus = $value;
    }

    /**
     * Sets the textPreview property value. Short preview of the SMS or conversation text for this phone number messaging event.
     * @param string|null $value Value to set for the textPreview property.
    */
    public function setTextPreview(?string $value): void {
        $this->textPreview = $value;
    }

    /**
     * Sets the toPhoneNumber property value. Recipient phone number used for this communication.
     * @param string|null $value Value to set for the toPhoneNumber property.
    */
    public function setToPhoneNumber(?string $value): void {
        $this->toPhoneNumber = $value;
    }

}
