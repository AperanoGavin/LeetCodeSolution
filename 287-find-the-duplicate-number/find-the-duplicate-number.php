class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findDuplicate($nums) {
        $map = array();
        $count =  array_count_values($nums);
        print_r($count);
        foreach($count as $keys => $values){
            if($values >= 2){
                return $keys;
            }
        }
        
    }
}