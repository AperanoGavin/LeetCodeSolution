from collections import Counter
class Solution:
    def majorityElement(self, nums: List[int]) -> int:
        counts = Counter(nums)
        value_ = 0
        iter_ = 0
        for value , count in counts.items():
            if  count >= iter_:
                value_ = value
                iter_ = count
        return value_

        