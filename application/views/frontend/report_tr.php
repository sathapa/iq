<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Test Result</title>
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

          .mtxt{
              background-color: darkgrey;
              border-color: 2px black;
              font-size:20px;
              font-family:Times;
              font-weight: 75px;
              margin-top:14px;
              text-align: center;
              margin-bottom: 14px;
              padding-top:10px;
              padding-bottom:5px;

          }

          table {
              font-family: Comic, sans-serif;
              font-size:14px;
              border-collapse: collapse;
              width: 100%;
          }

          td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
          }

          tr:nth-child(even) {
              background-color: #dddddd;
          }
          table.result{
            margin-top:50px;
          }
          table.summary{
            margin-top:50px;
          }
          table.conc{
            margin-top:280px;
            font-size:14px;
            font-family:Arial;
          }

        </style>
  </head>
  <body>

    <div class="container-fluid">
    <div class="mtxt">
      Incord <br><hr>
      Product/Design Test Record
    </div> 

    <?php  
      if(!empty($tdata)){
       $tdata = $tdata[0];  
       $identity =  $tdata->sample_identity;
       $test_recordno = $tdata->test_recordno;
       $test_standard = $tdata->test_standard;
       $test_description = $tdata->test_description;
       $test_results = $tdata->test_results;
       $test_data = json_decode($test_results,true);

       $test_summary = $tdata->test_summary;
       $created_by = $tdata->created_by;
       $date = $tdata->date;
    ?>

      
    <table>
      <tr>
        <th>Sample Identification</th>
        <th>Test Record Number</th>
      </tr>
      <tr>
        <td><?=$identity;?></td>
        <td><?=$test_recordno;?></td>
      </tr>
    </table>
    <table>
      <tr>
        <th>Test Standard Performed(ANSI, ASTM, NFPA, etc.)</th>
      </tr>
      <tr>
        <td><?=$test_standard;?></td>
      </tr>
    </table>
    <table>
      <tr>
        <th>Test Description</th>
      </tr>
      <tr>
        <td><?=$test_description;?></td>
      </tr>
    </table>

    <table class="result">
      <tr><th>Test Results</th><th></th></tr>
      
     <?php
        for($i=0;$i<count($test_data);$i++)
        { ?>
        <tr> 
          <td>Test<?= $i+1; ?></td>
          <td><?php echo $test_data[$i]; ?></td>>
        </tr>
        <?php } ?>

    </table>
      
    <table class="summary">
      <tr>
        <th>Test Summary</th>
      </tr>
      <tr>
        <td><?=$test_summary;?></td>
      </tr>
    </table>

    <table class="conc">
      <tr> 
        <td>Tester</td>
        <td><?=$created_by;?></td>
        <td>Date</td>
        <td><?=$date;?></td>>

      </tr>

    </table>

    <?php 
      }
    ?>

    </div>
  </body>
</html>
