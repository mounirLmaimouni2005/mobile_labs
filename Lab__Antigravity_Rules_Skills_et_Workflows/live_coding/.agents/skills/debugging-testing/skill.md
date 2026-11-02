---
name: debugging-testing
description: Use when investigating bugs, failed API requests, JavaScript errors, or regressions in TechSwap Morocco.
---

# Debugging and Testing

## Procedure

1. Reproduce the issue before changing code.
2. Inspect relevant source files, browser console, network responses, and PHP logs.
3. Identify the root cause rather than hiding the error.
4. Make the smallest appropriate fix.
5. Test the original failing case.
6. Check relevant success, validation, authorization, and missing-resource cases.
7. Run available checks and review the final changes.

## Constraints

- Do not rewrite unrelated files.
- Do not suppress errors simply to make tests pass.
- Do not claim a test passed unless it was executed successfully.
- Report the root cause, files changed, tests performed, and remaining issues.