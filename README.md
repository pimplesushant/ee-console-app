# A PHP Console Application built using Symfony/Console

This app is built using PHP and Symfony/Console for JSON to CSV Conversion.

### Technologies
- PHP
- Symfony/Console

### Installation
* Clone this repo [here](https://github.com/pimplesushant/ee-console-app).
* cd `ee-console-app`
* Run `composer install`

# Usage Options
    Console App v1.0

    Usage:
    command [options] [arguments]

    Options:
    -h, --help            Display this help message
    -q, --quiet           Do not output any message
    -V, --version         Display this application version
        --ansi            Force ANSI output
        --no-ansi         Disable ANSI output
    -n, --no-interaction  Do not ask any interactive question
    -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

    Available commands:
    csv    Convert JSON to CSV
    help   Displays help for a command
    list   Lists commands

# Using the app

```sh
php ./app csv
```

Output
```sh
This is Console App for JSON to CSV Conversion!
Generating CSV.....Please find CSV at : exports/CSV_1586455143.csv
```

# Running Unit Test

```sh
 phpunit tests/CSV/CsvCommandTest.php
```

Output
```sh
PHPUnit 8.0.6 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 102 ms, Memory: 8.00 MB

OK (1 test, 2 assertions)
```

### Support
If you are having issues, please let me know.
Mail me at: me@pimplesushant.in, pimple.sushant.s@gmail.com