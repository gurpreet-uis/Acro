
<section class="all_glossary_listing">
<div class="glossary_container">
		<div class="page-heading">
		<?php if($layout['title']) { ?><h1><?php echo $layout['title']; ?></h1><?php } ?>

		<h2><?php echo $layout['short_Description']; ?></h2>
		</div>

		<div class="glossary_items_row">
		 <?php foreach ($layout['glossaries'] as $glossary_item) { ?>
		   <div class="glossary_items_col">
        <!-- Wrap the entire content, including 'Know more..' link, in the anchor tag -->
        <a class="main-achor-link" href="<?php echo get_the_permalink($glossary_item->ID); ?>">
            <div class="glossary_items_col-inner">
                <h3> <?php echo $glossary_item->post_title; ?></h3>
                <p>
                    <?php 
                    $excerpt = get_the_excerpt($glossary_item->ID); 
                    echo mb_substr($excerpt, 0, 42) . (strlen($excerpt) > 42 ? '...' : ''); 
                    ?>
                </p>
                <!-- 'Know more..' text inside the anchor tag, so everything in this div is clickable -->
                <span class="know-more-link">Know more..</span>
            </div>
        </a>
    </div>

			  
		  <?php } ?>	  
			 
</div>

		
		

 </div>

</section>



<!---section class="glossary_listing">

    <div class="glossary_container">

        <?php if($layout['title']) { ?><h1><img src="<?php echo $layout['icon']['url']; ?>"/><?php echo $layout['title']; ?></h1><?php } ?>

        <div class="glossary_items">
            <?php foreach ($layout['glossaries'] as $glossary_item) { ?>
                <a href="<?php echo get_the_permalink($glossary_item->ID); ?>" class="glossary_item">
                    <div class="icon">
                        <?php echo svg('bookmark'); ?>
                    </div>
                    <div class="title">
                        <?php echo $glossary_item->post_title; ?>
                    </div>
                </a>
            <?php } ?>
        </div>

    </div>

</section-->
