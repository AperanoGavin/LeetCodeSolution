class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $map = [];
        $tmp = 0;
        if(!in_array(1 , $nums)){
            return 0;
        }
        for($i=0 ; $i<sizeof($nums); $i++){
            if($nums[$i] == 1 && $nums[$i + 1] == 1){
                $tmp = $tmp + 1 ;
            }else{
                $map[] = $tmp;
                $tmp = 0;
            }
        }
       return max($map) +1;
    }
}