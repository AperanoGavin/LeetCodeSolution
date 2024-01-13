class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $count = array_count_values($nums);
        $max = max($count);
        $result = array_search($max , $count);
        return $result;
    }
}