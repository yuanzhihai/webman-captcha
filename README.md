# webman-captcha

webman  验证码类库 支持前后端分离，api接口调用

## 安装
> composer require yzh52521/webman-captcha

## 使用


~~~
public function captcha()
{
   return yzh52521\captcha\facade\Captcha::create();
}
~~~

### 生成结果

```
{
  "key": "Qh8kHYF4C....",//验证码key
  "value": "data:image/jpeg;base64,/9j/...."//base64验证码图片 -- 前端渲染显示
}

```



### 验证

~~~
if (!yzh52521\captcha\facade\Captcha::check($data['verify'], $data['key'])) {
   throw new \Exception('验证码错误');
}
~~~
