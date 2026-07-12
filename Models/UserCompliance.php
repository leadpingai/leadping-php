<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * API DTO containing user compliance data used by Leadping API contracts.
*/
class UserCompliance implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $acceptedBaa Whether the user accepted BAA for this user compliance.
    */
    private ?bool $acceptedBaa = null;
    
    /**
     * @var bool|null $acceptedEmail Whether the user accepted email for this user compliance.
    */
    private ?bool $acceptedEmail = null;
    
    /**
     * @var bool|null $acceptedSms Whether the user accepted SMS for this user compliance.
    */
    private ?bool $acceptedSms = null;
    
    /**
     * @var bool|null $acceptedTerms Whether the user accepted terms for this user compliance.
    */
    private ?bool $acceptedTerms = null;
    
    /**
     * @var bool|null $acceptedToSubscription Whether the user accepted subscription for this user compliance.
    */
    private ?bool $acceptedToSubscription = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<TrustedFormCertificate>|null $trustedFormCertificates The TrustedForm certificates included with this user compliance.
    */
    private ?array $trustedFormCertificates = null;
    
    /**
     * Instantiates a new UserCompliance and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserCompliance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserCompliance {
        return new UserCompliance();
    }

    /**
     * Gets the acceptedBaa property value. Whether the user accepted BAA for this user compliance.
     * @return bool|null
    */
    public function getAcceptedBaa(): ?bool {
        return $this->acceptedBaa;
    }

    /**
     * Gets the acceptedEmail property value. Whether the user accepted email for this user compliance.
     * @return bool|null
    */
    public function getAcceptedEmail(): ?bool {
        return $this->acceptedEmail;
    }

    /**
     * Gets the acceptedSms property value. Whether the user accepted SMS for this user compliance.
     * @return bool|null
    */
    public function getAcceptedSms(): ?bool {
        return $this->acceptedSms;
    }

    /**
     * Gets the acceptedTerms property value. Whether the user accepted terms for this user compliance.
     * @return bool|null
    */
    public function getAcceptedTerms(): ?bool {
        return $this->acceptedTerms;
    }

    /**
     * Gets the acceptedToSubscription property value. Whether the user accepted subscription for this user compliance.
     * @return bool|null
    */
    public function getAcceptedToSubscription(): ?bool {
        return $this->acceptedToSubscription;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acceptedBaa' => fn(ParseNode $n) => $o->setAcceptedBaa($n->getBooleanValue()),
            'acceptedEmail' => fn(ParseNode $n) => $o->setAcceptedEmail($n->getBooleanValue()),
            'acceptedSms' => fn(ParseNode $n) => $o->setAcceptedSms($n->getBooleanValue()),
            'acceptedTerms' => fn(ParseNode $n) => $o->setAcceptedTerms($n->getBooleanValue()),
            'acceptedToSubscription' => fn(ParseNode $n) => $o->setAcceptedToSubscription($n->getBooleanValue()),
            'trustedFormCertificates' => fn(ParseNode $n) => $o->setTrustedFormCertificates($n->getCollectionOfObjectValues([TrustedFormCertificate::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the trustedFormCertificates property value. The TrustedForm certificates included with this user compliance.
     * @return array<TrustedFormCertificate>|null
    */
    public function getTrustedFormCertificates(): ?array {
        return $this->trustedFormCertificates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('acceptedBaa', $this->getAcceptedBaa());
        $writer->writeBooleanValue('acceptedEmail', $this->getAcceptedEmail());
        $writer->writeBooleanValue('acceptedSms', $this->getAcceptedSms());
        $writer->writeBooleanValue('acceptedTerms', $this->getAcceptedTerms());
        $writer->writeBooleanValue('acceptedToSubscription', $this->getAcceptedToSubscription());
        $writer->writeCollectionOfObjectValues('trustedFormCertificates', $this->getTrustedFormCertificates());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the acceptedBaa property value. Whether the user accepted BAA for this user compliance.
     * @param bool|null $value Value to set for the acceptedBaa property.
    */
    public function setAcceptedBaa(?bool $value): void {
        $this->acceptedBaa = $value;
    }

    /**
     * Sets the acceptedEmail property value. Whether the user accepted email for this user compliance.
     * @param bool|null $value Value to set for the acceptedEmail property.
    */
    public function setAcceptedEmail(?bool $value): void {
        $this->acceptedEmail = $value;
    }

    /**
     * Sets the acceptedSms property value. Whether the user accepted SMS for this user compliance.
     * @param bool|null $value Value to set for the acceptedSms property.
    */
    public function setAcceptedSms(?bool $value): void {
        $this->acceptedSms = $value;
    }

    /**
     * Sets the acceptedTerms property value. Whether the user accepted terms for this user compliance.
     * @param bool|null $value Value to set for the acceptedTerms property.
    */
    public function setAcceptedTerms(?bool $value): void {
        $this->acceptedTerms = $value;
    }

    /**
     * Sets the acceptedToSubscription property value. Whether the user accepted subscription for this user compliance.
     * @param bool|null $value Value to set for the acceptedToSubscription property.
    */
    public function setAcceptedToSubscription(?bool $value): void {
        $this->acceptedToSubscription = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the trustedFormCertificates property value. The TrustedForm certificates included with this user compliance.
     * @param array<TrustedFormCertificate>|null $value Value to set for the trustedFormCertificates property.
    */
    public function setTrustedFormCertificates(?array $value): void {
        $this->trustedFormCertificates = $value;
    }

}
