class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $map = array();
        
        /* for($i=0; $i<sizeof($nums1); $i++){
            for($j=0; $j<sizeof($nums2); $j++){
                if(($nums[$i] == $nums[$j] )){
                    array_push($map , $nums[$j]);
                }
            }
        } */
        return array_unique(array_intersect($nums1 , $nums2));
        
    }
}