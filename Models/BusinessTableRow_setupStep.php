<?php

namespace Leadping\OpenApiClient\Models;

use Microsoft\Kiota\Abstractions\Enum;

class BusinessTableRow_setupStep extends Enum {
    public const DOMAIN_FINDING = "DomainFinding";
    public const DOMAIN_OPTIONS_FOUND = "DomainOptionsFound";
    public const SITE_GENERATING = "SiteGenerating";
    public const SITE_GENERATED = "SiteGenerated";
    public const BRAND_SUBMITTED = "BrandSubmitted";
    public const BRAND_APPROVED = "BrandApproved";
    public const CAMPAIGN_SUBMITTED = "CampaignSubmitted";
    public const CAMPAIGN_APPROVED = "CampaignApproved";
    public const CARRIER_REVIEWING = "CarrierReviewing";
    public const TEN_DLC_COMPLETE = "TenDlcComplete";
    public const COMPLETE = "Complete";
}
