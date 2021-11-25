<?php
/**
 * Class for transliterating Latinic to Cyrillic 
 * @author Mihailo Joksimovic
 * @edited Dario Alispahic
 * @version 0.1
 * Class body
 * @package transliterate
 */

class lat2cir
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
	
	private $niddle = array ("a", "b", "v", "g", "đ", "dž", "d", "e", "ž", "z", "i", "k", "lj", "l", "m", "nj", "n", "j", "o", "p",
    "r", "s", "t", "ć", "u", "f", "h", "c", "č", "š",
    "A", "B", "V", "G", "D", "Đ", "E", "Ž", "Z", "I", "J", "K", "L", "Lj", "M", "N", "Nj", "O", "P",
    "R", "S", "T", "Ć", "U", "F", "H", "C", "Č", "Dž", "Š");
	
    private $replace = array("а", "б", "в", "г", "ђ", "џ", "д", "е", "ж", "з", "и", "к", "љ", "л", "м", "њ", "н", "ј", "о", "п",
	"р", "с", "т", "ћ", "у", "ф", "х", "ц", "ч", "ш",
    "А", "Б", "В", "Г", "Д", "Ђ", "Е", "Ж", "З", "И", "Ј", "К", "Л", "Љ", "М", "Н", "Њ", "О", "П", 
	"Р", "С", "Т", "Ћ", "У", "Ф", "Х", "Ц", "Ч", "Џ", "Ш");

    public $string;
}
?>