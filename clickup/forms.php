<?php if( have_rows('clickup_forms') ) : ?>
<?php while( have_rows('clickup_forms') ): the_row(); ?>

    <?php if( have_rows('clickup_form') ) : ?>
    <?php while( have_rows('clickup_form') ): the_row(); ?>

        <?php /*
        <div class="bg-color row-block">
            <p><?php echo $form_template = get_sub_field('form_template'); ?></p></p>
            <p><?php echo $form_trigger = get_sub_field('form_trigger'); ?></p>
        </div>
        */?>
 
        <?php 
        $form_template = get_sub_field('form_template'); 
        $form_trigger = get_sub_field('form_trigger'); 
        ?>

        <?php include ('form-'.$form_template.'.php'); ?>
        <?php /*
        Forms used to have different templates for each type of lead, but I changed it so it's one form now "leads.php"
        */
        ?>
        <?php // include ('form-leads.php'); ?>

    <?php endwhile; ?>
    <?php endif; ?>
    
<?php endwhile; ?>
<?php endif; ?>