<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Optional consumer qualification details for workflows that need them.
*/
class LeadQualification implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $creditScore Exact credit score supplied by the intake source; not a range.
    */
    private ?int $creditScore = null;
    
    /**
     * @var LeadQualification_employmentType|null $employmentType Classifies a lead's reported employment arrangement for qualification and demographic workflows.
    */
    private ?LeadQualification_employmentType $employmentType = null;
    
    /**
     * @var bool|null $hasBankruptcy Indicates whether the lead reported bankruptcy history.
    */
    private ?bool $hasBankruptcy = null;
    
    /**
     * @var bool|null $hasMedicalCondition Indicates whether the lead reported a medical condition relevant to qualification.
    */
    private ?bool $hasMedicalCondition = null;
    
    /**
     * @var int|null $height Height in inches.
    */
    private ?int $height = null;
    
    /**
     * @var int|null $income Annual income amount in the specified IncomeCurrency.
    */
    private ?int $income = null;
    
    /**
     * @var string|null $incomeCurrency ISO 4217 currency code for annual income.
    */
    private ?string $incomeCurrency = null;
    
    /**
     * @var bool|null $isHomeowner Indicates whether the lead owns their home.
    */
    private ?bool $isHomeowner = null;
    
    /**
     * @var LeadQualification_maritalStatus|null $maritalStatus Classifies a lead's reported marital status when required by a qualification or integration workflow.
    */
    private ?LeadQualification_maritalStatus $maritalStatus = null;
    
    /**
     * @var int|null $monthsAtResidence Number of months the lead has lived at the current residence.
    */
    private ?int $monthsAtResidence = null;
    
    /**
     * @var int|null $numberOfDependents Number of dependents reported by the lead.
    */
    private ?int $numberOfDependents = null;
    
    /**
     * @var int|null $weight Body weight in pounds.
    */
    private ?int $weight = null;
    
    /**
     * Instantiates a new LeadQualification and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LeadQualification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LeadQualification {
        return new LeadQualification();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the creditScore property value. Exact credit score supplied by the intake source; not a range.
     * @return int|null
    */
    public function getCreditScore(): ?int {
        return $this->creditScore;
    }

    /**
     * Gets the employmentType property value. Classifies a lead's reported employment arrangement for qualification and demographic workflows.
     * @return LeadQualification_employmentType|null
    */
    public function getEmploymentType(): ?LeadQualification_employmentType {
        return $this->employmentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'creditScore' => fn(ParseNode $n) => $o->setCreditScore($n->getIntegerValue()),
            'employmentType' => fn(ParseNode $n) => $o->setEmploymentType($n->getEnumValue(LeadQualification_employmentType::class)),
            'hasBankruptcy' => fn(ParseNode $n) => $o->setHasBankruptcy($n->getBooleanValue()),
            'hasMedicalCondition' => fn(ParseNode $n) => $o->setHasMedicalCondition($n->getBooleanValue()),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            'income' => fn(ParseNode $n) => $o->setIncome($n->getIntegerValue()),
            'incomeCurrency' => fn(ParseNode $n) => $o->setIncomeCurrency($n->getStringValue()),
            'isHomeowner' => fn(ParseNode $n) => $o->setIsHomeowner($n->getBooleanValue()),
            'maritalStatus' => fn(ParseNode $n) => $o->setMaritalStatus($n->getEnumValue(LeadQualification_maritalStatus::class)),
            'monthsAtResidence' => fn(ParseNode $n) => $o->setMonthsAtResidence($n->getIntegerValue()),
            'numberOfDependents' => fn(ParseNode $n) => $o->setNumberOfDependents($n->getIntegerValue()),
            'weight' => fn(ParseNode $n) => $o->setWeight($n->getIntegerValue()),
        ];
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
     * Gets the height property value. Height in inches.
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * Gets the income property value. Annual income amount in the specified IncomeCurrency.
     * @return int|null
    */
    public function getIncome(): ?int {
        return $this->income;
    }

    /**
     * Gets the incomeCurrency property value. ISO 4217 currency code for annual income.
     * @return string|null
    */
    public function getIncomeCurrency(): ?string {
        return $this->incomeCurrency;
    }

    /**
     * Gets the isHomeowner property value. Indicates whether the lead owns their home.
     * @return bool|null
    */
    public function getIsHomeowner(): ?bool {
        return $this->isHomeowner;
    }

    /**
     * Gets the maritalStatus property value. Classifies a lead's reported marital status when required by a qualification or integration workflow.
     * @return LeadQualification_maritalStatus|null
    */
    public function getMaritalStatus(): ?LeadQualification_maritalStatus {
        return $this->maritalStatus;
    }

    /**
     * Gets the monthsAtResidence property value. Number of months the lead has lived at the current residence.
     * @return int|null
    */
    public function getMonthsAtResidence(): ?int {
        return $this->monthsAtResidence;
    }

    /**
     * Gets the numberOfDependents property value. Number of dependents reported by the lead.
     * @return int|null
    */
    public function getNumberOfDependents(): ?int {
        return $this->numberOfDependents;
    }

    /**
     * Gets the weight property value. Body weight in pounds.
     * @return int|null
    */
    public function getWeight(): ?int {
        return $this->weight;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('creditScore', $this->getCreditScore());
        $writer->writeEnumValue('employmentType', $this->getEmploymentType());
        $writer->writeBooleanValue('hasBankruptcy', $this->getHasBankruptcy());
        $writer->writeBooleanValue('hasMedicalCondition', $this->getHasMedicalCondition());
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeIntegerValue('income', $this->getIncome());
        $writer->writeStringValue('incomeCurrency', $this->getIncomeCurrency());
        $writer->writeBooleanValue('isHomeowner', $this->getIsHomeowner());
        $writer->writeEnumValue('maritalStatus', $this->getMaritalStatus());
        $writer->writeIntegerValue('monthsAtResidence', $this->getMonthsAtResidence());
        $writer->writeIntegerValue('numberOfDependents', $this->getNumberOfDependents());
        $writer->writeIntegerValue('weight', $this->getWeight());
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
     * Sets the creditScore property value. Exact credit score supplied by the intake source; not a range.
     * @param int|null $value Value to set for the creditScore property.
    */
    public function setCreditScore(?int $value): void {
        $this->creditScore = $value;
    }

    /**
     * Sets the employmentType property value. Classifies a lead's reported employment arrangement for qualification and demographic workflows.
     * @param LeadQualification_employmentType|null $value Value to set for the employmentType property.
    */
    public function setEmploymentType(?LeadQualification_employmentType $value): void {
        $this->employmentType = $value;
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
     * Sets the height property value. Height in inches.
     * @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value): void {
        $this->height = $value;
    }

    /**
     * Sets the income property value. Annual income amount in the specified IncomeCurrency.
     * @param int|null $value Value to set for the income property.
    */
    public function setIncome(?int $value): void {
        $this->income = $value;
    }

    /**
     * Sets the incomeCurrency property value. ISO 4217 currency code for annual income.
     * @param string|null $value Value to set for the incomeCurrency property.
    */
    public function setIncomeCurrency(?string $value): void {
        $this->incomeCurrency = $value;
    }

    /**
     * Sets the isHomeowner property value. Indicates whether the lead owns their home.
     * @param bool|null $value Value to set for the isHomeowner property.
    */
    public function setIsHomeowner(?bool $value): void {
        $this->isHomeowner = $value;
    }

    /**
     * Sets the maritalStatus property value. Classifies a lead's reported marital status when required by a qualification or integration workflow.
     * @param LeadQualification_maritalStatus|null $value Value to set for the maritalStatus property.
    */
    public function setMaritalStatus(?LeadQualification_maritalStatus $value): void {
        $this->maritalStatus = $value;
    }

    /**
     * Sets the monthsAtResidence property value. Number of months the lead has lived at the current residence.
     * @param int|null $value Value to set for the monthsAtResidence property.
    */
    public function setMonthsAtResidence(?int $value): void {
        $this->monthsAtResidence = $value;
    }

    /**
     * Sets the numberOfDependents property value. Number of dependents reported by the lead.
     * @param int|null $value Value to set for the numberOfDependents property.
    */
    public function setNumberOfDependents(?int $value): void {
        $this->numberOfDependents = $value;
    }

    /**
     * Sets the weight property value. Body weight in pounds.
     * @param int|null $value Value to set for the weight property.
    */
    public function setWeight(?int $value): void {
        $this->weight = $value;
    }

}
