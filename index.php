ErrorDocument 404 https://domikado.com/
ErrorDocument 500 https://domikado.com/
# or map them to one error document:
# ErrorDocument 404 /pages/errors/error_redirect.php
# ErrorDocument 500 /pages/errors/error_redirect.php

RewriteEngine On
RewriteBase /

RewriteCond %{REQUEST_URI} ^/404/$
RewriteRule ^(.*)$ https://domikado.com/ [L]

RewriteCond %{REQUEST_URI} ^/500/$
RewriteRule ^(.*)$ https://domikado.com/ [L]

# or map them to one error document:
#RewriteCond %{REQUEST_URI} ^/404/$ [OR]
#RewriteCond %{REQUEST_URI} ^/500/$
#RewriteRule ^(.*)$ /pages/errors/error_redirect.php [L]
