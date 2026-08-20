<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Defines the fields clients can send when working with lead source.
*/
class SourceRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $allowedProducts Product allowlist used to accept or route leads from this source.
    */
    private ?array $allowedProducts = null;
    
    /**
     * @var array<string>|null $allowedStates State or region allowlist used to accept leads from this source.
    */
    private ?array $allowedStates = null;
    
    /**
     * @var array<string>|null $defaultTagIds Tag IDs automatically assigned to leads created by this source.
    */
    private ?array $defaultTagIds = null;
    
    /**
     * @var array<string>|null $defaultTagNames Tag names automatically assigned to leads created by this source.
    */
    private ?array $defaultTagNames = null;
    
    /**
     * @var string|null $description Human-readable description that explains this lead source request to API users.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $name Human-readable source name.
    */
    private ?string $name = null;
    
    /**
     * @var bool|null $requiresTrustedForm Indicates whether leads from this source must include a TrustedForm certificate for consent proof.
    */
    private ?bool $requiresTrustedForm = null;
    
    /**
     * Instantiates a new SourceRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SourceRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SourceRequest {
        return new SourceRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedProducts property value. Product allowlist used to accept or route leads from this source.
     * @return array<string>|null
    */
    public function getAllowedProducts(): ?array {
        return $this->allowedProducts;
    }

    /**
     * Gets the allowedStates property value. State or region allowlist used to accept leads from this source.
     * @return array<string>|null
    */
    public function getAllowedStates(): ?array {
        return $this->allowedStates;
    }

    /**
     * Gets the defaultTagIds property value. Tag IDs automatically assigned to leads created by this source.
     * @return array<string>|null
    */
    public function getDefaultTagIds(): ?array {
        return $this->defaultTagIds;
    }

    /**
     * Gets the defaultTagNames property value. Tag names automatically assigned to leads created by this source.
     * @return array<string>|null
    */
    public function getDefaultTagNames(): ?array {
        return $this->defaultTagNames;
    }

    /**
     * Gets the description property value. Human-readable description that explains this lead source request to API users.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedProducts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedProducts($val);
            },
            'allowedStates' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedStates($val);
            },
            'defaultTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefaultTagIds($val);
            },
            'defaultTagNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDefaultTagNames($val);
            },
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'requiresTrustedForm' => fn(ParseNode $n) => $o->setRequiresTrustedForm($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the name property value. Human-readable source name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the requiresTrustedForm property value. Indicates whether leads from this source must include a TrustedForm certificate for consent proof.
     * @return bool|null
    */
    public function getRequiresTrustedForm(): ?bool {
        return $this->requiresTrustedForm;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedProducts', $this->getAllowedProducts());
        $writer->writeCollectionOfPrimitiveValues('allowedStates', $this->getAllowedStates());
        $writer->writeCollectionOfPrimitiveValues('defaultTagIds', $this->getDefaultTagIds());
        $writer->writeCollectionOfPrimitiveValues('defaultTagNames', $this->getDefaultTagNames());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeBooleanValue('requiresTrustedForm', $this->getRequiresTrustedForm());
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
     * Sets the allowedProducts property value. Product allowlist used to accept or route leads from this source.
     * @param array<string>|null $value Value to set for the allowedProducts property.
    */
    public function setAllowedProducts(?array $value): void {
        $this->allowedProducts = $value;
    }

    /**
     * Sets the allowedStates property value. State or region allowlist used to accept leads from this source.
     * @param array<string>|null $value Value to set for the allowedStates property.
    */
    public function setAllowedStates(?array $value): void {
        $this->allowedStates = $value;
    }

    /**
     * Sets the defaultTagIds property value. Tag IDs automatically assigned to leads created by this source.
     * @param array<string>|null $value Value to set for the defaultTagIds property.
    */
    public function setDefaultTagIds(?array $value): void {
        $this->defaultTagIds = $value;
    }

    /**
     * Sets the defaultTagNames property value. Tag names automatically assigned to leads created by this source.
     * @param array<string>|null $value Value to set for the defaultTagNames property.
    */
    public function setDefaultTagNames(?array $value): void {
        $this->defaultTagNames = $value;
    }

    /**
     * Sets the description property value. Human-readable description that explains this lead source request to API users.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the name property value. Human-readable source name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the requiresTrustedForm property value. Indicates whether leads from this source must include a TrustedForm certificate for consent proof.
     * @param bool|null $value Value to set for the requiresTrustedForm property.
    */
    public function setRequiresTrustedForm(?bool $value): void {
        $this->requiresTrustedForm = $value;
    }

}
