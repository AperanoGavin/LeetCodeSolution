class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $nums1_ = array_slice($nums1 , 0 ,$m);
        $nums2_ = array_slice($nums2 , 0 ,$n);
        $resul = array_merge($nums1_ , $nums2_);
        $nums1 = $resul;
        return sort($nums1);
        //print_r($resul);
        
    }
}