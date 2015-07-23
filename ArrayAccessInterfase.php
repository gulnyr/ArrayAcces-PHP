<?php

/*
Создаем класс Book.
 Он должен реализовать все методы, описанные в интерфейсе;
 иначе произойдет фатальная ошибка
*/

class Book implements ArrayAccess
{

    private $props = [];

    // Определяет, существует ли заданное ключ

    function offsetExists($item)
    {
        return isset($this-> props[$item]);
    }

    // Удаляет ключ

    function offsetUnset($item)
    {
        unset($this->props[$item]);
    }

    // Устанавливает ключ

    function offsetSet($item, $value)
    {
        $this->props[$item] = $value;
    }

// Возвращает заданный ключ

    function offsetGet($item)
    {
        return $this->props[$item];
    }

}

$book = new Book;
$book['title'] = 'PHP и интерфейсы'; //Устанавливает ключ
if (isset($book['title'])) //Проверяем
    echo $book['title']."<br>"; //Возвращаем
unset($book['title']); //Удаляем

// Здесь ради интереса напишем еще массивы

$book['title'] = 'PHP5';
$book['theme'] = 'ArrayAcces';
$book['description'] = 'offsetSet';
$book['description'] = 'offsetGet';
$book['description'] = 'offsetExist';
$book['description'] = 'offsetUnset';

// print_r хорош для массивов

print_r($book);
?>