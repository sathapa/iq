<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-02-22 03:14:18 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 902
ERROR - 2018-02-22 03:14:18 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 913
ERROR - 2018-02-22 13:09:41 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 902
ERROR - 2018-02-22 13:09:41 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 913
ERROR - 2018-02-22 13:14:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 902
ERROR - 2018-02-22 13:14:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 913
ERROR - 2018-02-22 13:51:58 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 908
ERROR - 2018-02-22 13:51:58 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 919
ERROR - 2018-02-22 14:32:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(4ce71630-af48-51b6-ac32-f4403cfdd258) already exists.
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
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text,double precision,double precision) line 686 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-02-22 14:32:07 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(4ce71630-af48-51b6-ac32-f4403cfdd258) already exists.
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
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text,double precision,double precision) line 686 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'16052', '1250', 
			'209-045-06', 4, 3, 'TW84PYBK', 'NONE', 'NONE', 'THPY69BK', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0003','IND','','Kevin Kelley',
			   '7-10 days ARO','','022218BS0851','',0,'',
			   '',0,0)
ERROR - 2018-02-22 14:32:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2018-02-22 14:32:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(7c21522a-394b-59f0-852b-55d72665b0c1) already exists.
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
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text,double precision,double precision) line 686 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-02-22 14:32:09 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(7c21522a-394b-59f0-852b-55d72665b0c1) already exists.
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
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text,double precision,double precision) line 686 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'16052', '1250', 
			'209-045-06', 4, 3, 'TW84PYBK', 'NONE', 'NONE', 'THPY69BK', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0003','IND','','Kevin Kelley',
			   '7-10 days ARO','','022218BS0851','',0,'',
			   '',0,0)
ERROR - 2018-02-22 14:32:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2018-02-22 14:50:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 908
ERROR - 2018-02-22 14:50:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 919
ERROR - 2018-02-22 15:01:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-02-22 15:01:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-02-22 17:15:44 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 908
ERROR - 2018-02-22 17:15:44 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 919
ERROR - 2018-02-22 18:48:32 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 908
ERROR - 2018-02-22 18:48:32 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 919
ERROR - 2018-02-22 19:17:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 908
ERROR - 2018-02-22 19:17:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 919
ERROR - 2018-02-22 19:43:55 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 87
