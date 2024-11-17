/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return Integer
     */
    function getDecimalValue($head) {
        $map = array();
        $tmp = $head;
        while($tmp->val !== null){
            array_push($map ,$tmp->val);
            $tmp = $tmp->next;
        } 
        print_r($map);
        $nb = implode('', $map);
        echo($nb);
        return bindec($nb)    ;   
    }
}