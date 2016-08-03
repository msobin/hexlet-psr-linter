<?php

namespace HexletPsrLinter\ReportBuilder;

/**
 * Class ReportJson
 * @package HexletPsrLinter\ReportBuilder
 */
class ReportJson implements ReportBaseInterface
{

    /**
     * @param $logger
     * @return string
     */
    public function build($logger)
    {
        $jsonArray = [];
        for ($index = 0; $index < $logger->getSize(); $index++) {
            $record = $logger->getRecord($index);
            $jsonArray [] = [
                $record->getLine() . ':' . $record->getLine(),
                $logger->getLevelAsText($record->getLevel()),
                $record->getMessage(),
                $record->getName()
            ];
        }
        return json_encode($jsonArray);
    }
}
