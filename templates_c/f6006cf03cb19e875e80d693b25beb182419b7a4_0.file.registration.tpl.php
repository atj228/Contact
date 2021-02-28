<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 02:19:00
  from 'C:\xampp\htdocs\Wever\templates\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60384c84a12563_23567425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6006cf03cb19e875e80d693b25beb182419b7a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Wever\\templates\\registration.tpl',
      1 => 1614302335,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60384c84a12563_23567425 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <section id="Reglog">
        <div class="container">
            <div class="logoBx">
                <a href="../index.php" class="logo black-logo">Logo</a>
                <h2>Créer votre compte</h2>
            </div>
            <div id="log">
                <div class="formB formBreg">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post" id="regData">
                        
                        <div class="errorMessageServer">
                            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                    <small class="errorcolor"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</small>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
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
</html><?php }
}
