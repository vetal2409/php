<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\ProcessRequestDecorator;
use vendor\interfaces\IRequestHelper;

/**
 * Class AuthenticateProcessRequestDecorator
 * @package vendor
 */
class AuthenticateProcessRequestDecorator extends ProcessRequestDecorator
{

    /**
     * @param IRequestHelper $requestHelper
     * @return string
     */
    public function process(IRequestHelper $requestHelper)
    {
        return __CLASS__ . ': аутентификация запроса. Action: ' . $requestHelper->getAction() . '<br>'
        . $this->processRequest->process($requestHelper);
    }
}
