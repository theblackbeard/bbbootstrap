<?php
    namespace  Source\BBBootstrap;

    class Panel {
        private const PANEL = 'panel';
        private const PDE = 'panel-default';
        const PS = 'panel-success';
        const PI = 'panel-info';
        const PW = 'panel-warning';
        const PD = 'panel-danger';

        private static $panelType;
        private static $panelHead;
        private static $panelBody;
        private static $panelFooter;

        private static $css;

        private static $panel;

        private static $mainCss;
        private static $bodyCss;


        private static function setPanel($data=array(), $panelType, $panelHead=false, $panelFooter=false, $css=array())
        {
                if(count($data)==0) return false;
                $reflection = new \ReflectionClass(__CLASS__);
                $panelTypes = $reflection->getConstants();

                $title = $data['title'];
                $body = $data['body'];
                $footer = $data['footer'];


                self::$mainCss = (!empty($css) || !empty($css['main'])) ? implode(" " , $css['main']) : "";
                self::$bodyCss = (!empty($css) || !empty($css['body'])) ? implode(" " , $css['body']) : "";

                self::$panelType = (!empty($panelType)|| in_array($panelType, $panelTypes) ? " {$panelType}" : ' ' . self::PDE);
                self::$panelHead = ($panelHead) ? "<div class='panel-heading'>". $title."</div>" : "";
                self::$panelFooter = ($panelFooter) ? " <div class='panel-footer'>".$footer."</div>" : "";



                self::$panel = "<div class='".self::PANEL.self::$panelType." ".self::$mainCss."'>
                                    ".self::$panelHead."
                                    <div class='panel-body ".self::$bodyCss."'>".$body."</div>
                                    ".self::$panelFooter."
                                </div>";


        }

        public static function show($data=array(), $panelType, $panelHead=false, $panelFooter=false, $css=array())
        {
            self::setPanel($data, $panelType, $panelHead, $panelFooter, $css);
            echo self::$panel;
        }





    }