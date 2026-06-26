<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Public Leadping API schema for phone number capabilities data.
*/
class PhoneNumberCapabilities implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $sms SMS readiness details for this phone number or business.
    */
    private ?bool $sms = null;
    
    /**
     * @var bool|null $testing Indicates whether the request should run in test mode.
    */
    private ?bool $testing = null;
    
    /**
     * @var bool|null $voice Voice readiness details for this phone number or business.
    */
    private ?bool $voice = null;
    
    /**
     * @var bool|null $warmup Warmup status data for this sender or phone number.
    */
    private ?bool $warmup = null;
    
    /**
     * Instantiates a new PhoneNumberCapabilities and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberCapabilities
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberCapabilities {
        return new PhoneNumberCapabilities();
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
            'sms' => fn(ParseNode $n) => $o->setSms($n->getBooleanValue()),
            'testing' => fn(ParseNode $n) => $o->setTesting($n->getBooleanValue()),
            'voice' => fn(ParseNode $n) => $o->setVoice($n->getBooleanValue()),
            'warmup' => fn(ParseNode $n) => $o->setWarmup($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the sms property value. SMS readiness details for this phone number or business.
     * @return bool|null
    */
    public function getSms(): ?bool {
        return $this->sms;
    }

    /**
     * Gets the testing property value. Indicates whether the request should run in test mode.
     * @return bool|null
    */
    public function getTesting(): ?bool {
        return $this->testing;
    }

    /**
     * Gets the voice property value. Voice readiness details for this phone number or business.
     * @return bool|null
    */
    public function getVoice(): ?bool {
        return $this->voice;
    }

    /**
     * Gets the warmup property value. Warmup status data for this sender or phone number.
     * @return bool|null
    */
    public function getWarmup(): ?bool {
        return $this->warmup;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('sms', $this->getSms());
        $writer->writeBooleanValue('testing', $this->getTesting());
        $writer->writeBooleanValue('voice', $this->getVoice());
        $writer->writeBooleanValue('warmup', $this->getWarmup());
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
     * Sets the sms property value. SMS readiness details for this phone number or business.
     * @param bool|null $value Value to set for the sms property.
    */
    public function setSms(?bool $value): void {
        $this->sms = $value;
    }

    /**
     * Sets the testing property value. Indicates whether the request should run in test mode.
     * @param bool|null $value Value to set for the testing property.
    */
    public function setTesting(?bool $value): void {
        $this->testing = $value;
    }

    /**
     * Sets the voice property value. Voice readiness details for this phone number or business.
     * @param bool|null $value Value to set for the voice property.
    */
    public function setVoice(?bool $value): void {
        $this->voice = $value;
    }

    /**
     * Sets the warmup property value. Warmup status data for this sender or phone number.
     * @param bool|null $value Value to set for the warmup property.
    */
    public function setWarmup(?bool $value): void {
        $this->warmup = $value;
    }

}
