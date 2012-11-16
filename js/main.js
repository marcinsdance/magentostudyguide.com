$(".accordion").accordion({ "header": "h3", "heightStyle": "fill" });
$("li ul li").not(" li ul li ul li ").each( function() {
    var dot = $( this ).text().indexOf( '.' );
    var number = parseInt( $( this ).text().substring( 0, dot ) );
    $( this ).attr('id', number);
});
$("a.file").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link );
});
$("a#file18").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('1980');
    });
});
$("a#file19").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('13120');
    });
});
$("a#file22").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('6120');
    });
});
$("a#file23").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('5000');
    });
});
$("a#file24").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('2270');
    });
});
$("a#file25").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('2920');
    });
});
$("a#file26").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('3530');
    });
});
$("a#file27").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('2260');
    });
});
$("a#file28").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('590');
    });
});
$("a#file29").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('12400');
    });
});
$("a#file30").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('4710');
    });
});
$("a#file31").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('4540');
    });
});
$("a#file32").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('1460');
    });
});
$("a#file33").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('3790');
    });
});
$("a#file34").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('2935');
    });
});
$("a#file36").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('2940');
    });
});
$("a#file46").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('6120');
    });
});
$("a#file47").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('5545');
    });
});
$("a#file481").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('12090');
    });
});
$("a#file482").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('14515');
    });
});
$("a#file541").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('17640');
    });
});
$("a#file542").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('20900');
    });
});
$("a#file551").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('4070');
    });
});
$("a#file552").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('5600');
    });
});
$("a#file56").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('16150');
    });
});
