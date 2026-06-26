<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TransactionType extends Enum {
    public const DEBIT = "Debit";
    public const ADJUSTMENT = "Adjustment";
    public const DEPOSIT = "Deposit";
}
