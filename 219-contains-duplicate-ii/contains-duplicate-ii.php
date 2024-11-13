class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {

       /*  for ($i=0 ; $i<sizeof($nums); $i++){

            for ($j=$i+1; $j<sizeof($nums) ;$j++){

                if(($nums[$i] == $nums[$j] )&&  abs($i-$j)<=$k){
                    return true;
                }
            }
        }
        return false; */

        $hashMap = []; 

        for ($i = 0; $i < count($nums); $i++) {
            if (isset($hashMap[$nums[$i]])) {
                
                if (abs($i - $hashMap[$nums[$i]]) <= $k) {
                    return true;
                }
            }
           
            $hashMap[$nums[$i]] = $i;
        }
        return false;
        
    }
}