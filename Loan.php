<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/bootstrap.css"/>
    <title>Car Loan</title>
</head>
<body>
<div class="container">
    <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Car Loan Computation</h1>
          </div>
                <form method="POST" >
                    
                        <?php
                        $amount = $period = 0;
                        $interest_rate = 1.3; 
                        $total_interest = $total_payable = $monthly_payable = 0 ;

                        if(isset($_POST['compute'])){
                            $amount = $_POST['amount'];
                            $interest_rate = $_POST['interest_rate'];
                            $period=$_POST['period'];
                            
                            $total_interest = $amount * ($interest_rate/100) * $period;
                            $total_payable = $total_interest + $amount;
                            $monthly_payable = $total_payable / $period;
                        }
                        
                        ?>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="amount">Loan Amount: ₱ </label>
                        <input type="text" name="amount" placeholder="Amount" class="form-control" required=""/>
                    </div>
                    <div class="form-group">
                        <label for="amount">Interest Rate: </label>
                        <input type="text" name="interest_rate" class="form-control" value="<?=$interest_rate;?>"/>
                    </div>
                    <div class="form-group">
                        <label for="amount">Payment Period: ₱ </label>
                    <input type="text" name="period" placeholder="Monthly" class="form-control" required=""/>
                    </div>
                    
                    <p><input type="submit" name="compute" value="Compute" class="btn btn-primary"/></p>
                                   
                        <p>
                        Loan Amount: ₱ <?= number_format($amount, 2);?> <br>
                        Total Interest: <?=number_format($total_interest, 2);?> <br>
                        Total Payable: ₱ <?=number_format($total_payable, 2);?> <br>
                        Payment Period: <?=number_format($period);?> Months<br>
                        Monthly Payable: ₱ <?=number_format($monthly_payable, 2);?>


                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" href="jquery-3.6.1.js"> </script>
<script type="text/javascript" href="js/bootstrap.js"> </script>
</body>
</html>