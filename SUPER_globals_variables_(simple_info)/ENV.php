<?php
#                        $_ENV — Переменные окружения
/*
Ассоциативный массив (array) значений, переданных скрипту через переменные окружения.
Эти значения импортируются в global namespace PHP из системных переменных окружения, в котором запущен парсер PHP.
Большинство значений передаётся из командной оболочки, под которой запущен PHP, и в разных системах, вероятно,
используются разные типы оболочек поэтому окончательный список невозможно представить.
Пожалуйста, изучите документацию к вашей командной оболочке для получения списка переменных окружения.

Некоторые переменные окружения включают CGI-переменные,
причём их наличие не зависит от того, запущен ли PHP как модуль сервера или как препроцессор CGI.
*/

foreach (getenv() as $key => $value){
    echo $key . " - " . $value . "\n";
}
/**
 * У всх будет по разному
*/
//ALLUSERSPROFILE - C:\ProgramData
//APPDATA - C:\Users\gioca\AppData\Roaming
//ChocolateyInstall - C:\ProgramData\chocolatey
//ChocolateyLastPathUpdate - 132800444986391866
//CommonProgramFiles - C:\Program Files\Common Files
//CommonProgramFiles(x86) - C:\Program Files (x86)\Common Files
//CommonProgramW6432 - C:\Program Files\Common Files
//COMPUTERNAME - DESKTOP-A6OH0HJ
//ComSpec - C:\Windows\system32\cmd.exe
//DriverData - C:\Windows\System32\Drivers\DriverData
//FPS_BROWSER_APP_PROFILE_STRING - Internet Explorer
//FPS_BROWSER_USER_PROFILE_STRING - Default
//HOMEDRIVE - C:
//HOMEPATH - \Users\gioca
//IDEA_INITIAL_DIRECTORY - C:\Windows\system32
//LOCALAPPDATA - C:\Users\gioca\AppData\Local
//LOGONSERVER - \\DESKTOP-A6OH0HJ
//NUMBER_OF_PROCESSORS - 4
//OneDrive - C:\Users\gioca\OneDrive
//OneDriveConsumer - C:\Users\gioca\OneDrive
//OS - Windows_NT
//Path - C:\Python310\Scripts\;C:\Python310\;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\nodejs\;C:\ProgramData\chocolatey\bin;C:\Program Files\Git\cmd;C:\OpenServer\modules\php\PHP_8.0;C:\OpenServer\modules\http\Apache_2.4-PHP_8.0;C:\Users\gioca\AppData\Local\Microsoft\WindowsApps;C:\Users\gioca\AppData\Roaming\npm;C:\Users\gioca\AppData\Local\Programs\Microsoft VS Code\bin;C:\Program Files\JetBrains\PhpStorm 2021.2.3\bin;
//PATHEXT - .COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC;.PY;.PYW
//PhpStorm - C:\Program Files\JetBrains\PhpStorm 2021.2.3\bin;
//PROCESSOR_ARCHITECTURE - AMD64
//PROCESSOR_IDENTIFIER - AMD64 Family 23 Model 24 Stepping 1, AuthenticAMD
//PROCESSOR_LEVEL - 23
//PROCESSOR_REVISION - 1801
//ProgramData - C:\ProgramData
//ProgramFiles - C:\Program Files
//ProgramFiles(x86) - C:\Program Files (x86)
//ProgramW6432 - C:\Program Files
//PSModulePath - C:\Program Files\WindowsPowerShell\Modules;C:\Windows\system32\WindowsPowerShell\v1.0\Modules
//PUBLIC - C:\Users\Public
//SESSIONNAME - Console
//SystemDrive - C:
//SystemRoot - C:\Windows
//TEMP - C:\Users\gioca\AppData\Local\Temp
//TMP - C:\Users\gioca\AppData\Local\Temp
//USERDOMAIN - DESKTOP-A6OH0HJ
//USERDOMAIN_ROAMINGPROFILE - DESKTOP-A6OH0HJ
//USERNAME - gioca
//USERPROFILE - C:\Users\gioca
//windir - C:\Windows