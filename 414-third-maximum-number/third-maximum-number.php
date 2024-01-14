class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
       // sort($nums);
        $count = array_keys(array_count_values($nums));
        sort($count);

        $i = 0;
        if(count(array_keys(array_count_values($count)))<3){
            return ( max($nums));
        }
        while ($i <= count($count) - 1 && $i < 2) {
            array_pop($count);
            $i++;
        }

        if (empty($count)) {
            return max($nums);
        } else {
            return end($count);
        }

    }
}