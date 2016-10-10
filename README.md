# JPLogger

This is a customer logger base of [monolog](https://github.com/Seldaek/monolog) for Laravel/Lumen 5.0+,it can save the log to different files.
这是一个基于[monolog](https://github.com/Seldaek/monolog)适用于Laravel/Lumen 5.0及以上版本的个性化日志输出拓展，可以将日志安装需求输出到同的日志文件里。



## Install 安装

```shell
  composer require peiit/jplogger dev-master
```

## Configuration 配置

### In Laravel

1. register `ServiceProvider` in `config/app.php` :

  ```php
  Peiit\JPLogger\JPLoggerServiceProvider::class,
  ```

### In Lumen

1. register `ServiceProvider` in `bootstrap/app.php` :

  ```php
  $app->register(Peiit\JPLogger\JPLoggerServiceProvider::class);
  ```

## Use 使用


```php
//Example
$log_name = 'jp_test';//log file name
$j_log = app('JPLogger')->logger($log_name);//Create a logger
        
$j_log->info('do something****' . microtime(true),['param1','param2']);//log a info
$j_log->error('some err****' . microtime(true));//log a error
```

It use as laravel's logger in the same way.
本拓展和Laravel/Lumen使用的日志器使用方法一样。


## Result 结果
You can find the `storage/logs/jp_test.log` is the customer log.
你可以看到自己的定制日志 `storage/logs/jp_test.log`.


## License

MIT
