class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $unique_nums1 = array_unique($nums1);
        $unique_nums2 = array_unique($nums2);

        $map = [];

       /*  for($i =0 ,$j=0; $i<=count($unique_nums1)-1 , $j<=count($unique_nums2)-1 ; $i++ , $j++ ){
            if($unique_nums1[$i] == $unique_nums2[$j]){
                array_push( $map , $unique_nums1[$i]);
            }
        } */

        foreach ($unique_nums1 as $value1){
            foreach ($unique_nums2 as $value2){
                if( $value1 == $value2){
                    array_push($map , $value1);
                }
            }
        }
        return $map;
    }
}