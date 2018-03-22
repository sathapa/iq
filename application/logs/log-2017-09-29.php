<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-09-29 04:37:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 736
ERROR - 2017-09-29 04:37:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 747
ERROR - 2017-09-29 04:48:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 736
ERROR - 2017-09-29 04:48:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 747
ERROR - 2017-09-29 05:33:25 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 736
ERROR - 2017-09-29 05:33:25 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 747
ERROR - 2017-09-29 05:33:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 736
ERROR - 2017-09-29 05:33:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 747
ERROR - 2017-09-29 05:35:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  division by zero
CONTEXT:  SQL statement &quot;SELECT
    --CASE WHEN in_product = 'BNS38DF'
    --THEN ((in_netlength * 12.0) - ((in_numberofdrainpan * in_drainlength) * 12.0)) / in_netpersystem
    --ELSE (
    ((in_netlength * 12.0) - (in_numberofdrainpan * in_drainlength * 12.0)) / coalesce(in_numberofsystem * in_netpersystem, 1.0)
  --END&quot;
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 212 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 05:35:16 --> Query error: ERROR:  division by zero
CONTEXT:  SQL statement "SELECT
    --CASE WHEN in_product = 'BNS38DF'
    --THEN ((in_netlength * 12.0) - ((in_numberofdrainpan * in_drainlength) * 12.0)) / in_netpersystem
    --ELSE (
    ((in_netlength * 12.0) - (in_numberofdrainpan * in_drainlength * 12.0)) / coalesce(in_numberofsystem * in_netpersystem, 1.0)
  --END"
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 212 at SQL statement - Invalid query: SELECT * from qw.baynet_quote(0, '', 0,'19520', 'BNNET',20, 10,1, 1, 1, 1,'baynet Instructions','tisuser','0003','IND','','Kapil Tyagi','7-10 days ARO','baynet tag','092917BS1104',0,'',1,1,0)
ERROR - 2017-09-29 05:35:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  division by zero
CONTEXT:  SQL statement &quot;SELECT
    --CASE WHEN in_product = 'BNS38DF'
    --THEN ((in_netlength * 12.0) - ((in_numberofdrainpan * in_drainlength) * 12.0)) / in_netpersystem
    --ELSE (
    ((in_netlength * 12.0) - (in_numberofdrainpan * in_drainlength * 12.0)) / coalesce(in_numberofsystem * in_netpersystem, 1.0)
  --END&quot;
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 212 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 05:35:24 --> Query error: ERROR:  division by zero
CONTEXT:  SQL statement "SELECT
    --CASE WHEN in_product = 'BNS38DF'
    --THEN ((in_netlength * 12.0) - ((in_numberofdrainpan * in_drainlength) * 12.0)) / in_netpersystem
    --ELSE (
    ((in_netlength * 12.0) - (in_numberofdrainpan * in_drainlength * 12.0)) / coalesce(in_numberofsystem * in_netpersystem, 1.0)
  --END"
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 212 at SQL statement - Invalid query: SELECT * from qw.baynet_quote(0, '', 0,'19520', 'BNNET',20, 10,1, 1, 1, 1,'baynet Instructions','tisuser','0003','IND','','Kapil Tyagi','7-10 days ARO','baynet tag','092917BS1104',0,'',1,1,0)
ERROR - 2017-09-29 05:36:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  division by zero
CONTEXT:  SQL statement &quot;SELECT
    --CASE WHEN in_product = 'BNS38DF'
    --THEN ((in_netlength * 12.0) - ((in_numberofdrainpan * in_drainlength) * 12.0)) / in_netpersystem
    --ELSE (
    ((in_netlength * 12.0) - (in_numberofdrainpan * in_drainlength * 12.0)) / coalesce(in_numberofsystem * in_netpersystem, 1.0)
  --END&quot;
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 212 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 05:36:18 --> Query error: ERROR:  division by zero
CONTEXT:  SQL statement "SELECT
    --CASE WHEN in_product = 'BNS38DF'
    --THEN ((in_netlength * 12.0) - ((in_numberofdrainpan * in_drainlength) * 12.0)) / in_netpersystem
    --ELSE (
    ((in_netlength * 12.0) - (in_numberofdrainpan * in_drainlength * 12.0)) / coalesce(in_numberofsystem * in_netpersystem, 1.0)
  --END"
PL/pgSQL function qw.baynet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,integer,integer,integer) line 212 at SQL statement - Invalid query: SELECT * from qw.baynet_quote(0, '', 0,'19520', 'BNNET',20, 10,1, 1, 1, 1,'baynet Instructions','tisuser','0003','IND','','Kapil Tyagi','7-10 days ARO','baynet tag','092917BS1104',0,'',1,1,0)
ERROR - 2017-09-29 05:40:00 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 736
ERROR - 2017-09-29 05:40:00 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 747
ERROR - 2017-09-29 05:51:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 736
ERROR - 2017-09-29 05:51:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 747
ERROR - 2017-09-29 06:34:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 06:34:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: contactCardHtml /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: homePhone /var/www/html/application/controllers/frontend/Crm.php 600
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: mobilePhone /var/www/html/application/controllers/frontend/Crm.php 601
ERROR - 2017-09-29 07:17:20 --> Severity: Notice --> Undefined variable: notes /var/www/html/application/controllers/frontend/Crm.php 622
ERROR - 2017-09-29 07:19:02 --> Severity: Notice --> Undefined variable: contactCardHtml /var/www/html/application/controllers/frontend/Crm.php 604
ERROR - 2017-09-29 07:20:18 --> Severity: Notice --> Undefined variable: contactCardHtml /var/www/html/application/controllers/frontend/Crm.php 604
ERROR - 2017-09-29 09:17:34 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-09-29 09:17:34 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-09-29 09:17:34 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-09-29 09:17:34 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-09-29 09:17:34 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-09-29 09:17:34 --> Severity: Notice --> Undefined variable: select /var/www/html/application/views/frontend/add_user.php 55
ERROR - 2017-09-29 10:56:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 10:56:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 12:50:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 12:50:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 12:01:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:01:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:02:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:02:23 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 12:02:44 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:02:44 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:03:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:03:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 12:03:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:03:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 12:04:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:04:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:04:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:04:34 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 12:04:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:04:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:05:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:05:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 12:06:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:06:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:06:48 --> Severity: Warning --> file_get_contents(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2017-09-29 13:06:48 --> Severity: Warning --> file_get_contents(https://qweb-uat.incord.net/assets/logo.png): failed to open stream: php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/application/libraries/mpdf60/mpdf.php 10431
ERROR - 2017-09-29 13:06:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:06:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 12:06:50 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:06:50 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:09:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:09:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 12:38:51 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:38:51 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 12:39:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:39:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:39:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:39:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 13:40:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:40:50 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 12:42:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:42:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:44:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:44:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 13:45:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:45:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 12:50:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:50:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 12:53:47 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:53:47 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:54:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:54:14 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 12:55:42 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:55:42 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 12:57:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:57:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 12:58:27 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 12:58:27 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:59:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 13:59:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 13:03:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 13:03:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:35:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 13:35:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:36:45 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 13:36:45 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:40:31 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 13:40:31 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:44:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 13:44:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:47:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 13:47:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:49:15 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 13:49:15 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 13:58:30 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 13:58:30 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:04:42 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:04:42 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:07:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:07:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:08:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:08:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:12:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:12:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:13:36 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:13:36 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:14:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:14:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:15:31 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:15:31 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:16:27 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:16:27 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:18:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:18:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:19:01 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:19:01 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:20:28 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:20:28 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:23:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:23:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:26:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:26:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:27:27 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:27:27 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:29:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:29:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:30:45 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:30:45 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:31:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:31:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 14:57:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 14:57:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 15:13:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 15:13:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 15:21:02 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 15:21:02 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 15:25:32 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 15:25:32 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 15:25:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 15:25:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 15:34:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 15:34:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 15:41:50 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 15:41:50 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 15:50:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 15:50:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 15:55:23 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 15:55:23 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 15:58:52 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 15:58:52 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 16:06:23 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 16:06:23 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 16:20:19 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 16:20:19 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 17:22:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 17:22:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 17:58:13 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 17:58:13 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 18:03:08 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 18:03:08 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 19:41:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 19:41:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 18:52:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 18:52:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 19:00:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:00:36 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 19:00:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:00:39 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 19:00:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:00:43 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 19:00:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:00:43 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 19:00:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:00:43 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 19:03:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 19:03:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 19:05:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:05:44 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 19:05:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:05:45 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 19:08:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:08:00 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 19:08:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:08:01 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 19:08:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:08:02 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 19:08:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:08:04 --> Query error: ERROR:  function round(double precision, integer) does not exist
LINE 1: SELECT                   round(price_markup * o_pernetbaseco...
                                 ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT                   round(price_markup * o_pernetbasecost * (1 - (in_discount / 100.00)):: NUMERIC(12, 2) , 2)
    --round((price_markup * round(sum((a.modifiedqty * a.costperunit) + a.laborcost) * (1 - (in_discount / 100.00)), 2)) :: NUMERIC(12, 5), 2)
  FROM temp_items a
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text) line 635 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(0, '5dd4a864-145d-5eaa-b7f2-e03b64fe7d94', 3,'17233', '500', '200-040-02', 6, 6, 'TW84PYBK', '', '', 'THPY69WH', '',  0, '0', 17, '', 0.0, 0.0, 1, 0, 1, 2, 0,'','sudiptab','0003','IND','','Darla Blum','7-10 days ARO','','092917BS0700','',0,'HTPP 1.75in Sq Width:6.00 FT Length: 6.00 FT Mesh Color: White Sewn Border: Twine 84 Nylon White ')
ERROR - 2017-09-29 20:08:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 20:08:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 19:10:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:10:47 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'9550a8a5-a99c-59ec-bc0c-52b5550aa50d',0, '11691','{"0":{"item":"RHT3S125SD-G","quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 55.99, '','annemh','0123','PLA','','Jerry Brick','7-10 days ARO','092917RR1503')
ERROR - 2017-09-29 19:10:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:10:55 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'9550a8a5-a99c-59ec-bc0c-52b5550aa50d',0, '11691','{"0":{"item":"RHT3S125SD-G","quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 55.99, '','annemh','0123','PLA','','Jerry Brick','7-10 days ARO','092917RR1503')
ERROR - 2017-09-29 19:10:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:10:59 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'9550a8a5-a99c-59ec-bc0c-52b5550aa50d',0, '11691','{"0":{"item":"RHT3S125SD-G","quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 55.99, '','annemh','0123','PLA','','Jerry Brick','7-10 days ARO','092917RR1503')
ERROR - 2017-09-29 19:11:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:11:34 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'9550a8a5-a99c-59ec-bc0c-52b5550aa50d',0, '11691','{"0":{"item":"RHT3S125SD-G","quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 55.99, '','annemh','0123','PLA','','Jerry Brick','7-10 days ARO','092917RR1503')
ERROR - 2017-09-29 19:11:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:11:39 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'9550a8a5-a99c-59ec-bc0c-52b5550aa50d',0, '11691','{"0":{"item":"RHT3S125SD-G","quantity":"1","uom":"EA","tolerance":"1-2"}}',  1, 55.99, '','annemh','0123','PLA','','Jerry Brick','7-10 days ARO','092917RR1503')
ERROR - 2017-09-29 20:11:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 20:11:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 19:16:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;qw_quote_detail_idx1&quot;
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement &quot;INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line&quot;
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-09-29 19:16:09 --> Query error: ERROR:  duplicate key value violates unique constraint "qw_quote_detail_idx1"
DETAIL:  Key (quote_id, quote_line_no)=(9550a8a5-a99c-59ec-bc0c-52b5550aa50d, 1) already exists.
CONTEXT:  SQL statement "INSERT INTO qw.qw_quote_detail (
      quote_id, quote_line_no, product, quote_description, dimension, quantity, unitcost, totalcost, freight, discount, pricing_tier, special_instruction, production_location, product_type, function_param)
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
        --to_json(ROW ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
        to_json(ROW ($1, $2, $3, $4, a.item_json, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15))
      FROM temp_items a
      WHERE a.qty != 0.0
      ORDER BY a.detail_line"
PL/pgSQL function qw.rope_quote(integer,character varying,integer,character varying,json,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying) line 287 at SQL statement - Invalid query: SELECT * from qw.rope_quote(1,'9550a8a5-a99c-59ec-bc0c-52b5550aa50d',0, '11691','{"0":{"item":"TW36BPYSD","quantity":"3","uom":"EA","tolerance":"1-2"}}',  1, -66, '','annemh','0123','PLA','','Jerry Brick','7-10 days ARO','092917RR1503')
ERROR - 2017-09-29 19:59:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 19:59:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 20:03:47 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 20:03:47 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 20:50:18 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 20:50:18 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 21:51:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 21:51:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-09-29 20:55:32 --> Severity: Notice --> Undefined offset: 1 /var/www/html/application/controllers/frontend/Home.php 544
ERROR - 2017-09-29 20:55:32 --> Severity: Notice --> Trying to get property of non-object /var/www/html/application/controllers/frontend/Home.php 545
ERROR - 2017-09-29 20:55:32 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 20:55:33 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 20:55:36 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-09-29 20:55:36 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-09-29 21:59:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-09-29 21:59:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
