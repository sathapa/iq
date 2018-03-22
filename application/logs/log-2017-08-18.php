<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-08-18 03:20:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.laborrate2 does not exist
LINE 2:   SET laboractivityrate = b.laborrate2
                                  ^
HINT:  Perhaps you meant to reference the column &quot;b.laborrate&quot;.
QUERY:  UPDATE temp_items
  SET laboractivityrate = b.laborrate2
  FROM qw.dwstatic_laboractivityrates b
  WHERE b.wt_activitycode = temp_items.activitycode
        AND b.itemcode = 'default'
        AND b.laborrateuom = temp_items.uom
        -- AND b.laborrate != 0.0
        AND temp_items.laboractivityrate = 0.0
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 321 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 03:20:01 --> Query error: ERROR:  column b.laborrate2 does not exist
LINE 2:   SET laboractivityrate = b.laborrate2
                                  ^
HINT:  Perhaps you meant to reference the column "b.laborrate".
QUERY:  UPDATE temp_items
  SET laboractivityrate = b.laborrate2
  FROM qw.dwstatic_laboractivityrates b
  WHERE b.wt_activitycode = temp_items.activitycode
        AND b.itemcode = 'default'
        AND b.laborrateuom = temp_items.uom
        -- AND b.laborrate != 0.0
        AND temp_items.laboractivityrate = 0.0
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 321 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'40-AAAC02', 'DNR', 'RPY14BKFR', 4, 4, 'RPYB013BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','meredithr','0146','IND','NEW','0','7-10 days ARO','','081717CC2318','',0,'DNR; Width:4.00 FT; Length: 4.00 FT; Mesh Color: Black;  Sewn Border: Polyester Braid 1/8in x 1000ft; ; ; ')
ERROR - 2017-08-18 03:20:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.laborrate2 does not exist
LINE 2:   SET laboractivityrate = b.laborrate2
                                  ^
HINT:  Perhaps you meant to reference the column &quot;b.laborrate&quot;.
QUERY:  UPDATE temp_items
  SET laboractivityrate = b.laborrate2
  FROM qw.dwstatic_laboractivityrates b
  WHERE b.wt_activitycode = temp_items.activitycode
        AND b.itemcode = 'default'
        AND b.laborrateuom = temp_items.uom
        -- AND b.laborrate != 0.0
        AND temp_items.laboractivityrate = 0.0
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 321 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 03:20:02 --> Query error: ERROR:  column b.laborrate2 does not exist
LINE 2:   SET laboractivityrate = b.laborrate2
                                  ^
HINT:  Perhaps you meant to reference the column "b.laborrate".
QUERY:  UPDATE temp_items
  SET laboractivityrate = b.laborrate2
  FROM qw.dwstatic_laboractivityrates b
  WHERE b.wt_activitycode = temp_items.activitycode
        AND b.itemcode = 'default'
        AND b.laborrateuom = temp_items.uom
        -- AND b.laborrate != 0.0
        AND temp_items.laboractivityrate = 0.0
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 321 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'40-AAAC02', 'DNR', 'RPY14BKFR', 4, 4, 'RPYB013BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','meredithr','0146','IND','NEW','0','7-10 days ARO','','081717CC2318','',0,'DNR; Width:4.00 FT; Length: 4.00 FT; Mesh Color: Black;  Sewn Border: Polyester Braid 1/8in x 1000ft; ; ; ')
ERROR - 2017-08-18 03:20:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.laborrate2 does not exist
LINE 2:   SET laboractivityrate = b.laborrate2
                                  ^
HINT:  Perhaps you meant to reference the column &quot;b.laborrate&quot;.
QUERY:  UPDATE temp_items
  SET laboractivityrate = b.laborrate2
  FROM qw.dwstatic_laboractivityrates b
  WHERE b.wt_activitycode = temp_items.activitycode
        AND b.itemcode = 'default'
        AND b.laborrateuom = temp_items.uom
        -- AND b.laborrate != 0.0
        AND temp_items.laboractivityrate = 0.0
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 321 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 03:20:07 --> Query error: ERROR:  column b.laborrate2 does not exist
LINE 2:   SET laboractivityrate = b.laborrate2
                                  ^
HINT:  Perhaps you meant to reference the column "b.laborrate".
QUERY:  UPDATE temp_items
  SET laboractivityrate = b.laborrate2
  FROM qw.dwstatic_laboractivityrates b
  WHERE b.wt_activitycode = temp_items.activitycode
        AND b.itemcode = 'default'
        AND b.laborrateuom = temp_items.uom
        -- AND b.laborrate != 0.0
        AND temp_items.laboractivityrate = 0.0
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 321 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'40-AAAC02', 'DNR', 'RPY14GYFR', 4, 4, 'RPYB013BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 2, 1, 1, 0,'','meredithr','0146','IND','NEW','0','7-10 days ARO','','081717CC2318','',0,'DNR; Width:4.00 FT; Length: 4.00 FT; Mesh Color: Black;  Sewn Border: Polyester Braid 1/8in x 1000ft; ; ; ')
ERROR - 2017-08-18 03:20:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.laborrate2 does not exist
LINE 2:   SET laboractivityrate = b.laborrate2
                                  ^
HINT:  Perhaps you meant to reference the column &quot;b.laborrate&quot;.
QUERY:  UPDATE temp_items
  SET laboractivityrate = b.laborrate2
  FROM qw.dwstatic_laboractivityrates b
  WHERE b.wt_activitycode = temp_items.activitycode
        AND b.itemcode = 'default'
        AND b.laborrateuom = temp_items.uom
        -- AND b.laborrate != 0.0
        AND temp_items.laboractivityrate = 0.0
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 321 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 03:20:12 --> Query error: ERROR:  column b.laborrate2 does not exist
LINE 2:   SET laboractivityrate = b.laborrate2
                                  ^
HINT:  Perhaps you meant to reference the column "b.laborrate".
QUERY:  UPDATE temp_items
  SET laboractivityrate = b.laborrate2
  FROM qw.dwstatic_laboractivityrates b
  WHERE b.wt_activitycode = temp_items.activitycode
        AND b.itemcode = 'default'
        AND b.laborrateuom = temp_items.uom
        -- AND b.laborrate != 0.0
        AND temp_items.laboractivityrate = 0.0
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 321 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'40-AAAC02', 'DNR', 'RPY14SDFR', 4, 4, 'RPYB013BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 2, 1, 1, 0,'','meredithr','0146','IND','NEW','0','7-10 days ARO','','081717CC2318','',0,'DNR; Width:4.00 FT; Length: 4.00 FT; Mesh Color: Black;  Sewn Border: Polyester Braid 1/8in x 1000ft; ; ; ')
ERROR - 2017-08-18 03:35:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;line_no&quot; of relation &quot;temp_items&quot; does not exist
LINE 1: INSERT INTO temp_items (product, line_no, itemcode, optionty...
                                         ^
QUERY:  INSERT INTO temp_items (product, line_no, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT DISTINCT
      a.product,
      ''                                             AS line_no,
      a.itemcode,
      a.optiontype,
      translate(a.extendeddescriptiontext, '#&amp;', '') AS description,
      a.detail_line,
      round(a.default_qty, 2)                        AS qty,
      round(a.default_qty, 2)                        AS modifiedqty,
      'HR',
      0.0,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      a.wt_activitycode,
      a.wt_step
    FROM qw.dwstatic_productoptions a
    WHERE a.product = in_product
          AND a.optiontype IN ('overhead')
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 320 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 03:35:34 --> Query error: ERROR:  column "line_no" of relation "temp_items" does not exist
LINE 1: INSERT INTO temp_items (product, line_no, itemcode, optionty...
                                         ^
QUERY:  INSERT INTO temp_items (product, line_no, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT DISTINCT
      a.product,
      ''                                             AS line_no,
      a.itemcode,
      a.optiontype,
      translate(a.extendeddescriptiontext, '#&', '') AS description,
      a.detail_line,
      round(a.default_qty, 2)                        AS qty,
      round(a.default_qty, 2)                        AS modifiedqty,
      'HR',
      0.0,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      a.wt_activitycode,
      a.wt_step
    FROM qw.dwstatic_productoptions a
    WHERE a.product = in_product
          AND a.optiontype IN ('overhead')
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 320 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'40-AAAC02', 'DNR', 'RPY14BKFR', 1, 1, 'RPYB013BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 800, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','meredithr','0146','IND','NEW','0','7-10 days ARO','','081717CC2318','',0,'DNR; Width:4.00 FT; Length: 4.00 FT; Mesh Color: Black;  Sewn Border: Polyester Braid 1/8in x 1000ft; ; ; ')
ERROR - 2017-08-18 03:35:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;line_no&quot; of relation &quot;temp_items&quot; does not exist
LINE 1: INSERT INTO temp_items (product, line_no, itemcode, optionty...
                                         ^
QUERY:  INSERT INTO temp_items (product, line_no, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT DISTINCT
      a.product,
      ''                                             AS line_no,
      a.itemcode,
      a.optiontype,
      translate(a.extendeddescriptiontext, '#&amp;', '') AS description,
      a.detail_line,
      round(a.default_qty, 2)                        AS qty,
      round(a.default_qty, 2)                        AS modifiedqty,
      'HR',
      0.0,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      a.wt_activitycode,
      a.wt_step
    FROM qw.dwstatic_productoptions a
    WHERE a.product = in_product
          AND a.optiontype IN ('overhead')
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 320 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 03:35:36 --> Query error: ERROR:  column "line_no" of relation "temp_items" does not exist
LINE 1: INSERT INTO temp_items (product, line_no, itemcode, optionty...
                                         ^
QUERY:  INSERT INTO temp_items (product, line_no, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT DISTINCT
      a.product,
      ''                                             AS line_no,
      a.itemcode,
      a.optiontype,
      translate(a.extendeddescriptiontext, '#&', '') AS description,
      a.detail_line,
      round(a.default_qty, 2)                        AS qty,
      round(a.default_qty, 2)                        AS modifiedqty,
      'HR',
      0.0,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      a.wt_activitycode,
      a.wt_step
    FROM qw.dwstatic_productoptions a
    WHERE a.product = in_product
          AND a.optiontype IN ('overhead')
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 320 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'40-AAAC02', 'DNR', 'RPY14BKFR', 1, 1, 'RPYB013BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 800, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','meredithr','0146','IND','NEW','0','7-10 days ARO','','081717CC2318','',0,'DNR; Width:4.00 FT; Length: 4.00 FT; Mesh Color: Black;  Sewn Border: Polyester Braid 1/8in x 1000ft; ; ; ')
ERROR - 2017-08-18 03:35:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;line_no&quot; of relation &quot;temp_items&quot; does not exist
LINE 1: INSERT INTO temp_items (product, line_no, itemcode, optionty...
                                         ^
QUERY:  INSERT INTO temp_items (product, line_no, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT DISTINCT
      a.product,
      ''                                             AS line_no,
      a.itemcode,
      a.optiontype,
      translate(a.extendeddescriptiontext, '#&amp;', '') AS description,
      a.detail_line,
      round(a.default_qty, 2)                        AS qty,
      round(a.default_qty, 2)                        AS modifiedqty,
      'HR',
      0.0,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      a.wt_activitycode,
      a.wt_step
    FROM qw.dwstatic_productoptions a
    WHERE a.product = in_product
          AND a.optiontype IN ('overhead')
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 320 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 03:35:40 --> Query error: ERROR:  column "line_no" of relation "temp_items" does not exist
LINE 1: INSERT INTO temp_items (product, line_no, itemcode, optionty...
                                         ^
QUERY:  INSERT INTO temp_items (product, line_no, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT DISTINCT
      a.product,
      ''                                             AS line_no,
      a.itemcode,
      a.optiontype,
      translate(a.extendeddescriptiontext, '#&', '') AS description,
      a.detail_line,
      round(a.default_qty, 2)                        AS qty,
      round(a.default_qty, 2)                        AS modifiedqty,
      'HR',
      0.0,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      a.wt_activitycode,
      a.wt_step
    FROM qw.dwstatic_productoptions a
    WHERE a.product = in_product
          AND a.optiontype IN ('overhead')
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 320 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'40-AAAC02', 'DNR', 'RPY14BKFR', 1, 1, 'RPYB013BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 800, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','meredithr','0146','IND','NEW','0','7-10 days ARO','','081717CC2318','',0,'DNR; Width:4.00 FT; Length: 4.00 FT; Mesh Color: Black;  Sewn Border: Polyester Braid 1/8in x 1000ft; ; ; ')
ERROR - 2017-08-18 03:35:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;line_no&quot; of relation &quot;temp_items&quot; does not exist
LINE 1: INSERT INTO temp_items (product, line_no, itemcode, optionty...
                                         ^
QUERY:  INSERT INTO temp_items (product, line_no, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT DISTINCT
      a.product,
      ''                                             AS line_no,
      a.itemcode,
      a.optiontype,
      translate(a.extendeddescriptiontext, '#&amp;', '') AS description,
      a.detail_line,
      round(a.default_qty, 2)                        AS qty,
      round(a.default_qty, 2)                        AS modifiedqty,
      'HR',
      0.0,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      a.wt_activitycode,
      a.wt_step
    FROM qw.dwstatic_productoptions a
    WHERE a.product = in_product
          AND a.optiontype IN ('overhead')
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 320 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 03:35:42 --> Query error: ERROR:  column "line_no" of relation "temp_items" does not exist
LINE 1: INSERT INTO temp_items (product, line_no, itemcode, optionty...
                                         ^
QUERY:  INSERT INTO temp_items (product, line_no, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT DISTINCT
      a.product,
      ''                                             AS line_no,
      a.itemcode,
      a.optiontype,
      translate(a.extendeddescriptiontext, '#&', '') AS description,
      a.detail_line,
      round(a.default_qty, 2)                        AS qty,
      round(a.default_qty, 2)                        AS modifiedqty,
      'HR',
      0.0,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      a.wt_activitycode,
      a.wt_step
    FROM qw.dwstatic_productoptions a
    WHERE a.product = in_product
          AND a.optiontype IN ('overhead')
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 320 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'40-AAAC02', 'DNR', 'RPY14BKFR', 1, 1, 'RPYB013BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 800, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','meredithr','0146','IND','NEW','0','7-10 days ARO','','081717CC2318','',0,'DNR; Width:4.00 FT; Length: 4.00 FT; Mesh Color: Black;  Sewn Border: Polyester Braid 1/8in x 1000ft; ; ; ')
ERROR - 2017-08-18 03:35:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;line_no&quot; of relation &quot;temp_items&quot; does not exist
LINE 1: INSERT INTO temp_items (product, line_no, itemcode, optionty...
                                         ^
QUERY:  INSERT INTO temp_items (product, line_no, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT DISTINCT
      a.product,
      ''                                             AS line_no,
      a.itemcode,
      a.optiontype,
      translate(a.extendeddescriptiontext, '#&amp;', '') AS description,
      a.detail_line,
      round(a.default_qty, 2)                        AS qty,
      round(a.default_qty, 2)                        AS modifiedqty,
      'HR',
      0.0,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      a.wt_activitycode,
      a.wt_step
    FROM qw.dwstatic_productoptions a
    WHERE a.product = in_product
          AND a.optiontype IN ('overhead')
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 320 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 03:35:42 --> Query error: ERROR:  column "line_no" of relation "temp_items" does not exist
LINE 1: INSERT INTO temp_items (product, line_no, itemcode, optionty...
                                         ^
QUERY:  INSERT INTO temp_items (product, line_no, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT DISTINCT
      a.product,
      ''                                             AS line_no,
      a.itemcode,
      a.optiontype,
      translate(a.extendeddescriptiontext, '#&', '') AS description,
      a.detail_line,
      round(a.default_qty, 2)                        AS qty,
      round(a.default_qty, 2)                        AS modifiedqty,
      'HR',
      0.0,
      laborrateperhour,
      0.0,
      0.0,
      0.0,
      0.0,
      a.wt_activitycode,
      a.wt_step
    FROM qw.dwstatic_productoptions a
    WHERE a.product = in_product
          AND a.optiontype IN ('overhead')
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 320 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'40-AAAC02', 'DNR', 'RPY14BKFR', 1, 1, 'RPYB013BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 800, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','meredithr','0146','IND','NEW','0','7-10 days ARO','','081717CC2318','',0,'DNR; Width:4.00 FT; Length: 4.00 FT; Mesh Color: Black;  Sewn Border: Polyester Braid 1/8in x 1000ft; ; ; ')
ERROR - 2017-08-18 14:56:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 14:56:13 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:23:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:23:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:25:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:25:15 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:26:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:26:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:28:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:28:30 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:29:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:29:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:31:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:31:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:34:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:34:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:37:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:37:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:39:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:39:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:40:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:40:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:46:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 15:46:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 15:54:19 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-08-18 15:54:19 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-08-18 15:54:19 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-08-18 15:54:19 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-08-18 15:54:19 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-08-18 15:55:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  permission denied for sequence qw_user_seq /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 15:55:04 --> Query error: ERROR:  permission denied for sequence qw_user_seq - Invalid query: INSERT INTO "qw"."qw_users" ("username", "first_name", "last_name", "user_group_id", "user_group", "email", "aboutus", "password", "contact_no", "active") VALUES ( E'hlondon',  E'Howard',  E'London',  E'1',  E'Sales',  E'hlondon@incord.com', '',  E'Howard1',  E'8605371414',  E'1')
ERROR - 2017-08-18 18:47:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 18:47:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 18:54:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 18:54:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 19:07:48 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2017-08-18 19:07:48 --> Severity: Warning --> file_get_contents(http://qweb.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2017-08-18 19:07:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 19:07:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 19:08:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 19:08:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 18:14:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;S01&quot;
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 18:14:13 --> Query error: ERROR:  syntax error at or near "S01"
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ - Invalid query: select * from qw.get_customer_defaults('40-3B'S01')
ERROR - 2017-08-18 21:16:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-08-18 21:16:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-08-18 20:25:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:43 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S125SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:45 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S125SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:46 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S125SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:50 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:51 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:51 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:55 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:55 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:56 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:56 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:56 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:56 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:25:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:25:59 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:26:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:26:15 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:26:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:26:15 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:26:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:26:15 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:26:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:26:22 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:26:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:26:22 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:26:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:26:23 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:26:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:26:23 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S050SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:26:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:26:34 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S025SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:26:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;product&quot; is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:26:34 --> Query error: ERROR:  column reference "product" is ambiguous
LINE 3:         product,
                ^
DETAIL:  It could refer to either a PL/pgSQL variable or a table column.
QUERY:  INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, uom, costperunit, laboractivityrate, laborhour, laborcost, totalcost, activitycode, wt_step)
      SELECT
        product,
        itemcode,
        'Additional Labor',
        'Additional Labor',
        9,
        1,
        'HR',
        0.0,
        0.0,
        .25,
        .25 * laborrateperhour,
        0.0,
        'CUTL',
        '998'
  from temp_items
  where item_uom = 'FT'
CONTEXT:  PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 147 at SQL statement - Invalid query: SELECT * from qw.rope_quote(0,'',0, '70-AAND01','{"RHT3S025SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','RND','NEW','John Lentine','7-10 days ARO','081817JG1625')
ERROR - 2017-08-18 20:28:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(6b311f1f-3ff5-57e1-acee-9abf03066281, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + rank()
        OVER (
          ORDER BY a.itemcode, a.qty) :: INTEGER,
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 284 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:28:39 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(6b311f1f-3ff5-57e1-acee-9abf03066281, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + rank()
        OVER (
          ORDER BY a.itemcode, a.qty) :: INTEGER,
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 284 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '70-ESSE01','{"RHT3S100SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081817JG1628')
ERROR - 2017-08-18 20:28:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(0c86a96d-6f11-5394-8665-3a62812a6d65, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + rank()
        OVER (
          ORDER BY a.itemcode, a.qty) :: INTEGER,
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 284 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:28:42 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(0c86a96d-6f11-5394-8665-3a62812a6d65, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + rank()
        OVER (
          ORDER BY a.itemcode, a.qty) :: INTEGER,
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 284 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '70-ESSE01','{"RHT3S100SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081817JG1628')
ERROR - 2017-08-18 20:28:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(8fad084c-3a7f-5549-a882-62acce1610f3, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + rank()
        OVER (
          ORDER BY a.itemcode, a.qty) :: INTEGER,
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 284 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:28:44 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(8fad084c-3a7f-5549-a882-62acce1610f3, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + rank()
        OVER (
          ORDER BY a.itemcode, a.qty) :: INTEGER,
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 284 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '70-ESSE01','{"RHT3S100SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081817JG1628')
ERROR - 2017-08-18 20:28:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(eb879357-09e4-511c-a818-090662baae08, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + rank()
        OVER (
          ORDER BY a.itemcode, a.qty) :: INTEGER,
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 284 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-08-18 20:28:47 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(eb879357-09e4-511c-a818-090662baae08, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
      SELECT
        o_quoteid,
        coalesce(last_quote_line_no, 0) + rank()
        OVER (
          ORDER BY a.itemcode, a.qty) :: INTEGER,
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 284 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '70-ESSE01','{"RHT3S100SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081817JG1628')
ERROR - 2017-08-18 20:39:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(5f8cba89-4c64-5391-9d3e-e189aa287027, 2) already exists.
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
ERROR - 2017-08-18 20:39:17 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(5f8cba89-4c64-5391-9d3e-e189aa287027, 2) already exists.
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'5f8cba89-4c64-5391-9d3e-e189aa287027',0, '50-0122001','{"RHT3S125SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"},"RHT3S100SD-G":{"quantity":"12","uom":"EA","tolerance":"1-2"},"TW84NYWH":{"quantity":"7","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0123','PLA','NEW','0','7-10 days ARO','081817RR1638')
ERROR - 2017-08-18 20:39:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(5f8cba89-4c64-5391-9d3e-e189aa287027, 2) already exists.
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
ERROR - 2017-08-18 20:39:20 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(5f8cba89-4c64-5391-9d3e-e189aa287027, 2) already exists.
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'5f8cba89-4c64-5391-9d3e-e189aa287027',0, '50-0122001','{"RHT3S125SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"},"RHT3S100SD-G":{"quantity":"12","uom":"EA","tolerance":"1-2"},"TW84NYWH":{"quantity":"7","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0123','PLA','NEW','0','7-10 days ARO','081817RR1638')
ERROR - 2017-08-18 20:39:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(5f8cba89-4c64-5391-9d3e-e189aa287027, 2) already exists.
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
ERROR - 2017-08-18 20:39:20 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(5f8cba89-4c64-5391-9d3e-e189aa287027, 2) already exists.
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'5f8cba89-4c64-5391-9d3e-e189aa287027',0, '50-0122001','{"RHT3S125SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"},"RHT3S100SD-G":{"quantity":"12","uom":"EA","tolerance":"1-2"},"TW84NYWH":{"quantity":"7","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0123','PLA','NEW','0','7-10 days ARO','081817RR1638')
ERROR - 2017-08-18 20:39:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(5f8cba89-4c64-5391-9d3e-e189aa287027, 2) already exists.
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
ERROR - 2017-08-18 20:39:20 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(5f8cba89-4c64-5391-9d3e-e189aa287027, 2) already exists.
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'5f8cba89-4c64-5391-9d3e-e189aa287027',0, '50-0122001','{"RHT3S125SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"},"RHT3S100SD-G":{"quantity":"12","uom":"EA","tolerance":"1-2"},"TW84NYWH":{"quantity":"7","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0123','PLA','NEW','0','7-10 days ARO','081817RR1638')
ERROR - 2017-08-18 20:39:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(944aa041-8cba-5a53-8b81-53b8032c02cc, 1) already exists.
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
ERROR - 2017-08-18 20:39:46 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(944aa041-8cba-5a53-8b81-53b8032c02cc, 1) already exists.
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '70-ESSE01','{"RHT3S125SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"},"TW84PYBK":{"quantity":"3","uom":"EA","tolerance":"1-2"},"TW84NYWH":{"quantity":"4","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081817JG1639')
ERROR - 2017-08-18 20:39:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(6d4f10ca-90ce-5f39-9283-c7ba54b78d93, 1) already exists.
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
ERROR - 2017-08-18 20:39:46 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(6d4f10ca-90ce-5f39-9283-c7ba54b78d93, 1) already exists.
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '70-ESSE01','{"RHT3S125SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"},"TW84PYBK":{"quantity":"3","uom":"EA","tolerance":"1-2"},"TW84NYWH":{"quantity":"4","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081817JG1639')
ERROR - 2017-08-18 20:39:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(9076a1a8-d3f2-5fa0-bad3-2c0bb91d7f31, 1) already exists.
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
ERROR - 2017-08-18 20:39:46 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(9076a1a8-d3f2-5fa0-bad3-2c0bb91d7f31, 1) already exists.
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '70-ESSE01','{"RHT3S125SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"},"TW84PYBK":{"quantity":"3","uom":"EA","tolerance":"1-2"},"TW84NYWH":{"quantity":"4","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081817JG1639')
ERROR - 2017-08-18 20:39:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(a1479f6f-febf-5899-a8e3-c5233e37398e, 1) already exists.
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
ERROR - 2017-08-18 20:39:47 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(a1479f6f-febf-5899-a8e3-c5233e37398e, 1) already exists.
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '70-ESSE01','{"RHT3S125SD-G":{"quantity":"5","uom":"EA","tolerance":"1-2"},"TW84PYBK":{"quantity":"3","uom":"EA","tolerance":"1-2"},"TW84NYWH":{"quantity":"4","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0151','OEM','NEW','0','7-10 days ARO','081817JG1639')
ERROR - 2017-08-18 20:42:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(5eee6cdf-a375-5f59-aa87-c45f904d74bf, 1) already exists.
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
ERROR - 2017-08-18 20:42:02 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(5eee6cdf-a375-5f59-aa87-c45f904d74bf, 1) already exists.
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
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 285 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'',0, '50-220B01','{"TW84NYWH":{"quantity":"1","uom":"EA","tolerance":"1-2"},"RHT3S125SD-G":{"quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 0, '','jgonchar','0123','PLA','NEW','0','7-10 days ARO','081817RR1641')
