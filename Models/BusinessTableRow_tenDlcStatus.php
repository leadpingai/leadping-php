<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BusinessTableRow_tenDlcStatus extends Enum {
    public const NOT_STARTED = "NotStarted";
    public const DRAFT_GENERATED = "DraftGenerated";
    public const DRAFT_NEEDS_ADMIN_REVIEW = "DraftNeedsAdminReview";
    public const READY_TO_SUBMIT = "ReadyToSubmit";
    public const SUBMITTED = "Submitted";
    public const PENDING_TELNYX_REVIEW = "PendingTelnyxReview";
    public const APPROVED = "Approved";
    public const REJECTED = "Rejected";
    public const NEEDS_CHANGES = "NeedsChanges";
    public const RESUBMISSION_READY = "ResubmissionReady";
    public const FAILED = "Failed";
}
