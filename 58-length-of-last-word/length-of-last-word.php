class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $array_S = explode(" ", $s);
        //if(end($array_S) == " "){
            //return strlen(prev($array_S));
            $new_array_S = array_reverse($array_S);
            for($i=0 ; $i<=count($array_S)-1 ; $i++){
               if(strlen($new_array_S[$i])>0){
                   return strlen($new_array_S[$i]);
               }
            }
       /*  }
        return strlen(end($array_S)); */
        
    }
}