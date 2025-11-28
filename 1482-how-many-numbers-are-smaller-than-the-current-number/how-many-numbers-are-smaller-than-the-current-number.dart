class Solution {
  List<int> smallerNumbersThanCurrent(List<int> nums) {
    List<int> res = [];
    for (int i=0;i<nums.length; i++){
        int init = 0;
        for(int j=0;j<nums.length;j++){
            if(j!=i && nums[j]<nums[i]){
                init++;

            }
        }
        res.add(init);
    }
    return res;
  }
}