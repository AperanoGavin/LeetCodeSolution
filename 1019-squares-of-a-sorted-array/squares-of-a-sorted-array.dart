class Solution {
  List<int> sortedSquares(List<int> nums) {
    List<int> res = [];
    for(int i=0; i<nums.length; i++){
        res.add((nums[i])*(nums[i]));
    }
    res.sort();
    return res;
    
  }
}