class Solution {

    /**
     * @param String $s
     * @param String $letter
     * @return Integer
     */
    function percentageLetter($s, $letter) {
        $s = str_split($s);
        $count = array_count_values($s);
        $max = array_sum(array_values($count));
        echo($max);
        $tmp = 0;
        foreach($count as $key => $val){
            if($key == $letter){
                $tmp = $val;
            }
        }

        return intval($tmp / $max *100 ) ;
        
    }
}