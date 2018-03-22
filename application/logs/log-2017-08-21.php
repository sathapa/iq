<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-08-21 13:41:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(03dfb6c3-dc94-563e-8f97-2753940f2de6, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        -- rank()        OVER (ORDER BY a.itemcode, a.qty) :: INTEGER,
        a.itemcode,
        a.description,
        a.qty,
        a.qty,
        (a.costperunit + a.laborcost),
        (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
         (1 - (in_discount / 100.00))) :: NUMERIC(12, 5),
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', a.itemcode, 'MTO', 'all'),
        'Rope',
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-21 13:41:06 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(03dfb6c3-dc94-563e-8f97-2753940f2de6, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        -- rank()        OVER (ORDER BY a.itemcode, a.qty) :: INTEGER,
        a.itemcode,
        a.description,
        a.qty,
        a.qty,
        (a.costperunit + a.laborcost),
        (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
         (1 - (in_discount / 100.00))) :: NUMERIC(12, 5),
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', a.itemcode, 'MTO', 'all'),
        'Rope',
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '50-0122001','{"RHT3S125SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"},"RHT3S037SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0123','PLA','NEW','0','7-10 days ARO','082117RR0940')
ERROR - 2017-08-21 13:41:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(d30ef639-f886-5d5c-ab67-1f2c5d92fb85, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        -- rank()        OVER (ORDER BY a.itemcode, a.qty) :: INTEGER,
        a.itemcode,
        a.description,
        a.qty,
        a.qty,
        (a.costperunit + a.laborcost),
        (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
         (1 - (in_discount / 100.00))) :: NUMERIC(12, 5),
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', a.itemcode, 'MTO', 'all'),
        'Rope',
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-21 13:41:08 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(d30ef639-f886-5d5c-ab67-1f2c5d92fb85, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        -- rank()        OVER (ORDER BY a.itemcode, a.qty) :: INTEGER,
        a.itemcode,
        a.description,
        a.qty,
        a.qty,
        (a.costperunit + a.laborcost),
        (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
         (1 - (in_discount / 100.00))) :: NUMERIC(12, 5),
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', a.itemcode, 'MTO', 'all'),
        'Rope',
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '50-0122001','{"RHT3S125SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"},"RHT3S037SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0123','PLA','NEW','0','7-10 days ARO','082117RR0940')
ERROR - 2017-08-21 13:44:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(563ffb69-17cd-5cff-a9e5-add38aabcc60, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        -- rank() OVER (          ORDER BY a.itemcode, a.qty ) :: INTEGER,
        a.itemcode,
        a.description,
        a.qty,
        a.qty,
        (a.costperunit + a.laborcost),
        (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
         (1 - (in_discount / 100.00))) :: NUMERIC(12, 5),
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', a.itemcode, 'MTO', 'all'),
        'Hardware',
        in_tagnum,
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.hardware_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying) line 229 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-21 13:44:53 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(563ffb69-17cd-5cff-a9e5-add38aabcc60, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        -- rank() OVER (          ORDER BY a.itemcode, a.qty ) :: INTEGER,
        a.itemcode,
        a.description,
        a.qty,
        a.qty,
        (a.costperunit + a.laborcost),
        (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
         (1 - (in_discount / 100.00))) :: NUMERIC(12, 5),
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', a.itemcode, 'MTO', 'all'),
        'Hardware',
        in_tagnum,
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.hardware_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying) line 229 at SQL statement - Invalid query: SELECT * from qw.hardware_quote(1,  '',0, '30-3DST02','{"SL-WR-3810":"1","SWA014C":"1"}',  1, 0, '','jgonchar','0003','IND','NEW','Grace van der Deen','7-10 days ARO','082117BS0944','')
ERROR - 2017-08-21 13:44:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(bd59423a-b582-548e-b1dd-3be23ba590bb, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        -- rank() OVER (          ORDER BY a.itemcode, a.qty ) :: INTEGER,
        a.itemcode,
        a.description,
        a.qty,
        a.qty,
        (a.costperunit + a.laborcost),
        (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
         (1 - (in_discount / 100.00))) :: NUMERIC(12, 5),
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', a.itemcode, 'MTO', 'all'),
        'Hardware',
        in_tagnum,
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.hardware_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying) line 229 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-21 13:44:55 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(bd59423a-b582-548e-b1dd-3be23ba590bb, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        -- rank() OVER (          ORDER BY a.itemcode, a.qty ) :: INTEGER,
        a.itemcode,
        a.description,
        a.qty,
        a.qty,
        (a.costperunit + a.laborcost),
        (price_markup * ((a.modifiedqty * a.costperunit) + a.laborcost) *
         (1 - (in_discount / 100.00))) :: NUMERIC(12, 5),
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', a.itemcode, 'MTO', 'all'),
        'Hardware',
        in_tagnum,
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.hardware_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying) line 229 at SQL statement - Invalid query: SELECT * from qw.hardware_quote(1,  '',0, '30-3DST02','{"SL-WR-3810":"1","SWA014C":"1"}',  1, 0, '','jgonchar','0003','IND','NEW','Grace van der Deen','7-10 days ARO','082117BS0944','')
ERROR - 2017-08-21 16:03:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-21 16:03:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-21 17:05:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;temp_items2&quot; does not exist
LINE 1: UPDATE temp_items2
               ^
QUERY:  UPDATE temp_items2
  SET laboractivityrate = dwstatic_laboractivityrates.laborrate
  FROM qw.dwstatic_laboractivityrates
  WHERE temp_items.itemcode = dwstatic_laboractivityrates.itemcode
        AND temp_items.activitycode = dwstatic_laboractivityrates.wt_activitycode
CONTEXT:  PL/pgSQL function qw.saleskit_quote(integer,character varying,integer,character varying,character varying,integer,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 125 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-21 17:05:01 --> Query error: ERROR:  relation "temp_items2" does not exist
LINE 1: UPDATE temp_items2
               ^
QUERY:  UPDATE temp_items2
  SET laboractivityrate = dwstatic_laboractivityrates.laborrate
  FROM qw.dwstatic_laboractivityrates
  WHERE temp_items.itemcode = dwstatic_laboractivityrates.itemcode
        AND temp_items.activitycode = dwstatic_laboractivityrates.wt_activitycode
CONTEXT:  PL/pgSQL function qw.saleskit_quote(integer,character varying,integer,character varying,character varying,integer,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 125 at SQL statement - Invalid query: SELECT * from qw.saleskit_quote(0,'',0, '10-ABLE01','OSA414',1,'{"FN38":"3","OS414":"3","OSCAP":"6","UB4X55":"6"}',  1, 0, '','sudiptab','1351','SAF','NEW','0','7-10 days ARO','082117BH1303')
ERROR - 2017-08-21 17:05:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;temp_items2&quot; does not exist
LINE 1: UPDATE temp_items2
               ^
QUERY:  UPDATE temp_items2
  SET laboractivityrate = dwstatic_laboractivityrates.laborrate
  FROM qw.dwstatic_laboractivityrates
  WHERE temp_items.itemcode = dwstatic_laboractivityrates.itemcode
        AND temp_items.activitycode = dwstatic_laboractivityrates.wt_activitycode
CONTEXT:  PL/pgSQL function qw.saleskit_quote(integer,character varying,integer,character varying,character varying,integer,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 125 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-21 17:05:02 --> Query error: ERROR:  relation "temp_items2" does not exist
LINE 1: UPDATE temp_items2
               ^
QUERY:  UPDATE temp_items2
  SET laboractivityrate = dwstatic_laboractivityrates.laborrate
  FROM qw.dwstatic_laboractivityrates
  WHERE temp_items.itemcode = dwstatic_laboractivityrates.itemcode
        AND temp_items.activitycode = dwstatic_laboractivityrates.wt_activitycode
CONTEXT:  PL/pgSQL function qw.saleskit_quote(integer,character varying,integer,character varying,character varying,integer,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 125 at SQL statement - Invalid query: SELECT * from qw.saleskit_quote(0,'',0, '10-ABLE01','OSA414',1,'{"FN38":"3","OS414":"3","OSCAP":"6","UB4X55":"6"}',  1, 0, '','sudiptab','1351','SAF','NEW','0','7-10 days ARO','082117BH1303')
ERROR - 2017-08-21 17:05:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;temp_items2&quot; does not exist
LINE 1: UPDATE temp_items2
               ^
QUERY:  UPDATE temp_items2
  SET laboractivityrate = dwstatic_laboractivityrates.laborrate
  FROM qw.dwstatic_laboractivityrates
  WHERE temp_items.itemcode = dwstatic_laboractivityrates.itemcode
        AND temp_items.activitycode = dwstatic_laboractivityrates.wt_activitycode
CONTEXT:  PL/pgSQL function qw.saleskit_quote(integer,character varying,integer,character varying,character varying,integer,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 125 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-21 17:05:03 --> Query error: ERROR:  relation "temp_items2" does not exist
LINE 1: UPDATE temp_items2
               ^
QUERY:  UPDATE temp_items2
  SET laboractivityrate = dwstatic_laboractivityrates.laborrate
  FROM qw.dwstatic_laboractivityrates
  WHERE temp_items.itemcode = dwstatic_laboractivityrates.itemcode
        AND temp_items.activitycode = dwstatic_laboractivityrates.wt_activitycode
CONTEXT:  PL/pgSQL function qw.saleskit_quote(integer,character varying,integer,character varying,character varying,integer,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 125 at SQL statement - Invalid query: SELECT * from qw.saleskit_quote(0,'',0, '10-ABLE01','OSA414',1,'{"FN38":"3","OS414":"3","OSCAP":"6","UB4X55":"6"}',  1, 0, '','sudiptab','1351','SAF','NEW','0','7-10 days ARO','082117BH1303')
ERROR - 2017-08-21 17:05:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;temp_items2&quot; does not exist
LINE 1: UPDATE temp_items2
               ^
QUERY:  UPDATE temp_items2
  SET laboractivityrate = dwstatic_laboractivityrates.laborrate
  FROM qw.dwstatic_laboractivityrates
  WHERE temp_items.itemcode = dwstatic_laboractivityrates.itemcode
        AND temp_items.activitycode = dwstatic_laboractivityrates.wt_activitycode
CONTEXT:  PL/pgSQL function qw.saleskit_quote(integer,character varying,integer,character varying,character varying,integer,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 125 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-21 17:05:03 --> Query error: ERROR:  relation "temp_items2" does not exist
LINE 1: UPDATE temp_items2
               ^
QUERY:  UPDATE temp_items2
  SET laboractivityrate = dwstatic_laboractivityrates.laborrate
  FROM qw.dwstatic_laboractivityrates
  WHERE temp_items.itemcode = dwstatic_laboractivityrates.itemcode
        AND temp_items.activitycode = dwstatic_laboractivityrates.wt_activitycode
CONTEXT:  PL/pgSQL function qw.saleskit_quote(integer,character varying,integer,character varying,character varying,integer,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 125 at SQL statement - Invalid query: SELECT * from qw.saleskit_quote(0,'',0, '10-ABLE01','OSA414',1,'{"FN38":"3","OS414":"3","OSCAP":"6","UB4X55":"6"}',  1, 0, '','sudiptab','1351','SAF','NEW','0','7-10 days ARO','082117BH1303')
ERROR - 2017-08-21 17:05:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;temp_items2&quot; does not exist
LINE 1: UPDATE temp_items2
               ^
QUERY:  UPDATE temp_items2
  SET laboractivityrate = dwstatic_laboractivityrates.laborrate
  FROM qw.dwstatic_laboractivityrates
  WHERE temp_items.itemcode = dwstatic_laboractivityrates.itemcode
        AND temp_items.activitycode = dwstatic_laboractivityrates.wt_activitycode
CONTEXT:  PL/pgSQL function qw.saleskit_quote(integer,character varying,integer,character varying,character varying,integer,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 125 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-21 17:05:03 --> Query error: ERROR:  relation "temp_items2" does not exist
LINE 1: UPDATE temp_items2
               ^
QUERY:  UPDATE temp_items2
  SET laboractivityrate = dwstatic_laboractivityrates.laborrate
  FROM qw.dwstatic_laboractivityrates
  WHERE temp_items.itemcode = dwstatic_laboractivityrates.itemcode
        AND temp_items.activitycode = dwstatic_laboractivityrates.wt_activitycode
CONTEXT:  PL/pgSQL function qw.saleskit_quote(integer,character varying,integer,character varying,character varying,integer,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 125 at SQL statement - Invalid query: SELECT * from qw.saleskit_quote(0,'',0, '10-ABLE01','OSA414',1,'{"FN38":"3","OS414":"3","OSCAP":"6","UB4X55":"6"}',  1, 0, '','sudiptab','1351','SAF','NEW','0','7-10 days ARO','082117BH1303')
ERROR - 2017-08-21 17:42:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;S01&quot;
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-21 17:42:44 --> Query error: ERROR:  syntax error at or near "S01"
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ - Invalid query: select * from qw.get_customer_defaults('40-3B'S01')
ERROR - 2017-08-21 19:29:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-21 19:29:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-21 20:09:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-21 20:09:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-21 20:16:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-21 20:16:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
