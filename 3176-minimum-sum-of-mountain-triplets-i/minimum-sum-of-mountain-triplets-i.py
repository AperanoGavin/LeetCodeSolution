class Solution:
    def minimumSum(self, arr: List[int]) -> int:
        tmp = 0
        dic = []
        for i in range(len(arr)):
            for j in range(i+1 , len(arr)):
                for k in range (j+1 , len(arr)):
                    if ( 0<= i and i<j and j <k and k <len(arr) ) and arr[i] < arr[j] and arr[k] < arr[j]:
                        tmp +=1
                        dic.append((arr[i] + arr[j] + arr[k]))

        if dic  == []:
            return -1

        return min(dic)
        