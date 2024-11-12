class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $test = (implode('' , $digits)) ;
        $resul = bcadd($test, '1');
        $result = explode(',' , $resul);
        $dic = [];
        for ($i = 0 ; $i<strlen($resul); $i++){
            array_push($dic , $resul[$i]);
        }

        return $dic;
    }
}