---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background: #f5f7fb;
    color: #17243a;
    font-family: "Aptos", "Segoe UI", sans-serif;
    padding: 42px 54px;
  }
  h1, h2 { color: #174a7e; }
  h1 { font-size: 1.65em; }
  h2 { font-size: 1.25em; }
  code { color: #0c6380; }
  pre { font-size: 0.72em; line-height: 1.25; }
  section.lead {
    background: linear-gradient(135deg, #10243b, #174a7e);
    color: #f4f8fc;
  }
  section.lead h1, section.lead strong { color: #ffffff; }
  section.light { background: #ffffff; }
  section small { color: #53647a; }
---
<!-- _class: lead -->

# PHP Lab

## Errors and Exceptions · Namespaces · Traits

**Student:** L maimouni Mounir · **Teacher:** E-sseraj Fouad

*Small examples for learning*

---

## Plan

1. **Project technical need** — clear problems and clear code
2. **Topics and skills to learn** — exceptions, namespaces, and traits
3. **Expected work** — tutorials, examples, and ideas for use

---

## Need and project facts

- Show and handle problems. Do not mix an exception with a code bug.
- Group names to avoid clashes. Share code without false inheritance.
- This lab has no application, Composer package, or autoloader.
- Example names and classes are only for learning.

**PHP version used for checks:** PHP CLI 8.5.10.

---

## 1. Errors and exceptions

- `throw` reports a problem and stops the normal steps.
- `try` holds code that may have a problem. `catch` handles the type we expect.
- `finally` runs if the call works or if the program catches an exception.

In `examples/01-error-exception-handling.php`, a price below zero raises `InvalidArgumentException`. `catch` shows its message. `finally` shows the last message.

**Output:** total `25,00 €`, a caught bad price, then `End of the process.`

---

## 2. Namespaces

- `namespace` groups class names.
- `use` makes a long name shorter. `as` gives a name an alias.
- A namespace does not load a file.

In `examples/02-namespaces.php`, two `Product` classes use `Demo\Catalog` and `Demo\Stock`. `Demo\Application` uses them with aliases.

**Output:** `Catalog: Pen`, then `Stock: Pen in stock`.

---

## 3. Traits

- A trait shares methods with one or more classes by using `use`.
- It shares code but does not make an inheritance link.
- A trait is not a class or a business model.

In `examples/03-traits.php`, `InvoiceDemo` and `PackageDemo` use `CodeFormatter` to format a code.

**Output:** `Invoice: REF-F-01`, then `Package: REF-C-02`.

---

## Expected work and checks

Each topic has a tutorial in `tutorials/` and an example in `examples/`. The notes in `docs/integration-notes.md` show the facts and the general ideas for use.

From the lab folder, check and run each example:

```bash
php -l examples/01-error-exception-handling.php
php examples/01-error-exception-handling.php
```

Do the same for `02-namespaces` and `03-traits`. All three pairs of commands ran with PHP CLI 8.5.10. The notes show more details.
