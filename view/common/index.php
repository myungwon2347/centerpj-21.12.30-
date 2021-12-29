<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/head.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/header.php";
?>
</head>
<style>
    .main_img_wrap img {width: 100%; height: 500px;}
    .main_img {height: 700px;}
    .main_img:nth-child(1) {background-image: url(<?=$PATH['RESOURCES']?>/img/main/main_img1.jpg)}
    .main_img:nth-child(2) {background-image: url(<?=$PATH['RESOURCES']?>/img/main/main_img2.jpg)}
    .main_img:nth-child(3) {background-image: url(<?=$PATH['RESOURCES']?>/img/main/main_img3.jpg)}

    .content_item {display: flex; justify-content: center;}
    .content_item p {text-align: center;}
    .content_item p:nth-last-child(1) {border: 1px solid #999; padding: 10px; color: #999;}
    .content_data {padding: 60px 40px;}

    .inquire {display: flex; background-image: url(<?=$PATH['RESOURCES']?>/img/content/bg_customer.gif); line-height: 30px;}
    .inquire section {height: 300px; flex-basis: 50%; text-align: center;}
    .inquire .title1_wrap {line-height: 30px; padding: 85px 0px 0px 270px}
    .inquire .title1_wrap p:nth-child(1) {font-size: 22px; line-height: 30px; font-weight: 600; letter-spacing: -1px; color: #333333;}
    .inquire .title1_wrap p:nth-child(2) {font-size: 40px; line-height: 1.3; letter-spacing: -1px;}
    .inquire .title1_wrap p:nth-child(3) {font-size: 16px; line-height: 24px; font-weight: 600;}
    .inquire .call_2 {padding: 124px 370px 0px 0px}
    .inquire .call_2 .title2_wrap {display: inline-block; font-size: 16px; font-weight: 600; border: 1px solid #333; padding: 15px 40px; color: #333333;}

    .ptfilo .ptfilo_item a img {width: 466px; height: 317px; vertical-align: baseline;}
</style>
<wrap>
    <main>
        <div class="slider main_img_wrap">
            <div class="main_img"></div>
            <div class="main_img"></div>
            <div class="main_img"></div>
        </div>

        <div class="content">
            <div class="content_item">
                    <div class="content_data content_item1">
                        <a href="">
                            <div class="col-1">
                                <img src="<?=$PATH['RESOURCES']?>/img/content/content1.jpg" alt="">
                                <p>COMPANY</p>
                                <p>Detail view</p>
                            </div>
                        </a>
                    </div>

                    <div class="content_data content_item2">
                        <a href="">
                            <div class="col-1">
                                <img src="<?=$PATH['RESOURCES']?>/img/content/content1.jpg" alt="">
                                <p>BUSINESS</p>
                                <p>Detail view</p>
                            </div>
                        </a>
                    </div>

                    <div class="content_data content_item3">
                        <a href="">
                            <div class="col-1">
                                <img src="<?=$PATH['RESOURCES']?>/img/content/content1.jpg" alt="">
                                <p>GALLERY</p>
                                <p>Detail view</p>
                            </div>
                        </a>
                    </div>
                
                    <div class="content_data content_item4">
                        <a href="">
                            <div class="col-1">
                                <img src="<?=$PATH['RESOURCES']?>/img/content/content1.jpg" alt="">
                                <p>INQUIRY</p>
                                <p>Detail view</p>
                            </div>
                        </a>
                    </div>

                    <div class="content_data content_item5">
                        <a href="">
                            <div class="col-1">
                                <img src="<?=$PATH['RESOURCES']?>/img/content/content1.jpg" alt="">
                                <p>CUSTOMER</p>
                                <p>Detail view</p>
                            </div>
                        </a>
                    </div>
            </div>
        </div>

        <div class="inquire">
            <section class="call_1">
                <div class="title1_wrap">
                    <p class="title1">상담안내</p>
                    <p class="title1">000-0000-0000</p>
                    <p class="title1">온라인상담 및 전화로 문의하시면<br />
                    친절히 상담해드리겠습니다.</p>
                </div>
            </section>
            <section class="call_2">
                <a href=""><p class="title2_wrap">온라인문의 바로가기</p></a>
            </section>
        </div>

        <div class="ptfilo">
            <div class="ptfilo_item">
                <a href=""><img src="<?=$PATH['RESOURCES']?>/img/content/demo.jpg"></a>
                <a href=""><img src="<?=$PATH['RESOURCES']?>/img/content/demo.jpg"></a>
                <a href=""><img src="<?=$PATH['RESOURCES']?>/img/content/demo.jpg"></a>
                <a href=""><img src="<?=$PATH['RESOURCES']?>/img/content/demo.jpg"></a>
            </div>
            <div class="ptfilo_item">
                <a href=""><img src="<?=$PATH['RESOURCES']?>/img/content/demo.jpg"></a>
                <a href=""><img src="<?=$PATH['RESOURCES']?>/img/content/demo.jpg"></a>
                <a href=""><img src="<?=$PATH['RESOURCES']?>/img/content/demo.jpg"></a>
                <a href=""><img src="<?=$PATH['RESOURCES']?>/img/content/demo.jpg"></a>
            </div>
        </div>
    </main>
</wrap>




<body>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . $PATH['FRAME'] . $PATH['COMMON'] . "/footer.php";
    ?>