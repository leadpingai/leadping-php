<?php

namespace Leadping\OpenApiClient\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Provides the short-lived access token and client configuration required to initialize an authenticated Leadping calling session.
*/
class TelephonyLoginResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $callbackToken Callback token for this telephony login.
    */
    private ?string $callbackToken = null;
    
    /**
     * @var DateTime|null $expiresAt UTC timestamp for expires at on this telephony login.
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var string|null $password Password for this telephony login.
    */
    private ?string $password = null;
    
    /**
     * @var string|null $username Username for this telephony login.
    */
    private ?string $username = null;
    
    /**
     * Instantiates a new TelephonyLoginResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TelephonyLoginResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TelephonyLoginResponse {
        return new TelephonyLoginResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the callbackToken property value. Callback token for this telephony login.
     * @return string|null
    */
    public function getCallbackToken(): ?string {
        return $this->callbackToken;
    }

    /**
     * Gets the expiresAt property value. UTC timestamp for expires at on this telephony login.
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expiresAt;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'callbackToken' => fn(ParseNode $n) => $o->setCallbackToken($n->getStringValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
        ];
    }

    /**
     * Gets the password property value. Password for this telephony login.
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the username property value. Username for this telephony login.
     * @return string|null
    */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('callbackToken', $this->getCallbackToken());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeStringValue('username', $this->getUsername());
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
     * Sets the callbackToken property value. Callback token for this telephony login.
     * @param string|null $value Value to set for the callbackToken property.
    */
    public function setCallbackToken(?string $value): void {
        $this->callbackToken = $value;
    }

    /**
     * Sets the expiresAt property value. UTC timestamp for expires at on this telephony login.
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the password property value. Password for this telephony login.
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->password = $value;
    }

    /**
     * Sets the username property value. Username for this telephony login.
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->username = $value;
    }

}
