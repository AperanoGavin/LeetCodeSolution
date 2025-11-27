class Solution {
  bool containsDuplicate(List<int> nums) {
    //List<int> dup = [];
    nums.sort();
    for(int i=0;i<nums.length-1;i++){
        /* if(!dup.contains(nums[i])){
            dup.add(nums[i]);
        }else{
            return true;
        } */
        if(nums[i] == nums[i+1]){
            return true;
        }
    }
    return false;
    
  }
}