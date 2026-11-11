# Namespaces in PHP

## Goals

After this tutorial, you can make a namespace, import a class with `use`, make an alias, and explain why a namespace does not load a file.

## 1. Why use namespaces?

A **namespace** gives a full name to a class, function, or constant. It groups related names. It also stops name clashes between classes.

For example, `Demo\Catalog\Product` and `Demo\Stock\Product` are two different full names. Both classes have the short name `Product`.

## 2. Main code pattern

Put `namespace` at the start of a PHP file. It can come after `declare`, if you use it. In a file with one namespace, `use` makes a long name shorter:

```php
namespace Demo\Application;

use Demo\Catalog\Product;
```

If two imported classes have the same short name, give them aliases:

```php
use Demo\Catalog\Product as CatalogProduct;
use Demo\Stock\Product as StockProduct;
```

## 3. The example

File: [`examples/02-namespaces.php`](../examples/02-namespaces.php)

This example has one `Product` class in `Demo\Catalog` and another in `Demo\Stock`. It uses both in `Demo\Application`. The aliases `CatalogProduct` and `StockProduct` show which class the code uses. The classes return `Pen` and `Pen in stock`.

The `namespace { ... }` blocks put more than one namespace in one example file. In a real project with many files, the classes are often in separate files. The project needs code or an autoloader to load those files.

**Important:** a namespace or a `use` line does not load a file. This example works because all classes are in the same file. It does not set up Composer or an autoloader.

## 4. Run the example

From the project folder:

```bash
php -l examples/02-namespaces.php
php examples/02-namespaces.php
```

The syntax check should say there are no errors. The program shows:

```text
Catalog: Pen
Stock: Pen in stock
```

## 5. Good ways to work

- Choose namespace names that show a clear job or subject.
- Use the same letter style each time. Class names often use `PascalCase`.
- Use clear aliases when names may be confused.
- Check how the real project loads files before moving classes into new files.

## 6. Common mistakes

- Forget that the full name has all parts of the namespace.
- Put `namespace` after normal running code.
- Think that `use` loads a file or makes an object. It only imports a name.
- Use an unclear alias or too many namespace parts without a reason.

## Exercise

Add a third `Product` class in `Demo\Order`. Give it a method that returns `Notebook`. Import it in `Demo\Application` as `OrderProduct`. Show its name and keep the first two results the same.
