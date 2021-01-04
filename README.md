#   Festivo Holiday API PHP Wrapper
API Version: 1.1

Documentation <https://getfestivo.com/documentation>

#### Table of contents
- [Obtaining an API Key](#api-key)
- [Supported countries](#countries)
- [Endpoints](#endpoints)
- [Parameters](#parameters)
- [Installation Instructions](#installation-instructions)
- [File Tree](#file-tree)
- [Opening an Issue](#opening-an-issue)

### API Key
As of 27th of May 2019 we require all users to sign up and generate their API key.
We offer a spectrum of different subscription plans, including our *Developer* plan. Please check [your account](https://app.getfestivo.com) for more information.

### Countries
Full list of countries is available at [getfestivo.com](https://getfestivo.com).

### Endpoints
Currently, only two endpoints are supported:

* ```/v2/holidays``` - access holiday data

### Parameters
You can filter returned holidays by date and upcoming or past events:

| Name          | Example   | Mandatory  | Description |
| ------------- |:---------:| ----------:| -----------------------------------------------------------------------------: |
| api_key       | af543g6454hh567h565665hgf456  |     yes    | A key available on your Dashboard page once you sing up and sign into your account. Don't have an account yet? [Get started FOR FREE!](https://www.nationsonline.org/oneworld/country_code_list.htm) |
| country       | PL                            |     yes    | [ISO 3166-1 alpha-2](https://www.nationsonline.org/oneworld/country_code_list.htm) format |
| year          | 2018                          |     yes    | [ISO 8601](https://www.iso.org/iso-8601-date-and-time-format.html) format (CCYY)
| month         | 4 or 04                       |      no    | 1 or 2 digit month (1-12)
| day           | 7 or 07                       |      no    | 1 or 2 digit day (1-31 depending on the month)
| previous      | false                         |      no    | boolean; returns the previous holidays based on the date (works with all parameters listed before)
| upcoming      | true                          |      no    | boolean; returns the previous holidays based on the date (works with all parameters listed before *except* previous)
| pretty        | true                          |      no    | boolean; prettifies returned JSON for a better human reading performance
| public        | true                          |      no    | boolean; returns only official, public holidays (Premium and Enterprise plan only)

*Full list of parameters is available in our [Documentation](https://getfestivo.com/documentation#filters)*

### Installation Instructions
1. Download and install package from Composer via ```composer require szymondukla/holiday-api-wrapper:"^1.2"```. You can also download an archive and setup it manually using ```composer install``` command.
2. Include main class into your project and add required ```use``` declaration, i.e.
```php
<?php

use SzymonDukla\HolidayApi\HolidayApi;
require_once( __DIR__ . /HolidayApi.php);

...
```
3. Initiate the library with ```$handle = new HolidayApi('YOUR API KEY')->makeClient();```
4. Replace `YOUR API KEY` with [API Key](#api-key) generated as per instructions
4. From now on you can use $handle to access holiday information for a given country using ```$handle->getHolidays('PL')```. To return only holidays matching specific conditions, you can pass them as parameters:
```        
                                       YYYY  MM  DD
$holidays = $handle->getHolidays('US', 2021, 12, 06)
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
* If you have a questions or comments don't hesitate to [give us a shout](mailto:hello@getfestivo.com)!
