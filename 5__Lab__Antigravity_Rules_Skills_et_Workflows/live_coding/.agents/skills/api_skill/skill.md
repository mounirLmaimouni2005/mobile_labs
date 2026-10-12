---
name: php-api
description: Use when creating, modifying, or debugging PHP API endpoints in TechSwap Morocco.
---

# PHP API Development

## Procedure

1. Inspect the existing API structure and related classes.
2. Understand the request, HTTP method, and expected response.
3. Follow the existing PHP OOP and PDO patterns.
4. Validate request data on the server.
5. Check authentication, authorization, and listing ownership when required.
6. Return consistent JSON responses and appropriate HTTP status codes.
7. Test successful requests and relevant error cases.

## Constraints

- Use native PHP OOP; do not introduce a framework.
- Use PDO prepared statements for external input.
- Use real HTTP methods, including DELETE.
- Keep endpoints focused and avoid duplicated logic.
- Do not modify legacy src/ files during migration.