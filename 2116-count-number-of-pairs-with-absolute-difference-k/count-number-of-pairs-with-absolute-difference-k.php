class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function countKDifference($nums, $k) {

        $res = 0;
        $n = sizeof($nums);
        for($i=0;$i<$n;$i++){
            for($j=$i+1;$j<$n;$j++){
               if (( $i < $j) && (abs($nums[$i] - $nums[$j]) == $k ) ){
                $res = $res +1 ;
               }
            }
        }

        return $res;
        
    }
}