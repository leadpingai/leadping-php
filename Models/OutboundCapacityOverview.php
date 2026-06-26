<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutboundCapacityOverview implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $blockedCount The blockedCount property
    */
    private ?int $blockedCount = null;
    
    /**
     * @var int|null $coolingPhoneNumbers The coolingPhoneNumbers property
    */
    private ?int $coolingPhoneNumbers = null;
    
    /**
     * @var int|null $healthyPhoneNumbers The healthyPhoneNumbers property
    */
    private ?int $healthyPhoneNumbers = null;
    
    /**
     * @var int|null $limitedPhoneNumbers The limitedPhoneNumbers property
    */
    private ?int $limitedPhoneNumbers = null;
    
    /**
     * @var array<OutboundPhoneNumberCapacity>|null $phoneNumbers The phoneNumbers property
    */
    private ?array $phoneNumbers = null;
    
    /**
     * @var array<OutboundQueueItem>|null $recentDecisions The recentDecisions property
    */
    private ?array $recentDecisions = null;
    
    /**
     * @var int|null $scheduledCount The scheduledCount property
    */
    private ?int $scheduledCount = null;
    
    /**
     * @var int|null $smsCapacityRemainingToday The smsCapacityRemainingToday property
    */
    private ?int $smsCapacityRemainingToday = null;
    
    /**
     * @var int|null $voiceCapacityRemainingToday The voiceCapacityRemainingToday property
    */
    private ?int $voiceCapacityRemainingToday = null;
    
    /**
     * Instantiates a new OutboundCapacityOverview and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutboundCapacityOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutboundCapacityOverview {
        return new OutboundCapacityOverview();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the blockedCount property value. The blockedCount property
     * @return int|null
    */
    public function getBlockedCount(): ?int {
        return $this->blockedCount;
    }

    /**
     * Gets the coolingPhoneNumbers property value. The coolingPhoneNumbers property
     * @return int|null
    */
    public function getCoolingPhoneNumbers(): ?int {
        return $this->coolingPhoneNumbers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockedCount' => fn(ParseNode $n) => $o->setBlockedCount($n->getIntegerValue()),
            'coolingPhoneNumbers' => fn(ParseNode $n) => $o->setCoolingPhoneNumbers($n->getIntegerValue()),
            'healthyPhoneNumbers' => fn(ParseNode $n) => $o->setHealthyPhoneNumbers($n->getIntegerValue()),
            'limitedPhoneNumbers' => fn(ParseNode $n) => $o->setLimitedPhoneNumbers($n->getIntegerValue()),
            'phoneNumbers' => fn(ParseNode $n) => $o->setPhoneNumbers($n->getCollectionOfObjectValues([OutboundPhoneNumberCapacity::class, 'createFromDiscriminatorValue'])),
            'recentDecisions' => fn(ParseNode $n) => $o->setRecentDecisions($n->getCollectionOfObjectValues([OutboundQueueItem::class, 'createFromDiscriminatorValue'])),
            'scheduledCount' => fn(ParseNode $n) => $o->setScheduledCount($n->getIntegerValue()),
            'smsCapacityRemainingToday' => fn(ParseNode $n) => $o->setSmsCapacityRemainingToday($n->getIntegerValue()),
            'voiceCapacityRemainingToday' => fn(ParseNode $n) => $o->setVoiceCapacityRemainingToday($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the healthyPhoneNumbers property value. The healthyPhoneNumbers property
     * @return int|null
    */
    public function getHealthyPhoneNumbers(): ?int {
        return $this->healthyPhoneNumbers;
    }

    /**
     * Gets the limitedPhoneNumbers property value. The limitedPhoneNumbers property
     * @return int|null
    */
    public function getLimitedPhoneNumbers(): ?int {
        return $this->limitedPhoneNumbers;
    }

    /**
     * Gets the phoneNumbers property value. The phoneNumbers property
     * @return array<OutboundPhoneNumberCapacity>|null
    */
    public function getPhoneNumbers(): ?array {
        return $this->phoneNumbers;
    }

    /**
     * Gets the recentDecisions property value. The recentDecisions property
     * @return array<OutboundQueueItem>|null
    */
    public function getRecentDecisions(): ?array {
        return $this->recentDecisions;
    }

    /**
     * Gets the scheduledCount property value. The scheduledCount property
     * @return int|null
    */
    public function getScheduledCount(): ?int {
        return $this->scheduledCount;
    }

    /**
     * Gets the smsCapacityRemainingToday property value. The smsCapacityRemainingToday property
     * @return int|null
    */
    public function getSmsCapacityRemainingToday(): ?int {
        return $this->smsCapacityRemainingToday;
    }

    /**
     * Gets the voiceCapacityRemainingToday property value. The voiceCapacityRemainingToday property
     * @return int|null
    */
    public function getVoiceCapacityRemainingToday(): ?int {
        return $this->voiceCapacityRemainingToday;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('blockedCount', $this->getBlockedCount());
        $writer->writeIntegerValue('coolingPhoneNumbers', $this->getCoolingPhoneNumbers());
        $writer->writeIntegerValue('healthyPhoneNumbers', $this->getHealthyPhoneNumbers());
        $writer->writeIntegerValue('limitedPhoneNumbers', $this->getLimitedPhoneNumbers());
        $writer->writeCollectionOfObjectValues('phoneNumbers', $this->getPhoneNumbers());
        $writer->writeCollectionOfObjectValues('recentDecisions', $this->getRecentDecisions());
        $writer->writeIntegerValue('scheduledCount', $this->getScheduledCount());
        $writer->writeIntegerValue('smsCapacityRemainingToday', $this->getSmsCapacityRemainingToday());
        $writer->writeIntegerValue('voiceCapacityRemainingToday', $this->getVoiceCapacityRemainingToday());
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
     * Sets the blockedCount property value. The blockedCount property
     * @param int|null $value Value to set for the blockedCount property.
    */
    public function setBlockedCount(?int $value): void {
        $this->blockedCount = $value;
    }

    /**
     * Sets the coolingPhoneNumbers property value. The coolingPhoneNumbers property
     * @param int|null $value Value to set for the coolingPhoneNumbers property.
    */
    public function setCoolingPhoneNumbers(?int $value): void {
        $this->coolingPhoneNumbers = $value;
    }

    /**
     * Sets the healthyPhoneNumbers property value. The healthyPhoneNumbers property
     * @param int|null $value Value to set for the healthyPhoneNumbers property.
    */
    public function setHealthyPhoneNumbers(?int $value): void {
        $this->healthyPhoneNumbers = $value;
    }

    /**
     * Sets the limitedPhoneNumbers property value. The limitedPhoneNumbers property
     * @param int|null $value Value to set for the limitedPhoneNumbers property.
    */
    public function setLimitedPhoneNumbers(?int $value): void {
        $this->limitedPhoneNumbers = $value;
    }

    /**
     * Sets the phoneNumbers property value. The phoneNumbers property
     * @param array<OutboundPhoneNumberCapacity>|null $value Value to set for the phoneNumbers property.
    */
    public function setPhoneNumbers(?array $value): void {
        $this->phoneNumbers = $value;
    }

    /**
     * Sets the recentDecisions property value. The recentDecisions property
     * @param array<OutboundQueueItem>|null $value Value to set for the recentDecisions property.
    */
    public function setRecentDecisions(?array $value): void {
        $this->recentDecisions = $value;
    }

    /**
     * Sets the scheduledCount property value. The scheduledCount property
     * @param int|null $value Value to set for the scheduledCount property.
    */
    public function setScheduledCount(?int $value): void {
        $this->scheduledCount = $value;
    }

    /**
     * Sets the smsCapacityRemainingToday property value. The smsCapacityRemainingToday property
     * @param int|null $value Value to set for the smsCapacityRemainingToday property.
    */
    public function setSmsCapacityRemainingToday(?int $value): void {
        $this->smsCapacityRemainingToday = $value;
    }

    /**
     * Sets the voiceCapacityRemainingToday property value. The voiceCapacityRemainingToday property
     * @param int|null $value Value to set for the voiceCapacityRemainingToday property.
    */
    public function setVoiceCapacityRemainingToday(?int $value): void {
        $this->voiceCapacityRemainingToday = $value;
    }

}
