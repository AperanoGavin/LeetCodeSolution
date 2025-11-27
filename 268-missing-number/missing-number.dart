class Solution {
  int missingNumber(List<int> nums) {
    nums.sort();
    int res = 0;
    for(int i=0; i<nums.length;i++){
         if(nums[i] == i ){
            res++;
        }else{
            return res;
        }
    }
    return nums.length ;
  }
}