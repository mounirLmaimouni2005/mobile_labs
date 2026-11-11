# Error and Exception Handling in PHP

## Goals

After this tutorial, you can explain an exception, raise one with `throw`, handle it with `try` and `catch`, and say what `finally` does.

## 1. Errors, exceptions, and normal code

A program usually follows its normal steps. Bad input or a problem with an action can stop those steps.

- An **exception** is an object that tells us about a problem the code can handle. PHP has classes such as `InvalidArgumentException` for common problems.
- A PHP **error** (`Error`) often means a bigger code problem, such as a call that cannot work. Errors and exceptions both use `Throwable`.
- An exception does not fix a bug. Do not catch every problem or hide its cause.

## 2. Main code pattern

```php
try {
    // Code that may raise an exception.
} catch (InvalidArgumentException $exception) {
    // A response for this type of problem.
} finally {
    // Code that runs with or without an exception.
}
```

`throw` raises an exception. The matching `catch` block stops the normal steps and gets the exception object. `finally` is optional. Use it for cleanup or a last message that must run in both cases.

## 3. The example

File: [`examples/01-error-exception-handling.php`](../examples/01-error-exception-handling.php)

The function `calculateTotal` gets a unit price and a number of items. It does not allow values below zero. It raises `InvalidArgumentException` for bad values. For good values, it returns the total.

First, the program works out `12.5 × 2`. Next, it calls the function with a price below zero. `try` is around this call. `catch` shows the exception message. `finally` shows the last message. The line after the bad call does not run because `throw` moves to `catch`.

## 4. Run the example

From the project folder:

```bash
php -l examples/01-error-exception-handling.php
php examples/01-error-exception-handling.php
```

The syntax check should say there are no errors. The program shows:

```text
Example 1: good value
Total: 25,00 €
Example 2: bad value
Caught error: The price and quantity must be zero or more.
End of the process.
```

## 5. Good ways to work

- Raise an exception close to the bad value. Handle it where you can choose a useful response.
- Catch the type of exception you expect. Do not catch every error.
- Use a clear message. Keep the facts that help find the problem.
- Use `finally` for work that must always happen. Do not add it when it is not needed.

## 6. Common mistakes

- Show an error and keep going as if the calculation worked.
- Put all the code in `catch (Throwable)` and hide code bugs too.
- Use an exception for a normal step in the program.
- Think that `finally` only runs when there is an error.

## Exercise

Change the good call for a short time and use a negative quantity. Check that the same exception is caught. Then use zero and check the result. Put the file back after the exercise.
