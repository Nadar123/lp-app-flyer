<div class="tags">
    <?php $tags = get_tags(); ?>
    <i class="fas fa-tag"></i>
    <?php foreach ( $tags as $tag ) : ?>
        <a class="tage-link" href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag">
            <?php echo $tag->name; ?>
        </a>
    <?php endforeach; ?>
</div>