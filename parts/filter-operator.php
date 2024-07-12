<?php
$state = $_POST['category'];
$test = $_POST['test'];
?>

<select id="msa" data-state="<?php the_field('state_code') ?>">
     <?php if (have_rows('msa')) : ?>
          <option value="x">Select a metro area</option>
          <?php while (have_rows('msa')) : the_row(); ?>
               <option><?php the_sub_field('msa_name') ?></option>
          <?php endwhile; ?>
     <?php endif; ?>
</select>




<script>
     // Select bos action ++++++++++++

     jQuery('#msa').on('change', function() {
          jQuery(".fa-spin").addClass('is-active');
          jQuery.ajax({
               type: 'POST',
               url: '/wp-admin/admin-ajax.php',
               dataType: 'html',
               data: {
                    action: 'filter_territory',
                    msa: jQuery(this).val(),
                    state: jQuery(this).attr("data-state"),
                    //  test: "furious"
               },
               success: function(res) {
                    jQuery(".fa-spin").removeClass('is-active');
                    jQuery('.territory-list').html(res);
                    jQuery('.accordion').foundation();
               }
          })
     });
</script>
</script>