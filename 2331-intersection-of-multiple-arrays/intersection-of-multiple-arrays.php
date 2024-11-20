class Solution {

    /**
     * @param Integer[][] $nums
     * @return Integer[]
     */
    function intersection($nums) {
        $map = [];
        $tmp = [];
        foreach($nums as $key =>$val){
            if($key == 0){
                $map = $val;
            }
            $map = array_intersect($map , $val);

        }
        print_r($map);
        sort($map);
        return $map;
        
    }
}