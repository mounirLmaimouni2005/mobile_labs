
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
  margin-top: 0;
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
  font-size: 2.4em;
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

pre {
  background: #010409 !important;
  text-shadow: 0 0 1px rgba(126, 231, 135, 0.25);
}

</style>


# LAB — Preparing and Presenting a Technical Lab

## 1. Introduction

Presenting a technical Lab allows us to explain the work completed, the tools used, and the skills acquired.

To make it easier to present the different Labs of the technical project, we need a simple, clear, and common structure.

This structure can be adapted according to the topic and objectives of each Lab.

## 2. Objective of the Generic Plan

The objective of this plan is to define a common structure for presenting all technical Labs.

It helps to:

- Organize information clearly.
- Present the technologies and tools used.
- Explain problems and solutions.
- Show the practical steps of the work.
- Present the results and acquired skills.

## 3. Generic Presentation Plan

The presentation of a technical Lab is organized into seven parts:

### Slide 1 — Cover Page

**Content:**
- Lab title.
- Learner's first and last name.
- Supervisor's name.

**Explanation:**

This slide introduces the Lab and provides the main information about the learner and the supervisor.

### Slide 2 — Agenda

**Content:**
- Presentation of the different parts of the Lab.

**Explanation:**

This slide gives an overview of the presentation. It allows the audience to know which topics will be covered.

### Slide 3 — Technical Stack

**Content:**
- Technologies used.
- Tools used.
- Role of each technology or tool.

**Explanation:**

This section presents the technical environment required to complete the Lab. It explains why each technology or tool is used.

### Slide 4 — Definitions

**Content:**
- Definitions of important terms.
- Explanation of the main concepts.
- Presentation of technical concepts related to the topic.

**Explanation:**

This slide helps the audience understand the essential concepts before moving to the practical part.

### Slide 5 — Problem and Need

**Content:**
- Presentation of the problem.
- Identification of the need.
- Explanation of the Lab's purpose.

**Explanation:**

This section explains the problem we want to solve and why this Lab is necessary to address that need.

### Slide 6 — Solution and Practice

**Content:**
- Presentation of the solution.
- Implementation steps.
- Practical examples.
- Tests performed.

**Explanation:**

This slide shows how the work was completed. It presents the different steps, examples, and tests used to verify the solution.

### Slide 7 — Results and Conclusion

**Content:**
- Presentation of the final result.
- Summary of the completed work.
- Acquired skills and knowledge.
- General conclusion.

**Explanation:**

This final section presents the results obtained and summarizes the main things learned during the Lab.

## 4. Adapting the Plan to Each Lab

This plan is a general structure. It can be adapted according to the nature and objectives of each Lab.

For example:

- A Lab focused on a tool can emphasize its installation, configuration, and usage.
- A Lab focused on a technology can present its concepts, features, and practical examples.
- A Lab focused on a methodology can explain its principles and the steps involved in applying it.

The number and content of examples can also vary depending on the required work.

## 5. Conclusion

The generic plan helps standardize the presentation of technical Labs while keeping the possibility of adapting it to each topic.

