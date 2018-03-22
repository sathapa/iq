<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-08-15 14:16:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:06 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '10-AAAS01','{"RPYB025BK-N":{"quantity":"1","uom":"FT","tolerance":"1-2"}}',  1, 0, '','jgonchar','1351','SAF','NEW','0','7-10 days ARO','081517BH1002')
ERROR - 2017-08-15 14:16:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:08 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '10-AAAS01','{"RPYB025BK-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','1351','SAF','NEW','0','7-10 days ARO','081517BH1002')
ERROR - 2017-08-15 14:16:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:09 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '10-AAAS01','{"RPYB025BK-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','1351','SAF','NEW','0','7-10 days ARO','081517BH1002')
ERROR - 2017-08-15 14:16:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:10 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '10-AAAS01','{"RPYB025BK-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','1351','SAF','NEW','0','7-10 days ARO','081517BH1002')
ERROR - 2017-08-15 14:16:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:10 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '10-AAAS01','{"RPYB025BK-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','1351','SAF','NEW','0','7-10 days ARO','081517BH1002')
ERROR - 2017-08-15 14:16:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:29 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '30-A2ZM01','{"RPYB025BK-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0003','IND','NEW','0','7-10 days ARO','081517BS1016')
ERROR - 2017-08-15 14:16:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:30 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '30-A2ZM01','{"RPYB025BK-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0003','IND','NEW','0','7-10 days ARO','081517BS1016')
ERROR - 2017-08-15 14:16:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:30 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '30-A2ZM01','{"RPYB025BK-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0003','IND','NEW','0','7-10 days ARO','081517BS1016')
ERROR - 2017-08-15 14:16:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:31 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '30-A2ZM01','{"RPYB025BK-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0003','IND','NEW','0','7-10 days ARO','081517BS1016')
ERROR - 2017-08-15 14:16:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:33 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '30-A2ZM01','{"RPYB025BK-N":{"quantity":"1","uom":"FT","tolerance":"1-2"}}',  1, 0, '','jgonchar','0003','IND','NEW','0','7-10 days ARO','081517BS1016')
ERROR - 2017-08-15 14:16:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:34 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '30-A2ZM01','{"RPYB025BK-N":{"quantity":"1","uom":"FT","tolerance":"1-2"}}',  1, 0, '','jgonchar','0003','IND','NEW','0','7-10 days ARO','081517BS1016')
ERROR - 2017-08-15 14:16:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:34 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '30-A2ZM01','{"RPYB025BK-N":{"quantity":"1","uom":"FT","tolerance":"1-2"}}',  1, 0, '','jgonchar','0003','IND','NEW','0','7-10 days ARO','081517BS1016')
ERROR - 2017-08-15 14:16:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:34 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '30-A2ZM01','{"RPYB025BK-N":{"quantity":"1","uom":"FT","tolerance":"1-2"}}',  1, 0, '','jgonchar','0003','IND','NEW','0','7-10 days ARO','081517BS1016')
ERROR - 2017-08-15 14:16:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;S01&quot;
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:16:44 --> Query error: ERROR:  syntax error at or near "S01"
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ - Invalid query: select * from qw.get_customer_defaults('40-3B'S01')
ERROR - 2017-08-15 14:17:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:17:01 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-253I01','{"RPYB025BK-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081517JG1016')
ERROR - 2017-08-15 14:17:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:17:03 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-253I01','{"RPYB025BK-N":{"quantity":"1","uom":"FT","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081517JG1016')
ERROR - 2017-08-15 14:17:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:17:05 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-253I01','{"RPYB025SD-N":{"quantity":"1","uom":"FT","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081517JG1016')
ERROR - 2017-08-15 14:19:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:19:29 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-253I01','{"RPYB025BK-N":{"quantity":"1","uom":"FT","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081517JG1016')
ERROR - 2017-08-15 14:19:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:19:33 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-253I01','{"RPYB025SD-N":{"quantity":"1","uom":"FT","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081517JG1016')
ERROR - 2017-08-15 14:19:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:19:37 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-253I01','{"RPYB025WH-N":{"quantity":"1","uom":"FT","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081517JG1016')
ERROR - 2017-08-15 14:19:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:19:40 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-253I01','{"RPYB025WH-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081517JG1016')
ERROR - 2017-08-15 14:25:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&amp;', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 14:25:07 --> Query error: ERROR:  value too long for type character varying(2)
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step, uom_conv_factor, item_uom, item_price)
    SELECT
      a.item_code,
      a.item_code,
      'Rope',
      translate(ci.itemcodedesc, '#&', '') AS description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      a.item_uom,
      --ci.standardunitofmeasure,
      ci.standardunitcost,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      'PACK',
      '899',
      1.0,
      ci.standardunitofmeasure,
      ci.standardunitcost
    FROM temp_rope_lines a, sage.ci_item ci
    WHERE a.item_code = ci.itemcode"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 100 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-253I01','{"RPYB025SD-N":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081517JG1016')
ERROR - 2017-08-15 16:51:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-15 16:51:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-15 18:07:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-15 18:07:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-15 18:22:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-15 18:22:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-15 21:18:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-15 21:18:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-15 20:48:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;UPDATE temp_items
  SET itemcode  = RWS5_type,
    qty         = in_netwidth * in_netlength,
    modifiedqty = (in_netlength * in_netwidth) * 1.03,
    uom         = 'SF',
    description = 'Roll Windscreen 70% Black FR Size: ' || RWS5_width || ' x 50m Roll Windscreen 70% Black FR'
  WHERE temp_items.itemcode = 'RWS5-xMBKFR'&quot;
PL/pgSQL function qw.rocbloc_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,double precision,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 220 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 20:48:34 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "UPDATE temp_items
  SET itemcode  = RWS5_type,
    qty         = in_netwidth * in_netlength,
    modifiedqty = (in_netlength * in_netwidth) * 1.03,
    uom         = 'SF',
    description = 'Roll Windscreen 70% Black FR Size: ' || RWS5_width || ' x 50m Roll Windscreen 70% Black FR'
  WHERE temp_items.itemcode = 'RWS5-xMBKFR'"
PL/pgSQL function qw.rocbloc_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,double precision,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 220 at SQL statement - Invalid query: SELECT * from qw.rocbloc_quote(0, '', 0,'50-ARTand03', 'ROCBLOC-2K','209-045-06BD',888888, 888, 'NONE','NONE','','NONE' ,'1.0',1, 1, 0,'','jgonchar','0123','PLA','NEW','Fabio Pignata','7-10 days ARO','','081517RR1648',0,'')
ERROR - 2017-08-15 20:48:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;UPDATE temp_items
  SET itemcode  = RWS5_type,
    qty         = in_netwidth * in_netlength,
    modifiedqty = (in_netlength * in_netwidth) * 1.03,
    uom         = 'SF',
    description = 'Roll Windscreen 70% Black FR Size: ' || RWS5_width || ' x 50m Roll Windscreen 70% Black FR'
  WHERE temp_items.itemcode = 'RWS5-xMBKFR'&quot;
PL/pgSQL function qw.rocbloc_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,double precision,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 220 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 20:48:39 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "UPDATE temp_items
  SET itemcode  = RWS5_type,
    qty         = in_netwidth * in_netlength,
    modifiedqty = (in_netlength * in_netwidth) * 1.03,
    uom         = 'SF',
    description = 'Roll Windscreen 70% Black FR Size: ' || RWS5_width || ' x 50m Roll Windscreen 70% Black FR'
  WHERE temp_items.itemcode = 'RWS5-xMBKFR'"
PL/pgSQL function qw.rocbloc_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,double precision,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 220 at SQL statement - Invalid query: SELECT * from qw.rocbloc_quote(0, '', 0,'50-ARTand03', 'ROCBLOC-2K','209-045-06BD',88888, 8889, 'NONE','NONE','','NONE' ,'1.0',1, 1, 0,'','jgonchar','0123','PLA','NEW','Fabio Pignata','7-10 days ARO','','081517RR1648',0,'')
ERROR - 2017-08-15 20:48:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;UPDATE temp_items
  SET itemcode  = RWS5_type,
    qty         = in_netwidth * in_netlength,
    modifiedqty = (in_netlength * in_netwidth) * 1.03,
    uom         = 'SF',
    description = 'Roll Windscreen 70% Black FR Size: ' || RWS5_width || ' x 50m Roll Windscreen 70% Black FR'
  WHERE temp_items.itemcode = 'RWS5-xMBKFR'&quot;
PL/pgSQL function qw.rocbloc_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,double precision,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 220 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 20:48:40 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "UPDATE temp_items
  SET itemcode  = RWS5_type,
    qty         = in_netwidth * in_netlength,
    modifiedqty = (in_netlength * in_netwidth) * 1.03,
    uom         = 'SF',
    description = 'Roll Windscreen 70% Black FR Size: ' || RWS5_width || ' x 50m Roll Windscreen 70% Black FR'
  WHERE temp_items.itemcode = 'RWS5-xMBKFR'"
PL/pgSQL function qw.rocbloc_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,double precision,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 220 at SQL statement - Invalid query: SELECT * from qw.rocbloc_quote(0, '', 0,'50-ARTand03', 'ROCBLOC-2K','209-045-06BD',88888, 8889, 'NONE','NONE','','NONE' ,'1.0',1, 1, 0,'','jgonchar','0123','PLA','NEW','Fabio Pignata','7-10 days ARO','','081517RR1648',0,'')
ERROR - 2017-08-15 20:48:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;UPDATE temp_items
  SET itemcode  = RWS5_type,
    qty         = in_netwidth * in_netlength,
    modifiedqty = (in_netlength * in_netwidth) * 1.03,
    uom         = 'SF',
    description = 'Roll Windscreen 70% Black FR Size: ' || RWS5_width || ' x 50m Roll Windscreen 70% Black FR'
  WHERE temp_items.itemcode = 'RWS5-xMBKFR'&quot;
PL/pgSQL function qw.rocbloc_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,double precision,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 220 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 20:48:43 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "UPDATE temp_items
  SET itemcode  = RWS5_type,
    qty         = in_netwidth * in_netlength,
    modifiedqty = (in_netlength * in_netwidth) * 1.03,
    uom         = 'SF',
    description = 'Roll Windscreen 70% Black FR Size: ' || RWS5_width || ' x 50m Roll Windscreen 70% Black FR'
  WHERE temp_items.itemcode = 'RWS5-xMBKFR'"
PL/pgSQL function qw.rocbloc_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,double precision,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 220 at SQL statement - Invalid query: SELECT * from qw.rocbloc_quote(0, '', 0,'50-ARTand03', 'ROCBLOC-2K','209-045-06BD',88888, 888, 'NONE','NONE','','NONE' ,'1.0',1, 1, 0,'','jgonchar','0123','PLA','NEW','Fabio Pignata','7-10 days ARO','','081517RR1648',0,'')
ERROR - 2017-08-15 20:48:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;UPDATE temp_items
  SET itemcode  = RWS5_type,
    qty         = in_netwidth * in_netlength,
    modifiedqty = (in_netlength * in_netwidth) * 1.03,
    uom         = 'SF',
    description = 'Roll Windscreen 70% Black FR Size: ' || RWS5_width || ' x 50m Roll Windscreen 70% Black FR'
  WHERE temp_items.itemcode = 'RWS5-xMBKFR'&quot;
PL/pgSQL function qw.rocbloc_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,double precision,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 220 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-15 20:48:44 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "UPDATE temp_items
  SET itemcode  = RWS5_type,
    qty         = in_netwidth * in_netlength,
    modifiedqty = (in_netlength * in_netwidth) * 1.03,
    uom         = 'SF',
    description = 'Roll Windscreen 70% Black FR Size: ' || RWS5_width || ' x 50m Roll Windscreen 70% Black FR'
  WHERE temp_items.itemcode = 'RWS5-xMBKFR'"
PL/pgSQL function qw.rocbloc_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,double precision,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 220 at SQL statement - Invalid query: SELECT * from qw.rocbloc_quote(0, '', 0,'50-ARTand03', 'ROCBLOC-2K','209-045-06BD',88888, 888, 'NONE','NONE','','NONE' ,'1.0',1, 1, 0,'','jgonchar','0123','PLA','NEW','Fabio Pignata','7-10 days ARO','','081517RR1648',0,'')
