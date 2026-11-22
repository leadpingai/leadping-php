<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallRetryRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $expectedRetryAt The prior retry time observed by the rep.
    */
    private ?DateTime $expectedRetryAt = null;
    
    /**
     * @var DateTime|null $retryAt When to offer this call again. Clear to remove the retry.
    */
    private ?DateTime $retryAt = null;
    
    /**
     * Instantiates a new CallRetryRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallRetryRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallRetryRequest {
        return new CallRetryRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expectedRetryAt property value. The prior retry time observed by the rep.
     * @return DateTime|null
    */
    public function getExpectedRetryAt(): ?DateTime {
        return $this->expectedRetryAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expectedRetryAt' => fn(ParseNode $n) => $o->setExpectedRetryAt($n->getDateTimeValue()),
            'retryAt' => fn(ParseNode $n) => $o->setRetryAt($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the retryAt property value. When to offer this call again. Clear to remove the retry.
     * @return DateTime|null
    */
    public function getRetryAt(): ?DateTime {
        return $this->retryAt;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('expectedRetryAt', $this->getExpectedRetryAt());
        $writer->writeDateTimeValue('retryAt', $this->getRetryAt());
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
     * Sets the expectedRetryAt property value. The prior retry time observed by the rep.
     * @param DateTime|null $value Value to set for the expectedRetryAt property.
    */
    public function setExpectedRetryAt(?DateTime $value): void {
        $this->expectedRetryAt = $value;
    }

    /**
     * Sets the retryAt property value. When to offer this call again. Clear to remove the retry.
     * @param DateTime|null $value Value to set for the retryAt property.
    */
    public function setRetryAt(?DateTime $value): void {
        $this->retryAt = $value;
    }

}
