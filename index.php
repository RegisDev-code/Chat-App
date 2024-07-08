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
        <section class="form signup">
            <header>Let's Chat</header>

            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>

                <div class="name-details">
                    <div class="field input">
                        <label for="">Nom</label>
                        <input type="text" placeholder="Votre nom" name="fname" required>
                    </div>

                    <div class="field input">
                        <label for="">Prénom</label>
                        <input type="text" placeholder="Votre prénom" name="lname" required>
                    </div>
                </div>

                <div class="field input">
                    <label for="">Adresse email</label>
                    <input type="email" placeholder="Votre adresse email" name="email" required>
                </div>

                <div class="field input">
                    <label for="">Mot de passe</label>
                    <input type="password" placeholder="Un mot de passe" name="password" required>
                    <i class="fa fa-eye"></i>
                </div>

                <div class="field image">
                    <label for="">Choisir une image</label>
                    <input type="file" name="image" required>
                </div>

                <div class="field button">
                    <input type="submit" value="Continuer">
                </div>
            </form>

            <div class="link">Vous avez déjà un compte ? <a href="login.php">Connexion</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>