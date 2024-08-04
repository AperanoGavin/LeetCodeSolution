class Solution(object):
    def getCommon(self, nums1, nums2):
        """
        :type nums1: List[int]
        :type nums2: List[int]
        :rtype: int
        """
        first = 0
        second = 0
        nums1.sort()
        dic = []
        """for i in range(len(nums1)):
            for j in range(len(nums2)):
                if nums1[i] == nums2[j]:
                   dic.append(nums1[i])
        """

        nums1 = set(nums1)
        nums2 = set(nums2)
        dic = list(nums1 & nums2)
        if len(dic) == 0:
            return -1
        else:
            return min(dic)
            
    
