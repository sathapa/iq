<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-12-08 04:08:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;in_ncrid&quot; does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 04:08:06 --> Query error: ERROR:  column "in_ncrid" does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN - Invalid query: select * from qw.get_iso_nonconformance('all','all','2017-12-08','2017-12-08')
ERROR - 2017-12-08 04:08:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;in_ncrid&quot; does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 04:08:29 --> Query error: ERROR:  column "in_ncrid" does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN - Invalid query: select * from qw.get_iso_nonconformance('all','all','2017-12-08','2017-12-08')
ERROR - 2017-12-08 04:11:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;all&quot;
LINE 1: ..._nonconformance('all','all','2017-12-08','2017-12-08','all')
                                                                 ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 04:11:02 --> Query error: ERROR:  invalid input syntax for integer: "all"
LINE 1: ..._nonconformance('all','all','2017-12-08','2017-12-08','all')
                                                                 ^ - Invalid query: select * from qw.get_iso_nonconformance('all','all','2017-12-08','2017-12-08','all')
ERROR - 2017-12-08 04:11:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...iso_nonconformance('all','all','2017-12-08','2017-12-08','')
                                                                    ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 04:11:32 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...iso_nonconformance('all','all','2017-12-08','2017-12-08','')
                                                                    ^ - Invalid query: select * from qw.get_iso_nonconformance('all','all','2017-12-08','2017-12-08','')
ERROR - 2017-12-08 04:12:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;in_ncrid&quot; does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 04:12:13 --> Query error: ERROR:  column "in_ncrid" does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN - Invalid query: select * from qw.get_iso_nonconformance('all','all','2017-12-08','2017-12-08',0)
ERROR - 2017-12-08 04:12:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;in_ncrid&quot; does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 04:12:36 --> Query error: ERROR:  column "in_ncrid" does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN - Invalid query: select * from qw.get_iso_nonconformance('all','all','2017-12-08','2017-12-08','0')
ERROR - 2017-12-08 04:13:51 --> Severity: error --> Exception: /var/www/html/application/models/frontend/Isoncr_model.php exists, but doesn't declare class Isoncr_model /var/www/html/system/core/Loader.php 336
ERROR - 2017-12-08 04:13:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;in_ncrid&quot; does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 04:13:54 --> Query error: ERROR:  column "in_ncrid" does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN - Invalid query: select * from qw.get_iso_nonconformance('all','all','2017-12-08','2017-12-08',0)
ERROR - 2017-12-08 04:28:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;in_ncrid&quot; does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 04:28:29 --> Query error: ERROR:  column "in_ncrid" does not exist
LINE 4:     where in_ncrid = 0 or ncr_id = in_ncrid
                  ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) FROM (
  SELECT a.*
  FROM qw.iso_nonconformance a
    where in_ncrid = 0 or ncr_id = in_ncrid
  )
  iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance(text,text,date,date,integer) line 6 at RETURN - Invalid query: select * from qw.get_iso_nonconformance('all','all','2017-12-08','2017-12-08',0)
ERROR - 2017-12-08 13:22:18 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 13:22:18 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 13:31:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 13:31:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 14:11:33 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 14:11:33 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 14:13:30 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 14:13:30 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 16:39:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 16:39:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 16:49:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;,&quot;
LINE 1: ...'', 0,'20453', 'CCN', 'RDNB075SI', 3, 3.33, 4.41, , 15.48, 1...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 16:49:40 --> Query error: ERROR:  syntax error at or near ","
LINE 1: ...'', 0,'20453', 'CCN', 'RDNB075SI', 3, 3.33, 4.41, , 15.48, 1...
                                                             ^ - Invalid query: SELECT * from qw.cclimbnet_quote(0, '', 0,'20453', 'CCN', 'RDNB075SI', 3, 3.33, 4.41, , 15.48, 1, 0,'','santosht','0345','IND','','Test test','0','','120817EM1149',0,'','',0,0)
ERROR - 2017-12-08 16:58:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;,&quot;
LINE 1: ...'', 0,'20453', 'CCN', 'RDNB075SI', 3, 3.33, 4.41, , 15.48, 1...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 16:58:17 --> Query error: ERROR:  syntax error at or near ","
LINE 1: ...'', 0,'20453', 'CCN', 'RDNB075SI', 3, 3.33, 4.41, , 15.48, 1...
                                                             ^ - Invalid query: SELECT * from qw.cclimbnet_quote(0, '', 0,'20453', 'CCN', 'RDNB075SI', 3, 3.33, 4.41, , 15.48, 1, 0,'','santosht','0345','IND','','Test test','0','','120817EM1149',0,'','',0,0)
ERROR - 2017-12-08 16:58:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;,&quot;
LINE 1: ...'', 0,'20453', 'CCN', 'RDNB075SI', 3, 3.33, 4.41, , 15.48, 1...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 16:58:21 --> Query error: ERROR:  syntax error at or near ","
LINE 1: ...'', 0,'20453', 'CCN', 'RDNB075SI', 3, 3.33, 4.41, , 15.48, 1...
                                                             ^ - Invalid query: SELECT * from qw.cclimbnet_quote(0, '', 0,'20453', 'CCN', 'RDNB075SI', 3, 3.33, 4.41, , 15.48, 1, 0,'','santosht','0345','IND','','Test test','0','','120817EM1149',0,'','',0,0)
ERROR - 2017-12-08 16:58:51 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 16:58:51 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 16:59:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(96849c1d-bd74-5863-b29e-65361f8bfcdd) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header (
    quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
    contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
    shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
    ship_method, shipping_location, created_by, created_on, wt_class,
    crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
    WITH cont AS (SELECT DISTINCT a.*
                  FROM qw.crm_contact a, qw.crm_customer b
                  WHERE a.crm_accountid = b.crm_guid
                        AND (b.sagecustomernumber = in_customer OR b.accountnumber :: TEXT = in_customer)
                        AND (a.address1_name = in_contact OR (a.firstname || ' ' || a.lastname) = in_contact)),
        cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
          SELECT c.*
          FROM qw.crm_customer c
          WHERE (c.sagecustomernumber = in_customer OR c.accountnumber :: TEXT = in_customer)
      )
    SELECT DISTINCT
      in_quote_id,
      left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
      substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
      'Draft',
      '',
      now(),
      in_salesperson,
      in_contact,
      coalesce(c.businessphone, address1_phone),
      coalesce(a.address1_street1, ''),
      coalesce(a.address1_city, ''),
      coalesce(a.address1_stateprovince, ''),
      coalesce(a.address1_zippostalcode, ''),
      coalesce(a.address1_countryregion, ''),
      '',
      coalesce(c.businessphone, address1_phone),
      in_shiptoaddress,
      '',
      '',
      '',
      '',
      '',
      coalesce(a.termscode, '00'),
      coalesce(a.address1_shippingmethod, 'PPD GRD'),
      --a.address1_shippingmethod,
      -- qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
      qw.get_location(1, left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2), in_product, 'MTO', 'XX'),
      in_userid,
      now(),
      in_wtclass,
      in_contact,
      in_opportunity,
      in_leadtime,
      in_proposalnum,
      c.fax,
      c.email,
      a.accountnumber,
      a.companyname
    FROM cust a
      LEFT JOIN cont c ON (a.crm_guid = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,text) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddress)&quot;
PL/pgSQL function qw.cclimbnet_quote(integer,character varying,integer,character varying,character varying,character varying,integer,double precision,double precision,integer,double precision,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text,double precision,double precision) line 214 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-08 16:59:39 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(96849c1d-bd74-5863-b29e-65361f8bfcdd) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header (
    quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
    contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
    shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
    ship_method, shipping_location, created_by, created_on, wt_class,
    crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
    WITH cont AS (SELECT DISTINCT a.*
                  FROM qw.crm_contact a, qw.crm_customer b
                  WHERE a.crm_accountid = b.crm_guid
                        AND (b.sagecustomernumber = in_customer OR b.accountnumber :: TEXT = in_customer)
                        AND (a.address1_name = in_contact OR (a.firstname || ' ' || a.lastname) = in_contact)),
        cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
          SELECT c.*
          FROM qw.crm_customer c
          WHERE (c.sagecustomernumber = in_customer OR c.accountnumber :: TEXT = in_customer)
      )
    SELECT DISTINCT
      in_quote_id,
      left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
      substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
      'Draft',
      '',
      now(),
      in_salesperson,
      in_contact,
      coalesce(c.businessphone, address1_phone),
      coalesce(a.address1_street1, ''),
      coalesce(a.address1_city, ''),
      coalesce(a.address1_stateprovince, ''),
      coalesce(a.address1_zippostalcode, ''),
      coalesce(a.address1_countryregion, ''),
      '',
      coalesce(c.businessphone, address1_phone),
      in_shiptoaddress,
      '',
      '',
      '',
      '',
      '',
      coalesce(a.termscode, '00'),
      coalesce(a.address1_shippingmethod, 'PPD GRD'),
      --a.address1_shippingmethod,
      -- qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
      qw.get_location(1, left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2), in_product, 'MTO', 'XX'),
      in_userid,
      now(),
      in_wtclass,
      in_contact,
      in_opportunity,
      in_leadtime,
      in_proposalnum,
      c.fax,
      c.email,
      a.accountnumber,
      a.companyname
    FROM cust a
      LEFT JOIN cont c ON (a.crm_guid = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,text) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddress)"
PL/pgSQL function qw.cclimbnet_quote(integer,character varying,integer,character varying,character varying,character varying,integer,double precision,double precision,integer,double precision,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text,double precision,double precision) line 214 at SQL statement - Invalid query: SELECT * from qw.cclimbnet_quote(1, '', 0,'16052', 'CCN', 'RPY3S050SD', 4, 6.41, 5.33, 50, 23.48, 2, 12,'','santosht','0003','IND','','Kevin Kelley','7-10 days ARO','','120817BS1159',0,'','',0,0)
ERROR - 2017-12-08 16:59:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2017-12-08 17:00:13 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 17:00:13 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 17:22:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 17:22:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 17:25:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-12-08 17:25:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-12-08 19:00:57 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 19:00:57 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 19:37:33 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 19:37:33 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 19:41:48 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 19:41:48 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-08 19:49:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-08 19:49:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
