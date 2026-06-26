<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BillableUnit extends Enum {
    public const SMS_SEGMENT = "sms_segment";
    public const MMS_MESSAGE = "mms_message";
    public const EMAIL_MESSAGE = "email_message";
    public const VOICE_MINUTE = "voice_minute";
    public const PHONE_NUMBER_MONTH = "phone_number_month";
    public const WARMUP_SMS_SEGMENT = "warmup_sms_segment";
    public const WARMUP_VOICE_MINUTE = "warmup_voice_minute";
    public const WEBSITE_SETUP = "website_setup";
    public const DOMAIN_REGISTRATION = "domain_registration";
    public const ONE_ZERODLC_APPLICATION = "10dlc_application";
    public const CONNECTION_ACTION = "connection_action";
    public const AUTOMATION_RUN = "automation_run";
}
