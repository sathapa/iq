<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Quoteweb</title>
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
          .top-header p{font:11px/14px  Arial, sans-serif; margin:0px 0 0px 0px;}
          .top-header td{font:11px/14px  Arial, sans-serif;}
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

          table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
              padding:20px;
          }

          td, th {
              border: 0;
              text-align: left;
              padding: 8px;
          }

          th {
              background-color: #dddddd;
          }
          
          .right{    
            margin-left: 20px;
            margin-top: 65px;
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
            font-size:13px;
          }
          .sparent{
            font-family:calibri;
            font-size:13px;
          }
          #container-cover {
            height: 400px;
            width: 400px;
            position: relative;
          }
          #image-cover {
            position: absolute;
            margin-left:195px;
            margin-top:50px;
            left: 0;
            top: 0;
          }
          #text-cover {
            z-index: 100;
            position: absolute;
            color: white;
            font-size: 24px;
            font-weight: bold;
            left: 150px;
            top: 350px;
          }
           #customer {
            position: absolute;
            margin-left:-55px;
            margin-bottom:50px;
            margin-top:-100px;
            left: 0;
            top: 0;
          }
          #surveyer {
            position: absolute;
            margin-left:235px;
            margin-right:20px;
            margin-top:-20px;
            margin-bottom:155px;
            left: 0;
            top: 0;
          }
          #footer {
              clear: both;
              position: relative;
              z-index: 10;
              height: 3em;
              margin-top: 15em;
          }
        </style>
  </head>
  <body>
  
           
          
   <div class="container-fluid">
       
      <div class="row">
        <div id="container-cover">
          <img id="image-cover" src="<?=base_url();?>assets/front/images/cover-suvey.jpg" width="93" border="0/" height="900px" width="800px">
        </div>
      </div>
        <?php

          if(!empty($customer_data)){
                      $customer_d = $customer_data[0];
                      $company = (!empty($customer_d->companyname))?$customer_d->companyname:'';
                      $city = (!empty($customer_d->address1_city))?$customer_d->address1_city:'';
                      $state = (!empty($customer_d->address1_stateprovince))?$customer_d->address1_stateprovince:''; 
                      $country = (!empty($customer_d->address1_countryregion))?$customer_d->address1_countryregion:''; 
                      $surveyer = (!empty($customer_d->user_id))?$customer_d->user_id:'';           
                      $date = (!empty($customer_d->survey_date))?$customer_d->survey_date:'';
                      $date = date('F j, Y',strtotime($date));
                     
  echo '<div id="customer" class="row">
        <div style="font-weight: bold;text-align:center;">'.$company.'</div>
        <div style="font-weight: bold;text-align:center;">'.$city.' '.$state.', '.$country.'</div>
        <div style="font-weight: bold;text-align:center;">'.$date.'</div>
      </div>';
      } ?>  
<?php if(!empty($userName)){
    $userName = $userName[0];
    $fname = $userName->first_name;
    $lname = $userName->last_name;
    $surveyer = $fname." ".$lname;


  echo '<div id="surveyer" class="row">
        <div style="font-weight: bold;">Survey conducted by:</div>
        <div style="font-weight: bold;margin-left:20px;">'.$surveyer.'</div>
      </div>
     </div>'; 
    } ?>
         
     

      <div id="footer">
         <table width="50%" border="0" cellpadding="0" cellspacing="0"  style="margin-left:-8px;margin-top:10px">
                  <tr>
                    <td width="10%" style="margin-right:7px;">
                      <img src="<?=base_url();?>assets/front/images/incord-play.png" width="93" border="0/" height="104">
                    </td>
                    <td valign="top" align="left" width="90%" style="font-size: 14px; padding-top:8px;line-height:18px;">
                          <div>226 Upton Road<br/>
                          Colchester, CT 06415<br/>
                          860-537-1414<br/>
                          Incord.com/play</div>
                    </td> 
                  </tr>
           </table>
       </div>

  </body> 
    
  
</html>
