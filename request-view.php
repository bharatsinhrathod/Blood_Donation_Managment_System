<?php include "connection.php";
?>
<!--admin-menu-->
<?php include "admin-menu.php";
?>
<!--//admin-menu-->
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
                                            <h1 class="heading" data-aos="fade-up">User-list</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-18 col-lg-25">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        
                                                        <td> Request date   </td>
                                                        <td> Location</td>
                                                        <td> Status </td>
                                                        <td> Action </td>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    $q="select * from request";
                                                    $rs = mysqli_query($con,$q);
                                                    while($row=mysqli_fetch_array($rs)){
                                                    ?>
                                                        <tr>
                                                            
                                                            <td> <?php echo $row['req_date'] ?> </td>
                                                            <td> <?php echo $row['location'] ?></td>
                                                            <td> <?php echo $row['status'] ?> </td>
                                                            
                                                            <td>
                                                                <a href="request-view.php?u_id=<?php echo $row['donar_id']; ?>"
                                                                onclick="return confirm('do you want to delete ?')"> Delete </a>
                                                            </td>
                                                            <?php
                                                            if(isset($_GET['donar_id']))
                                                            {
                                                                $qDelete = "delete from request where donar_id=" . $_GET['donar_id'];
                                                                mysqli_query($con,$qDelete);
                                                            }
                                                            ?>
                                                            
                                                        </tr>
                                                        <?php } ?>
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
