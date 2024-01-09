class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $pairs = 0;
        for($i=0; $i<=count($nums)-1 ; $i++){
            for($j=1; $j<=count($nums)-1; $j++){
                if($nums[$i] == $nums[$j] && $i<$j){
                    $pairs++;
                }
            }
        }
        return $pairs;
    }
}