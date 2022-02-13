<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Document</title>
</head>
<body>
    <main class="main">
        <div class="main_title">
            <div class="main_title_1">EXPLORE SOME OF OUR LATEST</div>
            <div class="main_title_2"><div class="main_title_2_line"></div> INTERIOR DESIGN WORK.</div>
        </div>

        <div class="main_content">
            
            <div class="main_content_img">
                <img src="../img/exploreimage.jpg" alt="exploreimage">
            </div>
                
                <div class="main_content_text">
                    <?php for ($i=0; $i < 4; $i++) :?>
                        <div class="main_content_text_item">
                            <div class="main_content_text_item_title">
                                <span>Interior Design</span>
                            </div>
                            <div class="main_content_text_item_content">
                                <div class="main_content_text_item_content_left">
                                    <div class="about">
                                        <i class="fa-solid fa-calendar"></i>
                                        <span>January 22, 2022</span>
                                    </div>
                                    <div class="about">
                                        <i class="fa-solid fa-map"></i>
                                        <span>Florida, USA</span> 
                                    </div>
                                </div>
                                <div class="main_content_text_item_content_right">
                                    <div class="about">
                                        <span class="about_title">The Waterfront Cafe and Restaurant</span>
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </div>
                                    <div class="about">
                                        <span>Designer HTML5 Template is 100% free to download provided by <br>
                                        TemplateMo website</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
        </div>
        <section class="discover">
            <div class="discover_left">
                <div class="main_title_1">CHECK OUT WHATS TRENDING IN</div>
                <div class="main_title_2"><div class="main_title_2_line"></div> OUR INTERIOR WORK.</div>
                <div class="discover_left_content">Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito adipcingi elit, <br>
                    sed do eismuod larehai med at vero eos et suscipit neque rerum molestias accusamus et <br>
                    iusto odio dignissimos ducimus qui blanditis.
                </div>
                <a href="#" class="discover_left_button">Discover More</a>
            </div>
            <div class="discover_right">
                
                <div class="discover_right_img1">
                    <div class="discover_right_img1_content">
                        <p class="discover_right_img1_content_1">Lorem, ipsum dolor.</p>
                        <p class="discover_right_img1_content_2">Lorem, ipsum dolor.</p>
                    </div>
                    <img src="../img/exploreimage.jpg" alt="exploreimage">
                </div>
                
                <div class="discover_right_img2">
                    <img src="../img/room1.jpg" alt="exploreimage">
                </div>
                <div class="discover_right_masterImg">
                    <div class="discover_right_masterImg_1">
                        <img src="../img/room2.jpg" alt="room2">
                    </div>
                    <div class="discover_right_masterImg_2">
                        <img src="../img/room3.jpg" alt="room3">
                    </div>
                    <div class="discover_right_masterImg_3">
                        <img src="../img/room4.jfif" alt="room4">
                    </div>
                    <div class="discover_right_masterImg_4">
                        <img src="../img/room5.jpg" alt="room5">
                    </div>
                </div>

            </div>
        </section>
    </main>

            

    <script src="https://kit.fontawesome.com/a858246c02.js" crossorigin="anonymous"></script>
</body>
</html>