from collections import Counter

class Solution:
    def mostFrequentEven(self, nums: List[int]) -> int:
       dic = []

       for i in range(len(nums)):
        if nums[i] %2 ==0:
            dic.append(nums[i])
       if dic == []:
        return -1

       cn = Counter(dic)
       maxIt = cn.most_common(1)[0][1]
       print(cn)
       el = float('inf')
       ct = 0
       for element, count in cn.items():
            if element <= el and count == maxIt:
                el = element

       return(el)

