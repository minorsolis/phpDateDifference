# phpDateDifference
======

Simple PHP Function to calculate the difference in 2 dates

## Setup

**Step 1** Include the class

```php
require('phpDateDifference.php');
```

**Step 2** Create a new instance of the class

```php
$phpDateDifference = new phpDateDifference();
```

**Step 3** Just pass the parameters

```php
$dateFrom         = date("Y-m-d");
$dateTo           = "2014-01-01";
$interval         = 'day';

echo "From: $dateFrom <br /> To: $dateTo <br /> Interval: $interval <hr>";
echo "The amount of ".$interval."s is ".$phpDateDifference->getDifference($dateFrom,$dateTo,$interval);
```

## Class or Function

I have it as a class but it can also be used as a simple function

## Tags (keywords)

* php simple date difference
* php subtract dates
* php sum dates
* php days between 2 dates
