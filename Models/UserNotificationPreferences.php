<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing user notification preferences data used by Leadping API contracts.
*/
class UserNotificationPreferences implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $automationFailedEmailEnabled Indicates whether automation failed email functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $automationFailedEmailEnabled = null;
    
    /**
     * @var bool|null $automationFailedEnabled Whether automation failed notifications are enabled for this user notification preferences.
    */
    private ?bool $automationFailedEnabled = null;
    
    /**
     * @var bool|null $automationFailedSmsEnabled Indicates whether automation failed SMS functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $automationFailedSmsEnabled = null;
    
    /**
     * @var bool|null $billingEmailEnabled Whether billing email is enabled for this user notification preferences.
    */
    private ?bool $billingEmailEnabled = null;
    
    /**
     * @var bool|null $billingSmsEnabled Whether billing SMS is enabled for this user notification preferences.
    */
    private ?bool $billingSmsEnabled = null;
    
    /**
     * @var bool|null $lowWalletBalanceEmailEnabled Indicates whether low wallet balance email functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $lowWalletBalanceEmailEnabled = null;
    
    /**
     * @var bool|null $lowWalletBalanceEnabled Whether low wallet balance notifications are enabled for this user notification preferences.
    */
    private ?bool $lowWalletBalanceEnabled = null;
    
    /**
     * @var bool|null $lowWalletBalanceSmsEnabled Indicates whether low wallet balance SMS functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $lowWalletBalanceSmsEnabled = null;
    
    /**
     * @var bool|null $missedCallEmailEnabled Indicates whether missed call email functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $missedCallEmailEnabled = null;
    
    /**
     * @var bool|null $missedCallEnabled Whether missed call notifications are enabled for this user notification preferences.
    */
    private ?bool $missedCallEnabled = null;
    
    /**
     * @var bool|null $missedCallSmsEnabled Indicates whether missed call SMS functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $missedCallSmsEnabled = null;
    
    /**
     * @var bool|null $newLeadEmailEnabled Whether new lead email is enabled for this user notification preferences.
    */
    private ?bool $newLeadEmailEnabled = null;
    
    /**
     * @var bool|null $newLeadEnabled Whether new lead notifications are enabled for this user notification preferences.
    */
    private ?bool $newLeadEnabled = null;
    
    /**
     * @var bool|null $newLeadSmsEnabled Whether new lead SMS is enabled for this user notification preferences.
    */
    private ?bool $newLeadSmsEnabled = null;
    
    /**
     * @var bool|null $paymentFailedEnabled Whether payment failed notifications are enabled for this user notification preferences.
    */
    private ?bool $paymentFailedEnabled = null;
    
    /**
     * @var bool|null $paymentFailedSmsEnabled Indicates whether payment failed SMS functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $paymentFailedSmsEnabled = null;
    
    /**
     * @var bool|null $smsConsentOptedIn Whether the user has consented to receive Leadping account notification SMS messages.
    */
    private ?bool $smsConsentOptedIn = null;
    
    /**
     * @var UserNotificationPreferences_smsConsentTrustedFormCertificate|null $smsConsentTrustedFormCertificate The TrustedForm certificate captured for the user's most recent SMS opt-in.
    */
    private ?UserNotificationPreferences_smsConsentTrustedFormCertificate $smsConsentTrustedFormCertificate = null;
    
    /**
     * @var DateTime|null $smsConsentUpdatedAt When the user's Leadping notification SMS consent was last changed.
    */
    private ?DateTime $smsConsentUpdatedAt = null;
    
    /**
     * @var bool|null $subscriptionRenewingEmailEnabled Indicates whether subscription renewing email functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $subscriptionRenewingEmailEnabled = null;
    
    /**
     * @var bool|null $subscriptionRenewingEnabled Whether subscription renewing notifications are enabled for this user notification preferences.
    */
    private ?bool $subscriptionRenewingEnabled = null;
    
    /**
     * @var bool|null $subscriptionRenewingSmsEnabled Indicates whether subscription renewing SMS functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $subscriptionRenewingSmsEnabled = null;
    
    /**
     * @var bool|null $tenDlcStatusEnabled Whether 10DLC status notifications are enabled for this user notification preferences.
    */
    private ?bool $tenDlcStatusEnabled = null;
    
    /**
     * @var bool|null $unreadSmsEmailEnabled Indicates whether unread SMS email functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $unreadSmsEmailEnabled = null;
    
    /**
     * @var bool|null $unreadSmsEnabled Whether unread SMS notifications are enabled for this user notification preferences.
    */
    private ?bool $unreadSmsEnabled = null;
    
    /**
     * @var bool|null $unreadSmsSmsEnabled Indicates whether unread SMS SMS functionality is enabled for this Leadping user notification preferences.
    */
    private ?bool $unreadSmsSmsEnabled = null;
    
    /**
     * @var bool|null $usageLimitHitEnabled Whether usage limit hit notifications are enabled for this user notification preferences.
    */
    private ?bool $usageLimitHitEnabled = null;
    
    /**
     * Instantiates a new UserNotificationPreferences and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserNotificationPreferences
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserNotificationPreferences {
        return new UserNotificationPreferences();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the automationFailedEmailEnabled property value. Indicates whether automation failed email functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getAutomationFailedEmailEnabled(): ?bool {
        return $this->automationFailedEmailEnabled;
    }

    /**
     * Gets the automationFailedEnabled property value. Whether automation failed notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getAutomationFailedEnabled(): ?bool {
        return $this->automationFailedEnabled;
    }

    /**
     * Gets the automationFailedSmsEnabled property value. Indicates whether automation failed SMS functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getAutomationFailedSmsEnabled(): ?bool {
        return $this->automationFailedSmsEnabled;
    }

    /**
     * Gets the billingEmailEnabled property value. Whether billing email is enabled for this user notification preferences.
     * @return bool|null
    */
    public function getBillingEmailEnabled(): ?bool {
        return $this->billingEmailEnabled;
    }

    /**
     * Gets the billingSmsEnabled property value. Whether billing SMS is enabled for this user notification preferences.
     * @return bool|null
    */
    public function getBillingSmsEnabled(): ?bool {
        return $this->billingSmsEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'automationFailedEmailEnabled' => fn(ParseNode $n) => $o->setAutomationFailedEmailEnabled($n->getBooleanValue()),
            'automationFailedEnabled' => fn(ParseNode $n) => $o->setAutomationFailedEnabled($n->getBooleanValue()),
            'automationFailedSmsEnabled' => fn(ParseNode $n) => $o->setAutomationFailedSmsEnabled($n->getBooleanValue()),
            'billingEmailEnabled' => fn(ParseNode $n) => $o->setBillingEmailEnabled($n->getBooleanValue()),
            'billingSmsEnabled' => fn(ParseNode $n) => $o->setBillingSmsEnabled($n->getBooleanValue()),
            'lowWalletBalanceEmailEnabled' => fn(ParseNode $n) => $o->setLowWalletBalanceEmailEnabled($n->getBooleanValue()),
            'lowWalletBalanceEnabled' => fn(ParseNode $n) => $o->setLowWalletBalanceEnabled($n->getBooleanValue()),
            'lowWalletBalanceSmsEnabled' => fn(ParseNode $n) => $o->setLowWalletBalanceSmsEnabled($n->getBooleanValue()),
            'missedCallEmailEnabled' => fn(ParseNode $n) => $o->setMissedCallEmailEnabled($n->getBooleanValue()),
            'missedCallEnabled' => fn(ParseNode $n) => $o->setMissedCallEnabled($n->getBooleanValue()),
            'missedCallSmsEnabled' => fn(ParseNode $n) => $o->setMissedCallSmsEnabled($n->getBooleanValue()),
            'newLeadEmailEnabled' => fn(ParseNode $n) => $o->setNewLeadEmailEnabled($n->getBooleanValue()),
            'newLeadEnabled' => fn(ParseNode $n) => $o->setNewLeadEnabled($n->getBooleanValue()),
            'newLeadSmsEnabled' => fn(ParseNode $n) => $o->setNewLeadSmsEnabled($n->getBooleanValue()),
            'paymentFailedEnabled' => fn(ParseNode $n) => $o->setPaymentFailedEnabled($n->getBooleanValue()),
            'paymentFailedSmsEnabled' => fn(ParseNode $n) => $o->setPaymentFailedSmsEnabled($n->getBooleanValue()),
            'smsConsentOptedIn' => fn(ParseNode $n) => $o->setSmsConsentOptedIn($n->getBooleanValue()),
            'smsConsentTrustedFormCertificate' => fn(ParseNode $n) => $o->setSmsConsentTrustedFormCertificate($n->getObjectValue([UserNotificationPreferences_smsConsentTrustedFormCertificate::class, 'createFromDiscriminatorValue'])),
            'smsConsentUpdatedAt' => fn(ParseNode $n) => $o->setSmsConsentUpdatedAt($n->getDateTimeValue()),
            'subscriptionRenewingEmailEnabled' => fn(ParseNode $n) => $o->setSubscriptionRenewingEmailEnabled($n->getBooleanValue()),
            'subscriptionRenewingEnabled' => fn(ParseNode $n) => $o->setSubscriptionRenewingEnabled($n->getBooleanValue()),
            'subscriptionRenewingSmsEnabled' => fn(ParseNode $n) => $o->setSubscriptionRenewingSmsEnabled($n->getBooleanValue()),
            'tenDlcStatusEnabled' => fn(ParseNode $n) => $o->setTenDlcStatusEnabled($n->getBooleanValue()),
            'unreadSmsEmailEnabled' => fn(ParseNode $n) => $o->setUnreadSmsEmailEnabled($n->getBooleanValue()),
            'unreadSmsEnabled' => fn(ParseNode $n) => $o->setUnreadSmsEnabled($n->getBooleanValue()),
            'unreadSmsSmsEnabled' => fn(ParseNode $n) => $o->setUnreadSmsSmsEnabled($n->getBooleanValue()),
            'usageLimitHitEnabled' => fn(ParseNode $n) => $o->setUsageLimitHitEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the lowWalletBalanceEmailEnabled property value. Indicates whether low wallet balance email functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getLowWalletBalanceEmailEnabled(): ?bool {
        return $this->lowWalletBalanceEmailEnabled;
    }

    /**
     * Gets the lowWalletBalanceEnabled property value. Whether low wallet balance notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getLowWalletBalanceEnabled(): ?bool {
        return $this->lowWalletBalanceEnabled;
    }

    /**
     * Gets the lowWalletBalanceSmsEnabled property value. Indicates whether low wallet balance SMS functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getLowWalletBalanceSmsEnabled(): ?bool {
        return $this->lowWalletBalanceSmsEnabled;
    }

    /**
     * Gets the missedCallEmailEnabled property value. Indicates whether missed call email functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getMissedCallEmailEnabled(): ?bool {
        return $this->missedCallEmailEnabled;
    }

    /**
     * Gets the missedCallEnabled property value. Whether missed call notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getMissedCallEnabled(): ?bool {
        return $this->missedCallEnabled;
    }

    /**
     * Gets the missedCallSmsEnabled property value. Indicates whether missed call SMS functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getMissedCallSmsEnabled(): ?bool {
        return $this->missedCallSmsEnabled;
    }

    /**
     * Gets the newLeadEmailEnabled property value. Whether new lead email is enabled for this user notification preferences.
     * @return bool|null
    */
    public function getNewLeadEmailEnabled(): ?bool {
        return $this->newLeadEmailEnabled;
    }

    /**
     * Gets the newLeadEnabled property value. Whether new lead notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getNewLeadEnabled(): ?bool {
        return $this->newLeadEnabled;
    }

    /**
     * Gets the newLeadSmsEnabled property value. Whether new lead SMS is enabled for this user notification preferences.
     * @return bool|null
    */
    public function getNewLeadSmsEnabled(): ?bool {
        return $this->newLeadSmsEnabled;
    }

    /**
     * Gets the paymentFailedEnabled property value. Whether payment failed notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getPaymentFailedEnabled(): ?bool {
        return $this->paymentFailedEnabled;
    }

    /**
     * Gets the paymentFailedSmsEnabled property value. Indicates whether payment failed SMS functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getPaymentFailedSmsEnabled(): ?bool {
        return $this->paymentFailedSmsEnabled;
    }

    /**
     * Gets the smsConsentOptedIn property value. Whether the user has consented to receive Leadping account notification SMS messages.
     * @return bool|null
    */
    public function getSmsConsentOptedIn(): ?bool {
        return $this->smsConsentOptedIn;
    }

    /**
     * Gets the smsConsentTrustedFormCertificate property value. The TrustedForm certificate captured for the user's most recent SMS opt-in.
     * @return UserNotificationPreferences_smsConsentTrustedFormCertificate|null
    */
    public function getSmsConsentTrustedFormCertificate(): ?UserNotificationPreferences_smsConsentTrustedFormCertificate {
        return $this->smsConsentTrustedFormCertificate;
    }

    /**
     * Gets the smsConsentUpdatedAt property value. When the user's Leadping notification SMS consent was last changed.
     * @return DateTime|null
    */
    public function getSmsConsentUpdatedAt(): ?DateTime {
        return $this->smsConsentUpdatedAt;
    }

    /**
     * Gets the subscriptionRenewingEmailEnabled property value. Indicates whether subscription renewing email functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getSubscriptionRenewingEmailEnabled(): ?bool {
        return $this->subscriptionRenewingEmailEnabled;
    }

    /**
     * Gets the subscriptionRenewingEnabled property value. Whether subscription renewing notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getSubscriptionRenewingEnabled(): ?bool {
        return $this->subscriptionRenewingEnabled;
    }

    /**
     * Gets the subscriptionRenewingSmsEnabled property value. Indicates whether subscription renewing SMS functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getSubscriptionRenewingSmsEnabled(): ?bool {
        return $this->subscriptionRenewingSmsEnabled;
    }

    /**
     * Gets the tenDlcStatusEnabled property value. Whether 10DLC status notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getTenDlcStatusEnabled(): ?bool {
        return $this->tenDlcStatusEnabled;
    }

    /**
     * Gets the unreadSmsEmailEnabled property value. Indicates whether unread SMS email functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getUnreadSmsEmailEnabled(): ?bool {
        return $this->unreadSmsEmailEnabled;
    }

    /**
     * Gets the unreadSmsEnabled property value. Whether unread SMS notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getUnreadSmsEnabled(): ?bool {
        return $this->unreadSmsEnabled;
    }

    /**
     * Gets the unreadSmsSmsEnabled property value. Indicates whether unread SMS SMS functionality is enabled for this Leadping user notification preferences.
     * @return bool|null
    */
    public function getUnreadSmsSmsEnabled(): ?bool {
        return $this->unreadSmsSmsEnabled;
    }

    /**
     * Gets the usageLimitHitEnabled property value. Whether usage limit hit notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getUsageLimitHitEnabled(): ?bool {
        return $this->usageLimitHitEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('automationFailedEmailEnabled', $this->getAutomationFailedEmailEnabled());
        $writer->writeBooleanValue('automationFailedEnabled', $this->getAutomationFailedEnabled());
        $writer->writeBooleanValue('automationFailedSmsEnabled', $this->getAutomationFailedSmsEnabled());
        $writer->writeBooleanValue('billingEmailEnabled', $this->getBillingEmailEnabled());
        $writer->writeBooleanValue('billingSmsEnabled', $this->getBillingSmsEnabled());
        $writer->writeBooleanValue('lowWalletBalanceEmailEnabled', $this->getLowWalletBalanceEmailEnabled());
        $writer->writeBooleanValue('lowWalletBalanceEnabled', $this->getLowWalletBalanceEnabled());
        $writer->writeBooleanValue('lowWalletBalanceSmsEnabled', $this->getLowWalletBalanceSmsEnabled());
        $writer->writeBooleanValue('missedCallEmailEnabled', $this->getMissedCallEmailEnabled());
        $writer->writeBooleanValue('missedCallEnabled', $this->getMissedCallEnabled());
        $writer->writeBooleanValue('missedCallSmsEnabled', $this->getMissedCallSmsEnabled());
        $writer->writeBooleanValue('newLeadEmailEnabled', $this->getNewLeadEmailEnabled());
        $writer->writeBooleanValue('newLeadEnabled', $this->getNewLeadEnabled());
        $writer->writeBooleanValue('newLeadSmsEnabled', $this->getNewLeadSmsEnabled());
        $writer->writeBooleanValue('paymentFailedEnabled', $this->getPaymentFailedEnabled());
        $writer->writeBooleanValue('paymentFailedSmsEnabled', $this->getPaymentFailedSmsEnabled());
        $writer->writeBooleanValue('smsConsentOptedIn', $this->getSmsConsentOptedIn());
        $writer->writeObjectValue('smsConsentTrustedFormCertificate', $this->getSmsConsentTrustedFormCertificate());
        $writer->writeDateTimeValue('smsConsentUpdatedAt', $this->getSmsConsentUpdatedAt());
        $writer->writeBooleanValue('subscriptionRenewingEmailEnabled', $this->getSubscriptionRenewingEmailEnabled());
        $writer->writeBooleanValue('subscriptionRenewingEnabled', $this->getSubscriptionRenewingEnabled());
        $writer->writeBooleanValue('subscriptionRenewingSmsEnabled', $this->getSubscriptionRenewingSmsEnabled());
        $writer->writeBooleanValue('tenDlcStatusEnabled', $this->getTenDlcStatusEnabled());
        $writer->writeBooleanValue('unreadSmsEmailEnabled', $this->getUnreadSmsEmailEnabled());
        $writer->writeBooleanValue('unreadSmsEnabled', $this->getUnreadSmsEnabled());
        $writer->writeBooleanValue('unreadSmsSmsEnabled', $this->getUnreadSmsSmsEnabled());
        $writer->writeBooleanValue('usageLimitHitEnabled', $this->getUsageLimitHitEnabled());
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
     * Sets the automationFailedEmailEnabled property value. Indicates whether automation failed email functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the automationFailedEmailEnabled property.
    */
    public function setAutomationFailedEmailEnabled(?bool $value): void {
        $this->automationFailedEmailEnabled = $value;
    }

    /**
     * Sets the automationFailedEnabled property value. Whether automation failed notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the automationFailedEnabled property.
    */
    public function setAutomationFailedEnabled(?bool $value): void {
        $this->automationFailedEnabled = $value;
    }

    /**
     * Sets the automationFailedSmsEnabled property value. Indicates whether automation failed SMS functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the automationFailedSmsEnabled property.
    */
    public function setAutomationFailedSmsEnabled(?bool $value): void {
        $this->automationFailedSmsEnabled = $value;
    }

    /**
     * Sets the billingEmailEnabled property value. Whether billing email is enabled for this user notification preferences.
     * @param bool|null $value Value to set for the billingEmailEnabled property.
    */
    public function setBillingEmailEnabled(?bool $value): void {
        $this->billingEmailEnabled = $value;
    }

    /**
     * Sets the billingSmsEnabled property value. Whether billing SMS is enabled for this user notification preferences.
     * @param bool|null $value Value to set for the billingSmsEnabled property.
    */
    public function setBillingSmsEnabled(?bool $value): void {
        $this->billingSmsEnabled = $value;
    }

    /**
     * Sets the lowWalletBalanceEmailEnabled property value. Indicates whether low wallet balance email functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the lowWalletBalanceEmailEnabled property.
    */
    public function setLowWalletBalanceEmailEnabled(?bool $value): void {
        $this->lowWalletBalanceEmailEnabled = $value;
    }

    /**
     * Sets the lowWalletBalanceEnabled property value. Whether low wallet balance notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the lowWalletBalanceEnabled property.
    */
    public function setLowWalletBalanceEnabled(?bool $value): void {
        $this->lowWalletBalanceEnabled = $value;
    }

    /**
     * Sets the lowWalletBalanceSmsEnabled property value. Indicates whether low wallet balance SMS functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the lowWalletBalanceSmsEnabled property.
    */
    public function setLowWalletBalanceSmsEnabled(?bool $value): void {
        $this->lowWalletBalanceSmsEnabled = $value;
    }

    /**
     * Sets the missedCallEmailEnabled property value. Indicates whether missed call email functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the missedCallEmailEnabled property.
    */
    public function setMissedCallEmailEnabled(?bool $value): void {
        $this->missedCallEmailEnabled = $value;
    }

    /**
     * Sets the missedCallEnabled property value. Whether missed call notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the missedCallEnabled property.
    */
    public function setMissedCallEnabled(?bool $value): void {
        $this->missedCallEnabled = $value;
    }

    /**
     * Sets the missedCallSmsEnabled property value. Indicates whether missed call SMS functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the missedCallSmsEnabled property.
    */
    public function setMissedCallSmsEnabled(?bool $value): void {
        $this->missedCallSmsEnabled = $value;
    }

    /**
     * Sets the newLeadEmailEnabled property value. Whether new lead email is enabled for this user notification preferences.
     * @param bool|null $value Value to set for the newLeadEmailEnabled property.
    */
    public function setNewLeadEmailEnabled(?bool $value): void {
        $this->newLeadEmailEnabled = $value;
    }

    /**
     * Sets the newLeadEnabled property value. Whether new lead notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the newLeadEnabled property.
    */
    public function setNewLeadEnabled(?bool $value): void {
        $this->newLeadEnabled = $value;
    }

    /**
     * Sets the newLeadSmsEnabled property value. Whether new lead SMS is enabled for this user notification preferences.
     * @param bool|null $value Value to set for the newLeadSmsEnabled property.
    */
    public function setNewLeadSmsEnabled(?bool $value): void {
        $this->newLeadSmsEnabled = $value;
    }

    /**
     * Sets the paymentFailedEnabled property value. Whether payment failed notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the paymentFailedEnabled property.
    */
    public function setPaymentFailedEnabled(?bool $value): void {
        $this->paymentFailedEnabled = $value;
    }

    /**
     * Sets the paymentFailedSmsEnabled property value. Indicates whether payment failed SMS functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the paymentFailedSmsEnabled property.
    */
    public function setPaymentFailedSmsEnabled(?bool $value): void {
        $this->paymentFailedSmsEnabled = $value;
    }

    /**
     * Sets the smsConsentOptedIn property value. Whether the user has consented to receive Leadping account notification SMS messages.
     * @param bool|null $value Value to set for the smsConsentOptedIn property.
    */
    public function setSmsConsentOptedIn(?bool $value): void {
        $this->smsConsentOptedIn = $value;
    }

    /**
     * Sets the smsConsentTrustedFormCertificate property value. The TrustedForm certificate captured for the user's most recent SMS opt-in.
     * @param UserNotificationPreferences_smsConsentTrustedFormCertificate|null $value Value to set for the smsConsentTrustedFormCertificate property.
    */
    public function setSmsConsentTrustedFormCertificate(?UserNotificationPreferences_smsConsentTrustedFormCertificate $value): void {
        $this->smsConsentTrustedFormCertificate = $value;
    }

    /**
     * Sets the smsConsentUpdatedAt property value. When the user's Leadping notification SMS consent was last changed.
     * @param DateTime|null $value Value to set for the smsConsentUpdatedAt property.
    */
    public function setSmsConsentUpdatedAt(?DateTime $value): void {
        $this->smsConsentUpdatedAt = $value;
    }

    /**
     * Sets the subscriptionRenewingEmailEnabled property value. Indicates whether subscription renewing email functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the subscriptionRenewingEmailEnabled property.
    */
    public function setSubscriptionRenewingEmailEnabled(?bool $value): void {
        $this->subscriptionRenewingEmailEnabled = $value;
    }

    /**
     * Sets the subscriptionRenewingEnabled property value. Whether subscription renewing notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the subscriptionRenewingEnabled property.
    */
    public function setSubscriptionRenewingEnabled(?bool $value): void {
        $this->subscriptionRenewingEnabled = $value;
    }

    /**
     * Sets the subscriptionRenewingSmsEnabled property value. Indicates whether subscription renewing SMS functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the subscriptionRenewingSmsEnabled property.
    */
    public function setSubscriptionRenewingSmsEnabled(?bool $value): void {
        $this->subscriptionRenewingSmsEnabled = $value;
    }

    /**
     * Sets the tenDlcStatusEnabled property value. Whether 10DLC status notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the tenDlcStatusEnabled property.
    */
    public function setTenDlcStatusEnabled(?bool $value): void {
        $this->tenDlcStatusEnabled = $value;
    }

    /**
     * Sets the unreadSmsEmailEnabled property value. Indicates whether unread SMS email functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the unreadSmsEmailEnabled property.
    */
    public function setUnreadSmsEmailEnabled(?bool $value): void {
        $this->unreadSmsEmailEnabled = $value;
    }

    /**
     * Sets the unreadSmsEnabled property value. Whether unread SMS notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the unreadSmsEnabled property.
    */
    public function setUnreadSmsEnabled(?bool $value): void {
        $this->unreadSmsEnabled = $value;
    }

    /**
     * Sets the unreadSmsSmsEnabled property value. Indicates whether unread SMS SMS functionality is enabled for this Leadping user notification preferences.
     * @param bool|null $value Value to set for the unreadSmsSmsEnabled property.
    */
    public function setUnreadSmsSmsEnabled(?bool $value): void {
        $this->unreadSmsSmsEnabled = $value;
    }

    /**
     * Sets the usageLimitHitEnabled property value. Whether usage limit hit notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the usageLimitHitEnabled property.
    */
    public function setUsageLimitHitEnabled(?bool $value): void {
        $this->usageLimitHitEnabled = $value;
    }

}
