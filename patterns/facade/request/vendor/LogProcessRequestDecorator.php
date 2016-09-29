<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\ProcessRequestDecorator;
use vendor\interfaces\IRequestHelper;

/**
 * Class LogProcessRequestDecorator
 * @package vendor
 */
class LogProcessRequestDecorator extends ProcessRequestDecorator
{

    /**
     * @param IRequestHelper $requestHelper
     * @return string
     */
    public function process(IRequestHelper $requestHelper)
    {
        return __CLASS__ . ': регистрация запроса. Action: ' . $requestHelper->getAction() . '<br>'
        . $this->processRequest->process($requestHelper);
    }
}
