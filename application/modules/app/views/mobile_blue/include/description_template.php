<div class="cont1 span_2_of_a1">
	<h1><?= $html->name_product ?></h1>
	
    <div class="price_single">
    	
    	<?php if ($html->old_price): ?>
			
			<span class="reducedfrom"><?= $html->old_price ?>€</span>
			
		<?php endif ?>
	  
	  <span class="actual"><?= $html->price ?>€</span>
	</div>
	
	<p class="quick_desc"><?= $html->description_product ?></p>
    
    <div class="row">
    	<div class="col-md-6">
    		<img src="<?= base_url('/mobile_blue/image/animado.gif') ?>"/>
    	</div>
    	<div class="col-md-6">
    		<img src="<?= base_url('/mobile_blue/image/animado.gif') ?>"/>
    	</div>
    </div>
    
</div>

<div class="clearfix"> </div>