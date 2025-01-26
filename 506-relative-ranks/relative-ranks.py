class Solution:
    def findRelativeRanks(self, score: List[int]) -> List[str]:
        dic = score.copy()
        dic.sort(reverse=True)
        print(dic)
        for i in range(len(score)):
            if  dic.index(score[i]) == 0:
                score[i] = "Gold Medal"

            elif  dic.index(score[i]) == 1:
                score[i] = "Silver Medal"

            elif  dic.index(score[i]) == 2:
                score[i] = "Bronze Medal"
            
            else :
                num = dic.index(score[i]) +1
                score[i] = f"{num}"
        
        return score



      