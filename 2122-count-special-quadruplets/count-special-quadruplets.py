class Solution:
    def countQuadruplets(self, nums: List[int]) -> int:
        tmp = 0
        for i in range(len(nums)):
            for j in range(i+1 , len(nums)):
                for k in range (j+1 , len(nums)):
                    for l in range (k+1 , len(nums)):
                        if ( 0<= i and i<j and j <k and k <l and l <=len(nums) ) and  (nums[i]+ nums[j]+nums[k] == nums[l]):
                            tmp +=1
        
        return (tmp)
        