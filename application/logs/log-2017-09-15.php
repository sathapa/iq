<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-15 05:47:08 --> Severity: error --> Exception: syntax error, unexpected end of file /var/www/html/application/helpers/common_helper.php 2335
ERROR - 2017-09-15 05:47:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_update_contact(unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.create_update_contact('fa9cf7f0-272a-e711-8...
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 05:47:35 --> Query error: ERROR:  function qw.create_update_contact(unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.create_update_contact('fa9cf7f0-272a-e711-8...
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.create_update_contact('fa9cf7f0-272a-e711-8111-e0071b6ac0b1','11551','','Aaron','Aday','','', '2222255599',
							'aaron@bldgseed.com','Aaron Aday','417 Main Street','Unit B','Carbondale','CO','81623','USA',2,0,'','Mr.','contact_1504644916.png',
							'https://www.linkedin.com/','5555655555','https://www.linkedin.com/') 
ERROR - 2017-09-15 11:23:35 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 11:23:35 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 11:24:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(ce78954b-a4fc-534a-9c85-9269f13b166f) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND a.address1_name = in_contact),
    cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
    SELECT c.* FROM qw.crm_customer c WHERE (c.sagecustomernumber = in_customer or c.accountnumber::TEXT = in_customer)
  )
SELECT
  in_quote_id,
  left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
  substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  in_contact,
  coalesce(a.mainphone, ''),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce( c.address1_phone, a.mainphone),
  '',
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
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header (o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 621 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 11:24:35 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(ce78954b-a4fc-534a-9c85-9269f13b166f) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND a.address1_name = in_contact),
    cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
    SELECT c.* FROM qw.crm_customer c WHERE (c.sagecustomernumber = in_customer or c.accountnumber::TEXT = in_customer)
  )
SELECT
  in_quote_id,
  left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
  substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  in_contact,
  coalesce(a.mainphone, ''),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce( c.address1_phone, a.mainphone),
  '',
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
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header (o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 621 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'12365', '500', '200-040-02', 20, 10, 'RHT3S025BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'Custom Net Instructions','tisuser','0240','IND','','Mike Bryant','7-10 days ARO','Custom Net Tag','091517JO1653','',1,'')
ERROR - 2017-09-15 11:56:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 11:56:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:02:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:02:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:27:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:27:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:28:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(2a15b7f7-c500-5c79-9fa8-ef30eb461916) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND a.address1_name = in_contact),
    cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
    SELECT c.* FROM qw.crm_customer c WHERE (c.sagecustomernumber = in_customer or c.accountnumber::TEXT = in_customer)
  )
SELECT
  in_quote_id,
  left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
  substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  in_contact,
  coalesce(a.mainphone, ''),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce( c.address1_phone, a.mainphone),
  '',
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
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header (o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 621 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:28:32 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(2a15b7f7-c500-5c79-9fa8-ef30eb461916) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND a.address1_name = in_contact),
    cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
    SELECT c.* FROM qw.crm_customer c WHERE (c.sagecustomernumber = in_customer or c.accountnumber::TEXT = in_customer)
  )
SELECT
  in_quote_id,
  left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
  substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  in_contact,
  coalesce(a.mainphone, ''),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce( c.address1_phone, a.mainphone),
  '',
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
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header (o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 621 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'12365', '1250', '209-045-04', 20, 10, 'NONE', 'NONE', 'NONE', '', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 3, 0,'Custom Net Instructions','tisuser','0240','IND','','Roger Fisher','7-10 days ARO','Custom Net Tag','091517JO1000','',0,'')
ERROR - 2017-09-15 12:28:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(b0b9ffb1-9a1c-5ee2-b1e0-9f3d0d2137be) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND a.address1_name = in_contact),
    cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
    SELECT c.* FROM qw.crm_customer c WHERE (c.sagecustomernumber = in_customer or c.accountnumber::TEXT = in_customer)
  )
SELECT
  in_quote_id,
  left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
  substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  in_contact,
  coalesce(a.mainphone, ''),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce( c.address1_phone, a.mainphone),
  '',
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
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header (o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 621 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:28:45 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(b0b9ffb1-9a1c-5ee2-b1e0-9f3d0d2137be) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND a.address1_name = in_contact),
    cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
    SELECT c.* FROM qw.crm_customer c WHERE (c.sagecustomernumber = in_customer or c.accountnumber::TEXT = in_customer)
  )
SELECT
  in_quote_id,
  left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
  substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  in_contact,
  coalesce(a.mainphone, ''),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce( c.address1_phone, a.mainphone),
  '',
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
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header (o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 621 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'12365', '1250', '209-045-04', 20, 10, 'NONE', 'NONE', 'NONE', '', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 3, 0,'Custom Net Instructions','tisuser','0240','IND','','Roger Fisher','7-10 days ARO','Custom Net Tag','091517JO1000','',0,'')
ERROR - 2017-09-15 12:36:50 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:36:50 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:38:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(74a8151f-939f-5150-8e8e-8e9f085da3d8) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND a.address1_name = in_contact),
    cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
    SELECT c.* FROM qw.crm_customer c WHERE (c.sagecustomernumber = in_customer or c.accountnumber::TEXT = in_customer)
  )
SELECT
  in_quote_id,
  left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
  substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  in_contact,
  coalesce(a.mainphone, ''),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce( c.address1_phone, a.mainphone),
  '',
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
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header (o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 621 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:38:43 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(74a8151f-939f-5150-8e8e-8e9f085da3d8) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND a.address1_name = in_contact),
    cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
    SELECT c.* FROM qw.crm_customer c WHERE (c.sagecustomernumber = in_customer or c.accountnumber::TEXT = in_customer)
  )
SELECT
  in_quote_id,
  left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
  substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  in_contact,
  coalesce(a.mainphone, ''),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce( c.address1_phone, a.mainphone),
  '',
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
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header (o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 621 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'12365', '1250', '209-045-06', 20, 10, 'RHT3S025BK', 'RDNB037SI', 'NONE', 'NONE', 'GMT-SP2-BK',  1, 'EA', 1, '', 0.0, 0.0, 1, 2, 1, 1, 0,'Custom Net Instructions','tisuser','0240','IND','','Mike Bryant','7-10 days ARO','Custom Net Tag','091517JO1807','',0,'')
ERROR - 2017-09-15 12:40:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(cc6ff2ae-c08f-582d-83d8-7a47bd52d1e9) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND a.address1_name = in_contact),
    cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
    SELECT c.* FROM qw.crm_customer c WHERE (c.sagecustomernumber = in_customer or c.accountnumber::TEXT = in_customer)
  )
SELECT
  in_quote_id,
  left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
  substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  in_contact,
  coalesce(a.mainphone, ''),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce( c.address1_phone, a.mainphone),
  '',
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
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header (o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 621 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:40:25 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(cc6ff2ae-c08f-582d-83d8-7a47bd52d1e9) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND a.address1_name = in_contact),
    cust AS (--SELECT b.* FROM qw.crm_customer b WHERE b.accountnumber = in_customer
    SELECT c.* FROM qw.crm_customer c WHERE (c.sagecustomernumber = in_customer or c.accountnumber::TEXT = in_customer)
  )
SELECT
  in_quote_id,
  left(coalesce(a.sagecustomernumber, '00-XXXXXX'), 2),
  substr(coalesce(a.sagecustomernumber, '00-XXXXXX'), 4, 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  in_contact,
  coalesce(a.mainphone, ''),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce( c.address1_phone, a.mainphone),
  '',
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
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header (o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 621 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'12365', '1250', '209-045-06', 20, 10, 'RHT3S025BK', 'RDNB037SI', 'NONE', 'NONE', 'GMT-SP2-BK',  1, 'EA', 1, '', 0.0, 0.0, 1, 2, 1, 1, 0,'Custom Net Instructions','tisuser','0240','IND','','Mike Bryant','7-10 days ARO','Custom Net Tag','091517JO1807','',0,'')
ERROR - 2017-09-15 12:40:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2017-09-15 12:42:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:42:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:43:57 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:43:57 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:44:44 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:44:44 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:48:36 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:48:36 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:49:13 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:49:13 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:54:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:54:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:55:04 --> Severity: error --> Exception: syntax error, unexpected ''</' (T_ENCAPSED_AND_WHITESPACE) /var/www/html/application/helpers/common_helper.php 871
ERROR - 2017-09-15 12:55:46 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:55:46 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:56:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:56:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:58:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 12:58:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 12:59:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;s&quot;
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:59:16 --> Query error: ERROR:  syntax error at or near "s"
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ - Invalid query: SELECT * from qw.customnet_quote(0, '51d94412-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum', 'DNR', 'RPY14SDFR', 111, 44, 'TW532PYSD', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0123','PLA','','Matt Walker','7-10 days ARO','','091517RR0858','',0,'')
ERROR - 2017-09-15 12:59:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;s&quot;
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:59:19 --> Query error: ERROR:  syntax error at or near "s"
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ - Invalid query: SELECT * from qw.customnet_quote(0, '51d94412-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum', 'DNR', 'RPY14SDFR', 111, 44, 'TW532PYSD', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0123','PLA','','Matt Walker','7-10 days ARO','','091517RR0858','',0,'')
ERROR - 2017-09-15 12:59:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;s&quot;
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:59:20 --> Query error: ERROR:  syntax error at or near "s"
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ - Invalid query: SELECT * from qw.customnet_quote(0, '51d94412-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum', 'DNR', 'RPY14SDFR', 111, 44, 'TW532PYSD', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0123','PLA','','Matt Walker','7-10 days ARO','','091517RR0858','',0,'')
ERROR - 2017-09-15 12:59:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;s&quot;
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:59:20 --> Query error: ERROR:  syntax error at or near "s"
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ - Invalid query: SELECT * from qw.customnet_quote(0, '51d94412-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum', 'DNR', 'RPY14SDFR', 111, 44, 'TW532PYSD', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0123','PLA','','Matt Walker','7-10 days ARO','','091517RR0858','',0,'')
ERROR - 2017-09-15 12:59:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;s&quot;
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:59:40 --> Query error: ERROR:  syntax error at or near "s"
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ - Invalid query: SELECT * from qw.customnet_quote(0, '51d94412-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum', '1250', '209-045-05', 111, 44, 'NONE', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0123','PLA','','Matt Walker','7-10 days ARO','','091517RR0858','',0,'')
ERROR - 2017-09-15 12:59:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;s&quot;
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:59:42 --> Query error: ERROR:  syntax error at or near "s"
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ - Invalid query: SELECT * from qw.customnet_quote(0, '51d94412-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum', '1250', '209-045-05', 111, 44, 'NONE', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0123','PLA','','Matt Walker','7-10 days ARO','','091517RR0858','',0,'')
ERROR - 2017-09-15 12:59:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;s&quot;
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:59:42 --> Query error: ERROR:  syntax error at or near "s"
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ - Invalid query: SELECT * from qw.customnet_quote(0, '51d94412-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum', '1250', '209-045-05', 111, 44, 'NONE', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0123','PLA','','Matt Walker','7-10 days ARO','','091517RR0858','',0,'')
ERROR - 2017-09-15 12:59:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;s&quot;
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-15 12:59:42 --> Query error: ERROR:  syntax error at or near "s"
LINE 1: ...2-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum',...
                                                             ^ - Invalid query: SELECT * from qw.customnet_quote(0, '51d94412-3471-5ef9-8076-b00d37215926', 0,'Omaha Children's Museum', '1250', '209-045-05', 111, 44, 'NONE', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0123','PLA','','Matt Walker','7-10 days ARO','','091517RR0858','',0,'')
ERROR - 2017-09-15 13:00:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 13:00:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 13:08:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 13:08:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 13:08:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 13:08:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 13:11:33 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 13:11:33 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 13:12:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 13:12:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 13:35:12 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 13:35:12 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 13:35:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 13:35:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 14:40:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-15 14:40:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-15 14:54:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-15 14:54:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-15 14:08:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 14:08:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 14:36:32 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 14:36:32 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 14:49:31 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 14:49:31 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 14:55:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 14:55:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 15:05:43 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 15:05:43 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 15:07:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 15:07:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 15:18:19 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 15:18:19 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 15:32:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 15:32:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 15:40:46 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 15:40:46 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 15:50:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 15:50:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 16:58:01 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 16:58:01 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 18:09:51 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 18:09:51 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 18:12:50 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 18:12:50 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 18:19:17 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 18:19:17 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 18:21:12 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 18:21:12 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 18:41:18 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 569
ERROR - 2017-09-15 18:41:18 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 580
ERROR - 2017-09-15 19:44:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-15 19:44:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-15 18:50:00 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-09-15 18:50:00 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-09-15 18:50:00 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-09-15 18:50:00 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-09-15 18:50:00 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
