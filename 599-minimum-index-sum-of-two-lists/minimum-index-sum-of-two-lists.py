class Solution:
    def findRestaurant(self, list1: List[str], list2: List[str]) -> List[str]:

        dic = {}
        res = []
        for i in range(len(list1)):
            #print([list1[i]])
            for j in range(len(list2)):
                #print(list2[j])
                if list1[i] == list2[j] :
                    dic[list1[i]] = i+j 

        ind = []
        for nom , index in dic.items():
            ind.append(index)
        minimum = min(ind)

        for nom , index in dic.items():
            if index == minimum :
                res.append(nom)

        return(res)


            

            
        