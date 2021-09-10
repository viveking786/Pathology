<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Signup - Pathology Management System</title>
    <link rel="stylesheet" href="Vendor/Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Src/css/style.css">
    <script src="Vendor/Jquery/jquery.js"></script>
    <script src="Vendor/FontAwesome/all.js"></script>
    <link rel="stylesheet" href="Src/fonts/Poppins/poppins-fonts.css">
    <link rel="stylesheet" href="Src/fonts/Roboto/Roboto-stylesheet.css">
</head>
<body class="complete_signup_body">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto complete_form_cst">
                <div class="logo_cstm text-center">
                    <img src="Src/img/patholgoy-logo.svg" alt="">
                </div>
                <form action="#" method="post" class="mt-5">
                    <div class="frm_head text-center">
                        <h1 style="    font-family: 'Poppins-SemiBold'; font-weight: bold; font-style: normal;">Complete SignUp</h1>
                    </div>
                    <hr>
                    <div class="row sgn_frm_inner">
                        <div class="col-sm-12 sfi_pd">
                            <label for="labname" class="mr-sm-2">Laboratory Name</label>
                            <input type="text" class="form-control" id="labname" placeholder="Enter Your Laboratory Name" name="fullname">
                        </div>
                        <div class="col-sm-12 mt-3 sfi_pd">
                            <label for="labaddress" class="mr-sm-2">Laboratory Address</label>
                            <textarea name="labaddress" class="form-control" id="labaddress" cols="10" rows="5" style="resize: none;" placeholder="Enter Your Laboratory Address"></textarea>
                        </div>
                        <div class="col-sm-12 mt-3 sfi_pd">
                            <label for="uploadfile">Choose Laboratory Logo</label>
                            <input type="file" class="form-control-file" id="uploadfile">
                            <small class="text-danger pt-3">*File type allowed: jpeg/jpg and png 2MB maximum size</small>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <button type="submit" class="btn btn-primary btn-block btn_sbmt" name="sub">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>