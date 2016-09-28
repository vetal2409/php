<?php


class ModuleRunner
{
    private $configData;

    public function __construct(array $configData)
    {
        $this->configData = $configData;
    }

    private $modules = [];

    public function init()
    {
        if (count($this->configData)) {
            $interface = new ReflectionClass('Module');
            foreach ($this->configData as $moduleName => $params) {
                $moduleClass = new ReflectionClass($moduleName);
                if (!$moduleClass->isSubclassOf($interface)) {
                    throw new Exception("Unknow type of module: $moduleName");
                }
                $module = $moduleClass->newInstance();
                $moduleMethods = $moduleClass->getMethods();
                if (count($moduleMethods)) {
                    foreach ($moduleMethods as $method) {
                        $this->handleMethod($module, $method, $params);
                    }
                }
                $this->modules[] = $module;
            }
        }
    }

    public function handleMethod(Module $module, ReflectionMethod $method, $params)
    {
        $name = $method->getName();
        $args = $method->getParameters();

        if (count($args) !== 1 || substr($name, 0, 3) !== 'set') {
            return false;
        }

        $property = strtolower(substr($name, 3));
        if (!array_key_exists($property, $params)) {
            return false;
        }

        $argClass = $args[0]->getClass();
        if (empty($argClass)) {
            $method->invoke($module, $params[$property]);
        } else {
            $method->invoke($module, $argClass->newInstance($params[$property]));
        }
    }
}
