<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request schema for the Leadping API lead archive request, including the fields clients can send.
*/
class LeadArchiveRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $note Optional archive note that gives additional context for why the lead was archived.
    */
    private ?string $note = null;
    
    /**
     * @var int|null $reason Human-readable reason supplied for this request or result.
    */
    private ?int $reason = null;
    
    /**
     * Instantiates a new LeadArchiveRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadArchiveRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadArchiveRequest {
        return new LeadArchiveRequest();
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
            'note' => fn(ParseNode $n) => $o->setNote($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the note property value. Optional archive note that gives additional context for why the lead was archived.
     * @return string|null
    */
    public function getNote(): ?string {
        return $this->note;
    }

    /**
     * Gets the reason property value. Human-readable reason supplied for this request or result.
     * @return int|null
    */
    public function getReason(): ?int {
        return $this->reason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('note', $this->getNote());
        $writer->writeIntegerValue('reason', $this->getReason());
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
     * Sets the note property value. Optional archive note that gives additional context for why the lead was archived.
     * @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value): void {
        $this->note = $value;
    }

    /**
     * Sets the reason property value. Human-readable reason supplied for this request or result.
     * @param int|null $value Value to set for the reason property.
    */
    public function setReason(?int $value): void {
        $this->reason = $value;
    }

}
