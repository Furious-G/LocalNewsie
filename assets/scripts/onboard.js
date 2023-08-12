jQuery(document).ready(function () {


    // Check to see if complete after filling out 

    jQuery(".acc input").on('blur click', function (e) {
        var mess = jQuery(this).closest(".acc").find(".wpcf7-not-valid-tip").length;

        // If all good then give the complete
        if ((jQuery(this).closest(".acc").find(".businessName").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc").find(".webUrl").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc").find(".instagramName").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc").find(".phone").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc").find(".facebookLink").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc").find(".email").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc").find("input[type='checkbox']").is(":checked")) && (mess < 1)) {



            // set name
            var currentText = jQuery(this).closest(".acc").find(".businessName").val();
            // Enter name
            jQuery(this).closest(".acc").children("a").children(".bname").text(currentText);
            // Add Check

            jQuery(this).closest(".acc").children("a").children(".check").addClass("showit");

            jQuery(this).closest(".acc").children("a").children(".pending").removeClass("showit");


            jQuery(this).closest(".acc").children("a:first-child").removeClass("orangy");


        } else {


            // If not filled out give the incomplete
            jQuery(this).closest('.acc').children("a").children(".pending").addClass("showit");

            jQuery(this).closest('.acc').children("a").children(".check").removeClass("showit");

            jQuery(this).closest('.acc').children("a").children(".bname").text("");


            jQuery(this).closest('.acc').children("a:first-child").addClass("orangy");


        }


    });

    // Check to see if forms are complete on page load

    jQuery(".acc").each(function () {


        // If all good then give the complete
        if ((jQuery(this).find(".businessName").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).find(".webUrl").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).find(".facebookLink").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).find(".instagramName").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).find(".phone").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).find(".email").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc").find("input[type='checkbox']").is(":checked"))) {
            // set name
            var currentText = jQuery(this).find(".businessName").val();
            // Enter name
            jQuery(this).find(".bname").text(currentText);
            // Add Check
            jQuery(this).find(".check").addClass('showit');





        } else {

            // If not filled out give the incomplete
            jQuery(this).find(".pending").addClass('showit');
            jQuery(this).find("a:first-child").removeClass("greeny");
            jQuery(this).find("a:first-child").addClass("orangy");

        }


    });



    // Update progress bar after filling form
    jQuery(".acc input").on('blur click', function (e) {
        var busItems = jQuery('.accordion.bus li').length;
        var numItems = jQuery('.accordion.bus .check.showit').length;
        var multNum = 100 / busItems;
        var totaldone = multNum * numItems;
        totaldone = Math.round(totaldone);

        jQuery(".filled").css("width", totaldone + "%");
        jQuery(".comp").text(totaldone);

        if (totaldone >= 100) {
            jQuery(".accordion.bus .wpcf7-submit").removeAttr("disabled");
            jQuery(".accordion.bus a.decoy").addClass('off');
            jQuery(".accordion.bus .wpcf7-submit").removeClass('off');

        } else {
            jQuery(".accordion.bus  .wpcf7-submit").attr('disabled', 'disabled');
            jQuery(".accordion.bus a.decoy").removeClass('off');
            jQuery(".accordion.bus .wpcf7-submit").addClass('off');

        }

        if (totaldone <= 25) {
            jQuery(".filled").addClass('half');
        }

        if (totaldone >= 50) {
            jQuery(".filled").addClass('quart');
        }


    });



    // Update progress bar on page load
    var busItems = jQuery('.accordion.bus li').length;
    var numItems = jQuery('.accordion.bus .check.showit').length;
    var multNum = 100 / busItems;
    var totaldone = multNum * numItems;
    totaldone = Math.round(totaldone);

    jQuery(".filled").css("width", totaldone + "%");
    jQuery(".comp").text(totaldone);


    if (totaldone < 100) {

        jQuery(".accordion.bus .wpcf7-submit").attr('disabled', 'disabled');
    } else {
        jQuery(".accordion.bus a.decoy").addClass('off');
        jQuery(".accordion.bus .wpcf7-submit").removeClass('off');
    }

    if (totaldone <= 25) {
        jQuery(".filled").addClass('half');
    }

    if (totaldone >= 50) {
        jQuery(".filled").addClass('quart');
    }


    jQuery(".mask").mask("(999) 999-9999");





    // ########################## CHANNEL TABS



    jQuery(".acc2 input").on('blur click', function (e) {

        var mess2 = jQuery(this).closest(".acc2").find(".wpcf7-not-valid-tip").length;


        // If all good then give the complete
        if ((jQuery(this).closest(".acc2").find(".publisherName").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc2").find(".webUrl").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc2").find(".instagramName").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc2").find(".facebookLink").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc2").find(".followed input[type='checkbox']").is(":checked")) && (mess2 < 1)) {



            // set name
            var currentText = jQuery(this).closest(".acc2").find(".publisherName").val();
            // Enter name
            jQuery(this).closest(".acc2").children("a").children(".bname").text(currentText);
            // Add Check

            jQuery(this).closest(".acc2").children("a").children(".check").addClass("showit");

            jQuery(this).closest(".acc2").children("a").children(".pending").removeClass("showit");

            jQuery(this).closest(".acc2").children("a:first-child").removeClass("orangy");



        } else {


            // If not filled out give the incomplete
            jQuery(this).closest('.acc2').children("a").children(".pending").addClass("showit");

            jQuery(this).closest('.acc2').children("a").children(".check").removeClass("showit");

            jQuery(this).closest('.acc2').children("a").children(".bname").text("");

            jQuery(this).closest('.acc2').children("a:first-child").addClass("orangy");


        }


    });

    // Check to see if forms are complete on page load
    jQuery(".acc2").each(function () {


        // If all good then give the complete
        if ((jQuery(this).find(".publisherName").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).find(".webUrl").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).find(".facebookLink").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).find(".instagramName").val().replace(/^\s+|\s+$/g, "").length != 0) && (jQuery(this).closest(".acc2").find(".followed  input[type='checkbox']").is(":checked"))) {

            // set name
            var currentText = jQuery(this).find(".publisherName").val("blah");
            // Enter name
            jQuery(this).find(".bname").text(currentText);
            // Add Check
            jQuery(this).find(".check").addClass('showit');

            jQuery(this).find("a:first-child").addClass("greeny");


        } else {

            // If not filled out give the incomplete
            jQuery(this).find(".pending").addClass('showit');
            jQuery(this).find("a:first-child").removeClass("greeny");
            jQuery(this).find("a:first-child").addClass("orangy");

        }


    });

    // Update progress bar on page load
    var chanItems = jQuery('.accordion.chan li').length;
    var chanComp = jQuery('.accordion.chan .check.showit').length;
    var chanMultNum = 100 / chanItems;
    var totalchandone = chanMultNum * chanComp;
    totalchandone = Math.round(totalchandone);

    jQuery(".filled2").css("width", totalchandone + "%");
    jQuery(".comp2").text(totalchandone);


    if (chanComp < chanItems) {
        jQuery(".accordion.chan .wpcf7-submit").attr('disabled', 'disabled');
    } else {
        jQuery(".accordion.chan a.decoy").addClass('off');
        jQuery(".accordion.chan .wpcf7-submit").removeClass('off');
    }

    if (totalchandone <= 25) {
        jQuery(".filled2").addClass('half');
    }

    if (totalchandone >= 50) {
        jQuery(".filled2").addClass('quart');
    }


    jQuery(".acc2 input").on('blur click', function (e) {

        var chanItems = jQuery('.accordion.chan li').length;
        var chanComp = jQuery('.accordion.chan .check.showit').length;
        var totalchandone = 10 * chanComp;
        totalchandone = Math.round(totalchandone);
        jQuery(".filled2").css("width", totalchandone + "%");
        jQuery(".comp2").text(totalchandone);

        var chanItems = jQuery('.accordion.chan li').length;
        var chanComp = jQuery('.accordion.chan .check.showit').length;


        if (chanComp === chanItems) {
            jQuery(".accordion.chan .wpcf7-submit").removeAttr("disabled");
            jQuery(".accordion.chan a.decoy").addClass('off');
            jQuery(".accordion.chan .wpcf7-submit").removeClass('off');
        } else {
            jQuery(".accordion.chan  .wpcf7-submit").attr('disabled', 'disabled');
            jQuery(".accordion.chan a.decoy").removeClass('off');
            jQuery(".accordion.chan .wpcf7-submit").addClass('off');

        }

        if (totalchandone <= 25) {
            jQuery(".filled2").addClass('half');
        }

        if (totalchandone >= 50) {
            jQuery(".filled2").addClass('quart');
        }


    });

    // Update territory value
    jQuery('select').on('change', function () {
        var terit = jQuery(this).val();
        jQuery(this).closest(".tabs-panel").find("input.territory").val(terit);
        jQuery(".subfor span").text(terit);
        if (jQuery(this).val()) {
            jQuery(this).closest(".tabs-panel").find("div.form").removeClass("hideForm");
        } else {
            jQuery(this).closest(".tabs-panel").find("div.form").addClass("hideForm");
        }
    });



    jQuery("select").each(function () {
        if (jQuery(this).val()) {
            var terit = jQuery(this).val();
            jQuery(this).closest(".tabs-panel").find("div.form").removeClass("hideForm");
            jQuery(".subfor span").text(terit);

        } else {
            jQuery(this).closest(".tabs-panel").find("div.form").addClass("hideForm");
        }
    });



});