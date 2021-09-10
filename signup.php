<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Pathology Management System</title>
    <link rel="stylesheet" href="Vendor/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Src/css/style.css">
    <script src="Vendor/Jquery/jquery.js"></script>
    <script src="Vendor/FontAwesome/all.js"></script>
    <link rel="stylesheet" href="Src/fonts/Poppins/poppins-fonts.css">
    <link rel="stylesheet" href="Src/fonts/Roboto/Roboto-stylesheet.css">
</head>
<body class="signup_body">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto signup_form_cst">
                <div class="logo_cstm text-center">
                    <img src="Src/img/patholgoy-logo.svg" alt="">
                </div>
                <form action="#" method="post" class="mt-5">
                    <div class="frm_head text-center">
                        <h1 style="    font-family: 'Poppins-SemiBold'; font-weight: bold; font-style: normal;">SignUp</h1>
                    </div>
                    <hr>
                    <div class="row sgn_frm_inner">
                        <div class="col-sm-12 sfi_pd">
                            <label for="fname" class="mr-sm-2">Full Name</label>
                            <input type="text" class="form-control" id="fname" placeholder="Enter Full Name" name="fullname">
                        </div>
                        <div class="col-sm-12 mt-3 sfi_pd">
                            <label for="email" class="mr-sm-2">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                        </div>
                        <div class="col-sm-12 mt-3 sfi_pd">
                            <label for="phone" class="mr-sm-2">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
                        </div>
                        <div class="col-sm-12 mt-3 sfi_pd">
                            <label for="password" class="mr-sm-2">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="form-check frm_cst_cbx">
                                <input type="checkbox" class="form-check-input check_box_cstm" id="exampleCheck1" onclick="toggle()">
                                <label class="form-check-label ssho_pas_labl" for="exampleCheck1">Show Password</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn_sbmt" name="sub">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script -->

    <script>
		function toggle(){
			var temp = document.getElementById("password");
			if (temp.type === "password"){
				temp.type = "text";
			}
			else{
				temp.type = "password";
			}
		}
	</script>    
</body>
</html>