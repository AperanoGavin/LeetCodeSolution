class Solution(object):
    def removeDuplicates(self, nums):
        """
        :type nums: List[int]
        :rtype: int
        """
        #print(list(dict.fromkeys(nums)))
        #return list(dict.fromkeys(nums))
        print(nums[:])
        nums[:] = sorted(set(nums))
        return len(nums)