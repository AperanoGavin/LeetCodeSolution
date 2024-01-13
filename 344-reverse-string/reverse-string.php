class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $string_S = implode('' , $s);
        $revserse_S =strrev($string_S);
    
        $s = str_split($revserse_S);
        return $s;
    }
}