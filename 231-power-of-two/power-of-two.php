class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        if( $n == 1){
            return true;
        }
        // n = log a b
        $result = log($n, 2);
        if(intVal($result) == $result){
            return true;
        }

            return false;  
    }
}