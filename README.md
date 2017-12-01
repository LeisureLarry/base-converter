# base-converter

## Webmasters Base Converter 10 <-> 36

Just another base converter for integers to base 36 and back (with an optional shifting)

### Examples

```php
<?php

use \Webmasters\Utilities\Numbers\BaseConverter;

BaseConverter::setShifting(999);

$base10 = 1;
$base36 = BaseConverter::toBase36($base10); // 'rs'

$base36 = 'rs';
$base36 = BaseConverter::toBase10($base36); // 1

```

### Idea
[Jan Teriete](https://plus.google.com/106660436858103395374?rel=author)