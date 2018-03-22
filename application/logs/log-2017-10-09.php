<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-10-09 02:10:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;detail_line&quot; violates not-null constraint
DETAIL:  Failing row contains (NF16mm, net, rf, null, null, 12.00000, null, null, null, CUTD, null).
CONTEXT:  SQL statement &quot;INSERT INTO qw.dwstatic_productoptions (product, optiontype, itemcode, default_qty, wt_activitycode)
  VALUES (in_product, in_optiontype, in_itemcode, in_defaultqty, in_activitycode)
  ON CONFLICT (product, optiontype, itemcode, wt_activitycode)
    DO UPDATE
      SET default_qty     = in_defaultqty
      WHERE dwstatic_productoptions.product = in_product
      and dwstatic_productoptions.optiontype = in_optiontype
      and dwstatic_productoptions.itemcode = in_itemcode
      AND dwstatic_productoptions.wt_activitycode = in_activitycode&quot;
PL/pgSQL function qw.update_product_otpions(character varying,character varying,character varying,character varying,double precision,character varying) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-09 02:10:53 --> Query error: ERROR:  null value in column "detail_line" violates not-null constraint
DETAIL:  Failing row contains (NF16mm, net, rf, null, null, 12.00000, null, null, null, CUTD, null).
CONTEXT:  SQL statement "INSERT INTO qw.dwstatic_productoptions (product, optiontype, itemcode, default_qty, wt_activitycode)
  VALUES (in_product, in_optiontype, in_itemcode, in_defaultqty, in_activitycode)
  ON CONFLICT (product, optiontype, itemcode, wt_activitycode)
    DO UPDATE
      SET default_qty     = in_defaultqty
      WHERE dwstatic_productoptions.product = in_product
      and dwstatic_productoptions.optiontype = in_optiontype
      and dwstatic_productoptions.itemcode = in_itemcode
      AND dwstatic_productoptions.wt_activitycode = in_activitycode"
PL/pgSQL function qw.update_product_otpions(character varying,character varying,character varying,character varying,double precision,character varying) line 3 at SQL statement - Invalid query: select * from qw.update_product_otpions('NF16mm', 'rf','net','CUTD',12, 'sudiptab')
ERROR - 2017-10-09 02:15:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;product1&quot; does not exist
LINE 10:   WHERE (in_product_type = 'all' OR product1 = in_product_ty...
                                             ^
HINT:  Perhaps you meant to reference the column &quot;pr.product&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(product_opt))) FROM (
  SELECT DISTINCT pr.product,
  btrim((pr.optiontype):: TEXT ) AS optiontype,
  pr.itemcode,
  pr.wt_activitycode,
  pr.extendeddescriptiontext AS itemdesc,
  (((translate(pr.extendeddescriptiontext, '#&amp;':: TEXT, '':: TEXT ) || ' [':: TEXT ) || (pr.itemcode):: TEXT ) || ']':: TEXT ) AS productlist,
  pr.default_qty
  FROM qw.dwstatic_productoptions pr
  WHERE (in_product_type = 'all' OR product1 = in_product_type)
  AND (in_option_type = 'all' OR optiontype = in_option_type)
  AND (in_item_code = 'all' OR itemcode ilike in_item_code || '%')
  AND ((pr.extendeddescriptiontext !~~ '%iscontinued%':: TEXT ) AND (pr.extendeddescriptiontext !~~ '%Custom%':: TEXT ) AND ( NOT ((pr.itemcode):: TEXT IN ( SELECT ci_item.itemcode
  FROM sage.ci_item
  WHERE ((ci_item.inactiveitem):: TEXT = 'N':: TEXT ) AND ((ci_item.producttype):: TEXT = 'D':: TEXT )))))
  ORDER BY product, optiontype, itemcode
  )
  product_opt
CONTEXT:  PL/pgSQL function qw.search_product_options(text,text,text,text) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-09 02:15:20 --> Query error: ERROR:  column "product1" does not exist
LINE 10:   WHERE (in_product_type = 'all' OR product1 = in_product_ty...
                                             ^
HINT:  Perhaps you meant to reference the column "pr.product".
QUERY:  SELECT array_to_json(array_agg(row_to_json(product_opt))) FROM (
  SELECT DISTINCT pr.product,
  btrim((pr.optiontype):: TEXT ) AS optiontype,
  pr.itemcode,
  pr.wt_activitycode,
  pr.extendeddescriptiontext AS itemdesc,
  (((translate(pr.extendeddescriptiontext, '#&':: TEXT, '':: TEXT ) || ' [':: TEXT ) || (pr.itemcode):: TEXT ) || ']':: TEXT ) AS productlist,
  pr.default_qty
  FROM qw.dwstatic_productoptions pr
  WHERE (in_product_type = 'all' OR product1 = in_product_type)
  AND (in_option_type = 'all' OR optiontype = in_option_type)
  AND (in_item_code = 'all' OR itemcode ilike in_item_code || '%')
  AND ((pr.extendeddescriptiontext !~~ '%iscontinued%':: TEXT ) AND (pr.extendeddescriptiontext !~~ '%Custom%':: TEXT ) AND ( NOT ((pr.itemcode):: TEXT IN ( SELECT ci_item.itemcode
  FROM sage.ci_item
  WHERE ((ci_item.inactiveitem):: TEXT = 'N':: TEXT ) AND ((ci_item.producttype):: TEXT = 'D':: TEXT )))))
  ORDER BY product, optiontype, itemcode
  )
  product_opt
CONTEXT:  PL/pgSQL function qw.search_product_options(text,text,text,text) line 6 at RETURN - Invalid query: select * from qw.search_product_options('all','all','sudiptab','all')
ERROR - 2017-10-09 02:15:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;product1&quot; does not exist
LINE 10:   WHERE (in_product_type = 'all' OR product1 = in_product_ty...
                                             ^
HINT:  Perhaps you meant to reference the column &quot;pr.product&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(product_opt))) FROM (
  SELECT DISTINCT pr.product,
  btrim((pr.optiontype):: TEXT ) AS optiontype,
  pr.itemcode,
  pr.wt_activitycode,
  pr.extendeddescriptiontext AS itemdesc,
  (((translate(pr.extendeddescriptiontext, '#&amp;':: TEXT, '':: TEXT ) || ' [':: TEXT ) || (pr.itemcode):: TEXT ) || ']':: TEXT ) AS productlist,
  pr.default_qty
  FROM qw.dwstatic_productoptions pr
  WHERE (in_product_type = 'all' OR product1 = in_product_type)
  AND (in_option_type = 'all' OR optiontype = in_option_type)
  AND (in_item_code = 'all' OR itemcode ilike in_item_code || '%')
  AND ((pr.extendeddescriptiontext !~~ '%iscontinued%':: TEXT ) AND (pr.extendeddescriptiontext !~~ '%Custom%':: TEXT ) AND ( NOT ((pr.itemcode):: TEXT IN ( SELECT ci_item.itemcode
  FROM sage.ci_item
  WHERE ((ci_item.inactiveitem):: TEXT = 'N':: TEXT ) AND ((ci_item.producttype):: TEXT = 'D':: TEXT )))))
  ORDER BY product, optiontype, itemcode
  )
  product_opt
CONTEXT:  PL/pgSQL function qw.search_product_options(text,text,text,text) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-09 02:15:48 --> Query error: ERROR:  column "product1" does not exist
LINE 10:   WHERE (in_product_type = 'all' OR product1 = in_product_ty...
                                             ^
HINT:  Perhaps you meant to reference the column "pr.product".
QUERY:  SELECT array_to_json(array_agg(row_to_json(product_opt))) FROM (
  SELECT DISTINCT pr.product,
  btrim((pr.optiontype):: TEXT ) AS optiontype,
  pr.itemcode,
  pr.wt_activitycode,
  pr.extendeddescriptiontext AS itemdesc,
  (((translate(pr.extendeddescriptiontext, '#&':: TEXT, '':: TEXT ) || ' [':: TEXT ) || (pr.itemcode):: TEXT ) || ']':: TEXT ) AS productlist,
  pr.default_qty
  FROM qw.dwstatic_productoptions pr
  WHERE (in_product_type = 'all' OR product1 = in_product_type)
  AND (in_option_type = 'all' OR optiontype = in_option_type)
  AND (in_item_code = 'all' OR itemcode ilike in_item_code || '%')
  AND ((pr.extendeddescriptiontext !~~ '%iscontinued%':: TEXT ) AND (pr.extendeddescriptiontext !~~ '%Custom%':: TEXT ) AND ( NOT ((pr.itemcode):: TEXT IN ( SELECT ci_item.itemcode
  FROM sage.ci_item
  WHERE ((ci_item.inactiveitem):: TEXT = 'N':: TEXT ) AND ((ci_item.producttype):: TEXT = 'D':: TEXT )))))
  ORDER BY product, optiontype, itemcode
  )
  product_opt
CONTEXT:  PL/pgSQL function qw.search_product_options(text,text,text,text) line 6 at RETURN - Invalid query: select * from qw.search_product_options('all','all','sudiptab','all')
ERROR - 2017-10-09 02:16:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;product1&quot; does not exist
LINE 10:   WHERE (in_product_type = 'all' OR product1 = in_product_ty...
                                             ^
HINT:  Perhaps you meant to reference the column &quot;pr.product&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(product_opt))) FROM (
  SELECT DISTINCT pr.product,
  btrim((pr.optiontype):: TEXT ) AS optiontype,
  pr.itemcode,
  pr.wt_activitycode,
  pr.extendeddescriptiontext AS itemdesc,
  (((translate(pr.extendeddescriptiontext, '#&amp;':: TEXT, '':: TEXT ) || ' [':: TEXT ) || (pr.itemcode):: TEXT ) || ']':: TEXT ) AS productlist,
  pr.default_qty
  FROM qw.dwstatic_productoptions pr
  WHERE (in_product_type = 'all' OR product1 = in_product_type)
  AND (in_option_type = 'all' OR optiontype = in_option_type)
  AND (in_item_code = 'all' OR itemcode ilike in_item_code || '%')
  AND ((pr.extendeddescriptiontext !~~ '%iscontinued%':: TEXT ) AND (pr.extendeddescriptiontext !~~ '%Custom%':: TEXT ) AND ( NOT ((pr.itemcode):: TEXT IN ( SELECT ci_item.itemcode
  FROM sage.ci_item
  WHERE ((ci_item.inactiveitem):: TEXT = 'N':: TEXT ) AND ((ci_item.producttype):: TEXT = 'D':: TEXT )))))
  ORDER BY product, optiontype, itemcode
  )
  product_opt
CONTEXT:  PL/pgSQL function qw.search_product_options(text,text,text,text) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-09 02:16:30 --> Query error: ERROR:  column "product1" does not exist
LINE 10:   WHERE (in_product_type = 'all' OR product1 = in_product_ty...
                                             ^
HINT:  Perhaps you meant to reference the column "pr.product".
QUERY:  SELECT array_to_json(array_agg(row_to_json(product_opt))) FROM (
  SELECT DISTINCT pr.product,
  btrim((pr.optiontype):: TEXT ) AS optiontype,
  pr.itemcode,
  pr.wt_activitycode,
  pr.extendeddescriptiontext AS itemdesc,
  (((translate(pr.extendeddescriptiontext, '#&':: TEXT, '':: TEXT ) || ' [':: TEXT ) || (pr.itemcode):: TEXT ) || ']':: TEXT ) AS productlist,
  pr.default_qty
  FROM qw.dwstatic_productoptions pr
  WHERE (in_product_type = 'all' OR product1 = in_product_type)
  AND (in_option_type = 'all' OR optiontype = in_option_type)
  AND (in_item_code = 'all' OR itemcode ilike in_item_code || '%')
  AND ((pr.extendeddescriptiontext !~~ '%iscontinued%':: TEXT ) AND (pr.extendeddescriptiontext !~~ '%Custom%':: TEXT ) AND ( NOT ((pr.itemcode):: TEXT IN ( SELECT ci_item.itemcode
  FROM sage.ci_item
  WHERE ((ci_item.inactiveitem):: TEXT = 'N':: TEXT ) AND ((ci_item.producttype):: TEXT = 'D':: TEXT )))))
  ORDER BY product, optiontype, itemcode
  )
  product_opt
CONTEXT:  PL/pgSQL function qw.search_product_options(text,text,text,text) line 6 at RETURN - Invalid query: select * from qw.search_product_options('all','net','sudiptab','209-045-06')
ERROR - 2017-10-09 02:18:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;product1&quot; does not exist
LINE 10:   WHERE (in_product_type = 'all' OR product1 = in_product_ty...
                                             ^
HINT:  Perhaps you meant to reference the column &quot;pr.product&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(product_opt))) FROM (
  SELECT DISTINCT pr.product,
  btrim((pr.optiontype):: TEXT ) AS optiontype,
  pr.itemcode,
  pr.wt_activitycode,
  pr.extendeddescriptiontext AS itemdesc,
  (((translate(pr.extendeddescriptiontext, '#&amp;':: TEXT, '':: TEXT ) || ' [':: TEXT ) || (pr.itemcode):: TEXT ) || ']':: TEXT ) AS productlist,
  pr.default_qty
  FROM qw.dwstatic_productoptions pr
  WHERE (in_product_type = 'all' OR product1 = in_product_type)
  AND (in_option_type = 'all' OR optiontype = in_option_type)
  AND (in_item_code = 'all' OR itemcode ilike in_item_code || '%')
  AND ((pr.extendeddescriptiontext !~~ '%iscontinued%':: TEXT ) AND (pr.extendeddescriptiontext !~~ '%Custom%':: TEXT ) AND ( NOT ((pr.itemcode):: TEXT IN ( SELECT ci_item.itemcode
  FROM sage.ci_item
  WHERE ((ci_item.inactiveitem):: TEXT = 'N':: TEXT ) AND ((ci_item.producttype):: TEXT = 'D':: TEXT )))))
  ORDER BY product, optiontype, itemcode
  )
  product_opt
CONTEXT:  PL/pgSQL function qw.search_product_options(text,text,text,text) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-09 02:18:37 --> Query error: ERROR:  column "product1" does not exist
LINE 10:   WHERE (in_product_type = 'all' OR product1 = in_product_ty...
                                             ^
HINT:  Perhaps you meant to reference the column "pr.product".
QUERY:  SELECT array_to_json(array_agg(row_to_json(product_opt))) FROM (
  SELECT DISTINCT pr.product,
  btrim((pr.optiontype):: TEXT ) AS optiontype,
  pr.itemcode,
  pr.wt_activitycode,
  pr.extendeddescriptiontext AS itemdesc,
  (((translate(pr.extendeddescriptiontext, '#&':: TEXT, '':: TEXT ) || ' [':: TEXT ) || (pr.itemcode):: TEXT ) || ']':: TEXT ) AS productlist,
  pr.default_qty
  FROM qw.dwstatic_productoptions pr
  WHERE (in_product_type = 'all' OR product1 = in_product_type)
  AND (in_option_type = 'all' OR optiontype = in_option_type)
  AND (in_item_code = 'all' OR itemcode ilike in_item_code || '%')
  AND ((pr.extendeddescriptiontext !~~ '%iscontinued%':: TEXT ) AND (pr.extendeddescriptiontext !~~ '%Custom%':: TEXT ) AND ( NOT ((pr.itemcode):: TEXT IN ( SELECT ci_item.itemcode
  FROM sage.ci_item
  WHERE ((ci_item.inactiveitem):: TEXT = 'N':: TEXT ) AND ((ci_item.producttype):: TEXT = 'D':: TEXT )))))
  ORDER BY product, optiontype, itemcode
  )
  product_opt
CONTEXT:  PL/pgSQL function qw.search_product_options(text,text,text,text) line 6 at RETURN - Invalid query: select * from qw.search_product_options('all','net','sudiptab','209-045-06')
ERROR - 2017-10-09 02:50:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...* from qw.create_update_netform_allowance('NF18mm','Cat-0',)
                                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-09 02:50:59 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...* from qw.create_update_netform_allowance('NF18mm','Cat-0',)
                                                                      ^ - Invalid query: select * from qw.create_update_netform_allowance('NF18mm','Cat-0',)
ERROR - 2017-10-09 02:51:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...* from qw.create_update_netform_allowance('NF18mm','Cat-0',)
                                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-09 02:51:26 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...* from qw.create_update_netform_allowance('NF18mm','Cat-0',)
                                                                      ^ - Invalid query: select * from qw.create_update_netform_allowance('NF18mm','Cat-0',)
ERROR - 2017-10-09 02:52:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...* from qw.create_update_netform_allowance('NF18mm','Cat-0',)
                                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-09 02:52:12 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...* from qw.create_update_netform_allowance('NF18mm','Cat-0',)
                                                                      ^ - Invalid query: select * from qw.create_update_netform_allowance('NF18mm','Cat-0',)
ERROR - 2017-10-09 02:56:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...* from qw.create_update_netform_allowance('NF18mm','Cat-0',)
                                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-09 02:56:05 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...* from qw.create_update_netform_allowance('NF18mm','Cat-0',)
                                                                      ^ - Invalid query: select * from qw.create_update_netform_allowance('NF18mm','Cat-0',)
ERROR - 2017-10-09 02:57:20 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-09 03:55:25 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-09 04:45:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 04:45:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 05:39:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 05:39:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 06:02:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 1: ...* from qw.create_update_netform_allowance('NF16mm','Cat-0',)
                                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-09 06:02:52 --> Query error: ERROR:  syntax error at or near ")"
LINE 1: ...* from qw.create_update_netform_allowance('NF16mm','Cat-0',)
                                                                      ^ - Invalid query: select * from qw.create_update_netform_allowance('NF16mm','Cat-0',)
ERROR - 2017-10-09 06:22:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 06:22:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 12:15:25 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 12:15:25 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 12:16:22 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 12:16:22 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 12:18:35 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 12:18:35 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 12:35:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 12:35:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 12:41:28 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 12:41:28 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 12:48:29 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-09 13:02:03 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-09 13:02:04 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-09 14:49:02 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-09 15:22:59 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-09 15:43:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 15:43:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 18:03:28 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-09 18:35:19 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-09 18:53:11 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-09 21:11:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-09 21:11:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-09 20:15:27 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 20:15:27 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 20:31:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-09 20:31:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-09 21:35:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-09 21:35:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-09 21:35:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-09 21:35:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
