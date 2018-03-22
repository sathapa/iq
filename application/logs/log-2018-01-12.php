<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-12 01:59:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-12 01:59:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-12 16:45:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_prod_order_status2&quot; does not exist
LINE 23:   FROM qw.qw_prod_order_status2 a
                ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS ( SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode)
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
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 23 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-12 16:45:11 --> Query error: ERROR:  relation "qw.qw_prod_order_status2" does not exist
LINE 23:   FROM qw.qw_prod_order_status2 a
                ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS ( SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode)
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
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 23 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-12','2018-01-12','All',
			'All','','All')
ERROR - 2018-01-12 17:23:31 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-12 17:23:31 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
