<?php

class Product
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class ProcessSale
{
    private $callbacks;

    public function registerCallback($callback)
    {
        if (!is_callable($callback)) {
            throw new InvalidArgumentException('Your fallback can\'t be call!');
        }
        $this->callbacks[] = $callback;
    }

    public function sale(Product $product)
    {
        echo $product->getName() . ': in process....<br>';
        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}

/**
 * Class Mailer
 * for $logger3
 */
class Mailer
{
    public function doMail(Product $product)
    {
        echo "Mailing ({$product->getName()})<br>";
    }
}

/**
 * Class Totalizer
 * for $logger4
 */
class Totalizer
{
    /**
     * @return Closure
     */
    static public function warnAmount()
    {
        return function (Product $product) {
            if ($product->getPrice() > 5) {
                echo "You are buying an expensive product: {$product->getName()}<br>";
            }
        };
    }

    /**
     * @param $amt
     * @return Closure
     *
     */
    static public function warnAmount2($amt)
    {
        $count = 0;
        return function (Product $product) use ($amt, &$count) {
            $count += $product->getPrice();
            echo "Sum: $count<br>";
            if ($count > $amt) {
                echo "Products for {$count} was sold<br>";
            }
        };
    }
}

$logger = create_function('Product $product', 'echo "Writing1 ({$product->getName()})<br>";');
$logger2 = function (Product $product) { // php version >= 5.3
    echo "Writing2 ({$product->getName()})<br>";
};
$logger3 = array(new Mailer(), 'doMail'); // is_callable can check in next format: array($SomeObject, 'MethodName')
$logger4 = Totalizer::warnAmount();
$logger5 = Totalizer::warnAmount2(8);

$processor = new ProcessSale();
$processor->registerCallback($logger);
$processor->registerCallback($logger2);
$processor->registerCallback($logger3);
$processor->registerCallback($logger4);
$processor->registerCallback($logger5);

$processor->sale(new Product('Shoes', 6));
echo '<br>';
$processor->sale(new Product('Coffee', 6));
