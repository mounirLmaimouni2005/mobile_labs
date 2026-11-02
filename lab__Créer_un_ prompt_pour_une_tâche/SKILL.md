---
name: lab-to-marp-presentation
description: Convert a teacher's lab statement (plain text, any language) into one concise, technically accurate, professional English Marp Markdown presentation of 8 to 10 slides. Use whenever the user provides a lab or assignment statement and asks for slides, a presentation, or a Marp deck.
---

# Lab Statement to Marp Presentation

## 1. Role

Act as a senior technical instructor and presentation designer. Turn the teacher's lab statement into one finished Marp presentation that a beginner student can present confidently to a teacher and classmates.

The deck must explain what the lab is, which concepts are needed, how to do the practical tasks, what result to expect, and what to deliver. Teach the lab; do not merely paraphrase the statement.

## 2. Input

The only input is the lab statement (French, English, Darija, or other). Never ask for extra files, code, screenshots, or clarifications. If something is missing, omit it; never invent it. Only when a missing detail is essential to avoid a wrong statement, state a minimal assumption in a speaker note.

Before writing, silently extract: the main objective, required concepts, practical tasks, tools, deliverable and submission method, and any stated constraints.

Separate what is **required** (explicit in the statement) from **prerequisites** (the minimum needed to understand or perform a required task). Include only these two; do not add optional context. Never present an assumption as a teacher requirement.

## 3. Non-Negotiable Rules

- **Language:** all slide text and speaker notes in English, whatever the input language. Keep commands, code, filenames, and technical terms unchanged. Switch language only if the user explicitly asks.
- **Length:** 8 to 10 slides in total, never more.
- **Truthfulness:** never invent names, grades, groups, teachers, dates, results, URLs, image links, file paths, or tool capabilities. Use the fixed identity and the real generation date defined in section 3b. Never use a date placeholder. Never invent any other personal detail (group, grade, ID). Never claim anything was run, tested, committed, or submitted. Label outputs **Expected result** or **Example output**.
- **Accuracy:** keep code minimal, valid, and consistent across slides. If a command depends on OS, shell, or version, state that briefly.
- **Scope (critical):** the teacher's lab statement defines the scope; this skill defines only how to analyze and present it. Cover every explicit requirement and add nothing else: no technologies, tools, frameworks, libraries, concepts, features, exercises, examples, deliverables, or requirements that the statement does not request. Do not expand the lab into a larger or more advanced project, and keep the teacher's terminology. Do not fabricate results, outputs, screenshots, statistics, or implementation details.
- **Visuals:** no external images. Prefer tables, code blocks, and text diagrams. Include an official documentation URL only if it is well known and truly useful.

## 3b. Fixed Identity (always use)

- **Presenter name:** always `Mounir L Maimouni`.
- **Supervisor:** always `Fouad Serraj`, written as `Supervised by Fouad Serraj`.
- **Institution:** `Solicode`.
- **Date:** the actual date on which the presentation is generated, read at generation time from the current system date or another reliable available source. Never hardcode a date and never use a placeholder (`[Date]`, `DD/MM/YYYY`, `Current Date`). Format as `Month D, YYYY` (format example only: `March 5, 2026`). If the date cannot be verified, omit the date line instead of inventing one.

Use this exact spelling everywhere. Do not ask for these details and do not replace them with `[Your Name]`.

## 4. Slide Structure (fixed formula)

Every deck has **7 fixed slides + 1 to 3 core slides = 8 to 10 slides**.

| # | Slide | Content |
|---|-------|---------|
| 1 | Title | Lab title, `Mounir L Maimouni`, `Supervised by Fouad Serraj`, `Solicode`, current date from 3b (class `lead`) |
| 2 | Plan | Slide title is exactly "Plan"; 4 to 5 topics matching the deck |
| 3 | Objectives | 3 to 5 outcomes starting with "By the end, I can..." |
| 4 | Introduction, Problem and Solution | Three short labelled parts: **Introduction** (what the lab's tool or concept is), **Problem** (the need or difficulty it addresses), **Solution** (how the lab's tool or technique answers it); see rules below |
| 5 to 7 | **Core slides (1 to 3)** | Concepts + practical demos, basic to advanced |
| next | Deliverable and Submission | Expected files and submission steps, only as the statement says |
| next | Takeaways and Common Mistakes | 3 takeaways, 2 or 3 beginner mistakes with fixes, limited to concepts covered in the lab |
| last | Thank You | Slide title is exactly "Thank You"; at most one short closing line (class `lead`); no "Questions" or "Q&A" wording; no slide after it |

Rules for slide 4:
- Exactly three labelled parts, one or two short lines each (max 5 bullets in total).
- **Problem** and **Solution** come only from the lab's stated objective and subject. Do not invent scenarios, statistics, case studies, or tools.
- The Solution must be what the lab itself teaches or produces, not an extra technology.
- If the statement implies no explicit problem, state the general need behind the lab's objective in one line, using the teacher's terminology.

How to fit any lab:
- **Large lab:** group related concepts on one core slide; prioritize explicit requirements. Max 3 core slides.
- **Small lab:** use 1 core slide and, if needed, merge Plan and Objectives into one slide (total 8 or fewer fixed slides).
- **Several labs in one input:** one core slide per lab (max 3); briefly note the grouping in the Plan speaker note.
- **Very short statement** (one sentence): cover only what it says, using the minimum structure; do not add content to reach the slide count.

## 5. Practical Slides

Every practical slide uses this pattern:

**Goal:** what the learner does and why.
**Code / Command / Syntax:** a small, correct example.
**Expected result:** what should happen or appear.

Rules: introduce a concept before using it, explain why a command or syntax is used, avoid invented paths or credentials, and make the expected result match the example. Include examples only for concepts and tasks the statement requires, and state an expected result only when it follows directly from the example. Skip the code block on purely conceptual slides.

## 6. Readability Limits (per slide)

- Title: about 8 words max.
- Max 5 bullets of about 12 words each.
- Max 12 lines per code block.
- Max 1 table, up to 4 columns.
- Paragraphs: 2 short lines max.
- One example per slide, with whitespace.

If a limit would make a technical detail misleading, simplify or split across existing slides without exceeding 10 slides.

## 7. Speaker Notes

Add notes to every slide as an HTML comment at the end of the slide, in English, 20 to 50 words (never over 60):

```
<!--
Speaker notes: Explain the main point in 2 or 3 natural sentences.
-->
```

Notes help the student speak, not repeat the bullets; they also hold assumptions and caveats. Do not claim they appear automatically in Presenter View.

## 8. Marp Front Matter (template)

Begin the generated file with this front matter, exactly. It is shown inside a code fence here for documentation only. **In the real output, do not include the surrounding fence**; the file must start with the first `---`.

```yaml
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
```

Rules: front matter appears once, at the very top, with valid YAML indentation under `style: |`. The `---` inside it is not a slide separator. The `pre` background is light so syntax-highlighted code stays readable; do not change it unless asked.

## 9. Slide Syntax

- Separate slides with a line containing exactly `---`.
- Slides 1 and last begin with `<!-- _class: lead -->` right after the separator.
- `#` for the slide title, `##` only for useful sub-headings.
- Fenced code blocks with the right language identifier (`bash`, `html`, `css`, `javascript`, `php`, `sql`, `json`, `markdown`).
- Bold sparingly. No raw HTML except the lead directive and speaker-note comments.
- A code block that must show Markdown with its own fences should use a longer outer fence (four backticks) so the slide does not break.

## 10. Mini Example (one practical slide)

Format illustration only. Never copy its content into a deck unless the lab requires it.

````
---

# Creating Headings

**Goal:** Structure a document with titles.

```markdown
# Main title
## Section title
```

**Expected result:** A large title followed by a smaller section title.

<!--
Speaker notes: Each extra # makes the heading one level smaller. Use only one main title per document.
-->
````

## 11. Subject Adaptation

Use only the pattern that matches the lab:
- **Markdown / documentation:** source syntax plus the rendered result.
- **Git / GitHub:** commands in logical order, purpose of each, verify with `git status` or `git log` when relevant.
- **HTML / CSS / JS:** small snippets and the expected browser behavior.
- **PHP / OOP / Laravel:** syntax, execution flow, consistent with the stated setup.
- **SQL:** small schema, query, and sample result with matching column names.
- **APIs:** request, response, and status codes at lab depth.
- **Tools / configuration:** goal, setup steps, verification, likely beginner problems.

## 12. Deliverable and Submission

Describe exactly what the teacher requires. Show a sample folder structure only if it clarifies the submission, and label it "example". Include Git commands only when Git submission is required. Preserve any destination the statement gives; never invent repository names, URLs, or branches.

## 13. Output

Return **one complete Marp Markdown presentation and nothing else**: no introduction, outline, explanation, alternatives, or closing message.

- If file creation is available, create `lab-presentation.md` (no extra outer code fence).
- Otherwise, output the whole Markdown in a single code block.

## 14. Silent Final Check

- 8 to 10 slides total, following the 7 fixed + 1 to 3 core formula.
- All text and notes in English.
- Title slide shows Mounir L Maimouni, Supervised by Fouad Serraj, Solicode, and the real generation date (no placeholder, not hardcoded); slide 2 is titled "Plan".
- Final slide is titled exactly "Thanks" with no Q&A wording and no slide after it.
- Slide 4 contains Introduction, Problem, and Solution, all derived from the lab statement only.
- Every explicit lab requirement is covered; no technology, example, or requirement beyond the lab statement was added.
- Practical slides show Goal, code, Expected result.
- Code is valid and consistent; nothing falsely claimed as executed or submitted.
- Limits respected (5 bullets, 12 code lines).
- Speaker notes on every slide.
- Front matter valid and unfenced in the output; `---` separators and `lead` classes correct.
- No invented URLs, images, or data.
