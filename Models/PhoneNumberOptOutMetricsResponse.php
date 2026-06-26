<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API phone number opt-out metrics response returned to authenticated clients.
*/
class PhoneNumberOptOutMetricsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $distinctContactedCount Number of distinct recipients contacted during this metrics window.
    */
    private ?int $distinctContactedCount = null;
    
    /**
     * @var int|null $optOutCount Number of recipients who opted out during this metrics window.
    */
    private ?int $optOutCount = null;
    
    /**
     * @var float|null $optOutRatePercent Percentage of contacted recipients who opted out during this metrics window.
    */
    private ?float $optOutRatePercent = null;
    
    /**
     * @var int|null $windowDays Number of days included in the metrics reporting window.
    */
    private ?int $windowDays = null;
    
    /**
     * @var DateTime|null $windowStartedAt UTC timestamp when the metrics reporting window starts.
    */
    private ?DateTime $windowStartedAt = null;
    
    /**
     * Instantiates a new PhoneNumberOptOutMetricsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PhoneNumberOptOutMetricsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PhoneNumberOptOutMetricsResponse {
        return new PhoneNumberOptOutMetricsResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the distinctContactedCount property value. Number of distinct recipients contacted during this metrics window.
     * @return int|null
    */
    public function getDistinctContactedCount(): ?int {
        return $this->distinctContactedCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'distinctContactedCount' => fn(ParseNode $n) => $o->setDistinctContactedCount($n->getIntegerValue()),
            'optOutCount' => fn(ParseNode $n) => $o->setOptOutCount($n->getIntegerValue()),
            'optOutRatePercent' => fn(ParseNode $n) => $o->setOptOutRatePercent($n->getFloatValue()),
            'windowDays' => fn(ParseNode $n) => $o->setWindowDays($n->getIntegerValue()),
            'windowStartedAt' => fn(ParseNode $n) => $o->setWindowStartedAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the optOutCount property value. Number of recipients who opted out during this metrics window.
     * @return int|null
    */
    public function getOptOutCount(): ?int {
        return $this->optOutCount;
    }

    /**
     * Gets the optOutRatePercent property value. Percentage of contacted recipients who opted out during this metrics window.
     * @return float|null
    */
    public function getOptOutRatePercent(): ?float {
        return $this->optOutRatePercent;
    }

    /**
     * Gets the windowDays property value. Number of days included in the metrics reporting window.
     * @return int|null
    */
    public function getWindowDays(): ?int {
        return $this->windowDays;
    }

    /**
     * Gets the windowStartedAt property value. UTC timestamp when the metrics reporting window starts.
     * @return DateTime|null
    */
    public function getWindowStartedAt(): ?DateTime {
        return $this->windowStartedAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('distinctContactedCount', $this->getDistinctContactedCount());
        $writer->writeIntegerValue('optOutCount', $this->getOptOutCount());
        $writer->writeFloatValue('optOutRatePercent', $this->getOptOutRatePercent());
        $writer->writeIntegerValue('windowDays', $this->getWindowDays());
        $writer->writeDateTimeValue('windowStartedAt', $this->getWindowStartedAt());
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
     * Sets the distinctContactedCount property value. Number of distinct recipients contacted during this metrics window.
     * @param int|null $value Value to set for the distinctContactedCount property.
    */
    public function setDistinctContactedCount(?int $value): void {
        $this->distinctContactedCount = $value;
    }

    /**
     * Sets the optOutCount property value. Number of recipients who opted out during this metrics window.
     * @param int|null $value Value to set for the optOutCount property.
    */
    public function setOptOutCount(?int $value): void {
        $this->optOutCount = $value;
    }

    /**
     * Sets the optOutRatePercent property value. Percentage of contacted recipients who opted out during this metrics window.
     * @param float|null $value Value to set for the optOutRatePercent property.
    */
    public function setOptOutRatePercent(?float $value): void {
        $this->optOutRatePercent = $value;
    }

    /**
     * Sets the windowDays property value. Number of days included in the metrics reporting window.
     * @param int|null $value Value to set for the windowDays property.
    */
    public function setWindowDays(?int $value): void {
        $this->windowDays = $value;
    }

    /**
     * Sets the windowStartedAt property value. UTC timestamp when the metrics reporting window starts.
     * @param DateTime|null $value Value to set for the windowStartedAt property.
    */
    public function setWindowStartedAt(?DateTime $value): void {
        $this->windowStartedAt = $value;
    }

}
