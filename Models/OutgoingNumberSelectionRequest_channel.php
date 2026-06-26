<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OutgoingNumberSelectionRequest_channel extends Enum {
    public const SMS = "sms";
    public const CALL = "call";
}
