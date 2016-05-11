<script>
function myFunction() {
    var x;
    if (confirm("Tem certeza que deseja excluir?") == true) {
        x = "You pressed OK!";
    } else {
        window.location.href = "index.php";
    }
}
</script>