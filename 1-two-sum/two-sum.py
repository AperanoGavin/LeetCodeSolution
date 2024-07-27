class Solution(object):
    def twoSum(self, nums, target):
        """
        :type nums: List[int]
        :type target: int
        :rtype: List[int]
        """
        dic = []
        it = 0
        for i in range(len(nums)):
            for x in range(i+1 , len(nums)):
                if nums[i] + nums[x] == target:
                    dic.append(i)
                    dic.append(x)
                    return dic
        

       
        