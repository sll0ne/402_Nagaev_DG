<?php
echo "\n";
echo "Вариант 2\n
Написать консольный вариант для игры \"Угадай число\" (согласно общей спецификации) с сохранением информации о партиях в базе данных SQLite.
Режим работы приложения должны определяться при запуске по аргументам командной строки:
--new (краткий параметр -n). Новая игра. Этот же режим используется по умолчанию, если программа запускается без параметров.
--list (-l). Вывод списка всех сохраненных игр.
--list win (-l win). Вывод списка всех игр, в которых победил человек.
--list loose (-l loose). Вывод списка всех игр, в которых человек проиграл.
--top. Вывод статистики по игрокам. Для каждого игрока нужно посчитать количество побед и проигрышей, список отсортировать по количеству побед (чемпионы располагаются вверху списка).
--replay id (-r id). Повтор всех ходов игры с идентификатором id.
--help (-h). Вывод краткой информации о приложении и доступных ключах для запуска в разных режимах.";
?>