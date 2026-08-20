<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Defines the fields clients can send when working with user profile.
*/
class UserRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $firstName First name of the lead, user, or contact represented by this user profile request.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $lastName Last name of the lead, user, or contact represented by this user profile request.
    */
    private ?string $lastName = null;
    
    /**
     * @var string|null $name Display name for the user.
    */
    private ?string $name = null;
    
    /**
     * @var UserRequest_notificationPreferences|null $notificationPreferences Notification preferences configured for the user.
    */
    private ?UserRequest_notificationPreferences $notificationPreferences = null;
    
    /**
     * @var string|null $phone Phone details for the lead, user, or organization represented by this user profile request.
    */
    private ?string $phone = null;
    
    /**
     * @var string|null $timeZoneId IANA time zone identifier used when displaying dates and times for this user.
    */
    private ?string $timeZoneId = null;
    
    /**
     * Instantiates a new UserRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserRequest {
        return new UserRequest();
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
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'notificationPreferences' => fn(ParseNode $n) => $o->setNotificationPreferences($n->getObjectValue([UserRequest_notificationPreferences::class, 'createFromDiscriminatorValue'])),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'timeZoneId' => fn(ParseNode $n) => $o->setTimeZoneId($n->getStringValue()),
        ];
    }

    /**
     * Gets the firstName property value. First name of the lead, user, or contact represented by this user profile request.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the lastName property value. Last name of the lead, user, or contact represented by this user profile request.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the name property value. Display name for the user.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the notificationPreferences property value. Notification preferences configured for the user.
     * @return UserRequest_notificationPreferences|null
    */
    public function getNotificationPreferences(): ?UserRequest_notificationPreferences {
        return $this->notificationPreferences;
    }

    /**
     * Gets the phone property value. Phone details for the lead, user, or organization represented by this user profile request.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the timeZoneId property value. IANA time zone identifier used when displaying dates and times for this user.
     * @return string|null
    */
    public function getTimeZoneId(): ?string {
        return $this->timeZoneId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('notificationPreferences', $this->getNotificationPreferences());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeStringValue('timeZoneId', $this->getTimeZoneId());
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
     * Sets the firstName property value. First name of the lead, user, or contact represented by this user profile request.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the lastName property value. Last name of the lead, user, or contact represented by this user profile request.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the name property value. Display name for the user.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the notificationPreferences property value. Notification preferences configured for the user.
     * @param UserRequest_notificationPreferences|null $value Value to set for the notificationPreferences property.
    */
    public function setNotificationPreferences(?UserRequest_notificationPreferences $value): void {
        $this->notificationPreferences = $value;
    }

    /**
     * Sets the phone property value. Phone details for the lead, user, or organization represented by this user profile request.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the timeZoneId property value. IANA time zone identifier used when displaying dates and times for this user.
     * @param string|null $value Value to set for the timeZoneId property.
    */
    public function setTimeZoneId(?string $value): void {
        $this->timeZoneId = $value;
    }

}
