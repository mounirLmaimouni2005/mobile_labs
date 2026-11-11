---
name: marp
description: "Writes or edits Marp slides in English. Use for technical lab slides that match the lab files and checked results."
---

# Marp Slides

Use this Skill to make or edit a Marp slide deck in Markdown.

## Layout

- Start with valid YAML that has `marp: true`, a theme, page numbers, and size `16:9`.
- Put `---` between slides. Name the language for each code block.
- Show the title and given names for the learner and teacher. Add a plan, the need, and the known project facts.
- Follow the lab rules. For this PHP Lab, show the three topics, the expected work, and the checks.
- Do not add a final slide or a thank-you slide. End with a file or a real next step.

## Correct facts

- Write in English. Explain ideas with easy words.
- Do not make up a real problem, app, tools, package, setup, or result. Say when a need is only for learning.
- Use the examples already in the lab. Do not make a second example.
- Use the same file names, commands, results, and check status as the README, tutorials, examples, and notes.
- Show which things are known and which things are only ideas.

## Easy to read

- Use clear titles, colors that are easy to see, and short text.
- Use dark and light slides only when the theme supports them.
- Line up columns in Markdown tables.
- Check the YAML, slide breaks, and code blocks. Do not say Marp export passed unless it ran.
