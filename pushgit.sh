#!/bin/sh
# $pass =Haqiqi@2019
###########################
cd D:/BitKit/Tabulasi-2
# switch to branch you want to use
#git checkout master
# add all added/modified files
git add .
# exec echo "$GIT_PASSWORD"
# commit changes
#read commitMessage
git commit -am "perubahan terbaru"
# push to git remote repository
git push origin master
# read $pass
###########################
echo Press Enter...
read