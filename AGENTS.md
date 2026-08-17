# AGENTS.md

This file is the operating guide for coding agents working in the public Leadping PHP SDK repository. Follow it together with `CONTRIBUTING.md`, `SECURITY.md`, `composer.json`, and established PHP conventions.

## Repository purpose

This repository contains the official PHP client for the Leadping API. Microsoft Kiota generates the client from Leadping’s OpenAPI contract. Applications own authentication, credential storage, retry behavior, transport configuration, and logging.

Authoritative public resources:

- API contract: <https://leadping.ai/docs/openapi.json>
- API documentation: <https://leadping.ai/docs/api-reference>
- Authentication discovery: <https://leadping.ai/auth.md>
- Security reporting: `SECURITY.md`

## Understand the change before editing

Endpoint paths, schemas, required fields, and response behavior belong in the upstream API/OpenAPI contract. Generated request builders, models, serializers, parsers, and `LeadpingOpenApiClient.php` should be regenerated from the corrected contract. Documentation, examples, Composer metadata, workflows, and contributor files are maintained here.

If correct OpenAPI produces invalid PHP, identify the Kiota generator issue and keep any temporary workaround narrow and documented. Avoid unrelated regeneration, formatting, or dependency churn.

## PHP conventions

- Preserve the supported PHP version and PSR-4 namespace from `composer.json`.
- Preserve Kiota promises, interfaces, parse-node behavior, serialization contracts, and error mappings.
- Do not introduce another HTTP or serialization layer alongside the Kiota bundle.
- Treat public namespaces, classes, methods, and Composer package metadata as compatibility-sensitive.

## Authentication and examples

Send Leadping credentials as `Authorization: Bearer <credential>`. Never commit or log real user tokens, WorkOS agent assertions or refresh tokens, organization API keys, or source keys. Examples must use nonfunctional values, retrieve secrets outside source control, and explain when a returned promise must be awaited.

## Validation

For PHP, autoloading, dependency, or package metadata changes, run:

```bash
composer validate --strict
composer install --no-interaction
composer dump-autoload --strict-psr
```

Run the repository’s relevant test command when tests are present. Documentation-only changes normally need link, spelling, and example review rather than dependency installation.

Before handing off, inspect `git diff`, explain generated changes and dependency changes, update usage documentation when behavior changes, and report checks run plus anything not validated.

## Releases and security

Do not create tags, change release workflows, or publish to Packagist unless explicitly authorized. Follow `SECURITY.md` for private vulnerability reporting.
