---
name: lab-to-marp-presentation
description: "Convert a technical lab or assignment statement into a clear, accurate Marp Markdown presentation. Use when asked to create or adapt presentation slides from lab instructions in any language."
---

# Technical Lab to Marp Presentation

## Purpose

Turn the supplied technical lab statement into a polished, beginner-friendly presentation that teaches the lab rather than merely restating it. Work from the supplied statement only; do not inspect or request unrelated project files, code, or screenshots.

## Workflow

1. Read the complete lab statement and identify its objective, audience level, technical concepts, practical tasks, tools, constraints, deliverables, and submission method.
2. Separate explicit requirements from the minimum prerequisite concepts needed to explain them. Do not present prerequisites or assumptions as teacher requirements.
3. Choose a slide count and level of detail that fit the lab's actual complexity. There is no fixed slide count or mandatory title/plan/closing formula.
4. Outline the presentation so all five required sections are clearly identifiable and appear in this order:
   1. **Introduction**
   2. **Problématique**
   3. **Definition**
   4. **Solution**
   5. **Conclusion**
5. Explain relevant concepts before showing practical examples. Match the technical depth to the lab and explain unfamiliar terms in concise, beginner-level English.
6. Write the complete Marp Markdown presentation, then silently check its structure, factual consistency, readability, and Marp syntax before returning or saving it.

Use these section labels as written so each section is easy to find. Keep slide text and speaker notes in concise English by default, while preserving technical syntax, names, commands, and the required **Problématique** label. If the user explicitly requests another presentation language, follow that request while retaining the section labels.

## Accuracy and Scope

- Cover every explicit requirement in the lab statement and no unrelated features, tools, technologies, exercises, or deliverables.
- Never invent requirements, implementation details, paths, credentials, people, dates, URLs, data, results, or submission destinations.
- Make assumptions only when essential to avoid a misleading explanation; state a minimal assumption in speaker notes.
- Do not claim that code was run, tested, submitted, or successful unless the input establishes that fact. Label predictions **Expected result** and illustrative material **Example**.
- Keep examples small, technically valid, and consistent across slides. State OS, shell, or version conditions when they materially affect a command or result.
- Include a deliverable or submission instruction only when the lab statement specifies one. If it does not, omit the section rather than inventing a deliverable.
- Use official documentation links only when they are well known, directly useful, and within the lab's scope. Do not use external images unless the user explicitly asks for them.

## Required Section Guidance

- **Introduction:** establish the lab's subject, goal, and relevant context without adding unsupported background.
- **Problématique:** state the need, question, or difficulty that the lab itself addresses. If none is explicit, frame only the general need implied by the stated objective.
- **Definition:** explain the central terms and prerequisites needed to understand the lab. Keep definitions accurate and at the lab's level.
- **Solution:** explain the approach or tasks required by the statement. For practical material, introduce the concept first, then show a small relevant example and its directly supported expected result.
- **Conclusion:** summarize the main learning points and, only when specified, the completed deliverable or next submission step. Do not imply work has been completed.

The five sections may span one or multiple slides each. Add supporting slides when they help explain required concepts or practical steps; combine material when the lab is small. Keep the five section labels clear even when a section shares a slide with related content.

## Marp and Markdown

Start each presentation with one valid YAML front matter block, at the very top of the file. Use the following settings and style as the default; preserve their values unless the user asks for a different configuration:

```yaml
---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    box-sizing: border-box;
    padding: 48px 64px;
    background: #f8fafc;
    color: #334155;
    font-family: "Segoe UI", Arial, sans-serif;
    font-size: 26px;
  }
  h1 {
    color: #17324d;
    border-bottom: 2px solid #7aa6a1;
    padding-bottom: 8px;
  }
  h2, strong {
    color: #426b78;
  }
  code {
    background: #e8eef2;
    color: #17324d;
    border-radius: 4px;
    padding: 2px 5px;
  }
  pre {
    background: #edf2f5;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    padding: 14px;
  }
  pre code {
    background: transparent;
    color: #1e293b;
    font-size: 0.78em;
    padding: 0;
  }
  table {
    width: 100%;
    font-size: 0.82em;
  }
  th {
    background: #e2eaf0;
    color: #17324d;
  }
  section.lead {
    background: #e8eef2;
    color: #17324d;
    text-align: center;
    justify-content: center;
  }
  section.lead h1 {
    color: #17324d;
    border: 0;
    font-size: 1.8em;
  }
  section.lead h2, section.lead p, section.lead strong {
    color: #334155;
  }
---
```

Marp syntax rules:

- The first `---` opens front matter; the next `---` closes it. Put slide content only after the closing delimiter.
- Separate slides with a line containing exactly `---`. Do not insert slide separators inside an open code fence.
- Use `#` for each slide's main heading and `##` only for useful subheadings.
- Use valid Markdown lists and tables. Keep tables simple and readable when projected.
- Fence code with the correct language identifier when known (for example, `javascript`, `html`, `css`, `bash`, `php`, `sql`, `json`, or `markdown`). Keep code examples short and syntactically valid.
- Use Marp directives such as `<!-- _class: lead -->` on a slide when they improve hierarchy. Place the directive at the start of the slide content, not in the YAML front matter. Use the included `lead` styling; do not add gradients or rely on low-contrast text.
- Use no raw HTML other than Marp directives and speaker-note comments. To display Markdown that contains fenced code blocks, use an outer fence longer than the inner fences.
- Keep the CSS inside the YAML block scalar `style: |` correctly indented. Avoid unnecessary selectors, decorative effects, and colors outside the palette.

## Visual Design and Readability

Use a consistent classroom-friendly palette of navy, slate, soft blue-gray, muted teal, and light backgrounds. Prefer whitespace, clear hierarchy, and simple layouts. Avoid aggressive colors, gradients, excessive decoration, crowded slides, and low-contrast text.

Adapt content density to the topic and slide dimensions. Prefer one main idea per slide; split dense explanations or code when needed. Keep titles concise, paragraphs short, and bullets focused. Use a table, diagram, or code block only when it makes the required material easier to understand. Ensure code and labels remain legible when projected.

For practical slides, make the learner's task and purpose clear. Include an **Expected result** only when it follows directly from the shown example or the lab statement. Purely conceptual slides do not need code.

## Speaker Notes

Add concise English speaker notes as an HTML comment at the end of slides when notes help the presenter explain concepts, transitions, assumptions, or caveats. Notes should add context rather than repeat slide text. Do not claim notes appear automatically in any particular presenter view.

```markdown
<!--
Speaker notes: Explain the idea in natural language and add a useful caveat.
-->
```

## Output

Return one complete Marp Markdown presentation and nothing else: no preface, outline, explanation, alternatives, or closing message.

- If file creation is available and requested or appropriate, create `lab-presentation.md` in the relevant working location. Use the exact filename when the user specifies one.
- Otherwise, return the entire presentation in one Markdown code block.
- Do not create a presentation when the user asks only to revise or analyze this skill.

## Silent Final Check

- All five required sections are clearly identifiable and in order.
- Slide count and detail fit the lab's complexity; no fixed count has been imposed.
- Concepts precede dependent examples; technical claims and code are accurate and consistent.
- English is used by default, with technical syntax preserved.
- Requirements, expected results, deliverables, and submission instructions are supported by the lab statement.
- The file starts with valid YAML front matter containing the required Marp settings and correctly indented CSS.
- Slide separators, Markdown headings, fences, directives, and speaker-note comments are correctly formed.
- Styling uses the cool, low-contrast-risk palette and remains readable when projected.
- The output contains only the requested presentation, not an explanation about it.
