<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-08-08 06:31:54 --> Severity: Notice --> Undefined property: stdClass::$get_quote_detail_items /var/www/html/application/helpers/common_helper.php 3688
ERROR - 2017-08-08 12:34:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-08 12:34:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-08 14:49:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-08 14:49:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-08 15:04:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-08 15:04:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-08 15:45:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-08 15:45:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-08 15:51:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-08 15:51:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-08 15:51:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-08 15:51:33 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-08 15:27:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(30)
CONTEXT:  SQL statement &quot;insert into insynch.tomas_so_salesorderheader (
            salesorderno, -- orderdate, -- orderstatus, masterrepeatingorderno,
            ardivisionno, customerno,
            warehousecode,
            -- comment,
            salespersondivisionno, salespersonno,
            taxableamt, nontaxableamt,
            webordernumber, -- we will store QuoteWeb QuoteID in webordernumber
            jt158_wtclass,
			udf_proposal_num
            )
	SELECT quote_id, division_id, customer_id, shipping_location, --quote_description,
		division_id, salesperson_id,
		0.0, 0.0,
		proposal_num,
		wt_class, quote_id
	FROM qw.qw_quote_header a
	where quote_id = in_quote_id&quot;
PL/pgSQL function qw.copy_quote_to_sage(character varying,character varying) line 7 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-08 15:27:28 --> Query error: ERROR:  value too long for type character varying(30)
CONTEXT:  SQL statement "insert into insynch.tomas_so_salesorderheader (
            salesorderno, -- orderdate, -- orderstatus, masterrepeatingorderno,
            ardivisionno, customerno,
            warehousecode,
            -- comment,
            salespersondivisionno, salespersonno,
            taxableamt, nontaxableamt,
            webordernumber, -- we will store QuoteWeb QuoteID in webordernumber
            jt158_wtclass,
			udf_proposal_num
            )
	SELECT quote_id, division_id, customer_id, shipping_location, --quote_description,
		division_id, salesperson_id,
		0.0, 0.0,
		proposal_num,
		wt_class, quote_id
	FROM qw.qw_quote_header a
	where quote_id = in_quote_id"
PL/pgSQL function qw.copy_quote_to_sage(character varying,character varying) line 7 at SQL statement - Invalid query: select * from qw.copy_quote_to_sage('24562418-b6fa-5fd0-924a-b1f97dc7530d','sudiptab')
