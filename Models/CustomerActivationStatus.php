<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CustomerActivationStatus extends Enum {
    public const DRAFT_ONBOARDING = "DraftOnboarding";
    public const PAYMENT_METHOD_PENDING = "PaymentMethodPending";
    public const PAYMENT_METHOD_CONFIRMED = "PaymentMethodConfirmed";
    public const SUBSCRIPTION_PENDING = "SubscriptionPending";
    public const SUBSCRIPTION_RECEIVED = "SubscriptionReceived";
    public const SUBSCRIPTION_ACTIVE = "SubscriptionActive";
    public const LAUNCH_REVIEW_PENDING = "LaunchReviewPending";
    public const TELEPHONY_PROVISIONING_PENDING = "TelephonyProvisioningPending";
    public const TELEPHONY_PARTIALLY_PROVISIONED = "TelephonyPartiallyProvisioned";
    public const TELEPHONY_READY = "TelephonyReady";
    public const AWAITING_REVIEW = "AwaitingReview";
    public const DOMAIN_SELECTION = "DomainSelection";
    public const WEBSITE_SETUP = "WebsiteSetup";
    public const COMPLIANCE_REGISTRATION = "ComplianceRegistration";
    public const READY_FOR_APPROVAL = "ReadyForApproval";
    public const ACTIVE = "Active";
    public const FAILED = "Failed";
    public const BLOCKED = "Blocked";
    public const BLOCKED_REQUIRES_OPERATOR_ACTION = "BlockedRequiresOperatorAction";
    public const MANUALLY_BYPASSED = "ManuallyBypassed";
}
