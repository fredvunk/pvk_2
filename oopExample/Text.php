<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 06.02.2019
 * Time: 9:09
 */

class Text
{
    var $str = '';

    /**
     * Text constructor.
     * @param string $str
     */
    public function __construct($s)
    {
        $this->setText($s);
    }

    function setText($s){
        $this->str = $s;
    }

    function showText(){
        echo '<b>'.$this->str.'</b><br>';
    }

}