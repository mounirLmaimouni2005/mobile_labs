<?php
declare(strict_types=1);

namespace Demo\Catalog {
    final class Product
    {
        public function name(): string
        {
            return 'Pen';
        }
    }
}

namespace Demo\Stock {
    final class Product
    {
        public function name(): string
        {
            return 'Pen in stock';
        }
    }
}

namespace Demo\Application {
    use Demo\Catalog\Product as CatalogProduct;
    use Demo\Stock\Product as StockProduct;

    echo 'Catalog: ', (new CatalogProduct())->name(), PHP_EOL;
    echo 'Stock: ', (new StockProduct())->name(), PHP_EOL;
}
