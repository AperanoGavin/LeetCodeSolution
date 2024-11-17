class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer
     */
    function findLucky($arr) {
        $count = array_count_values($arr);
        print_r($count);
        $map = array();

        foreach($count as $key => $val){
            if($key == $val){
                array_push($map , $key);
            }
        }

        print_r($map);
        if(!empty($map)){
             return max(array_values($map));

        }
        return -1;
       
    }
}