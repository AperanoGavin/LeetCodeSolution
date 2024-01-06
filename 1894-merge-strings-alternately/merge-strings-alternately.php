class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $map ="";
         for($i=0 , $j =0; $i<=strlen($word1)-1 || $j<=strlen($word2)-1; $i++ , $j++){
             $map = $map . $word1[$i];
             $map = $map . $word2[$j];
            /* for($j=0; $j<=strlen($word2)-1; $j++){ */
            
                //$map = $map . $word2[$j];
                //$map[$i] = $word1[$i];
                //$map[$j] = $word1[$j];
                //$map = array_push($map , $word1[$i]);
                //$map = array_push($map , $word2[$j]);

           /*  } */
        } 

      
        return $map;
    }
}