# Integration Notes

## What we know

This lab has learning materials and PHP examples that run on their own. It does not define an application, a business area, an app structure, a Composer package, a framework, an app start file, or an autoloader. The names `Demo\Catalog`, `Demo\Stock`, `Demo\Application`, `InvoiceDemo`, and `PackageDemo` are examples. They are not classes from an existing application.

The PHP version below is the version found when these examples were checked: **PHP CLI 8.5.10**. It is not a minimum version for a future project.

## Ideas for a clear project

These are general ideas. Check them against the real project first.

1. **Handle problems at the right place.** A check can raise a clear exception when a value is not allowed. A part of the program can then give a useful answer. Catch only exceptions that this part can handle. Keep the cause of the problem. Do not show private details to a user.
2. **Group names, but check file loading.** Namespaces can show the jobs or areas of a project. They can also stop name clashes. Choose folders, file names, and an autoloader from the real project setup. `namespace` and `use` do not load files.
3. **Share code with care.** A trait can be useful when more than one class needs the same small action. Use a class or a service when the code has its own job or needs much data. Do not use a trait to make a false family of classes.
4. **Check the real project.** First learn its structure and rules. Then use its own checks on these ideas. This lab does not say that the project has tests or logs.

## Checks that were run

These commands were run from the `lab-php` folder with PHP CLI 8.5.10:

| File | Syntax check | Run |
|---|---|---|
| `examples/01-error-exception-handling.php` | `php -l examples/01-error-exception-handling.php` — no syntax errors | `php examples/01-error-exception-handling.php` — passed; output matches the tutorial |
| `examples/02-namespaces.php` | `php -l examples/02-namespaces.php` — no syntax errors | `php examples/02-namespaces.php` — passed; output matches the tutorial |
| `examples/03-traits.php` | `php -l examples/03-traits.php` — no syntax errors | `php examples/03-traits.php` — passed; output matches the tutorial |

These checks only cover the three example files. They are not tests of an app or an integration in this lab.

The output seen when the examples ran:

```text
Example 1: good value
Total: 25,00 €
Example 2: bad value
Caught error: The price and quantity must be zero or more.
End of the process.
```

```text
Catalog: Pen
Stock: Pen in stock
```

```text
Invoice: REF-F-01
Package: REF-C-02
```
