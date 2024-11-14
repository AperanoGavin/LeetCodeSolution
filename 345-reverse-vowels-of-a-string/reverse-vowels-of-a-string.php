class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $vmap = ['a' , 'e', 'i', 'o' , 'u', 'A' , 'E' , 'I', 'O' , 'U'];
        //$s = strtolower($s);

        $arrayS = str_split($s);
        print_r($arrayS);
        $map = array();

        for($i=0;$i<sizeof($arrayS); $i++){
            if(in_array($arrayS[$i] , $vmap)){
                array_push($map , $arrayS[$i]);
            }
        }

        $map = array_reverse($map);
        print_r($map);


        //reparcourir et maintenant quand je vois une voyel j'attribut et je l'enlève
        $j = 0;
         for($i=0;$i<sizeof($arrayS); $i++){ 
            if(in_array($arrayS[$i] , $vmap)){
                $arrayS[$i] = $map[$j];
                $j++;
               // unset($map[0]);
                //array_push($map , $arrayS[$i]);
            }
        }
        print_r($map);
        print_r($arrayS);
        return  implode('' ,$arrayS);


        
    }
}