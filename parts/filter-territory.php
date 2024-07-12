<?php
$state = $_POST['state'];
$msa = $_POST['msa'];

?>
<select id="territory" data-stateCode="<?php echo $state; ?>" data-metro="<?php echo $msa; ?>">
     <?php if (get_field('state_code') == $state) : ?>
          <?php if (have_rows('msa')) : ?>
               <option value="">Select a Territory</option>
               <?php while (have_rows('msa')) : the_row(); ?>
                    <?php if (get_sub_field('msa_name') == $msa) : ?>yes
                    <?php if (have_rows('territory')) : ?>
                         <?php while (have_rows('territory')) : the_row(); ?>
                              <option value="<?php the_sub_field('territory_name'); ?>"><?php the_sub_field('territory_name'); ?></option>
                         <?php endwhile; ?>
                    <?php endif; ?>
               <?php endif; ?>
          <?php endwhile; ?>
     <?php else : ?>
     <?php endif; ?>
<?php endif; ?>
</select>
<?php wp_reset_postdata(); ?>
<script>
     // Select bos action ++++++++++++

     jQuery('#territory').on('change', function() {
          const url = "territory-details";
          let state = jQuery(this).attr("data-stateCode");
          let msa = jQuery(this).attr("data-metro");
          let territory = jQuery(this).val();
          window.location = `${url}?state=${state}&msa=${msa}&territory=${territory}`;

     });
</script>