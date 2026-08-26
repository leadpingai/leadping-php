<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Returns a newly issued source credential exactly once.
*/
class SourceCredentialIssueResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $secret Newly issued source credential. Leadping does not retain this plaintext value.
    */
    private ?string $secret = null;
    
    /**
     * @var SourceResponse|null $source Source metadata safe for later retrieval.
    */
    private ?SourceResponse $source = null;
    
    /**
     * Instantiates a new SourceCredentialIssueResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SourceCredentialIssueResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SourceCredentialIssueResponse {
        return new SourceCredentialIssueResponse();
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
            'secret' => fn(ParseNode $n) => $o->setSecret($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getObjectValue([SourceResponse::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the secret property value. Newly issued source credential. Leadping does not retain this plaintext value.
     * @return string|null
    */
    public function getSecret(): ?string {
        return $this->secret;
    }

    /**
     * Gets the source property value. Source metadata safe for later retrieval.
     * @return SourceResponse|null
    */
    public function getSource(): ?SourceResponse {
        return $this->source;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('secret', $this->getSecret());
        $writer->writeObjectValue('source', $this->getSource());
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
     * Sets the secret property value. Newly issued source credential. Leadping does not retain this plaintext value.
     * @param string|null $value Value to set for the secret property.
    */
    public function setSecret(?string $value): void {
        $this->secret = $value;
    }

    /**
     * Sets the source property value. Source metadata safe for later retrieval.
     * @param SourceResponse|null $value Value to set for the source property.
    */
    public function setSource(?SourceResponse $value): void {
        $this->source = $value;
    }

}
