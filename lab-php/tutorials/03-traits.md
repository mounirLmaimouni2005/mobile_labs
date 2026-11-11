# Traits in PHP

## Goals

After this tutorial, you can make a trait, use it in more than one class, and explain how sharing code is different from inheritance.

## 1. What is a trait?

A **trait** is a way to share code. It gives methods to one or more classes with the word `use`. You cannot make an object from a trait. A trait is not a class or a type.

A trait can help when classes need the same small method but should not have the same parent class.

## 2. Main code pattern

```php
trait CodeFormatter
{
    public function formatCode(string $code): string
    {
        return 'REF-' . strtoupper($code);
    }
}

class InvoiceDemo
{
    use CodeFormatter;
}
```

The method from the trait is ready in the class. The object is an `InvoiceDemo`, not a `CodeFormatter`.

## 3. The example

File: [`examples/03-traits.php`](../examples/03-traits.php)

The `CodeFormatter` trait has a `formatCode` method. It adds `REF-` before a code and makes its letters big. The `InvoiceDemo` and `PackageDemo` classes use this trait. Each class calls the same method with a different code.

This example shows shared code. It does not show real application classes.

## 4. Run the example

From the project folder:

```bash
php -l examples/03-traits.php
php examples/03-traits.php
```

The syntax check should say there are no errors. The program shows:

```text
Invoice: REF-F-01
Package: REF-C-02
```

## 5. Good ways to work

- Use a trait when classes really share the same clear action.
- Keep a trait small and easy to read. Give it a clear name.
- Check what the trait needs and look for method name clashes.
- Use a class or a service when the code has its own job or needs much data.

## 6. Common mistakes

- Use a trait for every copy of code, even when the code does different jobs.
- Think that a trait makes a class family or can make an object.
- Put hidden data or many needs in a trait. This makes it hard to use.
- Forget to fix a method name clash when two traits have the same method.

## Exercise

Add a `ReturnDemo` class that uses `CodeFormatter`. Show `Return: REF-R-03`. Check that the first two results do not change.
