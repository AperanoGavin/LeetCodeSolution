class Solution:
    def dominantIndex(self, nums: List[int]) -> int:
        mx = max(nums)
        for i in nums:
            print(i)
            if i*2> mx and  i != mx :
                return -1
          
                         
        return nums.index(mx)
        