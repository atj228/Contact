<body>
    <!-- header home club-->
    <header>
        <a href="questions.php" class="logo-club">Con<span>tact</span></a>
        <nav class="nav-links">
            <ul>
                <li><a href="#"><i class="fas fa-hashtag" style="font-size:15px;"></i>{$smarty.session.username}</a>
                    <ul>
                        <li><a href="{$path}/index.php?logout=1"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <div id="other-discussion" class="bodyQuestion">
        <div class="content-home">
            <div class="o-discussions">
                {section name=i loop=$quest}
                <div class="o-discussion">
                    <div class="o-discussion-description">
                        <p class="o-content-discussion">
                            {$quest[i].message}
                        </p>
                        <div class="author-date">
                            <div class="author-gall"><small><i class="far fa-user"></i> {$quest[i].user_Name} {$quest[i].user_Surname} </small></div>
                            <div class="date-gall"><small><i class="fas fa-envelope"></i> {$quest[i].user_Email}</small></div>
                        </div>
                    </div>
                </div>
                {/section}

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
</html>