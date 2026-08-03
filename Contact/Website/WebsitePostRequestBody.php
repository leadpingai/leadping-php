<?php

namespace Leadping\OpenApiClient\Contact\Website;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WebsitePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $companyWebsite The CompanyWebsite property
    */
    private ?string $companyWebsite = null;
    
    /**
     * @var string|null $email The Email property
    */
    private ?string $email = null;
    
    /**
     * @var string|null $message The Message property
    */
    private ?string $message = null;
    
    /**
     * @var string|null $name The Name property
    */
    private ?string $name = null;
    
    /**
     * @var string|null $phone The Phone property
    */
    private ?string $phone = null;
    
    /**
     * @var string|null $returnUrl The ReturnUrl property
    */
    private ?string $returnUrl = null;
    
    /**
     * @var bool|null $smsConsent The SmsConsent property
    */
    private ?bool $smsConsent = null;
    
    /**
     * Instantiates a new WebsitePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebsitePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebsitePostRequestBody {
        return new WebsitePostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the CompanyWebsite property value. The CompanyWebsite property
     * @return string|null
    */
    public function getCompanyWebsite(): ?string {
        return $this->companyWebsite;
    }

    /**
     * Gets the Email property value. The Email property
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'CompanyWebsite' => fn(ParseNode $n) => $o->setCompanyWebsite($n->getStringValue()),
            'Email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'Message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'Name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'Phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'ReturnUrl' => fn(ParseNode $n) => $o->setReturnUrl($n->getStringValue()),
            'SmsConsent' => fn(ParseNode $n) => $o->setSmsConsent($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the Message property value. The Message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the Name property value. The Name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the Phone property value. The Phone property
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the ReturnUrl property value. The ReturnUrl property
     * @return string|null
    */
    public function getReturnUrl(): ?string {
        return $this->returnUrl;
    }

    /**
     * Gets the SmsConsent property value. The SmsConsent property
     * @return bool|null
    */
    public function getSmsConsent(): ?bool {
        return $this->smsConsent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('CompanyWebsite', $this->getCompanyWebsite());
        $writer->writeStringValue('Email', $this->getEmail());
        $writer->writeStringValue('Message', $this->getMessage());
        $writer->writeStringValue('Name', $this->getName());
        $writer->writeStringValue('Phone', $this->getPhone());
        $writer->writeStringValue('ReturnUrl', $this->getReturnUrl());
        $writer->writeBooleanValue('SmsConsent', $this->getSmsConsent());
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
     * Sets the CompanyWebsite property value. The CompanyWebsite property
     * @param string|null $value Value to set for the CompanyWebsite property.
    */
    public function setCompanyWebsite(?string $value): void {
        $this->companyWebsite = $value;
    }

    /**
     * Sets the Email property value. The Email property
     * @param string|null $value Value to set for the Email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the Message property value. The Message property
     * @param string|null $value Value to set for the Message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the Name property value. The Name property
     * @param string|null $value Value to set for the Name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the Phone property value. The Phone property
     * @param string|null $value Value to set for the Phone property.
    */
    public function setPhone(?string $value): void {
        $this->phone = $value;
    }

    /**
     * Sets the ReturnUrl property value. The ReturnUrl property
     * @param string|null $value Value to set for the ReturnUrl property.
    */
    public function setReturnUrl(?string $value): void {
        $this->returnUrl = $value;
    }

    /**
     * Sets the SmsConsent property value. The SmsConsent property
     * @param bool|null $value Value to set for the SmsConsent property.
    */
    public function setSmsConsent(?bool $value): void {
        $this->smsConsent = $value;
    }

}
