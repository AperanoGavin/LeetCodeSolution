class Solution(object):
    def isPalindrome(self, x):
        """
        :type x: int
        :rtype: bool
        """
        str_ = str(x)
        array = []
        for i in range(len(str_)):
            array.extend(str_[i])
            
        if array == array[::-1]:
            return True

        return False
