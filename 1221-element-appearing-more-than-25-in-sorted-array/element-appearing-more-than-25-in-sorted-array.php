class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findSpecialInteger($arr) {
        //$size = sizeof($arr);
        $count = array_count_values($arr);
        $max = max(array_values($count));
        print_r($count);
        echo($max);
        foreach($count as $key => $val){
            if($val == $max){
                return $key;
            }
        }
        
    }
}