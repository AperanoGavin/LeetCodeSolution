class Solution(object):
    def firstUniqChar(self, s):
        """
        :type s: str
        :rtype: int
        """
        """
        s_ = list(s)
        dic =list()
        i = 0
        for i in range(len(s_)):
            if s_.count(s_[i]) == 1:
                return i
        return -1
        """


        s_ = list(s)
        freq = {}
        for char in s_:
            if char in freq:
                freq[char] += 1
            else:
                freq[char] = 1
        
        for i in range(len(s_)):
            if freq[s_[i]] == 1:
                return i
        
        return -1

