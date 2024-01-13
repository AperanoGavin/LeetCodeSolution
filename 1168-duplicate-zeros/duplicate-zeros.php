class Solution {

    /**
     * @param Integer[] $arr
     * @return NULL
     */
    function duplicateZeros(&$arr) {
       /*  for($i=0; $i<=count($arr)-1 ; $i++){
            
        } */
        $i=0;
        while($i<=count($arr)-1){
            if( count(array_keys(array_unique($arr))) === 1){
                return $arr;
            }
            if($arr[$i] == 0 ){
                //$arr[$i-1]+= 0;
                array_splice($arr, $i, 0, 0);
                array_pop($arr);
                $i++;
            }
            $i++;
        }


        return $arr;
    }
}