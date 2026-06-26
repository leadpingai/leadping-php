<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * API DTO containing business compliance policy data used by Leadping API contracts.
*/
class BusinessCompliancePolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $allowedProducts The allowed products included with this business compliance policy.
    */
    private ?array $allowedProducts = null;
    
    /**
     * @var array<string>|null $allowedStates The allowed states included with this business compliance policy.
    */
    private ?array $allowedStates = null;
    
    /**
     * @var bool|null $enabled Whether this business compliance policy is enabled.
    */
    private ?bool $enabled = null;
    
    /**
     * @var bool|null $requireAgentLicenseState Whether this business compliance policy requires agent license state.
    */
    private ?bool $requireAgentLicenseState = null;
    
    /**
     * @var bool|null $requireLeadState Whether this business compliance policy requires lead state.
    */
    private ?bool $requireLeadState = null;
    
    /**
     * @var bool|null $requireProduct Whether this business compliance policy requires product.
    */
    private ?bool $requireProduct = null;
    
    /**
     * @var bool|null $requireSourceComplianceApproval Whether this business compliance policy requires source compliance approval.
    */
    private ?bool $requireSourceComplianceApproval = null;
    
    /**
     * @var bool|null $requireTrustedFormForAutomations Whether this business compliance policy requires TrustedForm for automations.
    */
    private ?bool $requireTrustedFormForAutomations = null;
    
    /**
     * Instantiates a new BusinessCompliancePolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessCompliancePolicy {
        return new BusinessCompliancePolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedProducts property value. The allowed products included with this business compliance policy.
     * @return array<string>|null
    */
    public function getAllowedProducts(): ?array {
        return $this->allowedProducts;
    }

    /**
     * Gets the allowedStates property value. The allowed states included with this business compliance policy.
     * @return array<string>|null
    */
    public function getAllowedStates(): ?array {
        return $this->allowedStates;
    }

    /**
     * Gets the enabled property value. Whether this business compliance policy is enabled.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedProducts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedProducts($val);
            },
            'allowedStates' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedStates($val);
            },
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'requireAgentLicenseState' => fn(ParseNode $n) => $o->setRequireAgentLicenseState($n->getBooleanValue()),
            'requireLeadState' => fn(ParseNode $n) => $o->setRequireLeadState($n->getBooleanValue()),
            'requireProduct' => fn(ParseNode $n) => $o->setRequireProduct($n->getBooleanValue()),
            'requireSourceComplianceApproval' => fn(ParseNode $n) => $o->setRequireSourceComplianceApproval($n->getBooleanValue()),
            'requireTrustedFormForAutomations' => fn(ParseNode $n) => $o->setRequireTrustedFormForAutomations($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the requireAgentLicenseState property value. Whether this business compliance policy requires agent license state.
     * @return bool|null
    */
    public function getRequireAgentLicenseState(): ?bool {
        return $this->requireAgentLicenseState;
    }

    /**
     * Gets the requireLeadState property value. Whether this business compliance policy requires lead state.
     * @return bool|null
    */
    public function getRequireLeadState(): ?bool {
        return $this->requireLeadState;
    }

    /**
     * Gets the requireProduct property value. Whether this business compliance policy requires product.
     * @return bool|null
    */
    public function getRequireProduct(): ?bool {
        return $this->requireProduct;
    }

    /**
     * Gets the requireSourceComplianceApproval property value. Whether this business compliance policy requires source compliance approval.
     * @return bool|null
    */
    public function getRequireSourceComplianceApproval(): ?bool {
        return $this->requireSourceComplianceApproval;
    }

    /**
     * Gets the requireTrustedFormForAutomations property value. Whether this business compliance policy requires TrustedForm for automations.
     * @return bool|null
    */
    public function getRequireTrustedFormForAutomations(): ?bool {
        return $this->requireTrustedFormForAutomations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('allowedProducts', $this->getAllowedProducts());
        $writer->writeCollectionOfPrimitiveValues('allowedStates', $this->getAllowedStates());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeBooleanValue('requireAgentLicenseState', $this->getRequireAgentLicenseState());
        $writer->writeBooleanValue('requireLeadState', $this->getRequireLeadState());
        $writer->writeBooleanValue('requireProduct', $this->getRequireProduct());
        $writer->writeBooleanValue('requireSourceComplianceApproval', $this->getRequireSourceComplianceApproval());
        $writer->writeBooleanValue('requireTrustedFormForAutomations', $this->getRequireTrustedFormForAutomations());
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
     * Sets the allowedProducts property value. The allowed products included with this business compliance policy.
     * @param array<string>|null $value Value to set for the allowedProducts property.
    */
    public function setAllowedProducts(?array $value): void {
        $this->allowedProducts = $value;
    }

    /**
     * Sets the allowedStates property value. The allowed states included with this business compliance policy.
     * @param array<string>|null $value Value to set for the allowedStates property.
    */
    public function setAllowedStates(?array $value): void {
        $this->allowedStates = $value;
    }

    /**
     * Sets the enabled property value. Whether this business compliance policy is enabled.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->enabled = $value;
    }

    /**
     * Sets the requireAgentLicenseState property value. Whether this business compliance policy requires agent license state.
     * @param bool|null $value Value to set for the requireAgentLicenseState property.
    */
    public function setRequireAgentLicenseState(?bool $value): void {
        $this->requireAgentLicenseState = $value;
    }

    /**
     * Sets the requireLeadState property value. Whether this business compliance policy requires lead state.
     * @param bool|null $value Value to set for the requireLeadState property.
    */
    public function setRequireLeadState(?bool $value): void {
        $this->requireLeadState = $value;
    }

    /**
     * Sets the requireProduct property value. Whether this business compliance policy requires product.
     * @param bool|null $value Value to set for the requireProduct property.
    */
    public function setRequireProduct(?bool $value): void {
        $this->requireProduct = $value;
    }

    /**
     * Sets the requireSourceComplianceApproval property value. Whether this business compliance policy requires source compliance approval.
     * @param bool|null $value Value to set for the requireSourceComplianceApproval property.
    */
    public function setRequireSourceComplianceApproval(?bool $value): void {
        $this->requireSourceComplianceApproval = $value;
    }

    /**
     * Sets the requireTrustedFormForAutomations property value. Whether this business compliance policy requires TrustedForm for automations.
     * @param bool|null $value Value to set for the requireTrustedFormForAutomations property.
    */
    public function setRequireTrustedFormForAutomations(?bool $value): void {
        $this->requireTrustedFormForAutomations = $value;
    }

}
