<?php

namespace Swoft\Db\Bean\Parser;

use Swoft\Bean\Parser\AbstractParser;
use Swoft\Db\Bean\Annotation\Statement;
use Swoft\Db\Bean\Collector\StatementCollector;

/**
 * StatementParser
 */
class StatementParser extends AbstractParser
{
    /**
     * @param string    $className
     * @param Statement $objectAnnotation
     * @param string    $propertyName
     * @param string    $methodName
     * @param null      $propertyValue
     *
     * @return null
     */
    public function parser(
        string $className,
        $objectAnnotation = null,
        string $propertyName = '',
        string $methodName = '',
        $propertyValue = null
    ) {
        StatementCollector::collect($className, $objectAnnotation, $propertyName, $methodName, $propertyValue);

        return null;
    }

}