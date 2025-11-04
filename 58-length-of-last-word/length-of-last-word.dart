class Solution {
  int lengthOfLastWord(String s) {
    List<String> ars = s
        .split(" ")
        .where((e) => e.isNotEmpty)
        .toList();
    print(ars);
    return ars.last.length;
    
  }
}