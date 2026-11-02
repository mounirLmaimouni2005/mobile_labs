---
trigger: always_on
---


## 1. Project Context
- TechSwap Morocco is a Moroccan marketplace for second-hand electronics.
- Buyers and guests can browse listings, filter by category, city, and price, view details, and contact sellers through WhatsApp.
- Sellers can manage their own listings and mark them as available or sold.
- Do not implement cart, checkout, or online payments.

## 2. Architecture
- The legacy `src/` directory must remain unchanged during migration unless explicitly authorized.
- Keep the new application separated into `backend/` and `frontend/`.
- The backend must use native PHP OOP and PDO.
- The frontend must use HTML, CSS, and vanilla JavaScript.
- Do not introduce frameworks or unnecessary dependencies.
- Both frontend and backend run on the same Apache host; do not add unnecessary CORS configuration.

## 3. Database and Security
- Use the existing `techswap_morocco` database and inspect its actual schema before writing queries.
- Preserve existing tables and data unless a database change is explicitly requested.
- Use PDO prepared statements for queries involving external input.
- Validate all incoming data on the server.
- Never expose database credentials or sensitive configuration in frontend code.
- Enforce authentication and authorization on protected endpoints.
- Sellers must only create, update, or delete their own listings.
- Admin operations must be restricted to authorized administrators.

## 4. API Standards
- Follow the existing API structure and naming conventions.
- Use appropriate HTTP methods: GET, POST, PUT/PATCH, and DELETE.
- Use real HTTP DELETE requests; do not use `_method` overrides.
- Return consistent JSON responses with appropriate HTTP status codes.
- Handle invalid input, unauthorized requests, missing resources, and server errors.
- Never return raw PHP warnings, stack traces, or database credentials to clients.

## 5. Coding Standards
- Inspect relevant files before making changes.
- Reuse existing classes, configuration, and patterns whenever appropriate.
- Keep classes and functions focused and readable.
- Avoid duplicated code, unnecessary abstractions, and unrelated refactoring.
- Do not overwrite working functionality to implement a new feature.
- Do not invent database columns, project requirements, or existing functionality.

## 6. Working Procedure
- Understand the requested task before coding.
- Identify the relevant files and dependencies.
- Make a concise implementation plan for complex changes.
- Implement only the requested scope.
- Run available tests or checks after making changes.
- Fix issues introduced by the changes.
- Report modified files, actual test results, and remaining problems.
- Never claim that a feature or test works without verifying it.

## 7. Change Control
- Preserve the existing project architecture.
- Ask for authorization before modifying legacy files or changing the database schema.
- Do not install new packages unless they are necessary.
- Do not delete files or data without explicit authorization.
- Prefer small, reviewable changes over large rewrites.