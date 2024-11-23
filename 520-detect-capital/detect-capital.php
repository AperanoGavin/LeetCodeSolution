class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        if(strtoupper($word) === $word){
            return true;
        }elseif(strtolower($word) === $word){
            return true;
        } elseif (ucfirst(strtolower($word)) == $word){
            return true;
        }

        return false;
        
    }
}