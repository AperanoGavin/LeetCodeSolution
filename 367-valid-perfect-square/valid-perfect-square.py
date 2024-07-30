class Solution(object):
    def isPerfectSquare(self, num):
        """
        :type num: int
        :rtype: bool
        """
        res = pow(num , 0.5)
        print(type(res))
        print(res)
        string_num = str(res)
        array = string_num.split('.')
        print(array)
        if array[-1] == '0':
            return True
        return False
        #end = res.isnumeric()
        #return end
       

        