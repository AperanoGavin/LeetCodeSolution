class Solution(object):
    def reverse(self, x):
        """
        :type x: int
        :rtype: int
        """
        dic = []
        x_ = str(x)
        eheh = 0
        arr = list(x_)
        if arr[0] == '-' :
            arr.pop(0)
            eheh = eheh+1
        arr.reverse()
        if  eheh == 1:
            arr.insert(0 , '-')
        arr__ = ''.join(arr)

        if int(arr__) > pow(2 , 31)-1 or  int(arr__) < pow(-2 , 31):
            return 0
        return int(arr__)
        