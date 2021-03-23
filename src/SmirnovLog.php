<?php


namespace smirnov;
use core;

class SmirnovLog extends core\LogAbstract implements core\LogInterface
{

    public static function log($str) {
        SmirnovLog::Instance()->_log($str);
    }

    public function _log($str) {
        if (isset(SmirnovLog::Instance()->log)) {
            SmirnovLog::Instance()->log[]= $str;
        }
    }

    public static function write() {
        SmirnovLog::Instance()->_write();
    }

    public function _write() {
        echo implode(SmirnovLog::Instance()->log);
        $log = '';
        foreach ($this->log as $log_str) {
            $log .= $log_str."\n";
        }

        $date = new \DateTime();
        $file = "./Log/". $date->format('d.m.Y_H.i.s.v').".log";
        if (!is_dir('./Log/')) {
            mkdir("./Log/");
        }
        file_put_contents($file,$log);
    }

}