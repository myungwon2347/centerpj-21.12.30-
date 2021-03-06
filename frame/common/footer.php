    <style>

    footer {font-size: 14px; font-weight: 300px; text-align: center;}
    .ank {position: fixed; bottom: 50px; right: 50px; cursor: pointer; z-index: 2;}
    .ank .btn {border-radius: 50%; background-color: rgba(51,51,51,0.4); width: 46px;; height: 46px; transition: all ease 0.3s;}
    .copyright li {display: inline-block; color: #666666; line-height: 22px;}
    .copyright .line {color: #d3d3d3; margin: 0 10px;}
    .copyright .copy {clear: both; display: block; margin-top: 10px;}
    .copyright .copy_wrap {height: 200px;}
    .copyright .copy_wrap ul {padding-top: 78px;}
    </style>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/config.php";
?>
    <footer>
        <div class="ank">
            <div class="btn">
                <img src= "<?=$PATH['RESOURCES']?>/img/scroll.png">
            </div>
        </div>
        <div class="copyright">
            <div class="copy_wrap">
                <ul>
                    <li>상호명 : <?=$ETC['NAME']?></li>
                    <li class="line">/</li>

                    <li>대표 : <?=$ETC['CEO']?></li>
                    <li class="line">/</li>

                    <li>Tel : <?=$ETC['TEL']?></li>
                    <li class="line">/</li>

                    <li>사업자등록번호 : <?=$ETC['REGISTRATION']?></li>
                    <li class="line">/</li>
                    
                    <li>E-mail : <?=$ETC['EMAIL']?></li>

                    <li class="copy">Copyright © Design MZ All rights reserved.</li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        $(function(){
            $('.detph1 li > a').on({
                mouseover : function(){
                    $('nav > ul > li > ul > li').css('display','block');
                    $('header').css('height','280px').css('backgroundColor','white').css('z-index','9999');
                },
            });

            $('header').on({
                mouseleave : function(){
                    $('nav > ul > li > ul > li').css('display','none');
                    $('header').css('height','100px').css('backgroundColor','white').css('z-index','1');
                },
            });
            // $('.detph1 li > a').mouseover(function(){
            //     $('.header_wrap').css('height','280px').css('backgroundColor','red');
            // });
            // $('.detph1 li > a').mouseleave(function(){
            //     $('.header_wrap').css('height','100px').css('backgroundColor','white');
            // });

            // $('.detph1 li > a').mouseleave(function(){
            //     $('.detph2 li').css('display','none');
            // });
        });
    </script>
</body>
</html>