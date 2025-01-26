class Solution:
    def sortArrayByParity(self, nums: List[int]) -> List[int]:
        dic= []
        for i in nums:
            if i % 2 == 0 :
                dic.append(i)
                #nums.remove(i)
        for j in nums:
            if j %2 != 0 :
                dic.append(j)
        return dic

        