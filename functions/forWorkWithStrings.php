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


