<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-26 02:20:17
  from 'C:\xampp\htdocs\Wever\templates\questions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60384cd1c09989_64033965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06dce4eb12ebc40cdbf615e0471a49d0cc1fe1fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Wever\\templates\\questions.tpl',
      1 => 1614302410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60384cd1c09989_64033965 (Smarty_Internal_Template $_smarty_tpl) {
?><body>
    <!-- header home club-->
    <header>
        <a href="questions.php" class="logo-club">Lo<span>Go</span></a>
        <nav class="nav-links">
            <ul>
                <li><a href="#"><i class="fas fa-hashtag" style="font-size:15px;"></i><?php echo $_SESSION['username'];?>
</a>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/index.php?logout=1"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div id="other-discussion" class="bodyQuestion">
        <div class="content-home">
            <div class="o-discussions">
                <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['quest']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <div class="o-discussion">
                    <div class="o-discussion-description">
                        <p class="o-content-discussion">
                            <?php echo $_smarty_tpl->tpl_vars['quest']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message'];?>

                        </p>
                        <div class="author-date">
                            <div class="author-gall"><small><i class="far fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['quest']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_Name'];?>
 <?php echo $_smarty_tpl->tpl_vars['quest']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_Surname'];?>
 </small></div>
                            <div class="date-gall"><small><i class="fas fa-envelope"></i> <?php echo $_smarty_tpl->tpl_vars['quest']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['user_Email'];?>
</small></div>
                        </div>
                    </div>
                </div>
                <?php
}
}
?>

            </div>
        </div>
    </div>
    <!-- Other Discussion -->

    <div class="footer-log">
        <p class="copyright">
            Copyright <small>&copy; 2021</small> Tata Joseph ASSOUMA
        </p>
        <address>
            Contact me: <a href="mailto:tassouma@foi.hr">Tata Joseph ASSOUMA</a>
        </address>
    </div>
   

</body>
</html><?php }
}
