<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API response containing user data returned to callers.
*/
class UserResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var UserResponse_billingPlan|null $billingPlan Defines the supported Billing Plan values.
    */
    private ?UserResponse_billingPlan $billingPlan = null;
    
    /**
     * @var UserResponse_business|null $business The business value for this user.
    */
    private ?UserResponse_business $business = null;
    
    /**
     * @var UserResponse_compliance|null $compliance The compliance value for this user.
    */
    private ?UserResponse_compliance $compliance = null;
    
    /**
     * @var DateTime|null $createdAt The date and time when the entity was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var UserResponse_currentBusiness|null $currentBusiness The current business value for this user.
    */
    private ?UserResponse_currentBusiness $currentBusiness = null;
    
    /**
     * @var string|null $email The email address associated with this user.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $firstName The first name value for this user.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $id The unique identifier for the entity.
    */
    private ?string $id = null;
    
    /**
     * @var array<UserIdentity>|null $identities The identities included with this user.
    */
    private ?array $identities = null;
    
    /**
     * @var DateTime|null $lastLoggedInAt The date and time when this user last completed the Leadping sign-in flow.
    */
    private ?DateTime $lastLoggedInAt = null;
    
    /**
     * @var string|null $lastName The date and time for the last name value on this user.
    */
    private ?string $lastName = null;
    
    /**
     * @var array<MobileDevicePreferences>|null $mobileDevicePreferences The Leadping mobile device preferences for this user.
    */
    private ?array $mobileDevicePreferences = null;
    
    /**
     * @var DateTime|null $modifiedAt The date and time when the entity was last modified, if applicable.
    */
    private ?DateTime $modifiedAt = null;
    
    /**
     * @var string|null $name The display name for the entity.
    */
    private ?string $name = null;
    
    /**
     * @var UserResponse_notificationPreferences|null $notificationPreferences The notification preferences value for this user.
    */
    private ?UserResponse_notificationPreferences $notificationPreferences = null;
    
    /**
     * @var DateTime|null $personalDataDeletedAt The date and time for the personal data deleted at value on this user.
    */
    private ?DateTime $personalDataDeletedAt = null;
    
    /**
     * @var string|null $personalDataDeletionReason The human-readable personal data deletion reason explaining this user.
    */
    private ?string $personalDataDeletionReason = null;
    
    /**
     * @var DateTime|null $personalDataDeletionRequestedAt The date and time for the personal data deletion requested at value on this user.
    */
    private ?DateTime $personalDataDeletionRequestedAt = null;
    
    /**
     * @var string|null $personalDataDeletionStatus The current personal data deletion status for this user.
    */
    private ?string $personalDataDeletionStatus = null;
    
    /**
     * @var string|null $phone The phone number associated with this user.
    */
    private ?string $phone = null;
    
    /**
     * @var UserResponse_stripeInfo|null $stripeInfo The Stripe info value for this user.
    */
    private ?UserResponse_stripeInfo $stripeInfo = null;
    
    /**
     * @var UserResponse_subscriptionStatus|null $subscriptionStatus Defines the supported Subscription Status values.
    */
    private ?UserResponse_subscriptionStatus $subscriptionStatus = null;
    
    /**
     * Instantiates a new UserResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserResponse {
        return new UserResponse();
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
     * @return UserResponse_billingPlan|null
    */
    public function getBillingPlan(): ?UserResponse_billingPlan {
        return $this->billingPlan;
    }

    /**
     * Gets the business property value. The business value for this user.
     * @return UserResponse_business|null
    */
    public function getBusiness(): ?UserResponse_business {
        return $this->business;
    }

    /**
     * Gets the compliance property value. The compliance value for this user.
     * @return UserResponse_compliance|null
    */
    public function getCompliance(): ?UserResponse_compliance {
        return $this->compliance;
    }

    /**
     * Gets the createdAt property value. The date and time when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the currentBusiness property value. The current business value for this user.
     * @return UserResponse_currentBusiness|null
    */
    public function getCurrentBusiness(): ?UserResponse_currentBusiness {
        return $this->currentBusiness;
    }

    /**
     * Gets the email property value. The email address associated with this user.
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
            'billingPlan' => fn(ParseNode $n) => $o->setBillingPlan($n->getEnumValue(UserResponse_billingPlan::class)),
            'business' => fn(ParseNode $n) => $o->setBusiness($n->getObjectValue([UserResponse_business::class, 'createFromDiscriminatorValue'])),
            'compliance' => fn(ParseNode $n) => $o->setCompliance($n->getObjectValue([UserResponse_compliance::class, 'createFromDiscriminatorValue'])),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'currentBusiness' => fn(ParseNode $n) => $o->setCurrentBusiness($n->getObjectValue([UserResponse_currentBusiness::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'identities' => fn(ParseNode $n) => $o->setIdentities($n->getCollectionOfObjectValues([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'lastLoggedInAt' => fn(ParseNode $n) => $o->setLastLoggedInAt($n->getDateTimeValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'mobileDevicePreferences' => fn(ParseNode $n) => $o->setMobileDevicePreferences($n->getCollectionOfObjectValues([MobileDevicePreferences::class, 'createFromDiscriminatorValue'])),
            'modifiedAt' => fn(ParseNode $n) => $o->setModifiedAt($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'notificationPreferences' => fn(ParseNode $n) => $o->setNotificationPreferences($n->getObjectValue([UserResponse_notificationPreferences::class, 'createFromDiscriminatorValue'])),
            'personalDataDeletedAt' => fn(ParseNode $n) => $o->setPersonalDataDeletedAt($n->getDateTimeValue()),
            'personalDataDeletionReason' => fn(ParseNode $n) => $o->setPersonalDataDeletionReason($n->getStringValue()),
            'personalDataDeletionRequestedAt' => fn(ParseNode $n) => $o->setPersonalDataDeletionRequestedAt($n->getDateTimeValue()),
            'personalDataDeletionStatus' => fn(ParseNode $n) => $o->setPersonalDataDeletionStatus($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'stripeInfo' => fn(ParseNode $n) => $o->setStripeInfo($n->getObjectValue([UserResponse_stripeInfo::class, 'createFromDiscriminatorValue'])),
            'subscriptionStatus' => fn(ParseNode $n) => $o->setSubscriptionStatus($n->getEnumValue(UserResponse_subscriptionStatus::class)),
        ];
    }

    /**
     * Gets the firstName property value. The first name value for this user.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the id property value. The unique identifier for the entity.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the identities property value. The identities included with this user.
     * @return array<UserIdentity>|null
    */
    public function getIdentities(): ?array {
        return $this->identities;
    }

    /**
     * Gets the lastLoggedInAt property value. The date and time when this user last completed the Leadping sign-in flow.
     * @return DateTime|null
    */
    public function getLastLoggedInAt(): ?DateTime {
        return $this->lastLoggedInAt;
    }

    /**
     * Gets the lastName property value. The date and time for the last name value on this user.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the mobileDevicePreferences property value. The Leadping mobile device preferences for this user.
     * @return array<MobileDevicePreferences>|null
    */
    public function getMobileDevicePreferences(): ?array {
        return $this->mobileDevicePreferences;
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
     * Gets the notificationPreferences property value. The notification preferences value for this user.
     * @return UserResponse_notificationPreferences|null
    */
    public function getNotificationPreferences(): ?UserResponse_notificationPreferences {
        return $this->notificationPreferences;
    }

    /**
     * Gets the personalDataDeletedAt property value. The date and time for the personal data deleted at value on this user.
     * @return DateTime|null
    */
    public function getPersonalDataDeletedAt(): ?DateTime {
        return $this->personalDataDeletedAt;
    }

    /**
     * Gets the personalDataDeletionReason property value. The human-readable personal data deletion reason explaining this user.
     * @return string|null
    */
    public function getPersonalDataDeletionReason(): ?string {
        return $this->personalDataDeletionReason;
    }

    /**
     * Gets the personalDataDeletionRequestedAt property value. The date and time for the personal data deletion requested at value on this user.
     * @return DateTime|null
    */
    public function getPersonalDataDeletionRequestedAt(): ?DateTime {
        return $this->personalDataDeletionRequestedAt;
    }

    /**
     * Gets the personalDataDeletionStatus property value. The current personal data deletion status for this user.
     * @return string|null
    */
    public function getPersonalDataDeletionStatus(): ?string {
        return $this->personalDataDeletionStatus;
    }

    /**
     * Gets the phone property value. The phone number associated with this user.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the stripeInfo property value. The Stripe info value for this user.
     * @return UserResponse_stripeInfo|null
    */
    public function getStripeInfo(): ?UserResponse_stripeInfo {
        return $this->stripeInfo;
    }

    /**
     * Gets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @return UserResponse_subscriptionStatus|null
    */
    public function getSubscriptionStatus(): ?UserResponse_subscriptionStatus {
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
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeObjectValue('currentBusiness', $this->getCurrentBusiness());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('identities', $this->getIdentities());
        $writer->writeDateTimeValue('lastLoggedInAt', $this->getLastLoggedInAt());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeCollectionOfObjectValues('mobileDevicePreferences', $this->getMobileDevicePreferences());
        $writer->writeDateTimeValue('modifiedAt', $this->getModifiedAt());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('notificationPreferences', $this->getNotificationPreferences());
        $writer->writeDateTimeValue('personalDataDeletedAt', $this->getPersonalDataDeletedAt());
        $writer->writeStringValue('personalDataDeletionReason', $this->getPersonalDataDeletionReason());
        $writer->writeDateTimeValue('personalDataDeletionRequestedAt', $this->getPersonalDataDeletionRequestedAt());
        $writer->writeStringValue('personalDataDeletionStatus', $this->getPersonalDataDeletionStatus());
        $writer->writeStringValue('phone', $this->getPhone());
        $writer->writeObjectValue('stripeInfo', $this->getStripeInfo());
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
     * @param UserResponse_billingPlan|null $value Value to set for the billingPlan property.
    */
    public function setBillingPlan(?UserResponse_billingPlan $value): void {
        $this->billingPlan = $value;
    }

    /**
     * Sets the business property value. The business value for this user.
     * @param UserResponse_business|null $value Value to set for the business property.
    */
    public function setBusiness(?UserResponse_business $value): void {
        $this->business = $value;
    }

    /**
     * Sets the compliance property value. The compliance value for this user.
     * @param UserResponse_compliance|null $value Value to set for the compliance property.
    */
    public function setCompliance(?UserResponse_compliance $value): void {
        $this->compliance = $value;
    }

    /**
     * Sets the createdAt property value. The date and time when the entity was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the currentBusiness property value. The current business value for this user.
     * @param UserResponse_currentBusiness|null $value Value to set for the currentBusiness property.
    */
    public function setCurrentBusiness(?UserResponse_currentBusiness $value): void {
        $this->currentBusiness = $value;
    }

    /**
     * Sets the email property value. The email address associated with this user.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the firstName property value. The first name value for this user.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the id property value. The unique identifier for the entity.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the identities property value. The identities included with this user.
     * @param array<UserIdentity>|null $value Value to set for the identities property.
    */
    public function setIdentities(?array $value): void {
        $this->identities = $value;
    }

    /**
     * Sets the lastLoggedInAt property value. The date and time when this user last completed the Leadping sign-in flow.
     * @param DateTime|null $value Value to set for the lastLoggedInAt property.
    */
    public function setLastLoggedInAt(?DateTime $value): void {
        $this->lastLoggedInAt = $value;
    }

    /**
     * Sets the lastName property value. The date and time for the last name value on this user.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the mobileDevicePreferences property value. The Leadping mobile device preferences for this user.
     * @param array<MobileDevicePreferences>|null $value Value to set for the mobileDevicePreferences property.
    */
    public function setMobileDevicePreferences(?array $value): void {
        $this->mobileDevicePreferences = $value;
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
     * Sets the notificationPreferences property value. The notification preferences value for this user.
     * @param UserResponse_notificationPreferences|null $value Value to set for the notificationPreferences property.
    */
    public function setNotificationPreferences(?UserResponse_notificationPreferences $value): void {
        $this->notificationPreferences = $value;
    }

    /**
     * Sets the personalDataDeletedAt property value. The date and time for the personal data deleted at value on this user.
     * @param DateTime|null $value Value to set for the personalDataDeletedAt property.
    */
    public function setPersonalDataDeletedAt(?DateTime $value): void {
        $this->personalDataDeletedAt = $value;
    }

    /**
     * Sets the personalDataDeletionReason property value. The human-readable personal data deletion reason explaining this user.
     * @param string|null $value Value to set for the personalDataDeletionReason property.
    */
    public function setPersonalDataDeletionReason(?string $value): void {
        $this->personalDataDeletionReason = $value;
    }

    /**
     * Sets the personalDataDeletionRequestedAt property value. The date and time for the personal data deletion requested at value on this user.
     * @param DateTime|null $value Value to set for the personalDataDeletionRequestedAt property.
    */
    public function setPersonalDataDeletionRequestedAt(?DateTime $value): void {
        $this->personalDataDeletionRequestedAt = $value;
    }

    /**
     * Sets the personalDataDeletionStatus property value. The current personal data deletion status for this user.
     * @param string|null $value Value to set for the personalDataDeletionStatus property.
    */
    public function setPersonalDataDeletionStatus(?string $value): void {
        $this->personalDataDeletionStatus = $value;
    }

    /**
     * Sets the phone property value. The phone number associated with this user.
     * @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the stripeInfo property value. The Stripe info value for this user.
     * @param UserResponse_stripeInfo|null $value Value to set for the stripeInfo property.
    */
    public function setStripeInfo(?UserResponse_stripeInfo $value): void {
        $this->stripeInfo = $value;
    }

    /**
     * Sets the subscriptionStatus property value. Defines the supported Subscription Status values.
     * @param UserResponse_subscriptionStatus|null $value Value to set for the subscriptionStatus property.
    */
    public function setSubscriptionStatus(?UserResponse_subscriptionStatus $value): void {
        $this->subscriptionStatus = $value;
    }

}
