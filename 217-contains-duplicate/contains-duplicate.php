class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        
        $map = array();
        $count = array_count_values($nums);
        //$val = array_values($count);
        foreach($count as $keys => $values){
            if($values >=2){
                return true;
            }
        }
        print_r($count);
        return false;
    }
}