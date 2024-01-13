class Solution {

    /**
     * @param Integer[][] $dominoes
     * @return Integer
     */
    function numEquivDominoPairs($dominoes) {
    $count = array();
    $result = 0;

    foreach ($dominoes as $domino) {
        sort($domino);
        $hash = implode(',', $domino);

        if (isset($count[$hash])) {
            $result += $count[$hash];
            $count[$hash]++;
        } else {
            $count[$hash] = 1;
        }
    }

    return $result;
    }
}