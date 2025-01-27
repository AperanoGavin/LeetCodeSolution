class Solution:
    def repeatedCharacter(self, s: str) -> str:
        tmp = 0
        dic = []

        for i in s:
            if i not in dic:
                dic.append(i)
            else:
                return i
            
        