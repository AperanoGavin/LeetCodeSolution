class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function isMonotonic($nums) {
        $a =1;
        $b = 1;
       /*  for($i=0; $i<=count($nums)-1; $i++){
            for($j=1; $j<=count($nums)-1 ; $j++){
                if($nums[$i]<=$nums[$j]){
                    $a ++;
                }
            }
        }
         for($i=0; $i<=count($nums)-1; $i++){
            for($j=1; $j<=count($nums)-1 ; $j++){
                if($nums[$i]>=$nums[$j]){
                    $b ++;
                }
            }
        } */
        for($i=0 , $j=1; $i<=count($nums)-1, $j<=count($nums)-1; $i++, $j++){
            if($nums[$i]<=$nums[$j] && $i<$j){
                    $a++;
                }
        }

        for($i=0 , $j=1; $i<=count($nums)-1, $j<=count($nums)-1; $i++, $j++){
            if($nums[$i]>=$nums[$j] && $i<$j){
                    $b++;
                }
        
        }

        if($a == count($nums) || $b == count($nums)){
            return  true;
        }

        return false;
        
    }
}