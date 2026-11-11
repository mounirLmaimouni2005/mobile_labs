# PHP Lab: Errors, Exceptions, Namespaces, and Traits

## Project technical need

This lab teaches three useful PHP ideas. They help a program show problems clearly, organize class names, and share code without false inheritance. This is a learning project. It does not define an application, a system design, a package, or a Composer setup.

The examples work on their own. They are not part of an existing application. The integration notes give general ideas for a future project. These ideas must be checked first.

## Topics and skills to learn

### Error and exception handling

Learn the difference between a code error and a problem that the program can report and handle. Use `throw` to raise an exception. Use `try` and `catch` to handle it. Use `finally` for work that must happen in both cases. Do not hide the real cause of a problem.

### Namespaces

Use `namespace` to group names. Use `use` to import a name. Use an alias when two classes have the same name. A namespace organizes names, but it does not load files. File loading depends on the real project setup.

### Traits

Create shared code in a `trait`. Add it to a class with `use`. Learn when two classes share a small action. A trait is not a class and does not replace good inheritance.

## Expected work

Each topic has one beginner tutorial and one PHP example. Each tutorial explains the code, good practices, common mistakes, and an exercise. Names, commands, and results match across all files.

### Project files

```text
lab-php/
├── README.md
├── presentation.md
├── tutorials/
│   ├── 01-error-exception-handling.md
│   ├── 02-namespaces.md
│   └── 03-traits.md
├── examples/
│   ├── 01-error-exception-handling.php
│   ├── 02-namespaces.php
│   └── 03-traits.php
└── docs/
    └── integration-notes.md
```

### What each file does

- `README.md`: explains the learning need, the three topics, the files, and how to check the examples.
- `presentation.md`: a Marp slide deck in English. It uses the same topics and results as the examples.
- `tutorials/01-error-exception-handling.md`: explains errors, exceptions, `throw`, `try`, `catch`, and `finally`. It uses example 01.
- `tutorials/02-namespaces.md`: explains namespaces, `use`, aliases, and file loading. It uses example 02.
- `tutorials/03-traits.md`: explains how to make and use traits and when not to use them. It uses example 03.
- `examples/01-error-exception-handling.php`: checks input, catches an exception, and runs a `finally` block.
- `examples/02-namespaces.php`: creates and uses classes in more than one namespace in one file.
- `examples/03-traits.php`: shares one code formatter between two classes without inheritance.
- `docs/integration-notes.md`: shows what is known, gives general ideas for future use, and records the checks that were run.

### Run and check the examples

From the `lab-php` folder, check and run each PHP file:

```bash
php -l examples/01-error-exception-handling.php
php examples/01-error-exception-handling.php
php -l examples/02-namespaces.php
php examples/02-namespaces.php
php -l examples/03-traits.php
php examples/03-traits.php
```

The integration notes give the PHP version that was found, the commands that were run, and their results. Do not claim that something works with a project unless it was checked.
