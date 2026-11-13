---
name: marp
description: "Creates, edits, and validates professional Marp presentations in Markdown. Use when preparing or improving presentations for technical labs, school projects, or professional topics."
---

# Marp Presentation Skill

## Role

Create clear, accurate, professional presentations using Markdown and Marp.

The presentation must communicate the subject effectively, follow the user's approved plan, and help the audience understand the concepts.

## 1. Understand Before Creating

Before creating or editing a presentation:

1. Read the complete README.md.
2. Read applicable Agent Rules.
3. Identify and read relevant Skills.
4. Inspect existing presentation files and workspace conventions.
5. Identify the presentation language, audience, objectives, and constraints.
6. Identify the exact presentation structure approved by the user.

Do not start writing slides before understanding these requirements.

## 2. Follow the Approved Structure

The presentation plan is a strict requirement.

- Follow the exact order of the sections provided by the README or user.
- Do not add, remove, rename, or reorder main sections without permission.
- Do not replace the approved plan with a different structure.
- Keep all required topics within their appropriate sections.
- Additional slides are allowed only to explain the approved sections clearly.
- Do not introduce unrelated topics.
- If the plan is unclear or contradictory, ask before making structural changes.

**Important:** The approved presentation plan takes priority over personal design preferences or generic presentation templates.

## 3. Content Research and Accuracy

1. Use reliable and authoritative sources.
2. Prioritize official documentation and original references.
3. Verify definitions, technical terminology, facts, and explanations.
4. Cover every required concept from the README.
5. Explain concepts accurately and in a logical sequence.
6. Use practical examples relevant to the subject.
7. Distinguish official definitions from illustrative examples.
8. Never invent project details, implementation results, names, or technical facts.
9. Do not simplify explanations in a way that changes their meaning.
10. Include references for important external information.

For framework-specific presentations, use the official documentation as the primary reference whenever available.

## 4. Slide Content and Learning Quality

- Prioritize understanding over memorization.
- Present one main idea per slide.
- Use concise explanations without removing essential information.
- Explain important technical terms.
- Use examples to make abstract concepts understandable.
- Show relationships between concepts when relevant.
- Use diagrams, workflows, and tables when they improve understanding.
- Avoid repeating the same information across slides.
- Avoid overcrowded slides and unnecessarily long paragraphs.
- Ensure the presentation can be understood without relying entirely on speaker notes.

## 5. Presentation Design

Create a consistent, modern, professional design.

Requirements:

- Use 16:9 format unless specified otherwise.
- Use a readable font and appropriate font sizes.
- Maintain consistent colors, spacing, alignment, and typography.
- Use sufficient contrast between text and background.
- Keep layouts simple and visually balanced.
- Use diagrams and visual elements only when they add value.
- Avoid unnecessary decorations, excessive animations, and visual clutter.
- Ensure tables, diagrams, and code remain readable.
- Follow any existing custom theme and design conventions.

## 6. Marp Technical Requirements

Use valid Markdown and Marp syntax.

Typical front matter:

---
marp: true
theme: default
paginate: true
size: 16:9
---

Rules:

- Use `---` to separate slides.
- Use valid YAML front matter.
- Use valid HTML and CSS when custom styling is necessary.
- Keep CSS organized and reusable.
- Use valid Marp directives when needed.
- Specify the language of code blocks.
- Keep speaker notes inside valid HTML comments.
- Avoid unsupported syntax and unnecessary dependencies.
- Preserve existing project conventions.

## 7. Speaker Notes

When speaker notes are requested:

- Include concise notes for each slide.
- Explain the key message in natural spoken language.
- Add useful examples or clarifications.
- Do not simply repeat slide content.
- Do not introduce facts that are absent from the slide or references.
- Help the presenter explain the slide confidently.

## 8. Validation

Before finishing:

1. Verify the slide order against the approved plan.
2. Check that every required topic is covered.
3. Verify technical explanations and terminology.
4. Check Markdown and YAML syntax.
5. Check HTML and CSS syntax when used.
6. Verify slide count and aspect ratio requirements.
7. Review readability and visual consistency.
8. Check speaker notes when requested.
9. Run a Marp build or export if the required tools are available.
10. Fix errors found within the requested scope.

Never claim that a presentation was successfully exported or validated unless the operation was actually performed.

## 9. Modification Rules

- Inspect existing files before editing.
- Preserve useful existing content.
- Modify only files required by the task.
- Do not modify unrelated project files.
- Do not create unnecessary files, packages, or dependencies.
- Do not overwrite existing work without understanding its purpose.
- Keep the presentation consistent with the README and other lab materials.

## 10. Final Report

After completing the task, report:

- Presentation file created or modified.
- Sections completed.
- Important concepts covered.
- Sources used.
- Validation performed and actual results.
- Any remaining limitations.

## Final Quality Checklist

- [ ] Followed the exact approved presentation plan.
- [ ] Covered all required concepts.
- [ ] Used the required language.
- [ ] Used accurate and verified information.
- [ ] Maintained a logical learning sequence.
- [ ] Used clear explanations and useful examples.
- [ ] Applied consistent professional design.
- [ ] Included speaker notes when requested.
- [ ] Respected slide count and format constraints.
- [ ] Validated the presentation when possible.
- [ ] Modified no unrelated files.