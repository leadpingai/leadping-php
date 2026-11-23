<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LeadIntakeRequest_consentCertificateType extends Enum {
    public const TRUSTED_FORM = "TrustedForm";
    public const LEADPING = "Leadping";
    public const MANUAL_VOICE = "ManualVoice";
    public const OTHER = "Other";
}
