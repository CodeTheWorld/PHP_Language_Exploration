<?php

namespace Exploration\Utilities;

/**
 * Created by deshengkong.
 * Date: 14/12/23
 * Time: 下午8:10
 */
class Logger {
    private static $logPath = '';
    private static $logLevel = LOG_DEBUG;
    private static $facility = LOG_USER;
    private static $ident = 'exploration';
    private static $maps = array(
        LOG_DEBUG => 'debug',
        LOG_INFO => 'info',
        LOG_NOTICE => 'notice',
        LOG_WARNING => 'warning',
        LOG_ERR => 'err',
        LOG_CRIT => 'crit',
        LOG_ALERT => 'alert',
        LOG_EMERG => 'emerg'
    );

    private function __construct() {
    }

    private function __clone() {}

    public static function getInstance() {
        static $instance = null;
        if (is_null($instance)) {
            $instance = new self();
        }
        return $instance;
    }

    /**
     * @return int
     */
    public static function getLogLevel() {
        return self::$logLevel;
    }

    /**
     * @param int $logLevel
     *
     * @return \Exploration\Utilities\Logger
     */
    public static function setLogLevel($logLevel) {
        self::$logLevel = $logLevel;
        return self::getInstance();
    }

    /**
     * @return string
     */
    public static function getLogPath() {

        if (!empty(self::$logPath) && is_writable(self::$logPath)) {
            return self::$logPath;
        }

        $path = dirname(dirname(__FILE__)) . 'logs';
        $path = rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . date('Ym') . DIRECTORY_SEPARATOR . date('d') . DIRECTORY_SEPARATOR;
        if (!is_writable($path)) {
            self::chmod($path, 0777);
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
        }
        return $path;
    }

    /**
     * @param string $logPath
     *
     * @return \Exploration\Utilities\Logger
     */
    public static function setLogPath($logPath) {

        $path = trim($logPath);
        if (!empty($path) && is_writable($path)) {
            self::$logPath = $logPath;
        }
        return self::getInstance();
    }

    /**
     * 递归修改目录权限
     * @param $path
     * @param $mode
     */
    private static function chmod($path, $mode) {
        $path = explode(DIRECTORY_SEPARATOR, $path);
        $path = array_filter($path);
        $dir = '';
        foreach ($path as $val) {
            $dir .= DIRECTORY_SEPARATOR . $val;
            if (file_exists($dir) && !is_writable($dir)) {
                chmod($dir, $mode);
            }
        }
    }

}