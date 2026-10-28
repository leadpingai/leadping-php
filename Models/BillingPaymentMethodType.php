<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BillingPaymentMethodType extends Enum {
    public const CARD = "card";
    public const LINK = "link";
}
