[![](https://img.shields.io/packagist/v/leadpingai/sdk.svg?style=for-the-badge)](https://packagist.org/packages/leadpingai/sdk)
[![](https://img.shields.io/github/actions/workflow/status/leadpingai/leadping-php/release.yml?style=for-the-badge)](https://github.com/leadpingai/leadping-php/actions/workflows/release.yml)
[![](https://img.shields.io/packagist/dt/leadpingai/sdk.svg?style=for-the-badge)](https://packagist.org/packages/leadpingai/sdk)
[![](https://img.shields.io/github/actions/workflow/status/leadpingai/leadping-php/codeql.yml?label=CodeQL&style=for-the-badge)](https://github.com/leadpingai/leadping-php/actions/workflows/codeql.yml)

# ![Leadping](https://leadping.ai/favicon.ico) Leadping PHP SDK

Type-safe PHP client for the Leadping API.

## Install

```bash
composer require leadpingai/sdk
```

The generated client uses a Kiota request adapter. Install the Kiota bundle in the application that will call Leadping:

```bash
composer require microsoft/kiota-bundle:^2.0.2
```

## Use

```php
<?php

use Leadping\OpenApiClient\LeadpingOpenApiClient;

$adapter = createLeadpingRequestAdapter();
$client = new LeadpingOpenApiClient($adapter);

$me = $client->users()->me()->get()->wait();
```

`createLeadpingRequestAdapter` is application code. Configure it to send one of:

- `Authorization: Bearer <token>`
- `X-Leadping-Api-Key: <key>`

The client defaults to `https://api.leadping.ai` when the adapter does not already have a base URL.

## Links

- [Documentation](https://leadping.ai/docs)
- [API reference](https://leadping.ai/docs/api-reference)
- [License](LICENSE)
