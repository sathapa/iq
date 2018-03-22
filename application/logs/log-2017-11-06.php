<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-06 04:36:48 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 04:52:22 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 06:47:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-06 06:47:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-06 06:49:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-06 06:49:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-06 07:52:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-06 07:52:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-06 09:11:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-06 09:11:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-06 09:40:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 745
ERROR - 2017-11-06 09:40:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 756
ERROR - 2017-11-06 13:21:53 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 14:40:06 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 14:41:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:41:50 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4000,'Test 11/62017 9:41','On Hold','alexm')
ERROR - 2017-11-06 14:41:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:41:59 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4000,'Test 11/62017 9:41','On Hold','alexm')
ERROR - 2017-11-06 14:42:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:42:12 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4000,'Test 11/62017 9:41','On Hold','alexm')
ERROR - 2017-11-06 14:42:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:42:13 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4000,'Test 11/62017 9:41','On Hold','alexm')
ERROR - 2017-11-06 14:42:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:42:14 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4000,'Test 11/62017 9:41','On Hold','alexm')
ERROR - 2017-11-06 14:42:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:42:14 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4000,'Test 11/62017 9:41','On Hold','alexm')
ERROR - 2017-11-06 14:42:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:42:14 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4000,'Test 11/62017 9:41','On Hold','alexm')
ERROR - 2017-11-06 14:42:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:42:15 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4000,'Test 11/62017 9:41','On Hold','alexm')
ERROR - 2017-11-06 14:42:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:42:15 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4000,'Test 11/62017 9:41','On Hold','alexm')
ERROR - 2017-11-06 14:43:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:00 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:01 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:02 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:02 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:02 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:02 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:03 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:03 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:03 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:03 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:03 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:03 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:04 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:04 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:43:12 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',25,4968,'Test 11/62017 9:42','On Hold','alexm')
ERROR - 2017-11-06 14:43:54 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 14:49:13 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 14:49:45 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 14:49:48 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 14:50:09 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 14:50:34 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 14:52:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:14 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:23 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:24 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:25 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:26 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:26 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:26 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:26 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:27 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:27 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:27 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 14:52:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep&quot;
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 14:52:30 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 5, scale 2 must round to an absolute value less than 10^3.
CONTEXT:  SQL statement "INSERT INTO qw.qw_sales_order_details(salesorderno, linekey, jt158_wtstep, timetaken, quantityused, notes, jobstatus, last_update_by)
  VALUES (in_salesorderno, in_linekey, in_jt158_wtstep, in_timetaken, in_quantityused, in_notes, in_jobstatus, in_last_updated_by)
  ON CONFLICT (salesorderno, linekey, jt158_wtstep) DO UPDATE
  SET
      timetaken = in_timetaken,
      quantityused = in_quantityused,
      notes = in_notes,
      jobstatus = in_jobstatus,
      last_update_by = in_last_updated_by,
      last_update_on = now()
  WHERE
      qw.qw_sales_order_details.salesorderno = in_salesorderno
  AND qw.qw_sales_order_details.linekey = in_linekey
  AND qw.qw_sales_order_details.jt158_wtstep = in_jt158_wtstep"
PL/pgSQL function qw.save_salesorder_details(text,text,text,double precision,double precision,text,text,text) line 3 at SQL statement - Invalid query: select * from qw.save_salesorder_details('0085869','000001','100',120,4000,'Test 9:52 11/06/2017','On Hold','alexm')
ERROR - 2017-11-06 15:05:41 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 745
ERROR - 2017-11-06 15:05:41 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 756
ERROR - 2017-11-06 15:15:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-06 15:15:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-06 15:25:39 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 15:38:07 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 15:38:30 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 15:39:04 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 15:39:47 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 15:42:32 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 15:43:06 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 15:51:28 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 745
ERROR - 2017-11-06 15:51:28 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 756
ERROR - 2017-11-06 15:52:33 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 15:53:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 745
ERROR - 2017-11-06 15:53:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 756
ERROR - 2017-11-06 15:55:23 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 745
ERROR - 2017-11-06 15:55:23 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 756
ERROR - 2017-11-06 15:56:57 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 16:19:00 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 745
ERROR - 2017-11-06 16:19:00 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 756
ERROR - 2017-11-06 16:41:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 745
ERROR - 2017-11-06 16:41:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 756
ERROR - 2017-11-06 18:06:58 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 18:07:10 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 18:07:25 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 18:07:44 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 18:08:02 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 18:12:39 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 18:29:30 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 18:29:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.activitycode does not exist
LINE 16: ...icket wt on (a.salesorderno = wt.salesorderno and a.activity...
                                                              ^
HINT:  Perhaps you meant to reference the column &quot;wt.activitycode&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode,
  case
    when btrim(a.udf_activity_code) = '' then wt.activitycode
    else udf_activity_code
  end as udf_activity_code,
  case
    when btrim(a.udf_activity_description) = '' then wt.activitycode
    else udf_activity_description
  end as udf_activity_description,
  b.notes as comments,
  b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    join sage.jt_workticket wt on (a.salesorderno = wt.salesorderno and a.activitycode = wt.activitycode and a.jt158_wtstep = wt.wtstep)
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 18:29:42 --> Query error: ERROR:  column a.activitycode does not exist
LINE 16: ...icket wt on (a.salesorderno = wt.salesorderno and a.activity...
                                                              ^
HINT:  Perhaps you meant to reference the column "wt.activitycode".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode,
  case
    when btrim(a.udf_activity_code) = '' then wt.activitycode
    else udf_activity_code
  end as udf_activity_code,
  case
    when btrim(a.udf_activity_description) = '' then wt.activitycode
    else udf_activity_description
  end as udf_activity_description,
  b.notes as comments,
  b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a
    join sage.jt_workticket wt on (a.salesorderno = wt.salesorderno and a.activitycode = wt.activitycode and a.jt158_wtstep = wt.wtstep)
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0085869')
ERROR - 2017-11-06 19:49:07 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 19:49:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;sage.ci_extended&quot; does not exist
LINE 15:   from sage.so_salesorderhistorydetail a, sage.ci_extended
                                                   ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select distinct a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode,
  case
    when btrim(a.udf_activity_code) = '' then wt.activitycode
    else udf_activity_code
  end as udf_activity_code,
  case
    when btrim(a.udf_activity_description) = '' then wt.activitycode
    else udf_activity_description
  end as udf_activity_description,
  b.notes as comments,
  b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.ci_extended
    join sage.jt_workticket wt on (a.salesorderno = wt.salesorderno   and a.jt158_wtstep = wt.wtstep)
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
    order by a.salesorderno, a.linekey::INTEGER, a.jt158_wtstep::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-06 19:49:21 --> Query error: ERROR:  relation "sage.ci_extended" does not exist
LINE 15:   from sage.so_salesorderhistorydetail a, sage.ci_extended
                                                   ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  select distinct a.salesorderno, a.linekey, a.itemcode, a.itemcodedesc,
  a.jt158_wtparent, a.jt158_wtchargepart, a.jt158_wtparentlinekey, a.jt158_wtpart, a.jt158_wtstep, a.jt158_wtchargepart,
  a.quantityorderedoriginal, a.warehousecode,
  case
    when btrim(a.udf_activity_code) = '' then wt.activitycode
    else udf_activity_code
  end as udf_activity_code,
  case
    when btrim(a.udf_activity_description) = '' then wt.activitycode
    else udf_activity_description
  end as udf_activity_description,
  b.notes as comments,
  b.jobstatus, b.timetaken, quantityused, 0.0 as timetakenest
  from sage.so_salesorderhistorydetail a, sage.ci_extended
    join sage.jt_workticket wt on (a.salesorderno = wt.salesorderno   and a.jt158_wtstep = wt.wtstep)
    left join qw.qw_sales_order_details b on (a.salesorderno = b.salesorderno and a.linekey = b.linekey)
  where a.salesorderno = in_salesorderno
    order by a.salesorderno, a.linekey::INTEGER, a.jt158_wtstep::INTEGER
) cust
CONTEXT:  PL/pgSQL function qw.get_salesorder_details(text) line 3 at RETURN - Invalid query: select * from qw.get_salesorder_details('0086088')
ERROR - 2017-11-06 20:23:01 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 20:30:29 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 20:31:08 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-06 20:36:28 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
