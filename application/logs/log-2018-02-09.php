<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-02-09 13:14:00 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-09 13:14:00 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-09 15:12:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  SELECT DISTINCT ON expressions must match initial ORDER BY expressions
LINE 2:   SELECT DISTINCT ON (a.*) a.*
                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(primaryvendornos))) from (
  SELECT DISTINCT ON (a.*) a.*
from qw.item_product_view a
where in_primaryvendorno = 'all' or a.primaryvendorno ilike in_primaryvendorno || '%'
order by a.primaryvendorno
) primaryvendornos
CONTEXT:  PL/pgSQL function qw.get_all_vendors(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-02-09 15:12:56 --> Query error: ERROR:  SELECT DISTINCT ON expressions must match initial ORDER BY expressions
LINE 2:   SELECT DISTINCT ON (a.*) a.*
                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(primaryvendornos))) from (
  SELECT DISTINCT ON (a.*) a.*
from qw.item_product_view a
where in_primaryvendorno = 'all' or a.primaryvendorno ilike in_primaryvendorno || '%'
order by a.primaryvendorno
) primaryvendornos
CONTEXT:  PL/pgSQL function qw.get_all_vendors(text) line 3 at RETURN - Invalid query: select * from qw.get_all_vendors('i')
ERROR - 2018-02-09 15:12:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  SELECT DISTINCT ON expressions must match initial ORDER BY expressions
LINE 2:   SELECT DISTINCT ON (a.*) a.*
                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(primaryvendornos))) from (
  SELECT DISTINCT ON (a.*) a.*
from qw.item_product_view a
where in_primaryvendorno = 'all' or a.primaryvendorno ilike in_primaryvendorno || '%'
order by a.primaryvendorno
) primaryvendornos
CONTEXT:  PL/pgSQL function qw.get_all_vendors(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-02-09 15:12:58 --> Query error: ERROR:  SELECT DISTINCT ON expressions must match initial ORDER BY expressions
LINE 2:   SELECT DISTINCT ON (a.*) a.*
                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(primaryvendornos))) from (
  SELECT DISTINCT ON (a.*) a.*
from qw.item_product_view a
where in_primaryvendorno = 'all' or a.primaryvendorno ilike in_primaryvendorno || '%'
order by a.primaryvendorno
) primaryvendornos
CONTEXT:  PL/pgSQL function qw.get_all_vendors(text) line 3 at RETURN - Invalid query: select * from qw.get_all_vendors('in')
ERROR - 2018-02-09 15:13:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  SELECT DISTINCT ON expressions must match initial ORDER BY expressions
LINE 2:   SELECT DISTINCT ON (a.*) a.*
                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(primaryvendornos))) from (
  SELECT DISTINCT ON (a.*) a.*
from qw.item_product_view a
where in_primaryvendorno = 'all' or a.primaryvendorno ilike in_primaryvendorno || '%'
order by a.primaryvendorno
) primaryvendornos
CONTEXT:  PL/pgSQL function qw.get_all_vendors(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-02-09 15:13:03 --> Query error: ERROR:  SELECT DISTINCT ON expressions must match initial ORDER BY expressions
LINE 2:   SELECT DISTINCT ON (a.*) a.*
                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(primaryvendornos))) from (
  SELECT DISTINCT ON (a.*) a.*
from qw.item_product_view a
where in_primaryvendorno = 'all' or a.primaryvendorno ilike in_primaryvendorno || '%'
order by a.primaryvendorno
) primaryvendornos
CONTEXT:  PL/pgSQL function qw.get_all_vendors(text) line 3 at RETURN - Invalid query: select * from qw.get_all_vendors('a')
ERROR - 2018-02-09 15:13:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  SELECT DISTINCT ON expressions must match initial ORDER BY expressions
LINE 2:   SELECT DISTINCT ON (a.*) a.*
                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(primaryvendornos))) from (
  SELECT DISTINCT ON (a.*) a.*
from qw.item_product_view a
where in_primaryvendorno = 'all' or a.primaryvendorno ilike in_primaryvendorno || '%'
order by a.primaryvendorno
) primaryvendornos
CONTEXT:  PL/pgSQL function qw.get_all_vendors(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-02-09 15:13:04 --> Query error: ERROR:  SELECT DISTINCT ON expressions must match initial ORDER BY expressions
LINE 2:   SELECT DISTINCT ON (a.*) a.*
                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(primaryvendornos))) from (
  SELECT DISTINCT ON (a.*) a.*
from qw.item_product_view a
where in_primaryvendorno = 'all' or a.primaryvendorno ilike in_primaryvendorno || '%'
order by a.primaryvendorno
) primaryvendornos
CONTEXT:  PL/pgSQL function qw.get_all_vendors(text) line 3 at RETURN - Invalid query: select * from qw.get_all_vendors('as')
