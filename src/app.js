var $ = require( "jquery" );
var Handlebars = require("handlebars");
$(document).ready(function () {

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

          var html = template(cd);
          $('.cds-container').append(html);
        }
      },

      error: function(){
        alert('errore');
      }

  });

});
