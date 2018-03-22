<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-06-14 17:08:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type double precision: &quot;1hunna&quot;
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a&quot;
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:08:47 --> Query error: ERROR:  invalid input syntax for type double precision: "1hunna"
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a"
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement - Invalid query: SELECT * from qw.writein_quote(0, '', 0,'10-ALOH01', '{"BIGROPE1.75":{"description":"Little Big Rope Assembly<br \/> OAL:<br \/>","quantity":"2","price":"1hunna"}}', 1, 0,'','jgonchar','1351','SAF','NEW','Trish Gabriel','7-10 days ARO','')
ERROR - 2017-06-14 17:08:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type double precision: &quot;1hunna&quot;
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a&quot;
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:08:51 --> Query error: ERROR:  invalid input syntax for type double precision: "1hunna"
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a"
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement - Invalid query: SELECT * from qw.writein_quote(0, '', 0,'10-ALOH01', '{"BIGROPE1.75":{"description":"Little Big Rope Assembly<br \/> OAL:<br \/>","quantity":"2","price":"1hunna"}}', 1, 0,'','jgonchar','1351','SAF','NEW','Trish Gabriel','7-10 days ARO','')
ERROR - 2017-06-14 17:08:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type double precision: &quot;1hunna&quot;
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a&quot;
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:08:55 --> Query error: ERROR:  invalid input syntax for type double precision: "1hunna"
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a"
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement - Invalid query: SELECT * from qw.writein_quote(0, '', 0,'10-ALOH01', '{"BIGROPE1.75":{"description":"Little Big Rope Assembly<br \/> OAL:<br \/>","quantity":"2","price":"1hunna"}}', 1, 0,'','jgonchar','1351','SAF','NEW','Trish Gabriel','7-10 days ARO','')
ERROR - 2017-06-14 17:08:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type double precision: &quot;1hunna&quot;
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a&quot;
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:08:56 --> Query error: ERROR:  invalid input syntax for type double precision: "1hunna"
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a"
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement - Invalid query: SELECT * from qw.writein_quote(0, '', 0,'10-ALOH01', '{"BIGROPE1.75":{"description":"Little Big Rope Assembly<br \/> OAL:<br \/>","quantity":"2","price":"1hunna"}}', 1, 0,'','jgonchar','1351','SAF','NEW','Trish Gabriel','7-10 days ARO','')
ERROR - 2017-06-14 17:10:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type double precision: &quot;1hunna&quot;
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a&quot;
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:10:01 --> Query error: ERROR:  invalid input syntax for type double precision: "1hunna"
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a"
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement - Invalid query: SELECT * from qw.writein_quote(0, '', 0,'10-ALOH01', '{"BIGROPE1.75":{"description":"Little Big Rope Assembly<br \/> OAL:<br \/>","quantity":"2","price":"1hunna"}}', 1, 0,'','jgonchar','1351','SAF','NEW','Trish Gabriel','7-10 days ARO','')
ERROR - 2017-06-14 17:10:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type double precision: &quot;1hunna&quot;
CONTEXT:  SQL statement &quot;INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a&quot;
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:10:31 --> Query error: ERROR:  invalid input syntax for type double precision: "1hunna"
CONTEXT:  SQL statement "INSERT INTO temp_items (product, itemcode, optiontype, description, detail_line, qty, modifiedqty, uom, costperunit, laborrateperhr, laborhour, laboractivityrate, laborcost, totalcost, activitycode, wt_step)
    SELECT
      a.item_code,
      a.item_code,
      'writein',
      item_description,
      99,
      a.item_qty :: FLOAT,
      a.item_qty :: FLOAT,
      'EA',
      a.item_unit_price :: FLOAT,
      0.0,
      0.0,
      0.0,
      0.0,
      0.0,
      'XXX',
      '000'
    FROM temp_writein_items a"
PL/pgSQL function qw.writein_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 98 at SQL statement - Invalid query: SELECT * from qw.writein_quote(0, '', 0,'10-ALOH01', '{"BIGROPE1.75":{"description":"Little Big Rope Assembly<br \/> OAL:<br \/>","quantity":"2","price":"1hunna"}}', 1, 0,'','jgonchar','1351','SAF','NEW','Trish Gabriel','7-10 days ARO','')
ERROR - 2017-06-14 17:24:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;S01&quot;
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:24:13 --> Query error: ERROR:  syntax error at or near "S01"
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ - Invalid query: select * from qw.get_customer_defaults('40-3B'S01')
ERROR - 2017-06-14 17:27:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;S01&quot;
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:27:00 --> Query error: ERROR:  syntax error at or near "S01"
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ - Invalid query: select * from qw.get_customer_defaults('40-3B'S01')
ERROR - 2017-06-14 17:27:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  unterminated quoted string at or near &quot;'b'')&quot;
LINE 1: select * from qw.get_all_customer('b'')
                                          ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:27:09 --> Query error: ERROR:  unterminated quoted string at or near "'b'')"
LINE 1: select * from qw.get_all_customer('b'')
                                          ^ - Invalid query: select * from qw.get_all_customer('b'')
ERROR - 2017-06-14 17:27:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;s&quot;
LINE 1: select * from qw.get_all_customer('b's')
                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:27:10 --> Query error: ERROR:  syntax error at or near "s"
LINE 1: select * from qw.get_all_customer('b's')
                                             ^ - Invalid query: select * from qw.get_all_customer('b's')
ERROR - 2017-06-14 17:27:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;S01&quot;
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:27:16 --> Query error: ERROR:  syntax error at or near "S01"
LINE 1: select * from qw.get_customer_defaults('40-3B'S01')
                                                      ^ - Invalid query: select * from qw.get_customer_defaults('40-3B'S01')
ERROR - 2017-06-14 17:30:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:30:38 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',1000, 500,564.269, 'RNF16GN', 'HCJSD', 'HT445SD', 955, 1, 0,'paint a smiley face on it','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:30:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:30:40 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',1000, 500,564.269, 'RNF16GN', 'HCJSD', 'HT445SD', 955, 1, 0,'paint a smiley face on it','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:30:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:30:47 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',1000, 500,564.269, 'RNF16GN', 'HCJSD', 'HT445SD', 6, 1, 0,'paint a smiley face on it','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:30:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:30:55 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',1000, 500,66, 'RNF16GN', 'HCJSD', 'HT445SD', 9220, 1, 0,'paint a smiley face on it','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:31:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:31:03 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',1000, 500,66, 'RNF16GN', 'HCJSD', 'HT445SD', 9220, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:31:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:31:04 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',1000, 500,66, 'RNF16GN', 'HCJSD', 'HT445SD', 9220, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:31:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:31:44 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',6, 6,66, 'RNF16GN', 'HCJSD', 'HT445SD', 9220, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:31:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:31:48 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',6, 6,6, 'RNF16GN', 'HCJSD', 'HT445SD', 9220, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:32:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:32:04 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',6, 6,6666, 'RNF16GN', 'HCJSD', 'HT445SD', 900, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:32:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:32:21 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',666, 665,6, 'RNF16GN', 'HCJSD', 'HT445SD', 900, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:32:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:32:22 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',666, 665,6, 'RNF16GN', 'HCJSD', 'HT445SD', 900, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:32:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:32:32 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',666, 665,6, 'RNF16GN', 'HCJSD', 'HT445SD', 900, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:32:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:32:34 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',666, 665,6, 'RNF16GN', 'HCJSD', 'HT445SD', 900, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:32:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:32:37 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',666, 665,6, 'RNF16GN', 'HCJSD', 'HT445SD', 900, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:32:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:32:44 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',666, 665,6, 'RNF16GN', 'HCJSD', 'HT445SD', 600, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
ERROR - 2017-06-14 17:32:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a&quot;
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-14 17:32:45 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (in_netnumber * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                              (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
  FROM temp_items a"
PL/pgSQL function qw.lilypad_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,character varying,character varying,character varying,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 307 at SQL statement - Invalid query: SELECT * from qw.lilypad_quote(0, '', 0,'50-2POI01', 'LPN-SB',666, 665,6, 'RNF16GN', 'HCJSD', 'HT445SD', 600, 1, 0,'idk','jgonchar','0123','BAY','NEW','Chris V','56 days ARO','')
