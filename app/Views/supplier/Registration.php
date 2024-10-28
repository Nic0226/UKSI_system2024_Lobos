<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wasfaty</title>
  <meta name="theme-color" content="#557eb0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 shrink-to-fit=no, user-scalable=0">
  <link rel="icon" type="image/png" href="assets/images/logo-icon.png" sizes="194x194">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Titillium+Web|Changa|Merriweather|Ubuntu&display=swap" rel="stylesheet">
  <link rel="manifest" href="assets/lib/manifest.json">
  <link rel="stylesheet" type="text/css" href="assets/lib/style.css">
</head>
<body class="bg-light">
  <nav class="navbar fixed-top navbar-light bg-grey cus-shadow px-2 py-0">
   <div class="col-4">
       <a class="navbar-brand" href="#">
        <h4 class="mb-1"><b>Supplier Self-Registration</b></h4>
        <button class="btn btn-nav hvr-grow-shadow px-3 py-1">Send</button>
        <span style="color: #4a89bd">|</span>
        <button class="btn btn-nav hvr-grow-shadow px-3 py-1">Close</button>
       </a>
   </div>
    <div class="col-4">
      <!-- <a class="ml-auto" href="home.html"><img class="" src="assets/images/logo_2.png" style="width:150px;height: 38px"></a> -->
    </div>
    <div class="col-4"> </div>
    <div class="dropdown dropleft" style="">
      <button type="button" class="border hvr-grow-shadow dropdown-toggle" data-toggle="dropdown">
        <i class="fas fa-question-circle text-primary"></i>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Help Center</a>
        <a class="dropdown-item" href="#">Hide Quick Help</a>
      </div>
    </div>
  </nav><br><br><br><br>
<div class="container">
  <div class="jumbotron text-center p-2 mb-0">
    <img class="" src="assets/images/logotrans.png" style="width:auto;height: 80px">
  </div>
  <div class="row m-0">
    <div class="col-md-10">
      <h4 class="mb-0 pt-3">Welcome to NUPCO supplier Registration Portal</h4>
      <p style="font-size: 15px">&ensp;Welcome to the online Registration portal for Suppliers for National Unified Procurement Company for Medical Supplies "NUPCO". Please fill the online registration form given below and click on Send button to submit the same. Kindly read the attached user manual .Prepare required data and attachment documents list before filling this registration form. </p>
      <p class="mb-0">* Fields marked with an asterisk are mandatory. </p>
      <a class="btn cus-btn hvr-grow-shadow" href="assets/pdf/nupco-ros-user-manual-v12.pdf" target="_blank"><i class="fas fa-clipboard-list text-white"></i> User manual</a>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>
<div class="container my-3 gci">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>General Company Information</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      <div class="btn-group">
        <button type="button" class="btn btn-outline-info">Save Draft</button>
        <button type="button" class="btn btn-outline-info" disabled><i class="fas fa-print"></i> Print</button>
      </div>
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="row m-0 my-4">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Company Name</label>
        <div class="col-md-9">
          <input type="text" class="form-control gci-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Commercial reg No</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control gci-input" required>
            <div class="input-group-append" style="height: 33px">
              <button class="btn btn-info w-100" style="line-height: 1;">submit</button>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Language</label>
        <div class="col-md-9">
          <input type="text" class="form-control gci-input" value="EN" readonly required>
        </div>
      </div>
      <h6><b>Address</b></h6>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Country</label>
        <div class="col-md-9">
          <select class="crs-country form-control gci-input" data-region-id="one" required></select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name">Region</label>
        <div class="col-md-9">
          <select id="one" class="form-control gci-input"></select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name">District</label>
        <div class="col-md-9">
          <input type="text" class="form-control gci-input">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Postal Code/City</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control gci-input" required>
          <input type="text" class="form-control gci-input w-50" required>
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name">Street/House Number</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control gci-input w-50">
          <input type="text" class="form-control gci-input">
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name">Building / Floor/Room</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control gci-input">
          <input type="text" class="form-control gci-input">
          <input type="text" class="form-control gci-input">
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
    </div><!--------col-md-6 close----------------->
    <div class="col-md-6">
      <h6><b>PO Box Address</b></h6>
      <div class="form-group row">
        <label class="col-md-3 lab-name">Po Box</label>
        <div class="col-md-9">
          <input type="text" class="form-control gci-input">
        </div>
      </div>
      <h6><b>Communication</b></h6>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Phone Number</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control gci-input w-50" required>
          <input type="text" class="form-control gci-input" required>
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name">Fax Number</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control gci-input w-50">
          <input type="text" class="form-control gci-input">
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">E-Mail Address</label>
        <div class="col-md-9">
          <input type="text" class="form-control gci-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Mobile Number</label>
        <div class="col-md-9">
          <input type="text" class="form-control gci-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name">Website</label>
        <div class="col-md-9">
          <input type="text" class="form-control gci-input">
        </div>
      </div>
    </div><!--------col-md-6 close----------------->
  </div><!--------row close----------------->
</div>
<div class="container my-3 cpi">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>Contact Person Information</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="form-group text-center pt-2">
    <button class="btn cus-btn hvr-grow-shadow btn-outline-info">Copy Company Data</button>
  </div>
  <div class="row m-0 my-4">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-md-3 lab-name star">First Name</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Last Name</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Form of Address</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Position</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Department</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
    </div><!--------col-md-6 close----------------->
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Phone Number</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control cpi-input w-50" required>
          <input type="text" class="form-control cpi-input" required>
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name">Fax Number</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control cpi-input w-50">
          <input type="text" class="form-control cpi-input">
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">E-Mail Address</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Language</label>
        <div class="col-md-9">
          <input type="text" class="form-control gci-input" value="EN" readonly required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Country</label>
        <div class="col-md-9">
          <select class="crs-country form-control gci-input" data-region-id="one" required></select>
        </div>
      </div>
      <!-- <div class="form-group row">
        <label class="col-md-3 lab-name star">Mobile Number</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div> -->
    </div><!--------col-md-6 close----------------->
  </div><!--------row close----------------->
</div>
<div class="container my-3 cpi">
  <div id="accordion" class="px-2"> 
    <div class="card border-0 bg-light">
      <div class="card-header mx-2 pl-1" id="heading-1" style="border-bottom: 3px solid #d9d9d9;">
        <h4 class="mb-0 updown">
          <a role="button" class="collapsed text-dark" data-toggle="collapse" href="#collapse-1" aria-expanded="flase" aria-controls="collapse-1">
            Additional Contact Person Information 1
          </a>
        </h4>
      </div>
      <div id="collapse-1" class="collapse" data-parent="#accordion" aria-labelledby="heading-1">
        <div class="card-body p-1">
           <div class="form-group text-center pt-2">
              <button class="btn cus-btn hvr-grow-shadow btn-outline-info">Copy Company Data</button>
            </div>
            <div class="row m-0 my-4">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">First Name</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Last Name</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Form of Address</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Position</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Department</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
              </div><!--------col-md-6 close----------------->
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Phone Number</label>
                  <div class="col-md-9">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control cpi-input w-50" required>
                    <input type="text" class="form-control cpi-input" required>
                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name">Fax Number</label>
                  <div class="col-md-9">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control cpi-input w-50">
                    <input type="text" class="form-control cpi-input">
                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">E-Mail Address</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Language</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control gci-input" value="EN" readonly required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Country</label>
                  <div class="col-md-9">
                    <select class="crs-country form-control gci-input" data-region-id="one" required></select>
                  </div>
                </div>
                <!-- <div class="form-group row">
                  <label class="col-md-3 lab-name star">Mobile Number</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div> -->
              </div><!--------col-md-6 close----------------->
            </div><!--------row close----------------->
        
        </div>
      </div>
    </div>
    <div class="card border-0 bg-light">
      <div class="card-header mx-2 pl-1" id="heading-2" style="border-bottom: 3px solid #d9d9d9;">
        <h4 class="mb-0 updown">
          <a class="collapsed text-dark" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
            Additional Contact Person Information 2
          </a>
        </h4>
      </div>
      <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
        <div class="card-body p-1">
          <div class="form-group text-center pt-2">
              <button class="btn cus-btn hvr-grow-shadow btn-outline-info">Copy Company Data</button>
            </div>
            <div class="row m-0 my-4">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">First Name</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Last Name</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Form of Address</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Position</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Department</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
              </div><!--------col-md-6 close----------------->
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Phone Number</label>
                  <div class="col-md-9">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control cpi-input w-50" required>
                    <input type="text" class="form-control cpi-input" required>
                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name">Fax Number</label>
                  <div class="col-md-9">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control cpi-input w-50">
                    <input type="text" class="form-control cpi-input">
                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">E-Mail Address</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Language</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control gci-input" value="EN" readonly required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-3 lab-name star">Country</label>
                  <div class="col-md-9">
                    <select class="crs-country form-control gci-input" data-region-id="one" required></select>
                  </div>
                </div>
                <!-- <div class="form-group row">
                  <label class="col-md-3 lab-name star">Mobile Number</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control cpi-input" required>
                  </div>
                </div> -->
              </div><!--------col-md-6 close----------------->
            </div><!--------row close----------------->
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container my-3 cpi">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>Submitter Information</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="form-group text-center pt-2">
    <button class="btn cus-btn hvr-grow-shadow btn-outline-info">Copy Company Data</button>
  </div>
  <div class="row m-0 my-4">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-md-3 lab-name star">First Name</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Last Name</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Form of Address</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Position</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Department</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
    </div><!--------col-md-6 close----------------->
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Phone Number</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control cpi-input w-50" required>
          <input type="text" class="form-control cpi-input" required>
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name">Fax Number</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control cpi-input w-50">
          <input type="text" class="form-control cpi-input">
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">E-Mail Address</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Language</label>
        <div class="col-md-9">
          <input type="text" class="form-control gci-input" value="EN" readonly required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Country</label>
        <div class="col-md-9">
          <select class="crs-country form-control gci-input" data-region-id="one" required></select>
        </div>
      </div>
      <!-- <div class="form-group row">
        <label class="col-md-3 lab-name star">Mobile Number</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div> -->
    </div><!--------col-md-6 close----------------->
  </div><!--------row close----------------->
</div>

<div class="container my-3 vdt">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>Vendor Type</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="row m-0 my-4">
    <div class="col-md-2">
      <input type="checkbox" id="manufacturer" name="manufacturer" value="manufacturer">
      <label for="manufacturer">Manufacturer</label>
    </div><!--------col-md-2 close----------------->
    <div class="col-md-2">
      <input type="checkbox" id="contractor" name="contractor" value="contractor">
      <label for="contractor">Contractor</label>
    </div><!--------col-md-2 close----------------->
    <div class="col-md-2">
      <input type="checkbox" id="trader" name="trader" value="trader">
      <label for="trader">Trader</label>
    </div><!--------col-md-2 close----------------->
    <div class="col-md-2">
      <input type="checkbox" id="agent" name="agent" value="agent">
      <label for="agent">Agent</label>
    </div><!--------col-md-2 close----------------->
    <div class="col-md-1 px-0">
      <input type="checkbox" id="others" name="others" value="others">
      <label for="others">Others</label>
    </div><!--------col-md-1 close----------------->
    <div class="col-md-3 pl-0">
      <input class="form-control vdt-input" id="chkres" type="" name="" style="display: none">
    </div><!--------col-md-3 close----------------->
  </div><!--------row close----------------->
</div>
<div class="container my-3 atg">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>Account Group</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="row m-0 my-4">
    <div class="col-md-3">
      <input type="radio" id="domestic" name="radio-group">
      <label for="domestic">Medical Domestic Vendor</label>
    </div><!--------col-md-3 close----------------->
    <div class="col-md-3">
      <input type="radio" id="foreign" name="radio-group">
      <label for="foreign">Medical Foreign Vendor</label>
    </div><!--------col-md-3 close----------------->
    <div class="col-md-3">
      <input type="radio" id="nondomestic" name="radio-group">
      <label for="nondomestic">Non Medical Domestic Vendor</label>
    </div><!--------col-md-3 close----------------->
    <div class="col-md-3">
      <input type="radio" id="nonforeign" name="radio-group">
      <label for="nonforeign">Non Medical Foreign Vendor</label>
    </div><!--------col-md-3 close----------------->
    <div class="col-md-3">
      <input type="radio" id="pharmacies" name="radio-group">
      <label for="pharmacies">Community Pharmacies</label>
    </div><!--------col-md-3 close----------------->
  </div><!--------row close----------------->
</div>
<div class="container my-3 vdt">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>Product Category</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="row m-0 my-4 d-flex justify-content-center align-items-center">
    <div class="col-md-3" id="maincat1">
       <p class="mb-2">
         <input type="checkbox" id="pharama" name="pharama" value="pharama">
         <label for="pharama">Pharama</label>
       </p>
       <p class="mb-2">
         <input type="checkbox" id="supply" name="supply" value="supply">
         <label for="supply">Medical Supply</label>
       </p>
       <p class="mb-2">
         <input type="checkbox" id="equipment" name="equipment" value="equipment">
         <label for="equipment">Medical Equipment</label>
       </p>
       <p class="mb-2">
         <input type="checkbox" id="furniture" name="furniture" value="furniture">
         <label for="furniture">Medical Furniture</label>
       </p>
    </div><!--------col-md-3 close----------------->
    <div class="col-md-1">
    
    </div><!--------col-md-3 close----------------->
    <div class="col-md-4 cpi" id="maincat2">
       <div class="form-group row">
          <label for="category10" class="col-sm-3 col-form-label px-0">Category 1:</label>
          <div class="col-sm-7 pl-0">
            <input type="text" class="form-control cpi-input" id="category1">
          </div>
        </div>
        <div class="form-group row">
          <label for="category10" class="col-sm-3 col-form-label px-0">Category 2:</label>
          <div class="col-sm-7 pl-0">
            <input type="text" class="form-control cpi-input" id="category2">
          </div>
        </div>
        <div class="form-group row">
          <label for="category10" class="col-sm-3 col-form-label px-0">Category 3:</label>
          <div class="col-sm-7 pl-0">
            <input type="text" class="form-control cpi-input" id="category3">
          </div>
        </div>
        <div class="form-group row">
          <label for="category10" class="col-sm-3 col-form-label px-0">Category 4:</label>
          <div class="col-sm-7 pl-0">
            <input type="text" class="form-control cpi-input" id="category4">
          </div>
        </div>
        <div class="form-group row">
          <label for="category10" class="col-sm-3 col-form-label px-0">Category 5:</label>
          <div class="col-sm-7 pl-0">
            <input type="text" class="form-control cpi-input" id="category5">
          </div>
        </div>
    </div><!--------col-md-3 close----------------->
    <div class="col-md-4" id="maincat3">
      <div class="form-group row">
          <label for="category10" class="col-sm-3 col-form-label px-0">Category 6:</label>
          <div class="col-sm-7 pl-0">
            <input type="text" class="form-control cpi-input" id="category6">
          </div>
        </div>
        <div class="form-group row">
          <label for="category10" class="col-sm-3 col-form-label px-0">Category 7:</label>
          <div class="col-sm-7 pl-0">
            <input type="text" class="form-control cpi-input" id="category7">
          </div>
        </div>
        <div class="form-group row">
          <label for="category10" class="col-sm-3 col-form-label px-0">Category 8:</label>
          <div class="col-sm-7 pl-0">
            <input type="text" class="form-control cpi-input" id="category8">
          </div>
        </div>
        <div class="form-group row">
          <label for="category10" class="col-sm-3 col-form-label px-0">Category 9:</label>
          <div class="col-sm-7 pl-0">
            <input type="text" class="form-control cpi-input" id="category9">
          </div>
        </div>
       <div class="form-group row">
          <label for="category10" class="col-sm-3 col-form-label px-0">Category 10:</label>
          <div class="col-sm-7 pl-0">
            <input type="text" class="form-control cpi-input" id="category10">
          </div>
        </div>
    </div><!--------col-md-3 close----------------->
  </div><!--------row close----------------->
</div>
<div class="container my-3 cpi">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>Account Correspondence</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="row m-0 my-4">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Clerk Vendor Name</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">National Id/Iqama No</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Clerk E-Mail Id</label>
        <div class="col-md-9">
          <input type="text" class="form-control cpi-input" required>
        </div>
      </div>
    </div><!--------col-md-6 close----------------->
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-md-3 lab-name star">Clerk Telephone No</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control cpi-input w-50" required>
          <input type="text" class="form-control cpi-input" required>
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-md-3 lab-name">Clerk Fax Number</label>
        <div class="col-md-9">
          <div class="input-group mb-3">
          <input type="text" class="form-control cpi-input w-50">
          <input type="text" class="form-control cpi-input">
            <div class="input-group-append">
            </div>
          </div>
        </div>
      </div>
     
    </div><!--------col-md-6 close----------------->
  </div><!--------row close----------------->
</div>
<div class="container my-3 bnk_detail">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>Bank Details</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="row m-0 my-4 px-2">
    <div class="table-responsive">
    <table class="table table-borderless">
      <thead>
        <tr class="text-center">
          <th width="10%">Country</th>
          <th width="10%">Bank Key</th>
          <th width="15%">Bank Name</th>
          <th width="15%">Swift Code</th>
          <th width="15%">Bank Account</th>
          <th width="15%">Account Holder</th>
          <th width="10%">IBAN</th>
          <th width="10%">Currency</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <select class="crs-country form-control gci-input" data-region-id="one" required></select>
          </td>
          <td><input type="text" class="form-control cpi-input" name=""></td>
          <td><input type="text" class="form-control cpi-input" name=""></td>
          <td><input type="text" class="form-control cpi-input" name=""></td>
          <td><input type="text" class="form-control cpi-input" name=""></td>
          <td><input type="text" class="form-control cpi-input" name=""></td>
          <td><input type="text" class="form-control cpi-input" name=""></td>
          <td>
            <select type="text" class="form-control cpi-input " name="">
              <option>Select a Currency</option>
              <option>USD</option>
              <option>AED</option>
              <option>SAR</option>
              <option>GBP</option>
            </select>
          </td>
          <td>
            <button class="shadow"><i class="fas fa-plus-circle" style="font-size: 17px;color: blue"></i></button></td>
        </tr>
      </tbody>
    </table>
  </div>
  </div><!--------row close----------------->
</div>
<div class="container my-3 vat_detail">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>VAT Details</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="row m-0 my-2">
    <div class="col-md-4">
      <div class="form-group row m-0 px-2">
        <label for="vatnumber" class="col-sm-4 col-form-label px-0">VAT Number:</label>
        <div class="col-sm-7 pl-0">
          <input type="text" class="form-control cpi-input" id="vatnumber">
        </div>
      </div>
    </div><!--------col-md-4 close----------------->
    <div class="col-md-8"></div><!--------col-md-8 close----------------->
  </div><!--------row close----------------->
  <div class="row m-0">
    <div class="col-md-9">
      <h5>Attachment</h5>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="row m-0 px-2">
    <div class="col-md-12">
      <div class="form-group mb-0 p-2 bg-grey">
        <button type="button" class="btn cus-btn">
          <i class="fas fa-paperclip"></i> Add Attachment</button>
        <button type="button" class="btn cus-btn">
          <i class="fas fa-trash-alt"></i> Delete</button>
        <button type="button" class="btn cus-btn">
          <i class="fas fa-download"></i> Download All</button>
      </div>
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th width="3%">#</th>
            <th>File Name</th>
            <th width="15%">Issue Date - Expiry Date</th>
            <th width="15%">Certification Number</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div><!--------col-md-12 close----------------->
  </div><!--------row close----------------->
</div>
<div class="container my-3 notes">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>Notes</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="row m-0 my-2">
    <div class="col-md-8">
      <div class="form-group row m-0 px-2">
        <div class="col-sm-12 pl-0">
          <textarea type="text" class="form-control cpi-input"></textarea>
        </div>
      </div>
    </div><!--------col-md-4 close----------------->
    <div class="col-md-4"></div><!--------col-md-8 close----------------->
  </div><!--------row close----------------->
</div>
<div class="container my-3 notes">
  <div class="row m-0">
    <div class="col-md-9">
      <h4>Data Privacy Statement</h4>
    </div><!--------col-md-9 close----------------->
    <div class="col-md-3 text-right">
      
    </div><!--------col-md-3 close----------------->

  </div><!--------row close----------------->
  <hr class="hr-bar">
  <div class="row m-0 my-2 vdt">
    <div class="col-md-12">
      <p class="mb-2">
         <input type="checkbox" class="vdt-input" id="yes">
         <label for="yes"><span class="text-danger">*</span><b>Yes I have read the data privacy statement and accept the terms:</b></label>
       </p>
     </div>
       <div class="col-md-6">
       <p class="">
         أؤكد أن جمبع اليبانات المسلّمة إلى الث ل ا
          والأجهزة والمستلزمات الطبيّة (نويكو) صحيحة وكاملةء وتشكل مبدأ
          أساسي للتعاكد مع نويكو. وأوافق على السماح لنوبكو بالاستعلام في
          سحلات الشركة الاتمانية وعيرها من السجلات من العصادر الجاكزة
          نظاماً في المملكة العربية السعونية أو خارجهاء وامكاتية التحقق من
          صحة المستندات المقدمة لها على أن كبقى مسؤولية صحة المستندات
          مسؤولية الشركة الخاصةء كذلك أوافق على منح نوبكو الحق بمشاركة
          المعلومات والسجلات الخاصة بي وبيائات ومعلومات العقود مع /
          الحكومية والخاصة المرخصة لمعالجة المعلومات الاكتمانية وشيرها من
          المعلوماتء من الجهات ذات العلاكة كاقة في حدود المسموح به نظاماً.
       </p>
       <p class="">
       <label><b>Supplier Disclosure Declaration:</b></label><br>
        I hereby confirm that all data delivered to the National Unified
        Procurement company for medical supplies (NUPCO) are correct and
        complete and constitute a fundamental! principle of contracting
        with NUPCO.<br><br>

        Further, I agree to allow NUPCO to inquire on the Company's credit
        records and other records from sources legally authorized in the
        Kingdom of Saudi Arabia or abroad, and the possibility of verifying
        authenticity of the documents submitted to them, provided however that
        the responsibility on authenticity of the documents remains liability
        of the company. Moreover, I hereby authorize NUPCO to share our
        information and records, data and information of contracts with
        government and private entities licensed to process credit information
        and other related parties within the limits permitted by law.
       </p>
       <p class="">
          <a href="assets/pdf/nupco-supplier-pre-qualification-policies.pdf" target="_blank">NUPCO Supplier Pre Qualification Policies</a><br>
          <a href="assets/pdf/nupco-supplier-audit-check-list.pdf" target="_blank">NUPCO Supplier Audit Check List</a><br>
          <a href="assets/pdf/legal-due-diligence.pdf" target="_blank">NUPCO Legal Due Diligence</a><br>
          <a href="assets/pdf/disclosureform.pdf" target="_blank">NUPCO Legal Disclosure</a><br>
          <a href="assets/pdf/supplier-contact-form-for-srm-pdf.docx" target="_blank">Supplier Contact Form</a><br>
        </p>
       </div>
       <div class="col-md-6">
       <p class="">
       <label><b>Data Privacy Statement:</b></label><br>
          We would like to thank you for your interest in registering with NUPCO
        Please take a few minutes to complete the form linked to this page to
        Register your business. Kindly note the following:<br><br>

        The registration of your company will be considered once it has been
        deemed that your company meets the NUPCO requirements and due
        completion of the registration form along with the required supporting
        documentation.<br><br>

        NUPCO reserves the right to; request additional information from your
        company from time to time, to re-evaluate your registration at any point
        in the process and to refuse the registration request without
        explanation<br><br>

        I understand that the above request is only for Registration at NUPCO
        to be potential supplier in future and not an assurance, promise or
        offer that NUPCO will award business to us<br><br>

        The qualification process is a multi-step process and completing this
        form does not mean that my company registered to NUPCO<br><br>

        I have read, understood and accept the NUPCO General Procurement &
        Contracts Terms & Conditions<br><br>

        I am the submitter or contact person or I filled this form under the
        supervision of the contact person. The contact person is an authorized
        representative of my company.<br><br>

        I am responsible for entering truthful information and understand that
        NUPCO would filter out. My company if i provided improper information on
        purpose.
        </p>
        </div>
        
    </div><!--------col-md-4 close----------------->
    <div class="col-md-4"></div><!--------col-md-8 close----------------->
  </div><!--------row close----------------->
</div>
<div class="container-fluid" id="footer">
  <div class="row m-0">
    <div class="col-md-12 text-center">
      <h4 class="my-2"><u>Address</u></h4>
    </div><!--------col-md-12 close----------------->

  </div><!--------row close----------------->
  <div class="row m-0">
    <div class="col-md-2 text-center">
      <p class="mb-0">
        Building Number: 6313<br>
        Street: Al Ulaya<br>
        District: Al Wurud<br>
        City: Riyadh
      </p>
    </div>
    <div class="col-md-7 text-center">
     <p>
      Please address all communication related to this registration form to purchase department.<br>
      1. For Medical team Email id - Medical.registration@nupco.com<br>

      2. For Nonmedical team Email id - Vendor.registration@nupco.com<br>

      3. For Community Pharmacies team Email id - Subscription@wasfaty.sa<br>
     </p>
    </div>
    <div class="col-md-3 text-center">
      <p class="mb-0">
        Postal code: 12251<br>
        Additional Number: 2721<br>
        GPS Coordinates: 46.675085833, 24.7160829357
      </p>
    </div>
  </div>
</div>
<!-- script files -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="assets/lib/crs.min.js"></script>
  <script src="assets/lib/script.js"></script>
</body>
</html>
