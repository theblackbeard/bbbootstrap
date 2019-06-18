<?php 
    namespace Source\BBBootstrap    ;

    class Thumbnails {

            private static $imgSrc;
            private static $urlSrc;

            private static $sizeTypeX;
            private static $sizeTypeS;
            private static $sizeTypeM;
            private static $sizeTypeL;

            private static $thumb;

            private static function setThumb($data=array(), $sizeTypeX='', $sizeTypeS='', $sizeTypeM='', $sizeTypeL='', $target=false)
            {
                $reflection = new \ReflectionClass(__CLASS__);
                $sizeTypes = $reflection->getConstants();
               
                $target = ($target==false) ? '' : "target='_blank'";
                self::$sizeTypeX = (!empty($sizeTypeX) || in_array($sizeTypeX, $sizeTypes) ? "{$sizeTypeX}" : Grid::X6);
                self::$sizeTypeS = (!empty($sizeTypeS) || in_array($sizeTypeS, $sizeTypes) ? " {$sizeTypeS}" : "");
                self::$sizeTypeM = (!empty($sizeTypeM) || in_array($sizeTypeM, $sizeTypes) ? " {$sizeTypeM}" : " " . Grid::M3);
                self::$sizeTypeL = (!empty($sizeTypeL) && in_array($sizeTypeL, $sizeTypes) ? " {$sizeTypeL}" : "");

                self::$thumb = "<div class=\"row\">";
                foreach($data as $d):
                    self::$imgSrc = $d[0];
                    self::$urlSrc = $d[1];
                    self::$thumb .= 
                        "<div class='".self::$sizeTypeX.self::$sizeTypeS.self::$sizeTypeM.self::$sizeTypeL."'>
                            <a href='".self::$urlSrc."' class='thumbnail' {$target}>
                                <img src='".self::$imgSrc."' />
                            </a>
                        </div>";
                endforeach;
               self::$thumb .= "</div>";

            }

            public static function show($data=array(), $sizeTypeS, $sizeTypeM, $sizeTypeL='', $target=false)
            {
                self::setThumb($data, $sizeTypeS, $sizeTypeM, $sizeTypeL, $target);
                echo self::$thumb;
            }

            


        
    }