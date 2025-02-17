class Solution:
    def sortPeople(self, names: List[str], heights: List[int]) -> List[str]:
        dic = dict(zip(heights , names))
        rev = sorted(heights , reverse = True)
        
        res = []
        for height in rev:
            val = dic[height]
            res.append(val)
        return res
