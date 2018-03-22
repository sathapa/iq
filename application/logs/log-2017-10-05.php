<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-10-05 05:15:19 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 05:15:19 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 06:39:47 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 06:39:47 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 07:24:42 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 07:24:42 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 07:24:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 07:24:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 07:25:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;in_product&quot; does not exist
LINE 6:   and (in_search = 'all' or a.product ilike in_product || '%...
                                                    ^
HINT:  Perhaps you meant to reference the column &quot;a.product&quot; or the column &quot;b.product&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(terms))) from (
  select distinct a.product, a.category, b.extendeddescriptiontext as category_description, a.term_allowance
  from qw.dwstatic_netform_allowances a, qw.dwstatic_productoptions b
  where b.product like 'NF1%'
  and b.itemcode = a.category
  and (in_search = 'all' or a.product ilike in_product || '%' or a.category ilike in_category || '%')
  order by a.product, a.category
)
terms
CONTEXT:  PL/pgSQL function qw.get_netform_allowance(text) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-05 07:25:03 --> Query error: ERROR:  column "in_product" does not exist
LINE 6:   and (in_search = 'all' or a.product ilike in_product || '%...
                                                    ^
HINT:  Perhaps you meant to reference the column "a.product" or the column "b.product".
QUERY:  SELECT array_to_json(array_agg(row_to_json(terms))) from (
  select distinct a.product, a.category, b.extendeddescriptiontext as category_description, a.term_allowance
  from qw.dwstatic_netform_allowances a, qw.dwstatic_productoptions b
  where b.product like 'NF1%'
  and b.itemcode = a.category
  and (in_search = 'all' or a.product ilike in_product || '%' or a.category ilike in_category || '%')
  order by a.product, a.category
)
terms
CONTEXT:  PL/pgSQL function qw.get_netform_allowance(text) line 6 at RETURN - Invalid query: select * from qw.get_netform_allowance('all')
ERROR - 2017-10-05 07:27:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;in_product&quot; does not exist
LINE 6:   and (in_search = 'all' or a.product ilike in_product || '%...
                                                    ^
HINT:  Perhaps you meant to reference the column &quot;a.product&quot; or the column &quot;b.product&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(terms))) from (
  select distinct a.product, a.category, b.extendeddescriptiontext as category_description, a.term_allowance
  from qw.dwstatic_netform_allowances a, qw.dwstatic_productoptions b
  where b.product like 'NF1%'
  and b.itemcode = a.category
  and (in_search = 'all' or a.product ilike in_product || '%' or a.category ilike in_category || '%')
  order by a.product, a.category
)
terms
CONTEXT:  PL/pgSQL function qw.get_netform_allowance(text) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-05 07:27:06 --> Query error: ERROR:  column "in_product" does not exist
LINE 6:   and (in_search = 'all' or a.product ilike in_product || '%...
                                                    ^
HINT:  Perhaps you meant to reference the column "a.product" or the column "b.product".
QUERY:  SELECT array_to_json(array_agg(row_to_json(terms))) from (
  select distinct a.product, a.category, b.extendeddescriptiontext as category_description, a.term_allowance
  from qw.dwstatic_netform_allowances a, qw.dwstatic_productoptions b
  where b.product like 'NF1%'
  and b.itemcode = a.category
  and (in_search = 'all' or a.product ilike in_product || '%' or a.category ilike in_category || '%')
  order by a.product, a.category
)
terms
CONTEXT:  PL/pgSQL function qw.get_netform_allowance(text) line 6 at RETURN - Invalid query: select * from qw.get_netform_allowance('all')
ERROR - 2017-10-05 07:28:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;in_product&quot; does not exist
LINE 6:   and (in_search = 'all' or a.product ilike in_product || '%...
                                                    ^
HINT:  Perhaps you meant to reference the column &quot;a.product&quot; or the column &quot;b.product&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(terms))) from (
  select distinct a.product, a.category, b.extendeddescriptiontext as category_description, a.term_allowance
  from qw.dwstatic_netform_allowances a, qw.dwstatic_productoptions b
  where b.product like 'NF1%'
  and b.itemcode = a.category
  and (in_search = 'all' or a.product ilike in_product || '%' or a.category ilike in_category || '%')
  order by a.product, a.category
)
terms
CONTEXT:  PL/pgSQL function qw.get_netform_allowance(text) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-05 07:28:08 --> Query error: ERROR:  column "in_product" does not exist
LINE 6:   and (in_search = 'all' or a.product ilike in_product || '%...
                                                    ^
HINT:  Perhaps you meant to reference the column "a.product" or the column "b.product".
QUERY:  SELECT array_to_json(array_agg(row_to_json(terms))) from (
  select distinct a.product, a.category, b.extendeddescriptiontext as category_description, a.term_allowance
  from qw.dwstatic_netform_allowances a, qw.dwstatic_productoptions b
  where b.product like 'NF1%'
  and b.itemcode = a.category
  and (in_search = 'all' or a.product ilike in_product || '%' or a.category ilike in_category || '%')
  order by a.product, a.category
)
terms
CONTEXT:  PL/pgSQL function qw.get_netform_allowance(text) line 6 at RETURN - Invalid query: select * from qw.get_netform_allowance('')
ERROR - 2017-10-05 07:28:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;in_product&quot; does not exist
LINE 6:   and (in_search = 'all' or a.product ilike in_product || '%...
                                                    ^
HINT:  Perhaps you meant to reference the column &quot;a.product&quot; or the column &quot;b.product&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(terms))) from (
  select distinct a.product, a.category, b.extendeddescriptiontext as category_description, a.term_allowance
  from qw.dwstatic_netform_allowances a, qw.dwstatic_productoptions b
  where b.product like 'NF1%'
  and b.itemcode = a.category
  and (in_search = 'all' or a.product ilike in_product || '%' or a.category ilike in_category || '%')
  order by a.product, a.category
)
terms
CONTEXT:  PL/pgSQL function qw.get_netform_allowance(text) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-05 07:28:29 --> Query error: ERROR:  column "in_product" does not exist
LINE 6:   and (in_search = 'all' or a.product ilike in_product || '%...
                                                    ^
HINT:  Perhaps you meant to reference the column "a.product" or the column "b.product".
QUERY:  SELECT array_to_json(array_agg(row_to_json(terms))) from (
  select distinct a.product, a.category, b.extendeddescriptiontext as category_description, a.term_allowance
  from qw.dwstatic_netform_allowances a, qw.dwstatic_productoptions b
  where b.product like 'NF1%'
  and b.itemcode = a.category
  and (in_search = 'all' or a.product ilike in_product || '%' or a.category ilike in_category || '%')
  order by a.product, a.category
)
terms
CONTEXT:  PL/pgSQL function qw.get_netform_allowance(text) line 6 at RETURN - Invalid query: select * from qw.get_netform_allowance('all')
ERROR - 2017-10-05 10:57:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_netform_allowance(unknown) does not exist
LINE 1: select * from qw.get_netform_allowance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-05 10:57:29 --> Query error: ERROR:  function qw.get_netform_allowance(unknown) does not exist
LINE 1: select * from qw.get_netform_allowance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_netform_allowance('all')
ERROR - 2017-10-05 10:57:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_netform_allowance(unknown) does not exist
LINE 1: select * from qw.get_netform_allowance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-05 10:57:44 --> Query error: ERROR:  function qw.get_netform_allowance(unknown) does not exist
LINE 1: select * from qw.get_netform_allowance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_netform_allowance('all')
ERROR - 2017-10-05 10:59:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_netform_allowance(unknown) does not exist
LINE 1: select * from qw.get_netform_allowance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-05 10:59:23 --> Query error: ERROR:  function qw.get_netform_allowance(unknown) does not exist
LINE 1: select * from qw.get_netform_allowance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_netform_allowance('all')
ERROR - 2017-10-05 11:03:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_netform_allowance(unknown) does not exist
LINE 1: select * from qw.get_netform_allowance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-05 11:03:19 --> Query error: ERROR:  function qw.get_netform_allowance(unknown) does not exist
LINE 1: select * from qw.get_netform_allowance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_netform_allowance('all')
ERROR - 2017-10-05 11:05:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_netform_allowance(unknown) does not exist
LINE 1: select * from qw.get_netform_allowance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-05 11:05:23 --> Query error: ERROR:  function qw.get_netform_allowance(unknown) does not exist
LINE 1: select * from qw.get_netform_allowance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_netform_allowance('all')
ERROR - 2017-10-05 12:08:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 12:08:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 12:10:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 12:10:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 12:43:47 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 12:43:47 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 14:03:33 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 14:03:33 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 15:14:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-05 15:14:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-05 14:19:18 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 14:19:18 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 15:30:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-05 15:30:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-05 14:32:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 14:32:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 14:36:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 14:36:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 15:43:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-05 15:43:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-05 14:48:13 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-05 14:49:42 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-05 14:55:10 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-05 16:46:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-05 16:46:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-05 15:59:49 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-05 16:07:15 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 16:07:15 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 16:07:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 16:07:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 16:41:02 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 16:41:02 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 16:42:20 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-05 16:47:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 16:47:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 16:48:01 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-05 16:49:03 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-05 18:10:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 18:10:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 18:17:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 18:17:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 18:19:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 18:19:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 18:20:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 18:20:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 19:28:15 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 19:28:15 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 19:40:51 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 19:40:51 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-05 20:23:40 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-05 20:24:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-05 20:24:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
