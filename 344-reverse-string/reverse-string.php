class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $map = array();
        $map = strrev(implode('' , $s));
        $s = str_split($map);
        return $s;
        
    }
}