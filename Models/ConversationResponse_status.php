<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConversationResponse_status extends Enum {
    public const NEEDS_REPLY = "needs_reply";
    public const WAITING = "waiting";
    public const FAILED = "failed";
    public const OPEN = "open";
}
