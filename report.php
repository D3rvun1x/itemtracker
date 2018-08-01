
<?php
        include_once "site_header.php";

?>
<!-- Left Column -->
		<div class="col-sm-3">
            <hr>
            <!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-scale"></span> 
						Register the Item Here!
					</h3>
				</div>
            </div>
			<div class="panel panel-default">

				<div class="panel-body">
					<form action="RegisterItem.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" id="uid" name="report_fname" placeholder="First Name" required="true"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="uid" name="report_lname" placeholder="Last Name" required="true"/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="uid" name="report_town" placeholder="picked it in which Town?" required="true"/>
						</div>
                        <div class="form-group">
                            <input type="number" class="form-control" id="uid" name="report_tel" placeholder="Your Tel number" required="true"/>
                        </div>
                        <div class="form-group">
                            <select name="item_type">
                                <option value="IDCARD">IdCard</option>
                                <option value="PASSPORT">Passport</option>
                                <option value="LICENSE">License</option>
                                <option value="CERTIFICATE">Certificate</option>
                                <option value="Receipt">Receipt</option>
                            </select>
                        </div>
						<button type="submit" class="btn btn-success" style="background-color: darkgreen" name="report_btn">Submit</button>
					</form>
				</div>
			</div>
		</div>

				
		<!--/Left Column-->
    <?php
        include_once"recent_items.php";
        include_once"site_footer.php";
    ?>

