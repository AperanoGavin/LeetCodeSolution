class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2) {
       /*  $nombre = intVal($num2) + intVal($num1);
        $val = sprintf('%0.0f', $nombre); */
        return bcadd ($num1 , $num2);
        
    }
}