<?php include_once "site_header.php";
require_once("db.php");
?>
<div class="container-fluid">

		<!-- Left Column -->
		<div class="col-sm-3">

		</div>


		<!-- Center Column -->
		<div class="col-sm-6">
            <hr>
            <!-- Alert -->
			<div class="alert alert-danger" role="alert">
				<strong>only for mobile money agents</strong>
			</div>

			<!-- Articles -->
			<div class="panel panel-default">

				<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title" style="color: darkgreen">
						<span class="glyphicon glyphicon-log-in"></span>
						Log In
					</h3>
				</div>
				<div class="panel-body">
					<form action="server.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" id="uid" name="uid" placeholder="Agence Name" required="true"/>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required="true"/>
						</div>
                        <button type="submit" class="btn btn-success" style="background-color: darkgreen" disabled>Submit</button>
					</form>
				</div>
			</div>
			</div>


			<hr>
		</div><!--/Center Column-->


	  <!-- Right Column -->

	</div><!--/container-fluid-->

<?php
include_once"site_footer.php";

