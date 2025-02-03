class Solution:
    def removeDuplicates(self, nums: List[int]) -> int:
        dic = nums.copy()
        
        tmp = 0
        for i in range(len(nums)-1): 
            if nums[i]== nums[i+1]:
                tmp +=1
                if tmp >= 2:
                    dic.remove(nums[i])
                    if nums[i+1] == nums[i]:
                        tmp = 2
                    else:
                        tmp = 0

            elif nums[i]!= nums[i+1]:
                tmp = 0
        print(dic)
        nums.clear()
        nums.extend(dic)

        