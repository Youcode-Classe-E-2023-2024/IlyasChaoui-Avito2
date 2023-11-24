<script>
    <?php
    if (isset($_GET['submit'])) {
    ?>
        Swal.fire({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success"
        });
    <?php
    }
    ?>
</script>