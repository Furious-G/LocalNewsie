<?php
/*
Template Name: Revenue Forecast 45%
*/

get_header(); ?>
<div class="container">
    <section class="hero grid-container">
        <div class="grid-x grid-padding-x align-center">
            <div class="cell large-9 whiteBG2 revenue">
                <div class="grid-x grid-padding-x grid-padding-y align-center">
                    <div class="large-10 cell top-title">
                        <?php if ( is_user_logged_in())  : ?>
                            <?php include get_template_directory() . '/parts/acct-nav.php'; ?>
                        <?php endif ?>
                        <h1>Revenue Forecast</h1>
                        <div class="grid-x grid-padding-x grid-padding-y pd-t-10 align-center">
                            <div class="large-12 cell">
                                The Newsie revenue forecast calculator is an estimation based on…
                            </div>
                        </div>
                        <div class="grid-x grid-padding-x grid-padding-y align-right">
                            <div class="large-11 cell porel">
                                <img src="/wp-content/uploads/Monopoly-Newsie-1.png" class="tyc" class="align-center">
                                <div class="align-right flex-container revTotals align-middle" style="display: block;">
                                    <div class="tycimage text-center"><span></span></div>
                                    <div class="text-center">
                                        Local Newsie Annual Income: <span class="tValue bnewincome">0.00</span></div>
<!--                                     <div class="vertSep text-center"><span></span></div>
                                    <div class=" text-center">
                                        Newsie Tycoon Annual Income: <span class="tValue tycoonIncome">0.00</span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    <div class="grid-x grid-padding-x align-center range">


                            <div class="large-12  small-text-center medium-text-left rBox">
                                <span class="lbl">Average Number of Organizations Per Territory: </span>
                            </div>
                            <div class="cell large-12 ">
                                <div id="slider2" class="num">
                                </div>
                            </div>
                            <div class="large-12  small-text-center medium-text-left rBox">
                                <span class="lbl">Average Number of SMEs Per Territory: </span>
                            </div>
                            <div class="cell large-12">
                                <div id="slider4" class="num">
                                </div>
                            </div>
                            <div class="large-12 small-text-center medium-text-left rBox">
                                <!-- <span class="lbl">Number of Territories Licenses: </span> -->
                            </div>
                            <div class="cell large-12">
                                <div id="slider1" class="num" style="visibility: hidden;">
                                </div>
                            </div>
                            <div class="large-12  small-text-center medium-text-left rBox">
                                <!-- <span class="lbl">% Paid to Local Newsie Operator: </span> -->
                            </div>
                            <div class="cell large-12">
                                <div id="slider3" class="num" style="visibility: hidden;">
                                </div>
                            </div>

                            <div class="cell large-12 text-right">
                                <button class="subBtn btnsm">Reset</button>
                            </div>
 
                    </div>




                    </div>
                </div>
            </div>
        </div>
    </section>


        
</div><!-- end #container -->
<script type="text/javascript">
jQuery(document).ready(function($) {



    moneyFormat = wNumb({
        mark: '.',
        thousand: ',',
        decimals: 2
    });

    numFormat = wNumb({
        mark: '.',
        thousand: ',',
        decimals: 2
    });

    // $(".tValue").html(moneyFormat.to( sum ));


    var slider1 = document.getElementById('slider1');

    noUiSlider.create(slider1, {
        animate: true,
        start: 1,
        step: 1,

        tooltips: [wNumb({ decimals: 0 })],
        connect: 'lower',
        range: {
            'min': 1,
            'max': 20
        }
    });


    var slider2 = document.getElementById('slider2');

    noUiSlider.create(slider2, {
        animate: true,
        start: 0,
        step: 1,

        tooltips: [wNumb({ decimals: 0 })],
        connect: 'lower',
        range: {
            'min': 0,
            'max': 1000
        }
    });


    var slider3 = document.getElementById('slider3');

    noUiSlider.create(slider3, {
        animate: true,
        start: 0,
        step: 5,

        tooltips: [wNumb({ decimals: 0 })],
        connect: 'lower',
        range: {
            'min': 0,
            'max': 66
        }
    });


    var slider4 = document.getElementById('slider4');

    noUiSlider.create(slider4, {
        animate: true,
        start: 0,
        step: 1,

        tooltips: [wNumb({ decimals: 0 })],
        connect: 'lower',
        range: {
            'min': 0,
            'max': 90
        }
    });




    $("[id^=slider]").each(function() {
        $(this)[0].noUiSlider.on('change', function(v, handle) {

            slide1 = slider1.noUiSlider.get();
            slide2 = slider2.noUiSlider.get();
            slide3 = 40;
            slide4 = slider4.noUiSlider.get();




            feeTotal = slide1 * 3000;
            monthlyFee = slide1 * 99;

            liAnnual = slide1 * (slide2 * 59.4 + (slide4 * 180 * 12));

            liAnnual = (Math.round(liAnnual));

            perc = slide3 / 100;
            perc = liAnnual * perc;

            newsieIncome = perc / slide1;

            tycoonIncome = liAnnual - newsieIncome * slide1;

            newincome = (slide2 * 99 * .45);

            smeincome = (slide4 * 300 * 12 * .45);

            bnewincome = newincome + smeincome;






            $(".tFee").html(moneyFormat.to(feeTotal));
            $(".monthlyFee").html(moneyFormat.to(monthlyFee));
            $(".liAnnual").html(moneyFormat.to(liAnnual));
            $(".newsieIncome").html(moneyFormat.to(newsieIncome));
            $(".tycoonIncome").html(moneyFormat.to(tycoonIncome));
            $(".bnewincome").html(moneyFormat.to(bnewincome));



            // alert(Format.to ( +slide1 ));


        });
    });

    $("button").click(function() {
        slider1.noUiSlider.reset();
        slider2.noUiSlider.reset();
        slider3.noUiSlider.reset();
        slider4.noUiSlider.reset();

        $(".newsieIncome").html("0");
        $(".tycoonIncome").html("0");
        // $(".tFee").html("3,000.00" );
    });





    $(window).scroll(function() {
        $('.sticky').toggleClass("shadow", ($(window).scrollTop() > 40));
    });

});


scroll(function(event) {
    /* Act on the event */
});
</script>
<?php get_footer(); ?>