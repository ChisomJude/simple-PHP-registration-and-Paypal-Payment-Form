<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SUPER XYZ EVENTS</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.11.1.min.js"></script>
<style>
  ul#stepForm, ul#stepForm li {
    margin: 0;
    padding: 0;
  }
  ul#stepForm li {
    list-style: none outside none;
  } 
  label{margin-top: 10px;}
  .help-inline-error{color:red;}
</style>
<?php 
error_reporting(0);

// variables 
$last_date = "2022-08-31";
//$today = '2022-09-01';
$today = date('Y-m-d');
$ticketno = "TID".mt_rand(11000,99009);




?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $("#otherdiv").hide();
      $("#sponsporselect").change(function(){
        $(this).find("option:selected")
                .each(function (){
                  var optionvalue=$(this).attr("value");
                  if(optionvalue == "other"){
                    $("#otherdiv").show();
                    $("#otherbox").attr("required",true);
                    var otheramount = $(this).attr("value");
                    var amount = otheramount;
                  }else{
                    $("#otherdiv").hide();
                    var optionvalue = $(this).attr("value");
                    var amount = optionvalue;
                  }
                  

        });
      }).change();
      

    });

</script>
  </head>
  <body>
  <br />
  <br />
    <div class="container">
      <div class="page-header">
        <h1>XYZ EVENTS</h1>
        <h4>Registration Form | Complete the details</h4>
      </div>
      <div class="clearfix"></div>
<div class="container" style="padding-left: 0px; padding-right: 15px;">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Ticket Registration </h3>
    </div>
    <div class="panel-body">
    <?php
      if(!isset($_POST['submit'])){
       ?>
        <form name="basicform" id="basicform" action="" method="post" enctype="multipart/form-data">

          <div id="sf1" class="frm">
          <fieldset>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Contact Name: </label>
              <div class="col-lg-6">
                <input type="text" placeholder="Contact Name" required id="uname" name="name" class="form-control" autocomplete="off">
              </div>
            </div><br />
			      <div class="clearfix" style="height: 10px;clear: both;"></div>
			      <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Company/Agency Name: </label>
              <div class="col-lg-6">
                <input type="text" required placeholder="Company or Agency Name" id="uname" name="company_name" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
	
			      <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Mobile Number</label>
              <div class="col-lg-6">
                <input type="text" required placeholder="Enter Your Phone" id="uname" name="phone" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Email</label>
              <div class="col-lg-6">
                <input type="email" required placeholder="Enter Your Email" id="uname" name="your_email" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Address: </label>
              <div class="col-lg-6">
                <input type="text" required placeholder="Address in full" id="uname" name="company_address" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">City / State </label>
              <div class="col-lg-6">
                <input type="text" required placeholder="Add City / State" id="uname" name="city_state" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Country </label>
              <div class="col-lg-6">
                <input type="text" required placeholder="Country" id="uname" name="country" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Description of Business/Agency </label>
              <div class="col-lg-6">
                <input type="textarea" placeholder="Enter your business description" id="uname" name="describe_business" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Website </label>
              <div class="col-lg-6">
                <input type="url" placeholder="eg: https://mybusiness.com" id="uname" name="your_website" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Sponsorship Level</label>
              <div class="col-lg-6">
                <select class="form-control" name="sponsor" id="sponsporselect" required>
                  <option value =''>Select a Sponsorship Level</option>
                  <option value ='100000'>Global Sponsor - $100,000</option>
                  <option value ='65000'>Continent Sponsor - $65,000</option>
                  <option value ='30000'>Country Sponsor - $30,000</option>
                  <option value ='20000'>State Sponsor - $20,000</option>
                  <option value ='15000'>Entertainment Sponsor - $15,000</option>
                  <option value ='10000'>City Sponsor - $10,000</option>
                  <option value ='5000'>Supporter Sponsor - $5,000</option>
                  <option value ='2000'>Table Sponsor - $2,000</option>
                  <option value = 'other'> Other Sponsorship </option>
                  <option value = 'No Sponsorship'> None </option>
                </select>
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group" id="otherdiv">
              <label class="col-lg-2 control-label" for="uname">Others -Specify Amount </label>
              <div class="col-lg-6">
                <input type="number" placeholder="Specify Sponspor Amount" id="otherbox" name="other" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
              <?php 
              if ( $today <= $last_date){
              ?>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Early Bed Tickets<span class="text-danger"> (Ends 31st Aug.)</span></label>
              <div class="col-lg-6">
                <select class="form-control" name="ticket" id='earlybed' required>
                  <option value ='1500'>Single Ticket Forum Registration + Standard King Room - $1500</option>
                  <option value ='750'>Forum Registration without Hotel - $750 </option>
                  <option value ='300'>Daily Ticket Rate - $300</option>
                </select>
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            
            <?php 
            }else{
            ?>
              <div class="form-group">
                <label class="col-lg-2 control-label" for="uname">Regular Tickets</label>
                <div class="col-lg-6">
                  <select class="form-control" name="ticket" id='regular'required >
                    <option value ='1750'>Single Ticket Forum Registration + Standard King Room - $1750</option>
                    <option value ='1000'>Forum Registration without Hotel - $1000 </option>
                    <option value ='300'>Daily Ticket Rate - $300</option>
                  </select>
                </div>
              </div>
              <div class="clearfix" style="height: 10px;clear: both;"></div>

          <?php }?>
                <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button class="btn btn-success" type="submit" name="submit">Submit Registration </button> 
                  <img src="images/spinner.gif" alt="" id="loader" style="display: none">
              </div>
            </div>

          </fieldset>

            </div>
        </form>
        <?php }else{
          $name = $_POST['name'];
          $company_name = $_POST['company_name'];
          $phone= $_POST['phone']; $email = $_POST['your_email'];
          $address = $_POST['company_address']; $city_state = $_POST['city_state'];
          $business_desc = $_POST['describe_business']; $sponspor =$_POST['sponsor'];
          $website = $_POST['your_website']; $country= $_POST['country'];
          $other_sponspor = $_POST['other']; $ticket = $_POST['ticket'];
              if($sponspor == "No Sponsorship"){
                $sponsporship =0;
                $amount = $ticket;
              }

              if($other_sponspor == ''){
                $other_sponspor = 0;
                $sponsporship = $sponspor;
                $amount = $ticket+$sponsporship;
              }else{
                $sponsporship = $other_sponspor;
                $amount = $ticket + $sponsporship;
              }
          
                //send mail to info@africanchamberdfw.com
                
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <noreply@xyzevents.com>' . "\r\n";
                $headers .= 'Cc: othermember@xyz.com' . "\r\n";
                $subject = "Event Registeration Form";
                $body = "
                              <html>
                              <head>
                              <title>XYZ EVENTS</title>
                              </head>
                              <body>
                              <h1>Registration For XYX EVENTS</h1>
                                <h4>Registration Form Details</h4>
                                <p style='color:red'>Please note that this is not a Payment Reciept, kindly confirm payment from Paypal</p>
                                <h4>$name filled registration form with the details below:</h4>
                                <p>Name:$name </p>
                                <p>Email:$email </p>
                                <p>Mobile: $phone </P>
                                <p>Ticket Selected:$ticket </p>
                                <p>Sponsporship Selected :$sponspor </p>
                                <p>Other Sponsporship Selected: $other_sponspor </p>
                                <p><strong>Total Payment Expected: </strong>$amount</p>
                                <p>Business Name:$company_name</p>
                                <p>Business Description: $business_desc</p>
                                <p>Business Adress: $address <br> $city_state , $country </p>
                                <p>Website: $website</p>
                                <br><br>
                                <i>This mail is generated from website registration form, please follow up with <strong>$name </strong> for more details</i>
                                
                            
                          </body>
                          </html>
                          ";
                          mail("recipientemail@gmail.com",$subject,$body,$headers);

        ?>
        
          <legend>Payment Details </legend>
          <p> Payment for Ticket : <?php echo $ticket ?></p>
          <p> Payment for Sponsporship: <?php echo $sponsporship  ?></p>
          <h4> Total payment Amount = <?php echo $amount; ?></h4 >

          <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
    <!-- Please note that the script src below is for paypal sanbox, you should replace with an active client id link-->
  <script src="https://www.paypal.com/sdk/js?client-id=sb&disable-funding=paylater&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'pill',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"XYZ Events Registraion","amount":{"currency_code":"USD","value":"<?php echo $amount; ?>"}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3><strong>Your payment reciept will be sent via Paypal.For enquiries email us</strong><h4><a href="#" title="Back to HomePage">HOME</a></h4>';

            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
    
  <?php }?></div>
  </div>


</div>