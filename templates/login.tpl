<body>
    <section id="logReg">
        <div class="container">
            <div class="logoBx">
                <a href="../index.php" class="logo black-logo">Logo</a>
                <h2>Connexion</h2>
            </div>
            <div id="log">
                <div class="formB">
                    <form method="post" action="{$smarty.server.PHP_SELF}" class="contact-form">
                        <div class="errorMessageServer">
                            {if isset($error)}
                                <small class="errorcolor">{$error}</small>
                            {/if}
                        </div>

                        <input type="text"     class="nameZone"  name="usernameLog" placeholder="Identifiant">
                        <input type="password" class="emailZone" name="passwordLog" placeholder="Mot de passe">
                        <input type="submit"   class="btnZone"   name="submitLog"   value="Connexion">
                        <p class="signup">Vous n'avez pas de compte ? <a href="registration.php" class="btn-switch">Créer un compte</a></p>
                    </form>
                    
                </div>
            </div>
        </div>

        <div class="footer-log">
            <p class="copyright">
                Copyright <small>&copy; 2021</small> Joseph ASSOUMA
            </p>
            <address>
                Contact me: <a href="assouma@et.esiea.fr">Joseph ASSOUMA</a>
            </address>
        </div>
    </section>
</body>
</html>