<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    // тема 7!!!!!!
    // функции: strtolower, strtoupper, ucfirst, lcfirst, ucwords.
    //  Дана строка 'php'. Сделайте из нее строку 'PHP'.
    // echo strtoupper('php');
    // echo '<br>';

    //  Дана строка 'PHP'. Сделайте из нее строку 'php'.
    // echo strtolower('PHP');
    // echo '<br>';


    //  Дана строка 'london'. Сделайте из нее строку 'London'.
    // echo ucfirst('london');
    // echo '<br>';
    //  Дана строка 'London'. Сделайте из нее строку 'london'.
    // echo lcfirst('London');
    // echo '<br>';


    //  Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.
    // echo ucwords('london is the capital of great britain');
    // echo '<br>';

    //  Дана строка 'LONDON'. Сделайте из нее строку 'London'.
    // echo ucfirst(strtolower('LONDON'));
    // echo '<br>';

    //Работа с strlen
    // Для решения задач данного блока вам понадобятся следующие функции: strlen.
    //  Дана строка 'html css php'. Найдите количество символов в этой строке.
    // echo strlen('html css php');
    // echo '<br>';
    //  Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти, то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.
    // $password = 'mypass112';
    // if (strlen($password) > 5 && strlen($password) < 10) {
    //     echo 'пароль подходит';
    // } else {
    //     echo 'нужно придумать другой пароль';
    // }

    // Работа с substr
    // Для решения задач данного блока вам понадобятся следующие функции: substr.
    //  Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
    // echo '<br>';
    // $str = 'html css php';
    // echo substr($str, 0, 4);
    // echo '<br>';
    // echo substr($str, 5, 3);
    // echo '<br>';
    // echo substr($str, 9, 3);

    //  Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.
    // echo '<br>';
    // echo substr('my new string', -3, 3);
    // echo '<br>';
    //  Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.
    // $str = 'http://play-switch.ru';
    // if (substr($str, 0, 7) === 'http://') {

    //     echo 'да';
    //     echo '<br>';
    // } else echo 'нет';

    // echo '<br>';
    //  Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.
    // $str = 'https://play-switch.ru';

    // if (substr($str, 0, 7) === 'http://' || substr($str, 0, 8) === 'https://') {
    //     echo 'да';
    //     echo '<br>';
    // } else echo 'нет';
    // echo '<br>';
    //  Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
    // $str = 'image.png';

    // if (substr($str, -4, 4) === '.png') {
    //     echo 'да';
    //     echo '<br>';
    // } else echo 'нет';
    // echo '<br>';
    //  Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.
    // $str = 'image.jpg';

    // if (substr($str, -4, 4) === '.png' || substr($str, -4, 4) === '.jpg') {
    //     echo 'да';
    //     echo '<br>';
    // } else echo 'нет';
    // echo '<br>';
    //  Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.

    // $str = 'hello world';
    // if (strlen($str) > 5) {
    //     echo substr($str, 0, 5) . '...';
    // } else {
    //     echo $str;
    //     echo '<br>';
    // }



    // Работа с str_replace
    // Для решения задач данного блока вам понадобятся следующие функции: str_replace.
    // Дана строка '31.12.2013'. Замените все точки на дефисы.
    // echo '<br>';
    // echo str_replace('.', '-', '31.12.2013');
    // echo '<br>';

    // Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
    // $str = 'abcabcabc';
    // $str = str_replace('a', 1, $str);
    // $str = str_replace('b', 2, $str);
    // $str = str_replace('c', 3, $str);
    // echo $str;
    // echo '<br>';

    // Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.
    // $str = '1a2b3c4b5d6e7f8g9h0';
    // $str = str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $str);
    // echo $str;
    // echo '<br>';
    // Работа с strtr
    // Для решения задач данного блока вам понадобятся следующие функции: strtr.
    //  Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).
    // $str = 'abcabcabc';
    // echo strtr($str, ['a' => 1, 'b' => 2, 'c' => 3]);
    // echo '<br>';

    // 2
    // echo strtr($str, 'abc', '123');
    // echo '<br>';

    // Работа с substr_replace
    // Для решения задач данного блока вам понадобятся следующие функции: substr_replace.
    //  Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.
    // $str = 'abcdefgabcdefg';
    // echo substr_replace($str, '!!!', 3, 5);
    // echo '<br>';

    // Работа с strpos, strrpos
    // Для решения задач данного блока вам понадобятся следующие функции: strpos, strrpos.
    //  Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.
    // $str = 'abc abc abc';
    // echo strpos($str, 'b');
    // echo '<br>';

    //  Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
    // $str = 'abc abc abc';
    // echo strrpos($str, 'b');
    // echo '<br>';

    //  Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.
    // $str = 'abc abc abc';
    // echo strpos($str, 'b', 3);
    // echo '<br>';
    //  Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
    // $str = 'aaa aaa aaa aaa aaa';
    // echo strpos($str, ' ', 4);
    // echo '<br>';
    //  Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.
    // $str = 'text..text';
    // if (strpos($str, '..')) {
    //     echo 'есть';
    //     echo '<br>';
    // } else {
    //     echo 'нет';
    //     echo '<br>';
    // }
    //  Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.
    // if (strpos('http://play-switch.ru', 'http://') === 0) {
    //     echo 'да';
    // } else {
    //     echo 'нет';
    // }
    // Работа с explode, implode
    // Для решения задач данного блока вам понадобятся следующие функции: explode, implode.
    //  Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.



    // $arr = explode(' ', 'html css php'); var_dump($arr);
    //  Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.


    // $arr = implode(', ', ['html', 'css', 'php']); var_dump($arr);
    //  В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.
    // $arr = explode('-', '2013-12-31');
    // echo $arr[2].'.'.$arr[1].'.'.$arr[0];


    // Работа с str_split
    // Для решения задач данного блока вам понадобятся следующие функции: str_split.

    //  Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.
    // $str = "1234567890"; $arr = str_split($str, 2); var_dump($arr);


    //  Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.

    // $str = "1234567890"; $arr = str_split($str, 1); var_dump($arr);


    //  Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.
    // $str = "1234567890"; $arr = str_split($str, 2); echo implode("-", $arr);

    // Работа с trim, ltrim, rtrim
    // Для решения задач данного блока вам понадобятся следующие функции: trim, ltrim, rtrim.
    //  Дана строка. Очистите ее от концевых пробелов.

    // $str = "123123           "; echo rtrim($str);

    //  Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.

    // echo trim('/php/', '/');

    //  Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.

    // echo rtrim('слова слова слова.', '.') . ".";


    // Работа с strrev
    // Для решения задач данного блока вам понадобятся следующие функции: strrev.
    //  Дана строка '12345'. Сделайте из нее строку '54321'.

    // echo strrev('12345');

    //  Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).
    // $str = 'otto';
    // if (strrev($str) == $str) {
    //     echo "same";
    // }
    // else {
    //     echo "no";
    // }

    // Работа с str_shuffle
    // Для решения задач данного блока вам понадобятся следующие функции: str_shuffle.
    //  Дана строка. Перемешайте символы этой строки в случайном порядке.

    // echo str_shuffle('12345');

    //  Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись. Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.

    // echo str_shuffle('abcdefg');

    // Работа с number_format
    // Для решения задач данного блока вам понадобятся следующие функции: number_format.
    //  Дана строка '12345678'. Сделайте из нее строку '12 345 678'.

    // echo implode(' ', explode(',', number_format("12345678"))); 

    // Работа с str_repeat
    // Для решения задач данного блока вам понадобятся следующие функции: str_repeat.
    //  Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. Решите задачу с помощью одного цикла и функции str_repeat.

    // x
    // xx
    // xxx
    // xxxx
    // xxxxx

    // for ($i=1; $i < 10; $i++) { 
    //     echo str_repeat("*", $i) . "<br>";
    // }


    //  Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat.

    // 1
    // 22
    // 333
    // 4444
    // 55555
    // 666666
    // 7777777
    // 88888888
    // 999999999

    // for ($i=1; $i < 10; $i++) { 
    //     echo str_repeat("$i", $i) . "<br>";
    // }


    // Работа с strip_tags и htmlspecialchars
    // Для решения задач данного блока вам понадобятся следующие функции: htmlspecialchars, strip_tags.
    //  Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.

    // echo strip_tags('html, <b>php</b>, js');


    //  Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>.

    // echo strip_tags($str, '<b><i>');

    //  Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <b> в жирный.

    // echo htmlspecialchars('html, <b>php</b>, js');


    // Работа с chr и ord
    // Для решения задач данного блока вам понадобятся следующие функции: chr, ord.
    //  Узнайте код символов 'a', 'b', 'c', пробела.

    // echo ord('a') . " " . ord('b') . " " . ord('c') . " " . ord(' ');

    //  Изучите таблицу ASCII. Определите границы, в которых располагаются буквы английского алфавита.
    // изучила

    //  Выведите на экран символ с кодом 33.
    // echo chr(33);

    //  Запишите в переменную $str случайный символ - большую букву латинского алфавита. Подсказка: с помощью таблицы ASCII определите какие целые числа соответствуют большим буквам латинского алфавита.

    // echo chr(rand(65, 90));


    //  Запишите в переменную $str случайную строку $len длиной, состоящую из маленьких букв латинского алфавита. Подсказка: воспользуйтесь циклом for или while.

    // $str = ''; $len = 10;
    // for ($i=0; $i < $len; $i++) { 
    //     $str .= chr(rand(97, 122));
    // }
    // echo $str;


    //  Дана буква английского алфавита. Узнайте, она маленькая или большая.
    // $letter = 'A';
    // if (65 <= ord($letter) && ord($letter) <= 90) {
    //     echo "letter is big";
    // }
    // elseif (97 <= ord($letter) && ord($letter) <= 122) {
    //     echo "letter is small";
    // }

    // Работа с strchr, strrchr
    // Для решения задач данного блока вам понадобятся следующие функции: strchr, strrchr.
    //  Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.

    // echo strchr('ab-cd-ef', "-");


    //  Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'. 


    // echo strrchr('ab-cd-ef', "-");

    // Работа с strstr
    // Для решения задач данного блока вам понадобятся следующие функции: strstr.
    //  Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.

    // echo strstr('ab--cd--ef', "--");

    // Задачи
    //  Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками.

    // $arr = explode('_', 'var_test_text'); $str = $arr[0].''.ucwords($arr[1]).''.ucwords($arr[2]); echo $str;

    //  Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.

    // $arr = [123, 233, 433, 11, 22]; 
    // foreach ($arr as $value) {
    //     if (str_contains($value, 3)) {
    //         echo $value . "<br>";
    //     }
    // }


    // тема 8!!!!!!!!!!!!!!!


    // Работа с count

    // $arr = [ 0, 9, 4 ]; echo count( $arr );

    // $arr = [ 0, 9, 4 ]; echo $arr[count( $arr ) - 1];



    // Работа с in_array

    //  $arr = [ 0, 9, 4, 3, 5 ]; echo in_array( 3, $arr ) ? 'есть' : 'нет' ;



    // Работа с array_sum и array_product

    // $arr = [1, 2, 3, 4, 5]; echo array_sum( $arr );

    // $arr = [1, 2, 3, 4, 5]; echo array_product( $arr );

    // $arr = [1, 2, 3, 4, 5]; echo array_sum( $arr ) / count( $arr );



    // Работа с range  

    // $arr = range( 1, 100 ); print_r( $arr );

    // $arr = range( 'a', 'z' ); print_r( $arr );

    // $arr = range( 1, 9 ); $str = implode( '-', $arr ); echo $str;

    // $arr = range( 1, 100 ); echo array_sum( $arr );

    // $arr = range( 1, 10 ); echo array_product( $arr );


    //  Работа с array_merge

    // $arr_one = [ 1, 2, 3 ]; $arr_two = [ 'a', 'b', 'c' ]; print_r( array_merge( $arr_one, $arr_two ) );



    // Работа с array_slice

    // $arr = [ 1, 2, 3, 4, 5 ]; $result = array_slice( $arr, 1, 3 ); print_r( $result );



    // Работа с array_splice

    // $arr = [ 1, 2, 3, 4, 5 ]; array_splice( $arr, 1, 2 ); print_r( $arr );

    // $arr = [ 1, 2, 3, 4, 5 ]; array_splice( $arr, count( $arr ), 0, [ 2, 3, 4 ] ); print_r( $arr );

    // $arr = [ 1, 2, 3, 4, 5 ]; array_splice( $arr, 3, 0, [ 'a', 'b', 'c' ] ); print_r( $arr );

    // $arr = [ 1, 2, 3, 4, 5 ]; 
    // array_splice( $arr, 1, 0, [ 'a', 'b' ] ); 
    // array_splice( $arr, 6, 0, [ 'c' ] ); 
    // array_splice( $arr, 8, 0, [ 'e' ] );

    // print_r( $arr );



    // Работа с array_keys, array_values, array_combine

    // $arr = [ 'a' => 1, 'b' => 2, 'c' => '3' ]; $keys = array_keys( $arr ); $values = array_values( $arr );
    // echo print_r( $arr ) . '<br>'; echo print_r( $keys ) . '<br>'; echo print_r( $values ) . '<br>';

    // $arr_one = [ 'a', 'b', 'c' ]; $arr_two = [ 1, 2, 3 ]; print_r( array_combine( $arr_one, $arr_two ) );



    // Работа с array_flip, array_reverse

    // $arr = [ 'a' => 1, 'b' => 2, 'c' => '3' ]; print_r( array_flip( $arr ) );

    // $arr = [ 1, 2, 3, 4, 5 ]; print_r( array_reverse( $arr ) );



    // Работа с array_search

    // $arr = [ 'a', '-', 'b', '-', 'c', '-', 'd' ]; echo array_search( '-', $arr );

    // $arr = [ 'a', '-', 'b', '-', 'c', '-', 'd' ]; array_splice( $arr, array_search( '-', $arr ), 1 ); print_r( $arr );



    // Работа с array_replace

    // $arr =  [ 'a', 'b', 'c', 'd', 'e' ]; print_r( array_replace( $arr, [ 0 => '!', 3 => '!!!' ] ) );



    // Работа с сортировку  

    // $arr = [ '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b' ];
    // sort( $arr ); ksort( $arr ); rsort( $arr ); natsort( $arr );
    // echo '<pre>'; print_r( $arr ); echo '</pre>';

    // Работа с array_rand

    // $arr = [ 'a' => 1, 'b' => 2, 'c' => '3' ]; echo array_rand( $arr );

    // $arr = [ 'a' => 1, 'b' => 2, 'c' => '3' ]; echo $arr[array_rand( $arr )];



    //Работа с shuffle

    // $arr = [ 1, 2, 3, 4, 5 ]; shuffle( $arr ); print_r( $arr );

    // $arr = range( 1, 25 ); shuffle( $arr ); print_r( $arr );

    // $arr = range( 'a', 'z' ); shuffle( $arr ); print_r( $arr );

    // $str = ''; $len = 6; while( $len > strlen( $str ) ) { $str .= chr( mt_rand( 97, 122 ) ); } echo $str;



    // Работа с array_unique

    // $arr = [ 'a', 'b', 'c', 'b', 'a' ]; print_r( array_unique( $arr ) );



    // Работа с array_shift, array_pop, array_unshift, array_push

    // $arr = [ 1, 2, 3, 4, 5 ]; $arr_copy = $arr; array_pop( $arr_copy ); array_shift( $arr_copy );
    // echo 'Копия: <pre>'; print_r( $arr_copy ); echo '</pre>';
    // echo 'Исходник: <pre>'; print_r( $arr ); echo '</pre>';


    // $arr = [ 1, 2, 3, 4, 5 ]; array_unshift( $arr, 0 ); array_push( $arr, 6 );
    // echo '<pre>'; print_r( $arr ); echo '</pre>';

    // $arr = [ 1, 2, 3, 4, 5, 6, 7, 8 ]; $i = 0; $str = ''; while( $i <= count( $arr ) + 1 ) { 
    //   $str .= array_shift( $arr ); 
    //   $str .= array_pop( $arr ); 
    //   $i++;
    // } echo $str;



    // Работа с array_pad, array_fill, array_fill_keys, array_chunk  

    // $arr = [ 'a', 'b', 'c' ]; print_r( array_pad( $arr, 6, '-' ) );

    // $arr = array_fill( 0, 10, 'x' ); print_r( $arr );

    // $arr = range( 0, 20 ); print_r( array_chunk( $arr, 5 ) );



    // Работа с array_count_values

    // $arr = [ 'a', 'b', 'c', 'b', 'a' ]; print_r( array_count_values( $arr ) );



    // Работа с array_map

    // $arr = [ 1, 2, 3, 4, 5 ]; print_r( array_map( 'sqrt', $arr ) );

    // $arr = [ '<b>php</b>', '<i>html</i>', '<b>css</b>', '<i>js</i>' ]; 
    // $arr_new = array_map( function ( $value ) { return strip_tags( $value ); }, $arr ); print_r( $arr_new );

    // $arr = [ ' a ', ' b ', ' с ', ' d ', ' e ', ' f ' ];
    // $arr_new = array_map( function ( $value ) { return trim( $value ); }, $arr ); print_r( $arr );

    // Работа с array_intersect, array_diff

    // $arr_one = [ 1, 2, 3, 4, 5 ]; $arr_two = [ 3, 4, 5, 6, 7 ];
    // $new_arr = array_intersect( $arr_one, $arr_two ); print_r( $new_arr );

    // $arr_one = [ 1, 2, 3, 4, 5 ]; $arr_two = [ 3, 4, 5, 6, 7 ];
    // $new_arr = array_diff( $arr_one, $arr_two ); print_r( $new_arr );

    // Задачи

    // $str = '1234567890'; $arr = str_split( $str ); echo array_sum( $arr );

    // $keys = range( 'a', 'z' ); $values = range( 1, 26 ); $arr = array_combine( $keys, $values );
    // echo '<pre>'; print_r( $arr ); echo '</pre>';

    // $arr = range( 1, 9 ); $result = array_chunk( $arr, 3 );
    // echo '<pre>'; print_r( $result ); echo '</pre>';

    // $arr = [  1, 2, 4, 5, 5 ]; $arr_new = []; $arr_max_int = max( $arr );
    // foreach( $arr as $value ) { if( $arr_max_int > $value ) array_push( $arr_new, $value ); }
    // echo

    // тема 9!!!!!!!!!!!!!!!!!!!!!!!

    // Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов делить на количество) не используя цикл.

    // $arr = [1, 2, 3, 4, 5];
    // echo array_sum($arr) / count($arr);

    //  Найдите сумму чисел от 1 до 100 не используя цикл. 

    // echo array_sum(range(1, 100));

    // Выведите столбец чисел от 1 до 100 не используя цикл.

    // $arr = range(1, 100);
    // echo implode('<br>', $arr);

    // Заполните массив 10-ю иксами не используя цикл

    // $arr = array_fill(0, 10, 'x');
    // var_dump($arr);

    // Заполните массив 10-ю случайными числами от 1 до 10 так, чтобы они не повторялись. Цикл использовать нельзя. 

    // $arr = range(1, 10);
    // shuffle($arr);
    // var_dump($arr);

    // Найдите факториал заданного числа не используя цикл. Факториал - это произведение чисел от 1 до заданного числа включительно.

    // $num = 5; //найдем факториал 5
    // $arr = range(1, $num);
    // echo array_product($arr);

    // Дано число. Найдите сумму цифр этого числа не используя цикл.

    // $num = 123;
    // $arr = str_split($num, 1);
    // echo = array_sum($arr);
    // Дана строка. Сделайте заглавным последний символ этой строки не используя цикл. 
    // $str = 'abcde';
    // $str = strrev($str);
    // $str = ucfirst($str);
    // $str = strrev($str);
    // echo $str;

    // Дан массив с числами. Получите из него массив с квадратными корнями этих чисел не используя цикл. 

    // $arr = [1, 4, 5, 7, 9];
    // $result = array_map('sqrt', $arr);
    // var_dump($result);
    // Заполните массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита: ['a'=>1, 'b'=>2...]. Сделайте это не используя цикл.
    // $keys = range('a', 'z');
    // $elems = range(1, 26);
    // $arr = array_combine($keys, $elems);
    // var_dump($arr);

    // Дана строка с числами '1234567890'. Найдите сумму пар чисел: 12+34+56+78+90. Решите задачу, не используя цикл

    // $str = '1234567890';
    // $arr = str_split($str, 2)
    // $result = array_sum($arr);
    // echo $result;

    // 10 тема!!!!!!!!!!!!!!!!!!!!!!!

    // Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'.
    // echo '<form action="" method="GET">';
    // echo '<input type="text" name="name">';
    // echo '<input type="submit">';
    // echo '</form>';


    // if (isset($_REQUEST['name'])) {
    //     $name = $_REQUEST['name'];
    //     echo 'Привет,' . $name;
    // }

    // Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.
    //     echo '<form action="" method="GET">
    // 	<input type="text" name="name">
    // 	<input type="text" name="age">
    // 	<textarea name="message"></textarea>
    // 	<input type="submit" name="submit">
    // </form>';

    //     if (isset($_REQUEST['submit'])) {
    //         $age = strip_tags($_REQUEST['age']);
    //         $name = strip_tags($_REQUEST['name']);
    //         $message = strip_tags($_REQUEST['message']);
    //         echo "Привет, $name, $age <br> твое сообщение: $message";
    //     }

    // Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее.

    // if (!isset($_REQUEST['age'])) {
    // 	echo '<form action="" method="GET">
    // 		<input type="text" name="age">
    // 		<input type="submit">
    // 	</form>';
    // }
    // if (isset($_REQUEST['age'])) {
    // 	$age = strip_tags($_REQUEST['age']);
    // 	echo 'Ваш возраст: '.$age;
    // }

    // Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь
    ?>
    <!-- <form action="" method="GET">
        <input type="text" name="login">
        <input type="password" name="pass">
        <input type="submit" name="submit">
    </form> -->
    <?
    // if (isset($_REQUEST['submit'])) {
    //     $login = 'user';
    //     $pass = '123456';
    //     $formLogin = trim($_REQUEST['login']);
    //     $formPass = trim($_REQUEST['pass']);
    //     if ($login == $formLogin and $pass == $formPass) {
    //         echo 'Доступ разрешен!';
    //     } else {
    //         echo 'Доступ запрещен!';
    //     }
    // }

    // Атрибуты value и placeholder
    //  Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Сделайте так, чтобы после отправки формы значения ее полей не пропадали
    ?>
    <!-- <form action="" method="GET">
	<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
	<input type="submit">
    </form>  -->
    <?
    // if (isset($_REQUEST['submit'])) {
    // 	$name = $_REQUEST['name'];
    // 	echo $name;
    // }

    // Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). Сделайте так, чтобы после отправки формы значения его полей не пропадали. 
    ?>
    <!-- <form action="" method="GET">
	<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
	<textarea name="message">
		<?php if (isset($_GET['message'])) echo $_GET['message']; ?>
	</textarea>
	<input type="submit">
    </form>  -->
    <?

    // тема 11!!!!!!!!!!!!!!!!!!!!
    // Выведите текущее время в формате timestamp.

    // Timestamp: time и mktime

    // echo mktime(time());
    // Выведите 1 марта 2025 года в формате timestamp.

    // echo mktime(0, 0, 0, 3, 1, 2025);
    // Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен.

    // $year = date('Y');
    // echo mktime(0, 0, 0, 12, 31, $year);
    // Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени.
    // echo time() - mktime(13, 12, 59, 3, 15, 2000);
    //  Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени.
    // $sec = time() - mktime(7, 23, 48);
    // echo floor($sec / 60 / 60);

    // Функция date
    // Выведите на экран текущий год, месяц, день, час, минуту, секунду.

    // echo date('Y.m.d H:i:s');
    // Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'.
    // echo date('Y-m-d') . " " . date('d.m.Y') . " " . date('H.i.s') . " " . date('H:i:s');
    //  С помощью функций mktime и date выведите 12 февраля 2025 года в формате '12.02.2025'.
    // echo date('d.m.Y', mktime(0, 0, 0, 12, 2, 2025));
    // Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006, в ваш день рождения.

    // $arr = [ 0 => 'понедельник', 1 => 'вторник', 2 => 'среда', 3 => 'четверг', 4 => 'пятница', 5 => 'суббота', 6 => 'воскресенье' ];
    // foreach ($arr as $key => $el) {
    // 	if (date('w', mktime(0, 0, 0, 6, 6, 2006)) == $key) {
    // 		echo $el;
    // 	}
    // }
    //  Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью массива $month и функции date.
    // $arr = [ 'январь', "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"];
    // foreach ($arr as $key => $value) {
    // 	if (date('m') == $key + 1) {
    // 		echo $value;
    // 	}
    // }
    // Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен.
    // echo date('t', time());

    ?> 
    <!-- Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год. -->
    <!-- <form action="" method="GET">
        <input type="text" name="year">
        <input type="submit" name="submit">
    </form>  -->

    <?php
        // if ( date('L', mktime(0, 0, 0, 1, 1, $_REQUEST['year']))) 
        // { 
        // 	echo "Это високосный год"; 
        // }
    ?>
    <!-- Сделайте форму, которая спрашивает дату в формате '31.12.2025'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату. -->

    <!-- <form action="" method="GET">
        <input type="text" name="date">
        <input type="submit" name="submit">
    </form>  -->

    <?php
        // $arr = [ 0 => 'понедельник', 1 => 'вторник', 2 => 'среда', 3 => 'четверг', 4 => 'пятница', 5 => 'суббота', 6 => 'воскресенье' ];
        // $date = $_REQUEST['date'];
        // $a = explode('.', $date);
        // $n = mktime(0,0,0,$a[1], $a[0], $a[2]);
        // $day = date('w', $n);
        // echo $arr[$day];
    ?>
    <!-- Сделайте форму, которая спрашивает дату в формате '2025-12-31'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату. -->

    <!-- <form action="" method="GET">
        <input type="text" name="date">
        <input type="submit" name="submit">
    </form>  -->

    <?php
        // $arr = [ 'январь', "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "ноябрь", "декабрь"];
        // $date = $_REQUEST['date'];
        // $a = explode('-', $date);
        // $n = mktime(0,0,0,$a[1], $a[0], $a[2]);
        // $m = date('n', $n);
        // echo $arr[$m];

        //  Сравнение дат

    ?>
    <!-- Сделайте форму, которая спрашивает две даты в формате '2025-12-31'. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран. -->
        <!-- <form action="" method="GET">
        <input type="text" name="date1">
        <input type="text" name="date2">
        <input type="submit" name="submit">
        </form>  -->

    <?php
        // $date1 = $_REQUEST['date1'];
        // $date2 = $_REQUEST['date2'];
        // if($date1 > $date2){
        // 	echo "$date1 > $date2";
        // }else{
        // 	echo "$date1 < $date2";
        // }

        // На strtotime
    // Дана дата в формате '2025-12-31'. С помощью функции strtotime и функции date преобразуйте ее в формат '31-12-2025'.
        // $date = '2025-12-31';
        // echo date('d-m-Y',strtotime($date));
    ?>
    <!-- Сделайте форму, которая спрашивает дату-время в формате '2025-12-31T12:13:59'. С помощью функции strtotime и функции date преобразуйте ее в формат '12:13:59 31.12.2025'. -->
    <!-- <form action="" method="GET">
        <input type="text" name="date">
        <input type="submit" name="submit">
    </form>  -->

    <?php
        // echo date('H:i:s d.m.Y',strtotime($_REQUEST['date']));

        //  Прибавление и отнимание дат
    // В переменной $date лежит дата в формате '2025-12-31'. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.
        
        // $date = date_create('2025-12-31');
        // date_modify($date, '1 day');
        // echo date_format($date, 'd.m.Y');

        // Задачи
    //  Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году.
        // $newyear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
        // $sec = $newyear - time();
        // $days = floor($sec / (60*60*24));
        // echo "До нового года осталось: $days дней";

    ?>
    <!-- Сделайте форму с одним полем ввода, в которое пользователь вводит год. Найдите все пятницы 13-е в этом году. Результат выведите в виде массива дат. -->
    <!-- <form action="" method="GET">
        <input type="text" name="year">
        <input type="submit" name="submit">
    </form>  -->

    <?php
        // $year = $_REQUEST['year'];
        // $friday = 0;
        // $arr = [];
        // for($month = 1; $month <= 12; $month++){
        // 	$days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
        // 	for($day = 1; $day <= $days_in_month; $day++){
        // 		$d = date('w', mktime(0, 0, 0, $month, $day, $year));
        // 		if($d == 5){
        // 			if( date('d', mktime(0, 0, 0, $month, $day, $year)) == 13){
        // 			$friday++; 
        // 			$arr[] = date('d.m.Y', mktime(0, 0, 0, $month, $day, $year));
        // 			}
        // 		}
        // 	}
        // }
        // echo "В $year году 'пятниц 13-го' - $friday <br>Массив с числами:<br>";
        // var_dump($arr);

        // Узнайте какой день недели был 100 дней назад.
        // $date = date_create('2023-1-1');
        // date_modify($date, '-100 day');
        // echo date_format($date, 'd.m.Y');

// 12 тема функции
// Сделайте функцию, которая возвращает квадрат числа. Число передается параметром.
	// function ilana($num)
	// {
	// 	return $num * $num;
	// }
	// echo ilana(10);
// Сделайте функцию, которая возвращает сумму двух чисел. Числа передаются параметрами функции.
	// function ilana($num1, $num2)
	// {
	// 	return $num1 + $num2;
	// }
	// echo ilana(1, 2);
//  Сделайте функцию, которая отнимает от первого числа второе и делит на третье.
	// function ilana($num1, $num2, $num3 )
	// {
	// 	return ($num1 - $num2) / $num3;
	// }
	// echo ilana(112, 2, 2);
// Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.
	// function ilana($num)
	// {
	// 	if ($num == 1) {
	// 		return "ПН";
	// 	}
	// 	if ($num == 2) {
	// 		return "ВТ";
	// 	}
	// 	if ($num == 3) {
	// 		return "СР";
	// 	}
	// 	if ($num == 4) {
	// 		return "ЧТ";
	// 	}
	// 	if ($num == 5) {
	// 		return "ПЯТ";
	// 	}
	// 	if ($num == 6) {
	// 		return "СБ";
	// 	}
	// 	if ($num == 7) {
	// 		return "ВС";
	// 	}
	// }
	// echo ilana(5);

	// приемы работы с флагами тема 13!!!!!!!!!!!!!!
//  Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть - выведите 'да', а если нет - выведите 'нет'.
	// $arr = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ];
    // echo array_search( 5, $arr ) ? 'да' : 'нет'; 
	//  Дано число, например 31. Проверьте, что это число не делится ни на одно другое число кроме себя самого и единицы. То есть в нашем случае нужно проверить, что число 31 не делится на все числа от 2 до 30. Если число не делится - выведите 'нет', а если делится - выведите 'да'.
	// $number = 31;
	// $result = false;
	// for ($i = 2; $i < $number; $i++) { 
	// if( $number % $i === 0 ) {
	// 	$result = true;
	// 	break;
	// }
	// }
	// if( $result ) {
	// 	echo "da";
	// } 
	// else {
	// 	echo "net";
	// }
    // Дан массив с числами. Проверьте, есть ли в нем два одинаковых числа подряд. Если есть - выведите 'да', а если нет - выведите 'нет'.
	// $arr_num = [ 1, 2, 3, 4, 5, 9, 6, 7, 8, 9 ];
	// $result = false;
	// foreach ($arr_num as $key => $value) {
	//   if( $key != count($arr_num) - 1 && $value === $arr_num[$key + 1] ) {
	//     $result = true;
	//     break;
	//   }
	// }
	// echo $result ? 'да' : 'нет';

	// приемы работы с логическими значениями тема 14!!!!!!!!!!!!!!!!!!!!!
    // Сделайте функцию, которая параметрами принимает 2 числа. Если эти числа равны - пусть функция вернет true, а если не равны - false.
	// function twoNum( $a, $b ) {
    //   return $a === $b;
    // }
    // echo twoNum( 5, 5 );
//  Сделайте функцию, которая параметрами принимает 2 числа. Если их сумма больше 10 - пусть функция вернет true, а если нет - false.
	// function twoNum( $a, $b ) {
    //   return ($a + $b) > 10;
    // }
    // echo twoNum( 5, 6 );
// Сделайте функцию, которая параметром принимает число и проверяет - отрицательное оно или нет. Если отрицательное - пусть функция вернет true, а если нет - false.
	// function minusNum( $a ) {
    //   return $a < 0;
    // }
    // echo minusNum( -1 );

    // 15 тема!!!!!!!!!!!!!!!!!!!!!!!!
    // 1 С помощью цикла for сформируйте строку '123456789' и запишите ее в переменную $str.
    // for ($i = 1; $i <= 9; $i++) {
    //     $str .= $i;
    // }
    
    // 2 С помощью цикла for сформируйте строку '987654321' и запишите ее в переменную $str.
    // for ($i = 9; $i <= 1; $i--) {
    //     $str .= $i;
    // }
    
    // 3 С помощью цикла for сформируйте строку '-1-2-3-4-5-6-7-8-9-' и запишите ее в переменную $str.
    // for ($i = 1; $i <= 9; $i++) {
    //     $str .= '-'.$i;
    // }
    // $str .= '-';
    
    // 4  Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5:
    // for ($i = 1; $i <= 20; $i++) {
    //     $str .= 'x';
    //     echo $str . '<br>';
    // }
    
    // 5 С помощью двух вложенных циклов нарисуйте следующую пирамидку:
    // for ($i = 1; $i <= 9; $i++) {
    //     for ($j = 1; $j <= $i; $j++) {
    //         echo $i;
    //     }
    //     echo '<br>';
    // }
    
    // 6 Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for:
    // for ($i = 1; $i <= 20; $i++) {
    // $str .= 'xx';
    // echo $str . '<br>';
    // }
    // 16 tema!!!!!!!!!!!!!!!!!!!!!!!!  
    // 1 Заполните массив следующим образом: в первый элемент запишите 'x', во второй 'xx', в третий 'xxx' и так далее.
    // $arr = [];
    // $str = '';
    // for ($i = 1; $i <= 10; $i++) {
    //     $str .= 'x';
    //     $arr[] = $str;
    // }
    
    // 2 С помощью двух вложенных циклов заполните массив следующим образом: в первый элемент запишите '1', во второй '22', в третий '333' и так далее.
    // $arr = [];
    // for ($i = 1; $i <= 10; $i++) {
    //     $str = '';
    //     for ($j = 1; $j <= $i; $j++) {
    //         $str .= $i;
    //     }
    //     $arr[] = $str;
    // }
    
    // 3 Сделайте функцию arrayFill, которая будет заполнять массив заданными значениями. Первым параметром функция принимает значение, которым заполнять массив, а вторым - сколько элементов должно быть в массиве. Пример: arrayFill('x', 5) сделает массив ['x', 'x', 'x', 'x', 'x'].
    // function arrayFill($str, $kol)
    // {
    //     $result = [];
    //     for ($i =1; $i <= $kol; $i++) {
    //         $result[] = $str;
    //     }
    //     return $result;
    // }
    
    // 4 Дан массив с числами. Узнайте сколько элементов с начала массива надо сложить, чтобы в сумме получилось больше 10-ти. Считайте, что в массиве есть нужное количество элементов.
    // $arr = [1, 2, 3, 4, 5, 6, 7, 8];
    // $kol = 0;
    // $sum = 0;
    // for ($i = 0; $i < count($arr); $i++) {
    //     $sum += $arr[$i];
    //     $kol++;
    //     if ($sum > 10) {
    //         break;
    //     }
    // }
    // echo $kol;
    
    // 5 Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]]. Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.
    // $sum = 0;
    // foreach ($arr as $item) {
    //     foreach ($item as $subItem) {
    //         $sum += $subItem;
    //     }
    // }
    
    // 6 Дан трехмерный массив с числами, например [[[1, 2], [3, 4]], [[5, 6], [7, 8]]]. Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным
    // $arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
    // $sum = 0;
    // foreach ($arr as $elem) {
    //     foreach($elem as $subElem) {
    //         foreach($subElem as $subSubElem) {
    //             $sum += $subSubElem;
    //         }
    //     }
    // }
    // echo $sum;
    
    // 7 С помощью двух циклов создайте массив [[1, 2, 3], [4, 5, 6], [7, 8, 9]].
    // $arr = [];
    // $count = 1;
    // for ($i = 0; $i < 3; $i++) {
    //     for ($j = 0; $j < 3; $j++) {
    //         $arr[$i][$j] = $count;
    //         $count++;
    //     }
    // }

    // ТЕМА 17 Правильное использование пользовательских функций 

    //задание 1 Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля и меньше 10. Если это так - пусть функция возвращает true, если не так - false.
    // function isNumberInRange(int $num){ return $num > 0 && $num < 10;}
    //задание 2 Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти. Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи.
    // $arr = range(1, 15);
    // $arr = array_filter($arr, 'isNumberInRange');
    // println($arr);
    //задание 3 Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр.
    // function getDigitsSum(int $num){ return array_sum(str_split($num)); }
    //задание 4  Найдите все года от 1 до 2022, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.
    // for ($i=1; $i <= 2022; $i++) if(getDigitsSum($i) == 13) println($i);
    //задание 5 Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false.
    // function isEven(int $num){ return $num % 2 === 0; }
    //задание 6 Дан массив с целыми числами. Создайте из него новый массив, где останутся лежать только четные из этих чисел. Для этого используйте вспомогательную функцию isEven из предыдущей задачи.
    // $arr = range(1, 15);
    // $arr = array_filter($arr, 'isEven');
    // println($arr);
    //задание 7 Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей (чисел, на которое делится данное число).
    // function getDivisors(int $num){
    //     for($i = 1; $i <= floor($num / 2); $i++) if($num % $i == 0) $divisors[] = $i;
    //     return $divisors;
    // }
    //задание 8  Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей. Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи.
    // function getCommonDivisors(int $num1, int $num2){ return array_intersect(getDivisors($num1), getDivisors($num2)); }
    // println(getCommonDivisors(12, 8));

    //ТЕМА 18 Практика на работу с пользовательскими функциями PHP 

    //задание 1 Сделайте функцию, которая принимает строку на русском языке, а возвращает ее транслит.
    // function translit($str) {
    //     $russian = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    //     $translit = array('A', 'B', 'V', 'G', 'D', 'E', 'E', 'Gh', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'C', 'Ch', 'Sh', 'Sch', 'Y', 'Y', 'Y', 'E', 'Yu', 'Ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya');
    //     return str_replace($russian, $translit, $str);
    // }
    //задание 2 Сделайте функцию, которая возвращает множественное или единственное число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция первым параметром принимает число, а следующие 3 параметра — форма для единственного числа, для чисел два, три, четыре и для чисел, больших четырех, например, func(3, 'яблоко', 'яблока', 'яблок').
    // function plural(int $num, string $str1, string $str2, string $str3){
    //     if(($num >= 10 && $num <= 20)) return $num.' '.$str3;
    //     if($num % 10 === 1) return $num.' '.$str1;
    //     if($num % 10 === 2 || $num % 10 === 3 || $num % 10 === 4) return $num.' '.$str2;
    //     return $num.' '.$str3;
    // }
    // println(plural(3, 'яблоко', 'яблока', 'яблок'));
    //задание 3 Найдите все счастливые билеты. Счастливый билет - это билет, в котором сумма первых трех цифр его номера равна сумме вторых трех цифр его номера
    // for ($i=0; $i < 10; $i++) for ($j=0; $j < 10; $j++) for ($k=0; $k < 10; $k++) for ($l=0; $l < 10; $l++) for ($o=0; $o < 10; $o++) for ($p=0; $p < 10; $p++) if($i + $j + $k === $l + $o + $p) println($i.$j.$k.$l.$o.$p);
    //задание 4 Дружественные числа - два различных числа, для которых сумма всех собственных делителей первого числа равна второму числу и наоборот, сумма всех собственных делителей второго числа равна первому числу.

    // Например, 220 и 284. Делители для 220 это 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 и 110, сумма делителей равна 284. Делители для 284 это 1, 2, 4, 71 и 142, их сумма равна 220.

    // Задача: найдите все пары дружественных чисел в промежутке от 1 до 10000. Для этого сделайте вспомогательную функцию, которая находит все делители числа и возвращает их в виде массива. Также сделайте функцию, которая параметром принимает массив, а возвращает его сумму.
    // function deliteli(int $num)
    // {
    //     for($i = 1; $i <= ceil($num / 2); $i++) if($num % $i == 0) $delitels[] = $i;
    //     return $delitels;
    // }

    // for ($i=1; $i < 10000; $i++) { 
    //     $del = deliteli($i);
    //     if($i === array_sum(deliteli(array_sum($del)))) println($i.' '.array_sum($del));
    // }
    //ТЕМА 19 Продвинутая работа с пользовательскими функциями в PHP 
    //Значения по умолчанию задание 1 Сделайте функцию cut, которая первым параметром будет принимать строку, а вторым параметром - сколько первых символов оставить в этой строке. Второй параметр должен быть необязательным и по умолчанию принимать значение 10.
    // function cut(string $str, int $len = 10) { substr($str, 0, $len); }
    //задание 2 Работа с рекурсией
    //  Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл.
    // function arrprint($arr, $i = 0) 
    // { 
    //     println($arr[$i++]); 
    //     arrprint($arr, $i);
    // }
    // $arr = range(0, 10);
    // arrprint($arr);
    //задание 3 Дано число. Сложите его цифры. Если сумма получилась более 9-ти, опять сложите его цифры. И так, пока сумма не станет однозначным числом (9 и менее). 
    // function digitsSum(int $num)
    // {
    //     for ($i=0; $i < strlen((string)$num); $i++) $sum += (int)(((string)$num)[$i]);
    //     if($sum > 9) return digitsSum($sum);
    //     else return $sum;
    // }
    // println(digitsSum(678));
 
?>
</body>
</html>