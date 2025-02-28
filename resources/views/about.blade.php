<style>
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700);
@import url('https://fonts.googleapis.com/css?family=Lato:400,700,900,900i');
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900');
* {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}


body {
  margin: 0;
  padding: 0;
  font-family: 'Source Sans Pro', sans-serif;
  background: white;
  -webkit-font-smoothing: antialiased;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}

#address-bar {
  width: 100%;
  height: 40px;
  background: rgb(46, 46, 46);
  position: absolute;
  z-index: -1;
}

#menu-bar {
  width: 100%;
  height: 160px;
  background: rgb(69, 69, 69);
  position: absolute;
  margin-top: 40px;
  border-top: 1px solid rgb(77, 77, 77);
  z-index: -1;
  -webkit-box-shadow: inset 0px -27px 104px -33px rgba(0, 0, 0, 0.36);
  -moz-box-shadow: inset 0px -27px 104px -33px rgba(0, 0, 0, 0.36);
  box-shadow: inset 0px -27px 104px -33px rgba(0, 0, 0, 0.9);
}

#menu-bar2 {
  margin-top: 150px;
  position: absolute;
  height: 100px;
  width: 1000px;
  background: rgb(249, 249, 249);
  -webkit-box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.53);
  -moz-box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.53);
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.53);
}

#main-wrap {
  margin: 0 auto;
  width: 1000px;
}

#logo img {
  margin-top: 55px;
  width: 80px;
  margin-left: -1px;
  hegith: 80px;
}

#adress-bar-text {
  position: absolute;
  margin-top: 10px;
  font-size: 13px;
  font-weight: 400;
  color: rgb(218, 218, 218);
}

#adress-bar-text a {
  font-size: 13px;
  font-weight: 400;
  color: rgb(236, 233, 70);
  transition: all 0.2s;
}

#adress-bar-text a:hover {
  font-size: 13px;
  font-weight: 400;
  color: white;
}

.fa-facebook-square {
  margin-top: 5px;
  position: absolute;
  font-size: 30px;
  color: rgb(70, 98, 158);
  margin-left: 938px;
  transition: all 0.2s;
}

.fa-twitter-square {
  position: absolute;
  color: rgb(94, 169, 221);
  margin-left: 973px;
  font-size: 30px;
  margin-top: 5px;
  transition: all 0.2s;
}

.fa-phone,
.fa-home {
  position: absolute;
  color: rgb(152, 152, 152);
  margin-left: 390px;
  font-size: 50px;
  margin-top: 72px;
  transition: all 0.1s;
}

.fa-phone {
  margin-left: 225px;
}

.fa-home {
  margin-left: 465px;
}

.fa-clock-o {
  position: absolute;
  color: rgb(152, 152, 152);
  margin-left: 762px;
  font-size: 50px;
  margin-top: 72px;
  transition: all 0.1s;
}

#large-p,
#large-p2,
#large-p3 {
  color: rgb(221, 221, 221);
  position: absolute;
  margin-top: 72px;
  margin-left: 445px;
  text-decoration: none;
  font-weight: 900;
  letter-spacing: 1px;
  font-size: 18px;
}

#large-p {
  margin-left: 279px;
}

#large-p2 {
  margin-left: 520px;
}

#large-p3 {
  margin-left: 818px;
}

#small-p,
#small-p2,
#small-p3 {
  color: rgb(152, 152, 152);
  margin-top: 96px;
  font-size: 16px;
  margin-left: 445px;
  position: absolute;
}

#small-p {
  margin-left: 280px;
}

#small-p2 {
  margin-left: 521px;
}

#small-p3 {
  margin-left: 818px;
}


/*
.fa-youtube-square{
  position: absolute;
  color: #c4302b;
  margin-left: 975px;
  font-size: 30px;
  margin-top: 5px;
  transition: all 0.2s;
}

*/

.fa-twitter-square:hover,
.fa-facebook-square:hover {
  color: white;
}

#nav-one {
  position: relative;
  float: left;
  margin-left: -25px;
  padding-top: 35px;
}

#nav-one ul {
  list-style: none;
}

#nav-one ul li {
  display: inline;
  padding-left: 70px;
  position: center;
}

#nav-one ul li a {
  color: rgb(152, 152, 152);
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 900;
  letter-spacing: 4px;
  font-size: 16px;
  transition: ;
  padding-bottom: 38px;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 10px;
}

#nav-one ul li a:hover {
  color: rgb(69, 69, 69);
  border-bottom: 4px solid rgb(236, 233, 70);
}

#page-name-bar{
  width: 100%;
  height: 200px;
  margin-top: 200px;
  position: absolute;
  background-color: rgb(238, 238, 238);
  background-image: url(https://demo.proteusthemes.com/buildpress/wp-content/uploads/sites/16/2014/10/title-area-pattern.png);
  background-repeat: repeat;
  border-bottom: 1px solid rgb(215, 215, 215);
  
}
body {
      background-image: url("{{ asset('images/about.jpg') }}");
      background-repeat: no-repeat;
     background-size: cover;
     
    }

#page-name-bar-heading{
  position: absolute;
  margin-top: 110px;
  width: 1000px;
}

#p-n-b-h{
  color: rgb(51, 51, 51);
  margin-left: -20px;
  margin-top: 50px;
  text-align: center;
  color: rgb(51, 51, 51);
  font-size: 40px;
  font-weight: 600;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: -1px;
  
}

#p-n-b-h2{
  position: absolute;
  margin-top: 45px;
  font-size: 18px;
  margin-left: 345px;
  font-weight: 600;
  font-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  color: rgb(77, 77, 77);
  padding-bottom: 10px;
}

#p-n-b-h3{
  position: absolute;
  margin-top: 375px;
  font-size: 18px;
  margin-left: 337px;
  font-weight: 600;
  font-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  color: rgb(77, 77, 77);
  padding-bottom: 10px;
}



/* _wrapper.css */
.wrapper {
  z-index: 2;
  padding-left: 18px;
  padding-right: 18px;
  max-width: 1236px;
  margin-left: auto;
  margin-right: auto;
}


/* _timeline.css */
.timeline {
  position: relative;
  height: 3160px;
  margin: 670px auto;
  padding: 160px 0;
  margin-left: -12px;

}
.timeline::before {
  content: "";
  position: absolute;
  top: 0;
  left: 10%;
  width: 4px;
  height: 100%;
  background-color: rgb(77, 77, 77);
}
@media (min-width: 800px){
  .timeline::before{
    left: 50%;
    margin-left: -2px;
  }
}
.timeline__item {
  margin-bottom: 100px;
  position: relative;
}
.timeline__item::after{
  content: "";
  clear: both;
  display: table;
}
.timeline__item:nth-child(2n) .timeline__item__content {
  float: right;
}
.timeline__item:nth-child(2n) .timeline__item__content::before {
  content: '';
  right: 40%;
}
@media (min-width: 800px){
  .timeline__item:nth-child(2n) .timeline__item__content::before{
    left: inherit;
  }
}
.timeline__item:nth-child(2n) .timeline__item__content__date {
  background-color: rgb(248, 158, 28);
}
.timeline__item:nth-child(2n) .timeline__item__content__description {
  color: rgb(77, 77, 77);
}
.timeline__item:last-child {
  margin-bottom: 0;
}
.timeline__item-bg {
  -webkit-transition: all 1s ease-out;
  transition: all 1s ease-out;
  color: rgb(77, 77, 77);
}
.timeline__item-bg:nth-child(2n) .timeline__item__station {
  background-color: rgb(77, 77, 77);
}
.timeline__item-bg:nth-child(2n) .timeline__item__content {
  background-color: rgb(248, 158, 28);
}
.timeline__item-bg:nth-child(2n) .timeline__item__content::before {
  background-color: rgb(77, 77, 77);
}
.timeline__item-bg:nth-child(2n) .timeline__item__content__description {
  color: #fff;
}
.timeline__item-bg .timeline__item__station {
  background-color:  rgb(77, 77, 77);
}
.timeline__item-bg .timeline__item__content {
  background-color: rgb(248, 158, 28);
}
.timeline__item-bg .timeline__item__content::before {
  background-color: rgb(77, 77, 77);
}
.timeline__item-bg .timeline__item__content__description {
  color: #fff;
}
.timeline__item__station {
  background-color: rgb(248, 158, 28);
  width: 40px;
  height: 40px;
  position: absolute;
  border-radius: 50%;
  padding: 10px;
  top: 0;
  left: 10%;
  margin-left: -33px;
  border: 4px solid rgb(77, 77, 77);
  -webkit-transition: all .3s ease-out;
  transition: all .3s ease-out;
}
@media (min-width: 800px){
  .timeline__item__station{
    left: 50%;
    margin-left: -30px;
    width: 60px;
    height: 60px;
    padding: 15px;
    border-width: 6px;
  }
}
.timeline__item__content {
  width: 80%;
  background: #fff;
  border: 4px solid rgb(77, 77, 77);
  padding: 20px 30px;
  border-radius: 6px;
  float: right;
  -webkit-transition: all .3s ease-out;
  transition: all .3s ease-out;
}
@media (min-width: 800px){
  .timeline__item__content{
    width: 40%;
    float: inherit;
    padding: 30px 40px;
  }
}
.timeline__item__content::before {
  content: '';
  position: absolute;
  left: 10%;
  background: rgb(77, 77, 77);
  top: 20px;
  width: 10%;
  height: 4px;
  z-index: -1;
  -webkit-transition: all .3s ease-out;
  transition: all .3s ease-out;
}
@media (min-width: 800px){
  .timeline__item__content::before{
    left: 40%;
    top: 30px;
    height: 4px;
    margin-top: -2px;
  }
}
.timeline__item__content__date {
  margin: 0;
  padding: 8px 12px;
  font-size: 18px;
  margin-bottom: 10px;
  background-color: rgb(248, 158, 28);
  color: rgb(77,77,77);
  display: inline-block;
  border-radius: 4px;
  border: 2px solid rgb(77, 77, 77);
}
.timeline__item__content__description {
  margin: 0;
  padding: 0;
  font-size: 18px;
  line-height: 24px;
  font-weight: 300;
  color: rgb(77, 77, 77);
}
@media (min-width: 800px){
  .timeline__item__content__description{
    font-size: 19px;
    line-height: 28px;
  }
}

#about-us-text{
  color: #999999;
  margin-top: 340px;
  margin-left: 135px;
  font-size: 16px;
  letter-spacing: 1px;
  width: 700px;
  text-align: center;
  line-height: 31px;
   z-index: 3;
  position: absolute;
}

#footer-back{
  width: 100%;
  height: 350px;
  position: absolute;
    -webkit-box-shadow: inset 0px 35px 104px -33px rgba(0, 0, 0, 0.36);
  -moz-box-shadow: inset 0px 35px 104px -33px rgba(0, 0, 0, 0.36);
  box-shadow: inset 0px 35px 104px -33px rgba(0, 0, 0, 0.9);
  background: rgb(69, 69, 69);
  margin-top: 4233px;
  z-index: -1;
}

#footer-back2 {
  width: 100%;
  margin-top: 4583px;
  height: 60px;
  background: rgb(46, 46, 46);
  position: absolute;
  z-index: -1;
}

#logo-bottom{
  z-index: 99;
}

#logo-bottom img {
  position: absolute;
  margin-top: -340px;
  width: 80px;
  margin-left: -1px;
  z-index: 99;
  height: 80px;
}

#cpyright-txt{
  position: absolute;
  margin-top: -044px;
  font-size: 13px;
  font-weight: 400;
  color: rgb(218, 218, 218);
}

#footer-menu{
    position: absolute;
  margin-top: -352px;
  margin-left: 150px;
}

#footer-menu2{
  font-size: 14px;
  margin-left: 0px;
  color: rgb(228,228,228);
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 600;
  font-family: 'Montserrat', sans-serif;
}

#footer-menu3{
  position: absolute;
  font-size: 12px;
  margin-top: -352px;
  margin-left: 0px;
  width: 200px;
  color: rgb(130,130,130);
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 400;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
}

#footer-menu3 a:hover{
  color: #fcc71f;
}

#footer-menub{
  position: absolute;
  margin-top: -352px;
  margin-left: 335px;
}

#footer-menu2b{
  font-size: 14px;
  margin-left: 0px;
  color: rgb(228,228,228);
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 600;
  font-family: 'Montserrat', sans-serif;
}

#footer-menu3b{
    font-size: 12px;
  margin-left: 0px;
  color: rgb(130,130,130);
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 400;
  line-height: 30px;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
}

#footer-menu3b a{
  font-size: 12px;
  margin-left: 0px;
  color: rgb(130,130,130);
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 400;
  line-height: 30px;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
}

#footer-menu3b a:hover{
  color: #fcc71f;
}
#footer-menu3{
  font-size: 12px;
  margin-top: 6px;
  margin-left: 0px;
  width: 200px;
  color: rgb(130,130,130);
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 400;
  text-decoration: none;
  font-family: 'Montserrat', sans-serif;
}

#footer-menu3 a:hover{
  color: #fcc71f;
}

#right-border-grey{
  position: absolute;
  width: 500px;
  height: 296px;
  margin-left: -4px;
  margin-top: -700px;
  border-right: 4px solid rgb(77, 77, 77);
}
    </style>
<div id="main-background-image"></div>
<div id="address-bar"></div>
<div id="menu-bar"></div>
<div id="page-name-bar"></div>
<div id="footer-back"></div>
<div id="footer-back2"></div>


<div id="main-wrap">
  
  <a href="#"><i class="fa fa-facebook-square"></i></a>
  <a href="#"><i class="fa fa-twitter-square"></i></a>
  <div id="phone-sec">
   <i class="fa fa-phone"></i>
    <i class="fa fa-home"></i>
    <i class="fa fa-clock-o"></i>
    <div id="large-p">9861906534</div>
    <div id="large-p2">Biratnagar-3, DDC</div>
    <div id="large-p3">Sunday - Saturday</div>
    
    
    <div id="small-p">sampadaregmi90@gmail.com</div>
    <div id="small-p2">Biratnagar-3, DDC</div>
    <div id="small-p3">Saturday CLOSED</div>  
  </div>  
  <!--<a href="#"><i class="fa fa-youtube-square"></i></a>-->
  
  <div id="menu-bar2"></div>
  <div id="logo"><img src="{{ asset('images/logo.png') }}"/></div>
  <div id="nav-one">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about">About Us</a></li>
    </ul>
  </div>
  <div id="about-us-text">"Welcome to our fragrance haven! We're your ultimate destination for all things perfume. From captivating scents to luxurious fragrances, we have everything you need to enhance your personal style and elevate your senses.

But that's not all - we also offer an exclusive collection of signature scents waiting for you to discover. Whether you're seeking a new olfactory experience to indulge in or wishing to find the perfect gift, our expert team is here to assist you every step of the way.

At our fragrance haven, we believe in the power of scent to inspire and uplift. We're dedicated to helping you find your ideal fragrance and create unforgettable memories. Visit us today and explore the world of perfumery!"</div>
   
  
  <div id="page-name-bar-heading">
    
    <p id="p-n-b-h">About Us</p>
    <p id="p-n-b-h2">A LITTLE SOMETHING ABOUT US</p>
    <p id="p-n-b-h3">Here is the overview of our services.</p>
      
  </div>
  
  <section class="timeline">
  <div class="wrapper">
    <div class="timeline__item timeline__item--0">
      <div class="timeline__item__station"></div>
      <div class="timeline__item__content">
        <p class="timeline__item__content__description">Our perfume store offers a wide variety of pet products that cater to all your needs. From edps, edts and body spray supplies, we have everything you need to stay happy and healthy. We can help you get the right products for youand we ensure that all the products we offer are of the highest quality.

</p>
      </div>
    </div>
    <div class="timeline__item timeline__item--1">
      <div class="timeline__item__station"></div>
      <div class="timeline__item__content">
        <p class="timeline__item__content__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aliquam voluptatem quod ratione perspiciatis nemo repellat, saepe iste quia sint enim necessitatibus quo, sit at porro dicta magni laborum velit.</p>
      </div>
    </div>
    <div class="timeline__item timeline__item--2">
      <div class="timeline__item__station"></div>
      <div class="timeline__item__content">
        <p class="timeline__item__content__description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum magnam, asperiores explicabo aspernatur, autem repudiandae est sint deserunt nemo voluptas officia quam ut quasi aliquam nam possimus unde repellendus aut.</p>
      </div>
    </div>
    <div class="timeline__item timeline__item--3">
      <div class="timeline__item__station"></div>
      <div class="timeline__item__content">
        <p class="timeline__item__content__description">We value our customers' feedback and suggestions. Therefore, we encourage our customers to connect with us via social media platforms such as Facebook, Instagram, and Twitter. We regularly update our social media pages with tips, product launches, and adoption events. We also use social media to engage with our customers and answer any questions they may have.</p>
      </div>
 
</section>

<div id="logo-bottom">
    <img src="{{ asset('images/logo.png') }}" alt="My Logo">
</div>

<div id="cpyright-txt"><p>Copyright @ 2023 Perfume House. All Rights Reserved. </p></div>


<div id="footer-menub">

  <p id="footer-menu2b">Contact</p>
  
  <p id="footer-menu3b">
  

    Biratnagar,Nepal<br>
    +977 9841861580</a><br>
    sampadaregmi90@gmail.com</a><br>
    
  </p>
</div>

<div id="footer-menu">

  <p id="footer-menu2">Navigation</p>
  
  <p id="footer-menu3b">
    <a href="/">- Home</a><br>
    <a href="/about">- About Us</a><br>
    <!-- <a href="">- Contact Us</a><br>
    <a href="">- Products</a><br>
    <a href="">- Adoption</a><br> -->
 
  </p>
</div>  
<div id="right-border-grey"></div> 
</div>
