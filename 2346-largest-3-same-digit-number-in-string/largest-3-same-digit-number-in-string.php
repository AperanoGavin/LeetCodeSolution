class Solution {

    /**
     * @param String $num
     * @return String
     */
    function largestGoodInteger($num) {
        $arr = str_split($num);
        $map = [];
        for($i=0;$i<sizeof($arr); $i++){

          if( (($arr[$i] == $arr[$i+1]) && ($arr[$i+1] == $arr[$i+2]) )){
                 $map[] = $arr[$i];
              }

        }
        print_r(($map));
        if(!empty($map)){
            $max = max($map);
            return "$max$max$max";
        }

        return "";
       

       
        
    }
}