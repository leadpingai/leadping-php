<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BusinessInvitationStatus extends Enum {
    public const PENDING = "Pending";
    public const ACCEPTED = "Accepted";
    public const EXPIRED = "Expired";
    public const REVOKED = "Revoked";
    public const RESENT = "Resent";
    public const FAILED_TO_SEND = "Failed to send";
}
