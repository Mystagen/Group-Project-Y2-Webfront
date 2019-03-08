<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> <?=$title?> </title>
        <link href="https://fonts.googleapis.com/css?family=Hind|Rubik|Sarabun|Yantramanav" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="../Student View/styles/student.css" />
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="/Student View/scripts/main.js"></script>
    </head>
    <body>
        <label class="open">
            <input id="navOpen" type="button">
            <div class="menuIcon"></div>
            <div class="menuIcon"></div>
            <div class="menuIcon"></div>
        </label>
        <label id="messages">
            <img src="/Student View/images/messageBubble.png">
            <input id="messagesOpen" type="button">
        </label>
        <nav>
            <label class="close">
                <input id="navClose" type="button">
            </label>
            <div id="details">
                <img src="/Student View/images/blankProfilePicture.jpg" alt="Profile Picture">
                <!--FIX THESE VARIABLES-->
                <label id="firstname"><?=$firstname?></label>
                <label id="surname"><?=$surname?></label>
            </div>
            <ul id="containerUpper">
                <li class="navUpper"><a href="student_home">Dashboard</a></li>
                <li class="navUpper"><a href="student_diary">Diary</a></li>
                <li class="navUpper"><a href="student_timetable">Timetable</a></li>
                <li class="navUpper"><a href="student_modules">Modules</a></li>
                <li class="navUpper"><a href="student_assignments">Assignments</a></li>
                <li class="navUpper"><a href="student_profile">My Profile</a></li>
                <li class="navUpper"><a href="student_logout">Logout</a></li>
            </ul>
            <ul id="containerLower">
                <li class="navLower" id="li1"><a href="student_home">Dashboard</a></li>
                <li class="navLower" id="li2"><a href="student_diary">Diary</a></li>
                <li class="navLower" id="li3"><a href="student_timetable">Timetable</a></li>
                <li class="navLower" id="li4"><a href="student_modules">Modules</a></li>
                <li class="navLower" id="li5"><a href="student_assignments">Assignments</a></li>
                <li class="navLower" id="li6"><a href="student_profile">My Profile</a></li>
                <li class="navLower" id="li7"><a href="student_logout">Logout</a></li>
            </ul>
        </nav>

        <div id="messagesWindow">
            <div id="messagesHeadbar">
                <label id="messagesTitle">Messages</label>
                <label id="messagesName">{name} {online}</label>
                <label class="close" id="mclose">
                    <input id="messagesClose" type="button">
                </label>
            </div>
            <div id="messagesConversations">
                <label class="selectorMessages">
                </label>
                <div id="messagesAddConversation">
                    <div class="plusA" id="convplus1"></div>
                    <div class="plusB" id="convplus2"></div>
                    <label>New Conversation</label>
                    <input id="messagesNewConversation" type="button">
                </div>
                <div class="messagesConversation">
                    <img src="#">
                    <label class="messagesConversationName">{name}</label>
                    <input class="messagesChangeConversation" type="button">
                </div>
                <div class="messagesConversation">
                    <img src="#">
                    <label class="messagesConversationName">{name}</label>
                    <input class="messagesChangeConversation" type="button">
                </div>
                <div class="messagesConversation">
                    <img src="#">
                    <label class="messagesConversationName">{name}</label>
                    <input class="messagesChangeConversation" type="button">
                </div>
            </div>
            <div id="messagesCurrentConversation">
                <input id="messageBox" type="text">
                <input id="submit" type="submit" value="⮑">
            </div>
        </div>

        <main>
            <div id="headerBar">
                <label id="logo">
                    <img src="/Student View/images/Logo.png" alt="Woodlands Logo">
                </label>
                <div class="centerWrap">
                    <h1 id="pageTitle"> <?=$title?></h1>
                </div>
            </div>
            
            <?=$content?>
            
        </main>
        <div id="backgroundImage">
            <img src="/Student View/images/backgroundWaves.png">
        </div>
    </body>
</html>