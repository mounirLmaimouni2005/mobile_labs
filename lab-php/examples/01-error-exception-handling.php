<?php
declare(strict_types=1);

function calculateTotal(float $unitPrice, int $quantity): float
{
    if ($unitPrice < 0 || $quantity < 0) {
        throw new InvalidArgumentException(
            'The price and quantity must be zero or more.'
        );
    }

    return $unitPrice * $quantity;
}

echo "Example 1: good value\n";
echo 'Total: ', number_format(calculateTotal(12.5, 2), 2, ',', ' '), " €\n";
echo "Example 2: bad value\n";

try {
    calculateTotal(-3, 1);
    echo "This line will not be shown.\n";
} catch (InvalidArgumentException $exception) {
    echo 'Caught error: ', $exception->getMessage(), "\n";
} finally {
    echo "End of the process.\n";
}
