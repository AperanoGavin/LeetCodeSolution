class Solution:
    def countGoodTriplets(self, arr: List[int], a: int, b: int, c: int) -> int:

        tmp = 0
        for i in range(len(arr)):
            for j in range(i+1 , len(arr)):
                for k in range (j+1 , len(arr)):
                    if ( 0<= i and i<j and j <k and k <len(arr) ) and abs(arr[i] - arr[j]) <= a and abs(arr[j] - arr[k]) <= b and abs(arr[i] - arr[k]) <= c :
                        tmp +=1
        
        return (tmp)


        