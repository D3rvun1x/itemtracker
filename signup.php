<?php include_once "site_header.php";
require_once("db.php")
?>

<div class="container-fluid">

		<!-- Left Column -->
		<div class="col-sm-3">

			<!-- List-Group Panel -->
			

			<!-- Text Panel -->

			<!-- Text Panel -->
			
				
		</div><!--/Left Column-->

		<!-- Center Column -->
		<div class="col-sm-6">
            <hr>
            <!-- Alert -->
            <div class="alert alert-danger" role="alert">
                <strong>only for mobile money agents</strong>
            </div>
            <!-- registration -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title" style="color: darkgreen">
						<span class="glyphicon glyphicon-scale"></span> 
						Registration form
					</h3>

                </div>
				<div class="panel">
				
				<div class="panel-body">
					<form action="server.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" id="uid" name="sign_fname" placeholder="First Name" required="true"/>
						</div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="uid" name="sign_lname" placeholder="Last Name" required="true"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="uid" name="sign_agency_name" placeholder="Agency Name" required="true"/>
                        </div>

						<div class="form-group">
							<input type="tel" class="form-control" id="uid" name="sign_tel" placeholder="telephone" required="true"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="uid" name="sign_reg" placeholder="region" required="true"/>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pwd" name="sign_pass1" placeholder="Password" required="true"/>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pwd" name="sign_pass2" placeholder="confirm Password" required="true"/>
						</div>
						<button type="submit" class="btn btn-success" style="background-color: darkgreen" name="sign_submit" disabled>submit</button><a href="login.php" style="color: red">  already have an account?</a>
					</form>
				</div>
			</div>
			</div>
		</div><!--/Center Column-->

	<!--/container-fluid-->

<?php
include_once"site_footer.php";
?>

