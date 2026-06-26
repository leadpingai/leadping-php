<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Request schema for the Leadping API lead tag update request, including the fields clients can send.
*/
class LeadTagsRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $createMissing Indicates whether Leadping should create missing records while processing the request.
    */
    private ?bool $createMissing = null;
    
    /**
     * @var array<string>|null $tagIds Tag IDs assigned to or filtered against this lead.
    */
    private ?array $tagIds = null;
    
    /**
     * @var array<string>|null $tagNames Tag names assigned to this lead when matching existing tags by name.
    */
    private ?array $tagNames = null;
    
    /**
     * Instantiates a new LeadTagsRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadTagsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadTagsRequest {
        return new LeadTagsRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the createMissing property value. Indicates whether Leadping should create missing records while processing the request.
     * @return bool|null
    */
    public function getCreateMissing(): ?bool {
        return $this->createMissing;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createMissing' => fn(ParseNode $n) => $o->setCreateMissing($n->getBooleanValue()),
            'tagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTagIds($val);
            },
            'tagNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTagNames($val);
            },
        ];
    }

    /**
     * Gets the tagIds property value. Tag IDs assigned to or filtered against this lead.
     * @return array<string>|null
    */
    public function getTagIds(): ?array {
        return $this->tagIds;
    }

    /**
     * Gets the tagNames property value. Tag names assigned to this lead when matching existing tags by name.
     * @return array<string>|null
    */
    public function getTagNames(): ?array {
        return $this->tagNames;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('createMissing', $this->getCreateMissing());
        $writer->writeCollectionOfPrimitiveValues('tagIds', $this->getTagIds());
        $writer->writeCollectionOfPrimitiveValues('tagNames', $this->getTagNames());
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
     * Sets the createMissing property value. Indicates whether Leadping should create missing records while processing the request.
     * @param bool|null $value Value to set for the createMissing property.
    */
    public function setCreateMissing(?bool $value): void {
        $this->createMissing = $value;
    }

    /**
     * Sets the tagIds property value. Tag IDs assigned to or filtered against this lead.
     * @param array<string>|null $value Value to set for the tagIds property.
    */
    public function setTagIds(?array $value): void {
        $this->tagIds = $value;
    }

    /**
     * Sets the tagNames property value. Tag names assigned to this lead when matching existing tags by name.
     * @param array<string>|null $value Value to set for the tagNames property.
    */
    public function setTagNames(?array $value): void {
        $this->tagNames = $value;
    }

}
