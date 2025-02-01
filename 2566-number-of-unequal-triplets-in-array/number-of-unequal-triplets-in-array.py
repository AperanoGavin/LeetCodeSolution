class Solution:
    def unequalTriplets(self, arr: List[int]) -> int:

        tmp = 0
        for i in range(len(arr)):
            for j in range(i+1 , len(arr)):
                for k in range (j+1 , len(arr)):
                    if ( 0<= i and i<j and j <k and k <len(arr) ) and (arr[i] != arr[j])and (arr[j] != arr[k])and (arr[i] - arr[k]) :
                        tmp +=1
        
        return (tmp)

        