class Solution:
    def singleNumber(self, nums: List[int]) -> List[int]:
        dic = []
        for i in range(len(nums)):
            if nums.count(nums[i]) == 1:
                dic.append(nums[i])

        return dic