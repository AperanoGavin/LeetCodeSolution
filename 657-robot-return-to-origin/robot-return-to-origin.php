class Solution {

    /**
     * @param String $moves
     * @return Boolean
     */
    function judgeCircle($moves) {

        // si un est fait son opposé sera fait
        $dic= [ "U" =>"D", "L"=>"R" , "D" =>"U", "R"=>"L"];

        $arr = str_split($moves);
        $count = array_count_values($arr);
        print_r($count);

        if(isset($count["U"]) && !isset($count["D"]) || !isset($count["U"]) && isset($count["D"])  ){
            return false;
            
        }
        if(isset($count["L"]) && !isset($count["R"]) || !isset($count["L"]) && isset($count["R"]) ){

            return false;
         }
         $len = sizeof($count);
         echo($len);
         if($len == 2){
             echo('test');
             if($count["U"] == $count["D"]){
                return true;
             }elseif($count["R"] == $count["L"]){
                return true;
             }

         }else{
            echo('test_');
            if($count["U"] == $count["D"] && $count["L"] == $count["R"]){
                return true;
            }
         }
        
        return false;
    }
}