class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        /* $map = array();
        $realMap = array();
        for($i=0; $i<=count($nums)-1;$i++){
            if(!in_array($nums[$i],$map)){
                $map[] = $nums[$i];
            }
        
        } */
        $map = array();
        $count = array_count_values($nums);
        foreach ($count as $keys => $values){
            if($values <= 1){
                return $keys;
            }
        }
        //la clé d minimum de valeur qui se repete
        
    }
}