class Solution {

    /**
     * @param String[] $words
     * @param String $s
     * @return Integer
     */
    function countPrefixes($words, $s) {
        $len = strlen($s);
        $i = 0;
        foreach($words as $word){
            $wo = strlen($word);
            $cp = substr($s , 0, $wo);
            if(($wo <= $len) && ($word == $cp) ){
                $i++;
            }
        }

        return ($i);
        
    }
}