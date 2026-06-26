<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ActivationTelephonyStatus extends Enum {
    public const NOT_STARTED = "NotStarted";
    public const PROVISIONING_PENDING = "ProvisioningPending";
    public const PARTIALLY_PROVISIONED = "PartiallyProvisioned";
    public const READY = "Ready";
    public const FAILED = "Failed";
    public const BLOCKED_REQUIRES_OPERATOR_ACTION = "BlockedRequiresOperatorAction";
}
