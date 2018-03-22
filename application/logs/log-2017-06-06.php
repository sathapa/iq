<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-06-06 19:51:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 19:51:21 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '30-AAIN01-201706060636',0 ,'30-AAIN01', 'PSNC', 20, 10, 2, 2, 0, '','sudiptab','0003','IND','NEW','Gilbert Deleon','7-10 days ARO','')
ERROR - 2017-06-06 19:51:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 19:51:42 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '30-AAIN01-201706060636',0 ,'30-AAIN01', 'PSNC', 20, 12, 5, 2, 0, '','sudiptab','0003','IND','NEW','Gilbert Deleon','7-10 days ARO','')
ERROR - 2017-06-06 19:51:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 19:51:52 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '30-AAIN01-201706060636',0 ,'30-AAIN01', 'PSNC', 20, 14, 1, 2, 0, '','sudiptab','0003','IND','NEW','Gilbert Deleon','7-10 days ARO','')
ERROR - 2017-06-06 19:52:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 19:52:11 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '30-AAIN01-201706060636',0 ,'30-AAIN01', 'PSNC', 20, 18, 2, 2, 0, '','sudiptab','0003','IND','NEW','Gilbert Deleon','7-10 days ARO','')
ERROR - 2017-06-06 19:54:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 19:54:21 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'30-ABAC01', 'PSNC', 20, 10, 2, 2, 0, '','sudiptab','0240','IND','NEW','0','7-10 days ARO','10ft x 20ft: 2 nets  $379')
ERROR - 2017-06-06 19:54:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 19:54:37 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'30-ABAC01', 'PSNC', 20, 10, 2, 2, 0, '','sudiptab','0240','IND','NEW','0','7-10 days ARO','10ft x 20ft: 2 nets  $379')
ERROR - 2017-06-06 19:54:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 19:54:57 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'30-ABAC01', 'PSNC', 20, 10, 2, 2, 0, '','sudiptab','0240','IND','NEW','0','7-10 days ARO','379')
ERROR - 2017-06-06 19:58:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 19:58:40 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'30-ABAC01', 'PSNC', 20, 10, 2, 2, 0, '','sudiptab','0240','IND','NEW','0','7-10 days ARO','')
ERROR - 2017-06-06 19:58:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 19:58:51 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'30-ABAC01', 'PSNC', 20, 10, 2, 2, 0, '','sudiptab','0240','IND','NEW','0','7-10 days ARO','')
ERROR - 2017-06-06 19:58:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 19:58:54 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'30-ABAC01', 'PSNC', 20, 10, 2, 2, 0, '','sudiptab','0240','IND','NEW','0','7-10 days ARO','')
ERROR - 2017-06-06 20:00:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 20:00:36 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'60-AAI01', 'PSNC', 20, 10, 1, 2, 0, '','sudiptab','0146','SPT','NEW','Brian Holladay','7-10 days ARO','')
ERROR - 2017-06-06 20:02:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 20:02:55 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'60-AAI01', 'PSNC', 20, 10, 1, 2, 0, '','sudiptab','0146','SPT','NEW','Brian Holladay','7-10 days ARO','')
ERROR - 2017-06-06 20:05:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;quote_line_no&quot; is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-06 20:05:20 --> Query error: ERROR:  column "quote_line_no" is of type integer but expression is of type text
LINE 6:         o_product,     o_quoteid,
                ^
HINT:  You will need to rewrite or cast the expression.
QUERY:  INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, tag_number, sage_description, function_param)
      SELECT

        in_product,
        o_product,     o_quoteid,
        coalesce(last_quote_line_no, 0) + 1,
        o_dimension,
        in_netnumber,
        o_pernetcost,
        o_totalnetcost,
        o_freight,
        in_discount,
        in_pricingtier,
        in_spl_instruction,
        qw.get_location(2, 'XX', in_product, 'MTO', 'XX'),
        'Custom PSN',
        in_tagnum,
        coalesce(in_tagnum, '') || E'\n' || in_product || ' : ' ||  regexp_replace(o_product, ';', E'\n'),
        to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19))
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 398 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'60-AAI01', 'PSNC', 20, 10, 1, 2, 0, '','sudiptab','0146','SPT','NEW','Brian Holladay','7-10 days ARO','')
