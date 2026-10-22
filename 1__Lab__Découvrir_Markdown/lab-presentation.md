---
marp: true
theme: default
paginate: true
size: 16:9
footer: "Solicode · Tanger"
style: |
  section {
    font-family: 'Segoe UI', Arial, sans-serif;
    font-size: 26px;
    color: #1f2937;
    background: #ffffff;
    padding: 50px 64px;
  }
  h1 {
    color: #0b3d91;
    border-bottom: 3px solid #f97316;
    padding-bottom: 8px;
    margin-bottom: 24px;
  }
  h2 { color: #f97316; }
  strong { color: #0b3d91; }
  code {
    background: #eef2ff;
    color: #1e3a8a;
    border-radius: 4px;
    padding: 2px 6px;
  }
  pre {
    background: #f1f5f9;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    padding: 14px;
  }
  pre code {
    background: transparent;
    color: #0f172a;
    font-size: 0.7em;
    padding: 0;
  }
  table { font-size: 0.8em; width: 100%; }
  th { background: #0b3d91; color: #ffffff; }
  footer { color: #94a3b8; font-size: 0.6em; }
  section.lead {
    background: linear-gradient(135deg, #0b3d91, #1e66d0);
    color: #ffffff;
    text-align: center;
    justify-content: center;
  }
  section.lead h1 {
    color: #ffffff;
    border: none;
    font-size: 1.9em;
  }
  section.lead h2, section.lead p, section.lead strong { color: #ffffff; }
  section.lead footer { color: #cbd5e1; }
---

<!-- _class: lead -->

# Discovering Markdown Syntax

**[Your Name]**

Solicode · [Date]

<!--
Speaker notes: Introduce this lab as a practical first look at Markdown. Replace the name and date placeholders before presenting, and briefly explain that the examples focus on common document elements.
-->

---

# Agenda

1. Goals and introduction
2. Headings, paragraphs, and lists
3. Links, images, and tables
4. Code blocks and GitHub submission

<!--
Speaker notes: Preview the short sequence: learn the purpose of Markdown, practice its basic document structure, add richer content, and prepare the requested presentation for the lab repository.
-->

---

# Objectives

- By the end, I can structure content with headings and paragraphs.
- By the end, I can format ordered and unordered lists.
- By the end, I can add links, images, and tables.
- By the end, I can display code in a fenced block.

<!--
Speaker notes: These outcomes cover every Markdown element named in the assignment. The goal is to recognize the source syntax, use it in a small document, and understand the expected rendered result.
-->

---

# Introduction

Markdown is a lightweight markup language that adds structure and formatting to plain text.

**Use case:** write a readable project guide that can be viewed as source or rendered on GitHub.

<!--
Speaker notes: Markdown keeps the source easy to edit while allowing supported tools to render headings, lists, links, and other elements. This lab assumes a Markdown-capable editor; no particular editor or operating system is required.
-->

---

# Headings, Paragraphs, and Lists

**Goal:** Organize a short note into sections and task lists.

```markdown
# Project notes

A short introduction to the project.

## Tasks
- Draft a section
- Review the document
  - Check the headings
```

**Expected result:** a main title, a section, a paragraph, and a nested bullet.

<!--
Speaker notes: A space after the hash marks makes each heading clear, and a blank line starts a new paragraph. A consistent indentation level keeps the final task nested beneath its parent list.
-->

---

# Links, Images, and Tables

**Goal:** Add a destination, an image, and a compact comparison table.

```markdown
[Markdown Guide](https://www.markdownguide.org/)
![Alt text describing the image](image-source)

| Element | Syntax | Purpose |
|:--|:--|:--|
| Link | `[text](URL)` | Open a destination |
| Image | `![alt](source)` | Show an image |
```

**Expected result:** a clickable link, an image when its source is valid, and a three-column table.

<!--
Speaker notes: The image source is a placeholder and must be replaced with a valid image URL or file location. Alt text describes the image if it cannot be seen, while the table separator row divides headings from data.
-->

---

# Fenced Code Blocks

**Goal:** Show a code sample as formatted text without executing it.

````markdown
```javascript
console.log("Hello, Markdown!");
```
````

**Expected result:** a fenced JavaScript code block appears in the rendered document.

<!--
Speaker notes: Three backticks open and close the code block, and the word javascript identifies the language for syntax highlighting. The code is displayed as an example; Markdown does not run it.
-->

---

# Deliverable and Submission

**Expected deliverable:** `lab-presentation.md`

```bash
git add lab-presentation.md
git commit -m "Add Markdown lab presentation"
git push
```

**Expected result:** the presentation is committed and pushed to the GitHub repository configured for this lab.

<!--
Speaker notes: Save the presentation in the lab folder, then stage, commit, and push it to the repository used for the assignment. The push command requires that a GitHub remote and suitable authentication are already configured.
-->

---

# Takeaways and Common Mistakes

- Keep heading levels logical and separate paragraphs with blank lines.
- Indent nested list items consistently.
- Use descriptive image text and verify destinations.
- Mistake: missing space after `#` → add one.
- Mistake: unclosed code fence → add its matching closer.

<!--
Speaker notes: Emphasize that Markdown is easiest to maintain when the source is consistent. Before submitting, preview the rendered document and check that links, image sources, table separators, and code fences are valid.
-->

---

<!-- _class: lead -->

# Questions?

<!--
Speaker notes: Invite questions about the examples or the expected rendered results. Ask learners to identify one Markdown element they are ready to use in their own documents.
-->
