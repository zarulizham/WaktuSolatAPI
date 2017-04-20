# WaktuSolatAPI
A free, unlimited, custom request API. Data were crawled from www.e-solat.gov.my. The data are available for all states in Malaysia for year 2017.

You can use the API by using URL below:
 www.mardyoe.com/waktusolat/api/date.php 
 
## Parameters

Variable | Description 
--|--
zone* | Zone code
start | Start date for a range date (Y-m-d). Remove if want to return today's prayer times
end | End date for a range date (Y-m-d)
format |  12-hour or 24-hour time format
pre | Display in pre tag (true) or display in json format (false)


Note: * is a mandatory parameter 

## Usage Example

```
http://www.mardyoe.com/waktusolat/api/date.php?zone=ktn01&start=2017-01-01&end=2017-01-01&format=12-hour&pre=true
```

## Result 


```
Array
(
    [zone] => KTN01
    [state] => KELANTAN
    [district] => Kota Bharu, Bachok, Pasir Puteh, Tumpat, Pasir Mas, Tnh. Merah, Machang, Kuala Krai, Mukim Chiku
    [start] => 2017-01-01
    [end] => 2017-01-01
    [prayer_times] => Array
        (
            [0] => Array
                (
                    [date] => 2017-01-01
                    [imsak] => 5:54 AM
                    [subuh] => 6:04 AM
                    [syuruk] => 7:22 AM
                    [zohor] => 1:17 PM
                    [asar] => 4:38 PM
                    [maghrib] => 7:09 PM
                    [isyak] => 8:20 PM
                )
        )
)
```

## Additional Contributor
Thanks to:
- Ariff Yasri - Scrapping the data

## Motivation
Before this API is available to use, there are hard to get a prayer times for a specific time range. There are might have, but the data is not up-to-date, available only for today, and limited number of query per day.
