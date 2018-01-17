
<div id="wrapper">

<!-- Container -->
<div class="container">
	<div class="row margin-top-60">
		
		<!-- Text Block -->
		<div class="col-md-2">
		</div>	
		
		<!-- Table -->
		<div class="col-md-8">
                    <div class="row margin-top-20">
                                <?= $subs['Content']['content']; ?>
                    </div>
		</div>
        </div>       
                        <?php foreach($products as $category): ?> 
                <div class="row margin-top-60">
		
		<!-- Text Block -->
		<div class="col-md-2">
		</div>	
		<!-- <?= $category['Category']['name'] ?>-->
		<!-- Table -->
		<div class="col-md-8">
                            <!--    <?php foreach($category['Product'] as $p){ ?>
                            <div class="col-md-6">
                                    <strong><?= $p['name'] ?></strong>
                                    <?= $p['description'] ?>
                                    <strong><?= $p['price'] ?></strong>
                            </div>
                                <?php } ?> -->
                    
                    
                    <div class="row isotope-wrapper isotope-two-cols extra-gutter-right shop-wrapper">
                        <div class="isotope-sizer"></div>
                        <!-- Product -->
                                <?php foreach($category['Product'] as $p){ ?>
                        <div class="col-md-6 col-xs-12 isotope-item">
                            <div class="shop-item">
                                <figure>
                                    <!--<a href="#" class="add-to-cart"><i class="sl sl-icon-basket"></i></a>-->
                                        <figcaption class="item-description">
                                            <a href="#"><h5><?= $p['name'] ?></h5></a>
                                            <?= $p['description'] ?>
                                            <span class="sale"><mark>$<?= $p['price'] ?></mark></span>
                                        </figcaption>
                                </figure>
                            </div>
                        </div>
                                <?php } ?>
                    </div>
                    
		</div>
		<!-- Table / End -->
		
	</div>
        <?php endforeach; ?>
		
	</div>
    <div class="row margin-top-100"></div>
</div>
<!-- Image Edge / End -->