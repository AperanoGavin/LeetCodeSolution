class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s) {

        $map = array();
        $arr = str_split($s);
        $count = array_count_values($arr);
        print_r($count);

        if($count['A']>=2){
            return false;
        }

        $c = 0;
        if($count['L']>=3){
            for($i=0; $i<sizeof($arr); $i++){
                if($arr[$i] == 'L' && $arr[$i+1] == 'L' && $arr[$i+2] == 'L' )
                {
                    return false;
                }
            }
        }

        
        return true;
    }
}