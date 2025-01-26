class Solution:
    def findRelativeRanks(self, score: List[int]) -> List[str]:
        dic = score.copy()
        dic.sort(reverse=True)
        """  mx = []
        tmp = 0
        while tmp < 3:
            m = max(dic)
            mx.append(m)
            dic.remove(m)
            tmp = tmp + 1
        mx.sort()
        print(mx)
        print(score) """
        print(dic)

        for i in range(len(score)):
            if   dic.index(score[i]) == 2:
                    score[i] = "Bronze Medal"
            elif   dic.index(score[i]) == 1:
                    score[i] = "Silver Medal"
            elif   dic.index(score[i]) == 0:
                    score[i] = "Gold Medal"
            else:
                rs = dic.index(score[i]) +1
                score[i] = f"{rs}"

        return score

      