<div class="small-12 medium-4 medium-pull-8 columns">
    <div class="secondary">
        <?php  if( !dynamic_sidebar('page')) : ?>

            <p>Error!</p>

        <?php  endif; ?>
        <?php  if( !dynamic_sidebar('blog')) : ?>

            <p>Error!</p>

        <?php  endif; ?>
    </div>
</div>