
<?php $__env->startSection('content'); ?>
<?php
    $splitdate = explode(" ", $qr[0]->created_at);
?>
<body>
    <div class="container">
        <div class="card-container">
            <input type="radio" name="melons-btn" id="melon-1" checked>
            <input type="radio" name="melons-btn" id="melon-2">
            <div class="melon-area">
                <div class="logo-div">
                    <img src="<?php echo e(asset('assets/img/logo/rmutt-logo.png')); ?>" alt="rmutt-logo">
                </div>
                <div class="floating-div">
                    <?php if($head[0]->species == "ฮามิกัว"): ?>
                    <div class="melon-1"><img src="<?php echo e(asset('assets/img/melon/hamigua1.jpg')); ?>" style="border-radius: 30px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%)" alt="melon-1"></div>
                    <div class="melon-2"><img src="<?php echo e(asset('assets/img/melon/hamigua2.jpg')); ?>" style="border-radius: 30px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%)" alt="melon-2"></div>
                    <?php endif; ?>
                    <?php if($head[0]->species == "ไข่ทองคำ"): ?>
                    <div class="melon-1"><img src="<?php echo e(asset('assets/img/melon/kaitongkum1.jpg')); ?>" style="border-radius: 30px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%)" alt="melon-1"></div>
                    <div class="melon-2"><img src="<?php echo e(asset('assets/img/melon/kaitongkum2.jpg')); ?>" style="border-radius: 30px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%)" alt="melon-2"></div>
                    <?php endif; ?>
                    <?php if($head[0]->species == "กรีนเน็ต"): ?>
                    <div class="melon-1"><img src="<?php echo e(asset('assets/img/melon/green_net_melon1.jpg')); ?>" style="border-radius: 30px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%)" alt="melon-1"></div>
                    <div class="melon-2"><img src="<?php echo e(asset('assets/img/melon/green_net_melon2.jpg')); ?>" style="border-radius: 30px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%)" alt="melon-2"></div>
                    <?php endif; ?>
                    <?php if($head[0]->species == "อินทนนท์"): ?>
                    <div class="melon-1"><img src="<?php echo e(asset('assets/img/melon/inthanon1.jpg')); ?>" style="border-radius: 30px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%)" alt="melon-1"></div>
                    <div class="melon-2"><img src="<?php echo e(asset('assets/img/melon/inthanon2.jpg')); ?>" style="border-radius: 30px;box-shadow:2px 2px 5px rgb(0 0 0 / 40%)" alt="melon-2"></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="text-area">
                <div class="heading-area">
                    <h2><?php echo e($head[0]->species); ?></h2>
                    <h4>รายละเอียดเมลอน</h4>
                </div>

                <div class="paragraph-area">

                    <div class="show-id-detail">
                        <p>แปลง : <?php echo e($head[0]->projectname); ?></p>
                    </div>
                    <div class="show-startdate-detail">
                        <p>เริ่มปลูกวันที่ : <?php echo e($head[0]->dateproject); ?></p>
                    </div>
                    <div class="show-width-detail">
                        <p>ความกว้างผล : <?php echo e($qr[0]->widthofyield); ?> เซนติเมตร.</p>
                    </div>
                    <div class="show-sweet-detail">
                        <p>ค่าความหวาน : <?php echo e($qr[0]->Brix); ?> บริกซ์</p>
                    </div>
                    <div class="show-sweet-detail">
                        <p>น้ำหนักผล : <?php echo e($qr[0]->weight); ?> กิโลกรัม</p>
                    </div>
                    <div class="show-enddate-detail">
                        <p>เก็บเกี่ยววันที่ : <?php echo e($splitdate[0]); ?></p>
                    </div>
                    <div class="show-location-detail">
                        <h6>สถานที่ปลูก : <br>
                            มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี ศูนย์-รังสิต คณะเทคโนโลยีการเกษตร สาขา การผลิตพืช</h6>
                    </div>
                </div>

                <div class=" picture-selection">
                    <div class="h5-text">
                        <h5>ภาพตัวอย่าง : </h5>
                    </div>

                    <div class="picture-pick-div">
                        <label for="melon-1" class="melons color-1">
                            <div class="select-picture">
                                <p>1</p>
                            </div>
                        </label>
                        <label for="melon-2" class="melons color-2">
                            <div class="select-picture">
                                <p>2</p>
                            </div>

                        </label>

                    </div>
                </div>
                <div class="detail-and-visit-btn">
                    <h2 class="picture-1">ลักษณะผลเมลอน</h2>
                    <h2 class="picture-2">ลักษณะผลด้านในเมลอน</h2>
                </div>
                <!-- <div class="detail-and-visit-btn">
                    <a href="/">
                        <button class="visit-btn">
                            เข้าสู่เว็บไซต์
                        </button>
                    </a>
                </div> -->
            </div>
        </div>
    </div>

</body>
<style>
    @import  url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
        padding: 0;
        margin: 0;
    }

    :root {
        font-family: "Poppins";
        --primary-color-1: hsl(348, 68%, 34%);
        --primary-color-2: hsl(20, 94%, 34%);
        --primary-color-3: hsl(232, 16%, 34%);
        --primary-color-4: hsl(0, 0%, 25%);
        --text-area-color: whitesmoke;
        --heading-secondary-color: hsl(0, 0%, 55%);
        --secondary-card-color: whitesmoke;
    }

    html {
        width: 100%;
        height: 100%;
    }

    body {
        /* background-color: skyblue; */
    }

    input {
        display: none;
    }

    .container {
        margin: 0 auto;
        /* background-color: green; */
        max-width: 60rem;
        min-height: 30rem;
        padding: 3rem;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;

    }

    /* underline in paragraph-area */
    .underline {
        border-top: 2px solid red;
        width: 10rem;

    }

    .card-container {
        display: flex;
        flex-direction: row;
        /* background-color: wheat; */
        box-sizing: border-box;
        box-shadow: 0px 0px 10px 0px rgb(145, 145, 145);
        border-radius: 0.8rem;
    }

    .melon-area {
        width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        transition: background-color 0.3s ease-in-out;
        border-radius: 0.8rem 0 0 0.8rem
    }

    .logo-div {
        margin: 2rem 0 0 1.5rem;
        position: absolute;
        opacity: 1;
        top: 0;
        left: 0;
        width: 100%;
        /* background-color: yellowgreen; */
    }

    .logo-div img {
        transform: rotateZ(0) scale(0.5) translateY(-63.5%) translateX(-45.5%);
        width: 37%;
        opacity: 0.2;
    }

    .floating-div {
        /* background-color: yellowgreen; */
        height: 100%;
        width: 100%;
        display: grid;
        place-items: center;
        align-items: center;
        animation: float 6s ease-in-out infinite;
        box-sizing: border-box;
    }

    @keyframes  float {
        0% {
            transform: translateY(0%);
        }

        50% {
            transform: translateY(-6%);
        }

        100% {
            transform: translateY(0%);
        }
    }

    .melon-area :is(.melon-1, .melon-2, ) {
        /* background-color: yellow; */
        position: absolute;
        width: 100%;
        transform: rotateZ(-30deg) scale(1.3) translateX(-10%);
        transition: transform 0.3s ease-in-out, opacity 0.2s ease-in-out;
    }





    :is(.melon-1, .melon-2) img {
        width: 100%;
        opacity: 0;
        transform: rotateZ(-17deg) scale(0.9) translateX(-10%) translateY(2%);
        transition: transform 0.3s ease-in-out, opacity 0.2s ease-in-out;
    }


    /*  ============= 
            Text styling 
                    ========== */

    .text-area {
        background-color: var(--text-area-color);
        /* background-color: rgb(114, 91, 114); */
        width: 50%;
        display: flex;
        flex-direction: column;
        padding: 1rem;
        border-radius: 0 0.8rem 0.8rem 0
    }

    .text-area .heading-area {
        padding: 1rem;
    }

    .heading-area h2 {
        font-weight: 800;
        font-size: 2.5rem;
        transition: color 0.3s ease-in-out;
    }

    .heading-area h4 {
        margin: 0.25rem 0 0 0;
    }

    .paragraph-area {
        margin: 1.5rem 1rem 1.5rem 5rem;
        /* background-color: yellow; */
        font-size: 1rem;
    }



    /*  ============= 
            Available colors
                    ========== */

    .picture-selection {
        margin: 1rem 1rem 1.5rem 5rem;
        display: flex;
        flex-direction: row;
        align-items: center;
        column-gap: 0.8rem;
        box-sizing: border-box;
        /* background-color: wheat; */

    }

    .picture-selection h5 {
        font-size: 1rem;
    }

    .picture-selection .melons {
        padding: 1rem;
        border-radius: 50%;
        cursor: pointer;
    }

    .picture-pick-div {
        display: flex;
        flex-direction: row;
        align-items: center;
        column-gap: 0.8rem;
    }

    .picture-selection .color-1 {
        background-color: var(--primary-color-1);
    }

    .picture-selection .color-2 {
        background-color: var(--primary-color-2);
    }

    .picture-selection .color-3 {
        background-color: var(--primary-color-3);
    }

    .picture-selection .color-4 {
        background-color: var(--primary-color-4);
    }


    /*  ============= 
            detail-and-visit-btn styling
                             ========== */

    .detail-and-visit-btn {
        display: flex;
        justify-content: center;
        /* padding: 1.5rem 1rem; */

    }

    .detail-and-visit-btn :is(.picture-1, .picture-2) {
        display: none;
        font-weight: 800;
        margin-top: 1rem;
        font-size: 1.5rem;
        transition: color 0.3s ease-in-out;
    }

    .visit-btn {
        padding: 1em 1.5em;
        font-size: 1.2rem;
        border-radius: 2rem;
        border: none;
        color: whitesmoke;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    /* ========== Themes ======== */

    /* Theme 1 */
    #melon-1:checked~.text-area .picture-selection .picture-pick-div .color-1 {
        outline: 2px solid var(--primary-color-1);
        outline-offset: 2px;
    }

    #melon-1:checked~.melon-area {
        background-color: var(--primary-color-1);
    }


    #melon-1:checked~.text-area .heading-area h2 {
        color: var(--primary-color-1)
    }

    #melon-1:checked~.text-area .detail-and-visit-btn .picture-1 {
        display: block;
        color: var(--primary-color-1);
    }

    #melon-1:checked~* .visit-btn {
        background-color: var(--primary-color-1);
    }

    /* Theme 2 */
    #melon-2:checked~.text-area .picture-selection .picture-pick-div .color-2 {
        outline: 2px solid var(--primary-color-2);
        outline-offset: 2px;
    }

    #melon-2:checked~.melon-area {
        background-color: var(--primary-color-2);
    }


    #melon-2:checked~.text-area .heading-area h2 {
        color: var(--primary-color-2)
    }

    #melon-2:checked~.text-area .detail-and-visit-btn .picture-2 {
        display: block;
        color: var(--primary-color-2);
    }

    #melon-2:checked~* .visit-btn {
        background-color: var(--primary-color-2);
    }



    /* Transition when the screen is higher than 1000px */

    @media  screen and (min-width: 62.5rem) {

        #melon-1:checked~.melon-area .floating-div .melon-1 {
            transition-delay: 0.2s;
            animation-delay: 0.3s;
            transform: rotateZ(0);
            z-index: 99;
        }

        #melon-1:checked~.melon-area .floating-div .melon-1 img {
            transition-delay: 0.2s;
            opacity: 1;
        }


        /* Theme 2 */
        #melon-2:checked~.melon-area .floating-div .melon-2 {
            transition-delay: 0.2s;
            transform: rotateZ(0);
            z-index: 99;
        }

        #melon-2:checked~.melon-area .floating-div .melon-2 img {
            transition-delay: 0.2s;
            opacity: 1;
        }


    }





    @media  screen and (max-width: 62.5rem) {
        .container {
            padding: 1rem;
        }

        .card-container {
            display: flex;
            flex-direction: column;
        }

        .melon-area {
            width: 100%;
            height: 80vw;
            padding: 1rem 0;
            border-radius: 0.8rem 0.8rem 0 0;
        }

        .melon-area :is(.melon-1, .melon-2) {
            /* background-color: yellow; */
            position: absolute;
            transition: transform 0.3s ease-in-out, opacity 0.2s ease-in-out;

        }

        /* Transition for any screen lower than 1000px */

        .melon-area :is(.melon-1, .melon-2) {
            /* background-color: yellow; */
            transform: rotateZ(0deg) translateY(-10%);
            width: 70%;
            margin: 1rem 0;
            opacity: 0;
        }

        :is(.melon-1, .melon-2) img {
            transform: rotateZ(0) scale(0.8);
            opacity: 1;
        }

        #melon-1:checked~.melon-area .floating-div .melon-1 {
            transition-delay: 0.2s;
            opacity: 1;
            transform: rotateZ(0);
        }

        #melon-1:checked~.melon-area .floating-div .melon-1 img {
            transition-delay: 0.2s;
            opacity: 1;
        }


        /* Theme 2 */
        #melon-2:checked~.melon-area .floating-div .melon-2 {
            transition-delay: 0.2s;
            opacity: 1;
            transform: rotateZ(0);

        }

        #melon-2:checked~.melon-area .floating-div .melon-2 img {
            transition-delay: 0.2s;
            opacity: 1;
        }



        /* Transition end */

        .logo-div img {
            transform: rotateZ(0) scale(0.5) translateY(-61.5%) translateX(-47.5%);
            width: 25%;
            opacity: 0.2;

        }

        .text-area {
            /* background-color: rgb(114, 91, 114); */
            width: 100%;
            display: flex;
            flex-direction: column;
            padding: 1rem;
            box-sizing: border-box;
            border-radius: 0 0 0.8rem 0.8rem
        }

        .paragraph-area,
        .picture-selection {
            margin: 1.5rem 1rem;
        }
    }

    /* ====== Phone Size ===== */
    @media  screen and (max-width: 26.9rem) {

        .paragraph-area {
            margin: 1rem;
            font-size: 0.8rem;
        }

        .paragraph-area,
        .picture-selection {
            margin: 0.7rem 1rem;

        }

        .picture-selection {
            display: flex;
            flex-direction: column;
            align-items: unset;
            row-gap: 0.8rem;
            ;
        }

        .detail-and-visit-btn {
            padding: 0.5rem 1rem;
            flex-direction: column;
            row-gap: 0.8rem;
            align-items: flex-start;
        }
    }

    .select-picture p {
        font-size: 1rem;
        margin: -13px;
        text-align: center;
        font-weight: 600;
        color: white;
    }
</style>

</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.qrcode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/MelonNew/resources/views/QRcode/greennet.blade.php ENDPATH**/ ?>