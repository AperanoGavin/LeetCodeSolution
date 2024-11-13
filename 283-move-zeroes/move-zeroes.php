class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $map = $nums;
        $count = array_count_values($nums);
        $nums = array_diff($map , [0]);
        foreach($count as $keys => $values){
            if($keys == 0){
                $nb = $values;
            }
        }
        echo($nb);
        for($i=0; $i<$nb; $i++){
            array_push($nums, 0);
        }

        /* print_r($res);
        print_r($darray);
        for($i=0; $i<$nb; $i++){
            $nums = array_push($res , 0);
        } */

        //return $nums;
        
    }
}