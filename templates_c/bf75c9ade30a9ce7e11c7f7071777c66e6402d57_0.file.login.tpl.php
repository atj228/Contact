<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 02:17:10
  from 'C:\xampp\htdocs\Wever\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60384c16b8cc92_73502349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf75c9ade30a9ce7e11c7f7071777c66e6402d57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Wever\\templates\\login.tpl',
      1 => 1614302027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60384c16b8cc92_73502349 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <section id="logReg">
        <div class="container">
            <div class="logoBx">
                <a href="../index.php" class="logo black-logo">Logo</a>
                <h2>Connexion</h2>
            </div>
            <div id="log">
                <div class="formB">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
" class="contact-form">
                        <div class="errorMessageServer">
                            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                                <small class="errorcolor"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</small>
                            <?php }?>
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
</html><?php }
}
