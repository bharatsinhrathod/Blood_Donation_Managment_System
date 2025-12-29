<!doctype html>
<html lang="zxx">
<?php
include "connection.php";
?>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dentile a Medical Category Bootstrap Responsive Website Template | login :: W3layouts
	</title>

    <!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>
	<!--w3l-header-->
	<?php include "admin-menu.php";
	?>
	<!-- //w3l-header -->
    <!-- /login-form -->
            <section class="w3l-contact-main">
                <div class="contant11-top-bg py-5 border border-5 ">
                    <div class="container py-5">
                        <div class="row contact-info-left d-flex justify-content-center text-left">
                            <div class="col-lg-8 col-md-5 contact-info">
                                <div class="contact-gd">
                                    <div class="container-center">
                                    
                                        <div class="row">
                                            <div class="col-md-12" >
                                                <h2><b>Donar Form<b></h2>
                                                <p>Please fill in your data.</p>
                                                <form action="donar_con.php" method="post">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                            <input type="name" name="name" class="form-control" placeholder="Enter name" required/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                            <input type="email" name="email" class="form-control" placeholder="Enter email" required/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mobile No.</label>
                                                            <input type="text" name="number" class="number" placeholder="Enter number" required/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                            <input type="text" id="address" name="address" class="address" placeholder="Enter address" required/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Profile.</label>
                                                            <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/jpg" placeholder="Enter number" required/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-2">Gender</label>
                                                            <select name="gender" class="form-control" required>
                                                                <option value="">Select</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="mb-2">Blood Group</label>
                                                        <select name="blood-group" class="form-control" required>
                                                                <option value="">Select</option>
                                                                <option value="A-">A-</option>
                                                                <option value="AB-">AB-</option>
                                                                <option value="O-">O-</option>
                                                                <option value="A-">A-</option>
                                                                <option value="A+">A+</option>
                                                                <option value="AB+">AB+</option>  
                                                        </select>   
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                                    </div>
                                                    
                                                    <button type="submit" class="btn btn-primary submit mb-4" name="submit">Add</button>
                                                    
                                                       
                                                
                                                    <p class="account-w3ls text-center pb-4" style="color:#000"> Already Registered?
                                                        <a href="login.php" >Signin now</a>
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--w3l-footer-->
        <?php include "admin-footer.php";
        ?>
        <!-- //w3l-footer -->
    </body>
</html>

