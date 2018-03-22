<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-30 01:25:41 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-30 01:25:49 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-30 01:25:56 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-30 03:40:59 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-30 04:15:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-30 04:15:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-30 05:39:53 --> Severity: error --> Exception: Class 'Imagick' not found /var/www/html/application/helpers/common_helper.php 6607
ERROR - 2018-01-30 05:47:26 --> Severity: Compile Warning --> Unterminated comment starting line 2294 /var/www/html/application/helpers/common_helper.php 2294
ERROR - 2018-01-30 13:31:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement &quot;SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so&quot;
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-30 13:31:31 --> Query error: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement "SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so"
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-30','2018-01-30','All',
			'All','','All')
ERROR - 2018-01-30 14:10:41 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-30 14:10:41 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-30 14:18:35 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-30 14:18:35 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-30 15:24:00 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 15:55:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement &quot;SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so&quot;
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-30 15:55:17 --> Query error: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement "SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so"
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-30','2018-01-30','All',
			'All','','All')
ERROR - 2018-01-30 16:19:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement &quot;SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so&quot;
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-30 16:19:20 --> Query error: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement "SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so"
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-30','2018-01-30','All',
			'All','','All')
ERROR - 2018-01-30 16:42:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement &quot;SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so&quot;
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-30 16:42:52 --> Query error: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement "SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so"
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-30','2018-01-30','All',
			'All','','All')
ERROR - 2018-01-30 16:51:35 --> Severity: error --> Exception: Class 'Imagick' not found /var/www/html/application/helpers/common_helper.php 6607
ERROR - 2018-01-30 16:51:50 --> Severity: error --> Exception: Class 'Imagick' not found /var/www/html/application/helpers/common_helper.php 6607
ERROR - 2018-01-30 16:52:15 --> Severity: error --> Exception: Class 'Imagick' not found /var/www/html/application/helpers/common_helper.php 6607
ERROR - 2018-01-30 16:54:52 --> Severity: error --> Exception: Class 'Imagick' not found /var/www/html/application/helpers/common_helper.php 6608
ERROR - 2018-01-30 17:03:13 --> Severity: error --> Exception: Class 'Imagick' not found /var/www/html/application/views/frontend/sales-order-pdf.php 52
ERROR - 2018-01-30 17:05:21 --> Severity: error --> Exception: Class 'Imagick' not found /var/www/html/application/views/frontend/survey_index.php 48
ERROR - 2018-01-30 18:38:46 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 18:39:29 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 18:42:48 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 18:43:03 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 18:43:15 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 18:43:21 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 18:43:42 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 18:44:33 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 18:50:30 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 18:53:15 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:03:09 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:03:28 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:03:35 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:05:49 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:09:14 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:09:39 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:12:26 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:13:31 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:13:46 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:13:59 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:14:16 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:31:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement &quot;SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so&quot;
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-30 19:31:05 --> Query error: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement "SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so"
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-30','2018-01-30','All',
			'All','','All')
ERROR - 2018-01-30 19:31:19 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:31:47 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:42:57 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:43:01 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:44:48 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 19:52:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement &quot;SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so&quot;
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-30 19:52:45 --> Query error: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement "SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so"
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-30','2018-01-30','All',
			'All','','All')
ERROR - 2018-01-30 19:52:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-30 19:52:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-30 19:52:54 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 20:00:34 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 20:46:31 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 20:46:48 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-30 23:19:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement &quot;SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so&quot;
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-30 23:19:23 --> Query error: ERROR:  failed to find conversion function from unknown to text
CONTEXT:  SQL statement "SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'Completed')) -- ( 'In Progress', 'Completed'))
  /****,
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  ****/
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so"
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-30','2018-01-30','All',
			'All','','All')
