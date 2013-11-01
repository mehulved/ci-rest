This code reproduces the issue that is faced when using php-fpm, while
it works correctly with mod_php. Also, this issue only occurs when we
use memcached before sending out the response.
This issue occurs while using the restserver library.

I have hosted this app with nginx+php-fpm on 
https://dev.deltamktgresearch.com/web/

Try the following routes
* https://dev.deltamktgresearch.com/web/welcome/cache: It doesn't use
  restserver but uses memcached.

* https://dev.deltamktgresearch.com/web/welcome/nocache: It doesn't use
  restserver or memcached.

* https://dev.deltamktgresearch.com/web/example/nocache: It uses
  restserver but doesn't use memcached.

* https://dev.deltamktgresearch.com/web/example/cache: It uses both
  restserver and memcached.


In the last case, the response gets cut off in the closing tags. This
issue only happens when using php-fpm. It can't be reproduced while
using mod_php.
