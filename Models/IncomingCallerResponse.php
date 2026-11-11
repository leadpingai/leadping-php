<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Lead identity matched to an incoming caller within the current organization.
*/
class IncomingCallerResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $leadId The lead associated with the caller in the current organization.
    */
    private ?string $leadId = null;
    
    /**
     * @var string|null $leadName The associated lead's name, when available.
    */
    private ?string $leadName = null;
    
    /**
     * Instantiates a new IncomingCallerResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IncomingCallerResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IncomingCallerResponse {
        return new IncomingCallerResponse();
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
            'leadId' => fn(ParseNode $n) => $o->setLeadId($n->getStringValue()),
            'leadName' => fn(ParseNode $n) => $o->setLeadName($n->getStringValue()),
        ];
    }

    /**
     * Gets the leadId property value. The lead associated with the caller in the current organization.
     * @return string|null
    */
    public function getLeadId(): ?string {
        return $this->leadId;
    }

    /**
     * Gets the leadName property value. The associated lead's name, when available.
     * @return string|null
    */
    public function getLeadName(): ?string {
        return $this->leadName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('leadId', $this->getLeadId());
        $writer->writeStringValue('leadName', $this->getLeadName());
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
     * Sets the leadId property value. The lead associated with the caller in the current organization.
     * @param string|null $value Value to set for the leadId property.
    */
    public function setLeadId(?string $value): void {
        $this->leadId = $value;
    }

    /**
     * Sets the leadName property value. The associated lead's name, when available.
     * @param string|null $value Value to set for the leadName property.
    */
    public function setLeadName(?string $value): void {
        $this->leadName = $value;
    }

}
