class Solution:
    def increasingTriplet(self, arr: List[int]) -> bool:
        first = second = float('inf')

        for num in arr:
            if num <= first:
                first = num
            elif num <= second:
                second = num
            else:
                return True

        return False
            


        