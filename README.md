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

Method | Result | Chainable
------ | ------ | ---------
`s('hello world')->capitalize()` | `"Hello World"` | Yes
`s('hello world')->capitalizeFirst()` | `"Hello world"` | Yes
`s('hello world')->chars()` | `['h', 'e', 'l', 'l', 'o', ' ', 'w', 'o', 'r', 'l', 'd']` | No
`s('hello world')->chop()` | `"hello worl"` | Yes
`s('hello world')->contains('ello')` | `true` | No
`s('hello world')->endsWith('rld')` | `true` | No
`s('hello world')->length()` | `11` | No
`s('HeLlO WoRlD')->lowercase()` | `"hello world"` | Yes
`s('hello world')->reverse()` | `"dlrow olleh"` | Yes
`s('hello world')->startsWith('hel')` | `true` | No
`s('HeLlO WoRlD')->uppercase()` | `"HELLO WORLD"` | Yes

Chainable example:

```php
$string = s('hello world')->capitalize()->chop()->reverse();
// $string = "lroW olleH"
```