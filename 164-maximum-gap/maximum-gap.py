class Solution:
    def maximumGap(self, nums: List[int]) -> int:
        tmp = 0
        nums.sort()
        for i in range(len(nums)):
             print(nums[i])
             if i<len(nums) -1 and nums[i+1] - nums[i] >tmp:
                tmp =  nums[i+1] - nums[i]
 

        return tmp