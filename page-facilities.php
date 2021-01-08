<?php
/*
Template name: 館内案内
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();
$locale = get_locale();
if ($locale === 'en_US') {
  $guide = 'FACILITIES';
  $guide_txt = 'Feel free to select items buffet-style from the amenity bar located at the front desk.<br>Check-in: 15:00-0:00 (midnight)*<br>Checkout: 10:00<br>* Staff are available at the front desk from 6:00 AM to midnight.<br>* After check-in, guests can use the guest-only door when exiting and entering the hotel.';
  $equipment = 'In-room Items';
  $equipment_txt = '<li>32-inch TV</li><li>Intercom</li><!-- <li>Microwave</li> --><li>Microwave</li><li>Large refrigerator</li><li>Combined washing machine and dryer</li><!--翻訳必要--><li>Electric kettle</li><li>Mug</li><li>Hair dryer</li><li>Hangers</li><li>Shoe horn</li><li>Induction hot plate</li><!--翻訳必要--><!-- <li>傘立て</li> -->';
  $amenity = 'Amenities';
  $amenity_txt = '<li>Shampoo</li><li>Conditioner</li><li>Body soap</li><!-- <li>歯ブラシ</li> --><li>Bath towel</li><li>Face towel</li><li>Slippers</li><li>Nightwear</li><li>Tooth brush</li><!--翻訳必要--><li>Others</li><!--翻訳必要-->';
  $service = 'Service';
  $service_txt = '<li>Parcel delivery service <br>(pay-on-delivery only)</li><!-- <li>※レンタルサイクル</li> --><li>※Concierge service</li><li>(Dry cleaning and storage, <br>luggage storage)</li>';
  $rental = 'Available<br>Items for Rent';
  $rental_txt = '<li>Mobile phone charger</li><li>Iron, ironing board</li><li>Nail clippers</li><li>Thermometer</li><li>Desk light<br>(a limited number available)</li><!--翻訳必要--><li>* Kitchen set</li>';
} elseif ($locale === 'ko_KR') {
  $guide = '관내 안내';
  $guide_txt = '프런트에 어메니티 바이킹을 준비하고 있습니다. 용도에 맞는 비품을 자유롭게 가져가세요.<br>체크인 15:00∼24:00 (※)<br>체크아웃 10:00<br>※프런트 서비스 6:00∼24:00<br>※한번 체크인을 하시면, 투숙 중 외출 시 전용 출입구를 사용하실 수 있습니다.';
  $equipment = '객실 비품';
  $equipment_txt = '<li>・ＴＶ (32인치)</li><li>・인터폰</li><!-- <li>加湿機能付空気清浄機</li> --><li>・전자 레인지</li><li>・대형 냉장고</li><li>・건조기가 달린 세탁기</li><!--翻訳必要--><li>・전기 주전자</li><li>・머그컵</li><li>・드라이어</li><li>・행거</li><li>・신발 주걱</li><li>・IH 레인지</li><!--翻訳必要--><!-- <li>傘立て</li> -->';
  $amenity = '어메니티';
  $amenity_txt = '<li>・샴푸</li><li>・컨디셔너</li><li>・바디 샴푸</li><!-- <li>歯ブラシ</li> --><li>・바스 타올</li><li>・페이스 타올</li><li>・슬리퍼</li><li>・가운</li><li>・칫솔</li><!--翻訳必要--><li>・그 외 완비</li><!--翻訳必要-->';
  $service = '서비스';
  $service_txt = '<li>・택배 (착불만 가능)</li><!-- <li></li> --><li>※컨시어지 서비스</li><li>(세탁물 보관·짐 보관)</li>';
  $rental = '대출용품';
  $rental_txt = '<li>・휴대폰 충전기</li><li>・다리미·다리미 대</li><li>・손톱깎이</li><li>・체온계</li><li>・스탠드 라이트<br> (수가 한정돼 있음)</li><!--翻訳必要--><li>※키친 세트</li>';
} elseif ($locale === 'zh_CN') {
  $guide = '酒店内介绍';
  $guide_txt = '前台备有自助式的洗；漱用品，请您按需取用。<br>入住时间 15：00～24：00（※）<br>退房时间 10：00<br>※前台服务时间 6：00～24：00<br>※办完入住手续之后，可以使用在入住期间专用的出入口。';
  $equipment = '客房用品';
  $equipment_txt = '<li>・电视（32英寸）</li><li>・内部电话</li><!-- <li>加湿機能付空気清浄機</li> --><li>・微波炉</li><li>・大型冰箱</li><li>・带干燥机的洗衣机</li><!--翻訳必要--><li>・电热水壶</li><li>・马克杯</li><li>・吹风机</li><li>・衣架</li><li>・鞋拔</li><li>・电磁炉</li><!--翻訳必要--><!-- <li>傘立て</li> -->';
  $amenity = '洗漱一次性用品';
  $amenity_txt = '<li>・洗发水</li><li>・护发素 </li><li>・沐浴露 </li><!-- <li>歯ブラシ</li> --><li>・浴巾</li><li>・洗脸毛巾 </li><li>・拖鞋 </li><li>・睡衣 </li><li>・牙刷 </li><!--翻訳必要--><li>・其他各种物品</li><!--翻訳必要-->';
  $service = '服务';
  $service_txt = '・寄快递行李（仅限到付）</li><!-- <li></li> --><li>※接待服务</li><li>（保管洗衣物、寄存行李）</li>';
  $rental = '租赁品';
  $rental_txt = '<li>・充电宝</li><li>・熨斗、熨衣台</li><li>・指甲刀</li><li>・体温计</li><li>・台灯<br>（数量有限）</li><!--翻訳必要--><li>※厨房套餐</li>';
} elseif ($locale === 'zh_TW') {
  $guide = '館內介紹';
  $guide_txt = '前臺備有自助式的洗；漱用品，請您按需取用。<br>入住時間 15：00～24：00（※）<br>退房時間 10：00<br>※前臺服務時間 6：00～24：00<br>※辦完入住手續之後，可以使用在入住期間專用的出入口。';
  $equipment = '客房備品';
  $equipment_txt = '<li>・電視（32英寸）</li><li>・內部電話</li><!-- <li>加湿機能付空気清浄機</li> --><li>・微波爐</li><li>・大型冰箱</li><li>・帶幹燥機的洗衣機</li><!--翻訳必要--><li>・電熱水壺</li><li>・馬克杯</li><li>・吹風機</li><li>・衣架</li><li>・鞋拔</li><li>・電磁爐</li><!--翻訳必要--><!-- <li>傘立て</li> -->';
  $amenity = '環境';
  $amenity_txt = '<li>・洗發水</li><li>・護發素</li><li>・沐浴露</li><!-- <li>歯ブラシ</li> --><li>・浴巾</li><li>・洗臉毛巾</li><li>・拖鞋</li><li>・睡衣</li><li>・牙刷 </li><!--翻訳必要--><li>・其他各種物品</li><!--翻訳必要-->';
  $service = '服務';
  $service_txt = '<li>・寄快遞行李（僅限到付）</li><!-- <li>※レンタルサイクル</li> --><li>※接待服務</li><li>（保管洗衣物、寄存行李）</li>';
  $rental = '物品出借';
  $rental_txt = '<li>・充電寶</li><li>・熨鬥、熨衣臺</li><li>・指甲刀</li><li>・體溫計</li><li>・臺燈<br>（數量有限）</li><!--翻訳必要--><li>※廚房套餐</li>';
} else {
    $guide = '館内案内';
    $guide_txt = 'チェックイン　　15：00～
    <br>チェックアウト　10：00
    <br>アメニティは、ロビーのアメニティバイキングよりお好きなものをお選びください。';
    $equipment = '客室備品';
    $equipment_txt = '<li>液晶TV（32型）</li>
    <li>加湿機能付空気清浄機</li>
    <li>ドライヤー</li>
    <li>電話（外線不可）</li>
    <li>ケトル</li>
    <li>マグカップ</li>
    <li>コップ</li>
    <li>ハンガー</li>
    <li>靴へら</li>
    <li>スーツブラシ</li>';
    $amenity = 'アメニティ';
    $amenity_txt = '<li>シャンプー</li>
    <li>コンディショナー</li>
    <li>ボディソープ</li>
    <li>ハンドソープ</li>
    <li>ナイトウエア</li>
    <li>タオル類</li>
    <li>使い捨てスリッパ</li>
    <li style="font-weight:bold; margin:1rem 0 0 0">アメニティバイキング</li>
    <li>歯ブラシ（硬い・柔らかい）</li>
    <li>レザー</li>
    <li>ボディタオル</li>
    <li>インスタントドリンク<br>（コーヒー、紅茶、お茶）</li>';
    $service = 'サービス';
    $service_txt = '<li>宅急便（着払いのみ）</li>
    <li>コピー・ファックス</li>
    <li>クリーニング</li>';
    $rental = '貸出品';
    $rental_txt = '<li>携帯充電器</li>
    <li>アイロン・アイロン台</li>
    <li>つめきり</li>
    <li>体温計</li>
    <li>スタンドライト</li>';
}
?>

<div class="kv" id="kv-facilities">
<div class="inner-kv">
</div>
</div>

<div class="wrap">

<div class="hall-equipment">
<div class="txt">
<h3><?php echo $guide;?></h3>
<p><?php echo $guide_txt; ?></p>
<!-- <h4>館内設備</h4>
<ul>
<li>ドラム型乾燥機付コインランドリー</li>
<li>飲料自動販売機</li>
</ul> -->
</div>
<div class="img">
<img src="<?php echo $wp_url; ?>/img/equipment.png" alt="館内設備">
</div>
</div>
<div class="other-appearance">
<div class="content">
<h4><?php echo $equipment; ?></h4>
<ul><?php echo $equipment_txt; ?></ul>
</div>
<div class="content">
<h4><?php echo $amenity; ?></h4>
<ul><?php echo $amenity_txt; ?></ul>
</div>
<div class="content">
<h4><?php echo $service; ?></h4>
<ul><?php echo $service_txt; ?></ul>
</div>
<div class="content">
<h4><?php echo $rental; ?></h4>
<ul><?php echo $rental_txt; ?></ul>
</div>

</div>

<div class="wrap">

<!-- <div class="appearance">
<h3 class="ttl3"><span>館内の様子</span></h3>
<div class="appearances">
<div class="content">
<img src="<?php echo $wp_url; ?>/img/appearance.png" alt="">
<h4>朝食コーナー</h4>
</div>
<div class="content">
<img src="<?php echo $wp_url; ?>/img/appearance.png" alt="">
<h4>朝食コーナー</h4>
</div>
<div class="content">
<img src="<?php echo $wp_url; ?>/img/appearance.png" alt="">
<h4>朝食コーナー</h4>
</div>
<div class="content">
<img src="<?php echo $wp_url; ?>/img/appearance.png" alt="">
<h4>朝食コーナー</h4>
</div>
</div>
</div> -->

<!-- <div class="wrap fitness">
    <img src="<?php echo $wp_url; ?>/img/appearance.png" alt="">
    <div class="">
      <h3>フィットネスジム<br>利用無料サービス(24時間）</h3>
      <h4>エニタイムフィットネス弁天町店</h4>
      <p>当館より電車で1駅5分（当館レンタルサイクルにて10分）<br>滞在中、何度でも利用可能。<br>※長期滞在（5泊以上）のお客様のみ。</p>
    </div>
</div> -->

</div>

</div>
<?php get_template_part('foot-link'); ?>
<?php get_footer();
