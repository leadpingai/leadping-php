<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ActivationPaymentStatus extends Enum {
    public const PAYMENT_METHOD_PENDING = "PaymentMethodPending";
    public const PAYMENT_METHOD_CONFIRMED = "PaymentMethodConfirmed";
    public const FAILED = "Failed";
}
