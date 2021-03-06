
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
<?php
include "header.php";
?>
<a href="#top"><img class="back" src="img/svg/back-top.svg" alt=""></a>
<div class="con-text " id="top">
    <h1>Purifying Body,
        <br> Exploring Charm,
        <br> and healing soul</h1>
</div>
<div class="con-img aos">
    <div class="left"><img class="bottom" src="img/crystal/crystal4.png" alt="" width="35%">
        <img class="top" src="img/crystal/crystal3.png" alt="" width="38%"></div>
    <div class="right">
        <div class="nothing"></div>
        <div class="descript"> Bringing sparkle and flash wherever they’re placed, crystals top the list of nature’s most stunning creations and have a long history of being treasured solely as organic home decor. However, their transformative powers go far deeper than
            just what meets the eye, and even when crystals are acquired purely for their good looks they can’t help but infuse the spaces – and people – around them with a powerful combination of vibrational balancing, colour healing, and talismanic
            magic.

        </div>
    </div>
</div>
<div class="con-text_2 aos">
    <div class="no1">
        <img class="gif" src="img/gif/1.gif" alt="">
    </div>
    <div class="con-word">
        <div class="line1">
            <div class="word">
                <span>We are</span>
                <span>Let's crystallise</span>
            </div>
        </div>
        <div class="line2">
            <div class="word">
                <span>Aptechies</span>
                <span>C2003L</span>
                <span>your life</span>
            </div>
        </div>
    </div>
    <div class="no">
        <img src="" alt="">
    </div>
</div>
<div class="con-text_3 aos" style="background: url('img/svg/circle-bg.svg')">
    <div class="banner">
        <!-- <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore unde ipsum culpa atque itaque, qui id earum necessitatibus neque reprehenderit libero harum asperiores odio sint laboriosam soluta. Pariatur, ratione facere!</h3> -->
    </div>
    <div class="bot">
        <div class="infoo">
            <div class="text">
                The wondrous lore that I prepare to show. For all the pests that out of the earth arise, the earth’s ownself the antidote supplies. She breeds the viper, but she to the sage the means presents to quell the viper’s rage. All kinds of gems spring from her
                bosom wide. And hapless mortals with sure help provide. For all what virtues potent herbs possession, gems in their kind have, nor in measure less. Great is the force . . . that in stones inherent are. For in the stone implanted mother
                earth external force, unfading, at its birth.
                <br/> —The Lithica—
            </div>
            <img src="" alt="">
        </div>
        <div class="image">
            <img src="imss/image--037.jpg" alt="" width="40%">
            <img src="ims/image--317.jpg" alt="" width="40%">
        </div>

    </div>

</div>
</body>
<script>
    window.addEventListener('scroll', function() {

        const image = document.querySelector('.image')
        const text = document.querySelector('.text')
        const left = document.querySelector('.left');
        let scrollPos = window.pageYOffset;
        left.style.transform = 'translateY(' + scrollPos * -.3 + 'px)';
        image.style.transform = 'translateX(' + scrollPos * .09 + 'px)';
        image.style.transform = 'translateY(' + scrollPos * -.1 + 'px)'
        text.style.transform = 'translateX(' + scrollPos * .15 + 'px)'
    });
</script>

</html>
