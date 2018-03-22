<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-19 05:33:44 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 05:33:44 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 07:00:56 --> Severity: Notice --> Undefined variable: result /var/www/html/application/helpers/common_helper.php 4556
ERROR - 2017-09-19 07:14:58 --> Severity: error --> Exception: Call to undefined function getUserGroupDetils() /var/www/html/application/controllers/frontend/Crm.php 29
ERROR - 2017-09-19 07:16:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_item_specification() does not exist
LINE 1: select * from qw.get_item_specification()
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 07:16:17 --> Query error: ERROR:  function qw.get_item_specification() does not exist
LINE 1: select * from qw.get_item_specification()
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_item_specification()
ERROR - 2017-09-19 07:56:21 --> Severity: Notice --> Uninitialized string offset: 0 /var/www/html/system/core/CodeIgniter.php 410
ERROR - 2017-09-19 07:56:29 --> Severity: Notice --> Uninitialized string offset: 0 /var/www/html/system/core/CodeIgniter.php 410
ERROR - 2017-09-19 07:56:56 --> Severity: Notice --> Uninitialized string offset: 0 /var/www/html/system/core/CodeIgniter.php 410
ERROR - 2017-09-19 07:57:00 --> Severity: Notice --> Uninitialized string offset: 0 /var/www/html/system/core/CodeIgniter.php 410
ERROR - 2017-09-19 08:04:54 --> Severity: Notice --> Undefined variable: product /var/www/html/application/views/frontend/inventories.php 49
ERROR - 2017-09-19 08:04:54 --> Severity: Notice --> Undefined variable: product /var/www/html/application/views/frontend/inventories.php 49
ERROR - 2017-09-19 08:04:54 --> Severity: Notice --> Undefined variable: product /var/www/html/application/views/frontend/inventories.php 49
ERROR - 2017-09-19 08:04:54 --> Severity: Notice --> Undefined variable: product /var/www/html/application/views/frontend/inventories.php 49
ERROR - 2017-09-19 09:37:33 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 09:37:33 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 11:57:30 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 11:57:30 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 12:07:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(3)
CONTEXT:  SQL statement &quot;INSERT INTO insynch.tomas_so_salesorderdetail(
            salesorderno,
            sequenceno, linekey,
            itemcode,
			itemcodedesc,
            warehousecode,
            unitofmeasure,
			commenttext,
            quantityorderedoriginal, quantityorderedrevised,
            originalunitprice, lastunitprice,
            jt158_wtpart, jt158_wtnumber, jt158_wtstep, jt158_wtfindno, jt158_wtchargepart,
            jt158_wtparent,
			jt158_wtprintpart,
            jt158_wtparentlinekey,
			jt158_wtcreatefrom, jt158_wtcreatesource,
			udf_activity_code, udf_activity_description, costofgoodssoldacctkey, salesacctkey
            )
with quotes as (
		select a.quote_id,  a.quote_line_no, a.product, a.product as itemcode, 0 as detail_id, 'DFLT' as activitycode, '' as activity_description,
		case btrim(coalesce(a.tag_number), '')
		when '' then a.product || ' : ' ||  regexp_replace(a.quote_description, ';', chr(10), 'g')
		ELSE 	coalesce(a.tag_number, '') || chr(10) || a.product || ' : ' ||  regexp_replace(a.quote_description, ';', chr(10), 'g')
		END sage_description,
		'000' as wtstep, a.quantity, 'EA' as uom, a.unitcost, 'A' as jt158_wtfindno,
    'Y' as jt158_wtchargepart,
		'N' as jt158_wtpart,
		'Y' as jt158_wtparent,
		'Y' as jt158_wtprint,
		to_char(a.quote_line_no, '00') as jt158_wtnumber,
		a.production_location as warehouse,
		b.wt_class
		from qw.qw_quote_detail a, qw.qw_quote_header b
	  where a.quote_id = in_quote_id and b.quote_status = 'Draft'
		and a.quote_id = b.quote_id
		union
		select b.quote_id, b.quote_line_no, b.product, b.detail_itemcode as itemcode, b.detail_id, b.detail_activitycode as activitycode, b.activity_description, regexp_replace(b.detail_description, ';', chr(10), 'g') as sage_description,
		b.detail_wt_step as wtstep, (b.detail_quantity * d.quantity) as quantity, b.detail_uom as uom, 0.0  as unitcost, '' as jt158_wtfindno,
		'N' as jt158_wtchargepart,
		'Y' as jt158_wtpart,
		'N' as jt158_wtparent,
		'N' as jt158_wtprint,
		to_char(b.quote_line_no, '00') as jt158_wtnumber,
		b.inventory_location as warehouse,
		c.wt_class
		from qw.qw_quote_detail_items b, qw.qw_quote_header c, qw.qw_quote_detail d
		where b.quote_id = in_quote_id
	  and b.quote_id = c.quote_id
    and c.quote_status = 'Draft'
		and b.quote_id = d.quote_id
    and b.quote_line_no = d.quote_line_no
		and b.detail_itemcode not in ('SETU')
	)
	select 	a.quote_id, rank()  over (order by a.quote_id, a.quote_line_no, a.product,  a.detail_id, a.itemcode asc) || '00000000' as lineseqno,
		to_char(rank()  over (order by a.quote_id, a.quote_line_no, a.product, a.detail_id, a.itemcode asc), '00000') as linekey,
		a.itemcode, a.sage_description, a.warehouse, a.uom, '', a.quantity, a.quantity, a.unitcost, a.unitcost,
		a.jt158_wtpart,  a.jt158_wtnumber, a.wtstep as jt158_wtstep, a.jt158_wtfindno, a.jt158_wtchargepart,
		a.jt158_wtparent,a.jt158_wtprint,
		to_char(rank()  over (order by a.quote_id, a.quote_line_no, a.product asc), '00000') as jt158_wtparentlinekey,
		'M', '', a.activitycode, b.activitydescription, co.accountkey, sa.accountkey
	from quotes a
	 left join sage.jt_activitycode b on (a.activitycode = b.activitycode)
	 left join qw.dwstatic_glaccount_mapping sa on (a.wt_class = sa.wt_class and sa.accounttype = '11')
	 left join qw.dwstatic_glaccount_mapping co on (a.wt_class = co.wt_class and co.accounttype = '12')
	 order by quote_id, quote_line_no, product, detail_id&quot;
PL/pgSQL function qw.copy_quote_to_sage(character varying,character varying) line 29 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 12:07:46 --> Query error: ERROR:  value too long for type character varying(3)
CONTEXT:  SQL statement "INSERT INTO insynch.tomas_so_salesorderdetail(
            salesorderno,
            sequenceno, linekey,
            itemcode,
			itemcodedesc,
            warehousecode,
            unitofmeasure,
			commenttext,
            quantityorderedoriginal, quantityorderedrevised,
            originalunitprice, lastunitprice,
            jt158_wtpart, jt158_wtnumber, jt158_wtstep, jt158_wtfindno, jt158_wtchargepart,
            jt158_wtparent,
			jt158_wtprintpart,
            jt158_wtparentlinekey,
			jt158_wtcreatefrom, jt158_wtcreatesource,
			udf_activity_code, udf_activity_description, costofgoodssoldacctkey, salesacctkey
            )
with quotes as (
		select a.quote_id,  a.quote_line_no, a.product, a.product as itemcode, 0 as detail_id, 'DFLT' as activitycode, '' as activity_description,
		case btrim(coalesce(a.tag_number), '')
		when '' then a.product || ' : ' ||  regexp_replace(a.quote_description, ';', chr(10), 'g')
		ELSE 	coalesce(a.tag_number, '') || chr(10) || a.product || ' : ' ||  regexp_replace(a.quote_description, ';', chr(10), 'g')
		END sage_description,
		'000' as wtstep, a.quantity, 'EA' as uom, a.unitcost, 'A' as jt158_wtfindno,
    'Y' as jt158_wtchargepart,
		'N' as jt158_wtpart,
		'Y' as jt158_wtparent,
		'Y' as jt158_wtprint,
		to_char(a.quote_line_no, '00') as jt158_wtnumber,
		a.production_location as warehouse,
		b.wt_class
		from qw.qw_quote_detail a, qw.qw_quote_header b
	  where a.quote_id = in_quote_id and b.quote_status = 'Draft'
		and a.quote_id = b.quote_id
		union
		select b.quote_id, b.quote_line_no, b.product, b.detail_itemcode as itemcode, b.detail_id, b.detail_activitycode as activitycode, b.activity_description, regexp_replace(b.detail_description, ';', chr(10), 'g') as sage_description,
		b.detail_wt_step as wtstep, (b.detail_quantity * d.quantity) as quantity, b.detail_uom as uom, 0.0  as unitcost, '' as jt158_wtfindno,
		'N' as jt158_wtchargepart,
		'Y' as jt158_wtpart,
		'N' as jt158_wtparent,
		'N' as jt158_wtprint,
		to_char(b.quote_line_no, '00') as jt158_wtnumber,
		b.inventory_location as warehouse,
		c.wt_class
		from qw.qw_quote_detail_items b, qw.qw_quote_header c, qw.qw_quote_detail d
		where b.quote_id = in_quote_id
	  and b.quote_id = c.quote_id
    and c.quote_status = 'Draft'
		and b.quote_id = d.quote_id
    and b.quote_line_no = d.quote_line_no
		and b.detail_itemcode not in ('SETU')
	)
	select 	a.quote_id, rank()  over (order by a.quote_id, a.quote_line_no, a.product,  a.detail_id, a.itemcode asc) || '00000000' as lineseqno,
		to_char(rank()  over (order by a.quote_id, a.quote_line_no, a.product, a.detail_id, a.itemcode asc), '00000') as linekey,
		a.itemcode, a.sage_description, a.warehouse, a.uom, '', a.quantity, a.quantity, a.unitcost, a.unitcost,
		a.jt158_wtpart,  a.jt158_wtnumber, a.wtstep as jt158_wtstep, a.jt158_wtfindno, a.jt158_wtchargepart,
		a.jt158_wtparent,a.jt158_wtprint,
		to_char(rank()  over (order by a.quote_id, a.quote_line_no, a.product asc), '00000') as jt158_wtparentlinekey,
		'M', '', a.activitycode, b.activitydescription, co.accountkey, sa.accountkey
	from quotes a
	 left join sage.jt_activitycode b on (a.activitycode = b.activitycode)
	 left join qw.dwstatic_glaccount_mapping sa on (a.wt_class = sa.wt_class and sa.accounttype = '11')
	 left join qw.dwstatic_glaccount_mapping co on (a.wt_class = co.wt_class and co.accounttype = '12')
	 order by quote_id, quote_line_no, product, detail_id"
PL/pgSQL function qw.copy_quote_to_sage(character varying,character varying) line 29 at SQL statement - Invalid query: select * from qw.copy_quote_to_sage('a2f52ae5-5728-5498-86e7-4fbe51aaf405','jgonchar')
ERROR - 2017-09-19 12:07:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/system/core/Exceptions.php:272) /var/www/html/system/core/Common.php 573
ERROR - 2017-09-19 12:08:35 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 12:08:35 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 12:11:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 12:11:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 12:18:44 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/application/views/frontend/inventories.php 7
ERROR - 2017-09-19 12:19:09 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/application/views/frontend/inventories.php 7
ERROR - 2017-09-19 12:20:01 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/application/views/frontend/inventories.php 7
ERROR - 2017-09-19 12:20:09 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/application/views/frontend/inventories.php 6
ERROR - 2017-09-19 12:20:19 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/application/views/frontend/inventories.php 6
ERROR - 2017-09-19 12:21:00 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/application/views/frontend/inventories.php 6
ERROR - 2017-09-19 12:21:05 --> Severity: error --> Exception: Cannot use object of type stdClass as array /var/www/html/application/views/frontend/inventories.php 6
ERROR - 2017-09-19 12:30:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 12:30:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 12:50:52 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 12:50:52 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 12:51:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 12:51:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 13:31:30 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 13:31:30 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 13:40:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 13:40:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 13:40:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 13:40:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 13:41:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 13:41:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 14:01:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 14:01:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 14:40:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 14:40:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 15:58:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 15:58:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 17:12:01 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 17:12:01 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 17:15:46 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 17:15:46 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 17:44:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 17:44:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 17:46:13 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 17:46:13 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 17:48:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 17:48:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 17:56:25 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 17:56:25 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 17:59:24 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 17:59:24 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 18:24:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 18:24:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 18:35:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 18:35:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 18:38:27 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 18:38:27 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 18:46:12 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 18:46:12 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 19:54:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-19 19:54:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-19 19:03:13 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 19:03:13 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 19:03:24 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 19:03:24 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 20:29:48 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 575
ERROR - 2017-09-19 20:29:48 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 586
ERROR - 2017-09-19 20:44:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column &quot;a.description&quot;.
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 20:44:58 --> Query error: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column "a.description".
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19518','{"RHT3S125SD-G":{"quantity":"2","uom":"FT","tolerance":"1-2"},"RHT3S025SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','sudiptab','0003','IND','','Julie Whittock','7-10 days ARO','091917BS1629')
ERROR - 2017-09-19 20:45:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column &quot;a.description&quot;.
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 20:45:00 --> Query error: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column "a.description".
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19518','{"RHT3S125SD-G":{"quantity":"2","uom":"FT","tolerance":"1-2"},"RHT3S025SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','sudiptab','0003','IND','','Julie Whittock','7-10 days ARO','091917BS1629')
ERROR - 2017-09-19 20:45:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column &quot;a.description&quot;.
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 20:45:03 --> Query error: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column "a.description".
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19518','{"RHT3S100SD-G":{"quantity":"2","uom":"FT","tolerance":"1-2"},"RHT3S025SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','sudiptab','0003','IND','','Julie Whittock','7-10 days ARO','091917BS1629')
ERROR - 2017-09-19 20:46:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column &quot;a.description&quot;.
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 20:46:44 --> Query error: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column "a.description".
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19518','{"RHT3S125SD-G":{"quantity":"1","uom":"FT","tolerance":"1-2"},"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','sudiptab','0003','IND','','Julie Whittock','7-10 days ARO','091917BS1629')
ERROR - 2017-09-19 20:46:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column &quot;a.description&quot;.
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 20:46:45 --> Query error: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column "a.description".
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19518','{"RHT3S125SD-G":{"quantity":"1","uom":"FT","tolerance":"1-2"},"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','sudiptab','0003','IND','','Julie Whittock','7-10 days ARO','091917BS1629')
ERROR - 2017-09-19 20:46:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column &quot;a.description&quot;.
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 20:46:45 --> Query error: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column "a.description".
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19518','{"RHT3S125SD-G":{"quantity":"1","uom":"FT","tolerance":"1-2"},"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','sudiptab','0003','IND','','Julie Whittock','7-10 days ARO','091917BS1629')
ERROR - 2017-09-19 20:46:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column &quot;a.description&quot;.
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 20:46:45 --> Query error: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column "a.description".
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19518','{"RHT3S125SD-G":{"quantity":"1","uom":"FT","tolerance":"1-2"},"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','sudiptab','0003','IND','','Julie Whittock','7-10 days ARO','091917BS1629')
ERROR - 2017-09-19 20:46:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column &quot;a.description&quot;.
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 20:46:46 --> Query error: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column "a.description".
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19518','{"RHT3S125SD-G":{"quantity":"1","uom":"FT","tolerance":"1-2"},"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','sudiptab','0003','IND','','Julie Whittock','7-10 days ARO','091917BS1629')
ERROR - 2017-09-19 20:46:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column &quot;a.description&quot;.
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-19 20:46:50 --> Query error: ERROR:  column a.description2 does not exist
LINE 7:                  a.description2,
                         ^
HINT:  Perhaps you meant to reference the column "a.description".
QUERY:  SELECT
                 o_quoteid,
                 in_proposalnum,
                 a.product,
                 a.itemcode,
                 a.optiontype,
                 a.description2,
                 a.qty,
                 a.uom,
                 (
                   a.modifiedqty * a.costperunit)                 AS materialcost,
                 a.laborhour,
                 a.laborcost,
                 (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
                  (1 - (in_discount / 100.00))) :: NUMERIC(12, 5) AS totalcost,
                 a.costperunit,
                 a.laboractivityrate,
                 a.activitycode,
                 a.wt_step
               FROM temp_items a
               WHERE a.qty != 0.0
               ORDER BY a.detail_line
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 347 at RETURN QUERY - Invalid query: SELECT * from qw.rope_quote(1,'',0, '19518','{"RHT3S125SD-G":{"quantity":"1","uom":"FT","tolerance":"1-2"},"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','sudiptab','0003','IND','','Julie Whittock','7-10 days ARO','091917BS1629')
