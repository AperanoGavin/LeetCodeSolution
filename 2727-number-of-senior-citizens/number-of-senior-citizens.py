class Solution(object):
    def countSeniors(self, details):
        """
        :type details: List[str]
        :rtype: int
        """
        number = 0
        for i in range(len(details)):
            detail = details[i]
            res = detail[11:13]
            if int(res) > 60:
                number = number + 1
           
        return number