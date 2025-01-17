@php
declare(strict_types=1);
@endphp

<x-layout>
  <x-slot:title>
    Intro
  </x-slot>

  <h1>
    @php
    echo 'Hello World!' . '<br>';
    @endphp

    {{ 'Hello World!' . '<br>' }} @php // shorthand without echo and ; @endphp

    @php
    // full version for business logic
    $tmp1 = 1;
    $tmp2 = 2;
    echo $tmp1 . ', ' . $tmp2;
    @endphp
  </h1>

@php

// not good idea to mix with HTML tags
echo '<p>' . $tmp1 . ', ' . $tmp2 . '</p>';

echo 'Hello World!' . '<br>';
print 'Hello World!' . '<br>';

/* print is the same as echo, but the statement returns 1.
 * print can be used with expressions while echo cannot.
 *
 * This is wrong:
 * print echo 'Hello World!';
 */
echo print 'Hello World!' . '<br>';

# Parentheses are optional.
print('Hello World!' . '<br>');
echo('Hello World!' . '<br>');

// Concatenate with echo, but not with print.
echo 'Hello', ' ', 'World!', '<br>';

// Escape single quotes or use double quotes.
echo 'What\'s up?' . '<br>';
echo "What's up?" . '<br>';

/* use variables.
 *
 * These are wrong:
 * $123name;
 * $n@ame;
 */
$name = 'World';
echo $name . '<br>';
echo '$name' . '<br>';
echo "$name" . '<br>';
echo "Hello $name!" . '<br>';
echo "Hello {$name}!" . '<br>';
echo 'Hello' . ' ' . $name . '!' . '<br>';

// Use underscores.
$_name = 'World';
$_123name = 'World';
echo $_name . '<br>';
echo $_123name . '<br>';

// Pass by value.
$tmp1 = 1;
$tmp2 = $tmp1;
$tmp1 = 2;
echo $tmp2 . '<br>'; // 1

// Pass by reference.
$tmp1 = 1;
$tmp2 = &$tmp1;
$tmp1 = 2;
echo $tmp2; // 2

@endphp

</x-layout>
