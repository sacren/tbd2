<x-layout></x-layout>
<?php

// declare function foo
function foo()
{
    echo 'Hello, world!'; // returns null
}

// declare function bar
function bar()
{
    return 'Hi, there!';
}

foo();
echo '<br>';

$greeting = bar();
echo $greeting . '<br>';
echo bar() . '<br>';

var_dump(foo());
echo '<br>';
var_dump(bar());
echo '<br>';

if (false) {
    function qaz() // never declared
    {
        return 'Hi, there!';
    }
}

// echo qaz(); error: Undefined function 'qaz'

function baz()
{
    echo 'baz';

    function foobar()
    {
        echo 'foobar';
    }
}

baz(); // if again, will redeclare 'foobar'
echo '<br>';
foobar(); // foobar() depends on baz()
echo '<br>';

function getOne(): int // return type
{
    return 1;
}

var_dump(getOne());
echo '<br>';

function getStringOne(): string
{
    return 1; // integer converted to string
}

var_dump(getStringOne());
echo '<br>';

function getNumberOne(): int
{
    return '1'; // string converted to integer
}

var_dump(getNumberOne());
echo '<br>';

function getNothing(): void // can't use null here
{
    return; // optional statement, can't use return null
}

var_dump(getNothing());
echo '<br>';

function getSomething(): ?string // string or other type
{
    return null;
}

var_dump(getSomething());
echo '<br>';

// use | for multiple types
function getFloat(): int|float
{
    return 1.0;
}

var_dump(getFloat());
echo '<br>';

// use mixed for any type
function getMuch(): mixed // wrong: ?mixed
{
    return [];
}

var_dump(getMuch());
echo '<br>';