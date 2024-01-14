class Solution {

    /**
     * @param Integer[][] $edges
     * @return Integer
     */
    function findCenter($edges) {
        $a =array();
         foreach($edges as $value){
             foreach($value as $key => $values){
                 array_push($a , $values);
             }
         }

         $max = (array_count_values($a));
         $cn = max(array_values($max));
         $result = array_search($cn , $max);
        return $result;
    }
}