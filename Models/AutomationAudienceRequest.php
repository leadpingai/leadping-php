<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Runs an automation for a server-resolved audience, omitting leads the user unchecked.
*/
class AutomationAudienceRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AutomationLeadAudience|null $audience Active leads in the current organization, optionally limited to one assignee, as of the selection time.
    */
    private ?AutomationLeadAudience $audience = null;
    
    /**
     * @var array<string>|null $excludedLeadIds The excludedLeadIds property
    */
    private ?array $excludedLeadIds = null;
    
    /**
     * @var string|null $requestId The requestId property
    */
    private ?string $requestId = null;
    
    /**
     * Instantiates a new AutomationAudienceRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutomationAudienceRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutomationAudienceRequest {
        return new AutomationAudienceRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the audience property value. Active leads in the current organization, optionally limited to one assignee, as of the selection time.
     * @return AutomationLeadAudience|null
    */
    public function getAudience(): ?AutomationLeadAudience {
        return $this->audience;
    }

    /**
     * Gets the excludedLeadIds property value. The excludedLeadIds property
     * @return array<string>|null
    */
    public function getExcludedLeadIds(): ?array {
        return $this->excludedLeadIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audience' => fn(ParseNode $n) => $o->setAudience($n->getObjectValue([AutomationLeadAudience::class, 'createFromDiscriminatorValue'])),
            'excludedLeadIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludedLeadIds($val);
            },
            'requestId' => fn(ParseNode $n) => $o->setRequestId($n->getStringValue()),
        ];
    }

    /**
     * Gets the requestId property value. The requestId property
     * @return string|null
    */
    public function getRequestId(): ?string {
        return $this->requestId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('audience', $this->getAudience());
        $writer->writeCollectionOfPrimitiveValues('excludedLeadIds', $this->getExcludedLeadIds());
        $writer->writeStringValue('requestId', $this->getRequestId());
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
     * Sets the audience property value. Active leads in the current organization, optionally limited to one assignee, as of the selection time.
     * @param AutomationLeadAudience|null $value Value to set for the audience property.
    */
    public function setAudience(?AutomationLeadAudience $value): void {
        $this->audience = $value;
    }

    /**
     * Sets the excludedLeadIds property value. The excludedLeadIds property
     * @param array<string>|null $value Value to set for the excludedLeadIds property.
    */
    public function setExcludedLeadIds(?array $value): void {
        $this->excludedLeadIds = $value;
    }

    /**
     * Sets the requestId property value. The requestId property
     * @param string|null $value Value to set for the requestId property.
    */
    public function setRequestId(?string $value): void {
        $this->requestId = $value;
    }

}
