class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function arrangeCoins($n) {
        $a=0;
        $i= 1;
        if( $n == 1){
            return 1;
        }
        while($n >= $i){
            $n =$n - $i;
            $i++;
            $a++;
            //$n++;
            
        }

        return $a;
       /*  for ($i =0;$i<($n) ; $i++){
            if($i == )
        }// 
        $i =0 ;
        while( ){

        } */
    }
}