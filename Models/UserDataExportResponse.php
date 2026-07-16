<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserDataExportResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $completedAt Date and time when the user data export completed.
    */
    private ?DateTime $completedAt = null;
    
    /**
     * @var string|null $contentType Media type of the generated file or response content.
    */
    private ?string $contentType = null;
    
    /**
     * @var int|null $downloadCount Total number of download records represented by this Leadping user data export.
    */
    private ?int $downloadCount = null;
    
    /**
     * @var string|null $downloadUrl Temporary URL for downloading the completed Leadping data export.
    */
    private ?string $downloadUrl = null;
    
    /**
     * @var DateTime|null $expiresAt Date and time when the user data export expires.
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var DateTime|null $failedAt Date and time when the user data export failed.
    */
    private ?DateTime $failedAt = null;
    
    /**
     * @var string|null $fileName Human-readable file name associated with this Leadping user data export.
    */
    private ?string $fileName = null;
    
    /**
     * @var array<UserDataExportFile>|null $files Collection of files included with this Leadping user data export.
    */
    private ?array $files = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for the user data export.
    */
    private ?string $id = null;
    
    /**
     * @var int|null $maxDownloadCount Total number of max download records represented by this Leadping user data export.
    */
    private ?int $maxDownloadCount = null;
    
    /**
     * @var string|null $message Human-readable message for this Leadping user data export.
    */
    private ?string $message = null;
    
    /**
     * @var DateTime|null $requestedAt Date and time when the user data export was requested.
    */
    private ?DateTime $requestedAt = null;
    
    /**
     * @var DateTime|null $startedAt Date and time when the user data export started.
    */
    private ?DateTime $startedAt = null;
    
    /**
     * @var UserDataExportStatuses|null $status Current status for this Leadping user data export.
    */
    private ?UserDataExportStatuses $status = null;
    
    /**
     * Instantiates a new UserDataExportResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserDataExportResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserDataExportResponse {
        return new UserDataExportResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the completedAt property value. Date and time when the user data export completed.
     * @return DateTime|null
    */
    public function getCompletedAt(): ?DateTime {
        return $this->completedAt;
    }

    /**
     * Gets the contentType property value. Media type of the generated file or response content.
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->contentType;
    }

    /**
     * Gets the downloadCount property value. Total number of download records represented by this Leadping user data export.
     * @return int|null
    */
    public function getDownloadCount(): ?int {
        return $this->downloadCount;
    }

    /**
     * Gets the downloadUrl property value. Temporary URL for downloading the completed Leadping data export.
     * @return string|null
    */
    public function getDownloadUrl(): ?string {
        return $this->downloadUrl;
    }

    /**
     * Gets the expiresAt property value. Date and time when the user data export expires.
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expiresAt;
    }

    /**
     * Gets the failedAt property value. Date and time when the user data export failed.
     * @return DateTime|null
    */
    public function getFailedAt(): ?DateTime {
        return $this->failedAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completedAt' => fn(ParseNode $n) => $o->setCompletedAt($n->getDateTimeValue()),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'downloadCount' => fn(ParseNode $n) => $o->setDownloadCount($n->getIntegerValue()),
            'downloadUrl' => fn(ParseNode $n) => $o->setDownloadUrl($n->getStringValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'failedAt' => fn(ParseNode $n) => $o->setFailedAt($n->getDateTimeValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([UserDataExportFile::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'maxDownloadCount' => fn(ParseNode $n) => $o->setMaxDownloadCount($n->getIntegerValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'requestedAt' => fn(ParseNode $n) => $o->setRequestedAt($n->getDateTimeValue()),
            'startedAt' => fn(ParseNode $n) => $o->setStartedAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(UserDataExportStatuses::class)),
        ];
    }

    /**
     * Gets the fileName property value. Human-readable file name associated with this Leadping user data export.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the files property value. Collection of files included with this Leadping user data export.
     * @return array<UserDataExportFile>|null
    */
    public function getFiles(): ?array {
        return $this->files;
    }

    /**
     * Gets the id property value. Unique Leadping identifier for the user data export.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the maxDownloadCount property value. Total number of max download records represented by this Leadping user data export.
     * @return int|null
    */
    public function getMaxDownloadCount(): ?int {
        return $this->maxDownloadCount;
    }

    /**
     * Gets the message property value. Human-readable message for this Leadping user data export.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the requestedAt property value. Date and time when the user data export was requested.
     * @return DateTime|null
    */
    public function getRequestedAt(): ?DateTime {
        return $this->requestedAt;
    }

    /**
     * Gets the startedAt property value. Date and time when the user data export started.
     * @return DateTime|null
    */
    public function getStartedAt(): ?DateTime {
        return $this->startedAt;
    }

    /**
     * Gets the status property value. Current status for this Leadping user data export.
     * @return UserDataExportStatuses|null
    */
    public function getStatus(): ?UserDataExportStatuses {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('completedAt', $this->getCompletedAt());
        $writer->writeStringValue('contentType', $this->getContentType());
        $writer->writeIntegerValue('downloadCount', $this->getDownloadCount());
        $writer->writeStringValue('downloadUrl', $this->getDownloadUrl());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeDateTimeValue('failedAt', $this->getFailedAt());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeCollectionOfObjectValues('files', $this->getFiles());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeIntegerValue('maxDownloadCount', $this->getMaxDownloadCount());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeDateTimeValue('requestedAt', $this->getRequestedAt());
        $writer->writeDateTimeValue('startedAt', $this->getStartedAt());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the completedAt property value. Date and time when the user data export completed.
     * @param DateTime|null $value Value to set for the completedAt property.
    */
    public function setCompletedAt(?DateTime $value): void {
        $this->completedAt = $value;
    }

    /**
     * Sets the contentType property value. Media type of the generated file or response content.
     * @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value): void {
        $this->contentType = $value;
    }

    /**
     * Sets the downloadCount property value. Total number of download records represented by this Leadping user data export.
     * @param int|null $value Value to set for the downloadCount property.
    */
    public function setDownloadCount(?int $value): void {
        $this->downloadCount = $value;
    }

    /**
     * Sets the downloadUrl property value. Temporary URL for downloading the completed Leadping data export.
     * @param string|null $value Value to set for the downloadUrl property.
    */
    public function setDownloadUrl(?string $value): void {
        $this->downloadUrl = $value;
    }

    /**
     * Sets the expiresAt property value. Date and time when the user data export expires.
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the failedAt property value. Date and time when the user data export failed.
     * @param DateTime|null $value Value to set for the failedAt property.
    */
    public function setFailedAt(?DateTime $value): void {
        $this->failedAt = $value;
    }

    /**
     * Sets the fileName property value. Human-readable file name associated with this Leadping user data export.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->fileName = $value;
    }

    /**
     * Sets the files property value. Collection of files included with this Leadping user data export.
     * @param array<UserDataExportFile>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->files = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for the user data export.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the maxDownloadCount property value. Total number of max download records represented by this Leadping user data export.
     * @param int|null $value Value to set for the maxDownloadCount property.
    */
    public function setMaxDownloadCount(?int $value): void {
        $this->maxDownloadCount = $value;
    }

    /**
     * Sets the message property value. Human-readable message for this Leadping user data export.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the requestedAt property value. Date and time when the user data export was requested.
     * @param DateTime|null $value Value to set for the requestedAt property.
    */
    public function setRequestedAt(?DateTime $value): void {
        $this->requestedAt = $value;
    }

    /**
     * Sets the startedAt property value. Date and time when the user data export started.
     * @param DateTime|null $value Value to set for the startedAt property.
    */
    public function setStartedAt(?DateTime $value): void {
        $this->startedAt = $value;
    }

    /**
     * Sets the status property value. Current status for this Leadping user data export.
     * @param UserDataExportStatuses|null $value Value to set for the status property.
    */
    public function setStatus(?UserDataExportStatuses $value): void {
        $this->status = $value;
    }

}
