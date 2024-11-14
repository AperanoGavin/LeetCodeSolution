class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $map = array();
        $ransomNote_ = str_split($ransomNote);
        $magazine_ = str_split($magazine);
        sort($ransomNote_);
        sort($magazine_);
        $count = array_count_values($ransomNote_);
        $countM = array_count_values($magazine_);
        print_r($count);

        foreach($count as $keys => $values){
            if (!isset($countM[$keys]) || $countM[$keys] < $values) {
            return false;
        }
        }
    
    return true;
        
    }
}