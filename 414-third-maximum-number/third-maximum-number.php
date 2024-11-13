class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        $dic = array_unique($nums);
        rsort($dic);
        if(sizeof($dic)<3){
            return max($dic);
        }
        return $dic[2];
        
    }
}