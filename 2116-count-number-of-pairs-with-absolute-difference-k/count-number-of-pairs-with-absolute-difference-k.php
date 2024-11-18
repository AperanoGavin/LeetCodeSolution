class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function countKDifference($nums, $k) {

        $res = 0;
        for($i=0;$i<sizeof($nums);$i++){
            for($j=$i+1;$j<sizeof($nums);$j++){
               if (( $i < $j) && (abs($nums[$i] - $nums[$j]) == $k ) ){
                $res = $res +1 ;

               }
            }
        }

        return $res;
        
    }
}