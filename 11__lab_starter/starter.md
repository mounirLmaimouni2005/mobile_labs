---
marp: true
paginate: true
theme: default
---

# Development Environment



**Sujet : Development Environment Lab**

---

## Lab Plan

1. Problems encountered during the lab
2. Showing hidden files and folders
3. Configuring VS Code extensions
4. Understanding the role of an IDE
5. Best practices for extension management

---

## Problems Encountered

- Hidden files and folders, such as `.git`, were not visible in the file explorer.
- The `.md` file extension was not displayed as expected.
- Completing file paths manually could lead to mistakes.
- Identifying errors directly in the code was not always easy.
- Tracking code changes and remembering unfinished tasks could be difficult.

---

<!-- _class: light -->

## Solutions Implemented

### 01 — Show hidden files

Enabled the relevant file-explorer setting so hidden files and folders, including `.git`, could be seen.

### 02 — Display .md extension

Adjusted the relevant VS Code option or system setting so `.md` appeared in the explorer.

### 03 — Improve code navigation and tracking

Configured four VS Code extensions to improve productivity and code organization.

---

## 01 — Path Intellisense

### Problem

Writing file paths manually can lead to spelling mistakes and incorrect references.

### Solution

**Path Intellisense** suggests file and folder paths while writing code.

### Practical demonstration

```html
<link rel="stylesheet" href="css/">
```

When completing the path, the extension can suggest available files, such as `style.css`.

### Result

- Faster file navigation
- Fewer path-related mistakes
- Easier file referencing

---

## 02 — Error Lens

### Problem

Errors and warnings can be difficult to notice when they appear only in the Problems panel.

### Solution

**Error Lens** displays diagnostic messages directly beside the relevant lines of code.

### Practical demonstration

```javascript
const username = "Mounir";

console.log(usernme);
```

The misspelled variable `usernme` can trigger a diagnostic when a suitable JavaScript diagnostic provider detects it.

### Result

- Errors become easier to notice.
- Debugging becomes more convenient.
- Problems can be identified closer to the affected code.

**Note:** Error Lens displays diagnostics provided by other tools; it does not detect every error by itself.

---

## 03 — GitLens

### Problem

When working on a project, it can be difficult to know who modified a line and which commit introduced the change.

### Solution

**GitLens** provides additional Git information inside Visual Studio Code.

### Practical demonstration

- Open a Git repository.
- Select a line of code.
- Inspect its Git blame information.
- Explore the file history and related commits.

### Result

- Better understanding of code changes
- Easier investigation of previous modifications
- Improved collaboration within a team

---

## 04 — Todo Tree

### Problem

Important reminders and unfinished tasks can be forgotten when they are scattered across different files.

### Solution

**Todo Tree** collects comments containing keywords such as `TODO` and `FIXME` into a dedicated tree view.

### Practical demonstration

```javascript
// TODO: Validate the form before submitting.

// FIXME: Handle the API error correctly.
```

Open the Todo Tree view to find these comments across the project.

### Result

- Unfinished tasks become easier to find.
- Code reminders are centralized.
- Project organization improves.

---

## What Is an IDE?

An **IDE** (Integrated Development Environment) brings the tools for building software together in one workspace.

- **Editor:** write and organize code
- **Terminal:** run commands without leaving the workspace
- **Debugger:** find and fix problems
- **Extensions:** add tools for a language or task

Visual Studio Code is a code editor that becomes an IDE-like workspace through its built-in tools and extensions.

---

## Configure a VS Code Extension

1. Open **Extensions** with `Ctrl + Shift + X`.
2. Search for the extension you need and check its publisher and description.
3. Select **Install**, then follow any setup instructions.
4. Open the extension's page or **Settings** to adjust its options.
5. Choose **User** settings for your account or **Workspace** settings for this project.

Example: install Live Server, then use its extension page/settings to choose how it launches your local web page.

---

## Keep Extensions Useful

- Install only extensions that support your work.
- Review an extension's settings after installing it.
- Disable or uninstall extensions you no longer use.
- Share project-specific settings with teammates when they improve consistency.
- Verify that each extension works correctly in your development environment.

---

## Conclusion

Configuring Visual Studio Code and choosing suitable extensions can improve the development workflow.

- **Path Intellisense:** assists with file paths.
- **Error Lens:** displays diagnostics inline.
- **GitLens:** helps explore Git history and code changes.
- **Todo Tree:** organizes unfinished tasks and reminders.

**Final objective:** create a more organized, efficient, and comfortable development environment.




