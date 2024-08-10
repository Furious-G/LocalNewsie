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
     jQuery(document).ready(function($) {
          $('#msa').on('change', function() {
               // alert(`${jQuery(this).val()} - ${jQuery(this).attr("data-state")}`);
               $.ajax({
                    type: 'POST',
                    url: '<?php echo admin_url("admin-ajax.php"); ?>',
                    dataType: 'html',
                    data: {
                         action: 'filter_territory',
                         msa: jQuery(this).val(),
                         state: jQuery(this).attr("data-state"),
                    },
                    success: function(res) {
                         $('.territory-list').html(res);
                    }
               })
          });
          // const url = new URL(window.location.href);
          // const params = new URLSearchParams(url.search);

          // ...continued from operator page
          // If querystring indicates related then update MSA and Terrotory dropdowns 
          function getQueryMsa(name) {
               let msaParams = new URLSearchParams(window.location.search);
               return msaParams.get(name);
          }
          let statusValue = getQueryMsa('status');

          if (statusValue == "related") {
               // alert("related");
               let msaValue = getQueryMsa('msa');
               let stateValue = getQueryMsa('state');
               let territoryValue = getQueryMsa('territory');
               newurl = `?state=${stateValue}&msa=${msaValue}&territory=${territoryValue}`;

               $('#msa').val(msaValue).trigger('change');
               // alert('related msa changed');

               setTimeout(() => {
                    $('#territory').val(territoryValue);
               }, 600);

               setTimeout(() => {
                    // history.pushState(null, "", location.href.split("?")[0]);
                    window.history.replaceState("object or string", "Title", newurl);
               }, 1200);
          }



     });
</script>