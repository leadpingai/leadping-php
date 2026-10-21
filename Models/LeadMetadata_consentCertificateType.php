<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LeadMetadata_consentCertificateType extends Enum {
    public const TRUSTED_FORM = "TrustedForm";
    public const LEADPING = "Leadping";
    public const OTHER = "Other";
}
