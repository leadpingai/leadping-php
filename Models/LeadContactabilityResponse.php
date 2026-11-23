<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Current call and text eligibility for a lead under the applicable contact rules.
*/
class LeadContactabilityResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $callBlockedReason Customer-safe explanation when calling is unavailable.
    */
    private ?string $callBlockedReason = null;
    
    /**
     * @var bool|null $canCall Whether the lead can currently be called after evaluating applicable contact hours, suppression, and consent rules.
    */
    private ?bool $canCall = null;
    
    /**
     * @var bool|null $canText Whether the lead can currently be texted after evaluating applicable contact hours, suppression, and consent rules.
    */
    private ?bool $canText = null;
    
    /**
     * @var DateTime|null $nextWindowChangeAt Next opening or closing of a contact window that can change this result.
    */
    private ?DateTime $nextWindowChangeAt = null;
    
    /**
     * @var bool|null $smsLineRestricted Whether the stored phone lookup rules out texting this recipient.
    */
    private ?bool $smsLineRestricted = null;
    
    /**
     * @var string|null $textBlockedReason Customer-safe explanation when texting is unavailable.
    */
    private ?string $textBlockedReason = null;
    
    /**
     * Instantiates a new LeadContactabilityResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadContactabilityResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadContactabilityResponse {
        return new LeadContactabilityResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callBlockedReason property value. Customer-safe explanation when calling is unavailable.
     * @return string|null
    */
    public function getCallBlockedReason(): ?string {
        return $this->callBlockedReason;
    }

    /**
     * Gets the canCall property value. Whether the lead can currently be called after evaluating applicable contact hours, suppression, and consent rules.
     * @return bool|null
    */
    public function getCanCall(): ?bool {
        return $this->canCall;
    }

    /**
     * Gets the canText property value. Whether the lead can currently be texted after evaluating applicable contact hours, suppression, and consent rules.
     * @return bool|null
    */
    public function getCanText(): ?bool {
        return $this->canText;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callBlockedReason' => fn(ParseNode $n) => $o->setCallBlockedReason($n->getStringValue()),
            'canCall' => fn(ParseNode $n) => $o->setCanCall($n->getBooleanValue()),
            'canText' => fn(ParseNode $n) => $o->setCanText($n->getBooleanValue()),
            'nextWindowChangeAt' => fn(ParseNode $n) => $o->setNextWindowChangeAt($n->getDateTimeValue()),
            'smsLineRestricted' => fn(ParseNode $n) => $o->setSmsLineRestricted($n->getBooleanValue()),
            'textBlockedReason' => fn(ParseNode $n) => $o->setTextBlockedReason($n->getStringValue()),
        ];
    }

    /**
     * Gets the nextWindowChangeAt property value. Next opening or closing of a contact window that can change this result.
     * @return DateTime|null
    */
    public function getNextWindowChangeAt(): ?DateTime {
        return $this->nextWindowChangeAt;
    }

    /**
     * Gets the smsLineRestricted property value. Whether the stored phone lookup rules out texting this recipient.
     * @return bool|null
    */
    public function getSmsLineRestricted(): ?bool {
        return $this->smsLineRestricted;
    }

    /**
     * Gets the textBlockedReason property value. Customer-safe explanation when texting is unavailable.
     * @return string|null
    */
    public function getTextBlockedReason(): ?string {
        return $this->textBlockedReason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('callBlockedReason', $this->getCallBlockedReason());
        $writer->writeBooleanValue('canCall', $this->getCanCall());
        $writer->writeBooleanValue('canText', $this->getCanText());
        $writer->writeDateTimeValue('nextWindowChangeAt', $this->getNextWindowChangeAt());
        $writer->writeBooleanValue('smsLineRestricted', $this->getSmsLineRestricted());
        $writer->writeStringValue('textBlockedReason', $this->getTextBlockedReason());
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
     * Sets the callBlockedReason property value. Customer-safe explanation when calling is unavailable.
     * @param string|null $value Value to set for the callBlockedReason property.
    */
    public function setCallBlockedReason(?string $value): void {
        $this->callBlockedReason = $value;
    }

    /**
     * Sets the canCall property value. Whether the lead can currently be called after evaluating applicable contact hours, suppression, and consent rules.
     * @param bool|null $value Value to set for the canCall property.
    */
    public function setCanCall(?bool $value): void {
        $this->canCall = $value;
    }

    /**
     * Sets the canText property value. Whether the lead can currently be texted after evaluating applicable contact hours, suppression, and consent rules.
     * @param bool|null $value Value to set for the canText property.
    */
    public function setCanText(?bool $value): void {
        $this->canText = $value;
    }

    /**
     * Sets the nextWindowChangeAt property value. Next opening or closing of a contact window that can change this result.
     * @param DateTime|null $value Value to set for the nextWindowChangeAt property.
    */
    public function setNextWindowChangeAt(?DateTime $value): void {
        $this->nextWindowChangeAt = $value;
    }

    /**
     * Sets the smsLineRestricted property value. Whether the stored phone lookup rules out texting this recipient.
     * @param bool|null $value Value to set for the smsLineRestricted property.
    */
    public function setSmsLineRestricted(?bool $value): void {
        $this->smsLineRestricted = $value;
    }

    /**
     * Sets the textBlockedReason property value. Customer-safe explanation when texting is unavailable.
     * @param string|null $value Value to set for the textBlockedReason property.
    */
    public function setTextBlockedReason(?string $value): void {
        $this->textBlockedReason = $value;
    }

}
