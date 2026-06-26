<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class FeedbackStatus extends Enum {
    public const NEW = "new";
    public const REVIEWED = "reviewed";
    public const PLANNED = "planned";
    public const IN_PROGRESS = "in_progress";
    public const SHIPPED = "shipped";
    public const CLOSED = "closed";
    public const IGNORED = "ignored";
}
