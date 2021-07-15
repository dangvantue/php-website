<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contactt.css">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>

    <section>
        <?php
        include ('header.php');
        ?>
        <h2 class="text">Get-in-Touch-With-US</h2>
        <div class="info">
            <div class="content-info">
                <div class="logo-content"><img src="/img/svg/crystal-meth.svg" alt=""></div>
                <br/><br/><br/>
                <div class="info_1">
                    <h3>Head Office</h3>
                    <span>Phan Liem</span><br/>
                    <span>Phuong Dakao Quan 1</span><br/>
                    <span>Ho Chi Minh City </span><br/>
                    <span>Viet Nam</span><br/><br/><br/>
                </div>
                <div class="info_2">
                    <h3>Contact</h3>
                    <span>+84 xxx-xxx-xxx</span><br/>
                    <span>email@gmail.com</span><br/>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.282914249211!2d106.69300631541958!3d10.789630161898705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cb4ba30aa5%3A0x3a0ddc230888b922!2zMjQgUGhhbiBMacOqbSwgxJBhIEthbywgUXXhuq1uIDEsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1618165919791!5m2!1svi!2s"
                    width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
    </section>

</body>
<script>
    const ab = document.querySelector('.text');
    ab.innerHTML = ab.textContent.replace(/\S/g, "<span>$&</span>");
    const element = document.querySelectorAll('span');
    for (let i = 0; i < element.length; i++) {
        element[i].style.transform = "rotate(" + i * 18 + "deg)";
    }
    var a = document.querySelector(".menu-button");
    var b = document.querySelector(".menu-toggle");
    var c = document.querySelector(".menu-wrap");
    var d = document.querySelector(".bg")
    a.onclick = function() {
        b.classList.toggle('change')
        c.classList.toggle('show')
        d.classList.toggle('show')
    }
</script>

</html>