<?php
/*
Template name: 交通アクセス
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
$locale = get_locale();
if ($locale === 'en_US') {
  $train = 'For guests coming by train';
  $train_osaka = '';
  $osaka_txt = '1-minute walk from Exit 6 of Kujo Station on the Osaka Metro Chuo Line';
  $train_hanshin = '';
  $hanshin_txt = '3 minutes walk from Exit 1 of Kujo Station on the Hanshin Railway Namba Line';
  $car = 'For guests coming by car';
  $cra_ul = '';
  $cra_txt01 = 'Hanshin Expressway: Just off the Kujo Exit on Route 16 Osaka-ko Line,';
  $cra_txt02 = 'Hanshin Expressway: 5 minutes from the Namiyoke Exit on Route 16 Osaka-ko Line';
  $cra_txt = 'The hotel does not have a parking lot. Please use coin-operated parking lot nearby.';
} elseif ($locale === 'ko_KR') {
  $train = '전철을 이용하실 분';
  $train_osaka = '';
  $osaka_txt = '오사카 메트로:중앙선 ⑥번 출구 도보 1분';
  $train_hanshin = '';
  $hanshin_txt = '한신 전철:난바선 구조 역 ①번 출구 도보 3분';
  $car = '차를 이용하시는 분';
  $cra_ul = '';
  $cra_txt01 = '한신 고속:16호 오사카 항선 [구조] 출구에서 바로 ';
  $cra_txt02 = '한신 고속:16호 오사카 항선 [나미요케] 출구에서 5분';
  $cra_txt = '저희 호텔은 주차장이 없습니다. 인근 코인 파킹을 이용해 주세요.';
} elseif ($locale === 'zh_CN') {
  $train = '给使用电车等公共交通的客人的信息';
  $train_osaka = '';
  $osaka_txt = '大阪地铁：中央线⑥号出口，步行1分钟';
  $train_hanshin = '';
  $hanshin_txt = '阪神电车：难波线九条站①号出口，步行3分钟';
  $car = '给自驾车的客人的信息';
  $cra_ul = '';
  $cra_txt01 = '阪神高速：16号大阪港线「九条」出口即达';
  $cra_txt02 = '阪神高速：16号大阪港线「波除」出口，约5分钟';
  $cra_txt = '本馆没有停车场，请使用附近的投币式停车场';
} elseif ($locale === 'zh_TW') {
  $train = '給使用電車等公共交通的客人的信息';
  $train_osaka = '';
  $osaka_txt = '大阪地鐵：中央線⑥號出口，步行1分鐘';
  $train_hanshin = '';
  $hanshin_txt = '阪神電車：難波線九條站①號出口，步行3分鐘';
  $car = '給自駕車的客人的信息';
  $cra_ul = '';
  $cra_txt01 = '阪神高速：16號大阪港線「九條」出口即達';
  $cra_txt02 = '阪神高速：16號大阪港線「波除」出口，約5分鐘';
  $cra_txt = '本館沒有停車場，請使用附近的投幣式停車場';
} else {
  $train = '電車のご利用をお考えのかたへ';
  $train_osaka = '大阪メトロをご利用の場合';
  $osaka_txt = '谷町線・千日前線「谷町九丁目」駅③番出口より徒歩1分';
  $train_hanshin = '近鉄線をご利用の場合';
  $hanshin_txt = '近鉄大阪線・難波線「大阪上本町駅」地下中央改札口より徒歩4分';
  $car = 'お車でのご利用の場合';
  $cra_ul = '阪神高速';
  $cra_txt01 = '阪神高速環状線<br>「高津」入り口まで1分<br>「道頓堀」出口より2分';
  $cra_txt = '※駐車場はございません。近隣のコインパーキングをご利用下さい。';
  $bus = 'バスをご利用の場合';
  $bus_ul = '大阪シティバス';
  $bus_txt01 = '「谷町九丁目」バス停より1分';
  $airplane = '飛行機ご利用のお客様';
  $airplane_ul_01 = '関西国際空港よりホテルまで50分';
  $airplane_ul_02 = '大阪空港（伊丹）よりホテルまで55分';
  $airplane_txt_01 = 'JR「関西空港」駅より「天王寺」駅（40分）にて乗り換え、大阪メトロ谷町線「天王寺」駅より「谷町九丁目」駅（3分）';
  $airplane_txt_02 = '大阪モノレール「大阪空港」駅より「蛍池」駅（3分）にて乗り換え、阪急宝塚線「蛍池」駅より「梅田」駅（15分）にて乗り換え、大阪メトロ谷町線「東梅田」駅より「谷町九丁目」駅（10分）';
  $shinkansen = '新幹線をご利用の場合';
  $shinkansen_ul = 'JR新大阪駅よりホテルまで25分';
  $shinkansen_txt = '大阪メトロ御堂筋線「新大阪」駅より「梅田」駅（5分）、大阪メトロ谷町線「東梅田」駅より「谷町九丁目」駅（10分）';
}
?>

<div class="kv" id="kv-access">
<div class="inner-kv">
</div>
</div>

<div class="wrap">
  <h3 class="ttl3"><span><?php echo $train; ?></span></h3>
  <div class="cars">
    <div>
      <h4><?php echo $train_osaka; ?></h4>
      <img src="<?php echo $wp_url; ?>/img/train.svg" alt="電車">
      <!-- <img src="<?php echo $wp_url; ?>/img/train01.png" alt="電車"> -->
      <p><?php echo $osaka_txt; ?></p>
    </div>
    <div>
      <h4><?php echo $train_hanshin; ?></h4>
      <img src="<?php echo $wp_url; ?>/img/train.svg" alt="電車">
      <!-- <img src="<?php echo $wp_url; ?>/img/train01.png" alt="電車"> -->
      <p><?php echo $hanshin_txt; ?></p>
    </div>
  </div>
</div>

<div class="wrap">
  <h3 class="ttl3"><span><?php echo $shinkansen; ?></span></h3>
  <div class="cars">
    <div>
      <h4><?php echo $shinkansen_ul; ?></h4>
      <img src="<?php echo $wp_url; ?>/img/shinkansen.svg" alt="新幹線">
      <p><?php echo $shinkansen_txt; ?></p>
    </div>
  </div>
</div>

<div class="flex w-70">
  <div class="wrap w-50">
    <h3 class="ttl3"><span><?php echo $bus; ?></span></h3>
    <div class="cars">
      <div>
        <h4><?php echo $bus_ul; ?></h4>
        <img src="<?php echo $wp_url; ?>/img/bus.svg" alt="バス">
        <p><?php echo $bus_txt01; ?></p>
      </div>
    </div>
  </div>
  <div class="wrap w-50">
    <h3 class="ttl3"><span><?php echo $car; ?></span></h3>
    <div class="cars">
      <div>
        <h4><?php echo $cra_ul; ?></h4>
        <img src="<?php echo $wp_url; ?>/img/car.svg" alt="車">
        <p><?php echo $cra_txt01; ?></p>
      </div>
    </div>
    <p class="txt-c"><?php echo $cra_txt; ?></p>
  </div>
</div>

<div class="wrap">
  <h3 class="ttl3"><span><?php echo $airplane; ?></span></h3>
  <div class="cars">
    <div>
      <h4><?php echo $airplane_ul_01; ?></h4>
      <img src="<?php echo $wp_url; ?>/img/airplane.svg" alt="飛行機">
      <p><?php echo $airplane_txt_01; ?></p>
    </div>
    <div>
      <h4><?php echo $airplane_ul_02; ?></h4>
      <img src="<?php echo $wp_url; ?>/img/airplane.svg" alt="飛行機">
      <p><?php echo $airplane_txt_02; ?></p>
    </div>
  </div>
</div>
<?php get_template_part('foot-link'); ?>
<?php get_footer();
