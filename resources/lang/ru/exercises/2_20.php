<?php

return [
    'title' => 'Точечная запись',
    'description' => [
        '1' =>
        "Процедуры +, * и list принимают произвольное число аргументов " .
        "Один из способов определения таких процедур состоит в использовании точечной записи (dotted-tail notation). " .
        "В определении процедуры список параметров с точкой перед именем последнего члена означает, что, когда процедура вызывается, начальные параметры (если они есть) будут иметь в качестве значений начальные аргументы, как и обычно, но значением последнего параметра будет список всех оставшихся аргументов. " .
        "Например, если дано определение ",
        '2' =>
        "то процедуру f можно вызывать с двумя и более аргументами. Если мы вычисляем",
        '3' =>
        "то в теле f переменная x будет равна 1, y будет равно 2, а z будет списком (3 4 5 6). Если дано определение",
        '4' =>
        "то процедура g может вызываться с нулем и более аргументов. Если мы вычислим",
        '5' =>
        "то в теле g значением переменной w будет список (1 2 3 4 5 6).",
        '6' =>
        "Используя эту нотацию, напишите процедуру same-parity, которая принимает одно или более целое число и возвращает список всех тех аргументов, у которых четность та же, что у первого аргумента. Например,"
    ]
];