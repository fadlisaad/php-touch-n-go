<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
    <title>Your transaction</title>  
  </head>
  <body>
    <div class="container-fluid mt-4">
      <div class="row justify-content-center">
        <div class="col-3">
          <div class="container-fluid">
            <h2>Payment Detail</h2>
            <i class="fa fa-qrcode" style="font-size:300px"></i> 
            <p style= "font-size:50px;">  RM 50.00 </p>
            <br>
          </div>
        </div>
        
        <div class="col-4">
          <div class="containe-fluid">
            <h2>Order Summary</h2>
            <br>
            <div class="row p-3 bg-light rounded">
              <div class="col">
                <p>Payment to</p>
                <p>Transaction No</p>
                <p>Order Info</p>
                <p>Total</p>
              </div>
              <div class="col">
                <p>: Lazada</p>
                <p>: 7612312445</p>
                <p>: Uniqlo T-Shirt</p>
                <p>: RM50.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-2"><p id="demo"><br></p></div>
      </div>

      <div class="row justify-content-center">
        <div class="col-5">
          <div class="container-fluid p-4 bg-primary text-white rounded">
            <h2> Pay with your Touch n Go eWallet! </h2>
            <br>
            <ol>
              <li>Download and register for the Touch n Go eWallet app if you haven't. If you have, launch your TNG eWallet app</li>
              <li>Tap on the 'Scan' icon</li>
              <li>Scan the QR code here and complete the payment</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <br>
          <a href="payment_successful.php" class="btn btn-success">Payment Successful</a>
          <a href="payment_failed.php" class="btn btn-danger">Payment Fail</a>
        </div>
        </div>
      </div>
    </div>  
      <!-- <p><i class="fa fa-check-circle" style="font-size:24px;color:green"></i> Your payment will be processed in a safe and secured payment </p> -->

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Payment Session Expired!</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            Your payment session has expired! Click the Return button to redirect to Payment Page
          </div>
          <!-- Modal footer -->
          <div class="modal-footer justify-content-center">
            <a href="demo.php"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Return</button></a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
    var myModal = new bootstrap.Modal(document.getElementById("myModal"), {});
    // Update the count down every 1 second
    var x = setInterval(function() {
      // Get today's date and time
      var now = new Date().getTime();
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
      // Time calculations for days, hours, minutes and seconds
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML =  "QR code will expire in <strong>" + seconds + "s </strong>";
      // If the count down is over, write some text 
      if (seconds <= 0) {
        myModal.show();
        clearInterval(x);
      }
    }, 1000);
    </script>
  </body>
</html>
