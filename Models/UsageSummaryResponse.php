<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing usage summary response data.
*/
class UsageSummaryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var float|null $billableQuantityTotal The billable quantity total for this usage summary.
    */
    private ?float $billableQuantityTotal = null;
    
    /**
     * @var int|null $billingBlockedCount The billing blocked count for this usage summary.
    */
    private ?int $billingBlockedCount = null;
    
    /**
     * @var array<UsageCounterLine>|null $counters The named usage counters included with this usage summary.
    */
    private ?array $counters = null;
    
    /**
     * @var float|null $customerChargeTotal The customer charge total for this usage summary.
    */
    private ?float $customerChargeTotal = null;
    
    /**
     * @var int|null $failedCount The failed count for this usage summary.
    */
    private ?int $failedCount = null;
    
    /**
     * @var float|null $internalCostTotal The internal cost total for this usage summary.
    */
    private ?float $internalCostTotal = null;
    
    /**
     * @var array<UsageSummaryLine>|null $lines The lines included with this usage summary.
    */
    private ?array $lines = null;
    
    /**
     * @var int|null $nonBillableInternalCount The non billable internal count for this usage summary.
    */
    private ?int $nonBillableInternalCount = null;
    
    /**
     * @var int|null $pendingInvoiceCount The pending invoice count for this usage summary.
    */
    private ?int $pendingInvoiceCount = null;
    
    /**
     * @var DateTime|null $periodEnd The date and time for the period end value on this usage summary.
    */
    private ?DateTime $periodEnd = null;
    
    /**
     * @var DateTime|null $periodStart The date and time for the period start value on this usage summary.
    */
    private ?DateTime $periodStart = null;
    
    /**
     * @var float|null $providerCostTotal The provider cost total for this usage summary.
    */
    private ?float $providerCostTotal = null;
    
    /**
     * @var int|null $usageRecordCount The usage record count for this usage summary.
    */
    private ?int $usageRecordCount = null;
    
    /**
     * Instantiates a new UsageSummaryResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageSummaryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageSummaryResponse {
        return new UsageSummaryResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billableQuantityTotal property value. The billable quantity total for this usage summary.
     * @return float|null
    */
    public function getBillableQuantityTotal(): ?float {
        return $this->billableQuantityTotal;
    }

    /**
     * Gets the billingBlockedCount property value. The billing blocked count for this usage summary.
     * @return int|null
    */
    public function getBillingBlockedCount(): ?int {
        return $this->billingBlockedCount;
    }

    /**
     * Gets the counters property value. The named usage counters included with this usage summary.
     * @return array<UsageCounterLine>|null
    */
    public function getCounters(): ?array {
        return $this->counters;
    }

    /**
     * Gets the customerChargeTotal property value. The customer charge total for this usage summary.
     * @return float|null
    */
    public function getCustomerChargeTotal(): ?float {
        return $this->customerChargeTotal;
    }

    /**
     * Gets the failedCount property value. The failed count for this usage summary.
     * @return int|null
    */
    public function getFailedCount(): ?int {
        return $this->failedCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billableQuantityTotal' => fn(ParseNode $n) => $o->setBillableQuantityTotal($n->getFloatValue()),
            'billingBlockedCount' => fn(ParseNode $n) => $o->setBillingBlockedCount($n->getIntegerValue()),
            'counters' => fn(ParseNode $n) => $o->setCounters($n->getCollectionOfObjectValues([UsageCounterLine::class, 'createFromDiscriminatorValue'])),
            'customerChargeTotal' => fn(ParseNode $n) => $o->setCustomerChargeTotal($n->getFloatValue()),
            'failedCount' => fn(ParseNode $n) => $o->setFailedCount($n->getIntegerValue()),
            'internalCostTotal' => fn(ParseNode $n) => $o->setInternalCostTotal($n->getFloatValue()),
            'lines' => fn(ParseNode $n) => $o->setLines($n->getCollectionOfObjectValues([UsageSummaryLine::class, 'createFromDiscriminatorValue'])),
            'nonBillableInternalCount' => fn(ParseNode $n) => $o->setNonBillableInternalCount($n->getIntegerValue()),
            'pendingInvoiceCount' => fn(ParseNode $n) => $o->setPendingInvoiceCount($n->getIntegerValue()),
            'periodEnd' => fn(ParseNode $n) => $o->setPeriodEnd($n->getDateTimeValue()),
            'periodStart' => fn(ParseNode $n) => $o->setPeriodStart($n->getDateTimeValue()),
            'providerCostTotal' => fn(ParseNode $n) => $o->setProviderCostTotal($n->getFloatValue()),
            'usageRecordCount' => fn(ParseNode $n) => $o->setUsageRecordCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the internalCostTotal property value. The internal cost total for this usage summary.
     * @return float|null
    */
    public function getInternalCostTotal(): ?float {
        return $this->internalCostTotal;
    }

    /**
     * Gets the lines property value. The lines included with this usage summary.
     * @return array<UsageSummaryLine>|null
    */
    public function getLines(): ?array {
        return $this->lines;
    }

    /**
     * Gets the nonBillableInternalCount property value. The non billable internal count for this usage summary.
     * @return int|null
    */
    public function getNonBillableInternalCount(): ?int {
        return $this->nonBillableInternalCount;
    }

    /**
     * Gets the pendingInvoiceCount property value. The pending invoice count for this usage summary.
     * @return int|null
    */
    public function getPendingInvoiceCount(): ?int {
        return $this->pendingInvoiceCount;
    }

    /**
     * Gets the periodEnd property value. The date and time for the period end value on this usage summary.
     * @return DateTime|null
    */
    public function getPeriodEnd(): ?DateTime {
        return $this->periodEnd;
    }

    /**
     * Gets the periodStart property value. The date and time for the period start value on this usage summary.
     * @return DateTime|null
    */
    public function getPeriodStart(): ?DateTime {
        return $this->periodStart;
    }

    /**
     * Gets the providerCostTotal property value. The provider cost total for this usage summary.
     * @return float|null
    */
    public function getProviderCostTotal(): ?float {
        return $this->providerCostTotal;
    }

    /**
     * Gets the usageRecordCount property value. The usage record count for this usage summary.
     * @return int|null
    */
    public function getUsageRecordCount(): ?int {
        return $this->usageRecordCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('billableQuantityTotal', $this->getBillableQuantityTotal());
        $writer->writeIntegerValue('billingBlockedCount', $this->getBillingBlockedCount());
        $writer->writeCollectionOfObjectValues('counters', $this->getCounters());
        $writer->writeFloatValue('customerChargeTotal', $this->getCustomerChargeTotal());
        $writer->writeIntegerValue('failedCount', $this->getFailedCount());
        $writer->writeFloatValue('internalCostTotal', $this->getInternalCostTotal());
        $writer->writeCollectionOfObjectValues('lines', $this->getLines());
        $writer->writeIntegerValue('nonBillableInternalCount', $this->getNonBillableInternalCount());
        $writer->writeIntegerValue('pendingInvoiceCount', $this->getPendingInvoiceCount());
        $writer->writeDateTimeValue('periodEnd', $this->getPeriodEnd());
        $writer->writeDateTimeValue('periodStart', $this->getPeriodStart());
        $writer->writeFloatValue('providerCostTotal', $this->getProviderCostTotal());
        $writer->writeIntegerValue('usageRecordCount', $this->getUsageRecordCount());
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
     * Sets the billableQuantityTotal property value. The billable quantity total for this usage summary.
     * @param float|null $value Value to set for the billableQuantityTotal property.
    */
    public function setBillableQuantityTotal(?float $value): void {
        $this->billableQuantityTotal = $value;
    }

    /**
     * Sets the billingBlockedCount property value. The billing blocked count for this usage summary.
     * @param int|null $value Value to set for the billingBlockedCount property.
    */
    public function setBillingBlockedCount(?int $value): void {
        $this->billingBlockedCount = $value;
    }

    /**
     * Sets the counters property value. The named usage counters included with this usage summary.
     * @param array<UsageCounterLine>|null $value Value to set for the counters property.
    */
    public function setCounters(?array $value): void {
        $this->counters = $value;
    }

    /**
     * Sets the customerChargeTotal property value. The customer charge total for this usage summary.
     * @param float|null $value Value to set for the customerChargeTotal property.
    */
    public function setCustomerChargeTotal(?float $value): void {
        $this->customerChargeTotal = $value;
    }

    /**
     * Sets the failedCount property value. The failed count for this usage summary.
     * @param int|null $value Value to set for the failedCount property.
    */
    public function setFailedCount(?int $value): void {
        $this->failedCount = $value;
    }

    /**
     * Sets the internalCostTotal property value. The internal cost total for this usage summary.
     * @param float|null $value Value to set for the internalCostTotal property.
    */
    public function setInternalCostTotal(?float $value): void {
        $this->internalCostTotal = $value;
    }

    /**
     * Sets the lines property value. The lines included with this usage summary.
     * @param array<UsageSummaryLine>|null $value Value to set for the lines property.
    */
    public function setLines(?array $value): void {
        $this->lines = $value;
    }

    /**
     * Sets the nonBillableInternalCount property value. The non billable internal count for this usage summary.
     * @param int|null $value Value to set for the nonBillableInternalCount property.
    */
    public function setNonBillableInternalCount(?int $value): void {
        $this->nonBillableInternalCount = $value;
    }

    /**
     * Sets the pendingInvoiceCount property value. The pending invoice count for this usage summary.
     * @param int|null $value Value to set for the pendingInvoiceCount property.
    */
    public function setPendingInvoiceCount(?int $value): void {
        $this->pendingInvoiceCount = $value;
    }

    /**
     * Sets the periodEnd property value. The date and time for the period end value on this usage summary.
     * @param DateTime|null $value Value to set for the periodEnd property.
    */
    public function setPeriodEnd(?DateTime $value): void {
        $this->periodEnd = $value;
    }

    /**
     * Sets the periodStart property value. The date and time for the period start value on this usage summary.
     * @param DateTime|null $value Value to set for the periodStart property.
    */
    public function setPeriodStart(?DateTime $value): void {
        $this->periodStart = $value;
    }

    /**
     * Sets the providerCostTotal property value. The provider cost total for this usage summary.
     * @param float|null $value Value to set for the providerCostTotal property.
    */
    public function setProviderCostTotal(?float $value): void {
        $this->providerCostTotal = $value;
    }

    /**
     * Sets the usageRecordCount property value. The usage record count for this usage summary.
     * @param int|null $value Value to set for the usageRecordCount property.
    */
    public function setUsageRecordCount(?int $value): void {
        $this->usageRecordCount = $value;
    }

}
