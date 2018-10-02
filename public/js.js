/*
$( "#show" ).on( "click", function() {
	alert("aa");
	document.getElementById("top-menu").style.display = "block";
	document.getElementById("#how").style.display = "none";
});
$( "#show" ).click(function() {
  alert( "Handler for .click() called." );
});
*/

$(document).ready(
    function(){
        //додавання нової картинки
        var count_input = 1;
        $("#add-input").click(function(){
            count_input++;
            $("<div id='add-image"+count_input+"' class='form-group'><input type='hidden' name='MAX_FILE_SIZE' value='2000000'/><input type='file' class='form-control' name='gallery_img[]'/><a class='delete-input' rel='"+count_input+"'>Видалити</a></div>").fadeIn(300).appendTo("#objects"); 
        });
        //видалення картинки
        $(document).on("click", ".delete-input", function(){
            var rel = $(this).attr("rel");
            $("#add-image"+rel).fadeOut(300, function(){
                $("#add-image"+rel).remove();
            });
        });
        $("td.delete").click(function() {
            document.getElementById('delete_id').value = $('div.id').html();
        });
        $("[data-toggle=tooltip]").tooltip();
    }
);
  function cheked(select) {
    // берём значение из select и что-то с ним делаем
    return select.val();
  };
  function get_cookie ( cookie_name )
  {
    var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
   
    if ( results )
      return ( unescape ( results[2] ) );
    else
      return null;
  }
  /**
  * Filters the mixer using a provided search string, which is matched against
  * the contents of each target's "class" attribute. Any custom data-attribute(s)
  * could also be used.
  *
  * @param  {string} searchValue
  * @return {void}
  */
  function filterByString(searchValue) {
    if (searchValue) {
      // Use an attribute wildcard selector to check for matches
      mixer.filter('[data-title="' + searchValue + '"]');
    } 
    else {
      // If no searchValue, treat as filter('all')
      mixer.filter('all');
    }
  }