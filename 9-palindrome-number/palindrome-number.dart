class Solution {
  bool isPalindrome(int x) {
    String s = x.toString();
    String rev = s.split("").reversed.join();
    if (rev == s){
        return true;
    }

    return false;
    
  }
}