<p class="cat-and-time"> 
    <span class="date"><?php the_date('F j, Y'); ?></span> |
    <span class="time"><?php the_time('g.i.a'); ?></span> |
    <span class="category"><?php echo get_the_category_list(' - '); ?></span> 
</p>