[![](https://img.shields.io/packagist/v/leadpingai/sdk.svg?style=for-the-badge)](https://packagist.org/packages/leadpingai/sdk)
[![](https://img.shields.io/github/actions/workflow/status/leadpingai/leadping-php/release.yml?style=for-the-badge)](https://github.com/leadpingai/leadping-php/actions/workflows/release.yml)
[![](https://img.shields.io/packagist/dt/leadpingai/sdk.svg?style=for-the-badge)](https://packagist.org/packages/leadpingai/sdk)
[![](https://img.shields.io/github/actions/workflow/status/leadpingai/leadping-php/codeql.yml?label=CodeQL&style=for-the-badge)](https://github.com/leadpingai/leadping-php/actions/workflows/codeql.yml)

# ![Leadping](https://leadping.ai/favicon.ico) Leadping PHP SDK

The official, type-safe PHP SDK for the Leadping API. Use it to integrate lead management, conversations, SMS and calling, automations, reporting, billing, and business settings into PHP applications.

The package is generated from the [Leadping OpenAPI specification](https://leadping.ai/docs/openapi.json) with Microsoft Kiota. It contains request builders and models; your application supplies credentials, retry policy, and credential storage.

## Installation

```bash
composer require leadpingai/sdk
```

The package already depends on `microsoft/kiota-bundle`, so Composer installs the Guzzle request adapter and serializers automatically.

## Authentication

Set `LEADPING_API_KEY` to a WorkOS organization API key (`sk_...`). The SDK sends it as `Authorization: Bearer <credential>`. User access tokens are also supported when acting for a signed-in user; `lp_src_...` keys are only for lead-ingestion endpoints. See [API authentication](https://leadping.ai/docs/api-authentication).

## Create a client

The following small authentication provider attaches the Bearer credential to each Kiota request:

```php
<?php

use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Leadping\OpenApiClient\LeadpingOpenApiClient;
use Microsoft\Kiota\Abstractions\Authentication\AuthenticationProvider;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class LeadpingAuthenticationProvider implements AuthenticationProvider
{
    public function __construct(private readonly string $credential)
    {
    }

    public function authenticateRequest(
        RequestInformation $request,
        array $additionalAuthenticationContext = []
    ): Promise {
        $request->getHeaders()->tryAdd('Authorization', 'Bearer ' . $this->credential);
        return new FulfilledPromise($request);
    }
}

$credential = getenv('LEADPING_API_KEY');
if ($credential === false || $credential === '') {
    throw new RuntimeException('LEADPING_API_KEY is not set.');
}

$adapter = new GuzzleRequestAdapter(
    new LeadpingAuthenticationProvider($credential)
);
$client = new LeadpingOpenApiClient($adapter);

$lead = $client->leads()->byId('lead-id')->get()->wait();
echo $lead->getId();
```

The client defaults to `https://api.leadping.ai`.

## Common operations

Request builders mirror the API path. Methods such as `byId()` select a resource; terminal methods return promises. Call `wait()` when using the SDK synchronously.

```php
// Requires a user access token.
$currentUser = $client->users()->me()->get()->wait();

// Retrieve organization resources by ID.
$source = $client->sources()->byId('source-id')->get()->wait();
$lead = $client->leads()->byId('lead-id')->get()->wait();
```

Create and update operations accept generated request classes from `Leadping\OpenApiClient`.

## Resources

- [Leadping introduction](https://leadping.ai/docs/introduction)
- [API authentication](https://leadping.ai/docs/api-authentication)
- [API reference](https://leadping.ai/docs/api-reference)
- [OpenAPI specification](https://leadping.ai/docs/openapi.json)
- [Packagist package](https://packagist.org/packages/leadpingai/sdk)
- [License](LICENSE)
