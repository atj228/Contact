<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 02:11:05
  from 'C:\xampp\htdocs\Wever\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60384aa90ad452_98783819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8647b18349017cf4da417926b10ea2c5c8556125' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Wever\\templates\\index.tpl',
      1 => 1614301856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60384aa90ad452_98783819 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
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
            <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post" class="contact-form">

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
</html><?php }
}
