SET month=%DATE:~4,2%
SET day=%DATE:~7,2%
SET year=%DATE:~10%

> upload1.bat ECHO open 173.255.143.187
>> upload1.bat ECHO unhcr
>> upload1.bat ECHO unhcr-321
>> upload1.bat ECHO cd ..
>> upload1.bat ECHO cd ..
>> upload1.bat ECHO cd SHARED
>> upload1.bat ECHO binary
>> upload1.bat ECHO delete expXML.XML
>> upload1.bat ECHO put C:\DATA\"UNHCR Indonesia"\fromProGres\expXML.XML
>> upload1.bat ECHO put C:\DATA\"UNHCR Indonesia"\fromProGres\expXML.XML expXML_%year%_%month%_%day%.XML
>> upload1.bat ECHO bye

ftp -i -s:upload1.bat

call query.bat