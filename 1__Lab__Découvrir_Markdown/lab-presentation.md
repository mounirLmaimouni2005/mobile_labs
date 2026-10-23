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

# Discover Markdown

Mounir L Maimouni  
Supervised by Fouad Serraj  
Solicode · October 23, 2026

<!--
Speaker notes: This lab introduces Markdown as a simple way to structure and format a document. I will demonstrate the requested syntax with small examples, then summarize the practical deliverable.
-->

---

# Plan

- Headings, paragraphs, and lists
- Links and images
- Tables and code blocks
- A combined practical example
- Deliverable and submission

<!--
Speaker notes: The presentation follows the elements named in the lab statement. First I will show basic document structure, then links and images, and finally tabular information and code.
-->

---

# Objectives

- By the end, I can structure content with headings and paragraphs.
- By the end, I can create ordered and unordered lists.
- By the end, I can write links and image syntax.
- By the end, I can format tables and code blocks.

<!--
Speaker notes: These outcomes match the requested Markdown elements. The practical examples combine the syntax so learners can see how separate pieces work together in one document.
-->

---

# Introduction, Problem and Solution

**Introduction:** Markdown is a lightweight syntax for structuring and formatting documents.

**Problem:** Plain text alone does not clearly distinguish document sections and content types.

**Solution:** Use headings, paragraphs, lists, links, images, tables, and code blocks to organize the document.

<!--
Speaker notes: Markdown lets authors describe structure with readable characters. The lab addresses how to make a document organized and formatted, using the specific elements listed in the assignment.
-->

---

# Structure Text and Lists

**Goal:** Create a clear title, section, paragraph, and list.

```markdown
# My document
## First section

Markdown keeps text readable.

- First point
- Second point
```

**Expected result:** A titled section, a paragraph, and two bullet points.

<!--
Speaker notes: One or more hash characters create headings, while a blank line separates paragraphs. A hyphen starts a bullet list; numbering items creates an ordered list when steps need a sequence.
-->

---

# Add Links and Images

**Goal:** Add a clickable link and an image with alternative text.

```markdown
[Documentation](destination)
![Descriptive alternative text](image-source)
```

**Expected result:** The link text opens its destination; the image appears when its location is valid.

<!--
Speaker notes: These examples show the syntax pattern without assuming a particular URL or image file. Replace each generic destination with the real resource for the document, and keep image alternative text descriptive.
-->

---

# Present Tables and Code

**Goal:** Compare two Markdown elements and include a small code example.

| Element | Purpose |
|:--|:--|
| Table | Arrange information in rows and columns |
| Code block | Display code on separate, formatted lines |

````markdown
```python
message = "Hello, Markdown!"
print(message)
```
````

**Expected result:** A two-row table and a rendered fenced block containing the Python example.

<!--
Speaker notes: In a Markdown table, vertical bars divide columns and a separator row follows the headings. Three backticks around code create a fenced block; the language label can enable syntax highlighting.
-->

---

# Deliverable and Submission

- **Deliverable:** a Markdown document with practical examples of every requested element.
- Add the completed document to the GitHub repository provided for the lab.

```bash
git add <deliverable>
git commit -m "Add Markdown lab deliverable"
git push
```

**Expected result:** The deliverable is committed and pushed to the provided repository.

<!--
Speaker notes: The assignment asks for practical examples and submission in the GitHub repository. Use the repository and filename already provided for the lab; no repository address or branch is specified here.
-->

---

# Takeaways and Common Mistakes

- Headings and blank lines make document structure easier to follow.
- Lists, links, images, and tables organize different kinds of information.
- Fenced blocks keep code readable.
- Mistake: missing blank lines; fix: separate paragraphs and sections.
- Mistake: invalid image location; fix: use the correct resource location.

<!--
Speaker notes: Markdown syntax is easiest to check by previewing the document. Separate paragraphs with blank lines, and make sure a link or image points to a valid destination before sharing the file.
-->

---
<!-- _class: lead -->

# Thank You

Thank you for following this introduction to Markdown.

<!--
Speaker notes: This presentation covered the requested Markdown syntax and practical examples. The learner can now apply these building blocks in the document prepared for the lab.
-->
