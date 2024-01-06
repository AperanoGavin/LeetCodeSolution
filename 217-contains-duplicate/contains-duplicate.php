class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $map = array();
        $count = array_count_values($nums);
        foreach ($count as $key => $value){
            if($value >1){
                return true;
            }
        }
        
        return false;
    }
}