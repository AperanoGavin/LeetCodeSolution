class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $original
     * @return Integer
     */
    function findFinalValue($nums, $original) {
        $res = true;
        $or = $original;

        while($res == true){
            if(in_array($or , $nums)){
                $or = 2 * $or;
            }else{  
                 $res = false;
            }
        }

        return $or;
        
    }
}