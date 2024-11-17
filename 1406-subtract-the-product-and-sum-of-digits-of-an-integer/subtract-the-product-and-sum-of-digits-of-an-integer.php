class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function subtractProductAndSum($n) {
        $n = strval($n);
        $arr = str_split($n);
        print_r($arr);
        $m =1;
        $ad = 0;
        for($i=0;$i<sizeof($arr);$i++){
            $m= $m*$arr[$i];
            $ad= $ad + $arr[$i];
        }
        $res = $m - $ad;
        return $res;
        
    }
}