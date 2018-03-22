<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-29 01:26:35 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-29 01:26:35 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-29 02:08:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(47ae4239-1445-5238-89ff-e21df8522a66) already exists.
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
SQL statement &quot;SELECT
        qw.create_quote_header(o_quoteid, in_customer, 'Rope', in_userid, in_salesperson, in_wtclass, in_opportunity,
                               in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,text,double precision,double precision) line 218 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-29 02:08:23 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(47ae4239-1445-5238-89ff-e21df8522a66) already exists.
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
SQL statement "SELECT
        qw.create_quote_header(o_quoteid, in_customer, 'Rope', in_userid, in_salesperson, in_wtclass, in_opportunity,
                               in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,text,double precision,double precision) line 218 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '16052','{"0":{"item":"RHT3S125SD-G","quantity":"1","uom":"EA","tolerance":"1-2"},"1":{"item":"RHT3S050SD-G","quantity":"1","uom":"EA","tolerance":"1-2"}}',
				2, 0, '','santosht','0003','IND','rht3s050',
				'Kevin Kelley','7-10 days ARO','012818BS2026','',0,0)
ERROR - 2018-01-29 02:08:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2018-01-29 02:08:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_header_idx1&quot;
DETAIL:  Key (quote_id)=(116acc4d-162c-535c-9f9e-8f9e74683610) already exists.
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
SQL statement &quot;SELECT
        qw.create_quote_header(o_quoteid, in_customer, 'Rope', in_userid, in_salesperson, in_wtclass, in_opportunity,
                               in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,text,double precision,double precision) line 218 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-29 02:08:33 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_header_idx1"
DETAIL:  Key (quote_id)=(116acc4d-162c-535c-9f9e-8f9e74683610) already exists.
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
SQL statement "SELECT
        qw.create_quote_header(o_quoteid, in_customer, 'Rope', in_userid, in_salesperson, in_wtclass, in_opportunity,
                               in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,text,double precision,double precision) line 218 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '16052','{"0":{"item":"RHT3S125SD-G","quantity":"1","uom":"EA","tolerance":"1-2"},"1":{"item":"RHT3S050SD-G","quantity":"1","uom":"EA","tolerance":"1-2"}}',
				2, 0, '','santosht','0003','IND','rht3s050',
				'Kevin Kelley','7-10 days ARO','012818BS2026','',0,0)
ERROR - 2018-01-29 02:08:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2018-01-29 02:08:39 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-29 02:08:39 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-29 02:09:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(c8f13ff8-8774-5272-8dcb-1e447fe3ba78, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, calculator_price, overridden_price, function_param)
      SELECT
        o_quoteid,
        id,
        --coalesce(last_quote_line_no, 0) + rank() OVER (ORDER BY a.itemcode, a.qty) :: INTEGER,
        a.itemcode,
        a.description,
        1,
        --a.qty,
        1,
        --a.qty,
        (a.costperunit + a.laborcost),
        (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
         (1 - (in_discount / 100.00))) :: NUMERIC(12, 5),
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', a.itemcode, 'MTO', 'all'),
        'Rope',
        in_calcprice,
        in_overrideprice,
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,text,double precision,double precision) line 243 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-29 02:09:27 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(c8f13ff8-8774-5272-8dcb-1e447fe3ba78, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, calculator_price, overridden_price, function_param)
      SELECT
        o_quoteid,
        id,
        --coalesce(last_quote_line_no, 0) + rank() OVER (ORDER BY a.itemcode, a.qty) :: INTEGER,
        a.itemcode,
        a.description,
        1,
        --a.qty,
        1,
        --a.qty,
        (a.costperunit + a.laborcost),
        (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
         (1 - (in_discount / 100.00))) :: NUMERIC(12, 5),
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', a.itemcode, 'MTO', 'all'),
        'Rope',
        in_calcprice,
        in_overrideprice,
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,text,double precision,double precision) line 243 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'c8f13ff8-8774-5272-8dcb-1e447fe3ba78',0, '18243','{"0":{"item":"RHT3S050SD-G","quantity":"2","uom":"EA","tolerance":"1-2"}}',
				2, 0, '','santosht','1351','SAF','',
				'Kameron Kelly','7-10 days ARO','012818BH2108','',0,0)
ERROR - 2018-01-29 04:35:09 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 04:40:30 --> Severity: error --> Exception: syntax error, unexpected 'if' (T_IF) /var/www/html/application/controllers/frontend/Orders.php 108
ERROR - 2018-01-29 04:41:37 --> Severity: Notice --> Undefined variable: folder /var/www/html/application/views/frontend/sales-order-pdf.php 25
ERROR - 2018-01-29 04:42:31 --> Severity: Notice --> Undefined variable: folder /var/www/html/application/views/frontend/sales-order-pdf.php 25
ERROR - 2018-01-29 04:44:47 --> Severity: Notice --> Undefined variable: salesOrders /var/www/html/application/controllers/frontend/Orders.php 113
ERROR - 2018-01-29 04:52:40 --> Severity: Notice --> Undefined variable: folder /var/www/html/application/views/frontend/sales-order-pdf.php 25
ERROR - 2018-01-29 04:53:00 --> Severity: Notice --> Undefined variable: folder /var/www/html/application/views/frontend/sales-order-pdf.php 25
ERROR - 2018-01-29 04:58:07 --> Severity: error --> Exception: syntax error, unexpected ',' /var/www/html/application/views/frontend/sales-order-pdf.php 28
ERROR - 2018-01-29 04:58:25 --> Severity: Notice --> Undefined variable: pathinfo /var/www/html/application/views/frontend/sales-order-pdf.php 28
ERROR - 2018-01-29 04:58:25 --> Severity: error --> Exception: Function name must be a string /var/www/html/application/views/frontend/sales-order-pdf.php 28
ERROR - 2018-01-29 04:58:34 --> Severity: Notice --> Undefined variable: pathinfo /var/www/html/application/views/frontend/sales-order-pdf.php 28
ERROR - 2018-01-29 04:58:34 --> Severity: error --> Exception: Function name must be a string /var/www/html/application/views/frontend/sales-order-pdf.php 28
ERROR - 2018-01-29 04:58:54 --> Severity: Notice --> Undefined variable: pathinfo /var/www/html/application/views/frontend/sales-order-pdf.php 28
ERROR - 2018-01-29 04:58:54 --> Severity: error --> Exception: Function name must be a string /var/www/html/application/views/frontend/sales-order-pdf.php 28
ERROR - 2018-01-29 05:17:29 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 05:20:01 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 05:21:03 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 05:21:14 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 05:22:18 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 05:22:34 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 05:44:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 05:44:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 06:28:05 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 06:28:33 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 07:32:50 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /var/www/html/application/views/frontend/download-salesorder.php 183
ERROR - 2018-01-29 07:34:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 07:34:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 07:35:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 07:35:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 07:43:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 07:43:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 07:44:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 07:44:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 07:49:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 07:49:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 07:54:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 07:54:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 07:59:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 07:59:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 08:01:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 08:01:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 09:22:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 09:22:55 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 09:33:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 09:33:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 09:34:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 09:34:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 09:35:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 09:35:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 10:02:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 10:02:37 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 10:38:34 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 158
ERROR - 2018-01-29 10:38:34 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 159
ERROR - 2018-01-29 10:39:03 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 158
ERROR - 2018-01-29 10:39:03 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 159
ERROR - 2018-01-29 10:39:09 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 158
ERROR - 2018-01-29 10:39:09 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 159
ERROR - 2018-01-29 10:39:15 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 158
ERROR - 2018-01-29 10:39:15 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 159
ERROR - 2018-01-29 10:39:57 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 158
ERROR - 2018-01-29 10:39:57 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 159
ERROR - 2018-01-29 10:44:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 10:44:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 10:45:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 10:45:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 10:50:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 10:50:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:09:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:09:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:11:08 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-29 11:11:08 --> Severity: Warning --> file_get_contents(https://iq-uat.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-29 11:11:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:11:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:15:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:15:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:16:06 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 11:17:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:17:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:17:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:17:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:17:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:17:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:18:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:18:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:20:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:20:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:21:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:21:51 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:26:58 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 11:31:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:31:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:36:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:36:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:37:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:37:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:39:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:39:03 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:41:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:41:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:42:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:42:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:44:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:44:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:45:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:45:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:47:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:47:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 11:51:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-29 11:51:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-29 12:52:28 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 15:42:01 --> Severity: error --> Exception: Call to undefined function sendProposal() /var/www/html/application/controllers/frontend/Send.php 148
ERROR - 2018-01-29 15:47:31 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-29 15:47:31 --> Severity: Warning --> file_get_contents(https://iq-uat.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-29 15:58:42 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 15:58:54 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:28:59 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:29:12 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:29:23 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:29:33 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:29:47 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:31:10 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:31:20 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:40:55 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:41:03 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:41:22 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:41:31 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:42:35 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:48:00 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 16:48:07 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 20:34:49 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-29 20:34:49 --> Severity: Warning --> file_get_contents(https://iq-uat.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-29 20:39:22 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-29 20:39:22 --> Severity: Warning --> file_get_contents(https://iq-uat.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2018-01-29 22:39:41 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-29 22:39:43 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
