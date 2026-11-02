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

# Writing a Clear AI Prompt

Mounir L Maimouni  
Supervised by Fouad Serraj  
Solicode · October 23, 2026

<!--
Speaker notes: This lab is about communicating a task to an AI agent clearly. We will define the information a prompt needs, draft one, test it with an agent, and improve it based on the result.
-->

---

# Plan

- What makes a prompt clear
- Context, objective, instructions, and expected result
- Drafting a task prompt
- Testing and improving it with an AI agent

<!--
Speaker notes: The presentation follows the lab from understanding the prompt structure to checking a real draft. The goal is not to make a prompt longer, but to make the requested task and result understandable.
-->

---

# Objectives

- By the end, I can explain the four parts of a clear prompt.
- By the end, I can draft a prompt for a task.
- By the end, I can test and improve it with an AI agent.

<!--
Speaker notes: These outcomes describe what you should be able to do after the lab. Keep the four prompt parts in mind while drafting, then use the agent's response as evidence for whether the prompt needs improvement.
-->

---

# Introduction, Problem and Solution

**Introduction:** A prompt is an instruction that tells an AI agent what task to perform.

**Problem:** An unclear request can leave important details or the expected result ambiguous.

**Solution:** Define the context, objective, instructions, and expected result, then test and refine the prompt.

<!--
Speaker notes: The lab focuses on making a request precise enough for an AI agent to act on. The four parts make important information explicit, while testing helps reveal ambiguity that may not be obvious when writing the prompt.
-->

---

# Draft the Prompt

**Goal:** Give the AI agent enough information to understand the task and shape its response.

**Prompt structure:**

```text
Context: I am learning to write clear prompts for AI tasks.
Objective: Help me turn a task request into a clear prompt.
Instructions: Identify the context, objective, instructions, and expected result.
Expected result: A structured prompt and a short check that all four parts are clear.
```

**Expected result:** A prompt whose task and requested output are explicit.

<!--
Speaker notes: This example uses the lab topic itself as its context and objective. The instructions state what the agent should do, and the expected result states what form its answer should take. Replace these details when prompting for a different task.
-->

---

# Test and Improve

**Goal:** Find unclear or missing details by checking the agent's response against your request.

**Test with the agent:**

```text
Use my prompt to complete the task.
Check whether the response matches the expected result.
Point out any ambiguity or missing instruction, then suggest a revision.
```

**Expected result:** A tested prompt with a targeted improvement, if needed.

<!--
Speaker notes: First submit the draft and inspect the response. Compare it with the expected result rather than judging only whether it sounds plausible. If a requirement was missed or interpreted differently, revise that part and test the prompt again.
-->


<!--
Speaker notes: The statement specifies the learning activity but does not name a file format or a submission destination. Keep the final prompt and its tested improvement available to demonstrate the work, without assuming an extra submission requirement.
-->

---

# Takeaways and Common Mistakes

- **Takeaway:** Name the context, objective, instructions, and expected result.
- **Takeaway:** Test the prompt with an AI agent and compare its response with the request.
- **Mistake:** Leaving the expected result vague → describe the output you want.
- **Mistake:** Accepting the first draft → revise and test again when it misses a requirement.

<!--
Speaker notes: Clear prompts make both the task and its desired result visible. A response that misses the target is useful feedback: identify which part of the prompt caused uncertainty, adjust it, and repeat the test.
-->

---
<!-- _class: lead -->

# Thank You

Write clearly. Test. Improve.

<!--
Speaker notes: A strong prompt is built through clear instructions and checked against the response it produces. Use the four-part structure as a starting point, and refine only where the test shows that more clarity is needed.
-->
