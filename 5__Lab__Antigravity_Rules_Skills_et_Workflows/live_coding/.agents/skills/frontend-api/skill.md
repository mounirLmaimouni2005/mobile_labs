---
name: frontend-api
description: Use when integrating TechSwap frontend pages with backend JSON API endpoints.
---

# Frontend API Integration

## Procedure

1. Inspect the existing HTML, JavaScript, and API endpoints.
2. Use the Fetch API with the correct URL and HTTP method.
3. Send data using the expected JSON or form format.
4. Check response status before processing the result.
5. Handle loading, success, empty, and error states.
6. Update the DOM using the existing page structure.
7. Test the complete request-response flow.

## Constraints

- Use vanilla JavaScript; do not introduce a frontend framework.
- Respect the existing HTML IDs and selectors.
- Do not assume that an API response is always successful.
- Avoid unsafe insertion of untrusted HTML.
- Keep frontend and backend responsibilities separate.
- Do not add unnecessary CORS configuration for the same-origin setup.