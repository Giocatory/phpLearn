<?php
// Функция для замены подстроки
$simple_text = 'I learn Java, and I love Java';
$new_text = str_replace('Java', 'PHP', $simple_text, $count);
// $count - не обязательный параметр, показывает сколько вхождений заменено
echo "$new_text (length: $count words)";  // I learn PHP, and I love PHP (length: 2 words)
echo "\n";


// Вернуть подстроку, указанной длинны
$simple_text = 'I learn PHP, and I love PHP';
// выбрать переменную, с какого символа читать, чколько символов взять
$new_text = substr($simple_text, 8,3);
echo $new_text; // PHP
echo "\n";
// Если третий параметр не задать, то прочитает от указанного значения до конца
$new_text = substr($simple_text, 8);
echo $new_text; // PHP, and I love PHP
echo "\n";


// Вернуть длину строки
$simple_text = 'I learn PHP, and I love PHP';
echo strlen($simple_text); // 27
echo "\n" . iconv_strlen($simple_text); // 27
echo "\n" . strlen('Миха'); // будет 8, правильно считает только латиницу
// Чтобы правильно считала, надо использовать функцию iconv_strlen(); -подсчет символов
$name = 'Миха любит PHP';
echo "\n" . iconv_strlen($name);
echo "\n";


// Перевести строку в массив
$separator = ', ';
$simple_text = 'Mikhail, Tatyana, Margo, Varvara';
$array_from_text = explode($separator, $simple_text); // аргументы: разделитель, строка
echo "type => " . gettype($array_from_text) . "\n";  # type => array
for ($i = 0; $i < count($array_from_text); $i++){
    echo "index " . $i+1 . " = " . $array_from_text[$i] . ";\n";
}
echo "\n";
//index 1 = Mikhail;
//index 2 = Tatyana;
//index 3 = Margo;
//index 4 = Varvara;


// Перевести массив в строку
$simple_array = array('Mikhail', 'Tatyana', 'Margo', 'Varvara');
$separator = "; ";
$simple_text = implode($separator, $simple_array);
echo $simple_text . "\n"; // Mikhail; Tatyana; Margo; Varvara


//strpos($haystack, $needle, [$offset]) – ищет позицию первого вхождения под-
//строки $needle в строку $haystack. Если $offset указан, то поиск будет начат с
//указанного количества символов с начала строки. Если задано отрицатель-
//ное  значение,  отсчёт  позиции  начала  поиска  будет  произведён  с  конца
//строки.


//addslashes($string) – возвращает строку с обратным слешем перед символа-
//ми, которые нужно экранировать. Экранируются следующие символы: оди-
//нарная кавычка ('); двойная кавычка ("); обратный слеш (\); NUL (байт null).


//trim($string,[$charlist]) – удаляет пробелы из начала и конца строки. Помимо
//пробелов также может удалять непечатные символы: табуляцию «\t», пере-
//вод строки «\n», возврат каретки «\r», NUL-байт «\0», вертикальную табуля-
//цию «\x0B». Можно перечислить удаляемые символы через строку $charlist.


//stripslashes($string)  –  удаляет  экранирующие  обратные  слэши.
//(\' преобразуется  в ',  и  т.д.).  Двойные  бэкслэши  (\\)  преобразуется  в
//одиночные (\).


//htmlspecialchars($string,  [])  –  преобразует  специальные  символы  в  HTML-
//сущности.  '&'  (амперсанд)  преобразуется  в  '&amp;';  '"'  (двойная  кавычка)
//преобразуется  в  '&quot;';  '''  (одиночная  кавычка)  преобразуется  в  '&#039;'
//только  в  режиме ENT_QUOTES;  '<'  (знак  «меньше,  чем»)  преобразуется  в
//'&lt;'; '>' (знак «больше, чем») преобразуется в '&gt;'.


//md5($string) – возвращает MD5-хеш строки в виде 32-символьного шестна-
//дцатеричного числа. Алгоритм необратим, то есть хеш нельзя дешифровать.
//Функция используется для сравнения файлов, хранения паролей в закоди-
//рованном виде и других криптографических задач.