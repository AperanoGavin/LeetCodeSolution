class Solution(object):
    def kthDistinct(self, arr, k):
        """
        :type arr: List[str]
        :type k: int
        :rtype: str
        """
        dic = []
        arr_ =[]
        for i in range(len(arr)):
            for j in range(i + 1 , len(arr)):
                if arr[i] == arr[j] and i != j:
                    dic.append(arr[i])
        for i in range(len(arr)):
            #for j in range(len(dic)):
            if arr[i] not  in dic:
                arr_.append(arr[i])   

        print(arr_)
        if len(arr_) < k:
            return ""
        return arr_[k-1]
        print( len(arr_))