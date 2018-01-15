<?php

namespace ResponseMapper;

use Psr\Log\LoggerInterface;
use ReflectionObject;

/**
 * Class ResponseBase
 * @package Infrastructure\WebServiceClient\LinkedInApi\ApiSpecification\Models\Response
 */
class Mapper
{
    /** @var LoggerInterface */
    protected $logger;

    /**
     * JsonMapper constructor.
     * @param LoggerInterface|null $logger
     */
    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    /**
     * Map the object with data
     *
     * @param $data
     * @param $class
     * @return mixed
     */
    public function map($data, $class)
    {
        return $this->mapObject($data, $class);
    }

    /**
     * @param $data
     * @param $object
     * @return mixed
     */
    protected function mapObject($data, $object)
    {
        if (!is_object($object)) {
            if (class_exists($object)) {
                $object = new $object();
            } else {
                if (!is_null($this->logger)) {
                    $this->logger->critical("No object passed for mapping");
                }
                return null;
            }
        };

        $reflectionObject = new ReflectionObject($object);
        $namespace = $reflectionObject->getNamespaceName();
        $reflectionProperties = $reflectionObject->getProperties();

        /** @var \ReflectionProperty $prop */
        foreach ($reflectionProperties as $prop) {
            $parametersName = $prop->getName();
            $setter = 'set'.ucfirst($parametersName);
            $getter = 'get'.ucfirst($parametersName);

            if (!$reflectionObject->hasMethod($setter) || !$reflectionObject->hasMethod($getter)) {
                // $this->logger->error("Setter or getter not presented for {$parametersName}");
            }

            $docBlock = $this->parseAnnotations($prop->getDocComment());
            $parameterType = (isset($docBlock['var'][0]) ? $docBlock['var'][0] : 'none');
            $arrayKey = (isset($docBlock['arrayKey'][0]) ? $docBlock['arrayKey'][0] : '');
            if (!isset($data[$parametersName]) && !isset($data[$arrayKey])) {
                // $this->logger->error("Parameter not found: {$parametersName}");
                continue;
            }
            $item = (isset($data[$parametersName])) ? $data[$parametersName] : $data[$arrayKey];
            if ($parameterType === 'none') {
                // $this->logger->error("Type not found for {$parametersName}");
                continue;
            }
            if ($this->isScalarType($parameterType)) {
                $object->{$setter}($item);
                continue;
            }
            if ($parameterType === 'array') {
                $object->{$setter}($item);
                continue;
            }
            if ($this->isObject($namespace.'\\'.$parameterType)) {
                $className = $namespace.'\\'.$parameterType;
                if (strpos($className, '[]')) {
                    $className = str_replace('[]', '', $className);
                    $mappedArray = $this->mapArray($item, $className);
                    $object->{$setter}($mappedArray);
                    continue;
                }

                $mappedArray = $this->mapObject($item, $className);
                $object->{$setter}($mappedArray);
                continue;
            }
        }
        return $object;
    }

    /**
     * @param $data
     * @param null $className
     * @return mixed
     */
    protected function mapArray($data, $className = null)
    {
        $arrayData = [];
        foreach ($data as $key => $value) {
            $arrayData[$key] = (!is_null($className)) ? $this->mapObject($value, $className) : $value;
        }

        return $arrayData;
    }

    /**
     * Copied from PHPUnit 3.7.29, Util/Test.php
     *
     * @param string $docBlock Full method docblock
     *
     * @return array
     */
    protected static function parseAnnotations($docBlock)
    {
        $annotations = array();
        // Strip away the docblock header and footer
        // to ease parsing of one line annotations
        $docBlock = substr($docBlock, 3, -2);
        $re = '/@(?P<name>[A-Za-z_-]+)(?:[ \t]+(?P<value>.*?))?[ \t]*\r?$/m';
        if (preg_match_all($re, $docBlock, $matches)) {
            $numMatches = count($matches[0]);
            for ($i = 0; $i < $numMatches; ++$i) {
                $annotations[$matches['name'][$i]][] = $matches['value'][$i];
            }
        }
        return $annotations;
    }

    /**
     * @param string $type
     * @return string
     */
    protected function isScalarType($type)
    {
        return $type == 'NULL'
            || $type == 'string'
            || $type == 'boolean' || $type == 'bool'
            || $type == 'integer' || $type == 'int'
            || $type == 'double' || $type == 'float';
    }

    /**
     * @param $type
     * @return bool
     */
    protected function isObject($type)
    {
        $type = $parameterType = str_replace('[]', '', $type);
        if (class_exists($type)) {
            return true;
        }

        return false;
    }
}
