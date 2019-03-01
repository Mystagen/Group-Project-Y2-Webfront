<html>
    <header>
        <title><?php echo $title ?></title>
        <link href="https://fonts.googleapis.com/css?family=Hind|Rubik|Sarabun|Yantramanav" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="/Public View/styles/public.css" />
        <script src="/Public View/scripts/public.js"></script>
    </header>
    <body>
        <div id="pvTopBanner">
            <img id="pvTopBannerBackground" src="images/backgroundWaves.png">
            <img id="pvTopBannerLogo" src="/Public View/images/Logo.png">
        </div>
        
        <nav id="pvNav">
            <ul>
                <li><a href="/">Home</a></li>
                <li>
                    <div class="pvDropDownHeader">
                        <label>Study At Woodlands</label>
                        <div class="pvDropDownHidden">
                            <a href="/courses">Courses</a>
                            <a href="/additionalservices">Learning Assistance</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pvDropDownHeader">
                        <label>Accomodation Available</label>
                        <div class="pvDropDownHidden">
                            <a href="/lifeatwoodlands">Life at Woodlands</a>
                            <a href="/halls">Halls A</a>
                            <a href="/halls">Halls B</a>
                            <a href="/halls">Halls C</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pvDropDownHeader">
                        <label>International Students</label>
                        <div class="pvDropDownHidden">
                            <a href="/internationalinformation">Information</a>
                            <a href="/internationalopportunities">Opportunities</a>
                        </div>
                    </div>
                </li>
                <li><a href="/login">Student Portal</a></li>
            </ul>
        </nav>

        <main>
        <?= $content ?>
        </main>

</body>
<footer>
    <ul>
        <li>Lorem Ipsum</li>
        <li>Lorem Ipsum</li>
        <li>Lorem Ipsum</li>
    </ul>
</footer>
</html>