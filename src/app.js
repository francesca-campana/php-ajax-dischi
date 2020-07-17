var $ = require( "jquery" );
var Handlebars = require("handlebars");
$(document).ready(function () {
//chiamata ajax per leggere i cd dal database e stamparli a schermo con handlebars
  $.ajax(

    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',
      success: function(datares){
        var cds = datares;
        var source = $("#cd-template").html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < cds.length; i++) {
          var cd = cds[i];
          //var author = cd['author'];
          //console.log(author);

          var html = template(cd);
          $('.cds-container').append(html);

        }
      },

      error: function(){
        alert('errore');
      }

  });
  $.ajax(
//chiamata ajax per leggere il valore degli 'author' dal database e stamparli nella select con handlebars
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',
      success: function(datares){
        var cds = datares;
        var source = $("#author-template").html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < cds.length; i++) {
          var cd = cds[i];
          var author = cd['author'];

          var context = { author: author};

          var html = template(context);
          $('.authors').append(html);

        }
      },

      error: function(){
        alert('errore');
      }

  });

  $('.authors').change(function(){

  var selectAuthor = $(this).val();

  var dataAuthor = '.cd[ data= "' + selectAuthor + '"]';
  console.log(dataAuthor);



    if (selectAuthor == 'all') {
      $('.cd').fadeIn();

    }else {
      $('.cd').fadeOut();
      $(dataAuthor).fadeIn();

    }
  });

});
