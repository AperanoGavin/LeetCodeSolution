class Solution {

    /**
     * @param Integer $num1
     * @param Integer $num2
     * @return Integer
     */
    function countOperations($num1, $num2) {
        $tmp = $num1;
        $tmp2 = $num2;
        $i = 0;
        while(($tmp != 0 && $tmp2 != 0)){
            if($tmp>=$tmp2){
                $tmp = $tmp - $tmp2;
            }else{
                $tmp2 = $tmp2 - $tmp;
            }
            $i = $i + 1;

        }
        return $i;
        
    }
}