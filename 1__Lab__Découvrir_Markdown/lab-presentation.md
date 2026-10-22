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

**Mounir L Maimouni**

Supervised by Fouad Serraj

Solicode · [22/10/2026]

<!--
Speaker notes: Introduce this beginner lab as a practical guide to Markdown syntax. The presentation demonstrates the requested document elements and explains what to check when their source is rendered by a Markdown viewer.
-->

---

# Plan

1. Markdown and document structure
2. Headings, paragraphs, and lists
3. Links, images, tables, and code
4. Deliver and review the document

<!--
Speaker notes: Preview the sequence from basic structure to richer document elements. Each example focuses on a small piece of Markdown so learners can copy the pattern, adapt it to their own text, and review its rendered form.
-->

---

# Objectives

- By the end, I can structure content with headings and paragraphs.
- By the end, I can format ordered and unordered lists.
- By the end, I can add links and image references.
- By the end, I can create tables and fenced code blocks.

<!--
Speaker notes: These objectives cover each syntax element required in the assignment. Learners should be able to write the source syntax and recognize the corresponding formatted result in a Markdown preview.
-->

---

# Introduction

Markdown is a lightweight way to add structure and formatting to plain text.

**Use case:** write a project README that is easy to edit and read on GitHub.

<!--
Speaker notes: Markdown is useful when a document should remain readable as plain text while also rendering with headings, lists, and other formatting. GitHub is one familiar place where Markdown documents are rendered.
-->

---

# Headings and Paragraphs

**Goal:** Create a title hierarchy and separate two paragraphs.

```markdown
# Project notes
## Overview

This project organizes useful learning notes.

Each paragraph starts after a blank line.
```

**Expected result:** one main heading, a smaller section heading, and two separate paragraphs.

<!--
Speaker notes: A number sign followed by a space creates a heading, and additional number signs indicate lower levels. A blank line separates paragraphs; keep heading levels in logical order for a clear document outline.
-->

---

# Lists, Links, and Images

**Goal:** Combine a short checklist with a link and image syntax.

```markdown
- Draft the content
- Review the formatting
  - Check the links

[GitHub](https://github.com/)
![Describe the image](image-source)
```

**Expected result:** nested bullets, a clickable link, and an image when its source is replaced with a valid one.

<!--
Speaker notes: Indent a nested bullet consistently so its relationship to the parent is clear. The image source is a placeholder, not an included image; replace it with an available image location and write alternative text that describes the image.
-->

---

# Tables and Code Blocks

**Goal:** Present a compact comparison and a syntax-highlighted code sample.

````markdown
| Element | Markdown | Use |
|:--|:--|:--|
| Heading | `## Title` | Organize |
| Code | Triple backticks | Show code |

```javascript
console.log("Hello, Markdown!");
```
````

**Expected result:** a three-column table and a fenced JavaScript code block.

<!--
Speaker notes: The pipe characters divide table cells, and the separator row follows the header. Fenced code blocks use matching groups of backticks, with a language label such as javascript after the opening fence for syntax highlighting.
-->

---

# Deliverable and Submission

**Expected deliverable:** `lab-presentation.md`

```bash
git add lab-presentation.md
git commit -m "Add Markdown lab presentation"
git push
```

**Expected result:** the Markdown presentation is committed and pushed to the GitHub repository configured for this lab.

<!--
Speaker notes: Save the completed presentation in the lab folder, then stage, commit, and push it to the repository used for the assignment. The push assumes that a remote repository and appropriate GitHub authentication are already configured.
-->

---

# Takeaways and Common Mistakes

- Use blank lines to separate paragraphs and content blocks.
- Keep headings in a logical order.
- Describe images and verify their sources.
- Mistake: missing space after `#` → add one.
- Mistake: unclosed code fence → add its matching fence.

<!--
Speaker notes: Consistent spacing and correctly paired syntax markers make Markdown easier to read and maintain. Preview the finished document and check that the image source, table separators, and code fences produce the intended output.
-->

---

<!-- _class: lead -->

# Thanks

<!--
Speaker notes: Invite questions about how the Markdown source maps to its rendered result. Ask learners to choose one document element from the lab and describe where they would use it in a README or set of notes.
-->
