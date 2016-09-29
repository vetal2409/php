<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\interfaces\IProcessRequest;
use vendor\interfaces\IRequestHelper;

/**
 * Class MainProcess
 * @package vendor
 */
class MainProcess implements IProcessRequest
{

    /**
     * @param IRequestHelper $requestHelper
     * @return string
     */
    public function process(IRequestHelper $requestHelper)
    {
        return __CLASS__ . ': выполнение запроса. Action: ' . $requestHelper->getAction();
    }
}
