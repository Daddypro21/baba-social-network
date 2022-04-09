<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="style.css">
    <title>baba-socialnetwork - using html,css,js and php</title>
</head>
<body>
    
   
    <!--
    @author Slime Ndema M "Daddypro21" < sndemapro@gmail.com>
     WebSite :  wibegin.com
     github : https://github.com/Daddypro21/baba-social-network
     to create this web site or this web page i have used :
     html5,css3,js, and php ,there is any code php but you
     can see my file is a php file

    -->
        <nav>
            <div class="container">
                <h2 class="log">
                    baba social network
                </h2>

                <div class="search-bar">
                    <i class="uil uil-search"></i>
                    <input type="search" placeholder="Search your baba friends">

                    <div class="create">
                        <label class="btn btn-primary" for="create-post">Create</label>
                        <div class="profile-photo">
                            <img src="images/profile-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- .................MAIN................... -->

        <main>

        <div class="container">
            <!-- =================LEFT============= -->
            <div class="left">
                <a class="profile">
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg" >
                    </div>
                    <h4>Slime Ndema</h4>
                    <p class="text-muted">@Daddypro21</p>

                    <!-- .................SIDEBAR................. -->
                    <div class="sidebar">
                        <a  class="menu-item active">
                            <span><i class="uil uil-home"></i></span><h3>Home</h3>
                        </a>
                        <a  class="menu-item ">
                            <span><i class="uil uil-compass"></i></span><h3>Explore</h3>
                        </a>
                        <a  class="menu-item ">
                            <span><i class="uil uil-bell"></i></span><h3>Notifications</h3>
                            <!-- ..........notification popup.......... -->
                            <div class="notifications-popup">
                                <div class="profile-photo">
                                    <img src="./images/feed-2.jpg" >
                                </div>
                                <div class="notification-body">
                                    <b>Koli Elisabeth</b> accepted your friend request
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>

                            <div class="notifications-popup">
                                <div class="profile-photo">
                                    <img src="./images/feed-3.jpg" >
                                </div>
                                <div class="notification-body">
                                    <b>Mama Zo</b> commented on a post you are tagged in
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>

                            <div class="notifications-popup">
                                <div class="profile-photo">
                                    <img src="./images/feed-4.jpg" >
                                </div>
                                <div class="notification-body">
                                    <b>Matina Therese</b> commented on a post you are tagged in
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>

                            <div class="notifications-popup">
                                <div class="profile-photo">
                                    <img src="./images/feed-5.jpg" >
                                </div>
                                <div class="notification-body">
                                    <b>Jackie Chan</b> commented on a post you are tagged in
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>

                            <div class="notifications-popup">
                                <div class="profile-photo">
                                    <img src="./images/feed-6.jpg" >
                                </div>
                                <div class="notification-body">
                                    <b>San Goku</b> commented on a post you are tagged in
                                    <small class="text-muted">2 DAYS AGO</small>
                                </div>
                            </div>
                        </a>
                        <a  class="menu-item ">
                            <span><i class="uil uil-envelope-alt"></i></span><h3>Message</h3>
                        </a>
                        <a  class="menu-item ">
                            <span><i class="uil uil-bookmark"></i></span><h3>Bookmarks</h3>
                        </a>
                        <a  class="menu-item ">
                            <span><i class="uil uil-chart-line"></i></span><h3>Analytics</h3>
                        </a>
                        <a  class="menu-item ">
                            <span><i class="uil uil-palette"></i></span><h3>Theme</h3>
                        </a>
                        <a  class="menu-item ">
                            <span><i class="uil uil-setting"></i></span><h3>Settings</h3>
                        </a>

                        <!-- .............................END OF SIDEBAR................. -->
                        <label class="btn btn-primary" for="create-post">Create Post</label>
                    </div>
                </a>
            </div>
             <!-- =================MIDDLE============= -->
            <div class="middle">

            </div>
             <!-- =================RIGHT============= -->
            <div class="right">

            </div>
        </div>
        </main>

</body>
</html>