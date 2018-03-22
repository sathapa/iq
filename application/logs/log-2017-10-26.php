<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-10-26 04:22:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-26 04:22:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-26 12:45:27 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-26 12:45:27 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-26 12:48:41 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-26 12:48:41 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-26 13:52:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 5:   LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.p...
                                                     ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location, d.*, 000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a1
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-26 13:52:11 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 5:   LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.p...
                                                     ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location, d.*, 000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a1
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN - Invalid query: select * from qw.get_quote_bom_details('36befaa3-029a-5ab1-baa2-a31ba2d133b3',0);
ERROR - 2017-10-26 14:05:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 5:   LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.p...
                                                     ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location, d.*, 000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a1
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-26 14:05:13 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 5:   LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.p...
                                                     ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location, d.*, 000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a1
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN - Invalid query: select * from qw.get_quote_bom_details('36befaa3-029a-5ab1-baa2-a31ba2d133b3',2);
ERROR - 2017-10-26 14:11:28 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-26 14:11:28 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-26 15:12:25 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-26 15:12:25 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-26 16:14:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-26 16:14:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-26 16:47:17 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-26 16:47:17 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-26 18:01:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;a&quot;
LINE 5:   LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.p...
                                                     ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location, d.*, 000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a1
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-26 18:01:58 --> Query error: ERROR:  missing FROM-clause entry for table "a"
LINE 5:   LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.p...
                                                     ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location, d.*, 000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a1
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN - Invalid query: select * from qw.get_quote_bom_details('6f2cf050-9a8a-50a7-9a6f-118f4ee2091c',0);
