<?php
/**
 * Author: Vitalii Sydorenko <vetal.sydo@gmail.com>
 */
namespace vendor\abstracts;

/**
 * Class Furniture
 * @package vendor\abstracts
 */
abstract class Furniture
{
    protected $materials = [];
    protected $length;
    protected $width;
    protected $height;

    /**
     * @return string
     */
    public function getMaterials()
    {
        return implode(', ', $this->materials);
    }

    /**
     * @param string $materials
     */
    public function addMaterial($materials)
    {
        $this->materials[] = $materials;
    }

    /**
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param string $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param string $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param string $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return double
     */
    abstract public function getPrice();
}
