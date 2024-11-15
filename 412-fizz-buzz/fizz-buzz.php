class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $map = array();

        for($i=1; $i<=$n; $i++){
            if($i %15 == 0){
                array_push($map , "FizzBuzz");
            }elseif($i %5 ==0){
                array_push($map , "Buzz");
            }elseif($i %3 == 0){
                array_push($map , "Fizz");
            }else{
                array_push($map , "$i");
            }
            
        }

        return $map;
        
        
    }
}