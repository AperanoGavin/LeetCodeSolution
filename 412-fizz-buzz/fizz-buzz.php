class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        $array=array();
        for($i=1 ; $i<=$n ;$i++){
            if(($i %15 == 0 ) ){
                array_push($array , "FizzBuzz");
            }else if( $i %3 == 0){
                 array_push($array , "Fizz");
            }else if( $i %5 == 0){
                 array_push($array , "Buzz");
            }else{
                array_push($array , "$i");
            }
        }
        return $array;
    }
}