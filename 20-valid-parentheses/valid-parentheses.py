class Solution(object):
    def isValid(self, s):
        """
        :type s: str
        :rtype: bool
        """
        stack=[]
        dic={')':'(' , '}':'{' ,']':'['}


        for char in s:
            if char in dic.values():
                stack.append(char)
            elif char in dic.keys():
                if stack and dic[char] == stack[-1]:
                    stack.pop()
                else:
                    return False
            else:
                return False

        return not stack



     
      

           