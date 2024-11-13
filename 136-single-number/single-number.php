class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $map = array();
        $count = array_count_values($nums);
        foreach ($count as $keys => $values){
            if($values <= 1){
                return $keys;
            }
        }
      
    }
}

