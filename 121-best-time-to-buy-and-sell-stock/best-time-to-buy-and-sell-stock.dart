class Solution {
  int maxProfit(List<int> prices) {

    int minPrice = 999999999; 
    int maxProfit = 0;

    for (int price in prices) {
      if (price < minPrice) {
        minPrice = price;
      } else if (price - minPrice > maxProfit) {
        maxProfit = price - minPrice;
      }
    }

    return maxProfit;
  }
}