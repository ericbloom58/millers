
<!-- Wrapper -->
<div id="wrapper">

<!-- Titlebar
================================================== -->
<div id="titlebar" class="centered margin-bottom-70">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

                            <h2>News: <strong><?= $news['Blog']['name']; ?></strong></h2>

			</div>
		</div>
	</div>
</div>

</div>
<div class="clearfix"></div>

<!-- Content
================================================== -->
<div class="container" style="margin-bottom:5%;">
<div class="row">
    <div class="col-md-12">
	<div class="col-md-9">	
			<!-- Item -->
			<div id="<?= $news['Blog']['id']; ?>" style="margin-top:5%;">
				<!-- Post -->
						<!-- Categories --><a href="#"><?= $news['Blog']['name']; ?></a>
                                                <h5>Posted on: <span><?= date('M d y', strtotime($news['Blog']['created'])); ?></span></h5>

						
                                                <!--<p><?= $news['Blog']['description']; ?></p>-->
                                                <div class="container4blog" style="width:30%;">
                                                    <h5><?= $news['Blog']['blog']; ?></h5>
                                                </div>
			</div>

	</div>

	<!-- Widgets -->
	<div class="col-md-3">

		<!-- Categories -->
		<div class="widget margin-bottom-60">
			<h4>Blog Posts</h4>

			<ul class="list-links">
                            <?php foreach($anews as $new): ?>
				<!-- Post #1 -->
				<li>
                                    <h5><a href="/content/news/<?= $new['Blog']['id']; ?>"><?= $new['Blog']['name']; ?></a></h5>
                                    <h5>Posted on: <span><?= date('M d y', strtotime($new['Blog']['created'])); ?></span></h5>
				</li>
                            <?php endforeach; ?>
			</ul>
		</div>
		<!-- Social Icons -->
		<div class="widget">
			<h4>Follow Us</h4>
			<ul class="social-icons rounded color">
				<li><a class="facebook" href="http://www.facebook.com/pages/Millers-Food-Market-Inc/147225711972648"><i class="icon-facebook"></i></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		
		<div class="margin-bottom-40"></div>
	</div>
    </div>
</div>
</div>



