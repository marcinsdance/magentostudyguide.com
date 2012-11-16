$(".accordion").accordion({ "header": "h3", "heightStyle": "fill" });
$("li ul li").not(" li ul li ul li ").each( function() {
    var dot = $( this ).text().indexOf( '.' );
    var number = parseInt( $( this ).text().substring( 0, dot ) );
    $( this ).attr('id', number);
});
$("a.file").click( function(e) {
    e.preventDefault();
    var link = $(this).attr('href');
    $("div.display").load( link, function() {
        var content = $("div.display").html();
        $("div.display").html( '<pre>' + content + '</pre>');
    });
});

