# php_login_sample
## branch of **sina weibo api** of **user_from_mysql**
A very simple login system writing by PHP ,Support **"Sign up(Register)"**,using Mysql as storage to save username and userpassword. Use it for learning PHP . Be attention ! The password is store as plaintext .

This branch add weibo Oauth api . The API is a load of shit. Sina weibo API use POST method to get access_token , but they use url to transfer arguments as the same of GET .

I thought it was like this :

```
$url = "https://api.weibo.com/oauth2/access_token";
$data = array('client_id' =>YOUR_CLIENT_ID , ……………… );
$contents = http_post_data($url, $data);
```

But actually the shit is like this:

```
$url="https://api.weibo.com/oauth2/access_token?client_id=YOUR_CLIENT_ID&client_secret=YOUR_CLIENT_SECRET&grant_type=authorization_code&redirect_uri=YOUR_REGISTERED_REDIRECT_URI&code=CODE";
$contents = http_post_data($url, '');
```

Refer to:[http://www.cnblogs.com/kvspas/archive/2011/12/30/sina-oauth-21323.html](http://www.cnblogs.com/kvspas/archive/2011/12/30/sina-oauth-21323.html)(Chinese)
