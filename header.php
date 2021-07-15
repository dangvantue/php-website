
<div class="container-header">
    <div class="menu-button">
        <div class="menu-toggle">
            <a class="icon" href="#"></a>
            <a class="icon" href="#"></a>
            <a class="icon" href="#"></a>
            <a class="icon" href="#"></a>
        </div>
    </div>
</div>
<div class="menu-wrap">
    <div class="colum"></div>
    <div class="colum"></div>
    <div class="colum"></div>
    <div class="colum"></div>
    <div class="colum"></div>
    <div class="colum"></div>
    <div class="colum"></div>
    <div class="colum"></div>
</div>
<div class="bg">
    <div class="colum1" id="menu">
        <div class="container-menu">
            <ul class="menu1">
                <a href="hompage.php">
                    <li>HOME</li>
                </a>
                <a href="new-arrivals.php">
                    <li>NEW ARRIVALS</li>
                </a>
                <a href="special-offers.php">
                    <li>SPECIAL OFFERS</li>
                </a>
                <a href="product.php">
                    <li>PRODUCT</li>
                </a>

                <a href="about.php">
                    <li>ABOUT US</li>
                </a>

                <a href="contactt.php">
                    <li>CONTACT</li>
                </a>

            </ul>
        </div>
    </div>
</div>

<script>
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

