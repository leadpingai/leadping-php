<?php

namespace Leadping\OpenApiClient\Models;

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
     * @var bool|null $automationFailedEnabled Whether automation failed notifications are enabled for this user notification preferences.
    */
    private ?bool $automationFailedEnabled = null;
    
    /**
     * @var bool|null $billingEmailEnabled Whether billing email is enabled for this user notification preferences.
    */
    private ?bool $billingEmailEnabled = null;
    
    /**
     * @var bool|null $billingSmsEnabled Whether billing SMS is enabled for this user notification preferences.
    */
    private ?bool $billingSmsEnabled = null;
    
    /**
     * @var bool|null $lowWalletBalanceEnabled Whether low wallet balance notifications are enabled for this user notification preferences.
    */
    private ?bool $lowWalletBalanceEnabled = null;
    
    /**
     * @var bool|null $missedCallEnabled Whether missed call notifications are enabled for this user notification preferences.
    */
    private ?bool $missedCallEnabled = null;
    
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
     * @var bool|null $subscriptionRenewingEnabled Whether subscription renewing notifications are enabled for this user notification preferences.
    */
    private ?bool $subscriptionRenewingEnabled = null;
    
    /**
     * @var bool|null $tenDlcStatusEnabled Whether 10DLC status notifications are enabled for this user notification preferences.
    */
    private ?bool $tenDlcStatusEnabled = null;
    
    /**
     * @var bool|null $unreadSmsEnabled Whether unread SMS notifications are enabled for this user notification preferences.
    */
    private ?bool $unreadSmsEnabled = null;
    
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
     * Gets the automationFailedEnabled property value. Whether automation failed notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getAutomationFailedEnabled(): ?bool {
        return $this->automationFailedEnabled;
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
            'automationFailedEnabled' => fn(ParseNode $n) => $o->setAutomationFailedEnabled($n->getBooleanValue()),
            'billingEmailEnabled' => fn(ParseNode $n) => $o->setBillingEmailEnabled($n->getBooleanValue()),
            'billingSmsEnabled' => fn(ParseNode $n) => $o->setBillingSmsEnabled($n->getBooleanValue()),
            'lowWalletBalanceEnabled' => fn(ParseNode $n) => $o->setLowWalletBalanceEnabled($n->getBooleanValue()),
            'missedCallEnabled' => fn(ParseNode $n) => $o->setMissedCallEnabled($n->getBooleanValue()),
            'newLeadEmailEnabled' => fn(ParseNode $n) => $o->setNewLeadEmailEnabled($n->getBooleanValue()),
            'newLeadEnabled' => fn(ParseNode $n) => $o->setNewLeadEnabled($n->getBooleanValue()),
            'newLeadSmsEnabled' => fn(ParseNode $n) => $o->setNewLeadSmsEnabled($n->getBooleanValue()),
            'paymentFailedEnabled' => fn(ParseNode $n) => $o->setPaymentFailedEnabled($n->getBooleanValue()),
            'subscriptionRenewingEnabled' => fn(ParseNode $n) => $o->setSubscriptionRenewingEnabled($n->getBooleanValue()),
            'tenDlcStatusEnabled' => fn(ParseNode $n) => $o->setTenDlcStatusEnabled($n->getBooleanValue()),
            'unreadSmsEnabled' => fn(ParseNode $n) => $o->setUnreadSmsEnabled($n->getBooleanValue()),
            'usageLimitHitEnabled' => fn(ParseNode $n) => $o->setUsageLimitHitEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the lowWalletBalanceEnabled property value. Whether low wallet balance notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getLowWalletBalanceEnabled(): ?bool {
        return $this->lowWalletBalanceEnabled;
    }

    /**
     * Gets the missedCallEnabled property value. Whether missed call notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getMissedCallEnabled(): ?bool {
        return $this->missedCallEnabled;
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
     * Gets the subscriptionRenewingEnabled property value. Whether subscription renewing notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getSubscriptionRenewingEnabled(): ?bool {
        return $this->subscriptionRenewingEnabled;
    }

    /**
     * Gets the tenDlcStatusEnabled property value. Whether 10DLC status notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getTenDlcStatusEnabled(): ?bool {
        return $this->tenDlcStatusEnabled;
    }

    /**
     * Gets the unreadSmsEnabled property value. Whether unread SMS notifications are enabled for this user notification preferences.
     * @return bool|null
    */
    public function getUnreadSmsEnabled(): ?bool {
        return $this->unreadSmsEnabled;
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
        $writer->writeBooleanValue('automationFailedEnabled', $this->getAutomationFailedEnabled());
        $writer->writeBooleanValue('billingEmailEnabled', $this->getBillingEmailEnabled());
        $writer->writeBooleanValue('billingSmsEnabled', $this->getBillingSmsEnabled());
        $writer->writeBooleanValue('lowWalletBalanceEnabled', $this->getLowWalletBalanceEnabled());
        $writer->writeBooleanValue('missedCallEnabled', $this->getMissedCallEnabled());
        $writer->writeBooleanValue('newLeadEmailEnabled', $this->getNewLeadEmailEnabled());
        $writer->writeBooleanValue('newLeadEnabled', $this->getNewLeadEnabled());
        $writer->writeBooleanValue('newLeadSmsEnabled', $this->getNewLeadSmsEnabled());
        $writer->writeBooleanValue('paymentFailedEnabled', $this->getPaymentFailedEnabled());
        $writer->writeBooleanValue('subscriptionRenewingEnabled', $this->getSubscriptionRenewingEnabled());
        $writer->writeBooleanValue('tenDlcStatusEnabled', $this->getTenDlcStatusEnabled());
        $writer->writeBooleanValue('unreadSmsEnabled', $this->getUnreadSmsEnabled());
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
     * Sets the automationFailedEnabled property value. Whether automation failed notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the automationFailedEnabled property.
    */
    public function setAutomationFailedEnabled(?bool $value): void {
        $this->automationFailedEnabled = $value;
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
     * Sets the lowWalletBalanceEnabled property value. Whether low wallet balance notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the lowWalletBalanceEnabled property.
    */
    public function setLowWalletBalanceEnabled(?bool $value): void {
        $this->lowWalletBalanceEnabled = $value;
    }

    /**
     * Sets the missedCallEnabled property value. Whether missed call notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the missedCallEnabled property.
    */
    public function setMissedCallEnabled(?bool $value): void {
        $this->missedCallEnabled = $value;
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
     * Sets the subscriptionRenewingEnabled property value. Whether subscription renewing notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the subscriptionRenewingEnabled property.
    */
    public function setSubscriptionRenewingEnabled(?bool $value): void {
        $this->subscriptionRenewingEnabled = $value;
    }

    /**
     * Sets the tenDlcStatusEnabled property value. Whether 10DLC status notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the tenDlcStatusEnabled property.
    */
    public function setTenDlcStatusEnabled(?bool $value): void {
        $this->tenDlcStatusEnabled = $value;
    }

    /**
     * Sets the unreadSmsEnabled property value. Whether unread SMS notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the unreadSmsEnabled property.
    */
    public function setUnreadSmsEnabled(?bool $value): void {
        $this->unreadSmsEnabled = $value;
    }

    /**
     * Sets the usageLimitHitEnabled property value. Whether usage limit hit notifications are enabled for this user notification preferences.
     * @param bool|null $value Value to set for the usageLimitHitEnabled property.
    */
    public function setUsageLimitHitEnabled(?bool $value): void {
        $this->usageLimitHitEnabled = $value;
    }

}
