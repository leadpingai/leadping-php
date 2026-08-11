<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents outbound capacity overview data used by Leadping.
*/
class OutboundCapacityOverview implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<OutboundPhoneNumberCapacity>|null $phoneNumbers Collection of phone numbers included with this Leadping outbound capacity overview.
    */
    private ?array $phoneNumbers = null;
    
    /**
     * @var array<OutboundQueueItem>|null $recentDecisions Collection of recent decisions included with this Leadping outbound capacity overview.
    */
    private ?array $recentDecisions = null;
    
    /**
     * Instantiates a new OutboundCapacityOverview and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutboundCapacityOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutboundCapacityOverview {
        return new OutboundCapacityOverview();
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
            'phoneNumbers' => fn(ParseNode $n) => $o->setPhoneNumbers($n->getCollectionOfObjectValues([OutboundPhoneNumberCapacity::class, 'createFromDiscriminatorValue'])),
            'recentDecisions' => fn(ParseNode $n) => $o->setRecentDecisions($n->getCollectionOfObjectValues([OutboundQueueItem::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the phoneNumbers property value. Collection of phone numbers included with this Leadping outbound capacity overview.
     * @return array<OutboundPhoneNumberCapacity>|null
    */
    public function getPhoneNumbers(): ?array {
        return $this->phoneNumbers;
    }

    /**
     * Gets the recentDecisions property value. Collection of recent decisions included with this Leadping outbound capacity overview.
     * @return array<OutboundQueueItem>|null
    */
    public function getRecentDecisions(): ?array {
        return $this->recentDecisions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('phoneNumbers', $this->getPhoneNumbers());
        $writer->writeCollectionOfObjectValues('recentDecisions', $this->getRecentDecisions());
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
     * Sets the phoneNumbers property value. Collection of phone numbers included with this Leadping outbound capacity overview.
     * @param array<OutboundPhoneNumberCapacity>|null $value Value to set for the phoneNumbers property.
    */
    public function setPhoneNumbers(?array $value): void {
        $this->phoneNumbers = $value;
    }

    /**
     * Sets the recentDecisions property value. Collection of recent decisions included with this Leadping outbound capacity overview.
     * @param array<OutboundQueueItem>|null $value Value to set for the recentDecisions property.
    */
    public function setRecentDecisions(?array $value): void {
        $this->recentDecisions = $value;
    }

}
