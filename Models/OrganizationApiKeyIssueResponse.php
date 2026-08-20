<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Returns a newly issued organization API key and its identifying metadata; the secret credential is shown only in this response.
*/
class OrganizationApiKeyIssueResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var OrganizationApiKeyPreviewResponse|null $apiKey API key associated with this Leadping organization API key issue.
    */
    private ?OrganizationApiKeyPreviewResponse $apiKey = null;
    
    /**
     * @var DateTime|null $expiresAt Date and time when the organization API key issue expires.
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var string|null $secret Secret token returned once when the Leadping API key is issued.
    */
    private ?string $secret = null;
    
    /**
     * Instantiates a new OrganizationApiKeyIssueResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationApiKeyIssueResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationApiKeyIssueResponse {
        return new OrganizationApiKeyIssueResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the apiKey property value. API key associated with this Leadping organization API key issue.
     * @return OrganizationApiKeyPreviewResponse|null
    */
    public function getApiKey(): ?OrganizationApiKeyPreviewResponse {
        return $this->apiKey;
    }

    /**
     * Gets the expiresAt property value. Date and time when the organization API key issue expires.
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
            'apiKey' => fn(ParseNode $n) => $o->setApiKey($n->getObjectValue([OrganizationApiKeyPreviewResponse::class, 'createFromDiscriminatorValue'])),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'secret' => fn(ParseNode $n) => $o->setSecret($n->getStringValue()),
        ];
    }

    /**
     * Gets the secret property value. Secret token returned once when the Leadping API key is issued.
     * @return string|null
    */
    public function getSecret(): ?string {
        return $this->secret;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('apiKey', $this->getApiKey());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeStringValue('secret', $this->getSecret());
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
     * Sets the apiKey property value. API key associated with this Leadping organization API key issue.
     * @param OrganizationApiKeyPreviewResponse|null $value Value to set for the apiKey property.
    */
    public function setApiKey(?OrganizationApiKeyPreviewResponse $value): void {
        $this->apiKey = $value;
    }

    /**
     * Sets the expiresAt property value. Date and time when the organization API key issue expires.
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the secret property value. Secret token returned once when the Leadping API key is issued.
     * @param string|null $value Value to set for the secret property.
    */
    public function setSecret(?string $value): void {
        $this->secret = $value;
    }

}
