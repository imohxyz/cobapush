#!/bin/sh
###########################
cd D:/BitKit/Tabulasi-2
# switch to branch you want to use
#git checkout master
# add all added/modified files
git add .
# commit changes
#read commitMessage
git commit -am "perubahan terbaru"
# push to git remote repository
git push origin master
exec D:/BitKit/Tabulasi-2/gitpassword.sh
###########################
echo Press Enter...
read