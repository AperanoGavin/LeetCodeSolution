class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $help=0;

        $i=0;
        while($i<=count($nums)-1){
            if($nums[$i] == $target){
                return $i;
            }
            $i++;
        }

        for($i=0; $i<=count($nums)-1; $i++){
            if($target > $nums[$i] && $target <$nums[$i +1]){
                return $i +1;
            }
        }
        
         for($i=0; $i<=count($nums)-1; $i++){
            if($target < $nums[$i] ){
              $help++;
            }
        }
        

        if($help == count($nums)){
            return 0;
        }

        return count($nums);
     
        
    }
}