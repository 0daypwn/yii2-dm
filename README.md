# yii2-dm
yii2 dm driver, base on yii2 oci driver.

# usage
```
'db_dm' => [
    'class' => 'myy\yii2dm\Connection',
    'dsn' => 'dm:host=127.0.0.1:5236;schema=XXXXXX',
    'username' => 'XXXXXX',
    'password' => 'XXXXXX',
    'charset' => 'utf8',
],
```

## dsn
- DSN前缀固定为 `dm:`
- host: 格式 IP:port，port默认为5236
- schema: 指定用户登录后的当前模式schema，缺省为 username 同名的默认模式