class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function minimalKSum($nums, $k) {
        sort($nums);
        $sum = 0;
        $previous = -1;
        foreach ($nums as $num) {
            if ($previous == $num) {
                continue;
            }
            if ($num <= $k) {
                ++$k;
                $sum += $num;
            }
            $previous = $num;
        }
        
        return (1 + $k) * $k / 2 - $sum;
        
    }
}