<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\interfaces\IRequestHelper;

/**
 * Class RequestHelper
 * @package vendor
 */
class RequestHelper implements IRequestHelper
{
    private $action = 'create';

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
}
