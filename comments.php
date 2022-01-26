<div id="respond" class="clearfix">

<?php

    comment_form([
            'comment_field'         =>  '<div class="clear"></div>

            <div class="col_full">
                <label>Leave Comment</label>
                <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
            </div>',
            'fields'                =>  [
                'author'            =>  
                    '<div class="col_one_third">
                        <label>' . __( 'Name', 'the5ers' ) . '</label>
                        <input type="text" name="author" class="sm-form-control" />
                    </div>',
                'email'             =>  
                    '<div class="col_one_third">
                        <label>' . __( 'Email', 'the5ers' ) . '</label>
                        <input type="text" name="email" class="sm-form-control" />
                    </div>',
                'url'               =>  
                    '<div class="col_one_third col_last">
                        <label>' . __( 'Website', 'the5ers' ) . '</label>
                        <input type="text" name="url" class="sm-form-control" />
                    </div>'
            ],
            'class_submit'          =>  'button button-3d nomargin',
            'label_submit'          =>  __( 'Submit Comment', 'the5ers' ),
            'title_reply'           =>  __( 'Leave a <span>Comment</span>', 'the5ers' )
    ]);

?>

</div>
