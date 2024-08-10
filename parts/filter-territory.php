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

     // jQuery('#territory').on('change', function() {
     //      const url = "territory-details";
     //      let state = jQuery(this).attr("data-stateCode");
     //      let msa = jQuery(this).attr("data-metro");
     //      let territory = jQuery(this).val();
     //      window.location = `${url}?state=${state}&msa=${msa}&territory=${territory}`;

     // });


     // Select bos action ++++++++++++

     jQuery(document).ready(function($) {
          // alert('territory filter');
          $('#territory').on('change', function() {
               let territory = $(this).val();
               let stateCode = $(this).attr("data-stateCode");
               let msa = $(this).attr("data-metro"),
                    newurl = `?state=${stateCode}&msa=${msa}&territory=${territory}`;
               var nonce = '<?php echo wp_create_nonce("filter_nonce"); ?>';

               $.ajax({
                    url: '<?php echo admin_url("admin-ajax.php"); ?>',
                    type: 'POST',
                    data: {
                         action: 'filter_details',
                         state_code: stateCode,
                         msa: msa,
                         territory: territory,
                         nonce: nonce
                    },
                    success: function(res) {
                         $('#showDetails').html(res);
                         window.history.replaceState("object or string", "Title", newurl);

                    },
                    error: function(xhr, status, error) {
                         console.error('AJAX Error: ' + status + error);
                    }
               });
          });
     });
</script>