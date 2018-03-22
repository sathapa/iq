<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-01 18:37:35 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-11-01 18:37:35 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-11-01 19:40:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;qw.dwstatic_qw_products1&quot; does not exist
LINE 5:   LEFT JOIN  qw.dwstatic_qw_products1 b  ON  (a.product = b....
                     ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location, d.*, 000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a
  LEFT JOIN  qw.dwstatic_qw_products1 b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-01 19:40:37 --> Query error: ERROR:  relation "qw.dwstatic_qw_products1" does not exist
LINE 5:   LEFT JOIN  qw.dwstatic_qw_products1 b  ON  (a.product = b....
                     ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location, d.*, 000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a
  LEFT JOIN  qw.dwstatic_qw_products1 b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN - Invalid query: select * from qw.get_quote_bom_details('ec417e41-2aa6-5fe6-84c2-d12a2f5fa676',0,'sudiptab');
ERROR - 2017-11-01 19:52:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column d.detail_labor_cost1 does not exist
LINE 4: ...tail_quantity, d.detail_uom, d.detail_dimension,  d.detail_l...
                                                             ^
HINT:  Perhaps you meant to reference the column &quot;d.detail_labor_cost&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location,
d.quote_id, d.quote_line_no, d.detail_id, d.product, d.detail_itemcode, d.detail_description, d.detail_optiontype,
  d.detail_activitycode, d.detail_wt_step, d.detail_quantity, d.detail_uom, d.detail_dimension,  d.detail_labor_cost1,
  d.instruction, d.inventory_location, d.detail_base_cost, d.activity_description,
  d.labor_unit_min, d.nominal_qty, e.shipweight as ship_weight,
000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  LEFT JOIN  sage.ci_item e  ON  (d.detail_itemcode = e.itemcode)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-01 19:52:20 --> Query error: ERROR:  column d.detail_labor_cost1 does not exist
LINE 4: ...tail_quantity, d.detail_uom, d.detail_dimension,  d.detail_l...
                                                             ^
HINT:  Perhaps you meant to reference the column "d.detail_labor_cost".
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location,
d.quote_id, d.quote_line_no, d.detail_id, d.product, d.detail_itemcode, d.detail_description, d.detail_optiontype,
  d.detail_activitycode, d.detail_wt_step, d.detail_quantity, d.detail_uom, d.detail_dimension,  d.detail_labor_cost1,
  d.instruction, d.inventory_location, d.detail_base_cost, d.activity_description,
  d.labor_unit_min, d.nominal_qty, e.shipweight as ship_weight,
000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  LEFT JOIN  sage.ci_item e  ON  (d.detail_itemcode = e.itemcode)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN - Invalid query: select * from qw.get_quote_bom_details('ec417e41-2aa6-5fe6-84c2-d12a2f5fa676',0,'sudiptab');
ERROR - 2017-11-01 20:52:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  COALESCE types character varying and double precision cannot be matched
LINE 18: ...r_unit_min, d.nominal_qty, COALESCE(e.shipweight, d.ship_wei...
                                                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location,
d.quote_id, d.quote_line_no, d.detail_id, d.product, d.detail_itemcode, d.detail_description, d.detail_optiontype,
  d.detail_activitycode, d.detail_wt_step, d.detail_quantity, d.detail_uom, d.detail_dimension,
  case in_user  when  'meredithr' then d.detail_material_cost
                when  'danr' then d.detail_material_cost
                when  'sudiptab' then d.detail_material_cost
                else 999999999
  end as detail_material_cost
  ,
    case in_user  when  'meredithr' then d.detail_labor_cost
                when  'danr' then d.detail_labor_cost
                when  'sudiptab' then d.detail_labor_cost
                else 999999999
  end as detail_labor_cost
  ,
  d.instruction, d.inventory_location, d.detail_base_cost, d.activity_description,
  d.labor_unit_min, d.nominal_qty, COALESCE(e.shipweight, d.ship_weight) as ship_weight,
000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  LEFT JOIN  sage.ci_item e  ON  (d.detail_itemcode = e.itemcode)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-01 20:52:44 --> Query error: ERROR:  COALESCE types character varying and double precision cannot be matched
LINE 18: ...r_unit_min, d.nominal_qty, COALESCE(e.shipweight, d.ship_wei...
                                                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location,
d.quote_id, d.quote_line_no, d.detail_id, d.product, d.detail_itemcode, d.detail_description, d.detail_optiontype,
  d.detail_activitycode, d.detail_wt_step, d.detail_quantity, d.detail_uom, d.detail_dimension,
  case in_user  when  'meredithr' then d.detail_material_cost
                when  'danr' then d.detail_material_cost
                when  'sudiptab' then d.detail_material_cost
                else 999999999
  end as detail_material_cost
  ,
    case in_user  when  'meredithr' then d.detail_labor_cost
                when  'danr' then d.detail_labor_cost
                when  'sudiptab' then d.detail_labor_cost
                else 999999999
  end as detail_labor_cost
  ,
  d.instruction, d.inventory_location, d.detail_base_cost, d.activity_description,
  d.labor_unit_min, d.nominal_qty, COALESCE(e.shipweight, d.ship_weight) as ship_weight,
000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  LEFT JOIN  sage.ci_item e  ON  (d.detail_itemcode = e.itemcode)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN - Invalid query: select * from qw.get_quote_bom_details('ec417e41-2aa6-5fe6-84c2-d12a2f5fa676',5,'sudiptab');
ERROR - 2017-11-01 20:58:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  type &quot;double&quot; does not exist
LINE 18: ...r_unit_min, d.nominal_qty, COALESCE(e.shipweight::DOUBLE, d....
                                                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location,
d.quote_id, d.quote_line_no, d.detail_id, d.product, d.detail_itemcode, d.detail_description, d.detail_optiontype,
  d.detail_activitycode, d.detail_wt_step, d.detail_quantity, d.detail_uom, d.detail_dimension,
  case in_user  when  'meredithr' then d.detail_material_cost
                when  'danr' then d.detail_material_cost
                when  'sudiptab' then d.detail_material_cost
                else 999999999
  end as detail_material_cost
  ,
    case in_user  when  'meredithr' then d.detail_labor_cost
                when  'danr' then d.detail_labor_cost
                when  'sudiptab' then d.detail_labor_cost
                else 999999999
  end as detail_labor_cost
  ,
  d.instruction, d.inventory_location, d.detail_base_cost, d.activity_description,
  d.labor_unit_min, d.nominal_qty, COALESCE(e.shipweight::DOUBLE, d.ship_weight) as ship_weight,
000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  LEFT JOIN  sage.ci_item e  ON  (d.detail_itemcode = e.itemcode)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-01 20:58:08 --> Query error: ERROR:  type "double" does not exist
LINE 18: ...r_unit_min, d.nominal_qty, COALESCE(e.shipweight::DOUBLE, d....
                                                              ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(quote_dtl))) FROM (
SELECT  a.*, COALESCE (a.product_type, b.product_type) AS product_type, c.proposal_num, c.freight, c.shipping_location,
d.quote_id, d.quote_line_no, d.detail_id, d.product, d.detail_itemcode, d.detail_description, d.detail_optiontype,
  d.detail_activitycode, d.detail_wt_step, d.detail_quantity, d.detail_uom, d.detail_dimension,
  case in_user  when  'meredithr' then d.detail_material_cost
                when  'danr' then d.detail_material_cost
                when  'sudiptab' then d.detail_material_cost
                else 999999999
  end as detail_material_cost
  ,
    case in_user  when  'meredithr' then d.detail_labor_cost
                when  'danr' then d.detail_labor_cost
                when  'sudiptab' then d.detail_labor_cost
                else 999999999
  end as detail_labor_cost
  ,
  d.instruction, d.inventory_location, d.detail_base_cost, d.activity_description,
  d.labor_unit_min, d.nominal_qty, COALESCE(e.shipweight::DOUBLE, d.ship_weight) as ship_weight,
000.0::FLOAT AS actual_laborunitmin, '' AS expected_shipping_date,
  '' as notes
FROM qw.qw_quote_detail a
  LEFT JOIN  qw.dwstatic_qw_products b  ON  (a.product = b.product)
  JOIN qw.qw_quote_header c  ON (a.quote_id = c.quote_id)
  JOIN qw.qw_quote_detail_items d ON (a.quote_id = d.quote_id and a.quote_line_no = d.quote_line_no)
  LEFT JOIN  sage.ci_item e  ON  (d.detail_itemcode = e.itemcode)
  WHERE a.quote_id = in_orig_quote_id
  and (in_quote_lineno = 0 or a.quote_line_no = in_quote_lineno)
ORDER BY d.quote_id, d.quote_line_no, d.detail_wt_step, d.detail_id )
quote_dtl
CONTEXT:  PL/pgSQL function qw.get_quote_bom_details(character varying,integer,text) line 7 at RETURN - Invalid query: select * from qw.get_quote_bom_details('ec417e41-2aa6-5fe6-84c2-d12a2f5fa676',5,'sudiptab');
ERROR - 2017-11-01 20:59:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-11-01 20:59:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
