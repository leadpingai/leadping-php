<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Describes a mobile push installation. Identity and Azure tags are derived by the API.
*/
class PushInstallationRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $appBuild The application build number reported by the client.
    */
    private ?string $appBuild = null;
    
    /**
     * @var string|null $appIdentifier The application bundle identifier or package name.
    */
    private ?string $appIdentifier = null;
    
    /**
     * @var string|null $appName The human-readable application name reported by the client.
    */
    private ?string $appName = null;
    
    /**
     * @var string|null $appVersion The semantic application version reported by the client.
    */
    private ?string $appVersion = null;
    
    /**
     * @var string|null $deviceModel The device model reported by the client.
    */
    private ?string $deviceModel = null;
    
    /**
     * @var string|null $devicePlatform The mobile operating-system platform reported by the device.
    */
    private ?string $devicePlatform = null;
    
    /**
     * @var string|null $deviceVersion The mobile operating-system version reported by the device.
    */
    private ?string $deviceVersion = null;
    
    /**
     * @var string|null $installationId The stable installation identifier assigned by the mobile client.
    */
    private ?string $installationId = null;
    
    /**
     * @var PushInstallationRequest_metadata|null $metadata Optional client metadata stored with the push installation.
    */
    private ?PushInstallationRequest_metadata $metadata = null;
    
    /**
     * @var string|null $platform The Azure Notification Hubs platform name, such as apns or fcmv1.
    */
    private ?string $platform = null;
    
    /**
     * @var string|null $pushChannel The provider-issued push token or channel used to deliver notifications.
    */
    private ?string $pushChannel = null;
    
    /**
     * Instantiates a new PushInstallationRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PushInstallationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PushInstallationRequest {
        return new PushInstallationRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the appBuild property value. The application build number reported by the client.
     * @return string|null
    */
    public function getAppBuild(): ?string {
        return $this->appBuild;
    }

    /**
     * Gets the appIdentifier property value. The application bundle identifier or package name.
     * @return string|null
    */
    public function getAppIdentifier(): ?string {
        return $this->appIdentifier;
    }

    /**
     * Gets the appName property value. The human-readable application name reported by the client.
     * @return string|null
    */
    public function getAppName(): ?string {
        return $this->appName;
    }

    /**
     * Gets the appVersion property value. The semantic application version reported by the client.
     * @return string|null
    */
    public function getAppVersion(): ?string {
        return $this->appVersion;
    }

    /**
     * Gets the deviceModel property value. The device model reported by the client.
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->deviceModel;
    }

    /**
     * Gets the devicePlatform property value. The mobile operating-system platform reported by the device.
     * @return string|null
    */
    public function getDevicePlatform(): ?string {
        return $this->devicePlatform;
    }

    /**
     * Gets the deviceVersion property value. The mobile operating-system version reported by the device.
     * @return string|null
    */
    public function getDeviceVersion(): ?string {
        return $this->deviceVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appBuild' => fn(ParseNode $n) => $o->setAppBuild($n->getStringValue()),
            'appIdentifier' => fn(ParseNode $n) => $o->setAppIdentifier($n->getStringValue()),
            'appName' => fn(ParseNode $n) => $o->setAppName($n->getStringValue()),
            'appVersion' => fn(ParseNode $n) => $o->setAppVersion($n->getStringValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            'devicePlatform' => fn(ParseNode $n) => $o->setDevicePlatform($n->getStringValue()),
            'deviceVersion' => fn(ParseNode $n) => $o->setDeviceVersion($n->getStringValue()),
            'installationId' => fn(ParseNode $n) => $o->setInstallationId($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([PushInstallationRequest_metadata::class, 'createFromDiscriminatorValue'])),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getStringValue()),
            'pushChannel' => fn(ParseNode $n) => $o->setPushChannel($n->getStringValue()),
        ];
    }

    /**
     * Gets the installationId property value. The stable installation identifier assigned by the mobile client.
     * @return string|null
    */
    public function getInstallationId(): ?string {
        return $this->installationId;
    }

    /**
     * Gets the metadata property value. Optional client metadata stored with the push installation.
     * @return PushInstallationRequest_metadata|null
    */
    public function getMetadata(): ?PushInstallationRequest_metadata {
        return $this->metadata;
    }

    /**
     * Gets the platform property value. The Azure Notification Hubs platform name, such as apns or fcmv1.
     * @return string|null
    */
    public function getPlatform(): ?string {
        return $this->platform;
    }

    /**
     * Gets the pushChannel property value. The provider-issued push token or channel used to deliver notifications.
     * @return string|null
    */
    public function getPushChannel(): ?string {
        return $this->pushChannel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appBuild', $this->getAppBuild());
        $writer->writeStringValue('appIdentifier', $this->getAppIdentifier());
        $writer->writeStringValue('appName', $this->getAppName());
        $writer->writeStringValue('appVersion', $this->getAppVersion());
        $writer->writeStringValue('deviceModel', $this->getDeviceModel());
        $writer->writeStringValue('devicePlatform', $this->getDevicePlatform());
        $writer->writeStringValue('deviceVersion', $this->getDeviceVersion());
        $writer->writeStringValue('installationId', $this->getInstallationId());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('platform', $this->getPlatform());
        $writer->writeStringValue('pushChannel', $this->getPushChannel());
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
     * Sets the appBuild property value. The application build number reported by the client.
     * @param string|null $value Value to set for the appBuild property.
    */
    public function setAppBuild(?string $value): void {
        $this->appBuild = $value;
    }

    /**
     * Sets the appIdentifier property value. The application bundle identifier or package name.
     * @param string|null $value Value to set for the appIdentifier property.
    */
    public function setAppIdentifier(?string $value): void {
        $this->appIdentifier = $value;
    }

    /**
     * Sets the appName property value. The human-readable application name reported by the client.
     * @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value): void {
        $this->appName = $value;
    }

    /**
     * Sets the appVersion property value. The semantic application version reported by the client.
     * @param string|null $value Value to set for the appVersion property.
    */
    public function setAppVersion(?string $value): void {
        $this->appVersion = $value;
    }

    /**
     * Sets the deviceModel property value. The device model reported by the client.
     * @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value): void {
        $this->deviceModel = $value;
    }

    /**
     * Sets the devicePlatform property value. The mobile operating-system platform reported by the device.
     * @param string|null $value Value to set for the devicePlatform property.
    */
    public function setDevicePlatform(?string $value): void {
        $this->devicePlatform = $value;
    }

    /**
     * Sets the deviceVersion property value. The mobile operating-system version reported by the device.
     * @param string|null $value Value to set for the deviceVersion property.
    */
    public function setDeviceVersion(?string $value): void {
        $this->deviceVersion = $value;
    }

    /**
     * Sets the installationId property value. The stable installation identifier assigned by the mobile client.
     * @param string|null $value Value to set for the installationId property.
    */
    public function setInstallationId(?string $value): void {
        $this->installationId = $value;
    }

    /**
     * Sets the metadata property value. Optional client metadata stored with the push installation.
     * @param PushInstallationRequest_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?PushInstallationRequest_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the platform property value. The Azure Notification Hubs platform name, such as apns or fcmv1.
     * @param string|null $value Value to set for the platform property.
    */
    public function setPlatform(?string $value): void {
        $this->platform = $value;
    }

    /**
     * Sets the pushChannel property value. The provider-issued push token or channel used to deliver notifications.
     * @param string|null $value Value to set for the pushChannel property.
    */
    public function setPushChannel(?string $value): void {
        $this->pushChannel = $value;
    }

}
