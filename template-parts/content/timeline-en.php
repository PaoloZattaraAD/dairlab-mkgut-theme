<?php $timeline = get_field('timeline_item_en', 'option'); ?>
<div id="dairlab-timeline">
	<?php foreach( $timeline as $id=>$item ): ?>
	<div class="group-timeline <?php echo ( ($id+1) % 2 ? 'col-inverted-xs' : '') ?>">
		<div class="col">
			<img loading="lazy" width="400" height="auto" src="<?php echo $item['image']; ?>" alt="" class="wp-image-368">
		</div>
		<div class="col">
			<h4><?php echo $item['year']; ?></h4>
			<p><?php echo $item['text']; ?></p>
		</div>
	</div>
	<?php endforeach; ?>
</div>
