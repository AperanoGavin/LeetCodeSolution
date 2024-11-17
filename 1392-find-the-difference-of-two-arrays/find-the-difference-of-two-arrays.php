class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[][]
     */
    function findDifference($nums1, $nums2) {
        $map= array();
        $nums1 = array_unique($nums1);
        $nums2 = array_unique($nums2);

        $arr1 = array_diff($nums1 ,$nums2);
        $arr2 = array_diff($nums2 ,$nums1);

        $map = [$arr1 , $arr2];
        return $map;

        
    }
}