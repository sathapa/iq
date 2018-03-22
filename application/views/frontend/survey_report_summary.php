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
          .section_title{
            margin-left:-100px;
          }
          i {
              border-bottom: 2px solid #4682B4;
              padding: 0 0 4px;
          }
          .list_sum{
            margin-top:-10px;
          }
          .sum_content2{
                       margin-top:10px;

          }
        </style>
  </head>
  <body>
   <div id="header">
     <h3><i>Report Summary</i></h3>
    </div>
    <div class="container-fluid">

         <?php   
                if(!empty($customer_data)){
                    $customer_data = $customer_data[0];
                    $customer_data = get_object_vars($customer_data);
                    $summary = $customer_data["summary"];
                    
                   
              ?>

      
      <div class="row">
        <div class="content1">
          Thank you for the opportunity to thoroughly evaluate your park’s netting systems. The following
          report includes results from our 360 Park Net Survey, as recently performed at Castaway
          Bay at Cedar Point. This report will act as a guide as well as an archive, allowing your park’s
          management to best understand your net inventory, their present condition and consider
          maintenance and/or replacement options for both immediate and long-term action. <br>
          <br>
          Sections include:
          <ul>
            <li>Report Summary</li>
            <li>Attraction Details</li>
            <li>Recommendations</li>
          </ul>
          A representative of InCord Play will be in contact with you to review the results of our 360 Park Net
          Survey in detail.
        </div>



        <div class="content2">
          <h4><i>Summary</i></h4>
          <div class="sum_content1">Overall netting condition:</div>
          <div class="sum_content2">Several points of concern were discovered within your park’s netting systems including:</div>
          <ul class="list_sum"><li><?php echo $summary; ?></li></ul>
        </div>

      </div>

      <?php 
      }
    ?>

    </div>
  </body>
</html>
