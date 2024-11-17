class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {
        for($i=0;$i<sizeof($arr);$i++){
            for($j=0;$j<sizeof($arr);$j++){
                if(($i!=$j) && (0<=$i && $j<sizeof($arr)) && ($arr[$i] == 2 * $arr[$j]) ){
                    return true;
                }
            }
        }

        return false;
        
    }
}