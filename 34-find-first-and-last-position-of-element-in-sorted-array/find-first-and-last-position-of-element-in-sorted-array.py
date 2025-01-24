class Solution:
    def searchRange(self, nums: List[int], target: int) -> List[int]:
        if target  not in  nums:
            return [-1,-1]

        dic = []
        for i in range(len(nums)):
            if nums[i] == target:
                dic.append(i)

        if len(dic) == 1 :
            dic = [dic[0],dic[0]]
        else:
            dic = [min(dic),max(dic)]
      
        return dic


        