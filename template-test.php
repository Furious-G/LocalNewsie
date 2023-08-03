<?php
/**
 * Template Name: Test sliders Page 1
 * This template will only display the content you entered in the page editor
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
     <meta charset="<?php bloginfo('charset'); ?>">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <?php wp_head(); ?>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"
          integrity="sha512-igVQ7hyQVijOUlfg3OmcTZLwYJIBXU63xL9RC12xBHNpmGJAktDnzl9Iw0J4yrSaQtDxTTVlwhY730vphoVqJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js"
          integrity="sha512-1mDhG//LAjM3pLXCJyaA+4c+h5qmMoTc7IuJyuNNPaakrWT9rVTxICK4tIizf7YwJsXgDC2JP74PGCc7qxLAHw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css"
          integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

     <style>
          .rg {
               width: 100%;
          }

          /* label max */
          .max {
               position: absolute;
               top: 50px;
               right: 0;
          }

          /*label min */
          .min {
               position: absolute;
               top: 50px;
               left: 0;
          }

          .container {
               padding-top: 20px
          }

          .range {
               padding-bottom: 80px
          }

          .noUi-horizontal {
               height: 30px
          }

          .noUi-horizontal .noUi-handle {
               height: 38px
          }


          .tValue {
               margin-bottom: 10px;
               color: green;
               font-size: 38px;
               display: inline-block;
               font-weight: 600;
          }

          .lbl {
               font-size: 18px;
               font-weight: 600;
          }

          .noUi-connect {
               background: #F0552A;
          }

          .noUi-tooltip {
               border: 1px solid #BEBCBC;
               font-size: 20px;
          }

          .noUi-target {
               background: #E9E9E9;
          }

          button {
               background: #F0552A;
               color: #fff;
               padding: 10px 40px;
               border-radius: 6px;
          }

          .sep {
               margin-bottom: 10px;
               border-bottom: 3px dashed;
               text-align: left;
               font-size: 23px;
               border-color: #d6cfcf;
          }

          .text {
               margin-bottom: 80px;
          }

          .gridContain {
               display: flex;
          }

          .main {
               width: 100%;
          }

          .leftBar {
               background: #606060;
               width: 200px;
               color: #fff;
          }

          .head {
               background: #F2F2F2;
               padding: 15px 30px;
          }

          .leftBar ul {
               list-style: none;
               margin: 0;
               padding-top: 40px;
          }

          .leftBar li {
               font-size: inherit;
               border-bottom: dotted #999;
               padding: 10px;
          }

          .leftBar img {
               padding: 20px;
          }

          .leftBar li:hover {
               background: #333
          }

          .leftBar i {
               margin-right: 10px
          }



          .lbl {
               padding-bottom: 10px;
               display: inline-block;
          }

          .fixedNum {
               background: 100%;
               text-align: center;
               padding-top: 30px;
               background: #fff;
          }

          .sticky {
               position: fixed;
               width: 89%;
               z-index: 99;

          }

          .tValue:before {
               content: "$";
          }

          .container {
               padding-top: 200px
          }

          .tog .lbl {
               padding: 0 10px;
               line-height: 16px;
          }

          .tog .noUi-horizontal .noUi-handle {
               border-radius: 100%;
          }

          .tog .noUi-target,
          .tog .noUi-connect {
               border-radius: 12px;
          }

          .noUi-handle::after,
          .noUi-handle::before {
               background: #fff;
          }

          .noUi-handle {
               border: 1px solid #CDB6B6;
          }


          .shadow {
               -webkit-box-shadow: 0px -1px 7px 5px rgba(0, 0, 0, 0.23);
               box-shadow: 0px -1px 7px 5px rgba(0, 0, 0, 0.23);
          }
     </style>
</head>

<body class="cleanpage">


     <!-- just a test another test   testing remote-->
     <div class="gridContain">

          <div class="leftBar">
               <img
                    src="https://staging10.localnewsie.com/wp-content/themes/JointsWP-CSS-master/assets/images/mainlogo.png">
               <ul>
                    <li><i class="fa-light fa-bullhorn"></i> Advertising</li>
                    <li><i class="fa-light fa-chart-network"></i> Affiliates</li>
                    <li><i class="fa-light fa-location-dot"></i> Areas</li>
                    <li><i class="fa-light fa-briefcase"></i> Businesses</li>
                    <li><i class="fa-light fa-gallery-thumbnails"></i> Carousel</li>
                    <li><i class="fa-light fa-sitemap"></i> Categories</li>
                    <li><i class="fa-light fa-users"></i> Clients</li>
               </ul>
          </div>
          <div class="main">
               <div class="sticky">
                    <div class="head text-right">Welcome <strong>Username</strong></div>
                    <div class="fixedNum">
                         <h4 class="text-center">Territory Equity </h4>
                         <span class="tValue">3,000.00</span>
                    </div>
               </div>


               <div class="container">
                    <section class="grid-container text-center">

                         <!-- <div class="flourish-embed flourish-map" data-src="visualisation/10430482"><script src="https://public.flourish.studio/resources/embed.js"></script></div> -->
                         <div class="grid-x grid-padding-x align-center range">
                              <div class="large-11 cell align-center">

                                   <div class="sep">Newsie</div>
                                   <div class="text text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Curabitur consectetur nec odio at mattis. Integer et tortor lobortis, molestie
                                        dui
                                        porta, bibendum dui. <strong>Use the sliders to estimate future equity</strong>.
                                   </div>

                                   <div class="grid-x grid-padding-x align-center range">
                                        <div class="large-4 text-right">
                                             <span class="lbl">Total US Territories Licensed: </span>
                                        </div>
                                        <div class="cell large-8">
                                             <div id="slider1" class="num">
                                             </div>
                                        </div>
                                   </div>


                                   <div class="grid-x grid-padding-x align-center range">
                                        <div class="large-4 text-right">
                                             <span class="lbl">Regional Territories: </span>
                                        </div>
                                        <div class="cell large-8">
                                             <div id="slider2" class="num">
                                             </div>
                                        </div>
                                   </div>



                                   <div class="grid-x grid-padding-x align-center range align-middle">
                                        <div class="large-4 text-right">
                                             <span class="lbl">Surrounding Territories: </span>
                                        </div>
                                        <div class="cell large-8">
                                             <div id="slider3" class="num">
                                             </div>
                                        </div>
                                   </div>

                                   <div class="grid-x grid-padding-x align-center range align-middle tog">
                                        <div class="large-3 text-right">
                                             <span class="lbl">App 2.0:</span>
                                        </div>
                                        <div class="cell large-1">
                                             <div id="slider4" class="num">
                                             </div>
                                        </div>
                                        <div class="large-3 text-right">
                                             <span class="lbl">Admin 2.0:</span>
                                        </div>
                                        <div class="cell large-1">
                                             <div id="slider5" class="num">
                                             </div>
                                        </div>
                                        <div class="large-3 text-right">
                                             <span class="lbl">Gamification Launch:</span>
                                        </div>
                                        <div class="cell large-1">
                                             <div id="slider6" class="num">
                                             </div>
                                        </div>
                                   </div>

                                   <div class="grid-x grid-padding-x align-center range align-middle tog">
                                        <div class="large-3 text-right">
                                             <span class="lbl">Toolkit 2.0:</span>
                                        </div>
                                        <div class="cell large-1">
                                             <div id="slider7" class="num">
                                             </div>
                                        </div>
                                        <div class="large-3 text-right">
                                             <span class="lbl">CRM 2.0:</span>
                                        </div>
                                        <div class="cell large-1">
                                             <div id="slider8" class="num">
                                             </div>
                                        </div>
                                        <div class="large-3 text-right">
                                        </div>
                                        <div class="cell large-1">

                                        </div>
                                   </div>


                                   <div class="sep" style="margin-bottom:80px">Network</div>


                                   <div class="grid-x grid-padding-x align-center range">
                                        <div class="large-4 text-right">
                                             <span class="lbl">Downloads: </span>
                                        </div>
                                        <div class="cell large-8">
                                             <div id="slider9" class="num">
                                             </div>
                                        </div>
                                   </div>

                                   <div class="grid-x grid-padding-x align-center range">
                                        <div class="large-4 text-right">
                                             <span class="lbl">Participating Orginizations: </span>
                                        </div>
                                        <div class="cell large-8">
                                             <div id="slider10" class="num">
                                             </div>
                                        </div>
                                   </div>

                                   <button>Reset</button>

                              </div>
                         </div>

                    </section>
               </div>








          </div>
     </div>



     <?php wp_footer(); ?>
     <script type="text/javascript">


          jQuery(document).ready(function ($) {

               sum = 3000;

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

               $(".tValue").html(moneyFormat.to(sum));

               var slider1 = document.getElementById('slider1');

               noUiSlider.create(slider1, {
                    animate: true,
                    start: 10,
                    step: 1,
                    padding: [50, 10],
                    tooltips: [wNumb({ decimals: 0 })],
                    connect: 'lower',
                    range: {
                         'min': -9,
                         'max': 1010
                    }
               });


               var slider2 = document.getElementById('slider2');

               noUiSlider.create(slider2, {
                    animate: true,
                    start: 7,
                    step: 1,
                    padding: [2, 0],
                    tooltips: [wNumb({ decimals: 0 })],
                    connect: 'lower',
                    range: {
                         'min': 5,
                         'max': 40
                    }
               });


               var slider3 = document.getElementById('slider3');

               noUiSlider.create(slider3, {
                    animate: true,
                    start: 1,
                    step: 1,
                    padding: [1, 0],
                    tooltips: [wNumb({ decimals: 0 })],
                    connect: 'lower',
                    range: {
                         'min': 0,
                         'max': 6
                    }
               });


               var slider4 = document.getElementById('slider4');

               noUiSlider.create(slider4, {
                    animate: true,
                    start: 0,
                    step: 500,
                    connect: 'lower',
                    range: {
                         'min': 0,
                         'max': 500
                    }
               });

               var slider5 = document.getElementById('slider5');

               noUiSlider.create(slider5, {
                    animate: true,
                    start: 0,
                    step: 500,
                    connect: 'lower',
                    range: {
                         'min': 0,
                         'max': 500
                    }
               });

               var slider6 = document.getElementById('slider6');

               noUiSlider.create(slider6, {
                    animate: true,
                    start: 0,
                    step: 500,
                    connect: 'lower',
                    range: {
                         'min': 0,
                         'max': 500
                    }
               });

               var slider7 = document.getElementById('slider7');

               noUiSlider.create(slider7, {
                    animate: true,
                    start: 0,
                    step: 500,
                    connect: 'lower',
                    range: {
                         'min': 0,
                         'max': 500
                    }
               });


               var slider8 = document.getElementById('slider8');

               noUiSlider.create(slider8, {
                    animate: true,
                    start: 0,
                    step: 500,
                    connect: 'lower',
                    range: {
                         'min': 0,
                         'max': 500
                    }
               });


               var slider9 = document.getElementById('slider9');

               noUiSlider.create(slider9, {
                    animate: true,
                    start: 0,
                    step: 5,
                    connect: 'lower',
                    padding: [5, 0],
                    tooltips: [wNumb({ decimals: 0 })],
                    range: {
                         'min': 0,
                         'max': 500
                    }
               });

               var slider10 = document.getElementById('slider10');

               noUiSlider.create(slider10, {
                    animate: true,
                    start: 0,
                    step: 5,
                    connect: 'lower',
                    padding: [5, 0],
                    tooltips: [wNumb({ decimals: 0 })],
                    range: {
                         'min': 0,
                         'max': 500
                    }
               });



               $("[id^=slider]").each(function () {
                    $(this)[0].noUiSlider.on('change', function (v, handle) {





                         slide1 = slider1.noUiSlider.get();
                         slide2 = slider2.noUiSlider.get();
                         slide3 = slider3.noUiSlider.get();
                         slide4 = slider4.noUiSlider.get();
                         slide5 = slider5.noUiSlider.get();
                         slide6 = slider6.noUiSlider.get();
                         slide7 = slider7.noUiSlider.get();
                         slide8 = slider8.noUiSlider.get();



                         slide1Total = slide1 * 5 - 205;
                         slide2Total = slide2 * 25 - 175;
                         slide3Total = slide3 * 150 - 150;
                         slide4Total = slide4 * 1;
                         slide5Total = slide5 * 1;
                         slide6Total = slide6 * 1;
                         slide7Total = slide7 * 1;
                         slide8Total = slide8 * 1;

                         gtotal = +slide2Total + +slide1Total +
                              +slide3Total + +slide4Total + +slide5Total + +slide6Total
                              + +slide7Total + +slide8Total;


                         slidesum = +sum + +gtotal;






                         $(".tValue").html(moneyFormat.to(slidesum));


                         // alert(Format.to ( +slide1 ));


                    });
               });

               $("button").click(function () {
                    slider1.noUiSlider.reset();
                    slider2.noUiSlider.reset();
                    slider3.noUiSlider.reset();
                    slider4.noUiSlider.reset();
                    slider5.noUiSlider.reset();
                    slider6.noUiSlider.reset();

                    $(".tValue").html("3,000.00");
               });



               $(window).scroll(function () {
                    $('.sticky').toggleClass("shadow", ($(window).scrollTop() > 40));
               });

          });


          scroll(function (event) {
               /* Act on the event */
          });


     </script>
</body>

</html>