class Solution:
    def plusOne(self, digits: List[int]) -> List[int]:
        dic = []
        res = ""
        for i in range(len(digits)):
            res += str(digits[i])
        val = int(res) +1
        val_ = str(val)
        for i in range(len(val_)):
            dic.append(int(val_[i]))
        return(dic)