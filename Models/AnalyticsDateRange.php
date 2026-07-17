<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents analytics date range data exposed by Leadping analytics.
*/
class AnalyticsDateRange implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $bucketSize Bucket size associated with this Leadping analytics date range.
    */
    private ?int $bucketSize = null;
    
    /**
     * @var DateTime|null $endAt Date and time when this Leadping analytics date range was end.
    */
    private ?DateTime $endAt = null;
    
    /**
     * @var DateTime|null $startAt Date and time when this Leadping analytics date range was start.
    */
    private ?DateTime $startAt = null;
    
    /**
     * Instantiates a new AnalyticsDateRange and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyticsDateRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyticsDateRange {
        return new AnalyticsDateRange();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the bucketSize property value. Bucket size associated with this Leadping analytics date range.
     * @return int|null
    */
    public function getBucketSize(): ?int {
        return $this->bucketSize;
    }

    /**
     * Gets the endAt property value. Date and time when this Leadping analytics date range was end.
     * @return DateTime|null
    */
    public function getEndAt(): ?DateTime {
        return $this->endAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bucketSize' => fn(ParseNode $n) => $o->setBucketSize($n->getIntegerValue()),
            'endAt' => fn(ParseNode $n) => $o->setEndAt($n->getDateTimeValue()),
            'startAt' => fn(ParseNode $n) => $o->setStartAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the startAt property value. Date and time when this Leadping analytics date range was start.
     * @return DateTime|null
    */
    public function getStartAt(): ?DateTime {
        return $this->startAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('bucketSize', $this->getBucketSize());
        $writer->writeDateTimeValue('endAt', $this->getEndAt());
        $writer->writeDateTimeValue('startAt', $this->getStartAt());
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
     * Sets the bucketSize property value. Bucket size associated with this Leadping analytics date range.
     * @param int|null $value Value to set for the bucketSize property.
    */
    public function setBucketSize(?int $value): void {
        $this->bucketSize = $value;
    }

    /**
     * Sets the endAt property value. Date and time when this Leadping analytics date range was end.
     * @param DateTime|null $value Value to set for the endAt property.
    */
    public function setEndAt(?DateTime $value): void {
        $this->endAt = $value;
    }

    /**
     * Sets the startAt property value. Date and time when this Leadping analytics date range was start.
     * @param DateTime|null $value Value to set for the startAt property.
    */
    public function setStartAt(?DateTime $value): void {
        $this->startAt = $value;
    }

}
