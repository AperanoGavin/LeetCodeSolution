class Solution:
    def lengthOfLastWord(self, s: str) -> int:
        dic=s.split()
        return len(dic[-1])
        