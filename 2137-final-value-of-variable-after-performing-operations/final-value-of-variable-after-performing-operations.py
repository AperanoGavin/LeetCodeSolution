class Solution:
    def finalValueAfterOperations(self, operations: List[str]) -> int:

        pos = ["++X" , "X++"]
        
        tmp = 0
        for i in operations:
            if i in pos:
                tmp = tmp +1
            else:
                tmp = tmp - 1
        return tmp