<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>운동 방법 : 벤치 프레스</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../html/assets/css/style.css">
    <!-- SCRIPT -->
    <script defer src="../assets/js/common.js"></script>
</head>
<body>
    <div id="wrap">
        <?php include "../include/skip.php"; ?>
        <!-- //SKIP -->
        <?php include "../include/header.php"; ?>
        <!-- //header -->

        <div class="slider__wrap">
            <div class="slider__img">
                <div class="slider">
                    <img src="../html/assets/img/slider_01.png" class="img__logo">
                </div>
            </div>
        </div>
        <!-- banner -->

        <div class="container">
            <div class="kind__section">                
                <h3><a href="../main/mainSection.php#chest">가슴 운동</a></h3>
                <h4>벤치 프레스</h4>
                <p>가슴 전체를 강화하는 데 가장 일반적으로 사용되는 운동 중 하나입니다.</p>
                <div class="kind">
                    <ul>
                        <li>1. 바벨을 적당한 무게로 세팅합니다. 바벨은 다리로 끌어올려 허리 위쪽에 위치하도록 하고, 손으로 벤치에 대고 바벨이 떨어지지 않도록 잡습니다.</li>
                        <li>2. 벤치 위에 누워 바벨을 잡습니다. 손바닥은 약지 이상의 손가락으로 묶고, 엄지는 바벨 아래에 위치시킵니다.</li>
                        <li>3. 바벨을 천천히 내리면서 가슴 근육을 사용합니다. 팔꿈치는 약간 몸쪽으로 모아서 내려야 합니다. 가슴 근육이 힘을 내어 바벨이 흔들리는 것을 막아줍니다.</li>
                        <li>4. 바벨이 가슴 근육과 수평선 정도까지 내려왔을 때, 바벨을 다시 밀어올립니다. 이때 팔꿈치를 완전히 펴지 않고, 살짝 구부리도록 합니다.</li>
                        <li>5. 바벨을 올리고 내릴 때 숨을 쉬어야 합니다. 바벨을 내릴 때는 숨을 들이마시고, 바벨을 올릴 때는 숨을 내쉬도록 합니다.</li>
                        <li>6. 세트 수와 반복 횟수는 자신의 체력과 목표에 맞게 조절합니다. 보통 3-4 세트를 하고, 각 세트마다 6-12 회 정도를 하는 것이 일반적입니다.</li>
                    </ul>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/0DsXTSHo3lU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <div class="part">벤치 프레스 자극 부위</div>
                <figure>
                    <img src="../html/assets/img/benchpressimg-min.png" alt="벤치 프레스">
                </figure>
            </div>            
        </div>
        <!-- container -->
        
        <?php include "../include/blogArticle.php"; ?>

        <?php include "../include/footer.php"; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>    
        const btnMenu = document.querySelector(".btn__menu");
        const btnClose = document.querySelector("#nav button");

        // 사이드 메뉴
        btnMenu.addEventListener("click", () => {
            document.querySelector("#nav").style.transform = "translateX(0%)";
        })
        btnClose.addEventListener("click", () => {
            document.querySelector("#nav").style.transform = "translateX(100%)";
        })

        // 호버 효과
        const card = document.querySelectorAll('.card');
        card.forEach(card => {
            const btn = card.querySelector('.more');
            btn.addEventListener('mouseover', () => {
                // card.querySelector('.card__body').style.backgroundColor = '#7d92b7';
                gsap.to(card, 0.5, {backgroundColor : '#7d92b7'})
            });
            btn.addEventListener('mouseout', () => {
                // card.querySelector('.card__body').style.backgroundColor = '#2D303D';
                gsap.to(card, 0.5, {backgroundColor : '#2F3A64'})
            });
        });
    </script>
</body>
</html>