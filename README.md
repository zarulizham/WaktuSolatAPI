# WaktuSolatAPI
A free, unlimited, custom request API. Data were crawled from www.e-solat.gov.my. The data are available for all states in Malaysia for year 2017.

You can use the API by using URL below:
 www.mardyoe.com/waktusolat/api/date.php 
 
1. zone*: Zone code
2. start: Start date for a range date (Y-m-d). Remove if want to return today's prayer times
3. end: End date for a range date (Y-m-d)
4. format: 12-hour or 24-hour time format
5. pre: Display in pre tag (true) or display in json format (false)

Note: * is a mandatory parameter 

Usage Example:
http://www.mardyoe.com/waktusolat/api/date.php?zone=ktn01&start=2017-01-01&end=2017-01-01&format=12-hour&pre=true
