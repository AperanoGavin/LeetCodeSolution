class Solution {
  List<int> findDisappearedNumbers(List<int> nums) {
    List<int> missing = [];
    nums.sort();
    /* Set<int> nums2 = nums.toSet();
    List<int> nums3 = nums2.toList();
    print(nums3); */
    for(int i=0;i<nums.length;i++){
        if(nums[i] != i+1){
            missing.add(i+1);
        }
    }
    /* List<int> withoutDuplicate = [];
    for (int i=0;i<missing.length; i++){
        if(!nums.contains(missing[i])){
            withoutDuplicate.add(missing[i]);
        }
    } */
    Set<int> nums_ = nums.toSet();
    Set<int> missing_ = missing.toSet();
    Set<int> res = missing_.difference(nums_);
    List<int> finalRes = res.toList();
    return finalRes;
    //return withoutDuplicate;
    
  }
}