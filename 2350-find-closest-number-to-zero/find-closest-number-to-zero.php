class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findClosestNumber($nums) {
        $closest = $nums[0];

        foreach ($nums as $val) {
            if (abs($val) < abs($closest)) {
                $closest = $val;
            }
            elseif (abs($val) == abs($closest) && $val > $closest) {
                $closest = $val;
            }
        }

        return $closest;
        
    }
}