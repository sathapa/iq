<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-02-01 13:16:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  failed to find conversion function from unknown to text
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
ERROR - 2018-02-01 13:16:12 --> Query error: ERROR:  failed to find conversion function from unknown to text
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
PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-02-01','2018-02-01','All',
			'All','','All')
ERROR - 2018-02-01 13:23:58 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-01 14:08:35 --> Severity: Notice --> Undefined index: survey_date /var/www/html/application/models/frontend/Survey_model.php 23
ERROR - 2018-02-01 14:08:35 --> Severity: Notice --> Undefined index: summary /var/www/html/application/models/frontend/Survey_model.php 24
ERROR - 2018-02-01 14:08:35 --> Severity: Notice --> Undefined index: recommend /var/www/html/application/models/frontend/Survey_model.php 25
ERROR - 2018-02-01 14:33:53 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-01 15:10:47 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 15:40:45 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-01 15:40:45 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-01 15:42:12 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 16:17:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-01 16:17:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-01 16:31:42 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-01 16:31:42 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-01 18:58:55 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 19:15:50 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 19:17:12 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 19:18:10 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 20:12:26 --> Severity: Compile Error --> Cannot redeclare Orders::index() /var/www/html/application/controllers/frontend/Orders.php 80
ERROR - 2018-02-01 20:13:53 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-01 20:13:56 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-01 20:13:58 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-01 20:14:18 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-01 20:14:19 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 20:14:25 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-01 20:14:48 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-01 20:16:39 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 20:18:11 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 20:18:17 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-01 20:38:24 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 20:38:39 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 20:43:08 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 20:44:02 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 20:53:20 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-01 20:53:23 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-01 21:19:20 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
