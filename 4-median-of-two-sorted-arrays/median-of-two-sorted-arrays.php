class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {

        $array = array_merge($nums1 , $nums2);
        sort($array);
        $count = count($array);
        $milieu = floor($count / 2);

        if ($count % 2 == 0) {
            return sprintf('%.5f', ($array[$milieu - 1] + $array[$milieu]) / 2);
        } else {
            return sprintf('%.5f', $array[$milieu]);
        }

       
        
        
    }
}