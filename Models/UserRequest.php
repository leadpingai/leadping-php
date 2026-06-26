<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API user profile request, including the fields clients can send.
*/
class UserRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var UserRequest_billingPlan|null $billingPlan Defines the supported Billing Plan values.
    */
    private ?UserRequest_billingPlan $billingPlan = null;
    
    /**
     * @var UserRequest_business|null $business Business summary connected to this user profile request.
    */
    private ?UserRequest_business $business = null;
    
    /**
     * @var UserRequest_compliance|null $compliance User compliance settings and attestations captured for Leadping account review.
    */
    private ?UserRequest_compliance $compliance = null;
    
    /**
     * @var UserRequest_currentBusiness|null $currentBusiness Business currently selected for the user session or profile.
    */
    private ?UserRequest_currentBusiness $currentBusiness = null;
    
    /**
     * @var string|null $email Email address for the person represented by this user profile request.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $firstName First name of the lead, user, or contact represented by this user profile request.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $id The unique identifier for the entity, when updating an existing entity.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $lastName Last name of the lead, user, or contact represented by this user profile request.
    */
    private ?string $lastName = null;
    
    /**
     * @var array<MobileDevicePreferences>|null $mobileDevicePreferences Mobile notification preferences configured for the user.
    */
    private ?array $mobileDevicePreferences = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var UserRequest_notificationPreferences|null $notificationPreferences Notification preferences configured for the user.
    */
    private ?UserRequest_notificationPreferences $notificationPreferences = null;
    
    /**
     * @var string|null $phone Phone details for the lead, user, or business represented by this user profile request.
    */
    private ?string $phone = null;
    
    /**
     * @var UserRequest_subscriptionStatus|null $subscriptionStatus Defines the supported Subscription Status values.
    */
    private ?UserRequest_subscriptionStatus $subscriptionStatus = null;
    
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
     * Gets the billingPlan property value. Defines the supported Billing Plan values.
     * @return UserRequest_billingPlan|null
    */
    public function getBillingPlan(): ?UserRequest_billingPlan {
        return $this->billingPlan;
    }

    /**
     * Gets the business property value. Business summary connected to this user profile request.
     * @return UserRequest_business|null
    */
    public function getBusiness(): ?UserRequest_business {
        return $this->business;
    }

    /**
     * Gets the compliance property value. User compliance settings and attestations captured for Leadping account review.
     * @return UserRequest_compliance|null
    */
    public function getCompliance(): ?UserRequest_compliance {
        return $this->compliance;
    }

    /**
     * Gets the currentBusiness property value. Business currently selected for the user session or profile.
     * @return UserRequest_currentBusiness|null
    */
    public function getCurrentBusiness(): ?UserRequest_currentBusiness {
        return $this->currentBusiness;
    }

    /**
     * Gets the email property value. Email address for the person represented by this user profile request.
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
            'billingPlan' => fn(ParseNode $n) => $o->setBillingPlan($n->getEnumValue(UserRequest_billingPlan::class)),
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([UserRequest_business::class, 'createFromDiscriminatorValue'])),
            'compliance' => fn(ParseNode $n) => $o->setCompliance($n->getObjectValue([UserRequest_compliance::class, 'createFromDiscriminatorValue'])),
            'currentBusiness' => fn(ParseNode $n) => $o->setCurrentBusiness($n->getObjectValue([UserRequest_currentBusiness::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'mobileDevicePreferences' => fn(ParseNode $n) => $o->setMobileDevicePreferences($n->getCollectionOfObjectValues([MobileDevicePreferences::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'notificationPreferences' => fn(ParseNode $n) => $o->setNotificationPreferences($n->getObjectValue([UserRequest_notificationPreferences::class, 'createFromDiscriminatorValue'])),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'subscriptionStatus' => fn(ParseNode $n) => $o->setSubscriptionStatus($n->getEnumValue(UserRequest_subscriptionStatus::class)),
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
     * Gets the id property value. The unique identifier for the entity, when updating an existing entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the lastName property value. Last name of the lead, user, or contact represented by this user profile request.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the mobileDevicePreferences property value. Mobile notification preferences configured for the user.
     * @return array<MobileDevicePreferences>|null
    */
    public function getMobileDevicePreferences(): ?array {
        return $this->mobileDevicePreferences;
    }

    /**
     * Gets the name property value. The display name for the entity.
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
     * Gets the phone property value. Phone details for the lead, user, or business represented by this user profile request.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @return UserRequest_subscriptionStatus|null
    */
    public function getSubscriptionStatus(): ?UserRequest_subscriptionStatus {
        return $this->subscriptionStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('billingPlan', $this->getBillingPlan());
        $writer->writeObjectValue('business', $this->getBusiness());
        $writer->writeObjectValue('compliance', $this->getCompliance());
        $writer->writeObjectValue('currentBusiness', $this->getCurrentBusiness());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeCollectionOfObjectValues('mobileDevicePreferences', $this->getMobileDevicePreferences());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('notificationPreferences', $this->getNotificationPreferences());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeEnumValue('subscriptionStatus', $this->getSubscriptionStatus());
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
     * Sets the billingPlan property value. Defines the supported Billing Plan values.
     * @param UserRequest_billingPlan|null $value Value to set for the billingPlan property.
    */
    public function setBillingPlan(?UserRequest_billingPlan $value): void {
        $this->billingPlan = $value;
    }

    /**
     * Sets the business property value. Business summary connected to this user profile request.
     * @param UserRequest_business|null $value Value to set for the business property.
    */
    public function setBusiness(?UserRequest_business $value): void {
        $this->business = $value;
    }

    /**
     * Sets the compliance property value. User compliance settings and attestations captured for Leadping account review.
     * @param UserRequest_compliance|null $value Value to set for the compliance property.
    */
    public function setCompliance(?UserRequest_compliance $value): void {
        $this->compliance = $value;
    }

    /**
     * Sets the currentBusiness property value. Business currently selected for the user session or profile.
     * @param UserRequest_currentBusiness|null $value Value to set for the currentBusiness property.
    */
    public function setCurrentBusiness(?UserRequest_currentBusiness $value): void {
        $this->currentBusiness = $value;
    }

    /**
     * Sets the email property value. Email address for the person represented by this user profile request.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the firstName property value. First name of the lead, user, or contact represented by this user profile request.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity, when updating an existing entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the lastName property value. Last name of the lead, user, or contact represented by this user profile request.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the mobileDevicePreferences property value. Mobile notification preferences configured for the user.
     * @param array<MobileDevicePreferences>|null $value Value to set for the mobileDevicePreferences property.
    */
    public function setMobileDevicePreferences(?array $value): void {
        $this->mobileDevicePreferences = $value;
    }

    /**
     * Sets the name property value. The display name for the entity.
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
     * Sets the phone property value. Phone details for the lead, user, or business represented by this user profile request.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @param UserRequest_subscriptionStatus|null $value Value to set for the subscriptionStatus property.
    */
    public function setSubscriptionStatus(?UserRequest_subscriptionStatus $value): void {
        $this->subscriptionStatus = $value;
    }

}
