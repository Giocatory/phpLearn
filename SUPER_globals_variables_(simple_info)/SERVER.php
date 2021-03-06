<?php
#                    $_SERVER
// это массив, содержащий информацию, такую как: заголовки, пути и местоположения скриптов.
// Записи в этом массиве создаются веб-сервером.
// Нет гарантии, что каждый веб-сервер предоставит любую из них;
// сервер может опустить некоторые из них или предоставить другие.
$total = 0;
foreach ($_SERVER as $key => $value){echo $key . ";\t"; $total += 1; if ($total == 6){echo "\n"; $total = 0;}}; echo "\n\n";
    /**
     * Вывод у каждого +- будет разный, все зависит от того, какие данные предоставляет сервер
    */
//ALLUSERSPROFILE;	APPDATA;	ChocolateyInstall;	ChocolateyLastPathUpdate;	CommonProgramFiles;	CommonProgramFiles(x86);
//CommonProgramW6432;	COMPUTERNAME;	ComSpec;	DriverData;	FPS_BROWSER_APP_PROFILE_STRING;	FPS_BROWSER_USER_PROFILE_STRING;
//HOMEDRIVE;	HOMEPATH;	IDEA_INITIAL_DIRECTORY;	LOCALAPPDATA;	LOGONSERVER;	NUMBER_OF_PROCESSORS;
//OneDrive;	OneDriveConsumer;	OS;	Path;	PATHEXT;	PhpStorm;
//PROCESSOR_ARCHITECTURE;	PROCESSOR_IDENTIFIER;	PROCESSOR_LEVEL;	PROCESSOR_REVISION;	ProgramData;	ProgramFiles;
//ProgramFiles(x86);	ProgramW6432;	PSModulePath;	PUBLIC;	SESSIONNAME;	SystemDrive;
//SystemRoot;	TEMP;	TMP;	USERDOMAIN;	USERDOMAIN_ROAMINGPROFILE;	USERNAME;
//USERPROFILE;	windir;	PHP_SELF;	SCRIPT_NAME;	SCRIPT_FILENAME;	PATH_TRANSLATED;
//DOCUMENT_ROOT;	REQUEST_TIME_FLOAT;	REQUEST_TIME;	argv;	argc;


#                     'PHP_SELF'
// Имя файла скрипта, который сейчас выполняется, относительно корня документов.
// Если PHP запущен в командной строке, эта переменная содержит имя скрипта.
// Когда вызывается через метод GET, этот массив будет содержать строку запроса.
// Содержит количество параметров, переданных скрипту (если запуск произведён в командной строке).
echo '$_SERVER[\'PHP_SELF\'] = '.$_SERVER['PHP_SELF'] . "\n";
#                  'GATEWAY_INTERFACE'
//Содержит используемую сервером версию спецификации CGI; к примеру 'CGI/1.1'.
echo '$_SERVER[\'GATEWAY_INTERFACE\'] = '.$_SERVER['GATEWAY_INTERFACE'] . "\n";
#                    'SERVER_ADDR'
//IP-адрес сервера, на котором выполняется текущий скрипт.
echo '$_SERVER[\'SERVER_ADDR\'] = '.$_SERVER['SERVER_ADDR'] . "\n";
#                     'SERVER_NAME'
// Имя хоста, на котором выполняется текущий скрипт. Если скрипт выполняется на виртуальном хосте,
// здесь будет содержатся имя, определённое для этого виртуального хоста.
// **Замечание:** В Apache 2 вы должны установить UseCanonicalName = On и ServerName.
// В противном случае это значение отразит имя хоста, предоставленное клиентом, которое может быть подделано.
// Небезопасно полагаться на это значение в контексте, требующем безопасности.
echo '$_SERVER[\'SERVER_NAME\'] = '.$_SERVER['SERVER_NAME'] . "\n";
#                   'SERVER_SOFTWARE'
// Строка идентификации сервера, указанная в заголовках, когда происходит ответ на запрос.
echo '$_SERVER[\'SERVER_SOFTWARE\'] = '.$_SERVER['SERVER_SOFTWARE'] . "\n";
#                   'SERVER_PROTOCOL'
// Имя и версия информационного протокола, через который была запрошена страница; к примеру 'HTTP/1.0';
echo '$_SERVER[\'SERVER_PROTOCOL\'] = '.$_SERVER['SERVER_PROTOCOL'] . "\n";
#                    'REQUEST_METHOD'
// Какой метод был использован для запроса страницы; к примеру 'GET', 'HEAD', 'POST', 'PUT'.
// Замечание: PHP-скрипт завершается после отправки заголовков
// (то есть после того, как осуществляется любой вывод без буферизации вывода), если метод запроса был HEAD.
echo '$_SERVER[\'REQUEST_METHOD\'] = '.$_SERVER['REQUEST_METHOD'] . "\n";
#                       'REQUEST_TIME'
// Временная метка начала запроса.
#                       'REQUEST_TIME_FLOAT'
// Временная метка начала запроса с точностью до микросекунд.
#                       'QUERY_STRING'
// Строка запроса, если есть, через которую была открыта страница.
#                       'DOCUMENT_ROOT'
// Директория корня документов, в которой выполняется текущий скрипт,
// в точности та, которая указана в конфигурационном файле сервера.
#                       'HTTP_ACCEPT'
//Содержимое заголовка Accept: из текущего запроса, если он есть.
#                       'HTTP_ACCEPT_CHARSET'
//Содержимое заголовка Accept-Charset: из текущего запроса, если он есть. Например: 'iso-8859-1,*,utf-8'.
#                       'HTTP_ACCEPT_ENCODING'
//Содержимое заголовка Accept-Encoding: из текущего запроса, если он есть. Например: 'gzip'.
#                       'HTTP_ACCEPT_LANGUAGE'
//Содержимое заголовка Accept-Language: из текущего запроса, если он есть. Например: 'en'.
#                       'HTTP_CONNECTION'
//Содержимое заголовка Connection: из текущего запроса, если он есть. Например: 'Keep-Alive'.
#                       'HTTP_HOST'
//Содержимое заголовка Host: из текущего запроса, если он есть.
#                       'HTTP_REFERER'
// Адрес страницы (если есть), с которой браузер пользователя перешёл на эту страницу.
// Этот заголовок устанавливается браузером пользователя.
// Не все браузеры устанавливают его, а некоторые в качестве дополнительной возможности позволяют
// изменять содержимое заголовка HTTP_REFERER. Одним словом, нельзя доверять этому заголовку.
#                       'HTTP_USER_AGENT'
//Содержимое заголовка User-Agent: из текущего запроса, если он есть.
// Эта строка, обозначающая браузер, который открыл данную страницу.
#                       'HTTPS'
//Принимает непустое значение, если запрос был произведён через протокол HTTPS.
#                       'REMOTE_ADDR'
//IP-адрес, с которого пользователь просматривает текущую страницу.
#                       'REMOTE_HOST'
//Удалённый хост, с которого пользователь просматривает текущую страницу. Обратный поиск DNS основан на значении переменной REMOTE_ADDR.
//Замечание: Ваш сервер должен быть настроен, чтобы создавать эту переменную.
// Для примера, в Apache вам необходимо присутствие директивы HostnameLookups On в файле httpd.conf, чтобы эта переменная создавалась.
#                       'REMOTE_PORT'
//Порт на удалённой машине, который используется для связи с сервером.
#                       'REMOTE_USER'
//Аутентифицированный пользователь.
#                       'REDIRECT_REMOTE_USER'
//Аутентифицированный пользователь, если запрос был перенаправлен изнутри.
#                       'SCRIPT_FILENAME'
//Абсолютный путь к исполняемому скрипту.
//Замечание: Если скрипт запускается в командной строке (CLI), используя относительный путь, такой как
// file.php или ../file.php, переменная $_SERVER['SCRIPT_FILENAME'] будет содержать относительный путь, указанный пользователем.
#                       'SERVER_ADMIN'
//Эта переменная получает своё значение (для Apache) из директивы конфигурационного файла сервера.
// Если скрипт запущен на виртуальном хосте, это будет значение, определённое для данного виртуального хоста.
echo '$_SERVER[\'SERVER_ADMIN\'] = '.$_SERVER['SERVER_ADMIN'] . "\n";
#                       'SERVER_PORT'
//Порт на компьютере сервера, используемый сервером для соединения. Для установок по умолчанию, значение будет '80';
// используя SSL, например, это значение будет таким, какое сконфигурировано для соединений безопасного HTTP.
//Замечание: Чтобы получить физический (реальный) порт в Apache 2,
// необходимо установить UseCanonicalName = On и UseCanonicalPhysicalPort = On,
// иначе это значение может быть подменено и не вернуть реальной значение физического порта.
// Полагаться на это значение небезопасно в контексте приложений, требующих усиленной безопасности.
echo '$_SERVER[\'SERVER_PORT\'] = '.$_SERVER['SERVER_PORT'] . "\n";
#                       'SERVER_SIGNATURE'
//Строка, содержащая версию сервера и имя виртуального хоста, которые добавляются к генерируемым сервером страницам, если включено.
#                       'PATH_TRANSLATED'
//Путь файловой системы (не document root) к текущему скрипту, после того как сервер выполнил отображение virtual-to-real.
//Замечание: Пользователи Apache 2 могут использовать директиву AcceptPathInfo = On в конфигурационном файле httpd.conf для задания переменной PATH_INFO.
#                       'SCRIPT_NAME'
//Содержит путь к текущему исполняемому скрипту. Это полезно для страниц, которые должны указывать на самих себя. Константа __FILE__ содержит полный путь и имя текущего (то есть включённого) файла.
#                       'REQUEST_URI'
//URI, который был предоставлен для доступа к этой странице. Например, '/index.html'.
#                       'PHP_AUTH_DIGEST'
//При выполнении аутентификации HTTP Digest этой переменной присваивается заголовок 'Authorization',
// отправленный клиентом (который затем следует использовать для проведения соответствующей проверки).
#                       'PHP_AUTH_USER'
//При выполнении HTTP-аутентификации этой переменной присваивается имя пользователя, предоставленное пользователем.
#                       'PHP_AUTH_PW'
//При выполнении HTTP-аутентификации этой переменной присваивается пароль, предоставленный пользователем.
#                       'AUTH_TYPE'
//При выполнении HTTP-аутентификации этой переменной присваивается тип аутентификации, который используется.
#                       'PATH_INFO'
//Содержит любой предоставленный пользователем путь, содержащийся после имени скрипта, но до строки запроса, если она есть.
// Например, если текущий скрипт запрошен по URL http://www.example.com/php/path_info.php/some/stuff?foo=bar,
// то переменная $_SERVER['PATH_INFO'] будет содержать /some/stuff.
#                       'ORIG_PATH_INFO'
//Исходное значение переменной 'PATH_INFO' перед обработкой PHP.
