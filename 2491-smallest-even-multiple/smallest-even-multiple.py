class Solution:
    def smallestEvenMultiple(self, n: int) -> int:
        res = False
        num = 1
        while  res == False:
            if  num %2 == 0 and num%n ==0 :
                return num
            num +=1


            print(num)

        