class Solution:
    def numOfStrings(self, patterns: List[str], word: str) -> int:
        tmp = 0
        for i in range(len(patterns)):
            if patterns[i] in word:
                tmp = tmp +1
        return(tmp)
        