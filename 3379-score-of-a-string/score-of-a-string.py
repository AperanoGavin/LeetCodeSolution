class Solution:
    def scoreOfString(self, s: str) -> int:
        dic = []
        tmp=0
        for i in s:
            dic.append(ord(i))
        for j in range(len(dic) - 1):
            tmp = tmp + abs(dic[j] - dic[j+1])

        return tmp
        print(dic)
        