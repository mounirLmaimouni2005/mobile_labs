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
Speaker notes: This lab explores Marp presentations written in Markdown. We will use headings, lists, images, themes, and slide separators to organize presentation content clearly.
-->

---

# Plan

- Discover Marp and Markdown slides
- Organize content with headings and lists
- Separate content into slides
- Add images and select themes
- Review the presentation deliverable

<!--
Speaker notes: The plan follows the requested topics in the order they help build a deck. First we structure the text, then divide it into slides and apply the visual features named in the lab.
-->

---

# Objectives

- By the end, I can explain what Marp does.
- By the end, I can format headings and lists.
- By the end, I can separate content into slides.
- By the end, I can add images and select themes.

<!--
Speaker notes: These objectives describe the skills named in the lab statement. The examples on the next slides show the Markdown syntax for each feature and how it contributes to an organized presentation.
-->

---

# Introduction, Problem and Solution

**Introduction:** Marp creates presentations from Markdown files.

**Problem:** Presentation content needs clear structure across slides.

**Solution:** Use headings, lists, images, themes, and separators in Markdown.

<!--
Speaker notes: The lab focuses on creating a structured presentation from a Markdown source. These Markdown features organize the content into slides and provide the visual elements requested, without requiring a separate content format.
-->

---

# Structure Text and Slides

**Goal:** Organize ideas and divide them into slides.

````markdown
# Main idea
## Supporting point
- First detail
- Second detail

---

# Next idea
Its supporting detail
````

**Expected result:** Two slides with headings and a list.

<!--
Speaker notes: Hash marks create headings, while hyphens create list items. A line with three hyphens separates slides, so keep it on a line by itself between the content for each slide.
-->

---

# Add Images and Themes

**Goal:** Include an image and choose a theme.

````markdown
---
marp: true
theme: default
---

![Description](IMAGE_PATH)
````

**Expected result:** Marp uses the selected theme and references the image.

<!--
Speaker notes: The theme is set in the Marp front matter. Replace IMAGE_PATH with the path to the image being used, and replace the alternative text with a short description of that image.
-->

---

# Deliverable

- A structured presentation created from Markdown
- Headings and lists to organize content
- Images and themes for visual structure
- Separators to divide the slides

<!--
Speaker notes: The lab asks for a professional presentation that demonstrates the listed features. It does not specify a filename, export format, submission destination, or submission steps, so none are assumed here.
-->

---

# Takeaways and Common Mistakes

- Headings and lists organize the slide content.
- Separators mark where the next slide begins.
- Images and themes contribute to presentation structure.
- Mistake: placing a separator within a text line; put it alone.
- Mistake: leaving IMAGE_PATH unchanged; replace it with the image path.

<!--
Speaker notes: Check the structure by reviewing the heading hierarchy, list items, and slide boundaries. Also replace the image-path token with the path to the image used in the presentation.
-->

---
<!-- _class: lead -->

# Thank You

<!--
Speaker notes: This final slide closes the presentation. The deck has covered the Markdown and Marp features requested for creating a structured presentation.
-->
