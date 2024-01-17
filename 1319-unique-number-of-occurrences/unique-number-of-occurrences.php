class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        $ar = array_values(array_count_values($arr));

        if(array_unique($ar) == $ar){
            return true;
        }
        return false;
    }
}