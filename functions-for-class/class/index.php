<?php
namespace mypachage;

use until as u;
use until\db\Querier as q;

class Local
{
}

echo u\Writer::class . '<br>';
echo q::class . '<br>';
echo Local::class . '<br>';

// Result:
//until\Writer
//until\db\Querier
//mypachage\Local