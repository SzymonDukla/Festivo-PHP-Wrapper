#   Holiday API PHP Wrapper
API Version: 1.0

Documentation <https://holidayapi.pl/documentation>

*[Psst! Have a look at my other project!](https://www.amaranthapp.com?utm_source=github.com&utm_medium=holidayapi-wrapper)*

#### Table of contents
- [About](#about)
- [Suported countries](#countries)
- [Endpoints](#endpoints)
- [Parameters](#parameters)
- [Installation Instructions](#installation-instructions)
- [File Tree](#file-tree)
- [Opening an Issue](#opening-an-issue)

### About
Holiday API is the only service offering it's powerful data completely free of charge.

### Countries
Currently supported countries:

| Name          | ISO 3166-1 alpha-2   |
| ------------- |:--------------------:|
| Belgium       | BA                   |
| Brazil        | BR                   |
| Canada        | CA                   |
| Czechia       | CZ                   |
| Denmark       | DK                   |
| Germany       | DE                   |
| France        | FR                   |
| Great Britain | GB                   |
| Norway        | NO                   |
| Poland        | PL                   |
| Russia        | RU                   |
| Slovakia      | SK                   |
| Sierra Leone  | SL                   |
| Vietnam       | VN                   |
| Indonesia     | ID                   |
| United States | US                   |

New countries and regions are coming soon. Please refer to the [list on the main page](https://holidayapi.pl) for the most recent list of supported countries.

### Endpoints
Currently only two endpoints are supported:

* ```/v1/holidays``` - access holiday data

### Parameters
You can filter returned holidays by date and upcoming or past events:

| Name          | Example   | Mandatory  | Description |
| ------------- |:---------:| ----------:| -----------------------------------------------------------------------------: |
| country       | PL        |     yes    | [ISO 3166-1 alpha-2](https://www.nationsonline.org/oneworld/country_code_list.htm) format (BE, BR, CA, CZ, DE, FR, GB, NO, PL, SK, SL, ID, US) |
| year          | 2018      |     yes    | [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format (CCYY)
| month         | 4 or 04   |      no    | 1 or 2 digit month (1-12)
| day           | 7 or 07   |      no    | 1 or 2 digit day (1-31 depending on the month)
| previous      | false     |      no    | boolean; returns the previous holidays based on the date (works with all parameters listed before)
| upcoming      | true      |      no    | boolean; returns the previous holidays based on the date (works with all parameters listed before *except* previous)
| pretty        | true      |      no    | boolean; prettifies returned JSON for a better human reading performance

### Installation Instructions
1. Download and install package from Composer via ```composer require szymondukla/holiday-api-wrapper```. You can also download an archive and setup it manually using ```composer install``` command.
2. Include main class into your project and add required ```use``` declaration, i.e.
```php
<?php

use SzymonDukla\HolidayApi\HolidayApi;
require_once( __DIR__ . /HolidayApi.php);

...
```
3. Initiate the library with ```$handle = new HolidayApi()->makeClient();```
4. From now on you can use $handle to access holiday information for a given country using ```$handle->getHolidays('PL')```. To return only holidays matching specific conditions, you can pass them as parameters:
```        
                                       YYYY  MM  DD
$holidays = $handle->getHolidays('PL', 2018, 12, 06)
```


### File Tree
```
holidayapi-wrapper
├── .gitignore
├── README.md
├── HolidayApi.php
└── composer.json
```

### Opening an Issue
Before opening an issue there are a couple of considerations:
* If you did not **star this repo** *We will close the issue immediately without consideration.*
* **Read the instructions** and make sure all steps were *followed correctly*.
* **Check** that the issue is not *specific to the development environment* setup.
* **Provide** *duplication steps*.
* **Attempt to look into the issue**, and if you *have a solution, make a pull request*.
* **Show that you have made an attempt** to *look into the issue*.
* **Check** to see if the issue you are *reporting is a duplicate* of a previous reported issue.
* **Follow these instructions and show us that you have tried.**
* If you have a questions or comments don't hesitate to [give me a shout](mailto:hello@szymondukla.com)!