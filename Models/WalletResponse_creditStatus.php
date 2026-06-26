<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WalletResponse_creditStatus extends Enum {
    public const ACTIVE = "active";
    public const CONSUMED = "consumed";
    public const EXPIRED = "expired";
    public const REFUNDED = "refunded";
    public const VOIDED = "voided";
    public const DISPUTED = "disputed";
}
