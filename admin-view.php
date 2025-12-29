<?php include "connection.php";
?>
<!--admin-menu-->
<?php include "admin-menu.php";
?>
<!--//admin-menu-->
<style>
    .donar{
            color: white; /* Change this to the desired text color */
            background-color: red; /* Optional: change the background color */
            padding: 10px 150px;
            border: none;
            cursor: pointer;
            font-size: 15px;
			
        }
</style>
<section class="w3l-contact-main">
		<div class="contant11-top-bg py-5 border border-5 ">
			<div class="container py-5">
				<div class="row contact-info-left text-center">
					<div class="col-lg-12 col-md-5 contact-info">
                    <div class="contact-gd">
							<div class="container-center">
                                <div class="hero page-inner overlay"
                                style="background-image: url('images/hero-bg.jpg');">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-9 text-center mt-10">
                                            <h1 class="heading" data-aos="fade-up">Donar-List</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-18 col-lg-25">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        
                                                        <td> Blood-group   </td>
                                                        <td> Donar-Name</td>
                                                        <td> Mobile Number </td>
                                                        <td> Address       </td>
                                                        <td> Email         </td>
                                                        <td> Profile image </td>
                                                        <td> Gender        </td>
                                                        <td> Action        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    $q="select * from donars";
                                                    $rs = mysqli_query($con,$q);
                                                    while($row=mysqli_fetch_array($rs)){
                                                    ?>
                                                        <tr>
                                                            
                                                            <td> <?php echo $row['donar_bloodgroup'] ?> </td>
                                                            <td> <?php echo $row['donar_name'] ?></td>
                                                            <td> <?php echo $row['donar_no'] ?> </td>
                                                            <td> <?php echo $row['donar_address'] ?> </td>
                                                            <td> <?php echo $row['donar_email'] ?> </td>
                                                            <td> <img src="<?php echo $row['d_profile'] ?>" height='100px' /> </td>
                                                            <td> <?php echo $row['d_gender'] ?></td>
                                                            <td>
                                                                <a href="admin-view.php?donar_id=<?php echo $row['donar_id']; ?>"
                                                                onclick="return confirm('do you want to delete ?')"> Delete </a>
                                                            </td>
                                                            <?php
                                                            if(isset($_GET['donar_id']))
                                                            {
                                                                $qDelete = "delete from donars where donar_id=" . $_GET['donar_id'];
                                                                mysqli_query($con,$qDelete);
                                                            }
                                                            ?>
                                                            
                                                        </tr>
                                                        <?php } ?>
                                                        <a href="donar.php" class="donar">ADD-DONAR</a>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--footer---> 
<?php include "footer.php";
?>
<!--//footer//-->
