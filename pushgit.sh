#!/bin/sh
###########################
cd D:/BitKit/Tabulasi-2
# switch to branch you want to use
#git checkout master
# add all added/modified files
git add .
echo Haqiqi@2019
# commit changes
#read commitMessage
git commit -am "perubahan terbaru"
# push to git remote repository
git push origin master
###########################
echo Press Enter...
read