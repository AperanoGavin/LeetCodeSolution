class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $count = count($nums);
        sort($nums);
        for($i=0; $i<=count($nums)-1 ; $i++){
            if($i != $nums[$i]){
                return $i ;
           /*  }else{
                return $count; */
            }
        }
        return $count;
    }
}