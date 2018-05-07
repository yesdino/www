<!DOCTYPE html>
<html>
<head>
<title>梅县同乡会</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.7/dist/css/bootstrap.min.css"> 
<!-- <script type="text/javascript" src="lib/bootstrap-3.3.7/docs/assets/js/vendor/jquery.min.js"></script> --> <!-- 引用jQuery -->
<!-- <script type="text/javascript" src="lib/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script> -->
<!-- 导航引用 -->
<script type="text/javascript" src="common/nav.js"></script>
<script type="text/javascript" src="common/return_top.js"></script>

<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body style="position: relative;">
<!-- 乡会简介 乡会动态 -->
<div class="fir_display">
  <!-- 乡会简介 -->
  <div id="left" class="block" id="left">
    <a href="message.php">
      <img src="img/icon1.png">
      <img src="img/char_intro.png">
    </a>
    <p>
      梅县同乡会成立于2008年，今年是第7届。同乡会的浓浓乡情如梅江河水般流淌不息，清灵秀气。本着同乡会为同乡服务的原则，沿着先辈的足迹，我们一直在奋斗！
    </p>
    <p>
      乡会致力于为老乡们提供加深交流，增进认识，联络感情，互助互利的平台以及方便各位同乡来回学校的乡车服务，让远离家乡的莘莘学子减轻离家的孤独感，浓浓乡音，暖暖乡情，真诚关怀，无私帮助，让老乡们倍感亲切，顺利成长。让我们乡会的每一个成员携手努力，继承优秀传统，开创美好明天！
    </p>
  </div>
  <!-- 乡会动态 -->
  <div id="right" class="block" id="right">
    <a href="affiche.php">
      <img src="img/icon1.png">
      <img src="img/char_state.png">
    </a>
    <div class="affiche">   
      <?php
        require_once("dispose/mysql_connect.php"); 
        $query = "select * from affiche order by id desc limit 0,6";
        $result = $pdo ->prepare($query);
        $result ->execute();
        while ($res=$result->fetch(PDO::FETCH_ASSOC)) {
      ?> 
        <p class="test">
          <a href="affiche_detail.php?id=<?php echo $res["id"];?>" class="ind_title"><img src="img/icon4.png"><?php echo $res['title'] ;?></a>  
          <span><?php echo $res['time'] ;?></span></br>
          <a class="ind_content"><?php echo $res['short_content'] ;?></a>
        </p>
      
    <?php
      }
    ?>

    </div>
  </div>
</div>
<!-- 精彩活动 -->
<div class="sec_display">
  <a href="" style="margin-left: 15px;font-size: 15px;font-weight: bold;" >精彩活动>></a>
  <!-- 灰色框部分 -->
  <div class="container" style="width: 100%;height: 100%;">
    <div class="row" >   <!-- 行 -->
      <div class="col-md-4"">  <!-- 列 -->
        <div class="min_container">
          <span>Travel</span>
          <img class="min_img" src="img/img1.jpg">
          <div style="">
            <p><img src="img/icon5.png">每当节假日到来，乡会都会组织乡友们到学校的各个地方去旅游。不仅能增加乡友间的感情，还能带你见识湛江各地的旅游胜地、风土人情，是为一大乐事。</p>
           
          </div>
        </div>
      </div>    
      <div class="col-md-4"">
        <div class="min_container">
          <span>Activities</span>
          <img class="min_img" src="img/img2.jpg">
          <div style="">
            <p><img src="img/icon5.png">乡会在每学年都会组织大大小小的活动。例如一大迎新，家假日送温暖等活动。让远离家乡的我们感受到浓浓的乡情。在离家九百多公里的远方倍感温暖。</p>
          </div>
        </div>
      </div>
      <div class="col-md-4"">
        <div class="min_container">
          <span>Compititions</span>
          <img class="min_img" src="img/img3.jpg">
          <div>
            <p><img src="img/icon5.png">乡会每个学年都会举办篮球赛、足球赛。与梅州的所有乡会共同竞技，争取属于梅县同乡会的一份荣誉。</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 页脚 -->
<script type="text/javascript" src="common/footer.js"></script>


</body>
</html>
