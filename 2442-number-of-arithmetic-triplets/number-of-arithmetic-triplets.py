class Solution:
    def arithmeticTriplets(self, arr: List[int], diff: int) -> int:

        tmp = 0
        for i in range(len(arr)):
            for j in range(i+1 , len(arr)):
                for k in range (j+1 , len(arr)):
                    if ( 0<= i and i<j and j <k and k <len(arr) ) and (arr[j] - arr[i])== diff and (arr[k] - arr[j]) == diff :
                        tmp +=1
        
        return (tmp)

        