---
name: skill-creator
description: Creates, updates, and checks Agent Skills. Use when a user asks for a Skill, a SKILL.md file, or help with an existing Skill.
---

# Skill Creator

Use this Skill to make clear and useful Agent Skills. Skills must work with Google Antigravity and other supported tools.

## Main rules

- Follow the Agent Skills standard at https://agentskills.io.
- By default, put project Skills in `.agents/skills/<skill-name>/`.
- Give each Skill one clear job.
- Use short and clear steps.
- Do not make up project rules, commands, packages, or facts. Check the files and trusted sources. Say when something is not known.
- Keep current work. Read a Skill before changing it. Ask before a large or unclear change.
- Use the user's language. If the user does not choose a language, write the Skill in English. The Skill may tell the agent to use the user's language.
- Do not add files without a clear need. `SKILL.md` is the only file that is always needed.

## Steps

### 1. Learn the need

Find out:

- What job should the Skill do?
- When should the agent use it?
- Who will use it, and where?
- What should it read and make?
- Does it need scripts, examples, or other files?

Use the user's request and project first. Ask a short question only when the answer may change the result. If not, use a safe choice and say what you chose in the final answer.

### 2. Check the project

Before making a file:

- Find the project root.
- Check if `.agents/skills/` is there.
- Look for a Skill with the same or a close name.
- Read useful project rules, help files, and Skills.
- Follow current project style. Do not copy rules that are not useful.

Use `.agents/skills/<skill-name>/` for a project Skill. Use a user folder only when the user asks for a Skill for all projects. Do not add a user Skill without permission.

### 3. Add correct frontmatter

Start `SKILL.md` with YAML text.

It must have:

- `name`: 1 to 64 characters. Use small letters, numbers, and single dashes. Do not start or end with a dash. Do not use two dashes together. The name must match the folder name.
- `description`: 1 to 1024 characters. Say what the Skill does and when to use it. Add words that match user requests.

Example:

```yaml
---
name: api-test-helper
description: Makes and runs API tests. Use when adding routes or checking API input and output.
---
```

Add other frontmatter only when it has a clear use. Do not add `allowed-tools` by default. Some tools do not support it.

### 4. Write clear steps

Add the parts that the Skill needs:

1. **Role** — what the agent does.
2. **When to use** — requests that fit and do not fit.
3. **Input and context** — what to read or ask.
4. **Steps** — what to do, in order.
5. **Rules** — quality, safety, and project rules.
6. **Examples** — useful request examples, when needed.
7. **Final check** — how to check the work.

Write clear actions. Explain choices, errors, checks, and final files. Avoid unclear words like "make it good".

Keep the main `SKILL.md` short, if possible under 500 lines. Put long help, examples, or templates in other files only when they help. Link to these files with paths from the Skill folder.

### 5. Add other files only when needed

A Skill can use this layout:

```text
skill-name/
├── SKILL.md
├── scripts/
├── references/
└── assets/
```

Only add folders that have useful files.

For scripts:

- Use tools that the project already uses when possible.
- Explain how to run the script, what it needs, and how it reports errors.
- Do not delete or change important data without clear user permission.
- Do not say a script ran unless you ran it.

For help files and images:

- Keep each file about one thing.
- Use paths from the Skill folder.
- Do not copy other people's work unless its license allows it. Write a short summary and link to good sources instead.

### 6. Make or update the Skill

- Put the file in the correct folder.
- If a Skill with this name exists, read it first. Change it only when asked.
- If another name is better, choose a short new name.
- Do not put `SKILL.md` directly in `.agents/skills/`. It must be in its own folder.
- Check all file paths after changes.

### 7. Check the Skill

Check these points:

- The Skill folder is in the right place.
- `SKILL.md` starts and ends its YAML frontmatter with `---`.
- The `name` matches the folder and follows the name rules.
- The `description` is present, useful, and no longer than 1024 characters.
- Headings, code blocks, and links are correct.
- Each linked file exists.
- The steps are clear and safe. They do not disagree with project rules.
- There are no extra or repeated files.

If `skills-ref` is installed, run:

```bash
skills-ref validate .agents/skills/<skill-name>
```

If it is not installed, do the checks above by hand. Do not say a check passed if it was not done.

### 8. Report the work

Give a short report with:

- The Skill name and job.
- Its full path.
- The files made or changed.
- Checks that ran and checks that could not run.
- How to use the Skill.

Do not say the Skill is ready in Antigravity until the tool finds it. If needed, tell the user to reopen the project or check the Skills list.

## Example requests

- "Make a Skill for Laravel pages in this project."
- "Make a Skill to check PHP security."
- "Make a Skill to write Marp slides."
- "Update my Skill for database changes."
- "Put these agent rules into a Skill."

## Last check

Before you finish, make sure the Skill is:

- **Easy to find:** the description says when to use it.
- **Clear:** it does one main job.
- **Useful:** it gives steps and ways to check the result.
- **Safe:** it protects current files and data.
- **Easy to update:** it is short and does not repeat other rules.
