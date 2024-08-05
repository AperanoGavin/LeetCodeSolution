class Solution(object):
    def plusOne(self, digits):
        """
        :type digits: List[int]
        :rtype: List[int]
        """
        char = ""
        for i in range(len(digits)):
            char = char + str(digits[i])        
      
        digits_ = int(char) +1
        array_ = str(digits_)
        integer_list = list(map(int, array_))
        return integer_list
        