class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function countPairs($nums, $k) {
       $res = 0;
        for($i=0;$i<sizeof($nums);$i++){
            for($j=$i+1;$j<sizeof($nums);$j++){
               if ((0 <= $i && $i < $j && $j < sizeof($nums)) && ($nums[$i] == $nums[$j]) && ( ($i * $j) % $k === 0)) {
                $res = $res +1 ;

               }
            }
        }

        return $res;
        
    }
}