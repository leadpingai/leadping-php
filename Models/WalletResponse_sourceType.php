<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class WalletResponse_sourceType extends Enum {
    public const PURCHASE = "purchase";
    public const PROMO = "promo";
    public const ADMIN_ADJUSTMENT = "admin_adjustment";
    public const REFUND_ADJUSTMENT = "refund_adjustment";
    public const MIGRATION = "migration";
    public const CHARGEBACK_REVERSAL = "chargeback_reversal";
    public const COMPROMISE_RESTORATION = "compromise_restoration";
}
