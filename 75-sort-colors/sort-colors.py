class Solution(object):
    def sortColors(self, nums):
        """
        :type nums: List[int]
        :rtype: None Do not return anything, modify nums in-place instead.
        """
        dic = [] 
        len_ = len(nums)
        #parcourir le tableau 
        #à chaque fois chercher le plus petit ,
        # et le pop et le mettre dans le nouveau dictionnaire
        i = 0
        while i < len_ :
            min_ = min(nums )
            min_key = nums.index(min(nums))
            dic.append(min_)
            nums.pop(min_key)
            i = i +1
            #print(dic)
        nums[:] = dic
        print(nums)
        return dic



