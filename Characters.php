<?php

class Characters
{
    public function revertCharacters($str)
    {
        $reversed = preg_replace_callback('~[А-Яа-яЁё]+~u', function ($str) {
            $str = $str[0];
            $isUpper = preg_match('~^\p{Lu}~u', $str);
            $r = '';
            for ($i = mb_strlen($str); $i >= 0; $i--) {
                $r .= mb_substr($str, $i, 1);
            }
            return $isUpper ? mb_convert_case($r, MB_CASE_TITLE_SIMPLE) : $r;
        }, $str);
        return $reversed;
    }
}
