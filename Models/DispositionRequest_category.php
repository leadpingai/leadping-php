<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DispositionRequest_category extends Enum {
    public const OPEN = "Open";
    public const QUALIFIED = "Qualified";
    public const CONVERTED = "Converted";
    public const LOST = "Lost";
    public const INVALID = "Invalid";
    public const DUPLICATE = "Duplicate";
}
