<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Response schema for the Leadping API feedback item response returned to authenticated clients.
*/
class FeedbackResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adminNote Internal admin note used to track feedback review or resolution.
    */
    private ?string $adminNote = null;
    
    /**
     * @var bool|null $allowContact Indicates whether the submitter permits Leadping support to contact them about the feedback.
    */
    private ?bool $allowContact = null;
    
    /**
     * @var string|null $area Product area or app section connected to this feedback item response.
    */
    private ?string $area = null;
    
    /**
     * @var string|null $businessId Business ID connected to the feedback item, when the feedback came from a business workspace.
    */
    private ?string $businessId = null;
    
    /**
     * @var string|null $businessNameSnapshot Business name snapshot captured when the user submitted the feedback.
    */
    private ?string $businessNameSnapshot = null;
    
    /**
     * @var string|null $clientVersion Client application version that submitted this feedback item response.
    */
    private ?string $clientVersion = null;
    
    /**
     * @var DateTime|null $closedAt UTC timestamp when this feedback item response was closed.
    */
    private ?DateTime $closedAt = null;
    
    /**
     * @var string|null $closedByUserId User ID of the person who closed this item.
    */
    private ?string $closedByUserId = null;
    
    /**
     * @var DateTime|null $createdAt UTC timestamp when this feedback item response was created.
    */
    private ?DateTime $createdAt = null;
    
    /**
     * @var string|null $duplicateOfFeedbackItemId Feedback item ID that this item duplicates, when applicable.
    */
    private ?string $duplicateOfFeedbackItemId = null;
    
    /**
     * @var string|null $environment Deployment environment where this feedback item response was captured or processed.
    */
    private ?string $environment = null;
    
    /**
     * @var string|null $externalIssueUrl External issue tracker URL linked to this feedback item.
    */
    private ?string $externalIssueUrl = null;
    
    /**
     * @var string|null $id Unique Leadping identifier for this feedback item response.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $message Message text supplied by the user or returned by the Leadping API for this feedback item response.
    */
    private ?string $message = null;
    
    /**
     * @var DateTime|null $reviewedAt UTC timestamp when an admin reviewed this feedback item response.
    */
    private ?DateTime $reviewedAt = null;
    
    /**
     * @var string|null $reviewedByUserId User ID of the admin who reviewed this item.
    */
    private ?string $reviewedByUserId = null;
    
    /**
     * @var string|null $route Application route where this feedback item response originated or should direct the user.
    */
    private ?string $route = null;
    
    /**
     * @var string|null $serverVersion Leadping API server version that processed this feedback item response.
    */
    private ?string $serverVersion = null;
    
    /**
     * @var FeedbackStatus|null $status Current lifecycle status for this feedback item response in the Leadping API.
    */
    private ?FeedbackStatus $status = null;
    
    /**
     * @var string|null $subscriptionPlanSnapshot Billing plan snapshot captured when the user submitted the feedback.
    */
    private ?string $subscriptionPlanSnapshot = null;
    
    /**
     * @var FeedbackType|null $type Type classification used to route and interpret this feedback item response in the Leadping API.
    */
    private ?FeedbackType $type = null;
    
    /**
     * @var string|null $userAgent Browser or client user agent captured when this feedback item response was submitted.
    */
    private ?string $userAgent = null;
    
    /**
     * @var string|null $userDisplayNameSnapshot User display name snapshot captured when the user submitted the feedback.
    */
    private ?string $userDisplayNameSnapshot = null;
    
    /**
     * @var string|null $userEmailSnapshot User email snapshot captured when the user submitted the feedback.
    */
    private ?string $userEmailSnapshot = null;
    
    /**
     * @var string|null $userId User ID for the person who submitted the feedback.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new FeedbackResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeedbackResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FeedbackResponse {
        return new FeedbackResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adminNote property value. Internal admin note used to track feedback review or resolution.
     * @return string|null
    */
    public function getAdminNote(): ?string {
        return $this->adminNote;
    }

    /**
     * Gets the allowContact property value. Indicates whether the submitter permits Leadping support to contact them about the feedback.
     * @return bool|null
    */
    public function getAllowContact(): ?bool {
        return $this->allowContact;
    }

    /**
     * Gets the area property value. Product area or app section connected to this feedback item response.
     * @return string|null
    */
    public function getArea(): ?string {
        return $this->area;
    }

    /**
     * Gets the businessId property value. Business ID connected to the feedback item, when the feedback came from a business workspace.
     * @return string|null
    */
    public function getBusinessId(): ?string {
        return $this->businessId;
    }

    /**
     * Gets the businessNameSnapshot property value. Business name snapshot captured when the user submitted the feedback.
     * @return string|null
    */
    public function getBusinessNameSnapshot(): ?string {
        return $this->businessNameSnapshot;
    }

    /**
     * Gets the clientVersion property value. Client application version that submitted this feedback item response.
     * @return string|null
    */
    public function getClientVersion(): ?string {
        return $this->clientVersion;
    }

    /**
     * Gets the closedAt property value. UTC timestamp when this feedback item response was closed.
     * @return DateTime|null
    */
    public function getClosedAt(): ?DateTime {
        return $this->closedAt;
    }

    /**
     * Gets the closedByUserId property value. User ID of the person who closed this item.
     * @return string|null
    */
    public function getClosedByUserId(): ?string {
        return $this->closedByUserId;
    }

    /**
     * Gets the createdAt property value. UTC timestamp when this feedback item response was created.
     * @return DateTime|null
    */
    public function getCreatedAt(): ?DateTime {
        return $this->createdAt;
    }

    /**
     * Gets the duplicateOfFeedbackItemId property value. Feedback item ID that this item duplicates, when applicable.
     * @return string|null
    */
    public function getDuplicateOfFeedbackItemId(): ?string {
        return $this->duplicateOfFeedbackItemId;
    }

    /**
     * Gets the environment property value. Deployment environment where this feedback item response was captured or processed.
     * @return string|null
    */
    public function getEnvironment(): ?string {
        return $this->environment;
    }

    /**
     * Gets the externalIssueUrl property value. External issue tracker URL linked to this feedback item.
     * @return string|null
    */
    public function getExternalIssueUrl(): ?string {
        return $this->externalIssueUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adminNote' => fn(ParseNode $n) => $o->setAdminNote($n->getStringValue()),
            'allowContact' => fn(ParseNode $n) => $o->setAllowContact($n->getBooleanValue()),
            'area' => fn(ParseNode $n) => $o->setArea($n->getStringValue()),
            'businessId' => fn(ParseNode $n) => $o->setBusinessId($n->getStringValue()),
            'businessNameSnapshot' => fn(ParseNode $n) => $o->setBusinessNameSnapshot($n->getStringValue()),
            'clientVersion' => fn(ParseNode $n) => $o->setClientVersion($n->getStringValue()),
            'closedAt' => fn(ParseNode $n) => $o->setClosedAt($n->getDateTimeValue()),
            'closedByUserId' => fn(ParseNode $n) => $o->setClosedByUserId($n->getStringValue()),
            'createdAt' => fn(ParseNode $n) => $o->setCreatedAt($n->getDateTimeValue()),
            'duplicateOfFeedbackItemId' => fn(ParseNode $n) => $o->setDuplicateOfFeedbackItemId($n->getStringValue()),
            'environment' => fn(ParseNode $n) => $o->setEnvironment($n->getStringValue()),
            'externalIssueUrl' => fn(ParseNode $n) => $o->setExternalIssueUrl($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'reviewedAt' => fn(ParseNode $n) => $o->setReviewedAt($n->getDateTimeValue()),
            'reviewedByUserId' => fn(ParseNode $n) => $o->setReviewedByUserId($n->getStringValue()),
            'route' => fn(ParseNode $n) => $o->setRoute($n->getStringValue()),
            'serverVersion' => fn(ParseNode $n) => $o->setServerVersion($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(FeedbackStatus::class)),
            'subscriptionPlanSnapshot' => fn(ParseNode $n) => $o->setSubscriptionPlanSnapshot($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(FeedbackType::class)),
            'userAgent' => fn(ParseNode $n) => $o->setUserAgent($n->getStringValue()),
            'userDisplayNameSnapshot' => fn(ParseNode $n) => $o->setUserDisplayNameSnapshot($n->getStringValue()),
            'userEmailSnapshot' => fn(ParseNode $n) => $o->setUserEmailSnapshot($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique Leadping identifier for this feedback item response.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the message property value. Message text supplied by the user or returned by the Leadping API for this feedback item response.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the reviewedAt property value. UTC timestamp when an admin reviewed this feedback item response.
     * @return DateTime|null
    */
    public function getReviewedAt(): ?DateTime {
        return $this->reviewedAt;
    }

    /**
     * Gets the reviewedByUserId property value. User ID of the admin who reviewed this item.
     * @return string|null
    */
    public function getReviewedByUserId(): ?string {
        return $this->reviewedByUserId;
    }

    /**
     * Gets the route property value. Application route where this feedback item response originated or should direct the user.
     * @return string|null
    */
    public function getRoute(): ?string {
        return $this->route;
    }

    /**
     * Gets the serverVersion property value. Leadping API server version that processed this feedback item response.
     * @return string|null
    */
    public function getServerVersion(): ?string {
        return $this->serverVersion;
    }

    /**
     * Gets the status property value. Current lifecycle status for this feedback item response in the Leadping API.
     * @return FeedbackStatus|null
    */
    public function getStatus(): ?FeedbackStatus {
        return $this->status;
    }

    /**
     * Gets the subscriptionPlanSnapshot property value. Billing plan snapshot captured when the user submitted the feedback.
     * @return string|null
    */
    public function getSubscriptionPlanSnapshot(): ?string {
        return $this->subscriptionPlanSnapshot;
    }

    /**
     * Gets the type property value. Type classification used to route and interpret this feedback item response in the Leadping API.
     * @return FeedbackType|null
    */
    public function getType(): ?FeedbackType {
        return $this->type;
    }

    /**
     * Gets the userAgent property value. Browser or client user agent captured when this feedback item response was submitted.
     * @return string|null
    */
    public function getUserAgent(): ?string {
        return $this->userAgent;
    }

    /**
     * Gets the userDisplayNameSnapshot property value. User display name snapshot captured when the user submitted the feedback.
     * @return string|null
    */
    public function getUserDisplayNameSnapshot(): ?string {
        return $this->userDisplayNameSnapshot;
    }

    /**
     * Gets the userEmailSnapshot property value. User email snapshot captured when the user submitted the feedback.
     * @return string|null
    */
    public function getUserEmailSnapshot(): ?string {
        return $this->userEmailSnapshot;
    }

    /**
     * Gets the userId property value. User ID for the person who submitted the feedback.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adminNote', $this->getAdminNote());
        $writer->writeBooleanValue('allowContact', $this->getAllowContact());
        $writer->writeStringValue('area', $this->getArea());
        $writer->writeStringValue('businessId', $this->getBusinessId());
        $writer->writeStringValue('businessNameSnapshot', $this->getBusinessNameSnapshot());
        $writer->writeStringValue('clientVersion', $this->getClientVersion());
        $writer->writeDateTimeValue('closedAt', $this->getClosedAt());
        $writer->writeStringValue('closedByUserId', $this->getClosedByUserId());
        $writer->writeDateTimeValue('createdAt', $this->getCreatedAt());
        $writer->writeStringValue('duplicateOfFeedbackItemId', $this->getDuplicateOfFeedbackItemId());
        $writer->writeStringValue('environment', $this->getEnvironment());
        $writer->writeStringValue('externalIssueUrl', $this->getExternalIssueUrl());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeDateTimeValue('reviewedAt', $this->getReviewedAt());
        $writer->writeStringValue('reviewedByUserId', $this->getReviewedByUserId());
        $writer->writeStringValue('route', $this->getRoute());
        $writer->writeStringValue('serverVersion', $this->getServerVersion());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('subscriptionPlanSnapshot', $this->getSubscriptionPlanSnapshot());
        $writer->writeEnumValue('type', $this->getType());
        $writer->writeStringValue('userAgent', $this->getUserAgent());
        $writer->writeStringValue('userDisplayNameSnapshot', $this->getUserDisplayNameSnapshot());
        $writer->writeStringValue('userEmailSnapshot', $this->getUserEmailSnapshot());
        $writer->writeStringValue('userId', $this->getUserId());
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
     * Sets the adminNote property value. Internal admin note used to track feedback review or resolution.
     * @param string|null $value Value to set for the adminNote property.
    */
    public function setAdminNote(?string $value): void {
        $this->adminNote = $value;
    }

    /**
     * Sets the allowContact property value. Indicates whether the submitter permits Leadping support to contact them about the feedback.
     * @param bool|null $value Value to set for the allowContact property.
    */
    public function setAllowContact(?bool $value): void {
        $this->allowContact = $value;
    }

    /**
     * Sets the area property value. Product area or app section connected to this feedback item response.
     * @param string|null $value Value to set for the area property.
    */
    public function setArea(?string $value): void {
        $this->area = $value;
    }

    /**
     * Sets the businessId property value. Business ID connected to the feedback item, when the feedback came from a business workspace.
     * @param string|null $value Value to set for the businessId property.
    */
    public function setBusinessId(?string $value): void {
        $this->businessId = $value;
    }

    /**
     * Sets the businessNameSnapshot property value. Business name snapshot captured when the user submitted the feedback.
     * @param string|null $value Value to set for the businessNameSnapshot property.
    */
    public function setBusinessNameSnapshot(?string $value): void {
        $this->businessNameSnapshot = $value;
    }

    /**
     * Sets the clientVersion property value. Client application version that submitted this feedback item response.
     * @param string|null $value Value to set for the clientVersion property.
    */
    public function setClientVersion(?string $value): void {
        $this->clientVersion = $value;
    }

    /**
     * Sets the closedAt property value. UTC timestamp when this feedback item response was closed.
     * @param DateTime|null $value Value to set for the closedAt property.
    */
    public function setClosedAt(?DateTime $value): void {
        $this->closedAt = $value;
    }

    /**
     * Sets the closedByUserId property value. User ID of the person who closed this item.
     * @param string|null $value Value to set for the closedByUserId property.
    */
    public function setClosedByUserId(?string $value): void {
        $this->closedByUserId = $value;
    }

    /**
     * Sets the createdAt property value. UTC timestamp when this feedback item response was created.
     * @param DateTime|null $value Value to set for the createdAt property.
    */
    public function setCreatedAt(?DateTime $value): void {
        $this->createdAt = $value;
    }

    /**
     * Sets the duplicateOfFeedbackItemId property value. Feedback item ID that this item duplicates, when applicable.
     * @param string|null $value Value to set for the duplicateOfFeedbackItemId property.
    */
    public function setDuplicateOfFeedbackItemId(?string $value): void {
        $this->duplicateOfFeedbackItemId = $value;
    }

    /**
     * Sets the environment property value. Deployment environment where this feedback item response was captured or processed.
     * @param string|null $value Value to set for the environment property.
    */
    public function setEnvironment(?string $value): void {
        $this->environment = $value;
    }

    /**
     * Sets the externalIssueUrl property value. External issue tracker URL linked to this feedback item.
     * @param string|null $value Value to set for the externalIssueUrl property.
    */
    public function setExternalIssueUrl(?string $value): void {
        $this->externalIssueUrl = $value;
    }

    /**
     * Sets the id property value. Unique Leadping identifier for this feedback item response.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the message property value. Message text supplied by the user or returned by the Leadping API for this feedback item response.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the reviewedAt property value. UTC timestamp when an admin reviewed this feedback item response.
     * @param DateTime|null $value Value to set for the reviewedAt property.
    */
    public function setReviewedAt(?DateTime $value): void {
        $this->reviewedAt = $value;
    }

    /**
     * Sets the reviewedByUserId property value. User ID of the admin who reviewed this item.
     * @param string|null $value Value to set for the reviewedByUserId property.
    */
    public function setReviewedByUserId(?string $value): void {
        $this->reviewedByUserId = $value;
    }

    /**
     * Sets the route property value. Application route where this feedback item response originated or should direct the user.
     * @param string|null $value Value to set for the route property.
    */
    public function setRoute(?string $value): void {
        $this->route = $value;
    }

    /**
     * Sets the serverVersion property value. Leadping API server version that processed this feedback item response.
     * @param string|null $value Value to set for the serverVersion property.
    */
    public function setServerVersion(?string $value): void {
        $this->serverVersion = $value;
    }

    /**
     * Sets the status property value. Current lifecycle status for this feedback item response in the Leadping API.
     * @param FeedbackStatus|null $value Value to set for the status property.
    */
    public function setStatus(?FeedbackStatus $value): void {
        $this->status = $value;
    }

    /**
     * Sets the subscriptionPlanSnapshot property value. Billing plan snapshot captured when the user submitted the feedback.
     * @param string|null $value Value to set for the subscriptionPlanSnapshot property.
    */
    public function setSubscriptionPlanSnapshot(?string $value): void {
        $this->subscriptionPlanSnapshot = $value;
    }

    /**
     * Sets the type property value. Type classification used to route and interpret this feedback item response in the Leadping API.
     * @param FeedbackType|null $value Value to set for the type property.
    */
    public function setType(?FeedbackType $value): void {
        $this->type = $value;
    }

    /**
     * Sets the userAgent property value. Browser or client user agent captured when this feedback item response was submitted.
     * @param string|null $value Value to set for the userAgent property.
    */
    public function setUserAgent(?string $value): void {
        $this->userAgent = $value;
    }

    /**
     * Sets the userDisplayNameSnapshot property value. User display name snapshot captured when the user submitted the feedback.
     * @param string|null $value Value to set for the userDisplayNameSnapshot property.
    */
    public function setUserDisplayNameSnapshot(?string $value): void {
        $this->userDisplayNameSnapshot = $value;
    }

    /**
     * Sets the userEmailSnapshot property value. User email snapshot captured when the user submitted the feedback.
     * @param string|null $value Value to set for the userEmailSnapshot property.
    */
    public function setUserEmailSnapshot(?string $value): void {
        $this->userEmailSnapshot = $value;
    }

    /**
     * Sets the userId property value. User ID for the person who submitted the feedback.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->userId = $value;
    }

}
