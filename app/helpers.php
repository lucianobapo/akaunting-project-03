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
            $debugbar = app('debugbar');
            foreach (func_get_args() as $value) {
                $debugbar->addMessage($value, 'debug');
            }
        }        
    }
}