<body>
    <section id="Reglog">
        <div class="container">
            <div class="logoBx">
                <a href="../index.php" class="logo black-logo">Logo</a>
                <h2>Créer votre compte</h2>
            </div>
            <div id="log">
                <div class="formB formBreg">
                    <form action="{$smarty.server.PHP_SELF}" method="post" id="regData">
                        
                        <div class="errorMessageServer">
                            {if isset($error)}
                                {foreach $error as $v}
                                    <small class="errorcolor">{$v}</small>
                                {/foreach}
                            {/if}
                        </div>

                        <input type="text"      class="nameReg"     name="surnameReg"   placeholder="Nom">
                        <input type="text"      class="nameReg"     name="nameReg"      placeholder="Prénom">
                        <input type="text"      class="nameReg"     name="usernameReg"  placeholder="Identifiant">
                        <input type="email"     class="emailReg"    name="emailReg"     placeholder="Email">
                        <input type="password"  class="passwordReg" name="passwordReg"  placeholder="Mot de passe">
                        <input type="password"  class="passwordReg" name="passwordCReg" placeholder="Confirmer">
                        <input type="submit" value="Création" class="btnZone" name="submitreg">
                        <p class="signup">Vous avez déjà un compte ? <a href="login.php" class="btn-switch-reg">Connexion</a></p>
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