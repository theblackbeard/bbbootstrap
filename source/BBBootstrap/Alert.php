<?php
    namespace Source\BBBootstrap;

    class Alert {

        private const ALERT = 'alert';
        const SUCCESS = 'alert-success';
        const INFO = 'alert-info';
        const WARNING = 'alert-warning';
        const DANGER = 'alert-danger';

        private static $alertType;
        private static $alert;
        private static $message;
        private static $dismissible;


        private static function setAlert($message, $alertType, $dismissible=false){
            $reflection = new \ReflectionClass(__CLASS__);
            $alertTypes = $reflection->getConstants();

            self::$message = trim($message);

            self::$alertType = (!empty($alertType)|| in_array($alertType, $alertType) ? " {$alertType}" : "");
            
            self::$dismissible = ($dismissible) ? "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" : "";

            self::$alert = "<div class='".self::ALERT.self::$alertType."'>"
            .self::$dismissible
            .self::$message.
            "</div>";

        }

        public static function show($message, $alertType, $dismissible=false)
        {
            self::setAlert($message, $alertType, $dismissible);
            echo self::$alert;
        }

    }