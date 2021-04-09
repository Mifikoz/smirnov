<?php


use smirnov\SmirnovException;
use PHPUnit\Framework\TestCase;

class SmirnovExceptionTest extends TestCase {
    public function testExceptionThrow() {
        $this->expectException(SmirnovException::class);
        throw new SmirnovException('Test exception\n\r');
    }
}
