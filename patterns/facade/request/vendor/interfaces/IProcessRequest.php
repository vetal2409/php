<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor\interfaces;

/**
 * Interface IProcessRequest
 * @package vendor\interfaces
 */
interface IProcessRequest
{
    /**
     * @param IRequestHelper $requestHelper
     * @return string
     */
    public function process(IRequestHelper $requestHelper);
}
