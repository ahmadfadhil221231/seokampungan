ErrorDocument 404 https://www.brilliantdadashova.com/
ErrorDocument 500 https://www.brilliantdadashova.com/
# or map them to one error document:
# ErrorDocument 404 /pages/errors/error_redirect.php
# ErrorDocument 500 /pages/errors/error_redirect.php

RewriteEngine On
RewriteBase /

RewriteCond %{REQUEST_URI} ^/404/$
RewriteRule ^(.*)$ https://www.brilliantdadashova.com/ [L]

RewriteCond %{REQUEST_URI} ^/500/$
RewriteRule ^(.*)$ https://www.brilliantdadashova.com/ [L]

# or map them to one error document:
#RewriteCond %{REQUEST_URI} ^/404/$ [OR]
#RewriteCond %{REQUEST_URI} ^/500/$
#RewriteRule ^(.*)$ /pages/errors/error_redirect.php [L]
