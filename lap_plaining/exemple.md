---
marp: true
theme: default
paginate: true
size: 16:9
---

<style>

/* @theme dark-terminal */

:root {
  --bg: #0d1117;
  --bg-2: #010409;
  --surface: #161b22;
  --border: #30363d;
  --text: #c9d1d9;
  --muted: #8b949e;
  --green: #3fb950;
  --amber: #f0b429;
  --blue: #58a6ff;
  --pink: #ff7b9c;
}

/* GENERAL */
section {
  background:
    linear-gradient(rgba(63, 185, 80, 0.035) 1px, transparent 1px),
    linear-gradient(90deg, rgba(63, 185, 80, 0.035) 1px, transparent 1px),
    var(--bg);
  background-size: 32px 32px, 32px 32px, auto;
  color: var(--text);
  font-family: "JetBrains Mono", "Fira Code", Consolas, "Courier New", monospace;
  font-size: 16px;
  line-height: 1.4;
  padding: 44px 58px;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

/* HEADINGS */
h1 {
  color: #ffffff;
  font-size: 2em;
  font-weight: 700;
  margin: 0 0 20px;
}

h1::before {
  content: "# ";
  color: var(--green);
}

h2 {
  color: #ffffff;
  font-size: 1.4em;
  font-weight: 700;
  margin: 0 0 18px;
  padding-bottom: 10px;
  border-bottom: 1px dashed var(--border);
}

h2::before {
  content: "## ";
  color: var(--green);
}

h3 {
  color: var(--blue);
  font-size: 1.05em;
  font-weight: 700;
  margin: 10px 0 6px;
}

h3::before {
  content: "› ";
  color: var(--amber);
}

/* TEXT */
p {
  margin: 8px 0;
}

strong {
  color: var(--amber);
  font-weight: 700;
}

em {
  color: var(--pink);
  font-style: normal;
}

/* LISTS */
ul, ol {
  padding-left: 24px;
  margin: 8px 0;
}

ul {
  list-style: none;
}

ul li::before {
  content: "$ ";
  color: var(--green);
  margin-left: -22px;
  margin-right: 6px;
}

ol li::marker {
  color: var(--green);
  font-weight: 700;
}

li {
  margin-bottom: 6px;
}

/* LINKS */
a {
  color: var(--blue);
  text-decoration: underline;
  text-decoration-style: dotted;
}

/* INLINE CODE */
code {
  background: rgba(88, 166, 255, 0.15);
  color: var(--blue);
  padding: 2px 6px;
  border-radius: 4px;
  font-family: inherit;
  font-size: 0.9em;
}

/* CODE BLOCKS */
pre {
  background: var(--bg-2);
  color: #7ee787;
  border: 1px solid var(--border);
  border-left: 3px solid var(--green);
  border-radius: 6px;
  padding: 12px 16px;
  font-size: 0.72em;
  line-height: 1.45;
  white-space: pre-wrap;
  overflow-wrap: anywhere;
}

pre code {
  background: transparent;
  color: #7ee787;
  padding: 0;
  font-size: 1em;
}

/* TABLES */
table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.85em;
  margin-top: 10px;
  border: 1px solid var(--border);
}

th {
  background: var(--surface);
  color: var(--green);
  font-weight: 700;
  text-align: left;
  padding: 10px;
  border-bottom: 2px solid var(--green);
}

td {
  background: var(--bg);
  color: var(--text);
  padding: 9px 10px;
  border-bottom: 1px solid var(--border);
}

tr:nth-child(even) td {
  background: var(--surface);
}

/* BLOCKQUOTES */
blockquote {
  background: rgba(240, 180, 41, 0.08);
  border: 1px solid rgba(240, 180, 41, 0.35);
  border-left: 4px solid var(--amber);
  color: var(--text);
  padding: 12px 18px;
  margin: 14px 0;
  border-radius: 6px;
}

/* PANELS = EDITOR WINDOWS */
.panel {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: 10px;
  padding: 40px 18px 14px;
  position: relative;
  box-shadow: 0 10px 28px rgba(0, 0, 0, 0.45);
}

.panel::before {
  content: "";
  position: absolute;
  top: 14px;
  left: 16px;
  width: 11px;
  height: 11px;
  border-radius: 50%;
  background: #ff5f56;
  box-shadow: 19px 0 0 #ffbd2e, 38px 0 0 #27c93f;
}

.panel::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 38px;
  border-bottom: 1px solid var(--border);
  background: rgba(255, 255, 255, 0.02);
  border-radius: 10px 10px 0 0;
  z-index: 0;
}

.panel h3 {
  color: var(--blue);
}

/* GRID */
.columns {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 20px;
  align-items: stretch;
}

/* TAG + SMALL TEXT */
.tag {
  display: inline-block;
  font-size: 0.72em;
  font-weight: 700;
  letter-spacing: 0.15em;
  color: var(--green);
  border: 1px solid var(--green);
  background: rgba(63, 185, 80, 0.1);
  padding: 5px 14px;
  border-radius: 4px;
  margin-bottom: 18px;
}

.tag::before {
  content: "> ";
}

.small {
  font-size: 0.8em;
  color: var(--muted);
}

/* COVER */
section.cover {
  background:
    radial-gradient(circle at 50% 0%, rgba(63, 185, 80, 0.18), transparent 55%),
    linear-gradient(rgba(63, 185, 80, 0.05) 1px, transparent 1px),
    linear-gradient(90deg, rgba(63, 185, 80, 0.05) 1px, transparent 1px),
    var(--bg-2);
  background-size: auto, 32px 32px, 32px 32px, auto;
  justify-content: center;
  text-align: center;
  align-items: center;
}

section.cover h1 {
  color: #ffffff;
  font-size: 2.7em;
  margin-bottom: 8px;
}

section.cover h2 {
  color: var(--amber);
  border: none;
  font-size: 1.15em;
  font-weight: 400;
  padding-bottom: 0;
}

section.cover h2::before {
  content: "// ";
  color: var(--muted);
}

section.cover p {
  color: var(--text);
}

section.cover strong {
  color: var(--green);
}

/* CLOSING SLIDE */
section.closing {
  background:
    radial-gradient(circle at 50% 100%, rgba(240, 180, 41, 0.15), transparent 55%),
    linear-gradient(rgba(240, 180, 41, 0.04) 1px, transparent 1px),
    linear-gradient(90deg, rgba(240, 180, 41, 0.04) 1px, transparent 1px),
    var(--bg-2);
  background-size: auto, 32px 32px, 32px 32px, auto;
  justify-content: center;
  text-align: center;
  align-items: center;
}

section.closing h1,
section.closing h2 {
  color: #ffffff;
  border: none;
}

section.closing h3 {
  color: var(--green);
}

section.closing h3::before {
  content: "";
}

section.closing strong {
  color: var(--amber);
}

section.closing ul {
  text-align: left;
}

/* SLIDE NUMBER */
section::after {
  color: var(--muted);
  font-size: 12px;
}

/* COMPACT SLIDES */
section.compact {
  font-size: 14px;
  padding: 35px 48px;
}

section.compact h2 {
  margin-bottom: 12px;
}

section.compact li {
  margin-bottom: 3px;
}

section.compact pre {
  font-size: 0.65em;
  padding: 8px 12px;
}

section.compact .panel {
  padding: 36px 12px 9px;
}

/* FIX: lisibilité dyal code blocks (override highlight.js) */
pre code,
pre code * {
  color: #7ee787 !important;
  background: transparent !important;
  opacity: 1 !important;
}

/* tokens b couleurs claires */
pre code .hljs-section,
pre code .hljs-title,
pre code .hljs-keyword,
pre code .hljs-built_in {
  color: #79c0ff !important;
  font-weight: 700;
}

pre code .hljs-strong {
  color: #f0b429 !important;
  font-weight: 700;
}

pre code .hljs-emphasis {
  color: #ff9bb3 !important;
  font-style: italic;
}

pre code .hljs-deletion {
  color: #ffa198 !important;
  text-decoration: line-through;
}

pre code .hljs-string,
pre code .hljs-bullet,
pre code .hljs-number,
pre code .hljs-literal {
  color: #ffd580 !important;
}

pre code .hljs-link,
pre code .hljs-attr,
pre code .hljs-name {
  color: #a5d6ff !important;
}

pre code .hljs-comment,
pre code .hljs-quote {
  color: #8b949e !important;
  font-style: italic;
}

/* chwiya dyal glow bach l-code yban */
pre {
  background: #010409 !important;
  text-shadow: 0 0 1px rgba(126, 231, 135, 0.25);
}

</style>



<!-- _class: cover -->

<p class="tag">TECHNICAL LAB · MARKUP LANGUAGE</p>

# Introduction to Markdown

## Learning and Using a Lightweight Markup Language

<br>

**Learner:** Mounir L Maimouni

**Supervisor:** E-sseraj Fouad

<br>

<p class="small">Technical Lab · 2026</p>

---

## Agenda

<div class="columns">
<div class="panel">

### 01 — Introduction
What is Markdown?

### 02 — Technical Stack
Tools used in this Lab.

### 03 — Definitions
Important Markdown concepts.

</div>
<div class="panel">

### 04 — Problem & Need
Why do we need Markdown?

### 05 — Solution & Practice
Creating and formatting documents.

### 06 — Results & Conclusion
What we achieved and learned.

</div>
</div>

---


## Introduction
Markdown simplifies technical documentation by making content easier to write, organize, and share.

## Technical Stack

The Markdown Lab uses different tools to create, edit, preview, and share documentation.

<div class="columns">
<div class="panel">

### Main Technology

**Markdown**

A lightweight markup language used to format plain text.

### Development Tools

- Visual Studio Code — Text editor.
- Markdown Preview — Displays formatted documents.
- Marp — Creates presentations using Markdown.

</div>
<div class="panel">

### Version Control & Sharing

- Git — Tracks changes in files.
- GitHub — Hosts and shares repositories.

### Their Purpose

These tools make it easier to write documentation, visualize its formatting, manage changes, and share documents.

</div>
</div>

---

## Important Definitions

<div class="columns">
<div class="panel">

### 01 — Markdown

A lightweight markup language used to format plain text into structured and readable documents.

### 02 — Markdown File

A text file that uses the `.md` extension.

### 03 — Heading

Used to organize content into titles and subtitles.

```markdown
# Main Title
## Section
### Subsection
```

</div>
<div class="panel">

### 04 — List

Used to organize information into ordered or unordered items.

```markdown
- HTML
- CSS
- JavaScript
```

### 05 — Code Block

Used to display programming code.

```javascript
console.log("Hello World");
```

### 06 — README.md

A file that explains a project's description, features, installation, and usage.

</div>
</div>

---

## Problem and Need

### The Problem

When creating technical documentation, information can become difficult to organize and understand.

Without a clear structure:

- Documents may be difficult to read.
- Important information can be hard to find.
- Code examples may not be displayed clearly.
- Sharing documentation can become less convenient.

### The Need

We need a simple way to write, organize, and share technical documents.

<blockquote>
<strong>Why Markdown?</strong><br>
Markdown provides a simple solution for creating structured documents using readable text and easy formatting syntax.
</blockquote>

---

## Solution & Practice — Formatting Documents

### Step 1 — Create a Markdown File

Create a file named `README.md` using Visual Studio Code.

### Step 2 — Create Headings

```markdown
# Project Documentation

## Introduction

### Project Objectives
```

### Step 3 — Format Text

```markdown
**Bold text**

*Italic text*

~~Strikethrough text~~
```

### Step 4 — Create Lists

```markdown
- First item
- Second item

1. First step
2. Second step
```

**Objective:** Learn how to organize and format information using Markdown syntax.

---

## Solution & Practice — Advanced Elements and Tests

### Step 5 — Add Links and Images

```markdown
[Visit GitHub](https://github.com)

![Project Image](images/project.png)
```

### Step 6 — Display Code

```javascript
function sayHello() {
    console.log("Hello World");
}
```

### Step 7 — Create a Table

```markdown
| Technology | Role |
|---|---|
| HTML | Structure |
| CSS | Styling |
| JavaScript | Interactivity |
```

### Step 8 — Preview and Test

- Open Markdown Preview in VS Code.
- Check headings, lists, and text formatting.
- Verify links and image paths.
- Check code blocks and tables.
- Save the document and upload it to GitHub.

**Objective:** Practice Markdown features and verify the final document.

---

<!-- _class: closing -->

# Results & Conclusion

## Final Results

- Created and formatted a Markdown document.
- Organized information using headings and lists.
- Added links, images, code blocks, and tables.
- Previewed the document in Visual Studio Code.
- Learned how to share Markdown files through GitHub.

<br>

### Acquired Skills

Markdown Syntax · Document Formatting · Technical Documentation · VS Code Preview · Git & GitHub

<br>

Markdown makes technical documentation simple, structured, readable, and easy to share.

<br>

**Thank You for Your Attention!**