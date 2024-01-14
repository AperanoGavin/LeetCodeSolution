class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {

        $a=[];
        $b =[];

        for($i=0; $i<$m; $i++ ){
            array_push($a , $nums1[$i]);
        }

        for($j=0 ;$j<$n ;$j++){
            array_push($b , $nums2[$j]);
        }

        $ab = array_merge($a , $b);
        

        sort($ab);
        $nums1 = $ab;

        return $nums1;
        
    }
}