class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function divideArray($nums) {
        sort($nums);
        $mid = sizeof($nums)/2;
        $count = array_count_values($nums);
        
       foreach($count as $key => $val){
         if($val %2  !== 0){
            return false;
         }
       }

       return true;
        

        
    }
}