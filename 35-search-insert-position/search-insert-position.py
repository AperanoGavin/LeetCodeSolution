class Solution(object):
    def searchInsert(self, nums, target):
     nums.sort()
     len_ =len(nums)
     for i in range(len_):
        if nums[i] == target:
            return i
        
     for j in range(len_):
        if nums[j] > target:
            return j 
        
     return len_     
        