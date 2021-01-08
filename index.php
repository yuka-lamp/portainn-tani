<?php
/**
* The main template file
* @package WordPress
* @subpackage
*/

$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

get_header();
$locale = get_locale();
if ($locale === 'en_US') {
    $ttl = '';
    $name = 'PORTA INN Kujo Residence';
    $open = 'Coming Soon';
    $closest = "A minute's walk from Exit 6 of Kujo Station（Osaka Metro Chuo Line)";
    $lead = "Residential design that is perfect for a single night or long stays Great for use for leisure in the Osaka Bay area (USJ, Kaiyukan) or for concerts and events at the Kyocera Dome Osaka. Also perfect for business, only 2 stations (8 minutes) from Honmachi Station (Chuo Line)";
    $concept = 'Stay as You Live';
    $concept_txt = 'Each of our guest rooms are fully equipped with a kitchenette, large refrigerator, large closet, and combined washing machine and dryer for a comfortable stay for many nights or just one. ';
    $room_txt = 'PORTA INN Kujo Residence offers three types of room.<br>We look forward to your visit.';
    $near_txt = 'Convenience stores, shopping streets and restaurants located neaby the hotel further enhance convenience during your stay.';
    $guide_txt ='Rooms are equipped with a kitchenette, large refrigerator, and combined washing machine and dryer, <br>and feature separate spaces for the toilet and bathtub for an at-home experience.';
    $address = '1-13-22 Kujo, Nishi-ku, Osaka-shi 550-0027';
    $access = "A minute's walk from exit 6 of Kujo Station (Osaka Metro Chuo Line)<br>3 minutes' walk from exit 1 of Kujo Station (Hanshin Railway Hanshin Namba Line)";
    $all_room = 'Guest Rooms';
} elseif ($locale === 'ko_KR') {
    $ttl = '';
    $name = '포르타인 구조 레지던스';
    $open = 'Coming Soon';
    $closest = '오사카 메트로 중앙선 [구조 역] 6번 출구 도보 1분';
    $lead = "1박은 물론 장기 투숙하기에도 최적한 레지던스 오사카 베이 에리어 (USJ·해유관)이나 교세라 돔에서의 콘서트＆이벤트, 레저 이용 시 또는 중앙선 [혼마치 역] 까지 2역 (8분) 으로 비지니스 거점으로 최적.";
    $concept = '[생활이 가능 한 호텔]';
    $concept_txt = '각 객실에는 시스템키친, IH 레인지, 대형 냉장고, 대용량 클로젯,건조기가 달린 세탁기 등의 설비를 갖추어,1박은 물론 장기 투숙하실 경우에도 쾌적하게 지내실 수 있습니다.';
    $room_txt = 'PORTA INN 구조 레지던스에서는, 세 가지 타입의 객실을 준비하고,<br>여러분의 방문을 기다리고 있습니다.';
    $near_txt = '저희 호텔 주변에는 편의점이나 상점가, 음식점이 있어,<br>머무시는 동안 불편함이 없이 지내실 수 있습니다.';
    $guide_txt ='시스템키친, 대형 냉장고, 건조기가 달린 세탁기를 설치해,<br>아파트 타입 특유의 욕실과 화장실이 분리되어 있습니다.';
    $address = '1-13-22 Kujo, Nishi-Ku Osaka-City 550-0027';
    $access = '오사카 메트로 중앙선 구조 역 6번 출구 도보 약 1분<br>한신전차 한신난바선 구조역 1번 출구 도보 약 3분';
    $all_room = '객실 안내';
} elseif ($locale === 'zh_CN') {
    $ttl = '';
    $name = 'Portainn九条住宅';
    $open = 'Coming Soon';
    $closest = '大阪地铁中央线“九条站”⑥号出口徒步1分钟';
    $lead = "住一晚当然也可以，对长期逗留也是十分合适的住宿方式大阪湾区域（USJ・海游馆）和大阪京瓷竞技场可用于音乐会&活动，休闲等。再到中央线「本町站」2站地(8分钟)也是最合适的商务据点。";
    $concept = '生活酒店';
    $concept_txt = '每个房间都备有系统厨房、电磁炉、大型冰箱、大壁橱、带干燥机的洗衣机等设备，别说住一晚上，就是长期住在这里都会很轻松愉快。';
    $room_txt = '在PORTA INN九条住宅区，<br>准备了三种不同的房间，恭候您的光临。';
    $near_txt = '本馆周边有便利店、商店街、饮食店，<br>进一步提高您停留期间的便利性。';
    $guide_txt ='备有系统厨房、大型冰箱、带干燥机的洗衣机，<br>还有公寓型的分开的浴室和卫生间。';
    $address = '〒550-0027　大阪市西区九条1-13-22';
    $access = '大阪地铁中央线九条车站⑥号出口徒步约1分钟<br>阪神电车阪神难波线九条站①号出口徒步约3分钟';
    $all_room = '客房指南';
} elseif ($locale === 'zh_TW') {
    $ttl = '';
    $name = 'Portainn九條住宅';
    $open = 'Coming Soon';
    $closest = '大阪地鐵中央線“九條站”⑥號出口徒步1分鐘';
    $lead = "住壹晚當然也可以，對長期逗留也是十分合適的住宿方式大阪灣區域（USJ・海遊館）和大阪京瓷競技場可用于音樂會＆活動，休閑等。再到中央線「本町站」2站地(8分钟)也是最合適的商務據點。";
    $concept = '生活酒店';
    $concept_txt = '每個房間都備有系統廚房、電磁爐、大型冰箱、大壁櫥、帶幹燥機的洗衣機等設備，別說住壹晚上，就是長期住在這裏都會很輕松愉快。';
    $room_txt = '在PORTA INN九條住宅區，<br>準備了三種不同的房間，恭候您的光臨。';
    $near_txt = '本館周邊有便利店、商店街、飲食店，進壹<br>步提高您停留期間的便利性。';
    $guide_txt ='備有系統廚房、大型冰箱、帶幹燥機的洗衣機，<br>還有公寓型的分開的浴室和衛生間。';
    $address = '〒550-0027　大阪市西區九條1-13-22';
    $access = '大阪地鐵中央線九條車站⑥號出口徒步約1分鐘<br>阪神電車阪神難波線九條站①號出口徒步約3分鐘';
    $all_room = '客房介紹';
} else {
    $ttl = '大阪を一望できる<br>コンパクトで<br class="sp-only">快適なビジネスホテル。';
    $name = 'ポルタイン谷町九丁目';
    $open = 'Coming Soon';
    $closest = '大阪メトロ谷町線・千日前線<br class="sp-only">「谷町九丁目駅」<br>③番出口徒歩1分';
    $lead = 'ホテルの南西には大阪三大夏祭りで有名な「生國魂神社（いくくにたまじんじゃ）」があり、四季の祭事が行われています。<br>周辺は有名なお寺や神社が多くパワースポットになっています。';
    $concept = '「大阪市内の移動・フットワーク抜群のホテル」';
    $concept_txt = 'ポルタイン谷町九丁目は、ビジネスに最適な4アクセス（大阪メトロ谷町線・千日前線・近鉄大阪線・難波線）のハブエリアに位置し、キタ（梅田）やミナミ（なんば）、本町などビジネス街にも5～10分。大阪観光の拠点に最適な立地です。';
    $room_txt = 'ポルタイン谷町九丁目では、<br>4つのお部屋タイプをご用意しております。';
    $near_txt = '当館周辺にはコンビニや商店街、飲食店があり、<br>ご滞在中の利便性をより一層引き上げます。';
    $guide_txt ='システムキッチン、大型冷蔵庫、乾燥機付ランドリーを設置し、<br>マンションタイプならではのバスルームとトイレはセパレートです。';
    $guide_info ='<li>当館は、駐車場のご用意はありません。</li>
    <li>1階入口の自動ドアは、夜間（24：00～06：00）まで施錠しております。ご用の際は、自動ドア横のインターフォンでお呼出しください。</li>
    <li>1階エレベーター呼び出しボタンは、セキュリティがかかっております。ルームキーカードをかざしてからボタンを押してください。</li>
    <li>喫煙スペースは、屋上階（屋外）にご用意しております。</li>
    <li>2階サービスコーナーには、乾燥機能付コインランドリー2台、製氷機、飲料自販機1台がございます。（両替はフロントにて承ります）</li>
    <li>2階エレベーターホールに、ズボンプレッサー（5台）をご用意しております。<br>（ご使用後は返却にご協力をお願いいたします）</li>
    <li>1階カフェ「café’9」では、ご宿泊のお客様に朝7：00～9：00まで軽食（パン・ジュース・コーヒー）を無料でご用意しておりますので、ご利用下さい。</li>';
    $address = '〒550-0027　大阪市西区九条1-13-22';
    $access = '大阪メトロ中央線九条駅⑥番出口徒歩1分<br>阪神電車なんば線九条駅①番出口徒歩３分';
    $all_room = '客室のご案内';
}
?>
<div class="index-kv">
<div class="txt">
<p><?php echo $ttl; ?></p>
<p><span><?php echo $name; ?></span></p>
<?php if ($locale !== 'en_US'): ?>
<p><span class="eng">PORTA INN Tanimachi-9chome</span></p>
<?php endif; ?>
<p><?php echo $open; ?></p>
<p><?php echo $closest; ?></p>
<h1><?php echo $lead; ?></h1>
</div>
<div class="slide-kv">
<div class="slide-view slide01"></div>
</div>
</div>

<div class="index-concept">
<div class="inner">
<h2><?php echo $concept; ?></h2>
<p><?php echo $concept_txt; ?></p>
</div>
</div><!-- /.index-concept -->
<div class="index-room">
<div class="inner">
<div class="ttl-bloc">
<h2 class="eng"><span>Room</span></h2>
<p><?php echo $room_txt; ?></p>
</div>
<div class="slide-room">
<?php
$args = ['post_type' => 'room','numberposts' => 3 ,'suppress_filters' => false ,'lang' => $locale];
$posts = get_posts($args);
if ($posts):
foreach ($posts as $post):
setup_postdata($post);
$id = get_the_ID();
$ttl = get_the_title();
$content = mb_strimwidth(strip_tags(get_the_content()), 0, 80, '...');
if (has_post_thumbnail()) {
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
}
?>
<div class="room">
<div class="img">
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>">
</div>
<div class="txt">
<h3><?php echo $ttl; ?></h3>
<p><?php echo $content; ?></p>
<!-- <p>room size ｜ <?php echo get_post_meta($id, 'size', true); ?>㎡</p> -->
</div>
</div><!-- /.room -->
<?php endforeach; endif; wp_reset_postdata(); ?>
</div>
<div class="btn">
<a href="<?php echo $home; ?>/room/"><i class="fas fa-chevron-circle-right"></i><?php echo $all_room; ?></a>
</div>
</div>
</div><!-- /.index-room -->

<div class="index-near bg-ptn1">
<div class="inner">
<div class="ttl-bloc">
<h2 class="eng"><span>Near</span></h2>
<p><?php echo $near_txt; ?></p>
</div>
</div>
<ul class="slide-near">
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-konbini.jpg" alt="コンビニ"></dt>
<dd>コンビニ<br>30m</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-post.jpg" alt="郵便局"></dt>
<dd>郵便局<br>180m</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-kabuki.jpg" alt="新歌舞伎座"></dt>
<dd>新歌舞伎座<br>300m</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-bunraku.jpg" alt="国立文楽劇場"></dt>
<dd>国立文楽劇場<br>600m</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-kuromon.jpg" alt="黒門市場"></dt>
<dd>黒門市場<br>700m</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-abeno.jpg" alt="あべのハルカス・天王寺動物園"></dt>
<dd>あべのハルカス・天王寺動物園<br>1.8km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-osaka.jpg" alt="大阪城・大阪城ホール"></dt>
<dd>大阪城・大阪城ホール<br>2.5km</dd>
</dl></li>
<!-- <li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-edion.jpg" alt="エディオンアリーナ大阪"></dt>
<dd>エディオンアリーナ大阪<br>1.5km</dd>
</dl></li> -->
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-sky.jpg" alt="新大阪スカイビル"></dt>
<dd>新大阪スカイビル<br>5km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near04.jpg" alt="京セラドーム"></dt>
<dd>京セラドーム<br>3.6km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near02.jpg" alt="海遊館"></dt>
<dd>海遊館<br>8km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near01.jpg" alt="USJ"></dt>
<dd>USJ<br>7km</dd>
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/near-rugby.jpg" alt="花園ラグビー場"></dt>
<dd>花園ラグビー場<br>10km</dd>
</dl></li>
</ul>
</div><!-- /.index-near -->

<div class="index-guide">
<div class="inner">
<div class="ttl-bloc">
<h2 class="eng"><span>Guide</span></h2>
<p><?php echo $guide_txt;?></p>
</div>
<!-- <div class="view">
<div><iframe src="https://www.google.com/maps/embed?pb=!4v1562040010529!6m8!1m7!1sCAoSLEFGMVFpcFB6ZWkwMHlENUd6b0ROYVplcnFxOWVvcG4ybnRYdkF1VS1HTS1a!2m2!1d34.669894193236!2d135.46309258115!3f13.436730133372464!4f-5.955435915357995!5f0.7820865974627469" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>
<div class="view-btn">
<a href="https://goo.gl/maps/EEngFh4r1echTtSb7"><i class="fas fa-chevron-circle-right"></i>　ストリートビューを見る</a>
</div> -->
<ul class="slide-guide">
<?php if ('en_US' == $locale) { ?>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="Reception Desk"></dt>
<!-- <dd>Reception Desk</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="Appearance"></dt>
<!-- <dd>Appearance</dd> -->
</dl></li>
<li><dl>
<dt><a target="_blank" href="https://www.anytimefitness.co.jp/bentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24-hour Fitness Gym"></a></dt>
<!-- <dd>24-hour Fitness Gym</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="Laundromat"></dt>
<!-- <dd>Laundromat</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="Others"></dt>
<!-- <dd>Others</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="Reception Desk"></dt>
<!-- <dd>Reception Desk</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="Appearance"></dt>
<!-- <dd>Appearance</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24-hour Fitness Gym"></dt>
<!-- <dd>24-hour Fitness Gym</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="Laundromat"></dt>
<!-- <dd>Laundromat</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="Others"></dt>
<!-- <dd>Others</dd> -->
</dl></li>
<?php } elseif ('ko_KR' == $locale) { ?>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="접수"></dt>
<!-- <dd>접수</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="외관"></dt>
<!-- <dd>외관</dd> -->
</dl></li>
<li><dl>
<dt><a target="_blank" href="https://www.anytimefitness.co.jp/bentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24시간 피트니스 "></a></dt>
<!-- <dd>24시간 피트니스 </dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="코인 세탁기"></dt>
<!-- <dd>코인 세탁기</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="그 외"></dt>
<!-- <dd>그 외</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="접수"></dt>
<!-- <dd>접수</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="외관"></dt>
<!-- <dd>외관</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24시간 피트니스 "></dt>
<!-- <dd>24시간 피트니스 </dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="코인 세탁기"></dt>
<!-- <dd>코인 세탁기</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="그 외"></dt>
<!-- <dd>그 외</dd> -->
</dl></li>
<?php } elseif ('zh_CN' == $locale) { ?>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="受理"></dt>
<!-- <dd>受理</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外观"></dt>
<!-- <dd>外观</dd> -->
</dl></li>
<li><dl>
<dt><a target="_blank" href="https://www.anytimefitness.co.jp/bentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24小时健身房"></a></dt>
<!-- <dd>24小时健身房</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="投币式洗衣机"></dt>
<!-- <dd>投币式洗衣机</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="其他"></dt>
<!-- <dd>其他</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="受理"></dt>
<!-- <dd>受理</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外观"></dt>
<!-- <dd>外观</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24小时健身房"></dt>
<!-- <dd>24小时健身房</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="投币式洗衣机"></dt>
<!-- <dd>投币式洗衣机</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="其他"></dt>
<!-- <dd>其他</dd> -->
</dl></li>
<?php } elseif ('zh_TW' == $locale) { ?>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="櫃檯"></dt>
<!-- <dd>櫃檯</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外觀"></dt>
<!-- <dd>外觀</dd> -->
</dl></li>
<li><dl>
<dt><a target="_blank" href="https://www.anytimefitness.co.jp/bentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24 小時健身房"></a></dt>
<!-- <dd>24 小時健身房</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="自助洗衣服"></dt>
<!-- <dd>自助洗衣服</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="其他"></dt>
<!-- <dd>其他</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="櫃檯"></dt>
<!-- <dd>櫃檯</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外觀"></dt>
<!-- <dd>外觀</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24 小時健身房"></dt>
<!-- <dd>24 小時健身房</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="自助洗衣服"></dt>
<!-- <dd>自助洗衣服</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="其他"></dt>
<!-- <dd>其他</dd> -->
</dl></li>
<?php } else { ?>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="受付"></dt>
<!-- <dd>受付</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="外観"></dt>
<!-- <dd>外観</dd> -->
</dl></li>
<li><dl>
<dt><a target="_blank" href="https://www.anytimefitness.co.jp/bentencho/"><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="24時間フィットネス"></a></dt>
<!-- <dd>24時間フィットネス</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="ベランダ"></dt>
<!-- <dd>コインランドリー</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="クローゼット"></dt>
<!-- <dd>その他</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide01.jpg" alt="キッチン"></dt>
<!-- <dd>受付</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide02.jpg" alt="備品"></dt>
<!-- <dd>外観</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide03.jpg" alt="冷蔵庫と電子レンジ"></dt>
<!-- <dd>24時間フィットネス</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide04.jpg" alt="ベランダ"></dt>
<!-- <dd>コインランドリー</dd> -->
</dl></li>
<li><dl>
<dt><img src="<?php echo get_template_directory_uri(); ?>/img/guide05.jpg" alt="クローゼット"></dt>
<!-- <dd>その他</dd> -->
</dl></li>
<?php } ?>
</ul>
<div class="info">
  <ul><?php echo $guide_info;?></ul>
</div>
<?php if ('en_US' == $locale) { ?>
<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>facilities/"><i class="fas fa-chevron-circle-right"></i>Hotel Tour</a></div>
<?php } elseif ('ko_KR' == $locale) { ?>
<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>facilities/"><i class="fas fa-chevron-circle-right"></i>관내 안내</a></div>
<?php } elseif ('zh_CN' == $locale) { ?>
<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>facilities/"><i class="fas fa-chevron-circle-right"></i>酒店内介绍</a></div>
<?php } elseif ('zh_TW' == $locale) { ?>
<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>facilities/"><i class="fas fa-chevron-circle-right"></i>館內介紹</a></div>
<?php } else { ?>
<div class="btn"><a href="<?php echo esc_url(home_url('/')); ?>facilities/"><i class="fas fa-chevron-circle-right"></i>館内のご案内</a></div>
<?php } ?>
</div>
</div><!-- /.index-guide -->

<div class="index-access">
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.178313802778!2d135.4727088147338!3d34.67544884207879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e64c389873ff%3A0xe9ceadd0d21a8901!2z44CSNTUwLTAwMjcg5aSn6Ziq5bqc5aSn6Ziq5biC6KW_5Yy65Lmd5p2h77yR5LiB55uu77yR77yT!5e0!3m2!1sja!2sjp!4v1581582025028!5m2!1sja!2sjp" allowfullscreen></iframe>
</div>
<div class="info">
<p><?php echo $address; ?><br>TEL：06-6581-5000</p>
<p><?php echo $access; ?></p>
<p class="btn-view"><a href="https://goo.gl/maps/VAiYUyQJeLmuTeJp6" target="_blank">Google MAP</a></p>
</div>
</div><!-- /.index-access -->

<div class="index-news">
<div class="inner">
<div class="ttl-bloc">
<h2 class="eng">News</h2>
<p><a href="<?php echo esc_url(home_url('/')); ?>news/"><i class="fas fa-chevron-circle-right"></i>　More</a></p>
</div>
<ul class="news-topics">
<?php
$posts = get_posts(['posts_per_page' => 3, 'category_name' => 'news']);
foreach ($posts as $post): setup_postdata($post); ?>
<li>
<a href="<?php the_permalink(); ?>">
<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
<p><span><?php the_title(); ?></span><i class="fas fa-chevron-circle-right"></i></p>
</a>
</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
</div>
</div><!-- /.index-news -->

<?php get_footer();
