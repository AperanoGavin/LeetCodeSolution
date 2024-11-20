class Solution {

    /**
     * @param Integer[][] $matches
     * @return Integer[][]
     */
    function findWinners($matches) {
    $win = [];
    $los = [];
    
    foreach ($matches as $match) {
        $win[$match[0]] = ($win[$match[0]] ?? 0) + 1;
        $los[$match[1]] = ($los[$match[1]] ?? 0) + 1;
    }

    $loses = [];
    foreach ($los as $key => $val) {
        if ($val == 1) {
            $loses[] = $key;
        }
    }
    sort($loses);

    $winners = [];
    foreach ($win as $key => $val) {
        if (!isset($los[$key])) {
            $winners[] = $key;
        }
    }
    sort($winners);

    return [$winners, $loses];

    }
}