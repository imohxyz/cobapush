SET month=%DATE:~4,2%
SET day=%DATE:~7,2%
SET year=%DATE:~10%

> upload1.bat ECHO open ftp.bitkit.id
>> upload1.bat ECHO bitkit
>> upload1.bat ECHO Haqiqi@2019
>> upload1.bat ECHO cd public_html
>> upload1.bat ECHO cd ns1
>> upload1.bat ECHO binary
>> upload1.bat ECHO delete cobain.txt
>> upload1.bat ECHO put D:\IMOH\UNHCR\cobain.txt
>> upload1.bat ECHO put D:\IMOH\UNHCR\cobain.txt cobain_%year%_%month%_%day%.txt
>> upload1.bat ECHO bye

ftp -i -s:upload1.bat

call query.bat