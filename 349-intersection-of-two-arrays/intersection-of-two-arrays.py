class Solution:
    def intersection(self, nums1: List[int], nums2: List[int]) -> List[int]:
        dic = []
        for i in range(len(nums1)):
            for j in range(len(nums2)):
                if nums1[i] == nums2[j]:
                    dic.append(nums1[i])
        return list(set(dic))
        