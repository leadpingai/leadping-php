<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DispositionResponse_changeSource extends Enum {
    public const USER = "User";
    public const A_I = "AI";
    public const AUTOMATION = "Automation";
    public const SYSTEM = "System";
    public const A_P_I = "API";
}
