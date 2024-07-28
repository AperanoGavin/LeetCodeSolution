class Solution(object):
    def lengthOfLastWord(self, s):
        s = s.split()
        last_element = s.pop()
        
        return len(last_element)
        