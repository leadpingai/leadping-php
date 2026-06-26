<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UsageRecordStatus extends Enum {
    public const RECORDED = "recorded";
    public const RATED = "rated";
    public const PENDING_INVOICE = "pending_invoice";
    public const INVOICED = "invoiced";
    public const CHARGED = "charged";
    public const FAILED = "failed";
    public const REFUNDED_CREDITED = "refunded_credited";
    public const NON_BILLABLE_INTERNAL = "non_billable_internal";
    public const BLOCKED_DUE_TO_BILLING = "blocked_due_to_billing";
}
