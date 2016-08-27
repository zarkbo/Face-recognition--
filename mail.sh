name=$(cat ./personname.txt)
echo "$name has signed in today!" | mutt -s "Sign in system" b140502@163.com
