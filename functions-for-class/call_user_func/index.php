<?php
namespace main;

class Product
{
    public function hello($name)
    {
        echo "Hello {$name} from <strong>method</strong>!!!<br>";
    }
}

function hello($name)
{
    echo "Hello {$name} from <strong>function</strong>!!!<br>";
}

hello('Vitalii');
call_user_func('main\hello', 'Vitalii');

$product = new Product();
$product->hello('Vitalii');
call_user_func(array($product, 'hello'), 'Vitalii');


// call_user_func_array for link to parameter
function increment(&$var)
{
    $var++;
}
$a = 0;
call_user_func_array('main\increment', array(&$a));
echo $a."\n";
/*
 * Result:
Hello Vitalii from function!!!
Hello Vitalii from function!!!
Hello Vitalii from method!!!
Hello Vitalii from method!!!
1
*/
