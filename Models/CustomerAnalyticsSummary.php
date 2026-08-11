<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Represents customer analytics summary data exposed by Leadping analytics.
*/
class CustomerAnalyticsSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $billingStatus Current billing status for this Leadping customer analytics summary.
    */
    private ?string $billingStatus = null;
    
    /**
     * @var AnalyticsComparison|null $leadsComparison Date and time when this Leadping customer analytics summary was leads comparison.
    */
    private ?AnalyticsComparison $leadsComparison = null;
    
    /**
     * @var string|null $walletStatus Current wallet status for this Leadping customer analytics summary.
    */
    private ?string $walletStatus = null;
    
    /**
     * Instantiates a new CustomerAnalyticsSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomerAnalyticsSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomerAnalyticsSummary {
        return new CustomerAnalyticsSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billingStatus property value. Current billing status for this Leadping customer analytics summary.
     * @return string|null
    */
    public function getBillingStatus(): ?string {
        return $this->billingStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingStatus' => fn(ParseNode $n) => $o->setBillingStatus($n->getStringValue()),
            'leadsComparison' => fn(ParseNode $n) => $o->setLeadsComparison($n->getObjectValue([AnalyticsComparison::class, 'createFromDiscriminatorValue'])),
            'walletStatus' => fn(ParseNode $n) => $o->setWalletStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the leadsComparison property value. Date and time when this Leadping customer analytics summary was leads comparison.
     * @return AnalyticsComparison|null
    */
    public function getLeadsComparison(): ?AnalyticsComparison {
        return $this->leadsComparison;
    }

    /**
     * Gets the walletStatus property value. Current wallet status for this Leadping customer analytics summary.
     * @return string|null
    */
    public function getWalletStatus(): ?string {
        return $this->walletStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('billingStatus', $this->getBillingStatus());
        $writer->writeObjectValue('leadsComparison', $this->getLeadsComparison());
        $writer->writeStringValue('walletStatus', $this->getWalletStatus());
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
     * Sets the billingStatus property value. Current billing status for this Leadping customer analytics summary.
     * @param string|null $value Value to set for the billingStatus property.
    */
    public function setBillingStatus(?string $value): void {
        $this->billingStatus = $value;
    }

    /**
     * Sets the leadsComparison property value. Date and time when this Leadping customer analytics summary was leads comparison.
     * @param AnalyticsComparison|null $value Value to set for the leadsComparison property.
    */
    public function setLeadsComparison(?AnalyticsComparison $value): void {
        $this->leadsComparison = $value;
    }

    /**
     * Sets the walletStatus property value. Current wallet status for this Leadping customer analytics summary.
     * @param string|null $value Value to set for the walletStatus property.
    */
    public function setWalletStatus(?string $value): void {
        $this->walletStatus = $value;
    }

}
