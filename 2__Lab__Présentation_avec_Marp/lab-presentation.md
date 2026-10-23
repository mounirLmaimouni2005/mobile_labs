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

# Creating Presentations with Marp

Mounir L Maimouni  
Supervised by Fouad Serraj  
Solicode · October 23, 2026

<!--
Speaker notes: This presentation introduces Marp and the Markdown features used to build a structured slide deck. We will look at headings, lists, slide separators, images, and themes, then prepare the Markdown deliverable for the GitHub repository.
-->

---

# Plan

- Understand Marp and Markdown slides
- Organize content with headings and lists
- Separate content into slides
- Add images and select a theme
- Prepare the GitHub deliverable

<!--
Speaker notes: The plan follows the requested lab topics from basic structure to visual choices. The final step covers the source-file deliverable and depositing it in the GitHub repository.
-->

---

# Objectives

- By the end, I can explain how Marp uses Markdown.
- By the end, I can format headings and lists.
- By the end, I can separate content into slides.
- By the end, I can add an image and choose a theme.

<!--
Speaker notes: These objectives describe the skills practiced in this presentation. Each one corresponds to a requested Markdown or Marp feature, so learners can use the examples to check their understanding.
-->

---

# Introduction to Marp

Marp turns Markdown content into a slide presentation.

- Markdown holds the slide text and structure.
- Marp settings control presentation options.
- A concise structure helps the audience follow ideas.

<!--
Speaker notes: Marp lets authors write presentation content as Markdown rather than manually formatting every text element. Headings, lists, and slide separators provide the structure, while presentation settings configure the deck.
-->

---

# Format Text with Markdown

**Goal:** Organize a slide with headings and lists.

````markdown
# Main idea
## Supporting point

- First detail
- Second detail
  - Related detail
````

**Expected result:** A title hierarchy and a readable list.

<!--
Speaker notes: A single hash marks the main heading, and two hashes mark a supporting heading. Hyphens create list items, while indentation groups a related detail under its parent item.
-->

---

# Build the Slide Sequence

**Goal:** Separate ideas into individual slides.

````markdown
# First idea
Its supporting detail

---

# Next idea
Its supporting detail
````

**Expected result:** Two slides, each beginning with its own heading.

<!--
Speaker notes: A line containing three hyphens separates one slide from the next. Keep each separator on its own line, and place it where the next idea should begin.
-->

---

# Add Images and Choose a Theme

**Goal:** Include an image and set the deck theme.

````markdown
---
marp: true
theme: default
---

![Description](<relative image path>)
````

**Expected result:** Marp uses the selected theme and places the referenced image.

<!--
Speaker notes: The theme setting selects the presentation style, and the image syntax includes descriptive alternative text plus a relative image path. Replace the path with the location of the image used for the presentation.
-->

---

# Deliverable and Submission

- Save the presentation as `lab-presentation.md`.
- Add the Markdown file to the Git repository.
- Commit the change and push it to GitHub.

```bash
git add lab-presentation.md
git commit -m "Add Marp lab presentation"
git push
```

<!--
Speaker notes: The requested deliverable is a presentation created from Markdown and deposited in the GitHub repository. These commands add and publish the source file; run them from the lab directory in the existing repository.
-->

---

# Takeaways and Common Mistakes

- Headings and lists organize slide content.
- Separators mark the start of another slide.
- Images and themes add visual structure.
- Mistake: placing a separator mid-line; put it on its own line.
- Mistake: using the wrong image path; check its relative location.

<!--
Speaker notes: These takeaways recap the features practiced in the lab. Check that separators stand alone and that the image path points to the intended file before considering the Markdown deck complete.
-->

---
<!-- _class: lead -->

# Thanks

<!--
Speaker notes: This final slide closes the presentation. The deck has introduced the requested Markdown structures and Marp settings for a clear, organized set of slides.
-->
