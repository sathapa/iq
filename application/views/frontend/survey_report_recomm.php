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

          #header { position: fixed; left: 0px; top: -180px; right: 0px; height: 150px; text-align: center; border-bottom: 3px solid #4682B4;}
           #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; text-decoration: overline;}
           #footer .page:after { content: counter(page, upper-roman); }

          
          table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
              padding:20px;
          }

          td, th {
              border: 1px solid lightgrey;
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
           i {
              border-bottom: 2px solid #4682B4;
              padding: 0 0 4px;
          }
          .recom_up{
            margin-top:-5px;
          }
        </style>
  </head>
  <body>
 <div id="header">
     <h3><i>Attraction Details</i></h3>
    </div>
    <div class="container-fluid">

           <?php   
                if(!empty($customer_data)){
                    $customer_data = $customer_data[0];
                    $customer_data = get_object_vars($customer_data);

                    $recomm = $customer_data['recommend'];
                  
                   
              ?>

      
      <div class="row">
        Your Site Survey Specialist has noted the following recommendations to improve the appearance, longevity,
        safety and effectiveness of your park’s netting.
        <ul>
          <?php echo "<li>".$recomm."</li>";?>
          <li class="recom_up">When cutting netting, terminate each mesh end with heat to reduce fraying.</li>
          <li>Change lashing cord from #36 to larger diameter cordage to reduce net laceration.</li>
          <li>Lash bed liner separate from Cargo Climb Net to reduce time when replacing liner.</li>
          <li>Replace Cargo Climb Net cable attachments with Netform Rope Lengths to prolong longevity.</li>
          <li> Repair small holes in Liners and Barrier Nets with a needle in thread to reduce enlargement of holes as
            soon as possible.</li>
          <li>Terminate 1¼” ProManila hand rails with heat to reduce fraying</li>
           <li>Replace Cargo Climb Net ramps that are 1/2” polyester with 5/8” polyester to prolong longevity.</li>
          <li>Use same color lashing cord as netting panels for aesthetic purposes.</li>
          <li>Terminate lashing cord with heat to reduce fraying.</li>
          <li>Join lashing cord together rather than terminating and restarting to reduce lashing cord to unravel.</li>
        </ul>
          
      </div>

      <?php 
        }
    ?>

    </div>
  </body>
</html>
