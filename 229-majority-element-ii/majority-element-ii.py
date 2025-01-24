class Solution:
    def majorityElement(self, nums: List[int]) -> List[int]:
       dic=[]
       mx = 0
       """ for index , value in enumerate(nums):
            val = nums.count(value)
            if val > mx:
                mx = val
 """
       for i in range(len(nums)):
            if  nums.count(nums[i]) > len(nums)/3:
                dic.append(nums[i])

       return list(set(dic))