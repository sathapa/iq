<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-06-07 16:47:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column s.salesperson_initials does not exist
LINE 1: SELECT coalesce(s.salesperson_initials, 'XX')               ...
                        ^
QUERY:  SELECT coalesce(s.salesperson_initials, 'XX')                          FROM qw.dwstatic_salesperson s
    WHERE s.salesperson_id = in_salesperson
CONTEXT:  PL/pgSQL function qw.create_quoteid(character varying) line 9 at SQL statement
SQL statement &quot;select qw.create_quoteid(in_salesperson)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 570 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-07 16:47:44 --> Query error: ERROR:  column s.salesperson_initials does not exist
LINE 1: SELECT coalesce(s.salesperson_initials, 'XX')               ...
                        ^
QUERY:  SELECT coalesce(s.salesperson_initials, 'XX')                          FROM qw.dwstatic_salesperson s
    WHERE s.salesperson_id = in_salesperson
CONTEXT:  PL/pgSQL function qw.create_quoteid(character varying) line 9 at SQL statement
SQL statement "select qw.create_quoteid(in_salesperson)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 570 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'30-A2IS01', '500', '200-040-02', 13, 6, 'NONE', 'NONE', 'NONE', '', '',  0, '0', 3, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0003','IND','NEW','0','7-10 days ARO','')
ERROR - 2017-06-07 16:47:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column s.salesperson_initials does not exist
LINE 1: SELECT coalesce(s.salesperson_initials, 'XX')               ...
                        ^
QUERY:  SELECT coalesce(s.salesperson_initials, 'XX')                          FROM qw.dwstatic_salesperson s
    WHERE s.salesperson_id = in_salesperson
CONTEXT:  PL/pgSQL function qw.create_quoteid(character varying) line 9 at SQL statement
SQL statement &quot;select qw.create_quoteid(in_salesperson)&quot;
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 570 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-06-07 16:47:49 --> Query error: ERROR:  column s.salesperson_initials does not exist
LINE 1: SELECT coalesce(s.salesperson_initials, 'XX')               ...
                        ^
QUERY:  SELECT coalesce(s.salesperson_initials, 'XX')                          FROM qw.dwstatic_salesperson s
    WHERE s.salesperson_id = in_salesperson
CONTEXT:  PL/pgSQL function qw.create_quoteid(character varying) line 9 at SQL statement
SQL statement "select qw.create_quoteid(in_salesperson)"
PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying) line 570 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'30-A2IS01', '500', '200-040-02', 13, 6, 'NONE', 'NONE', 'NONE', '', '',  0, '0', 3, '', 0.0, 0.0, 1, 0, 1, 1, 0,'','sudiptab','0003','IND','NEW','0','7-10 days ARO','')
