<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\Time;

/**
 * Preferred callback interval on a calendar date in the contact time zone.
*/
class LeadCallbackWindow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Date|null $date Local calendar date for the callback.
    */
    private ?Date $date = null;
    
    /**
     * @var Time|null $end Exclusive local end time on the same date.
    */
    private ?Time $end = null;
    
    /**
     * @var Time|null $start Inclusive local start time.
    */
    private ?Time $start = null;
    
    /**
     * Instantiates a new LeadCallbackWindow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadCallbackWindow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadCallbackWindow {
        return new LeadCallbackWindow();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the date property value. Local calendar date for the callback.
     * @return Date|null
    */
    public function getDate(): ?Date {
        return $this->date;
    }

    /**
     * Gets the end property value. Exclusive local end time on the same date.
     * @return Time|null
    */
    public function getEnd(): ?Time {
        return $this->end;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'date' => fn(ParseNode $n) => $o->setDate($n->getDateValue()),
            'end' => fn(ParseNode $n) => $o->setEnd($n->getTimeValue()),
            'start' => fn(ParseNode $n) => $o->setStart($n->getTimeValue()),
        ];
    }

    /**
     * Gets the start property value. Inclusive local start time.
     * @return Time|null
    */
    public function getStart(): ?Time {
        return $this->start;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('date', $this->getDate());
        $writer->writeTimeValue('end', $this->getEnd());
        $writer->writeTimeValue('start', $this->getStart());
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
     * Sets the date property value. Local calendar date for the callback.
     * @param Date|null $value Value to set for the date property.
    */
    public function setDate(?Date $value): void {
        $this->date = $value;
    }

    /**
     * Sets the end property value. Exclusive local end time on the same date.
     * @param Time|null $value Value to set for the end property.
    */
    public function setEnd(?Time $value): void {
        $this->end = $value;
    }

    /**
     * Sets the start property value. Inclusive local start time.
     * @param Time|null $value Value to set for the start property.
    */
    public function setStart(?Time $value): void {
        $this->start = $value;
    }

}
