<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-08-23 14:45:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-23 14:45:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-23 15:20:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-23 15:20:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-23 19:31:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;-&quot;
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-23 19:31:22 --> Query error: ERROR:  invalid input syntax for integer: "-"
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(1, '', 0,'40-ROYA01', 'LPN',42, 4,36, 'RNF16BK','NONE', 'NONE', 'NONE', 1, 1, 0,'','hlondon','9999','BAY','NEW','Anant Singh','7-10 days ARO','','082317HL1531',0,'Netform Lily Pad Net with Associated SS Attachment Hardware : NO SPREADER BARS;Size: 42.00 FT x 4.00 FT;Body Length: 36.00 FT;Rope: 16mm Hercules Rope Black;;','NONE')
ERROR - 2017-08-23 19:31:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;-&quot;
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-23 19:31:24 --> Query error: ERROR:  invalid input syntax for integer: "-"
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(1, '', 0,'40-ROYA01', 'LPN',42, 4,36, 'RNF16BK','NONE', 'NONE', 'NONE', 1, 1, 0,'','hlondon','9999','BAY','NEW','Anant Singh','7-10 days ARO','','082317HL1531',0,'Netform Lily Pad Net with Associated SS Attachment Hardware : NO SPREADER BARS;Size: 42.00 FT x 4.00 FT;Body Length: 36.00 FT;Rope: 16mm Hercules Rope Black;;','NONE')
ERROR - 2017-08-23 19:31:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;-&quot;
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-23 19:31:31 --> Query error: ERROR:  invalid input syntax for integer: "-"
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(1, '', 0,'40-ROYA01', 'LPN',42, 4,36, 'RNF16BK','NONE', 'NONE', 'NONE', 1, 1, 0,'','hlondon','9999','BAY','NEW','Anant Singh','7-10 days ARO','','082317HL1531',0,'Netform Lily Pad Net with Associated SS Attachment Hardware : NO SPREADER BARS;Size: 42.00 FT x 4.00 FT;Body Length: 36.00 FT;Rope: 16mm Hercules Rope Black;;','NONE')
ERROR - 2017-08-23 19:31:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;-&quot;
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-23 19:31:32 --> Query error: ERROR:  invalid input syntax for integer: "-"
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(1, '', 0,'40-ROYA01', 'LPN',42, 4,36, 'RNF16BK','NONE', 'NONE', 'NONE', 1, 1, 0,'','hlondon','9999','BAY','NEW','Anant Singh','7-10 days ARO','','082317HL1531',0,'Netform Lily Pad Net with Associated SS Attachment Hardware : NO SPREADER BARS;Size: 42.00 FT x 4.00 FT;Body Length: 36.00 FT;Rope: 16mm Hercules Rope Black;;','NONE')
ERROR - 2017-08-23 19:31:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;-&quot;
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-23 19:31:33 --> Query error: ERROR:  invalid input syntax for integer: "-"
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(1, '', 0,'40-ROYA01', 'LPN',42, 4,36, 'RNF16BK','NONE', 'NONE', 'NONE', 1, 1, 0,'','hlondon','9999','BAY','NEW','Anant Singh','7-10 days ARO','','082317HL1531',0,'Netform Lily Pad Net with Associated SS Attachment Hardware : NO SPREADER BARS;Size: 42.00 FT x 4.00 FT;Body Length: 36.00 FT;Rope: 16mm Hercules Rope Black;;','NONE')
ERROR - 2017-08-23 19:31:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;-&quot;
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-23 19:31:33 --> Query error: ERROR:  invalid input syntax for integer: "-"
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(1, '', 0,'40-ROYA01', 'LPN',42, 4,36, 'RNF16BK','NONE', 'NONE', 'NONE', 1, 1, 0,'','hlondon','9999','BAY','NEW','Anant Singh','7-10 days ARO','','082317HL1531',0,'Netform Lily Pad Net with Associated SS Attachment Hardware : NO SPREADER BARS;Size: 42.00 FT x 4.00 FT;Body Length: 36.00 FT;Rope: 16mm Hercules Rope Black;;','NONE')
ERROR - 2017-08-23 19:31:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;-&quot;
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-23 19:31:34 --> Query error: ERROR:  invalid input syntax for integer: "-"
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(1, '', 0,'40-ROYA01', 'LPN',42, 4,36, 'RNF16BK','NONE', 'NONE', 'NONE', 1, 1, 0,'','hlondon','9999','BAY','NEW','Anant Singh','7-10 days ARO','','082317HL1531',0,'Netform Lily Pad Net with Associated SS Attachment Hardware : NO SPREADER BARS;Size: 42.00 FT x 4.00 FT;Body Length: 36.00 FT;Rope: 16mm Hercules Rope Black;;','NONE')
ERROR - 2017-08-23 19:31:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;-&quot;
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-23 19:31:48 --> Query error: ERROR:  invalid input syntax for integer: "-"
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(1, '', 0,'40-ROYA01', 'LPN',42, 4,36, 'RNF16BK','NONE', 'NONE', 'NONE', 1, 1, 0,'','hlondon','9999','BAY','NEW','Anant Singh','7-10 days ARO','','082317HL1531',0,'Netform Lily Pad Net with Associated SS Attachment Hardware : NO SPREADER BARS;Size: 42.00 FT x 4.00 FT;Body Length: 36.00 FT;Rope: 16mm Hercules Rope Black;;','NONE')
ERROR - 2017-08-23 19:32:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;-&quot;
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-23 19:32:14 --> Query error: ERROR:  invalid input syntax for integer: "-"
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(1, '', 0,'40-ROYA01', 'LPN-SB6',42, 6,36, 'RNF16BK','NONE', 'NONE', 'NONE', 1, 1, 0,'','hlondon','0370','BAY','NEW','Anant Singh','7-10 days ARO','','082317JR1532',0,'Netform Lily Pad Net with Spreader Bars and Associated SS Attachment Hardware and Support  Cables;Size: 42.00 FT x 6.00 FT;Body Length: 36.00 FT;Rope: 16mm Hercules Rope Black;;','NONE')
ERROR - 2017-08-23 19:32:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;-&quot;
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement &quot;select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-23 19:32:16 --> Query error: ERROR:  invalid input syntax for integer: "-"
LINE 17:   substr(a.sagecustomernumber, '-', 10),
                                        ^
QUERY:  INSERT INTO qw.qw_quote_header(
  quote_id, division_id, customer_id, quote_status, quote_description, quote_date, salesperson_id,
  contact_name, contact_phone, contact_address, contact_city, contact_state, contact_zip, contact_country,
  shipto_name, shipto_phone, shipto_address, shipto_city, shipto_state, shipto_zip, shipto_country, tax_code, term_code, ship_method, shipping_location, created_by, created_on, wt_class,
  crm_contactid, crm_opportunity, aro_leadtime, proposal_num, fax_number)
WITH cont AS (SELECT a.*
              FROM qw.crm_contact a, qw.crm_customer b
              WHERE a.crm_accountid = b.crm_guid
                    AND b.accountnumber = in_customer
                    AND a.address1_name = in_contact),
    cust AS (SELECT b.*
             FROM qw.crm_customer b
             WHERE b.accountnumber = in_customer)
SELECT
  in_quote_id,
  left(a.sagecustomernumber, 2),
  substr(a.sagecustomernumber, '-', 10),
  'Draft',
  '',
  now(),
  in_salesperson,
  '',
  c.businessphone,
  c.address1_street1,
  c.address1_city,
  c.address1_stateprovince,
  c.address1_zip,
  c.address1_country,
  '',
  c.address1_phone,
  '',
  '',
  '',
  '',
  '',
  '',
  a.termscode,
  a.address1_shippingmethod,
  qw.get_location(1, left(a.sagecustomernumber, 2), in_product, 'MTO', 'XX'),
  in_userid,
  now(),
  in_wtclass,
  in_contact,
  in_opportunity,
  in_leadtime,
  in_proposalnum,
  c.fax
FROM cont c, cust a
CONTEXT:  PL/pgSQL function qw.create_quote_header(character varying,character varying,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 6 at SQL statement
SQL statement "select * from qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass, in_opportunity, in_contact, in_leadtime, in_proposalnum)"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,character varying) line 410 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(1, '', 0,'40-ROYA01', 'LPN-SB6',42, 6,36, 'RNF16BK','NONE', 'NONE', 'NONE', 1, 1, 0,'','hlondon','0370','BAY','NEW','Anant Singh','7-10 days ARO','','082317JR1532',0,'Netform Lily Pad Net with Spreader Bars and Associated SS Attachment Hardware and Support  Cables;Size: 42.00 FT x 6.00 FT;Body Length: 36.00 FT;Rope: 16mm Hercules Rope Black;;','NONE')
ERROR - 2017-08-23 21:07:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-23 21:07:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-23 21:10:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-23 21:10:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-23 21:11:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-23 21:11:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-23 21:16:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-23 21:16:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-23 21:21:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-23 21:21:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
