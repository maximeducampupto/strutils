<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 28-Jan-19
 * Time: 3:35 PM
 */

class StrUtils
{
    private $string;

    public function __construct($string)
    {
        $this->string = $string;
    }

    public function bold()
    {
        return "<b>$this->string</b>";
    }

    public function italic()
    {
        return "<i>$this->string</i>";
    }

    public function capitalize()
    {
        return strtoupper($this->string);
    }

    public function underline()
    {
        return "<u>$this->string</u>";
    }

    public function uglify()
    {
        return "<u><b><i>$this->string</i></b></u>";
    }

}
