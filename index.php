<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GAB's PD2 Mods</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>

<body>

    <nav class=" nav-bar row-responsive bg-gray-darkest font-oswald text-white shadow-box-black">
        <div class="nav-wrapper row-responsive-xl">

            <input type="checkbox" class="nav-hamburger-input hamburger-absolute">

            <div class="nav-hamburger hamburger-absolute">
                <div class="nav-hamburger-logo">
                    <span class="hamburger-line bg-white shadow-box-black"></span>
                    <span class="hamburger-line bg-white shadow-box-black"></span>
                    <span class="hamburger-line bg-white shadow-box-black"></span>
                </div>
            </div>
    
            <div class="nav-brand">
                <h1 class="h1-header shadow-text-black font-oswald text-white">
                    Gab's PayDay 2 mods
                </h1>
            </div>
    
            <div class="nav-link-wrapper nav-hamburger-toggle-area vertical-center">
                <div class="row-responsive">
                    <a href="#about" class="nav-link text-white hover-light-gray">About</a>
                    <a href="#download" class="nav-link text-white hover-light-gray">Downloads</a>
                    <a href="#faq" class="nav-link text-white hover-light-gray">F.A.Q</a>
                    <a href="#contact" class="nav-link text-white hover-light-gray">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="site-wrap bg-gray-darkest full-width">
        <div class="header">
            <div class="header-text">
                <div class="col font-road-rage">
                    <p class="text-white header-text-p">
                        Gab's PD2
                    </p>
                    <p class="text-pd2-blue header-text-p header-text-p-double">
                        Mods
                    </p>
                </div>
            </div>
        </div>

        <div class="content col-center bg-gray-darkest skew" id="about">
            <div class="content-wrap border-white unskew">
            <!-- Cutter boxes, those make the outline effect -->
                <div class="cutted border-color-darkest-gray cutted-top-bot "></div>
                <div class="cutted cutted-left-right border-color-darkest-gray"></div>
            <!-- End of Cutter boxes -->

                <h2 class="big-h2 h1-header col-center shadow-text-black font-oswald text-white text-center">
                    About
                </h2>

                <p class="font-open-sans text-white text-center">    
                    Welcome to Gab's PAYDAY 2 mod collection.
                
                    Here you can download all of my PAYDAY 2 Mods. 
                </p>
                
                <p class="font-open-sans text-pd2-blue text-center shadow-text-black">
                    Completely <i>FREE</i> and <i>UNDETECTED</i> !
                </p>
                

                <p class="font-open-sans text-white text-center">
                    Some act as cheats and some don't. Just take a look around.
                    <!--All mods downloadable here are undetected, unless stated otherwise.-->
                    
                    They are coded in LUA and utilize
                    <a class="text-pd2-blue hover-light-gray" href="https://github.com/JamesWilko/Payday-2-BLT">PayDay2 BLT</a>.
                    This allows for direct modification of the games internal logics,
                    making all of this possible in the first place.

                    There's a mod missing that you want? Just contact me.
                </p>

                <div class="row-responsive-xl all-center space-wrap text-white"> 
                    <div class="col-center">
                        <div class="about-icon fa-big-icon about-circle shadow-box-black">
                            <i class="fas fa-user-secret shadow-text-black"></i>
                        </div>

                        <h2 class="font-road-rage about-sub-text text-white shadow-text-black">
                            Safe
                        </h2>
                    </div>
                        
                    <div class="col-center">
                        <div class="about-icon fa-big-icon about-circle shadow-box-black">
                            <i class="fas fa-coins shadow-text-black"></i>
                        </div>

                        <h2 class="font-road-rage about-sub-text text-white shadow-text-black">
                            Free
                        </h2>
                    </div>

                    <div class="col-center">
                        <div class="about-icon fa-big-icon about-circle shadow-box-black">
                            <i class="fas fa-keyboard shadow-text-black"></i>
                        </div>

                        <h2 class="font-road-rage about-sub-text text-white shadow-text-black">
                            Updated
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="content col-center bg-dark-gray skew" id="download">
            <div class="content-wrap unskew border-white cutted-dark-gray">
                <!-- Cutter boxes, those make the outline effect -->
                    <div class="cutted border-color-dark-gray cutted-top-bot "></div>
                    <div class="cutted cutted-left-right border-color-dark-gray"></div>
                <!-- End of Cutter boxes -->
                <h2 class="big-h2 h1-header col-center shadow-text-black font-oswald text-white text">
                    Download
                </h2>

                <p class="font-open-sans text-white text-center">
                    <div class="">
                        <?php
                            require_once './php/list_mods.php';
                            echo '<h2 class="med-h2 text-white shadow-text-black font-oswald">Client mods</h2>';
                            loopAndPrintFiles("./mods/client");

                            echo '<div class="spacer full-width"></div>';

                            echo '<h2 class="med-h2 text-white shadow-text-black font-oswald">Host mods</h2>';
                            loopAndPrintFiles("./mods/host");
                        ?>
                    </div>
                </p>
            </div>
        </div>

        <div class="content col-center bg-darkest-gray skew" id="faq">
            <div class="content-wrap unskew border-white cutted-darkest-gray">
                <!-- Cutter boxes, those make the outline effect -->
                    <div class="cutted border-color-darkest-gray cutted-top-bot "></div>
                    <div class="cutted cutted-left-right border-color-darkest-gray"></div>
                <!-- End of Cutter boxes -->

                <h2 class="big-h2 h1-header col-center shadow-text-black font-oswald text-white text-center">
                    Frequently Asked Questions
                </h2>

                <div class="font-open-sans text-white faq-wrap">
                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        Are these mods undetected?
                    </p>

                    <p class="faq-answer font-open-sans text-white">
                        Yes, unless stated on the mods page.
                    </p>

                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        Why don't you just upload your mods at modworkshop?
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        Many of my mods are basically cheats, and therefore don't comply with their rules.
                    </blockquote>

                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        How do you install PAYDAY 2 Mods?
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        <a href="https://steamcommunity.com/sharedfiles/filedetails/?id=512690479" class="text-pd2-blue hover-light-gray">
                            Here 
                        </a>     
                        
                        are some Instructions.
                    </blockquote>
                    
                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        What's the difference between Client-Mods and Host only-Mods?
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        Client-Mods work no matter if you are playing in someone else's lobby or in your own. Host only-Mods require you to create the lobby.
                    </blockquote>

                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        How do you provide all this content for free?
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        With to the help of <a href="https://palone.top" class="text-pd2-blue hover-light-gray">p410n3</a>
                        who made this website.
                    </blockquote>

                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        Can I get banned?
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        Pretty much no, you can only get banned from the official PAYDAY 2 
                        Steam group, but that's easily bypassable and doesn't matter for the main game anyways.<br />
                        TL;DR no VAC & game bans.
                    </blockquote>

                    <p class="faq-question text-white font-open-sans shadow-text-black"> 
                        Why do I get kicked everytime I join a lobby? / Why do my friends see CHEATER above my name?
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        You are probably using a mod, which triggers the CHEATER tag.
                    </blockquote>
                    
                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        Can you upload a DLC unlocker?
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        Just download
                        <a class="text-pd2-blue" href="https://www.unknowncheats.me/forum/payday-2-a/185930-blt-selective-dlc-unlocker.html">this</a> 
                        and check all boxes in the mod settings. Keep in mind that this triggers the CHEATER tag.
                    </blockquote>

                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        Why don't you put all of this in a single client?
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        To keep it light, less buggy and make it easier to add / uninstall / modify single components.
                    </blockquote>
                    
                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        Why should I choose your mods over X?
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        Well, as said in the previous answer, these mods are light, easier to modify and 
                        might even contain features, which are premium only or not available in some cheats.
                    </blockquote>

                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        (How) can I donate?
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        Sure, just <a href="#contact" class="text-pd2-blue hover-light-gray">contact me</a>.
                    </blockquote>

                    <p class="faq-question text-white font-open-sans shadow-text-black">
                        How can I trust your mods? They might contain malware!
                    </p>
                    
                    <blockquote class="faq-answer font-open-sans text-white">
                        They don't. All of my mods are open source, just 
                        check yourself. Additionally I am a trusted middleman on 
                        <a class="text-pd2-blue" href="https://high-minded.net/members/gab.41181/">High-Minded</a> 
                        I won't risk just to infect a small amount of users.
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="content col-center bg-dark-gray skew" id="contact">
            <div class="content-wrap unskew border-white cutted-darkest-gray">
                <!-- Cutter boxes, those make the outline effect -->
                    <div class="cutted border-color-dark-gray cutted-top-bot "></div>
                    <div class="cutted cutted-left-right border-color-dark-gray"></div>
                <!-- End of Cutter boxes -->

                <h2 class="big-h2 h1-header col-center shadow-text-black font-oswald text-white text-center">
                    Contact me
                </h2>

                <div class="row-responsive all-center space-wrap text-white width-80">
                    <div class="col-center">
                        <a href="https://steamcommunity.com/id/P8C" class="text-white">
                            <i class="fab fa-steam shadow-text-black text-center fa-med-icon"></i>
                        </a>
                        
                        <h3 class="text-white font-open-sans shadow-text-black">
                            STEAM
                        </h3>
                    </div>
                    <div class="col-center">
                        <a href="https://t.me/bruzzzler" class="text-white">
                            <i class="fab fa-telegram shadow-text-black text-center fa-med-icon"></i>
                        </a>

                        <h3 class="text-white font-open-sans shadow-text-black">
                            TELEGRAM
                        </h3>
                    </div>
                    <div class="col-center">
                        <a href="mailto:gab@saru.ch" class="text-white">
                            <i class="fas fa-envelope shadow-text-black text-center fa-med-icon"></i>
                        </a>

                        <h3 class="text-white font-open-sans shadow-text-black">
                            MAIL
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-center">
            <div class="col footer bg-gray-darkest font-open-sans shadow-box-black">
                <p class="text-light-gray footer-text">
                    Mods and Website Owner is GAB - &copy; 2018<br />
                    Web-design and development by p410n3
                </p>
            </div>
        </div>
    </div>
</body>
</html>