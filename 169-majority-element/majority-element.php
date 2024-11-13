class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $map = array();
        $count = array_count_values($nums);
        print_r($count);
        $max_ = max(array_values($count));
        echo($max_);
        foreach($count as $keys => $values){
            if($values == $max_){
                return $keys;
            }
        }
        print_r(array_keys($count));
        
    }
}