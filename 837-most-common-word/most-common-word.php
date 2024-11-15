class Solution {

    /**
     * @param String $paragraph
     * @param String[] $banned
     * @return String
     */
    function mostCommonWord($paragraph, $banned) {
        $paragraph = strtolower($paragraph);
        //$paragraph = str_replace(array('.', ',' ,'!' ,'?'), '', $paragraph);
        $paragraph = preg_replace('/[^a-z\s]/', ' ', $paragraph);


        //$arr = explode(" ",$paragraph);
         $arr = preg_split('/\s+/', $paragraph, -1, PREG_SPLIT_NO_EMPTY);

        $count = array_count_values($arr);
        print_r($count);

        if(!empty($banned)){
            foreach($banned as $value){
                if(array_key_exists($value , $count)){
                    unset($count[$value]);
                }
            }
        }
        print_r($count);
        $max = max($count);
        echo($max);

        return (array_keys($count , $max))[0];

        
    }
}