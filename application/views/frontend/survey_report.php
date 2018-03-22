<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Quoteweb</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
  
          a {
            color: #5D6975;
            text-decoration: underline;
          }

          body {
            position: relative;
            color: #001028;
            background: #FFFFFF; 
            font-family: Arial, sans-serif; 
            font-size: 14px; 
            font-family: Arial;
            margin:0;
            height:100%;

          }
          html{ height:100%;}
          .quantity-tabel p{font:11px/14px  Arial, sans-serif;}
          .quantity-tabel td{font:11px/14px  Arial, sans-serif; padding:8px;}
          .top-header p{font:18px/22px  Arial, sans-serif; margin:0px 0 0px 0px;}
          .top-header td{font:18px/22px  Arial, sans-serif;}
          .contact p{font:11px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
          .contact td{font:11px/14px  Arial, sans-serif;}
          .contact p span{ display: block;}
          .footer p{font:11px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
          .footer td{font:11px/14px  Arial, sans-serif;}
          .quantity-tabel p{font:11px/14px  Arial, sans-serif; margin:0px 0 5px 0px;}
          .quantity-tabel th{font:11px/14px  Arial, sans-serif;border-left: 1px solid #000000; border-bottom: 1px solid #000000;
            border-top: 1px solid #000000;}
          .quantity-tabel th:last-child{ border-right:1px solid #000;;}

          .quantity-tabel td{font:11px/14px  Arial, sans-serif;border-left: 1px solid #000000; border-bottom:1px solid #000;}
          .quantity-tabel tr td:last-child{ border-right:1px solid #000;}
          .total-price td{font:11px/14px  Arial, sans-serif;}
          .total-price p{font:11px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
          .date-filde p{font:11px/14px  Arial, sans-serif;  margin:0px 0 5px 0px;}
          .date-filde td{font:11px/14px  Arial, sans-serif;}

           #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; text-align: center; border-bottom: 3px solid #4682B4;}
           #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; text-decoration: overline;}
           #footer .page:after { content: counter(page, upper-roman); }

          table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
              padding:17px;
          }
         
          td, th {
              border: 1px solid lightgrey;
              text-align: left;
              padding: 4px;
              margin:4px;
          }

          th {
              background-color: #dddddd;
          }
          
          .right{    
            margin-left: 20px;
            margin-top: 45px;
            margin-right: 5px;
          }
          .contact{
            margin-left:5px;
            margin-right:20px;
          }
          .stitle{
            font-family:verdena;
            font-size : 15px;
            font-weight: bold;
          }
          .schild{
            font-family:calibri;
            font-size:12px;
          }
          .sparent{
            font-family:calibri;
            font-size:12px;
          }

        </style>
  </head>
  <body>
    <div id="header">
     <h3><i>Attraction Details</i></h3>
    </div>

    <div class="container-fluid">

           <?php  
                if(!empty($survey_data)){
                 
                    foreach($survey_data as $val){

                      if(!empty($val->profile_img)){
                        $img = '<img src="'.base_url().'uploads/survey/'.$val->profile_img.'" height="120px" width="120px">';
                      }
                      else{
                        $img = '<img src="'.base_url().'uploads/survey/noimage.png" height="120px" width="120px">';
                      }
                      $condition = !empty($val->condition)?$val->condition:'N/A';
                        if($condition == 1){$condition = "Excellent";}
                        if($condition == 2){$condition = "Good";}
                        if($condition == 3){$condition = "Fair";}
                        if($condition == 4){$condition = "Poor";}

                      $shape = !empty($val->shape)?$val->shape:'N/A';
                       if($shape == 1){$shape = "R";}
                       if($shape == 2){$shape = "T";}
                       if($shape == 3){$shape = "C";}
                       if($shape == 4){$shape = "O";}

                      $drawing = !empty($val->drawing)?$val->drawing:'N/A';
                       if($drawing == 1){$drawing = "Y";}
                       if($drawing == 0){$drawing = "N";}
                      
              ?>

      
      <div class="row">
        <div class="right">
              <table width="100%" nobr="true" class="inner top-header" border="1" cellpadding="0" cellspacing="0" >
                <tr >
                  
                   <td nobr="true" style="border:white;margin-left:20px" colspan="7" ><span class="stitle"><?=strtoupper($val->item_name)?></span></td>
                  
                    
                   <td nobr="true" style="display:absolute;float:right;border:white;" colspan="5" align="right"><span class="stitle">Qty: <?=$val->quantity?></span></td>
                   
                </tr>
                <tr>
                  <td width="20%" colspan="4" rowspan="7" align=center valign=middle><?=$img?></td>
                 
                  <th width="25%"><span class="sparent">Netting Material</span></th>
                  <td width="20%" ><span class="schild"><?=!empty($val->net_material)?$val->net_material:'N/A'?></span></td>
                  <th width="20%"><span class="sparent">Condition</span></th>
                  <td width="15%"><span class="schild"><?=$condition?></span></td>
                </tr>
                <tr>
                  <th ><span class="sparent">Lashing Material</span></th>
                  <td ><span class="schild"><?=!empty($val->lash_material)?$val->lash_material:'N/A'?></span></td>
                  <th ><span class="sparent">Shape(R,T,C,O)</span></th>
                  <td ><span class="schild"><?=$shape?></span></td>
                </tr>
                <tr>
                  <th ><span class="sparent">Rope Material</span></th>
                  <td ><span class="schild"><?=!empty($val->rope_material)?$val->rope_material:'N/A'?></span></td>
                  <th ><span class="sparent">Notes</span></th>
                  <td ><span class="schild"><?=!empty($val->notes)?$val->notes:'N/A'?></span></td>
                </tr>
                <tr >
                  <th ><span class="sparent">Height (ft in)</span></th>
                  <td ><span class="schild"><?=!empty($val->item_height)?$val->item_height:'N/A'?> FT</span></td>
                  <th ><span class="sparent">Drawing (Y/N)</span></th>
                  <td ><span class="schild"><?=$drawing?></span></td>
                </tr>
                <tr >
                 
                  <th ><span class="sparent">Length (ft in)</span></th>
                  <td ><span class="schild"><?=!empty($val->item_length)?$val->item_length:'N/A'?> FT</span></td>
                  <th ><span class="sparent">Drawing Page #</span></th>
                  <td ><span class="schild"><?=!empty($val->drawing_pg)?$val->drawing:'N/A'?></span></td>
                </tr>
              </table>
           </div>
      </div>

      <?php 
        }
      }
    ?>

    </div>
    <div id="footer">
      
    </div>
   
  </body>
</html>
