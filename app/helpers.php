<?php
if (!function_exists('dbg')) {
    /**
     * Adds one or more messages to the MessagesCollector
     *
     * @param  mixed ...$value
     * @return string
     */
    function dbg($value)
    {
        if (class_exists('\Barryvdh\Debugbar\LaravelDebugbar')){
            debug($value);
        } else {
            logger($value);
        }
    }
}