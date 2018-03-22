<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-22 04:04:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 04:04:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 04:22:37 --> Severity: Notice --> Undefined variable: customerSageNumber /var/www/html/application/models/frontend/Order_model.php 60
ERROR - 2017-11-22 04:22:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_tracking_view&quot; does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 04:22:37 --> Query error: ERROR:  relation "qw.qw_tracking_view" does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-22','2017-11-22','All',
			'All','','')
ERROR - 2017-11-22 04:24:55 --> Severity: Notice --> Undefined variable: customerSageNumber /var/www/html/application/models/frontend/Order_model.php 60
ERROR - 2017-11-22 04:24:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_tracking_view&quot; does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 04:24:55 --> Query error: ERROR:  relation "qw.qw_tracking_view" does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-22','2017-11-22','All',
			'All','','')
ERROR - 2017-11-22 04:25:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_tracking_view&quot; does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 04:25:49 --> Query error: ERROR:  relation "qw.qw_tracking_view" does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-22','2017-11-22','All',
			'All','','All')
ERROR - 2017-11-22 04:26:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_tracking_view&quot; does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 04:26:15 --> Query error: ERROR:  relation "qw.qw_tracking_view" does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('all','2017-11-22','2017-11-22','All',
			'All','','All')
ERROR - 2017-11-22 04:26:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_tracking_view&quot; does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 04:26:51 --> Query error: ERROR:  relation "qw.qw_tracking_view" does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-22','2017-11-22','All',
			'All','','all')
ERROR - 2017-11-22 04:26:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_tracking_view&quot; does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 04:26:57 --> Query error: ERROR:  relation "qw.qw_tracking_view" does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-22','2017-11-22','All',
			'All','','all')
ERROR - 2017-11-22 04:27:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_tracking_view&quot; does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 04:27:18 --> Query error: ERROR:  relation "qw.qw_tracking_view" does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-22','2017-11-22','All',
			'All','','')
ERROR - 2017-11-22 04:27:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_tracking_view&quot; does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 04:27:56 --> Query error: ERROR:  relation "qw.qw_tracking_view" does not exist
LINE 22:   LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
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
  AND a.warehousecode != b.warehousecode),
  mfs AS ( SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderhistorydetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  UNION
  SELECT DISTINCT b.salesorderno, TRUE AS mfsflag
  FROM sage.so_salesorderdetail b
  WHERE b.itemcode LIKE 'MFS%' OR b.itemcode LIKE 'MFF%'
  )
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  and (in_customer = 'All' or a.customerno = in_customer)
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE ))
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 24 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-22','2017-11-22','All',
			'All','','All')
ERROR - 2017-11-22 04:31:25 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-22 04:53:08 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-22 04:53:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 04:53:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 04:57:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 04:57:15 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'19520', '1250', 
			'209-045-04', 20, 10, 'RHT3S025SD', 'NONE', 'NONE', 'NONE', '',
			  0, '0', 1, '', 0.0, 0.0, 2, 0, 1,
			   2, 2,'Instruction testing','tisuser','0003','IND','','Prem Yadav',
			   '7-10 days ARO','Tag Testing','112217BS1025','',1,'','')
ERROR - 2017-11-22 04:57:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 04:57:29 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'19520', '1250', 
			'209-045-04', 20, 10, 'RHT3S025SD', 'NONE', 'NONE', 'NONE', '',
			  0, '0', 1, '', 0.0, 0.0, 2, 0, 1,
			   2, 2,'Instruction testing','tisuser','0003','IND','','Prem Yadav',
			   '7-10 days ARO','Tag Testing','112217BS1025','',1,'','')
ERROR - 2017-11-22 05:15:41 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 05:15:41 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 05:18:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-22 05:18:12 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'19520', 'PSNC', 30,
				 20, 1, 1, 0, 'Instruction Custom PSN ','tisuser','0003','IND',
				 '','Kapil Tyagi','7-10 days ARO','Tag Custom PSN ','112217BS1046',1,'','')
ERROR - 2017-11-22 05:19:39 --> Severity: error --> Exception: syntax error, unexpected end of file /var/www/html/application/helpers/common_helper.php 3286
ERROR - 2017-11-22 05:25:47 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 05:25:47 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 08:07:23 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 08:07:23 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 08:08:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 08:08:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 09:28:00 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 09:28:00 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 12:52:53 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-22 13:02:57 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 13:02:57 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 16:01:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 16:01:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 16:02:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 16:02:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 16:26:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 16:26:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-22 17:00:48 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-22 17:00:48 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
