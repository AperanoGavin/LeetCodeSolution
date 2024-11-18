class Solution {

    /**
     * @param Integer $num
     * @return Integer[]
     */
    function sumOfThree($num) {
        if (($num - 3) % 3 == 0) {
        $x = ($num - 3) / 3;
        return [$x, $x + 1, $x + 2];
       }
       return [];
        
    }
}