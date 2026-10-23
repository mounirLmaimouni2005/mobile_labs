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

# Presentations with Marp

Mounir L Maimouni  
Supervised by Fouad Serraj  
Solicode · [23/10/2026]

<!--
Speaker notes: This lab introduces Marp, a way to turn Markdown files into slide decks. The goal is to build a clear presentation using familiar text syntax, then keep the Markdown source ready for submission.
-->

---

# Plan

- Meet Marp and its workflow
- Structure content with headings and lists
- Separate content into slides
- Add images and choose a theme
- Export and submit the source

<!--
Speaker notes: We will move from the purpose of Marp to the Markdown features used in a deck. Then we will connect those features to a finished source file and the GitHub submission requested by the lab.
-->

---

# Objectives

- By the end, I can explain what Marp does.
- By the end, I can format titles and lists.
- By the end, I can split Markdown into slides.
- By the end, I can add an image and select a theme.
- By the end, I can prepare the source for GitHub.

<!--
Speaker notes: These outcomes describe the practical skills to demonstrate. The deliverable is the Markdown source; a rendered deck is the expected visual result, not a claim that it has already been exported.
-->

---

# Introduction to Marp

Marp converts Markdown into slide presentations.

- Write content as plain text with Markdown
- Add Marp settings in YAML front matter
- Preview slides before exporting

**Use case:** turn a lesson outline into a shareable presentation.

<!--
Speaker notes: Markdown keeps the content readable and easy to edit, while Marp interprets slide separators and presentation settings. This is useful when lesson content changes often and should remain maintainable as text.
-->

---

# Structure with Markdown

**Goal:** Make slide content easy to scan.

````markdown
# Main idea
## Supporting point

- First detail
- Second detail
  - Related detail
````

**Expected result:** A clear title hierarchy and readable nested list.

<!--
Speaker notes: Use one level-one heading as the slide title, then use smaller headings only when they add structure. Lists are most effective when each item expresses one concise idea rather than a full paragraph.
-->

---

# Separate the Slides

**Goal:** Start each new slide at a deliberate point.

````markdown
# First slide
Opening idea

---

# Second slide
Next idea
````

**Expected result:** Two slides; the separator stands alone on its line.

<!--
Speaker notes: In the presentation body, a line containing three hyphens separates slides. The opening YAML front matter also uses delimiter lines, but that configuration block appears only once at the top of the file.
-->

---

# Add Images and Themes

**Goal:** Add a visual and choose a presentation style.

````markdown
---
marp: true
theme: default
---

![Descriptive alt text](<relative-image-path>)
````

**Expected result:** Marp applies the selected theme and displays the referenced image.

<!--
Speaker notes: Replace the image-path placeholder with a relative path to an image available with the project, and write alt text that describes it. The default theme is a built-in choice; other themes can be selected when available in the Marp setup.
-->

---

# Deliverable and Submission

- Save the presentation as a Marp Markdown file.
- Preview it and check slide order and readability.
- Add the source file to the Git repository.
- Commit the change and push to GitHub.

```bash
git add lab-presentation.md
git commit -m "Add Marp presentation"
git push
```

<!--
Speaker notes: The lab asks for the deliverable to be deposited in the GitHub repository. These commands show the usual sequence; use the repository and branch already provided for the lab rather than assuming a destination.
-->

---

# Takeaways and Common Mistakes

- Headings and lists make content scannable.
- Separators define the slide sequence.
- Images and themes add visual consistency.
- Mistake: putting `---` inside a sentence; use its own line.
- Mistake: using an unavailable image path; check the relative path.

<!--
Speaker notes: A successful deck combines concise content with reliable structure. Before submitting, check that each separator is intentional and that every referenced image exists where the Markdown file expects it.
-->

---
<!-- _class: lead -->

# Questions and Answers

Start with one clear idea per slide.

<!--
Speaker notes: Invite questions about Markdown syntax, slide structure, or visual choices. The central habit to keep is to make each slide communicate one main idea clearly.
-->
