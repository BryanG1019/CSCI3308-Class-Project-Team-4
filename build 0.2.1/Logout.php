<html>
<script>
    <?php
	
	session_start();
	$_SESSION['loggedin'] = false;
	?>
    </script>
<body>
    <h1> You have been logged out! Redirecting to the login page. </h1>
    <div id="counter">3</div>
    <script>
        setInterval(function() {
            var div = document.querySelector("#counter");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
                location.href="Login_screen.php";
            }
        }, 1000);
    </script>


</body>
</html>
