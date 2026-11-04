<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Server-approved parameters for one outbound browser call.
*/
class BrowserCallApproval implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $callerNumber The callerNumber property
    */
    private ?string $callerNumber = null;
    
    /**
     * @var string|null $clientState The clientState property
    */
    private ?string $clientState = null;
    
    /**
     * @var string|null $destinationNumber The destinationNumber property
    */
    private ?string $destinationNumber = null;
    
    /**
     * @var DateTime|null $expiresAt The expiresAt property
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var int|null $maximumDurationSeconds The maximumDurationSeconds property
    */
    private ?int $maximumDurationSeconds = null;
    
    /**
     * Instantiates a new BrowserCallApproval and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BrowserCallApproval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BrowserCallApproval {
        return new BrowserCallApproval();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callerNumber property value. The callerNumber property
     * @return string|null
    */
    public function getCallerNumber(): ?string {
        return $this->callerNumber;
    }

    /**
     * Gets the clientState property value. The clientState property
     * @return string|null
    */
    public function getClientState(): ?string {
        return $this->clientState;
    }

    /**
     * Gets the destinationNumber property value. The destinationNumber property
     * @return string|null
    */
    public function getDestinationNumber(): ?string {
        return $this->destinationNumber;
    }

    /**
     * Gets the expiresAt property value. The expiresAt property
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expiresAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callerNumber' => fn(ParseNode $n) => $o->setCallerNumber($n->getStringValue()),
            'clientState' => fn(ParseNode $n) => $o->setClientState($n->getStringValue()),
            'destinationNumber' => fn(ParseNode $n) => $o->setDestinationNumber($n->getStringValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'maximumDurationSeconds' => fn(ParseNode $n) => $o->setMaximumDurationSeconds($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the maximumDurationSeconds property value. The maximumDurationSeconds property
     * @return int|null
    */
    public function getMaximumDurationSeconds(): ?int {
        return $this->maximumDurationSeconds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('callerNumber', $this->getCallerNumber());
        $writer->writeStringValue('clientState', $this->getClientState());
        $writer->writeStringValue('destinationNumber', $this->getDestinationNumber());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeIntegerValue('maximumDurationSeconds', $this->getMaximumDurationSeconds());
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
     * Sets the callerNumber property value. The callerNumber property
     * @param string|null $value Value to set for the callerNumber property.
    */
    public function setCallerNumber(?string $value): void {
        $this->callerNumber = $value;
    }

    /**
     * Sets the clientState property value. The clientState property
     * @param string|null $value Value to set for the clientState property.
    */
    public function setClientState(?string $value): void {
        $this->clientState = $value;
    }

    /**
     * Sets the destinationNumber property value. The destinationNumber property
     * @param string|null $value Value to set for the destinationNumber property.
    */
    public function setDestinationNumber(?string $value): void {
        $this->destinationNumber = $value;
    }

    /**
     * Sets the expiresAt property value. The expiresAt property
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the maximumDurationSeconds property value. The maximumDurationSeconds property
     * @param int|null $value Value to set for the maximumDurationSeconds property.
    */
    public function setMaximumDurationSeconds(?int $value): void {
        $this->maximumDurationSeconds = $value;
    }

}
