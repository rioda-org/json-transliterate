<?php
/**
 * Class for transliterating Cyrillic to Latinic 
 * @author Mihailo Joksimovic
 * @version 0.1
 * Class body
 * @package transliterate
 */

class cir2lat
{
    function transliterate() // Constructor
    {
        if (func_num_args() == 1)
        {
            $args = func_get_args();
            $str = $args[0];
            $this->string = str_replace($this->niddle, $this->replace, $str);
        }
        else
        {return;}
    }
    public function transliterate_return($str)
    {
        $this->string = str_replace($this->niddle, $this->replace, $str);
        return $this->string;
    }
    public function transliterate_ref(&$str)
    {
        $this->string = str_replace($this->niddle, $this->replace, $str);
        $str = $this->string;
    }
	private $niddle = array("а", "б", "в", "г", "д", "ђ", "е", "ж", "з", "и", "ј", "к", "л", "љ", "м", "н",
    "њ", "о", "п", "р", "с", "т", "ћ", "у", "ф", "х", "ц", "ч", "џ", "ш",
    "А", "Б", "В", "Г", "Д", "Ђ", "Е", "Ж", "З", "И", "Ј", "К", "Л", "Љ", "М", "Н",
    "Њ", "О", "П", "Р", "С", "Т", "Ћ", "У", "Ф", "Х", "Ц", "Ч", "Џ", "Ш");
	
	private $replace = array ("a", "b", "v", "g", "d", "đ", "e", "ž", "z", "i", "j", "k", "l", "lj", "m", "n", "nj", "o", "p",
    "r", "s", "t", "ć", "u", "f", "h", "c", "č", "dž", "š",
    "A", "B", "V", "G", "D", "Đ", "E", "Ž", "Z", "I", "J", "K", "L", "Lj", "M", "N", "Nj", "O", "P",
    "R", "S", "T", "Ć", "U", "F", "H", "C", "Č", "Dž", "Š");

    public $string;
}
?>