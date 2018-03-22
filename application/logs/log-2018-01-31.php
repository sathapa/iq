<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-31 00:01:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-31 00:01:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-31 02:51:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 02:51:42 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 04:16:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 04:16:35 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 04:19:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 04:19:11 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','0091079','All')
ERROR - 2018-01-31 05:08:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 05:08:59 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','0091079','All')
ERROR - 2018-01-31 13:36:41 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-31 13:37:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 13:37:39 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 13:37:43 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-31 14:32:41 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-31 14:32:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 14:32:43 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 14:32:52 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-31 14:51:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 14:51:11 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 14:51:16 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-31 14:51:30 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-31 14:51:31 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-31 14:51:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 14:51:32 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 14:51:35 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-31 14:59:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 14:59:12 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 15:21:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-31 15:21:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-31 15:50:15 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-31 15:50:15 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-31 17:50:28 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-31 17:50:28 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-31 19:21:43 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-31 19:21:43 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-31 19:23:11 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-31 19:23:19 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-31 19:42:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 19:42:24 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 19:42:39 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 19:42:53 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 19:42:57 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 19:45:49 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 19:54:18 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 20:08:52 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 20:15:38 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 20:48:42 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 20:49:01 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-31 20:49:01 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-31 20:49:10 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 20:49:14 --> Severity: Compile Error --> Cannot redeclare Orders::index() /var/www/html/application/controllers/frontend/Orders.php 81
ERROR - 2018-01-31 20:50:00 --> Severity: error --> Exception: syntax error, unexpected ''</span>' (T_ENCAPSED_AND_WHITESPACE) /var/www/html/application/controllers/frontend/Orders.php 373
ERROR - 2018-01-31 20:50:30 --> Severity: Compile Error --> Cannot redeclare Orders::index() /var/www/html/application/controllers/frontend/Orders.php 81
ERROR - 2018-01-31 20:50:32 --> Severity: Compile Error --> Cannot redeclare Orders::index() /var/www/html/application/controllers/frontend/Orders.php 81
ERROR - 2018-01-31 20:50:39 --> Severity: Compile Error --> Cannot redeclare Orders::index() /var/www/html/application/controllers/frontend/Orders.php 81
ERROR - 2018-01-31 20:50:43 --> Severity: Compile Error --> Cannot redeclare Orders::index() /var/www/html/application/controllers/frontend/Orders.php 81
ERROR - 2018-01-31 20:50:49 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 20:50:55 --> Severity: Compile Error --> Cannot redeclare Orders::index() /var/www/html/application/controllers/frontend/Orders.php 81
ERROR - 2018-01-31 20:51:37 --> Severity: Compile Error --> Cannot redeclare Orders::index() /var/www/html/application/controllers/frontend/Orders.php 81
ERROR - 2018-01-31 20:52:19 --> Severity: Compile Error --> Cannot redeclare Orders::index() /var/www/html/application/controllers/frontend/Orders.php 81
ERROR - 2018-01-31 20:52:55 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 20:52:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 20:52:59 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 20:53:38 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 20:53:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 20:53:41 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 20:53:43 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 20:56:17 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 20:56:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 20:56:20 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 20:57:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 20:57:12 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:01:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:01:38 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:01:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:01:39 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:01:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:01:40 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:01:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:01:40 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:01:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:01:41 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:01:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:01:41 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:01:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:01:41 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:01:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:01:41 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:01:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:01:41 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:01:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:01:41 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:02:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:02:31 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:04:27 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 21:04:35 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 21:06:16 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-01-31 21:23:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-01-31 21:23:25 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-31','2018-01-31','All',
			'All','','All')
ERROR - 2018-01-31 21:23:27 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
