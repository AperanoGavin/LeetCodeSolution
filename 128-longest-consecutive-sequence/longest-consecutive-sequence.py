class Solution:
    def longestConsecutive(self, nums: List[int]) -> int:
        nums.sort()
        #set(nums)
        nums = list(dict.fromkeys(nums))
        #print((nums))
        tmp=0
        dic = []
        if not nums:
            return 0
        for i in range(len(nums)):
            #print(nums[i])
            if  i<len(nums) -1 and nums[i +1] == nums[i]+1:
                print(nums[i])

                tmp = tmp+1
            else:
                dic.append(tmp)
                tmp=0
        mx = max(dic)
        return mx +1

        