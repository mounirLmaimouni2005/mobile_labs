---
marp: true
paginate: true
theme: default
size: 16:9
---

<style>
:root {
  --navy: #0f172a;
  --teal: #0f766e;
  --accent: #14b8a6;
  --white: #ffffff;
  --text: #1e293b;
  --muted: #64748b;
  --surface: #f1f5f9;
  --border: #cbd5e1;
}

/* GENERAL */
section {
  background: #f8fafc;
  color: var(--text);
  font-family: "Segoe UI", Arial, sans-serif;
  font-size: 18px;
  line-height: 1.35;
  padding: 42px 55px;
}

/* HEADINGS */
h1 {
  color: var(--navy);
  font-size: 2.1em;
  font-weight: 750;
  margin-bottom: 20px;
}

h2 {
  color: var(--teal);
  font-size: 1.5em;
  border-bottom: 3px solid var(--accent);
  padding-bottom: 9px;
  margin-bottom: 20px;
}

h3 {
  color: var(--navy);
  font-size: 1.12em;
  margin: 12px 0 7px;
}

/* TEXT */
p {
  margin: 8px 0;
}

strong {
  color: var(--teal);
}

em {
  color: var(--muted);
}

/* LISTS */
ul, ol {
  padding-left: 28px;
  margin: 10px 0;
}

li {
  margin-bottom: 8px;
}

li::marker {
  color: var(--accent);
}

/* LINKS */
a {
  color: var(--teal);
  font-weight: 600;
}

/* INLINE CODE */
code {
  background: #ccfbf1;
  color: #115e59;
  padding: 2px 6px;
  border-radius: 4px;
  font-size: 0.85em;
}

/* CODE BLOCKS */
pre {
  background: #172554;
  color: #ffffff;
  border-left: 5px solid var(--accent);
  border-radius: 9px;
  padding: 14px 18px;
  font-size: 0.75em;
  line-height: 1.4;
  white-space: pre-wrap;
  overflow-wrap: anywhere;
}

pre code,
pre code span {
  color: #ffffff !important;
  background: transparent !important;
}

/* TABLES */
table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.82em;
  margin-top: 12px;
}

th {
  background: var(--teal);
  color: white;
  padding: 11px;
  text-align: left;
}

td {
  background: white;
  padding: 10px;
  border: 1px solid var(--border);
}

tr:nth-child(even) td {
  background: var(--surface);
}

/* BLOCKQUOTES */
blockquote {
  background: #ccfbf1;
  border-left: 5px solid var(--accent);
  padding: 12px 18px;
  color: #134e4a;
  border-radius: 6px;
}

/* SLIDE NUMBER */
section::after {
  color: var(--muted);
  font-size: 12px;
}

/* COVER */
section.cover {
  background: var(--navy);
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

section.cover h1 {
  color: white;
  font-size: 2.8em;
  border-bottom: 4px solid var(--accent);
  padding-bottom: 18px;
}

section.cover h2 {
  color: #5eead4;
  border: none;
  font-size: 1.25em;
}

section.cover p {
  color: #cbd5e1;
}


/* COVER LOGOS */
section.cover .logos {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 35px;
  margin-bottom: 25px;
}

section.cover .logos img {
  height: 75px;
  width: auto;
  max-width: 150px;
  object-fit: contain;
  background: white;
  padding: 7px 12px;
  border-radius: 8px;
}

/* CLOSING */
section.closing {
  background: var(--navy);
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

section.closing h1 {
  color: white;
}

section.closing strong {
  color: #5eead4;
}

/* COMPACT SLIDES */
section.compact {
  font-size: 16px;
  padding: 35px 48px;
}

section.compact h2 {
  margin-bottom: 12px;
}

section.compact li {
  margin-bottom: 5px;
}

section.compact pre {
  font-size: 0.68em;
  padding: 10px 14px;
}
</style>

<!-- _class: cover -->
<div class="logos">
  <img src="images/logo-OFPPT.jpg" alt="OFPPT Logo">
  <img src="images/solicodeLogo.jpg" alt="Solicode Logo">
</div>

# Development Environment

## Technical Lab

**Configuring Visual Studio Code for a Better Development Workflow**

<br>

**Presented by:** Mounir L Maimouni

**Supervised by:** E-sseraj Fouad

---

## 01 — Presentation Plan

1. Page de garde
2. Plan
3. Stack technique
4. Définitions importantes
5. Problème et besoin
6. Solution et pratique
7. Résultats et conclusion

---

## 02 — Technical Stack

The tools and technologies used during this Lab:

| Tool | Purpose |
|---|---|
| Visual Studio Code | Code editor and development workspace |
| Windows File Explorer | Manage files and folders |
| VS Code Extensions | Add useful development features |
| Git | Track project changes |
| Path Intellisense | Suggest file paths |
| Error Lens | Display diagnostics inline |
| GitLens | Explore Git history |
| Todo Tree | Organize TODO and FIXME comments |

---

## 03 — Important Definitions

**Development Environment**

A set of tools and configurations used to develop software.

**IDE (Integrated Development Environment)**

A workspace that combines tools such as an editor, terminal, and debugger.

**Extension**

An additional tool that adds features to Visual Studio Code.

**Hidden Files**

Files or folders that are not normally displayed in the file explorer.

**Git**

A version control system used to track changes in a project.

---

## 04 — Problems and Needs

During the Lab, several difficulties were identified:

- Hidden files and folders, such as `.git`, were not visible.
- The `.md` file extension was not displayed as expected.
- Writing file paths manually could lead to mistakes.
- Errors and warnings were not always easy to notice.
- Tracking code modifications and unfinished tasks was difficult.

**Main Need**

Configure the development environment to make coding, navigation, debugging, and project organization easier.

---

## 05 — Solutions and Practical Demonstrations

### Step 1 — Show Hidden Files and Folders

**Problem:** Hidden files and folders, including `.git`, were not visible.

**Solution:** Enable the display of hidden items in Windows File Explorer.

**Practical demonstration:**

1. Open File Explorer.
2. Go to **View → Show**.
3. Enable **Hidden items**.

**Result:** Hidden files and folders become visible.

---

### Step 2 — Display File Extensions

**Problem:** The `.md` extension was not displayed as expected.

**Solution:** Enable file name extensions in Windows File Explorer.

**Practical demonstration:**

1. Open File Explorer.
2. Go to **View → Show**.
3. Enable **File name extensions**.

**Result:** Extensions such as `.md`, `.html`, and `.css` become visible.

---

### Step 3 — Configure Path Intellisense

**Problem:** Writing file paths manually can lead to spelling mistakes and incorrect references.

**Solution:** Install **Path Intellisense** to suggest file and folder paths while writing code.

**Practical demonstration:**

```html
<link rel="stylesheet" href="css/">
```

The extension can suggest available files, such as `style.css`.

**Result:**

- Faster file navigation.
- Fewer path-related mistakes.
- Easier file referencing.

---

### Step 4 — Configure Error Lens

**Problem:** Errors and warnings can be difficult to notice when they appear only in the Problems panel.

**Solution:** Install **Error Lens** to display diagnostic messages beside the relevant lines of code.

**Practical demonstration:**

```javascript
const username = "Mounir";

console.log(usernme);
```

A suitable JavaScript diagnostic provider can detect the misspelled variable.

**Result:**

- Errors become easier to notice.
- Debugging becomes more convenient.
- Problems are easier to investigate.

*Note: Error Lens displays diagnostics provided by other tools; it does not detect every error by itself.*

---

### Step 5 — Configure GitLens

**Problem:** It can be difficult to know who modified a line and which commit introduced a change.

**Solution:** Install **GitLens** to explore Git information directly inside Visual Studio Code.

**Practical demonstration:**

1. Open a Git repository.
2. Select a line of code.
3. Inspect its Git blame information.
4. Explore file history and related commits.

**Result:**

- Better understanding of code changes.
- Easier investigation of previous modifications.
- Improved collaboration within a team.

---

### Step 6 — Configure Todo Tree

**Problem:** Important reminders and unfinished tasks can be forgotten when they are scattered across different files.

**Solution:** Install **Todo Tree** to collect comments containing keywords such as `TODO` and `FIXME`.

**Practical demonstration:**

```javascript
// TODO: Validate the form before submitting.

// FIXME: Handle the API error correctly.
```

Open the Todo Tree view to find these comments across the project.

**Result:**

- Unfinished tasks become easier to find.
- Code reminders are centralized.
- Project organization improves.

---

### Step 7 — Understand the Role of an IDE

An IDE brings different development tools together in one workspace.

- **Editor:** Write and organize code.
- **Terminal:** Run commands.
- **Debugger:** Find and fix problems.
- **Extensions:** Add useful features.

Visual Studio Code is a code editor that provides an IDE-like development workspace through its built-in tools and extensions.

---

## 06 — Results and Acquired Skills

After completing the Lab, the development environment became easier to use and manage.

**Results:**

- Hidden files and file extensions can be displayed.
- File navigation becomes easier.
- Code diagnostics are more visible.
- Git history can be explored inside VS Code.
- Unfinished tasks can be organized in one place.

**Skills Acquired:**

- Configure Windows File Explorer.
- Install and manage VS Code extensions.
- Understand the role of an IDE.
- Improve code navigation and project organization.

---

<!-- _class: closing -->

# Conclusion

A well-configured development environment makes software development more organized, efficient, and comfortable.

**Choosing the right tools and extensions improves the daily development workflow.**

<br>

**Thank You!**