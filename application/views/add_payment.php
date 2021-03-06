<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dashboard">
    <title>DebtManager | Add Payment</title>
    <link href="<?= base_url('assets/css/styles.css');?>" rel="stylesheet">
    <script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
    

  
</head>

<body>

<div class="container">
      <div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="<?php echo base_url ('index.php/agent/adddebts'); ?>">Add Debt Record</a>
	  <a href="<?php echo base_url ('index.php/agent/addpayment'); ?>">Add Payment</a>
	  <a href="<?php echo base_url ('index.php/agent/getbalance'); ?>">Get Debt Balance(date specific) </a>
	  <a href="<?php echo base_url ('index.php/agent/getadjustment'); ?>">Debt Row Adjustments</a>
     </div>
     <div class="header">
      <a href="<?php echo base_url();?>" class="logo"><h1>DebtManager</h1></a>
      <span class="logout"><a href="<?php echo base_url();?>index.php/agent/logout">Logout</a></span>
     <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;  Manage Debts </span>
     </div>
         <div class="login-page">
  <div class="form">
    <form class="login-form" action="<?php echo base_url ('index.php/agent/insert_payment'); ?>" method="POST">
      <h3> Add Payment Record </h3>
       <label for="transaction_id" class="label">Transaction id:</label>
      <select class="select" id="transaction_select" name="transaction_id"></select>
      <label for="customer_id" class="label">Customer id:</label>
      <select class="select" id="customer_select" name="customer_id"></select>
      <label for="emi" id="emi" class="label">EMI :</label><span id="getemi" class="tag"onclick="get_emi()" title="click to get EMI">Get Emi</span><br><br>
      <!--<input type="number"  placeholder="monthly emi" name ="emi"/>-->
      
      <label for="payment_month" class="label">Payment Month:</label>
      <input type="text" placeholder="payment month"name ="payment_month"/>
     
      <button>Done</button>
      
    </form>
  </div>
</div>



  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?= base_url('assets/js/index.js');?>"></script>
   

</body>
</html>
