<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-02 05:10:05 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-11-02 05:10:05 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-11-02 13:27:35 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 14:42:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-11-02 14:42:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-11-02 14:58:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-11-02 14:58:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-11-02 15:07:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-02 15:07:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-02 15:08:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-11-02 15:08:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-11-02 15:17:37 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 15:18:25 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-11-02 15:18:25 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-11-02 15:18:56 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 16:32:24 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 16:41:33 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-11-02 16:41:33 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-11-02 19:01:29 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 19:53:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quantotyused&quot; does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column &quot;b.quantityused&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 19:53:36 --> Query error: ERROR:  column "quantotyused" does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column "b.quantityused".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083969')
ERROR - 2017-11-02 19:53:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quantotyused&quot; does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column &quot;b.quantityused&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 19:53:39 --> Query error: ERROR:  column "quantotyused" does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column "b.quantityused".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083969')
ERROR - 2017-11-02 19:54:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quantotyused&quot; does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column &quot;b.quantityused&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 19:54:40 --> Query error: ERROR:  column "quantotyused" does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column "b.quantityused".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083969')
ERROR - 2017-11-02 19:54:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quantotyused&quot; does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column &quot;b.quantityused&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 19:54:42 --> Query error: ERROR:  column "quantotyused" does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column "b.quantityused".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083969')
ERROR - 2017-11-02 19:54:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quantotyused&quot; does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column &quot;b.quantityused&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 19:54:45 --> Query error: ERROR:  column "quantotyused" does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column "b.quantityused".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083969')
ERROR - 2017-11-02 19:54:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quantotyused&quot; does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column &quot;b.quantityused&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 19:54:56 --> Query error: ERROR:  column "quantotyused" does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column "b.quantityused".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083969')
ERROR - 2017-11-02 19:55:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quantotyused&quot; does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column &quot;b.quantityused&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 19:55:07 --> Query error: ERROR:  column "quantotyused" does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column "b.quantityused".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083969')
ERROR - 2017-11-02 19:55:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quantotyused&quot; does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column &quot;b.quantityused&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 19:55:08 --> Query error: ERROR:  column "quantotyused" does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column "b.quantityused".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083969')
ERROR - 2017-11-02 19:55:18 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 19:55:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quantotyused&quot; does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column &quot;b.quantityused&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 19:55:37 --> Query error: ERROR:  column "quantotyused" does not exist
LINE 5:   b.notes as comments, b.jobstatus, b.timetaken, quantotyuse...
                                                         ^
HINT:  Perhaps you meant to reference the column "b.quantityused".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantotyused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno --or a.salesorderno = '0024961'
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0086100')
ERROR - 2017-11-02 19:58:12 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 19:59:06 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 20:04:02 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 20:04:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;a&quot;
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table &quot;a&quot;, but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 20:04:13 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "a"
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table "a", but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083733')
ERROR - 2017-11-02 20:04:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;a&quot;
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table &quot;a&quot;, but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 20:04:33 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "a"
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table "a", but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083733')
ERROR - 2017-11-02 20:04:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;a&quot;
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table &quot;a&quot;, but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 20:04:34 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "a"
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table "a", but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083733')
ERROR - 2017-11-02 20:05:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;a&quot;
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table &quot;a&quot;, but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 20:05:10 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "a"
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table "a", but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0086048')
ERROR - 2017-11-02 20:05:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;a&quot;
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table &quot;a&quot;, but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 20:05:16 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "a"
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table "a", but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0086048')
ERROR - 2017-11-02 20:06:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid reference to FROM-clause entry for table &quot;a&quot;
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table &quot;a&quot;, but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-02 20:06:08 --> Query error: ERROR:  invalid reference to FROM-clause entry for table "a"
LINE 7:     left join qw.qw_sales_order_details b on (a.salesorderno...
                                                      ^
HINT:  There is an entry for table "a", but it cannot be referenced from this part of the query.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode, a.udf_activity_code, a.udf_activity_description,
  b.notes as comments, b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.jt_workticket wt
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
  and a.salesorderno = wt.salesorderno and a.linekey::INTEGER = wt.wtnumber::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0083733')
ERROR - 2017-11-02 20:07:39 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 20:15:23 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 20:18:34 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 20:23:41 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-02 20:32:06 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
