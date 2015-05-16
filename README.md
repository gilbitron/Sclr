[![Build Status](https://travis-ci.org/gilbitron/Sclr.svg?branch=master)](https://travis-ci.org/gilbitron/Sclr)

# Sclr
Sclr is a library that adds useful Ruby-style methods to scalar types in PHP. It uses a wrapper function 
(much like jQuery's `$()`) to make using Sclr as easy as possible, and even supports method chaining.

## Requirements

* PHP 5.4+

## Install

Install via [composer](https://getcomposer.org):

```
{
    "require": {
        "gilbitron/sclr": "~1.0"
    }
}
```

Run `composer install` then use as normal:

```php
require 'vendor/autoload.php';

$string = s('hello world')->capitalize();
```

## Usage

Using Sclr is as simple as passing your value into the `s($value)` function. You can then use any of the API
methods below as you wish.

### Strings

* [capitalize()](#capitalize)
* [capitalizeFirst()](#capitalizefirst)
* [chars()](#chars)
* [chop()](#chop)
* [contains()](#contains)
* [endsWith()](#endswith)
* [length()](#length)
* [lowercase()](#lowercase)
* [reverse()](#reverse)
* [startsWith()](#startswith)
* [uppercase()](#uppercase)

#### capitalize()

Uppercase the first character of each word in a string.

```php
s('hello world')->capitalize()
=> "Hello World"
```

Chainable: Yes

#### capitalizeFirst()

Make a string's first character uppercase.

```php
s('hello world')->capitalizeFirst()
=> "Hello world"
```

Chainable: Yes

#### chars()

Convert a string to an array.

```php
s('hello world')->chars()
=> ['h', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd']
```

Chainable: No

#### chop()

Remove the last character from a string.

```php
s('hello world')->chop()
=> "hello worl"
```

Chainable: Yes

#### contains()

Test if the value contains a given string.

```php
s('hello world')->contains('ello')
=> true
```

Chainable: No

#### endsWith()

Test if the value ends with a given string.

```php
s('hello world')->endsWith('rld')
=> true
```

Chainable: No

#### length()

Return the length of a string.

```php
s('hello world')->length()
=> 11
```

Chainable: No

#### lowercase()

Make a string lowercase.

```php
s('HeLlO WoRlD')->lowercase()
=> "hello world"
```

Chainable: Yes

#### reverse()

Reverse a string.

```php
s('hello world')->reverse()
=> "dlrow olleh"
```

Chainable: Yes

#### startsWith()

Test if the value starts with a given string.

```php
s('hello world')->startsWith('hel')
=> true
```

Chainable: No

#### uppercase()

Make a string uppercase.

```php
s('HeLlO WoRlD')->uppercase()
=> "HELLO WORLD"
```

Chainable: Yes

#### Chainable example:

```php
$string = s('hello world')->capitalize()->chop()->reverse();
// $string = "lroW olleH"
```

### Arrays

For array methods you need to use the `value()` method to retrieve the value
from chainable methods (e.g. `$array = s(['a'])->append('b')->value()`).

Coming soon...