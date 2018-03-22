<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-10-02 12:01:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 12:01:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 12:06:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 12:06:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 13:07:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-02 13:07:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-02 12:21:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 12:21:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 12:26:50 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 12:26:50 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 12:27:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 12:27:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 12:27:25 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 12:27:25 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 12:28:23 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 12:28:23 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 12:42:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 12:42:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 12:44:35 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 12:44:35 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 12:56:00 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 12:56:00 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 13:38:18 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 13:38:18 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 13:50:15 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 13:50:15 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 13:50:19 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 13:50:19 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 14:09:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 14:09:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 14:10:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 14:10:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 14:32:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 14:32:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 14:34:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(ba3b42d8-09a2-5adf-8323-852a5587af45) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 684 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-02 14:34:23 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(ba3b42d8-09a2-5adf-8323-852a5587af45) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 684 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'16521', '1250', '209-045-02', 67.87, 4.23, 'RMFPB037BK', 'RDNB050SI', 'RPY14SDFR', 'THHTBK', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','alexm','0146','SPT','','Byron Jessie','7-10 days ARO','','90217CC10321','',0,'HTPP 2in Sq;Width:4.23 FT;Length: 67.87 FT;Mesh Color: White;Sewn Border: MFP Braid 3/8in x 1000ft Black;Woven Border: Dyneema Braid 1/2in x 600ft Si;Addl: DNR500 Sand Polyester Knit Mes;')
ERROR - 2017-10-02 14:34:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2017-10-02 14:34:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(d3f3c3f9-e43c-5fd3-85df-340773335e26) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 684 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-02 14:34:35 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(d3f3c3f9-e43c-5fd3-85df-340773335e26) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 684 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'16521', '1250', '209-045-02', 67.87, 4.23, 'RMFPB037BK', 'RDNB050SI', 'RPY14SDFR', 'THHTBK', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','alexm','0146','SPT','','Byron Jessie','7-10 days ARO','','90217CC10321','',0,'HTPP 2in Sq;Width:4.23 FT;Length: 67.87 FT;Mesh Color: White;Sewn Border: MFP Braid 3/8in x 1000ft Black;Woven Border: Dyneema Braid 1/2in x 600ft Si;Addl: DNR500 Sand Polyester Knit Mes;')
ERROR - 2017-10-02 14:34:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2017-10-02 14:34:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(c4d202ef-16b2-587d-b6e2-ea8ba798b8fb) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 684 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-02 14:34:39 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(c4d202ef-16b2-587d-b6e2-ea8ba798b8fb) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 684 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'16521', '1250', '209-045-02', 67.87, 4.23, 'RMFPB037BK', 'RDNB050SI', 'RPY14SDFR', 'THHTBK', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','alexm','0146','SPT','','Byron Jessie','7-10 days ARO','','90217CC10321','',0,'HTPP 2in Sq;Width:4.23 FT;Length: 67.87 FT;Mesh Color: White;Sewn Border: MFP Braid 3/8in x 1000ft Black;Woven Border: Dyneema Braid 1/2in x 600ft Si;Addl: DNR500 Sand Polyester Knit Mes;')
ERROR - 2017-10-02 14:34:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2017-10-02 14:34:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(77190961-6898-5a8c-8ed0-a1e346cb1588) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 684 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-02 14:34:39 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(77190961-6898-5a8c-8ed0-a1e346cb1588) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 684 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'16521', '1250', '209-045-02', 67.87, 4.23, 'RMFPB037BK', 'RDNB050SI', 'RPY14SDFR', 'THHTBK', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','alexm','0146','SPT','','Byron Jessie','7-10 days ARO','','90217CC10321','',0,'HTPP 2in Sq;Width:4.23 FT;Length: 67.87 FT;Mesh Color: White;Sewn Border: MFP Braid 3/8in x 1000ft Black;Woven Border: Dyneema Braid 1/2in x 600ft Si;Addl: DNR500 Sand Polyester Knit Mes;')
ERROR - 2017-10-02 14:34:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2017-10-02 14:35:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(c98b7842-1134-599b-88a0-c6577a9d02ad) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 498 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-02 14:35:33 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(c98b7842-1134-599b-88a0-c6577a9d02ad) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 498 at SQL statement - Invalid query: SELECT * from qw.baynet_quote(1, '', 0,'16521', 'BNS38C',12, 4,0, 2, 1, 0,'','alexm','0146','SPT','','Byron Jessie','7-10 days ARO','','90217CC10321',0,'HTPP 2in Sq;Width:4.23 FT;Length: 67.87 FT;Mesh Color: White;Sewn Border: MFP Braid 3/8in x 1000ft Black;Woven Border: Dyneema Braid 1/2in x 600ft Si;Addl: DNR500 Sand Polyester Knit Mes;',1,0,12)
ERROR - 2017-10-02 14:35:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(c71b0e8e-48a3-5e8f-994d-25ff1118ccd2) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 498 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-02 14:35:47 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(c71b0e8e-48a3-5e8f-994d-25ff1118ccd2) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 498 at SQL statement - Invalid query: SELECT * from qw.baynet_quote(1, '', 0,'16521', 'BNS38C',12, 4,0, 2, 1, 0,'','alexm','0146','SPT','','Byron Jessie','7-10 days ARO','','90217CC103211',0,'HTPP 2in Sq;Width:4.23 FT;Length: 67.87 FT;Mesh Color: White;Sewn Border: MFP Braid 3/8in x 1000ft Black;Woven Border: Dyneema Braid 1/2in x 600ft Si;Addl: DNR500 Sand Polyester Knit Mes;',1,0,12)
ERROR - 2017-10-02 14:35:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(9ff1cc80-aac4-5f2e-86cc-44d7546fe7fd) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 498 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-02 14:35:48 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(9ff1cc80-aac4-5f2e-86cc-44d7546fe7fd) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 498 at SQL statement - Invalid query: SELECT * from qw.baynet_quote(1, '', 0,'16521', 'BNS38C',12, 4,0, 2, 1, 0,'','alexm','0146','SPT','','Byron Jessie','7-10 days ARO','','90217CC103211',0,'HTPP 2in Sq;Width:4.23 FT;Length: 67.87 FT;Mesh Color: White;Sewn Border: MFP Braid 3/8in x 1000ft Black;Woven Border: Dyneema Braid 1/2in x 600ft Si;Addl: DNR500 Sand Polyester Knit Mes;',1,0,12)
ERROR - 2017-10-02 14:35:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(27f9dac4-8b20-5e01-a056-f837c6b3bec8) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 498 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-02 14:35:48 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(27f9dac4-8b20-5e01-a056-f837c6b3bec8) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 498 at SQL statement - Invalid query: SELECT * from qw.baynet_quote(1, '', 0,'16521', 'BNS38C',12, 4,0, 2, 1, 0,'','alexm','0146','SPT','','Byron Jessie','7-10 days ARO','','90217CC103211',0,'HTPP 2in Sq;Width:4.23 FT;Length: 67.87 FT;Mesh Color: White;Sewn Border: MFP Braid 3/8in x 1000ft Black;Woven Border: Dyneema Braid 1/2in x 600ft Si;Addl: DNR500 Sand Polyester Knit Mes;',1,0,12)
ERROR - 2017-10-02 14:35:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(8f752846-d8d7-568d-9d30-1e28334f3f81) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)&quot;
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 498 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-02 14:35:49 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(8f752846-d8d7-568d-9d30-1e28334f3f81) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code,
  ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, contact_fax, contact_email, accountnumber, contact_companyname)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND (b.sagecustomernumber = in_customer or b.accountnumber::TEXT = in_customer)
                    AND (a.address1_name = in_contact or (a.firstname || ' ' || a.lastname) = in_contact)),
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
  coalesce(c.businessphone, address1_phone),
  coalesce(a.address1_street1, ''),
  coalesce(a.address1_city, ''),
  coalesce(a.address1_stateprovince, ''),
  coalesce(a.address1_zippostalcode, ''),
  coalesce( a.address1_countryregion, ''),
  '',
  coalesce(c.businessphone, address1_phone),
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
  c.email,
  a.accountnumber,
  a.companyname
FROM  cust a
  left join cont c on (a.crm_guid  = c.crm_accountid)"
PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 498 at SQL statement - Invalid query: SELECT * from qw.baynet_quote(1, '', 0,'16521', 'BNS38C',12, 4,0, 2, 1, 0,'','alexm','0146','SPT','','Byron Jessie','7-10 days ARO','','90217CC103211',0,'HTPP 2in Sq;Width:4.23 FT;Length: 67.87 FT;Mesh Color: White;Sewn Border: MFP Braid 3/8in x 1000ft Black;Woven Border: Dyneema Braid 1/2in x 600ft Si;Addl: DNR500 Sand Polyester Knit Mes;',1,0,12)
ERROR - 2017-10-02 14:36:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 14:36:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 14:56:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 14:56:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 14:57:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 14:57:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 14:58:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 14:58:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:17:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:17:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:23:25 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:23:25 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:34:00 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:34:00 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:37:02 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:37:02 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:39:19 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:39:19 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:39:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:39:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:39:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:39:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:43:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:43:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:43:48 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:43:48 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:45:31 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:45:31 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:45:51 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:45:51 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 15:47:32 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 15:47:32 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 16:00:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 16:00:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 18:05:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-02 18:05:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-02 17:12:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:12:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:14:16 --> Severity: Notice --> Undefined offset: 1 /var/www/html/application/controllers/frontend/Home.php 544
ERROR - 2017-10-02 17:14:16 --> Severity: Notice --> Trying to get property of non-object /var/www/html/application/controllers/frontend/Home.php 545
ERROR - 2017-10-02 17:14:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:14:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:14:43 --> Severity: Notice --> Undefined offset: 1 /var/www/html/application/controllers/frontend/Home.php 544
ERROR - 2017-10-02 17:14:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/application/controllers/frontend/Home.php 545
ERROR - 2017-10-02 17:14:43 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:14:43 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:16:17 --> Severity: Notice --> Undefined offset: 1 /var/www/html/application/controllers/frontend/Home.php 544
ERROR - 2017-10-02 17:16:17 --> Severity: Notice --> Trying to get property of non-object /var/www/html/application/controllers/frontend/Home.php 545
ERROR - 2017-10-02 17:16:17 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:16:17 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:30:18 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:30:18 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:34:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:34:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:35:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:35:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:41:56 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:41:56 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:42:45 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:42:45 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:43:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:43:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:45:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:45:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 18:46:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-02 18:46:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-02 18:48:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-02 18:48:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-02 17:52:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:52:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 18:52:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-02 18:52:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-02 18:52:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-10-02 18:52:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-10-02 17:53:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:53:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:54:51 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:54:51 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:55:01 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:55:01 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 17:55:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 17:55:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 18:09:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 18:09:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 18:10:58 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 18:10:58 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 18:17:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 18:17:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 18:34:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 18:34:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 18:49:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 18:49:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 19:33:22 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 19:33:22 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 19:35:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 19:35:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 19:53:04 --> Severity: Notice --> Undefined offset: 1 /var/www/html/application/controllers/frontend/Home.php 544
ERROR - 2017-10-02 19:53:04 --> Severity: Notice --> Trying to get property of non-object /var/www/html/application/controllers/frontend/Home.php 545
ERROR - 2017-10-02 19:53:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 19:53:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 20:19:05 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 20:19:05 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 20:37:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 20:37:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-02 20:42:12 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-02 20:42:12 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
