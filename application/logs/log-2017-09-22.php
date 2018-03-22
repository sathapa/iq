<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-22 04:44:48 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ')' /var/www/html/application/controllers/frontend/Home.php 395
ERROR - 2017-09-22 05:05:46 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 05:05:46 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 05:05:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 05:05:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 05:09:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cannot deconstruct an array as an object
CONTEXT:  SQL statement &quot;WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value -&gt;&gt; 'quantity'      AS item_qty,
      value -&gt;&gt; 'uom'           AS item_uom,
      value -&gt;&gt; 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-22 05:09:03 --> Query error: ERROR:  cannot deconstruct an array as an object
CONTEXT:  SQL statement "WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value ->> 'quantity'      AS item_qty,
      value ->> 'uom'           AS item_uom,
      value ->> 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19520','["{\"RHT3S125SD-G\":{\"quantity\":\"1\",\"uom\":\"EA\",\"tolerance\":\"1-2\"}}","{\"RHT3S125SD-G\":{\"quantity\":\"1\",\"uom\":\"EA\",\"tolerance\":\"1-2\"}}","{\"RHT3S125SD-G\":{\"quantity\":\"1\",\"uom\":\"EA\",\"tolerance\":\"1-2\"}}"]',  1, 0, 'Rope Instruction','tisuser','0003','IND','','Bill Elliott','7-10 days ARO','092217BS1036')
ERROR - 2017-09-22 05:12:47 --> Severity: Notice --> Undefined variable: item_data1 /var/www/html/application/helpers/common_helper.php 1673
ERROR - 2017-09-22 05:12:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cannot deconstruct a scalar
CONTEXT:  SQL statement &quot;WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value -&gt;&gt; 'quantity'      AS item_qty,
      value -&gt;&gt; 'uom'           AS item_uom,
      value -&gt;&gt; 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-22 05:12:47 --> Query error: ERROR:  cannot deconstruct a scalar
CONTEXT:  SQL statement "WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value ->> 'quantity'      AS item_qty,
      value ->> 'uom'           AS item_uom,
      value ->> 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19520','null',  1, 0, 'Rope Instruction','tisuser','0003','IND','','Bill Elliott','7-10 days ARO','092217BS1036')
ERROR - 2017-09-22 05:14:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cannot deconstruct an array as an object
CONTEXT:  SQL statement &quot;WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value -&gt;&gt; 'quantity'      AS item_qty,
      value -&gt;&gt; 'uom'           AS item_uom,
      value -&gt;&gt; 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-22 05:14:23 --> Query error: ERROR:  cannot deconstruct an array as an object
CONTEXT:  SQL statement "WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value ->> 'quantity'      AS item_qty,
      value ->> 'uom'           AS item_uom,
      value ->> 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19520','[{"0":"RHT3S125SD-G","quantity":"1","uom":"EA","tolerance":"1-2"},{"0":"RHT3S125SD-G","quantity":"1","uom":"EA","tolerance":"1-2"},{"0":"RHT3S125SD-G","quantity":"1","uom":"EA","tolerance":"1-2"}]',  1, 0, 'Rope Instruction','tisuser','0003','IND','','Bill Elliott','7-10 days ARO','092217BS1036')
ERROR - 2017-09-22 05:20:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cannot deconstruct an array as an object
CONTEXT:  SQL statement &quot;WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value -&gt;&gt; 'quantity'      AS item_qty,
      value -&gt;&gt; 'uom'           AS item_uom,
      value -&gt;&gt; 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-22 05:20:30 --> Query error: ERROR:  cannot deconstruct an array as an object
CONTEXT:  SQL statement "WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value ->> 'quantity'      AS item_qty,
      value ->> 'uom'           AS item_uom,
      value ->> 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19520','["{\"RHT3S125SD-G\":{\"quantity\":\"1\",\"uom\":\"EA\",\"tolerance\":\"1-2\"}}","{\"RHT3S125SD-G\":{\"quantity\":\"1\",\"uom\":\"EA\",\"tolerance\":\"1-2\"}}","{\"RHT3S125SD-G\":{\"quantity\":\"1\",\"uom\":\"EA\",\"tolerance\":\"1-2\"}}"]',  1, 0, 'Rope Instruction','tisuser','0003','IND','','Bill Elliott','7-10 days ARO','092217BS1036')
ERROR - 2017-09-22 05:39:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cannot deconstruct an array as an object
CONTEXT:  SQL statement &quot;WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value -&gt;&gt; 'quantity'      AS item_qty,
      value -&gt;&gt; 'uom'           AS item_uom,
      value -&gt;&gt; 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-22 05:39:10 --> Query error: ERROR:  cannot deconstruct an array as an object
CONTEXT:  SQL statement "WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value ->> 'quantity'      AS item_qty,
      value ->> 'uom'           AS item_uom,
      value ->> 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19520','[{"RHT3S125SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}},{"RHT3S125SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}},{"RHT3S125SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}]',  1, 0, 'Rope Instruction','tisuser','0003','IND','','Bill Elliott','7-10 days ARO','092217BS1036')
ERROR - 2017-09-22 05:55:29 --> Severity: Notice --> Array to string conversion /var/www/html/application/helpers/common_helper.php 1693
ERROR - 2017-09-22 05:55:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type json
LINE 1: SELECT * from qw.rope_quote(0,'',0, '19520','Array',  1, 0, ...
                                                    ^
DETAIL:  Token &quot;Array&quot; is invalid.
CONTEXT:  JSON data, line 1: Array /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-22 05:55:29 --> Query error: ERROR:  invalid input syntax for type json
LINE 1: SELECT * from qw.rope_quote(0,'',0, '19520','Array',  1, 0, ...
                                                    ^
DETAIL:  Token "Array" is invalid.
CONTEXT:  JSON data, line 1: Array - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19520','Array',  1, 0, 'Rope Instruction','tisuser','0003','IND','','Bill Elliott','7-10 days ARO','092217BS1036')
ERROR - 2017-09-22 05:56:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  cannot deconstruct an array as an object
CONTEXT:  SQL statement &quot;WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value -&gt;&gt; 'quantity'      AS item_qty,
      value -&gt;&gt; 'uom'           AS item_uom,
      value -&gt;&gt; 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-22 05:56:31 --> Query error: ERROR:  cannot deconstruct an array as an object
CONTEXT:  SQL statement "WITH items AS (SELECT
                   key,
                   value
                 FROM json_each(in_items))
  INSERT INTO temp_rope_lines
    SELECT
      key                       AS item_code,
      value ->> 'quantity'      AS item_qty,
      value ->> 'uom'           AS item_uom,
      value ->> 'tolerance'     AS item_tolerance,
      --to_json(key || value) AS item_json
      to_json(ROW (key, value)) AS item_json
    FROM items"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 69 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '19520','["{\"RHT3S125SD-G\":{\"quantity\":\"1\",\"uom\":\"EA\",\"tolerance\":\"1-2\"}}","{\"RHT3S125SD-G\":{\"quantity\":\"1\",\"uom\":\"EA\",\"tolerance\":\"1-2\"}}","{\"RHT3S125SD-G\":{\"quantity\":\"1\",\"uom\":\"EA\",\"tolerance\":\"1-2\"}}"]',  1, 0, 'Rope Instruction','tisuser','0003','IND','','Bill Elliott','7-10 days ARO','092217BS1036')
ERROR - 2017-09-22 05:58:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 05:58:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 07:34:40 --> Severity: error --> Exception: /var/www/html/application/models/frontend/Inventory_model.php exists, but doesn't declare class Inventory_model /var/www/html/system/core/Loader.php 336
ERROR - 2017-09-22 08:00:06 --> Severity: error --> Exception: syntax error, unexpected ';' /var/www/html/application/views/frontend/psninventories.php 43
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:26:11 --> Severity: Notice --> Undefined variable: invDate /var/www/html/application/views/frontend/dailytracking.php 84
ERROR - 2017-09-22 10:44:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;Neill&quot;
LINE 3:        '','','','IND','Jerry O'Neill') 
                                       ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-22 10:44:31 --> Query error: ERROR:  syntax error at or near "Neill"
LINE 3:        '','','','IND','Jerry O'Neill') 
                                       ^ - Invalid query: select * from qw.create_update_contact('0','14865','','John','Martin','Partner #2883','', '315-400-4994',
							'john.martin@indoff.com','','599 E Genesee St #696','','Fayetteville','NY','13066','USA',2,3,'','Mr.','',
							'','','','IND','Jerry O'Neill') 
ERROR - 2017-09-22 10:46:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;Neill&quot;
LINE 3:        '','','','IND','Jerry O'Neill') 
                                       ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-22 10:46:35 --> Query error: ERROR:  syntax error at or near "Neill"
LINE 3:        '','','','IND','Jerry O'Neill') 
                                       ^ - Invalid query: select * from qw.create_update_contact('0','14865','','John','Martin','Partner #2883','', '315-400-4994',
							'john.martin@indoff.com','','599 E Genesee St #696','','Fayetteville','NY','13066','USA',2,3,'','Mr.','',
							'','','','IND','Jerry O'Neill') 
ERROR - 2017-09-22 11:26:15 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 11:26:15 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 12:41:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-22 12:41:48 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-22 12:51:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-22 12:51:27 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-22 12:01:04 --> Severity: Notice --> Undefined variable: month /var/www/html/application/controllers/frontend/Dashboard.php 54
ERROR - 2017-09-22 12:01:04 --> Severity: Warning --> array_unique() expects parameter 1 to be array, null given /var/www/html/application/controllers/frontend/Dashboard.php 54
ERROR - 2017-09-22 12:04:48 --> Severity: Notice --> Only variables should be passed by reference /var/www/html/application/controllers/frontend/Dashboard.php 54
ERROR - 2017-09-22 12:05:31 --> Severity: Notice --> Only variables should be passed by reference /var/www/html/application/controllers/frontend/Dashboard.php 53
ERROR - 2017-09-22 12:05:37 --> Severity: Notice --> Only variables should be passed by reference /var/www/html/application/controllers/frontend/Dashboard.php 53
ERROR - 2017-09-22 12:05:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 12:05:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 12:08:30 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 12:08:30 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 12:09:41 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 12:09:41 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 12:13:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 12:13:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 12:26:18 --> Severity: Notice --> Array to string conversion /var/www/html/application/controllers/frontend/Dashboard.php 59
ERROR - 2017-09-22 12:37:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 12:37:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 12:42:31 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 12:42:31 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 12:42:32 --> Severity: Notice --> Undefined property: Inventory::$Shipment_model /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:42:32 --> Severity: error --> Exception: Call to a member function getUpsFedexTracking() on null /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:42:39 --> Severity: Notice --> Undefined property: Inventory::$Shipment_model /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:42:39 --> Severity: error --> Exception: Call to a member function getUpsFedexTracking() on null /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:42:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 12:42:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 12:44:20 --> Severity: Notice --> Undefined property: Inventory::$Shipment_model /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:44:20 --> Severity: error --> Exception: Call to a member function getUpsFedexTracking() on null /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:45:06 --> Severity: Notice --> Undefined property: Inventory::$Shipment_model /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:45:06 --> Severity: error --> Exception: Call to a member function getUpsFedexTracking() on null /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:45:23 --> Severity: Notice --> Undefined property: Inventory::$Shipment_model /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:45:23 --> Severity: error --> Exception: Call to a member function getUpsFedexTracking() on null /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:45:48 --> Severity: Notice --> Undefined property: Inventory::$Shipment_model /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:45:48 --> Severity: error --> Exception: Call to a member function getUpsFedexTracking() on null /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:46:27 --> Severity: Notice --> Undefined property: Inventory::$Shipment_model /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:46:27 --> Severity: error --> Exception: Call to a member function getUpsFedexTracking() on null /var/www/html/application/controllers/frontend/Inventory.php 51
ERROR - 2017-09-22 12:52:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 12:52:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 13:54:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-22 13:54:39 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-22 13:56:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-22 13:56:57 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-22 13:24:05 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 13:24:05 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 14:28:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-22 14:28:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-22 13:35:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 13:35:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 13:45:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 13:45:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 14:16:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 14:16:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 15:19:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-22 15:19:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-22 14:19:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 14:19:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 15:19:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-22 15:19:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-22 14:44:45 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 14:44:45 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 14:48:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 14:48:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 15:26:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 15:26:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 15:50:00 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 15:50:00 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 16:13:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 16:13:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 16:19:18 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 16:19:18 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 17:02:12 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 17:02:12 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 17:09:12 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 17:09:12 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 17:30:33 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 17:30:33 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 17:38:01 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 17:38:01 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 17:46:12 --> Severity: Notice --> Undefined variable: html /var/www/html/application/helpers/common_helper.php 2907
ERROR - 2017-09-22 17:46:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 17:46:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 18:01:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 18:01:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 19:02:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-22 19:02:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-22 19:02:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-22 19:02:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-22 18:06:52 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 18:06:52 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 18:35:58 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 18:35:58 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 18:49:42 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 18:49:42 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 19:14:51 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 19:14:51 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 19:14:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 19:14:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 20:20:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-22 20:20:41 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-22 19:35:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 19:35:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
ERROR - 2017-09-22 19:40:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 733
ERROR - 2017-09-22 19:40:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 744
