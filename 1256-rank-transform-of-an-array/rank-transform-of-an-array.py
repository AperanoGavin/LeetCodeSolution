class Solution(object):
    def arrayRankTransform(self, arr):
        """
        :type arr: List[int]
        :rtype: List[int]
       
        arr_ = set(arr)
        arr__ = sorted(arr_)
        key = []
        for i in range(len(arr)):
            for j in range(len(arr__)):
                if arr[i] == arr__[j]:
                    key.append(j+1)
        print( key)
        return key
         """

        unique_sorted = sorted(set(arr))  
        value_to_index = {value: index + 1 for index, value in enumerate(unique_sorted)}
        
        key = [value_to_index[value] for value in arr]
        
        print(key)
        return key
        