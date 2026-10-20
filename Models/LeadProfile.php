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
     * @var LeadProfile_gender|null $gender Classifies a lead's self-reported gender when required by a qualification, demographic, or integration workflow.
    */
    private ?LeadProfile_gender $gender = null;
    
    /**
     * @var LeadProfile_qualification|null $qualification Optional consumer qualification details for workflows that need them.
    */
    private ?LeadProfile_qualification $qualification = null;
    
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'birthDate' => fn(ParseNode $n) => $o->setBirthDate($n->getDateValue()),
            'gender' => fn(ParseNode $n) => $o->setGender($n->getEnumValue(LeadProfile_gender::class)),
            'qualification' => fn(ParseNode $n) => $o->setQualification($n->getObjectValue([LeadProfile_qualification::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the gender property value. Classifies a lead's self-reported gender when required by a qualification, demographic, or integration workflow.
     * @return LeadProfile_gender|null
    */
    public function getGender(): ?LeadProfile_gender {
        return $this->gender;
    }

    /**
     * Gets the qualification property value. Optional consumer qualification details for workflows that need them.
     * @return LeadProfile_qualification|null
    */
    public function getQualification(): ?LeadProfile_qualification {
        return $this->qualification;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('birthDate', $this->getBirthDate());
        $writer->writeEnumValue('gender', $this->getGender());
        $writer->writeObjectValue('qualification', $this->getQualification());
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
     * Sets the gender property value. Classifies a lead's self-reported gender when required by a qualification, demographic, or integration workflow.
     * @param LeadProfile_gender|null $value Value to set for the gender property.
    */
    public function setGender(?LeadProfile_gender $value): void {
        $this->gender = $value;
    }

    /**
     * Sets the qualification property value. Optional consumer qualification details for workflows that need them.
     * @param LeadProfile_qualification|null $value Value to set for the qualification property.
    */
    public function setQualification(?LeadProfile_qualification $value): void {
        $this->qualification = $value;
    }

}
