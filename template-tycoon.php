<?php
/**
 * Template Name: tycoon sliders Page
 * This template will only display the content you entered in the page editor
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js" integrity="sha512-igVQ7hyQVijOUlfg3OmcTZLwYJIBXU63xL9RC12xBHNpmGJAktDnzl9Iw0J4yrSaQtDxTTVlwhY730vphoVqJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.js" integrity="sha512-1mDhG//LAjM3pLXCJyaA+4c+h5qmMoTc7IuJyuNNPaakrWT9rVTxICK4tIizf7YwJsXgDC2JP74PGCc7qxLAHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.6.0/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
.rg{
    width: 100%;
}

/* label max */
.max{
  position: absolute;
  top: 50px;
  right: 0;
}

/*label min */
.min{
  position: absolute;
  top: 50px;
  left: 0;
}

.container{
    padding-top:330px
}

.range{
    padding-bottom:80px
}

.noUi-horizontal{
    height:30px 
}

.noUi-horizontal .noUi-handle{
    height:38px
}


.tValue {
    margin-bottom: 10px;
    font-size: 22px;
    display: inline-block;
    font-weight: 600;
    display: block;
    clear: both;
    background: #fff;
    color: #000;
    border-radius: 15px;
    padding: 4px;
    margin-top: 10px;
}

.lbl{
    font-size: 18px;
    font-weight: 600;
    padding-right: 40px;
}

.noUi-connect{
    background: #F0552A;
}
.noUi-tooltip {
    border: 1px solid #BEBCBC;
    font-size: 20px;
}

.noUi-target {
    background: #E9E9E9;
}
button{
    background: #F0552A;
    color:#fff;
    padding:10px 40px;
    border-radius: 6px;
}
.sep {
    margin-bottom: 40px;
    border-bottom: 3px dashed;
    text-align: left;
    font-size: 23px;
    border-color: #d6cfcf;
}

.text{
    margin-bottom: 80px;
}

.gridContain{
    display: flex;
}

.main{
    width: 100%;
}

.leftBar{
    background: #606060;
    width: 200px;
    color: #fff;
}

.head{
      background: #F2F2F2;
      padding: 15px 30px;
}

.leftBar ul{
    list-style: none;
    margin: 0;
    padding-top: 40px;
}

.leftBar li {
    font-size: inherit;
    border-bottom: dotted #999;
    padding: 10px;
}

.leftBar img{
    padding: 20px;
}

.leftBar li:hover{
    background: #333
}

.leftBar i{
    margin-right:10px
}



.lbl {
    padding-bottom: 10px;
    display: inline-block;
}

.fixedNum{
 background: 100%;
  text-align: center;
  padding-top:30px;
  background: #fff;
}

.sticky{
  position: fixed;
  width:100%;
  z-index: 99;
  max-width: 100%;
  background: #fff;
  background: #F0552A;
  color: #fff;
}

.tValue:before{
    content: "$";
}

.container{
  padding-top:330px !important;
}

.tog .lbl{
  padding:0 10px;
  line-height: 16px;
}

.tog .noUi-horizontal .noUi-handle{
    border-radius: 100%;
}

.tog .noUi-target, .tog .noUi-connect{
    border-radius: 12px;
}

.noUi-handle::after, .noUi-handle::before{
    background: #fff;
}

.noUi-handle {
    border: 1px solid #CDB6B6;
}

#slider3 .noUi-tooltip:after{
  content:"%";
}

.shadow{
-webkit-box-shadow: 0px -1px 7px 5px rgba(0,0,0,0.23); 
box-shadow: 0px -1px 7px 5px rgba(0,0,0,0.23);
}

.sep2{
background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,0) 16%, rgba(255,255,255,1) 50%, rgba(255,255,255,0) 85%);
height: 3px;
width: 100%;
margin-bottom: 15px;
}

 
 /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 750px) {
    .container{
            padding-top: 400px !important;
            padding-left: 20px;
            padding-right: 20px;
    }
.noUi-horizontal .noUi-tooltip {
    bottom: 0;
    border: none;
    font-size: 16px;
    z-index: 99;
}
.range {
    padding-bottom: 40px;
}
}



</style>
</head>
<body class="cleanpage">

<section class="grid-container text-center sticky">
    <div class="grid-x grid-padding-x grid-padding-y align-center">
        <div class="large-12 cell title text-center">
            <h1><img src="/wp-content/uploads/Monopoly-Newsie-1.png" style="height:90px;"> Newsie Tycoon</h1>
        </div>
        <div class="sep2"></div>
<!--         <div class="cell large-4 tlbl">
            Total Licensing Annual Income: <span class="tValue liAnnual">0</span>
        </div> -->
        <div class="cell large-4 tlbl">
            Local Newsie Annual Income: <span class="tValue newsieIncome">0</span>
        </div>
        <div class="cell large-4 tlbl">
            Newsie Tycoon Annual Income: <span class="tValue tycoonIncome">0</span>
        </div>
    </div>
</section>


<div class="container">
    <section class="grid-container text-center">

<!-- <div class="flourish-embed flourish-map" data-src="visualisation/10430482"><script src="https://public.flourish.studio/resources/embed.js"></script></div> -->
        <div class="grid-x grid-padding-x align-center range">
            <div class="large-11 cell align-center">


                <div class="grid-x grid-padding-x align-center range">
                    <div class="large-4 small-text-center medium-text-right">
                        <span class="lbl">Number of Territories Licenses: </span>
                    </div>
                    <div class="cell large-8">
                           <div id="slider1" class="num">
                           </div>
                    </div>
                </div>


                <div class="grid-x grid-padding-x align-center range">
                    <div class="large-4  small-text-center medium-text-right">
                       <span class="lbl">Average Number of Organizations Per Territory: </span>
                    </div>
                    <div class="cell large-8 ">
                        <div id="slider2" class="num">
                        </div>
                    </div>
                </div>



                <div class="grid-x grid-padding-x align-center range align-middle">
                    <div class="large-4  small-text-center medium-text-right">
                       <span class="lbl">% Paid to Local Newsie Operator: </span>
                    </div>
                    <div class="cell large-8">
                        <div id="slider3" class="num">
                        </div>
                    </div>
                </div>

                <div class="grid-x grid-padding-x align-center range">
                    <div class="large-4  small-text-center medium-text-right">
                       <span class="lbl">Average Number of SMEs Per Territory: </span>
                    </div>
                    <div class="cell large-8">
                        <div id="slider4" class="num">
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


jQuery(document).ready(function( $ ) {

   

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


   var slider1=document.getElementById('slider1');

    noUiSlider.create(slider1, {
        animate: true,
        start: 1,
        step: 1,

        tooltips: [wNumb({decimals: 0})],
        connect: 'lower',
        range: {
            'min':1,
            'max': 20
        }
    });


   var slider2=document.getElementById('slider2');

    noUiSlider.create(slider2, {
        animate: true,
        start: 0,
        step: 1,

        tooltips: [wNumb({decimals: 0})],
        connect: 'lower',
        range: {
            'min':0,
            'max': 1000
        }
    });


    var slider3=document.getElementById('slider3');

    noUiSlider.create(slider3, {
        animate: true,
        start: 0,
        step: 5,

        tooltips: [wNumb({decimals: 0})],
        connect: 'lower',
        range: {
            'min':0,
            'max': 66
        }
    });


    var slider4=document.getElementById('slider4');

    noUiSlider.create(slider4, {
        animate: true,
        start: 0,
        step: 1,

        tooltips: [wNumb({decimals: 0})],
        connect: 'lower',
        range: {
            'min':0,
            'max': 90
        }
    });





$("[id^=slider]").each(function() {
     $(this)[0].noUiSlider.on('change',function(v,handle){

         slide1 = slider1.noUiSlider.get();
         slide2 = slider2.noUiSlider.get();
         slide3 = slider3.noUiSlider.get();
         slide4 = slider4.noUiSlider.get();




        feeTotal = slide1 * 3000;
        monthlyFee = slide1 * 99;

        liAnnual = slide1*(slide2*59.4+(slide4*180*12));

        liAnnual = (Math.round(liAnnual));

        perc = slide3/100;
        perc = liAnnual*perc;

        newsieIncome = perc/slide1;

        tycoonIncome = liAnnual-newsieIncome*slide1





            
        $(".tFee").html(moneyFormat.to( feeTotal ));
        $(".monthlyFee").html(moneyFormat.to( monthlyFee ));
        $(".liAnnual").html(moneyFormat.to( liAnnual ));
        $(".newsieIncome").html(moneyFormat.to( newsieIncome ));
        $(".tycoonIncome").html(moneyFormat.to( tycoonIncome ));



        // alert(Format.to ( +slide1 ));


    });
});

 $( "button" ).click(function() {
   slider1.noUiSlider.reset(); 
   slider2.noUiSlider.reset();
   slider3.noUiSlider.reset();
   slider4.noUiSlider.reset();

        $(".newsieIncome").html( "0" );
        $(".tycoonIncome").html( "0" );
   // $(".tFee").html("3,000.00" );
 });



    $(window).scroll(function () {
        $('.sticky').toggleClass("shadow", ($(window).scrollTop() > 40));
     });

});

    
    scroll(function(event) {
        /* Act on the event */
    });


</script>
</body>
</html>