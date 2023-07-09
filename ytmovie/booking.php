<?php
session_start();

if (empty($_SESSION["username"])) {
    echo '<script>window.location.href = "login.php";</script>'; // Redirect to index.php if not logged in
} else {
    include("header.php");
}
?>

<section class="mt-5">
    <h3 class="text-center text-red-600 text-3xl">Book Your Tickets Now</h3>
</section>

<?php
include("footer.php");
?>
