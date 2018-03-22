<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-02-06 19:10:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-06 19:10:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-06 19:53:51 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-06 19:53:51 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-06 20:44:11 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-06 20:44:29 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-06 21:06:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-06 21:06:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-06 21:06:18 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-06 21:06:18 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-06 21:06:36 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-06 21:06:36 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-06 21:09:33 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-06 21:09:33 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-06 21:11:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(a3f80746-5af1-5082-ac56-936ff4fcffb3) already exists.
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
PL/pgSQL function qw.cclimbnet_quote(integer,character varying,integer,character varying,integer,character varying,character varying,integer,double precision,double precision,integer,double precision,double precision,double precision,integer,double precision,integer,double precision,character varying,character varying,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text,double precision,double precision) line 327 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-02-06 21:11:23 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(a3f80746-5af1-5082-ac56-936ff4fcffb3) already exists.
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
PL/pgSQL function qw.cclimbnet_quote(integer,character varying,integer,character varying,integer,character varying,character varying,integer,double precision,double precision,integer,double precision,double precision,double precision,integer,double precision,integer,double precision,character varying,character varying,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text,double precision,double precision) line 327 at SQL statement - Invalid query: SELECT * from qw.cclimbnet_quote(1, '', 0,'16052', 1, 'CCRN', 'RDNB050SI', 1, 2, 3, 1, 3, 0, 0, '4', '5', '2', 10, 'TM12NY', 'B124.0', 2, 0,'','santosht','0003','IND','','Kevin Kelley','7-10 days ARO','','020618BS1610',0,'','',0,0)
ERROR - 2018-02-06 21:11:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2018-02-06 21:12:32 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-06 21:12:32 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-06 21:13:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-06 21:13:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-06 21:13:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-02-06 21:13:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-02-06 23:51:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-02-06 23:51:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
