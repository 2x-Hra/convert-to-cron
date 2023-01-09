# Convert Date to Cron
Here is a PHP class that Convert time to Cron Expression

## Cron Expression 
`Cron Expression` is type of date-time expression for scheduling task in unix-machines.

## How to use
Clone the project and then :
```bash
php ./Main.php/
```
This will change the current time to `Cron Expression` to convert your specific `date-time` just change the input of the function with your specific `date-time`.
### Use in your project.
Clone <a href="https://github.com/2x-Hra/convert-to-cron/blob/master/app/CronConverter.php"> this Class <a> into your project and then call `toCronExpression()` function with your `date-time` parameter .
Your input parameter have to be this format :  ` Y-m-d H:i:s ` for example : `2023-01-09 13:49:31`
### Function
```php
$Converter = new CronConverter();
$date = date("Y-m-d H:i:s");
$Converter->toCronExpression($date);
```

## Contributing

Pull requests are welcome. For major changes, please open an <a href="https://github.com/2x-Hra/convert-to-cron/issues"> issue here </a> first
to discuss what you would like to change.


## License

[MIT](https://choosealicense.com/licenses/mit/)
