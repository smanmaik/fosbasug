<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fees-payment</title>
  </head>
  <body>
  <form id="paymentForm">
  <div class="row">
    <div class="col-xl-6">
    <div class="card">
<div class="card-body">
    <h4 class="card-title">You're About to Pay ₦1000 for faculty of science Basug</h4>
    <p class="card-title-desc">Faculty of science Annual Payment online</p>
    <div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Full name</label>
            <input type="text" class="form-control" name="name" id="name"
            placeholder="full Name" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Full name</label>
            <input type="text" class="form-control" name="name" id="name"
            placeholder="full Name" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Amount</label>
            <input type="tel" class="form-control" name="amount" id="amount"
                placeholder="Enter Amount" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" name="email" id="matricnumber"
                placeholder="Enter Valid Email" required>
            </div>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
    </div>
   <div class="row">
  <div class="col-md-6">
      <div class="mb-3">
          <label class="form-label">Level</label>
          <select class="form-select" id="level" required>
          <option selected disabled value="">Select Level</option>
              <option>100 Level</option>
              <option>200 Level</option>
              <option>300 Level</option>
              <option>400 Level</option>
              <option>500 Level</option>
          </select>
      </div>
  </div>
            <div class="col-md-6">
                <div class="mb-3">
                <label class="form-label">Academic Session</label>
                    <select class="form-select" id="session" required>
                        <option>2021/2022</option>
                    </select>
                </div>
            </div>
  
</div>
<div class="form-submit">
    <button type="submit" onclick="payWithPaystack(event)"> Pay </button>
  </div>
</form>
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
      let paymentForm = document.getElementById("paymentForm")
      paymentForm.addEventListener("submit", payWithPaystack, false);
      function payWithPaystack(e) {
        e.preventDefault();
          let handler = PaystackPop.setup({
          key: 'pk_test_85d9b1e7588dba71450b7e2c89788bc1b6d9be6f', // Replace with your public key
          email: document.getElementById("email").value,
          amount: document.getElementById("amount").value * 100,
          ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
          // label: "Optional string that replaces customer email"
          onClose: function(){
          alert('Window closed.');
          },
          callback: function(response){
            let reference = response.reference;
            //verify payment
          }
      });
      handler.openIframe();
      }
    </script>
        <script src="{{ asset('frontend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/libs/parsleyjs/parsley.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/pages/form-validation.init.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
         <!-- Bootstrap Css -->
 <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('frontend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('frontend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

  </body>
</html>