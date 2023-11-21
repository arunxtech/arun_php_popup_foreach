
BEST EXP >>>>https://buildwebsite.co.in/Demo/AR/kigdom/index.php#

<div id="partners">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="home-attend-title w-100 float-start">
						<h3>Partners</h3>
					</div><!--home-attend-title-->

					<div class="partners-main w-100 float-start">
						<?php



						$sql = "SELECT p.id,p.name,p.logo,p.description,p.sponsor_category_id,p.link,sc.sponsor_category,sc.order_no FROM " . table_prefix . "partners as p
       LEFT JOIN " . table_prefix . "sponsor_category as sc
        ON p.sponsor_category_id = sc.id
		order by sc.order_no , p.name
		";

						//$sql = "SELECT *  FROM ".table_prefix."partners order by order_no , name";

						$result = $crud->getData($sql);
						$cat_name = '';
						$sno = 0;
						$partner_data = $result;
						foreach ($result as $obj) {
							if ($cat_name != $obj["sponsor_category"]) {
								if ($sno > 0) {
									echo "</div>
									</div><!--partner-mn-bx-->
								</div><!--partner-mn-ons-->";
								}
						?>
								<div class="partner-mn-ons w-100 float-start">
									<div class="partner-mn-heading w-100 float-start">
										<h4><?php echo $obj["sponsor_category"]; ?></h4>
									</div><!---partner-mn-ons-->

									<div class="partner-mn-bx w-100 float-start">
										<div class="row">
										<? $cat_name = $obj["sponsor_category"];
										$sno++;
									} ?>

										<div class="col-md-3 col-6">
											<div class="partner-bxes wow fadeIn w-100 float-start " data-bs-toggle="modal" data-bs-target="#partner_model" data-title="<?php echo ucwords($obj["name"]); ?>" data-logo="<?php echo $obj["logo"] ?>" data-description="<?php echo $obj["description"]; ?>">
												<?php if (!empty($obj["logo"])) { ?>
													<img src="uploads/partner/logo/<?php echo $obj["logo"]; ?>" alt="">
												<?php } ?>

											</div><!--partner-bxes-->
											<div class="partner-name w-100 float-start">
												<?php if (!empty($obj["name"])) { ?>
													<a target="_blank" href="<?php echo $obj['link']; ?>">
														<h5><?php echo ucwords($obj["name"]); ?></h5>
													</a>
												<?php } ?>
											</div>
										</div><!--col-3-->

									<? }
									?>
										</div>
									</div><!--partner-mn-bx-->
								</div><!--partner-mn-ons-->

					</div><!--partners-main-->
				</div><!--col-12-->
			</div><!--row-->
		</div><!--container-->
	</div>

<script>
	$(document).ready(function() {
		$(".partner-bxes").click(function() {
			const title = $(this).attr("data-title");
			const logo = $(this).attr("data-logo");
			const description = $(this).attr("data-description");
			$("#exampleModalLabel").html(title);
			$("#partner-image").html(logo != '' ? '<img src="uploads/partner/logo/'+logo+'" alt="">' : '');
			$("#partner-description").html(description);
			$('#partner_model').modal('show');
		});

		
		
	})
</script>	
