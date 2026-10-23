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

# lab-erreur-js
## Apprendre à lire et résoudre des erreurs JavaScript

Mounir L Maimouni  
Supervised by Fouad Serraj  
Solicode · October 23, 2026

<!--
Speaker notes: This presentation focuses on one JavaScript error: an attempt to set innerHTML on a null value. I will read the message, use its location, and explain how to reason toward the cause without assuming details about the surrounding application.
-->

---

# Plan

- Read the error message
- Locate the failing operation
- Understand why the value is null
- Check the cause and resolution

<!--
Speaker notes: The plan follows the information in the error from its type and message to the exact source location. We will then connect null to the attempted property assignment and describe checks that can distinguish the likely causes.
-->

---

# Objectives

- By the end, I can identify the error type.
- By the end, I can interpret the source location.
- By the end, I can explain why null cannot receive innerHTML.
- By the end, I can describe checks to resolve the error.

<!--
Speaker notes: The goal is to interpret this specific error accurately, rather than memorize a generic fix. The final explanation should connect the failed assignment to the missing element reference and identify what to verify in the code.
-->

---

# Introduction, Problem and Solution

**Introduction:** JavaScript errors report a failed operation and its source location.

**Problem:** `tbody` is `null` when the code assigns `innerHTML`.

**Solution:** Read the error, then verify how and when `tbody` is obtained.

<!--
Speaker notes: This error is useful because it names both the invalid value and the property assignment that failed. The error alone does not reveal why tbody is null, so the resolution begins by checking the element lookup and when the assignment runs.
-->

---

# Read the Error

**Goal:** Separate the error type from the failed operation.

```text
Uncaught (in promise) TypeError:
Cannot set properties of null (setting 'innerHTML')
```

**Expected result:** A TypeError occurred in a promise; the code tried to set `innerHTML` on `null`.

<!--
Speaker notes: TypeError indicates an operation was attempted with a value that cannot support it. “Uncaught (in promise)” tells us the failure occurred in promise execution and was not handled there. The property named in the message is innerHTML.
-->

---

# Find the Failing Line

**Goal:** Use the reported location to inspect the exact operation.

```text
script.js:13:26
tbody.innerHTML = "";
```

**Expected result:** The assignment on line 13 is the point to investigate.

<!--
Speaker notes: The location identifies the file, line, and column where the exception was reported. The code shows a property assignment, so the key question is not whether an empty string is valid, but what value tbody refers to at that moment.
-->

---

# Trace the Null Value

**Goal:** Determine why `tbody` has no element reference.

- `null` means no object is available for this assignment.
- Check that the lookup selects an existing `<tbody>`.
- Check that the element exists when the code runs.
- Resolve the lookup or timing cause before assigning `innerHTML`.

**Expected result:** The cause is tied to element selection or availability at execution time.

<!--
Speaker notes: A missing match from an element lookup can produce null, and code that runs before the relevant markup is available can also fail to obtain the intended element. Check the actual lookup and execution order in the surrounding code; the error message by itself cannot choose between these causes.
-->

---

# Deliverable and Submission

- The statement identifies this JavaScript error as the lab topic.
- No separate deliverable or submission method is specified.

<!--
Speaker notes: The lab information provided names the topic and the exact error details, but it does not define a separate file to submit or a destination. Do not infer a repository, upload location, or required application change from the error alone.
-->

---

# Takeaways and Common Mistakes

- **Takeaway:** Read the error type, property, and location together.
- **Takeaway:** `null` cannot receive an `innerHTML` assignment.
- **Takeaway:** Verify the lookup and execution timing.
- **Mistake:** Blaming the empty string; check the receiver, `tbody`.
- **Mistake:** Guessing the cause; inspect the lookup and when it runs.

<!--
Speaker notes: The receiver of the property assignment is the important value here: tbody is null, while the assigned empty string is not the source of this TypeError. Avoid choosing a fix until the element lookup and timing have been checked in context.
-->

---
<!-- _class: lead -->

# Thank You

<!--
Speaker notes: The central lesson is to follow the error from its message to the failing line, then investigate the value used by that line. For this error, the property assignment fails because tbody is null.
-->
