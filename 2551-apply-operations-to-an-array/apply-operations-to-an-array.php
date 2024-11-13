class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function applyOperations($nums) {
        $map = array();
        $count = sizeof($nums);
        for($i=0 ; $i<$count; $i++){
            if(($nums[$i] == $nums[$i + 1]) && $nums[$i] !==0){
                $nums[$i] = $nums[$i] * 2;
                $nums[$i + 1] = 0; 

               
            }
        }
        print_r($nums);
        $res = array_diff($nums , [0]);
        $length = sizeof($nums) - sizeof($res);


        for($i=0; $i<$length ; $i++){
            array_push($res , 0);
        }

        return $res;
    }
}