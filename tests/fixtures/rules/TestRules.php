<?php

namespace TestRules;

use HexletPsrLinter\Linter\RulesBaseInterfase;

/**
 * Class TestRules
 * @package HexletPsrLinter\Linter
 */
class TestRules implements RulesBaseInterfase
{
    /**
     * @param $node
     * @return mixed
     */
    public function validate($node)
    {
        // TODO: Implement validate() method.
        return "TestRules";
    }

    /**
     * @param $node
     * @return mixed
     */
    public function fix($node)
    {
        // TODO: Implement fix() method.
    }
}