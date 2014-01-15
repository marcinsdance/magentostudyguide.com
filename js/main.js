$(".accordion,.accordion2").accordion({ "header": "h3",autoHeight: false });
$(document).ready( function() {
  // load answer is hash found in url
  var hash = window.location.hash.substring(1);
  if ( hash !== '' ) {
    if ( hash === 'front-end-developer-certification' ) {
      $(".accordion").hide();
      $(".frontend").show();
    }
    $("a.file").each( function() {
      var thishtml = $(this).html().toLowerCase().replace(/ /g,"-").replace(/[()]/g,"");
      if ( hash === thishtml ) {
        var link = $(this).attr('href');
        var subject = $(this).html();
        $("div#content").load( link, function() {
          $("div#content").scrollTop('0').prepend('<h1>' + subject + '</h1>');
        });
      }
    });
  };

  // dirty hack to change hrefs - sorry it would take so much time to change them by hand...
  $(".site-navigation ul ul a").not(".external").each( function() {
    var takeTheUrl = $(this).attr('href');
    $(this).attr('data-url', takeTheUrl);
    $(this).attr('href', '#' + $(this).html().toLowerCase().replace(/ /g,"-").replace(/[()]/g,""));
  });

  $(".display").load( 'welcome.html' );
    $("li ul li").not(" li ul li ul li ").hover(
        function() { $(this).prepend('<div class="sendform">contribute</div>'); },
        function() { $(".sendform").remove(); }
    );
  $(".sendform").live("click", function() {
    var thistext = $(this).parent().text().substr(10);
    $("form .subject").attr('value',thistext);
    $(".theform h3").text(thistext);
    $(".formwrapper").show();
    $(".theform").show();
  });

}); // end document ready

$(".submit").click( function(e) {
  e.preventDefault();
  $.post("form.php", $("form.form").serialize(),function(data) {
    $(".description h3").text(data);
  });
  $(".description h3").show("slow");
  $(".formwrapper").hide();
  $(".theform").hide();
});
$("ul li a").click( function() {
    var taketext = $(this).text();
    $(".description h2").text( taketext );
});
$("li ul li").not(" li ul li ul li ").each( function() {
    var dot = $( this ).text().indexOf( '.' );
    var number = parseInt( $( this ).text().substring( 0, dot ) );
    $( this ).attr('id', number);
    $(this).css({
        'position':'relative',
        'margin-left':'-200px',
        'padding-left':'200px'
    });
});
$("a.file")
    .not("#file18,#file19,#file22,#file23,#file24,#file25,#file26,#file27,#file28,#file29,#file30,#file31,#file32,#file33,#file34,#file36,#file46,#file47,#file481,")
    .not("#file482,#file541,#file542,#file551,#file552,#file56,#file761,#file762,#file77,#file721")
    .click( function(e) {
    e.preventDefault();
    var link = $(this).attr('data-url');
    var title = $(this).html().toLowerCase().replace(/ /g,"-").replace(/[()]/g,"");
    var subject = $(this).html();
    $("div#content").load( link, function() {
        $("div#content").scrollTop('0').prepend('<h1>' + subject + '</h1>');
    });
    window.location.replace(window.location.protocol + "#" + title);
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
$("a#file761").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('3820');
    });
});
$("a#file762").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('13335');
    });
});
$("a#file77").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('3210');
    });
});
$("a#file721").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        $("div.display").scrollTop('7580');
    });
});
$(".closeform").click( function() {
  $(".theform, .formwrapper").hide();
});
$(".formwrapper").click( function() {
  $(".theform, .formwrapper").hide();
});

// show questions and reference files on click
$("h5").click( function() {
  $(this).next().toggle();
});

// switch certification links
$(".switch.one, .switch.two, .switch.three").click( function() {
  var showThis = $(this).attr('data-show');
  $(".switch").hide();
  $("." + showThis).show();
});
$(".switch span").click( function() {
  $(".switch.one, .switch.two, .switch.three").show();
});
$(".switch.one").click( function() {
  $(".accordion").hide();
  $(".frontend").show();
  window.location.replace(window.location.protocol + "#magento-developer-certification");
});
$(".switch.two").click( function() {
  window.location.replace(window.location.protocol + "#magento-developer-plus-certification");
});
$(".switch.three").click( function() {
  $(".accordion").hide();
  $(".frontend").show();
  window.location.replace(window.location.protocol + "#front-end-developer-certification");
});
$(".switch.one, .switch.two").click( function() {
  $(".frontend").hide();
  $(".accordion").show();
});
