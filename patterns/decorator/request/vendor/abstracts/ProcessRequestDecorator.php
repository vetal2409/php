<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor\abstracts;

use vendor\interfaces\IProcessRequest;

/**
 * Class ProcessRequestDecorator
 * @package vendor\abstracts
 */
abstract class ProcessRequestDecorator implements IProcessRequest
{
    protected $processRequest;

    /**
     * ProcessRequestDecorator constructor.
     * @param IProcessRequest $processRequest
     */
    public function __construct(IProcessRequest $processRequest)
    {
        $this->processRequest = $processRequest;
    }
}
