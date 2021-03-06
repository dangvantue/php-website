
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>

 <?php
 include('header.php')
 ?>

    <div class="loading">
        <img src="img/svg/loading/crystal (1).svg" alt="">
        <img src="img/svg/loading/crystal (2).svg" alt="">
        <img src="img/svg/loading/crystal.svg" alt="" width="50px">
        <img src="img/svg/loading/gemstone.svg" alt="" width="50px">
        <img src="img/svg/loading/mineral.svg" alt="" width="50px">
    </div>
    <div class="contain" id="contain">
        <section id="a1">a</section>
        <section id="a2">b</section>
        <section id="a3">c</section>
        <section id="a4">d</section>
        <section id="a5">e</section>
    </div>
    <nav>
        <ul>
            <li><button>New Arrivals</button></li>

            <li><button>Special Offers</button></li>


            <li><button>Shop</button></li>


            <li><button>Contact</button></li>


            <li><button>About</button></li>
        </ul>
    </nav>
</body>
<script type="text/javascript">
    var x = document.getElementById('contain');
    var sections = document.querySelectorAll('section');
    var btns = document.querySelectorAll('button');
    let currentSection = 1;
    var manualNav = function(manual) {
        sections.forEach((section) => {
            section.classList.remove('active');
        });
        btns.forEach((btn) => {
            btn.classList.remove('active');
        });

        sections[manual].classList.add('active');
        btns[manual].classList.add('active');
    }
    btns.forEach((btn, i) => {
        btn.addEventListener('click', () => {
            manualNav(i);
            currentSection = i;
        })
    })
    var repeat = function(activeClass) {
        let active = document.getElementsByClassName('active');
        let i = 1;
        var repeater = () => {
            setTimeout(() => {
                [...active].forEach((activeSection) => {
                    activeSection.classList.remove('active');
                })
                sections[i].classList.add('active');
                btns[i].classList.add('active');
                i++;
                if (sections.length == i) {
                    i = 0;
                }
                if (i >= sections.length) {
                    return;
                }
                repeater();
            }, 5000);
        }
        repeater();
    }
    repeat();
</script>

</html>