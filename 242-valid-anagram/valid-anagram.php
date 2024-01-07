class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $array_S = str_split( $s);
        $array_T = str_split( $t);
        sort($array_S);
        sort($array_T);
        if( $array_T == $array_S){
            return true;
        }
        return false;
        
    }
}