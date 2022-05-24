<!-- <footer class="footer buttom-footer">
    <p>©2020 Cactus's Shop. All Rights Reserved</p>
    <nuxt-link to="www.facebook.com"
      ><span
        ><img
          src="https://i.imgur.com/PpXsPqR.png"
          class="footer-fb-link" /></span
    ></nuxt-link>
  </footer> -->

<div id="footer">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-3 col-md-6">
                <h4 class="mb-3">หน้าต่างๆ</h4>
                <ul class="list-unstyled">
                    <li><a href="text.html">About us</a></li>
                    <li><a href="text.html">Terms and conditions</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.html">ติดต่อเรา</a></li>
                </ul>
                <hr />
                <h4 class="mb-3">ส่วนผู้ใช้</h4>
                <ul class="list-unstyled">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </div> -->
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-3">บทความ</h4>
                <h5>พันธุ์เมลอน</h5>
                <ul class="list-unstyled">
                    <li><a href="category">ไข่ทองคำ</a></li>
                    <li><a href="category">กรีนเนต</a></li>
                    <li><a href="category">อินทนนท์</a></li>
                    <li><a href="category">ฮามิกัว</a></li>
                </ul>
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">
                <h4 class="mb-3">ที่อยู่</h4>
                <p>

                    <strong>มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี ศูนย์รังสิต.</strong><br /> ตำบล ประชาธิปัตย์<br />
                    อำเภอธัญบุรี ปทุมธานี 12130<br /> <br /><br /><strong></strong>
                </p>
                <!-- <a href="contact.html">Go to contact page</a> -->
                <hr class="d-block d-md-none" />
            </div>
            <!-- /.col-lg-3-->
            <div class="col-lg-3 col-md-6">



            </div>
            <div class="col-lg-3 col-md-6">

                <hr />
                <h4 class="mb-3">ช่องทางการติดตาม</h4>
                <p class="social">
                    <a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#" class="email external"><i class="fa fa-envelope"></i></a>
                </p>

                <hr />

            </div>
            <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
    </div>
    <!-- /.container-->

    <!-- /#footer-->
    <!-- *** FOOTER END ***-->

    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col mb-2 mb-lg-0">
                    <p class="text-center text-lg-center">©2021 RMUTT@RANGSIT.</p>
                </div>
                <!-- <div class="col-lg-6">
            <p class="text-center text-lg-right">
              Template design by
              <a href="https://bootstrapious.com/">Bootstrapious</a> 
            </p> -->

                <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks! -->
            </div>
        </div>
    </div>
</div>
<!-- *** COPYRIGHT END ***-->


<style scoped>
    a {
        color: black;

        text-decoration: none;
        position: relative;
    }

    a:hover {
        color: #3aa18c;
        transition: all 0.3s;
    }

    #footer {
        box-shadow: 2px 2px 5px rgb(0 0 0 / 40%);
        background: linear-gradient(275deg, rgba(137, 181, 175, 1) 0%, rgba(150, 199, 193, 1) 26%, rgba(208, 202, 178, 1) 97%);
        padding: 50px 0;
        margin-top: 30px;
        position: relative;
        left: 0;
        bottom: 0;
        width: 100%;


    }

    #footer ul {
        padding-left: 0;
        list-style: none;
    }

    #footer ul a {
        /* color: #999; */
        color: black;
    }

    #footer ul a:hover {
        text-shadow: 0 0 2px #a6adac;
        color: rgb(93, 87, 87);
        transition: all 0.3s;
    }

    #footer .social {
        text-align: left;
    }

    #footer .social a {
        margin: 0 10px 0 0;
        color: #fff;
        display: inline-block;
        width: 30px;
        height: 30px;
        border-radius: 15px;
        line-height: 26px;
        font-size: 15px;
        text-align: center;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        vertical-align: bottom;
        background-color: #555;
    }

    #footer .social a i {
        vertical-align: bottom;
        line-height: 30px;
    }

    #footer .social a.facebook:hover {
        background-color: #4460ae;
    }

    #footer .social a.gplus:hover {
        background-color: #c21f25;
    }

    #footer .social a.twitter:hover {
        background-color: #3cf;
    }

    #footer .social a.instagram:hover {
        background-color: #cd4378;
    }

    #footer .social a.email:hover {
        background-color: #4a7f45;
    }

    /*
*
* ======================================================================
* COPYRIGHTS
* ======================================================================
*
*/
    #copyright {
        background: #333;
        color: #ccc;
        padding: 20px 0;
        font-size: 0.738rem;
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;

    }

    #copyright p {
        margin: 0;
    }
</style>