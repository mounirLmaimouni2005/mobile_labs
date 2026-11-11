<?php
declare(strict_types=1);

trait CodeFormatter
{
    public function formatCode(string $code): string
    {
        return 'REF-' . strtoupper($code);
    }
}

final class InvoiceDemo
{
    use CodeFormatter;
}

final class PackageDemo
{
    use CodeFormatter;
}

echo 'Invoice: ', (new InvoiceDemo())->formatCode('F-01'), PHP_EOL;
echo 'Package: ', (new PackageDemo())->formatCode('C-02'), PHP_EOL;
