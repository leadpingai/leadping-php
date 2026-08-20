<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\ApiException;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Standard problem-details response containing machine-readable and human-readable information about an HTTP API error.
*/
class ProblemDetails extends ApiException implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $detail Human-readable explanation specific to this occurrence of the problem.
    */
    private ?string $detail = null;
    
    /**
     * @var ProblemDetails_errors|null $errors Validation errors keyed by the JSON request field name. Present for request validation failures.
    */
    private ?ProblemDetails_errors $errors = null;
    
    /**
     * @var string|null $instance URI reference that identifies this specific occurrence of the problem.
    */
    private ?string $instance = null;
    
    /**
     * @var int|null $status HTTP status code returned for the problem.
    */
    private ?int $status = null;
    
    /**
     * @var string|null $title Short, human-readable summary of the problem.
    */
    private ?string $title = null;
    
    /**
     * @var string|null $traceId Request trace identifier used to correlate this problem with Leadping diagnostics.
    */
    private ?string $traceId = null;
    
    /**
     * @var string|null $type URI reference that identifies the problem type.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new ProblemDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProblemDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProblemDetails {
        return new ProblemDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the detail property value. Human-readable explanation specific to this occurrence of the problem.
     * @return string|null
    */
    public function getDetail(): ?string {
        return $this->detail;
    }

    /**
     * Gets the errors property value. Validation errors keyed by the JSON request field name. Present for request validation failures.
     * @return ProblemDetails_errors|null
    */
    public function getErrors(): ?ProblemDetails_errors {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getStringValue()),
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getObjectValue([ProblemDetails_errors::class, 'createFromDiscriminatorValue'])),
            'instance' => fn(ParseNode $n) => $o->setInstance($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getIntegerValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'traceId' => fn(ParseNode $n) => $o->setTraceId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the instance property value. URI reference that identifies this specific occurrence of the problem.
     * @return string|null
    */
    public function getInstance(): ?string {
        return $this->instance;
    }

    /**
     * The primary error message.
     * @return string
    */
    public function getPrimaryErrorMessage(): string {
        return parent::getMessage();
    }

    /**
     * Gets the status property value. HTTP status code returned for the problem.
     * @return int|null
    */
    public function getStatus(): ?int {
        return $this->status;
    }

    /**
     * Gets the title property value. Short, human-readable summary of the problem.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the traceId property value. Request trace identifier used to correlate this problem with Leadping diagnostics.
     * @return string|null
    */
    public function getTraceId(): ?string {
        return $this->traceId;
    }

    /**
     * Gets the type property value. URI reference that identifies the problem type.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('detail', $this->getDetail());
        $writer->writeObjectValue('errors', $this->getErrors());
        $writer->writeStringValue('instance', $this->getInstance());
        $writer->writeIntegerValue('status', $this->getStatus());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeStringValue('traceId', $this->getTraceId());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the detail property value. Human-readable explanation specific to this occurrence of the problem.
     * @param string|null $value Value to set for the detail property.
    */
    public function setDetail(?string $value): void {
        $this->detail = $value;
    }

    /**
     * Sets the errors property value. Validation errors keyed by the JSON request field name. Present for request validation failures.
     * @param ProblemDetails_errors|null $value Value to set for the errors property.
    */
    public function setErrors(?ProblemDetails_errors $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the instance property value. URI reference that identifies this specific occurrence of the problem.
     * @param string|null $value Value to set for the instance property.
    */
    public function setInstance(?string $value): void {
        $this->instance = $value;
    }

    /**
     * Sets the status property value. HTTP status code returned for the problem.
     * @param int|null $value Value to set for the status property.
    */
    public function setStatus(?int $value): void {
        $this->status = $value;
    }

    /**
     * Sets the title property value. Short, human-readable summary of the problem.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the traceId property value. Request trace identifier used to correlate this problem with Leadping diagnostics.
     * @param string|null $value Value to set for the traceId property.
    */
    public function setTraceId(?string $value): void {
        $this->traceId = $value;
    }

    /**
     * Sets the type property value. URI reference that identifies the problem type.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
