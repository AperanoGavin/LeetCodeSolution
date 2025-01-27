class Solution:
    def reversePrefix(self, word: str, ch: str) -> str:
        tmp=0
        if ch in word:
            tmp =  (word.index(ch)) +1
        else:
            print(word)
        dic = word[:tmp]
        dic = dic[::-1]
        dic =list(dic)
        word =list(word)
        for i in range(len(dic)):
            print('test')
            word[i] = dic[i]
        print(word)
        return "".join(word)



        