class Solution(object):
    def runningSum(self, nums):
        """
        :type nums: List[int]
        :rtype: List[int]
        """
        a = 0
        dic = []
        for i in range(len(nums)):
            a = a + nums[i]
            dic.append(a)
        return dic
            
        