class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $numsA = $nums;
        $map = array();
        $zerro = array();
        for($i=0 ; $i<=count($nums)-1; $i++){
            if($nums[$i] === 0){
                unset($nums[$i]);
                array_push($nums , 0);

            }

        }

        return $nums;
    }

    
}