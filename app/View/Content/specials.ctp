
<!-- Wrapper -->
<div id="wrapper">

<!-- Titlebar
================================================== -->
<div id="titlebar" class="centered margin-bottom-70">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Weekly Specials</h2>

			</div>
		</div>
	</div>
</div>

</div>
<div class="clearfix"></div>

<!-- Content
================================================== -->
<div class="container">
<div class="row">
    <div col-md-12 style="border:solid;">
                        <?php foreach($specials as $special): ?>
			<!-- Item -->
                        <embed src="<?php echo $special['Special']['image_url']; ?>" width="100%" height="2100px" />
<!--			<div class="isotope-item">
				 Post 
				<div class="post-container">
					<div class="post-content">
						 Meta 
						<div class="meta-tags">
							<span><?= date('d M y', strtotime($special['Special']['created'])); ?></span>
						</div>

						<h3><?= $special['Special']['name']; ?></h3>
                                                <a href="<?php echo $special['Special']['image_url']; ?>" style="font:blue;"><p>Click here to learn about this week's special!</p></a>
                                                
                                        </div>

				</div>
			</div>	-->
                        <?php endforeach; ?>  
    </div>
</div>
</div>
<div class="clearfix"></div>




