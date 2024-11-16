class Solution {

    /**
     * @param String $date1
     * @param String $date2
     * @return Integer
     */
    function daysBetweenDates($date1, $date2) {
        $date1 = new DateTime($date1);
        $date2 = new DateTime($date2);

        $diff = $date1->diff($date2);

        return $diff->format('%a');

        
    }
}