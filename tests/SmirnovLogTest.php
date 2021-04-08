<?php


use smirnov\SmirnovLog;
use PHPUnit\Framework\TestCase;

class SmirnovLogTest extends TestCase
{

    public function testLog() {

        $this->expectOutputString("Test log");

        SmirnovLog::log("Test log");

        SmirnovLog::write();

    }


    public function testWrite() {

        SmirnovLog::write();

        $files = scandir($_SERVER['DOCUMENT_ROOT']."./Log");
        rsort($files, SORT_NUMERIC);
        $lastfile = $files[0];
        $this->assertStringEqualsFile('C:/Users/Max/Desktop/учеба/Дистанционка/Кремза/GitSmir/smirnov/Log/'.$lastfile, "Test log\n");

    }
    public function testInstance() {

        $this->assertInstanceOf(SmirnovLog::class, SmirnovLog::Instance());

    }


}
