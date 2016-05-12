//function myFunction() {
//    var x;
//    if (confirm("Tem certeza que deseja excluir?") == true) {
//        x = "You pressed OK!";
//    } else {
//        window.location.href = "index.php";
//    }
//}

$(function () {

    $(".delete").click(function () {
        var id = $(this).attr('data-id');

        $.ajax({
            type: "GET",
            url: "excluir.php?id=" + id,
            success: function () {
                $("tr[data-id=" + id + "]" ).slideUp('slow', function() {$(this).remove();});
                $('#load').fadeOut();
            }
        });

        return false;
    });
});

//$("button").click(function(){
//      $("#test").hide();
// });