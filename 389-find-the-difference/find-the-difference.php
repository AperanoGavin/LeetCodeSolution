class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference($s, $t) {
  
        $arrayS = str_split($s);
        $arrayT = str_split($t);
        sort($arrayS);
        sort($arrayT);

        for($i=0; $i<sizeof($arrayT); $i++){
            if($arrayT[$i] !== $arrayS[$i] ){
                return $arrayT[$i];
            }
        }
        
    }
}