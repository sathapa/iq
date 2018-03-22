<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-06-09 13:55:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_crm_quote_detail_staging__index&quot;
DETAIL:  Key (quoteid, sequence_no)=(QW-10-FEDE01-201705190254, 1) already exists.
CONTEXT:  SQL statement &quot;insert into qw.qw_crm_quote_detail_staging
SELECT DISTINCT ('QW-'::text || (qd.quote_id)::text) AS name,
    ''::text AS existing_product,
    qd.quote_description AS product_description,
    'EA' as unitofmeasure,
    true AS priceoverridden,
    true AS writeinproduct,
    qd.unitcost as unitprice,
    qd.quantity as quantityordered,
    0 AS manualdiscount,
    0 AS tax,
    '20170530'::DATE as promisedate,
    true AS priceoverriddenflag,
    true AS productoverriddenflag,
    ('QW-'::text || (qd.quote_id)::text) AS quoteid,
    public.uuid_generate_v5('ecb0027a-dd85-4dde-b6af-2ed4c96d7121'::uuid, ('QW-'::text || (qd.quote_id)::text)) AS quote_uuid,
    qd.quote_line_no AS sequence_no,
    qd.product,
    public.uuid_generate_v5('ecb0027a-dd85-4dde-b6af-2ed4c96d7121'::uuid, ('QW-'::text || (qd.quote_id)::text) || qd.quote_line_no::TEXT) AS quotedetailid
   FROM qw.qw_quote_detail qd
  WHERE quote_id =  in_quote_id&quot;
PL/pgSQL function qw.copy_quote_to_crm(character varying,character varying) line 71 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-09 13:55:17 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_crm_quote_detail_staging__index"
DETAIL:  Key (quoteid, sequence_no)=(QW-10-FEDE01-201705190254, 1) already exists.
CONTEXT:  SQL statement "insert into qw.qw_crm_quote_detail_staging
SELECT DISTINCT ('QW-'::text || (qd.quote_id)::text) AS name,
    ''::text AS existing_product,
    qd.quote_description AS product_description,
    'EA' as unitofmeasure,
    true AS priceoverridden,
    true AS writeinproduct,
    qd.unitcost as unitprice,
    qd.quantity as quantityordered,
    0 AS manualdiscount,
    0 AS tax,
    '20170530'::DATE as promisedate,
    true AS priceoverriddenflag,
    true AS productoverriddenflag,
    ('QW-'::text || (qd.quote_id)::text) AS quoteid,
    public.uuid_generate_v5('ecb0027a-dd85-4dde-b6af-2ed4c96d7121'::uuid, ('QW-'::text || (qd.quote_id)::text)) AS quote_uuid,
    qd.quote_line_no AS sequence_no,
    qd.product,
    public.uuid_generate_v5('ecb0027a-dd85-4dde-b6af-2ed4c96d7121'::uuid, ('QW-'::text || (qd.quote_id)::text) || qd.quote_line_no::TEXT) AS quotedetailid
   FROM qw.qw_quote_detail qd
  WHERE quote_id =  in_quote_id"
PL/pgSQL function qw.copy_quote_to_crm(character varying,character varying) line 71 at SQL statement - Invalid query: select * from qw.copy_quote_to_crm('10-FEDE01-201705190254','sudiptab')
ERROR - 2017-06-09 18:44:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:   WHERE product = in_product
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  SELECT                               product_shortname
  FROM qw.dwstatic_qw_products
  WHERE product = in_product
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 487 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-09 18:44:23 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:   WHERE product = in_product
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  SELECT                               product_shortname
  FROM qw.dwstatic_qw_products
  WHERE product = in_product
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 487 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '060917JG0153', 0,'Adam Millett', '1250', '209-045-02', 2, 1, 'NONE', 'NONE', 'NONE', '', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0151','OEM','Opportunity for 70-ADAM02 on 20170609','0','7-10 days ARO','')
ERROR - 2017-06-09 18:44:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:   WHERE product = in_product
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  SELECT                               product_shortname
  FROM qw.dwstatic_qw_products
  WHERE product = in_product
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 487 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-09 18:44:36 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:   WHERE product = in_product
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  SELECT                               product_shortname
  FROM qw.dwstatic_qw_products
  WHERE product = in_product
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 487 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '060917JG0153', 0,'Adam Millett', '1250', '209-045-02', 2, 1, 'NONE', 'NONE', 'NONE', '', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0151','OEM','Opportunity for 70-ADAM02 on 20170609','0','7-10 days ARO','')
ERROR - 2017-06-09 18:44:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:   WHERE product = in_product
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  SELECT                               product_shortname
  FROM qw.dwstatic_qw_products
  WHERE product = in_product
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 487 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-09 18:44:36 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:   WHERE product = in_product
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  SELECT                               product_shortname
  FROM qw.dwstatic_qw_products
  WHERE product = in_product
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 487 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '060917JG0153', 0,'Adam Millett', '1250', '209-045-02', 2, 1, 'NONE', 'NONE', 'NONE', '', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0151','OEM','Opportunity for 70-ADAM02 on 20170609','0','7-10 days ARO','')
ERROR - 2017-06-09 18:45:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:   WHERE btrim(product) = in_product
                      ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  SELECT                               product_shortname
  FROM qw.dwstatic_qw_products
  WHERE btrim(product) = in_product
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 487 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-09 18:45:14 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:   WHERE btrim(product) = in_product
                      ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  SELECT                               product_shortname
  FROM qw.dwstatic_qw_products
  WHERE btrim(product) = in_product
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 487 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '060917JG0153', 0,'Adam Millett', '1250', '209-045-02', 2, 1, 'NONE', 'NONE', 'NONE', '', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0151','OEM','Opportunity for 70-ADAM02 on 20170609','0','7-10 days ARO','')
ERROR - 2017-06-09 18:45:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:   WHERE btrim(product) = in_product
                      ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  SELECT                               product_shortname
  FROM qw.dwstatic_qw_products
  WHERE btrim(product) = in_product
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 487 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-09 18:45:15 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:   WHERE btrim(product) = in_product
                      ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  SELECT                               product_shortname
  FROM qw.dwstatic_qw_products
  WHERE btrim(product) = in_product
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 487 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '060917JG0153', 0,'Adam Millett', '1250', '209-045-02', 2, 1, 'NONE', 'NONE', 'NONE', '', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0151','OEM','Opportunity for 70-ADAM02 on 20170609','0','7-10 days ARO','')
