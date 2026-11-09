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
<!-- _class: lead -->

# lab-erreur-js
## Apprendre à lire et résoudre des erreurs JavaScript

### Introduction

<!--
Speaker notes: This lab focuses on understanding one JavaScript error and the line where it occurs. We will use the message and the supplied code to explain what failed and what needs to be checked.
-->

---

# Problématique

How can we understand why this assignment fails?

```javascript
tbody.innerHTML = "";
```

- The error reports that the value is `null`.
- The code attempts to set its `innerHTML` property.

<!--
Speaker notes: The problem is not the empty string on the right side. The error says that the value before the dot, tbody, is null when JavaScript tries to assign innerHTML.
-->

---

# Definition

## Reading the error

```text
Uncaught (in promise) TypeError:
Cannot set properties of null (setting 'innerHTML')
```

- **TypeError:** an operation is invalid for the value used.
- **null:** no object is available for this property assignment.
- **Uncaught (in promise):** the error was not handled in the promise.

<!--
Speaker notes: Read the message from the error type through to the named property. The promise wording describes where the unhandled error occurred; the immediate failing operation is still an attempt to set innerHTML on null.
-->

---

# Solution

## Use the reported location

```text
script.js:13:26
```

- `script.js` identifies the file.
- `13` identifies the line.
- `26` identifies the column.

**Expected result:** Inspect the assignment at line 13.

<!--
Speaker notes: The location narrows the investigation to the supplied assignment. It does not by itself tell us why tbody is null, so the surrounding code must be checked to determine how that value was obtained.
-->

---

# Solution

## Check why `tbody` is null

- Check how `tbody` is selected or assigned.
- Verify that the intended element exists.
- Check whether it is available when this line runs.

**Expected result:** Identify whether the lookup or execution timing explains the null value.

<!--
Speaker notes: A null value can result when the intended element was not found or was not available at the time this code ran. The supplied error does not show the lookup or surrounding execution order, so those details must be inspected rather than guessed.
-->

---

# Conclusion

- The failure is a `TypeError` on a null value.
- The reported line attempts to assign `innerHTML`.
- Investigate how and when `tbody` is obtained.

<!--
Speaker notes: The error message, location, and code together explain what failed: an assignment to innerHTML used a null receiver. To resolve the underlying cause, verify the element lookup and its availability when the assignment executes.
-->
