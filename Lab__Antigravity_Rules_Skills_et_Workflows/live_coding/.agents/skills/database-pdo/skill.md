---
name: database-pdo
description: Use when inspecting the TechSwap database, writing SQL queries, or implementing database operations with PDO.
---

# Database Operations

## Procedure

1. Inspect the actual database schema before writing queries.
2. Identify the relevant tables, columns, relationships, and constraints.
3. Write clear SQL queries using PDO prepared statements.
4. Handle missing records, invalid values, and database errors.
5. Use transactions when an operation requires multiple related changes.
6. Verify the query or operation when database access is available.

## Constraints

- Do not invent tables or columns.
- Preserve existing records and relationships.
- Never expose credentials or sensitive database details.
- Do not change the schema without explicit authorization.
- Follow the existing database configuration and project patterns.