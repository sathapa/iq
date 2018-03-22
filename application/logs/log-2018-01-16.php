<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-16 00:09:30 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 00:09:30 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 00:10:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 00:10:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 00:16:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 00:16:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 00:17:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(ad0db324-4968-5c44-83cd-9a3be164a3f3) already exists.
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
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text,double precision,double precision) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-16 00:17:57 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(ad0db324-4968-5c44-83cd-9a3be164a3f3) already exists.
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
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text,double precision,double precision) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'16052', '500', 
			'200-040-02', 4, 3, 'TW84PYBK', 'RMFPB037BK', 'NONE', 'THPY69BK', 'GMT-SP2-BK',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0003','BAY','','Kevin Kelley',
			   '7-10 days ARO','','011518BS1916','',0,'',
			   '',0,0)
ERROR - 2018-01-16 00:17:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2018-01-16 00:18:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(ac488811-edd6-55a4-b3b2-625da16c9f81) already exists.
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
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text,double precision,double precision) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-16 00:18:01 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(ac488811-edd6-55a4-b3b2-625da16c9f81) already exists.
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
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text,double precision,double precision) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'16052', '500', 
			'200-040-02', 4, 3, 'TW84PYBK', 'RMFPB037BK', 'NONE', 'THPY69BK', 'GMT-SP2-BK',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0003','BAY','','Kevin Kelley',
			   '7-10 days ARO','','011518BS1916','',0,'',
			   '',0,0)
ERROR - 2018-01-16 00:18:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2018-01-16 00:18:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(975c1675-f5f7-5553-8eb5-85e2d043eda6) already exists.
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
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text,double precision,double precision) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-16 00:18:09 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(975c1675-f5f7-5553-8eb5-85e2d043eda6) already exists.
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
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text,double precision,double precision) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'16052', '500', 
			'200-040-02', 4, 3, 'TW84PYBK', 'RMFPB037BK', 'NONE', 'THPY69BK', 'GMT-SP2-BK',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0003','BAY','','Kevin Kelley',
			   '7-10 days ARO','','011518BS1916','',0,'',
			   '',0,0)
ERROR - 2018-01-16 00:18:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2018-01-16 00:18:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 00:18:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 03:29:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 03:29:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 04:56:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_inventory_wip_report() does not exist
LINE 1: select * from qw.get_inventory_wip_report()
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-16 04:56:40 --> Query error: ERROR:  function qw.get_inventory_wip_report() does not exist
LINE 1: select * from qw.get_inventory_wip_report()
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_inventory_wip_report()
ERROR - 2018-01-16 05:46:54 --> Severity: Notice --> Undefined variable: inventoriesWip /var/www/html/application/controllers/frontend/Inventory.php 266
ERROR - 2018-01-16 05:48:19 --> Severity: Notice --> Undefined variable: inventoriesWip /var/www/html/application/controllers/frontend/Inventory.php 266
ERROR - 2018-01-16 05:48:25 --> Severity: Notice --> Undefined variable: inventoriesWip /var/www/html/application/controllers/frontend/Inventory.php 266
ERROR - 2018-01-16 05:48:31 --> Severity: Notice --> Undefined variable: inventoriesWip /var/www/html/application/controllers/frontend/Inventory.php 266
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:11 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:12 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 05:49:20 --> Severity: Notice --> Undefined variable: itemCode /var/www/html/application/views/frontend/inventory_wip.php 64
ERROR - 2018-01-16 07:46:43 --> Severity: Notice --> Undefined variable: items /var/www/html/application/controllers/frontend/Excel.php 682
ERROR - 2018-01-16 07:46:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/controllers/frontend/Excel.php 683
ERROR - 2018-01-16 07:49:43 --> Severity: Notice --> Undefined variable: items /var/www/html/application/controllers/frontend/Excel.php 682
ERROR - 2018-01-16 07:49:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/controllers/frontend/Excel.php 683
ERROR - 2018-01-16 07:54:11 --> Severity: Notice --> Undefined variable: items /var/www/html/application/controllers/frontend/Excel.php 682
ERROR - 2018-01-16 07:54:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/application/controllers/frontend/Excel.php 683
ERROR - 2018-01-16 09:58:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 09:58:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 09:59:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 09:59:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 10:26:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_prod_order_status2&quot; does not exist
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
ERROR - 2018-01-16 10:26:30 --> Query error: ERROR:  relation "qw.qw_prod_order_status2" does not exist
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
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 23 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-16','2018-01-16','All',
			'All','','All')
ERROR - 2018-01-16 10:37:52 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2018-01-16 11:04:55 --> Severity: error --> Exception: syntax error, unexpected '$invoice_name' (T_VARIABLE) /var/www/html/application/controllers/frontend/Orders.php 150
ERROR - 2018-01-16 11:07:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:07:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:10:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:10:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:10:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:10:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:11:33 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2018-01-16 11:12:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:12:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:16:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:16:19 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:17:37 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-16 11:17:37 --> Severity: Warning --> file_get_contents(https://iq-uat.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-16 11:17:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:17:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:18:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:18:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:30:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:30:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:32:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:32:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:33:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:33:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:34:43 --> Severity: Warning --> Division by zero /var/www/html/application/libraries/mpdf60/mpdf.php 24862
ERROR - 2018-01-16 11:34:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:34:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:35:44 --> Severity: Warning --> Division by zero /var/www/html/application/libraries/mpdf60/mpdf.php 24862
ERROR - 2018-01-16 11:35:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:35:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:36:39 --> Severity: Warning --> Division by zero /var/www/html/application/libraries/mpdf60/mpdf.php 24862
ERROR - 2018-01-16 11:36:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:36:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:37:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:37:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:39:24 --> Severity: Warning --> Division by zero /var/www/html/application/libraries/mpdf60/mpdf.php 24862
ERROR - 2018-01-16 11:39:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:39:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:39:37 --> Severity: Warning --> Division by zero /var/www/html/application/libraries/mpdf60/mpdf.php 24862
ERROR - 2018-01-16 11:39:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:39:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:40:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:40:17 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:41:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:41:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:43:44 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-16 11:43:44 --> Severity: Warning --> file_get_contents(https://iq-uat.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-16 11:43:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:43:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:45:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:45:21 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:46:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:46:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 11:56:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 11:56:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:01:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:01:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:04:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:04:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:06:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:06:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:06:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:06:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:07:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:07:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:09:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:09:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> fopen(/var/www/html/application/libraries/mpdf60/ttfontdata/dejavuserifcondensedB.mtx.php): failed to open stream: Permission denied /var/www/html/application/libraries/mpdf60/mpdf.php 3400
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/application/libraries/mpdf60/mpdf.php 3401
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> fclose() expects parameter 1 to be resource, boolean given /var/www/html/application/libraries/mpdf60/mpdf.php 3402
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> fopen(/var/www/html/application/libraries/mpdf60/ttfontdata/dejavuserifcondensedB.cw.dat): failed to open stream: Permission denied /var/www/html/application/libraries/mpdf60/mpdf.php 3403
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/application/libraries/mpdf60/mpdf.php 3404
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> fclose() expects parameter 1 to be resource, boolean given /var/www/html/application/libraries/mpdf60/mpdf.php 3405
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> fopen(/var/www/html/application/libraries/mpdf60/ttfontdata/dejavuserifcondensedB.gid.dat): failed to open stream: Permission denied /var/www/html/application/libraries/mpdf60/mpdf.php 3407
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> fwrite() expects parameter 1 to be resource, boolean given /var/www/html/application/libraries/mpdf60/mpdf.php 3408
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> fclose() expects parameter 1 to be resource, boolean given /var/www/html/application/libraries/mpdf60/mpdf.php 3409
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/application/libraries/mpdf60/mpdf.php 8314
ERROR - 2018-01-16 12:10:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:11:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:11:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:13:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:13:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:13:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:13:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:16:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:16:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:18:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:18:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:19:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:19:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:20:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:20:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:21:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:21:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:21:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:21:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:21:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:21:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:22:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:24:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:24:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:29:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:29:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:31:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:31:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:32:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:32:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:33:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:33:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:33:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:33:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:34:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:34:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:37:07 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-16 12:37:07 --> Severity: Warning --> file_get_contents(https://iq-uat.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-16 12:37:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:37:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:37:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:37:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:38:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:38:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:39:25 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-16 12:39:25 --> Severity: Warning --> file_get_contents(https://iq-uat.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-16 12:39:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:39:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:39:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:39:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:45:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:45:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 12:48:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 12:48:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 13:25:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 13:25:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 13:27:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 13:27:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 13:32:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 13:32:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 13:42:05 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2018-01-16 13:43:35 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-16 13:43:35 --> Severity: Warning --> file_get_contents(https://iq-uat.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-16 13:43:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 13:43:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 13:44:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 13:44:47 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 13:49:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 13:49:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 13:52:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 13:52:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 14:18:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 14:18:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 14:19:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 14:19:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 14:20:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-16 14:20:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-16 15:57:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 15:57:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 16:00:24 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 16:00:24 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 16:01:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 16:01:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 18:43:49 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2018-01-16 18:44:13 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2018-01-16 18:44:54 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2018-01-16 19:02:42 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 19:02:42 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 19:29:19 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-16 19:41:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_prod_order_status2&quot; does not exist
LINE 26:   FROM qw.qw_prod_order_status2 a
                ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'In Progress', 'Completed'))
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
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-16 19:41:36 --> Query error: ERROR:  relation "qw.qw_prod_order_status2" does not exist
LINE 26:   FROM qw.qw_prod_order_status2 a
                ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'In Progress', 'Completed'))
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
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-16','2018-01-16','All',
			'All','','All')
ERROR - 2018-01-16 19:41:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.qw_prod_order_status2&quot; does not exist
LINE 26:   FROM qw.qw_prod_order_status2 a
                ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'In Progress', 'Completed'))
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
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate &gt;= in_ship_from AND a.shipexpiredate &lt; (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-16 19:41:56 --> Query error: ERROR:  relation "qw.qw_prod_order_status2" does not exist
LINE 26:   FROM qw.qw_prod_order_status2 a
                ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(so))) FROM (
  WITH diff AS (

  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderhistoryheader a, sage.so_salesorderhistorydetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode
  UNION
  SELECT DISTINCT a.salesorderno, TRUE AS whflag
  FROM sage.so_salesorderheader  a, sage.so_salesorderdetail b
  WHERE a.salesorderno = b.salesorderno
  AND a.warehousecode != b.warehousecode),
  prod_status AS ( SELECT DISTINCT salesorderno, jobstatus FROM qw.qw_sales_order_details WHERE jobstatus IN ( 'In Progress', 'Completed'))
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
  SELECT DISTINCT a.*, COALESCE (diff.whflag, FALSE ) AS disclaimer_flag, COALESCE (prod_status.jobstatus, 'Not Started' ) AS production_status, COALESCE (tracking_ref, 'N/A') AS tracking_ref
  --'N/A' as tracking_ref
  FROM qw.qw_prod_order_status2 a
  LEFT JOIN qw.qw_tracking_view b USING (salesorderno)
  LEFT JOIN diff USING (salesorderno)
  LEFT JOIN prod_status USING (salesorderno)
  --LEFT JOIN mfs USING (salesorderno)
  WHERE (initcap(in_order_status) = 'All' OR a.orderstatus = upper( LEFT (in_order_status, 1)))
  AND (initcap(in_ship_location) = 'All' OR a.warehousecode = in_ship_location)
  AND (initcap(in_ship_via) = 'All' OR a.shipvia = in_ship_via)
  AND (in_customer = 'All' OR btrim(a.customerno) = btrim(in_customer))
  AND (a.shipexpiredate >= in_ship_from AND a.shipexpiredate < (in_ship_to + INTERVAL '1 day'))
  AND (btrim(in_refnum) = '' OR (a.salesorderno LIKE '%' || in_refnum OR a.customerpono = in_refnum OR a.udf_proposal_num = in_refnum)
  --OR (in_refnum = 'MFS' AND mfs.mfsflag = TRUE )
  )
  ORDER BY a.wt_class, a.customerno, a.salesorderno
  ) so
CONTEXT:  PL/pgSQL function qw.get_all_orders_by_date(text,date,date,text,text,text,text) line 40 at RETURN - Invalid query: select * from qw.get_all_orders_by_date('All','2018-01-16','2018-01-16','All',
			'All','','All')
ERROR - 2018-01-16 19:50:00 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 19:50:00 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 20:26:40 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-16 20:42:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 20:42:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 20:45:27 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-16 20:45:27 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-16 20:51:44 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-16 20:51:51 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-16 20:53:49 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-16 20:58:09 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-16 20:58:23 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-16 21:11:52 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-16 21:11:59 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
