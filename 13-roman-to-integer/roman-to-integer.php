class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $roman = array(
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        );
        $response =0;

            for($i=0;$i<=strlen($s)-1; $i++){
                //for($j=1; $j<=strlen($s)-1; $j++){
                
                    if((in_array($s[$i], array_keys($roman)))  ){
                            if(($s[$i] == "I") && ($s[$i+1] == "V")){
                                $response = $response + 4;
                                $i++;
                            }else
                            if(($s[$i] == "I") && ($s[$i+1] == "X")){
                                $response = $response + 9;
                                $i++;
                            }else

                            if(($s[$i] == "X") && ($s[$i+1] == "L")){
                                $response = $response + 40;
                                $i++;
                            }else
                            if(($s[$i] == "X") && ($s[$i+1] == "C")){
                                $response = $response + 90;
                                $i++;
                            }else

                            if(($s[$i] == "C") && ($s[$i+1] == "D")){
                                $response = $response + 400;
                                $i++;
                            }else
                            if(($s[$i] == "C") && ($s[$i+1] == "M")){
                                $response = $response + 900;
                                $i++;
                            }else{
                                 $response = $response + $roman[$s[$i]];
                            }
                            
                        
                     }
              
            }
        return $response;
    }
}