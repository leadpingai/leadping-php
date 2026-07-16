<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response metrics associated with this Leadping customer analytics.
*/
class CustomerResponseMetrics implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AnalyticsTrendPointOfdecimal>|null $averageMinutesTrend Collection of average minutes trend included with this Leadping customer response metrics.
    */
    private ?array $averageMinutesTrend = null;
    
    /**
     * @var int|null $missedCalls Number of calls missed during the reporting period.
    */
    private ?int $missedCalls = null;
    
    /**
     * @var int|null $respondedLeads Number of responded leads represented by this Leadping customer response metrics.
    */
    private ?int $respondedLeads = null;
    
    /**
     * @var float|null $respondedWithinFiveMinutesPercent Responded within five minutes percent expressed as a percentage.
    */
    private ?float $respondedWithinFiveMinutesPercent = null;
    
    /**
     * @var int|null $unreadMessages Number of unread messages represented by this Leadping customer response metrics.
    */
    private ?int $unreadMessages = null;
    
    /**
     * @var int|null $unrespondedLeads Number of unresponded leads represented by this Leadping customer response metrics.
    */
    private ?int $unrespondedLeads = null;
    
    /**
     * Instantiates a new CustomerResponseMetrics and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerResponseMetrics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerResponseMetrics {
        return new CustomerResponseMetrics();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the averageMinutesTrend property value. Collection of average minutes trend included with this Leadping customer response metrics.
     * @return array<AnalyticsTrendPointOfdecimal>|null
    */
    public function getAverageMinutesTrend(): ?array {
        return $this->averageMinutesTrend;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'averageMinutesTrend' => fn(ParseNode $n) => $o->setAverageMinutesTrend($n->getCollectionOfObjectValues([AnalyticsTrendPointOfdecimal::class, 'createFromDiscriminatorValue'])),
            'missedCalls' => fn(ParseNode $n) => $o->setMissedCalls($n->getIntegerValue()),
            'respondedLeads' => fn(ParseNode $n) => $o->setRespondedLeads($n->getIntegerValue()),
            'respondedWithinFiveMinutesPercent' => fn(ParseNode $n) => $o->setRespondedWithinFiveMinutesPercent($n->getFloatValue()),
            'unreadMessages' => fn(ParseNode $n) => $o->setUnreadMessages($n->getIntegerValue()),
            'unrespondedLeads' => fn(ParseNode $n) => $o->setUnrespondedLeads($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the missedCalls property value. Number of calls missed during the reporting period.
     * @return int|null
    */
    public function getMissedCalls(): ?int {
        return $this->missedCalls;
    }

    /**
     * Gets the respondedLeads property value. Number of responded leads represented by this Leadping customer response metrics.
     * @return int|null
    */
    public function getRespondedLeads(): ?int {
        return $this->respondedLeads;
    }

    /**
     * Gets the respondedWithinFiveMinutesPercent property value. Responded within five minutes percent expressed as a percentage.
     * @return float|null
    */
    public function getRespondedWithinFiveMinutesPercent(): ?float {
        return $this->respondedWithinFiveMinutesPercent;
    }

    /**
     * Gets the unreadMessages property value. Number of unread messages represented by this Leadping customer response metrics.
     * @return int|null
    */
    public function getUnreadMessages(): ?int {
        return $this->unreadMessages;
    }

    /**
     * Gets the unrespondedLeads property value. Number of unresponded leads represented by this Leadping customer response metrics.
     * @return int|null
    */
    public function getUnrespondedLeads(): ?int {
        return $this->unrespondedLeads;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('averageMinutesTrend', $this->getAverageMinutesTrend());
        $writer->writeIntegerValue('missedCalls', $this->getMissedCalls());
        $writer->writeIntegerValue('respondedLeads', $this->getRespondedLeads());
        $writer->writeFloatValue('respondedWithinFiveMinutesPercent', $this->getRespondedWithinFiveMinutesPercent());
        $writer->writeIntegerValue('unreadMessages', $this->getUnreadMessages());
        $writer->writeIntegerValue('unrespondedLeads', $this->getUnrespondedLeads());
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
     * Sets the averageMinutesTrend property value. Collection of average minutes trend included with this Leadping customer response metrics.
     * @param array<AnalyticsTrendPointOfdecimal>|null $value Value to set for the averageMinutesTrend property.
    */
    public function setAverageMinutesTrend(?array $value): void {
        $this->averageMinutesTrend = $value;
    }

    /**
     * Sets the missedCalls property value. Number of calls missed during the reporting period.
     * @param int|null $value Value to set for the missedCalls property.
    */
    public function setMissedCalls(?int $value): void {
        $this->missedCalls = $value;
    }

    /**
     * Sets the respondedLeads property value. Number of responded leads represented by this Leadping customer response metrics.
     * @param int|null $value Value to set for the respondedLeads property.
    */
    public function setRespondedLeads(?int $value): void {
        $this->respondedLeads = $value;
    }

    /**
     * Sets the respondedWithinFiveMinutesPercent property value. Responded within five minutes percent expressed as a percentage.
     * @param float|null $value Value to set for the respondedWithinFiveMinutesPercent property.
    */
    public function setRespondedWithinFiveMinutesPercent(?float $value): void {
        $this->respondedWithinFiveMinutesPercent = $value;
    }

    /**
     * Sets the unreadMessages property value. Number of unread messages represented by this Leadping customer response metrics.
     * @param int|null $value Value to set for the unreadMessages property.
    */
    public function setUnreadMessages(?int $value): void {
        $this->unreadMessages = $value;
    }

    /**
     * Sets the unrespondedLeads property value. Number of unresponded leads represented by this Leadping customer response metrics.
     * @param int|null $value Value to set for the unrespondedLeads property.
    */
    public function setUnrespondedLeads(?int $value): void {
        $this->unrespondedLeads = $value;
    }

}
