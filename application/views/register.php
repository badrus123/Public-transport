<html>
<head>
    <title>Register Public Transportation</title>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <link rel="stylesheet" href="<?php echo base_url().'assets/css/open-iconic-bootstrap.min.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css'?>">
            
            <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.carousel.min.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.theme.default.min.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.css'?>">

            <link rel="stylesheet" href="<?php echo base_url().'assets/css/aos.css'?>">

            <link rel="stylesheet" href="<?php echo base_url().'assets/css/ionicons.min.css'?>">

            <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-datepicker.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery.timepicker.css'?>">

            
            <link rel="stylesheet" href="<?php echo base_url().'assets/css/flaticon.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'assets/css/icomoon.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
            <link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css'?>">

            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

                     <!------ Include the above in your HEAD tag ---------->
</head>
<body class="login">


<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                    </br></br></br>
                        <h3>Welcome Public Transport</h3>
                        <a href="<?php echo base_url('Login'); ?>"><input type="submit" name="" value="Login"/> </a><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Public Transport</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    <form class="form-register" method="post" action="<?php echo base_url().'Register/register' ?>" >
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="username" name="username"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="nama" name="nama"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password " name="password"  />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password " />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder=" Email " name="email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone "/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>pilih pertanyaan kemanan data anda</option>
                                                <option>berapa tanggal lahir anda ? </option>
                                                <option>siapa nama teman terdekat anda ?</option>
                                                <option>nama binatang kesayangan anda ?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="jawaban anda " name="question" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                 </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
</html>