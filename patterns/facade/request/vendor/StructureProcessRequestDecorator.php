<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor;

use vendor\abstracts\ProcessRequestDecorator;
use vendor\interfaces\IRequestHelper;

/**
 * Class StructureProcessRequestDecorator
 * @package vendor
 */
class StructureProcessRequestDecorator extends ProcessRequestDecorator
{

    /**
     * @param IRequestHelper $requestHelper
     * @return string
     */
    public function process(IRequestHelper $requestHelper)
    {
        return __CLASS__ . ': упорядочение данных запроса. Action: ' . $requestHelper->getAction() . '<br>'
        . $this->processRequest->process($requestHelper);
    }
}
