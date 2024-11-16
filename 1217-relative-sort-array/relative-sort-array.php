class Solution {

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @return Integer[]
     */
    function relativeSortArray($arr1, $arr2) {
        $count= array_count_values($arr1);
        //print_r($count);
        $map = $arr2;
        $map = array_combine(array_values($map) , array_keys($map));
        print_r($map);
        foreach($count as $keys => $val){
            echo($keys);
            if(array_key_exists($keys , $map)){
                $map[$keys] = $val;
            }     
        }
        $map2 = array();
        print_r($map);

        foreach($map as $keys => $val){
            $map2_ = array_fill($keys,$val,$keys);   
            $map2 = array_merge($map2, $map2_);  
        }

         print_r($map2);
         $map2R = array_values($map2);

         $diff = array_diff($arr1 , $map2R);
         print_r($diff);
         sort($diff);

         $res= array_merge($map2R , $diff);
         return array_values($res);

        
    }
}