<?php

namespace Cubalider\Test\Component\Util;

class CodeGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers \Cubalider\Component\Util\CodeGenerator::generate
     */
    public function testGenerateDefaultParameter()
    {
        $generator = new \Cubalider\Component\Util\CodeGenerator();

        $code = $generator->generate();
        $this->assertEquals(1, preg_match("/^\d{4}-\d{4}-\d{4}$/", $code));
    }

    /**
     * @covers \Cubalider\Component\Util\CodeGenerator::generate
     */
    public function testGenerateWithDividerParameter()
    {
        $generator = new \Cubalider\Component\Util\CodeGenerator();

        $code = $generator->generate('xxxx-xxxx-xxxx', '+');
        $this->assertEquals(1, preg_match("/^\d{4}\+\d{4}\+\d{4}$/", $code));
    }

    /**
     * @covers \Cubalider\Component\Util\CodeGenerator::generate
     */
    public function testGenerateWithPatternParameter()
    {
        $generator = new \Cubalider\Component\Util\CodeGenerator();

        $code = $generator->generate('xx-xx-xxx');
        $this->assertEquals(1, preg_match("/^\d{2}-\d{2}-\d{3}$/", $code));
    }
}
