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