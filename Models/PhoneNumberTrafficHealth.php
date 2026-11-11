<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Hourly local reputation-risk estimate using 24-hour, seven-day, and thirty-day traffic evidence.
*/
class PhoneNumberTrafficHealth implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $score The lower evaluated channel score, or null when neither channel has sufficient evidence.
    */
    private ?int $score = null;
    
    /**
     * Instantiates a new PhoneNumberTrafficHealth and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberTrafficHealth
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberTrafficHealth {
        return new PhoneNumberTrafficHealth();
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
            'score' => fn(ParseNode $n) => $o->setScore($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the score property value. The lower evaluated channel score, or null when neither channel has sufficient evidence.
     * @return int|null
    */
    public function getScore(): ?int {
        return $this->score;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('score', $this->getScore());
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
     * Sets the score property value. The lower evaluated channel score, or null when neither channel has sufficient evidence.
     * @param int|null $value Value to set for the score property.
    */
    public function setScore(?int $value): void {
        $this->score = $value;
    }

}
