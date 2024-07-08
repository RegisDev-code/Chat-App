<?php
    session_start();
    if(isset($_SESSION['unique_id'])) { //si le chater est connecté
        header("location:users.php");
    }
?>

<?php
	include_once("header.php");
?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>Let's Chat</header>
            <form action="#">
                <div class="error-txt"></div>

                <div class="field input">
                    <label for="">Adresse email</label>
                    <input type="email" name="email" placeholder="Votre adresse email" name="">
                </div>

                <div class="field input">
                    <label for="">Mot de passe</label>
                    <input type="password" name="password" placeholder="Votre mot de passe" name="">
                    <i class="fa fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Continuer la discussion" name="">
                </div>
            </form>

            <div class="link">Pas encore inscrit ? <a href="index.php">Faites-le maintenant</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>