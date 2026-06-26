<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * Public Leadping API schema for lead demographic profile data.
*/
class LeadProfile implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Date|null $birthDate Lead birth date used for demographic matching and insurance intake workflows.
    */
    private ?Date $birthDate = null;
    
    /**
     * @var LeadProfile_employmentType|null $employmentType Defines the supported Employment Type values.
    */
    private ?LeadProfile_employmentType $employmentType = null;
    
    /**
     * @var LeadProfile_gender|null $gender Represents a gender classification used for demographic or identification purposes.
    */
    private ?LeadProfile_gender $gender = null;
    
    /**
     * @var bool|null $hasBankruptcy Indicates whether the lead reported bankruptcy history.
    */
    private ?bool $hasBankruptcy = null;
    
    /**
     * @var bool|null $hasMedicalCondition Indicates whether the lead reported a medical condition relevant to qualification.
    */
    private ?bool $hasMedicalCondition = null;
    
    /**
     * @var bool|null $isHomeowner Indicates whether the lead owns their home.
    */
    private ?bool $isHomeowner = null;
    
    /**
     * @var LeadProfile_maritalStatus|null $maritalStatus Defines the supported Marital Status Type values.
    */
    private ?LeadProfile_maritalStatus $maritalStatus = null;
    
    /**
     * Instantiates a new LeadProfile and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadProfile {
        return new LeadProfile();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the birthDate property value. Lead birth date used for demographic matching and insurance intake workflows.
     * @return Date|null
    */
    public function getBirthDate(): ?Date {
        return $this->birthDate;
    }

    /**
     * Gets the employmentType property value. Defines the supported Employment Type values.
     * @return LeadProfile_employmentType|null
    */
    public function getEmploymentType(): ?LeadProfile_employmentType {
        return $this->employmentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'birthDate' => fn(ParseNode $n) => $o->setBirthDate($n->getDateValue()),
            'employmentType' => fn(ParseNode $n) => $o->setEmploymentType($n->getEnumValue(LeadProfile_employmentType::class)),
            'gender' => fn(ParseNode $n) => $o->setGender($n->getEnumValue(LeadProfile_gender::class)),
            'hasBankruptcy' => fn(ParseNode $n) => $o->setHasBankruptcy($n->getBooleanValue()),
            'hasMedicalCondition' => fn(ParseNode $n) => $o->setHasMedicalCondition($n->getBooleanValue()),
            'isHomeowner' => fn(ParseNode $n) => $o->setIsHomeowner($n->getBooleanValue()),
            'maritalStatus' => fn(ParseNode $n) => $o->setMaritalStatus($n->getEnumValue(LeadProfile_maritalStatus::class)),
        ];
    }

    /**
     * Gets the gender property value. Represents a gender classification used for demographic or identification purposes.
     * @return LeadProfile_gender|null
    */
    public function getGender(): ?LeadProfile_gender {
        return $this->gender;
    }

    /**
     * Gets the hasBankruptcy property value. Indicates whether the lead reported bankruptcy history.
     * @return bool|null
    */
    public function getHasBankruptcy(): ?bool {
        return $this->hasBankruptcy;
    }

    /**
     * Gets the hasMedicalCondition property value. Indicates whether the lead reported a medical condition relevant to qualification.
     * @return bool|null
    */
    public function getHasMedicalCondition(): ?bool {
        return $this->hasMedicalCondition;
    }

    /**
     * Gets the isHomeowner property value. Indicates whether the lead owns their home.
     * @return bool|null
    */
    public function getIsHomeowner(): ?bool {
        return $this->isHomeowner;
    }

    /**
     * Gets the maritalStatus property value. Defines the supported Marital Status Type values.
     * @return LeadProfile_maritalStatus|null
    */
    public function getMaritalStatus(): ?LeadProfile_maritalStatus {
        return $this->maritalStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('birthDate', $this->getBirthDate());
        $writer->writeEnumValue('employmentType', $this->getEmploymentType());
        $writer->writeEnumValue('gender', $this->getGender());
        $writer->writeBooleanValue('hasBankruptcy', $this->getHasBankruptcy());
        $writer->writeBooleanValue('hasMedicalCondition', $this->getHasMedicalCondition());
        $writer->writeBooleanValue('isHomeowner', $this->getIsHomeowner());
        $writer->writeEnumValue('maritalStatus', $this->getMaritalStatus());
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
     * Sets the birthDate property value. Lead birth date used for demographic matching and insurance intake workflows.
     * @param Date|null $value Value to set for the birthDate property.
    */
    public function setBirthDate(?Date $value): void {
        $this->birthDate = $value;
    }

    /**
     * Sets the employmentType property value. Defines the supported Employment Type values.
     * @param LeadProfile_employmentType|null $value Value to set for the employmentType property.
    */
    public function setEmploymentType(?LeadProfile_employmentType $value): void {
        $this->employmentType = $value;
    }

    /**
     * Sets the gender property value. Represents a gender classification used for demographic or identification purposes.
     * @param LeadProfile_gender|null $value Value to set for the gender property.
    */
    public function setGender(?LeadProfile_gender $value): void {
        $this->gender = $value;
    }

    /**
     * Sets the hasBankruptcy property value. Indicates whether the lead reported bankruptcy history.
     * @param bool|null $value Value to set for the hasBankruptcy property.
    */
    public function setHasBankruptcy(?bool $value): void {
        $this->hasBankruptcy = $value;
    }

    /**
     * Sets the hasMedicalCondition property value. Indicates whether the lead reported a medical condition relevant to qualification.
     * @param bool|null $value Value to set for the hasMedicalCondition property.
    */
    public function setHasMedicalCondition(?bool $value): void {
        $this->hasMedicalCondition = $value;
    }

    /**
     * Sets the isHomeowner property value. Indicates whether the lead owns their home.
     * @param bool|null $value Value to set for the isHomeowner property.
    */
    public function setIsHomeowner(?bool $value): void {
        $this->isHomeowner = $value;
    }

    /**
     * Sets the maritalStatus property value. Defines the supported Marital Status Type values.
     * @param LeadProfile_maritalStatus|null $value Value to set for the maritalStatus property.
    */
    public function setMaritalStatus(?LeadProfile_maritalStatus $value): void {
        $this->maritalStatus = $value;
    }

}
