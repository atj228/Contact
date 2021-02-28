<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="content-home">
            <a href="index.php" class="logo">LOGO</a>

            <button class="menu-toggler">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="navbar-menu">
                <a href="">Contact</a>
                <a href="form/login.php" class="logIn-btn">Connexion</a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Contact Page -->
    <section id="contact">
        <div class="content-home">
            <h3 class="section-title">F.A.Q</h3>
            <form action="{$smarty.server.PHP_SELF}" method="post" class="contact-form">

                <div class="errorMessageServer">
                    {if isset($error)}
                        {foreach $error as $v}
                            <small class="errorcolor">{$v}</small>
                        {/foreach}
                    {/if}
                </div>

                <input type="text"      class="nameZone"        name="nameQ"        placeholder="Nom">
                <input type="text"      class="surnameZone"     name="surnameQ"     placeholder="Prénom">
                <input type="email"     class="emailZone"       name="emailQ"       placeholder="Email">
                <textarea               class="messageZone"     name="messageQ"     placeholder="Message"></textarea>
                <input type="submit"    class="btnZone"         name="submitQ"      value="Envoyer" >
            </form>
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
    <!-- End Contact Page -->
</body>
</html>