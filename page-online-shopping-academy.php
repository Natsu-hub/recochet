<?php 
/**
* Template Name: 飲食店ネット通販アカデミー
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--service">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service-mv-white.svg"
                    alt="service" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title30">
                <?php the_title(); ?>
            </h1>
            <div class="c-below-mv__message">変化の大きい通販事業に関係する最新情報や有益な情報、<br>
                売り上げアップに必要なマインドセットを発信しているオンラインサロンです。<br>
                サロン生に向けて、毎月の実践報告に対するフィードバックも行っています。
            </div>
    </section>


    <!-- p-service-top -->
    <section class="p-service-top">
        <div class="p-service-top__inner l-inner">
            <h2 class="p-service-top__title">
                <span class="p-service-top__sub-title c-service-sub16">飲食店を運営している経営者様へ</span>
                <span class="p-service-top__main-title c-service-title">こんなお悩み、抱えていませんか？</span>
            </h2>
            <div class="p-service-top__body">
                <picture class="p-service-top__img">
                    <source
                        srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img01.webp"
                        type="image/webp">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img01.png"
                        alt="悩んでいる男性のイメージイラスト" width="160" height="260" loading="lazy">
                </picture>
                <ul class="p-service-top__lists">
                    <li class="p-service-top__list">
                        <span>店舗の売上が中々上がらず課題を感じている…</span>
                    </li>
                    <li class="p-service-top__list">
                        <span>やり方が分からず、自分が描いている通販の運営ができていない…</span>
                    </li>
                    <li class="p-service-top__list">
                        <span>思うように売れていなくて、通販が楽しめていない…</span>
                    </li>
                    <li class="p-service-top__list">
                        <span>店舗の運営をやめたいけどやめられない…</span>
                    </li>
                    <li class="p-service-top__list">
                        <span>現場を抜けたいが日常業務が忙しくて離れられない…</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- p-service-merit -->
    <section class="p-service-merit">
        <div class="p-service-merit__bg">
            <div class="p-service-merit__inner l-inner">
                <span class="p-service-merit__sub-title">リコシェの飲食店ネット通販アカデミーなら…</span>
                <h2 class="p-service-merit__title">
                    <span class="p-service-merit__left-title">
                        <span class="p-service-merit__left-title01">通販のみで</span>
                        <span class="p-service-merit__left-title02">最高月商</span>
                    </span>
                    <span class="p-service-merit__center-title">700</span>
                    <span class="p-service-merit__right-title">万円達成!</span>
                </h2>
                <div class="p-service-merit__body">
                    <div class="p-service-merit__box">
                        <div class="p-service-merit__label">
                            <span>経営面の<br>メリット</span>
                        </div>
                        <ul class="p-service-merit__lists">
                            <li class="p-service-merit__list">
                                <span>顧客視点が身につき「売れる」感度が上がった</span>
                            </li>
                            <li class="p-service-merit__list">
                                <span>スタッフを雇用できるようになり業務の負担が軽減された</span>
                            </li>
                            <li class="p-service-merit__list">
                                <span>店舗の売上に頼らずに経営ができるようになった</span>
                            </li>
                            <li class="p-service-merit__list">
                                <span>通販からメディアに紹介されるようになり認知度が上がった</span>
                            </li>
                            <li class="p-service-merit__list">
                                <span>完全予約制に切り替え、予約がない日はお店を休めるようになった</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-service-merit__box">
                        <div class="p-service-merit__label">
                            <span>マインド面の<br>メリット</span>
                        </div>
                        <ul class="p-service-merit__lists">
                            <li class="p-service-merit__list">
                                <span>暇な時でも不安感が消えた</span>
                            </li>
                            <li class="p-service-merit__list">
                                <span>従業員にイライラしなくなった</span>
                            </li>
                            <li class="p-service-merit__list">
                                <span>時間の余裕が生まれて、家族との関係が改善された</span>
                            </li>
                            <li class="p-service-merit__list">
                                <span>今まで我慢していた趣味ができるようになった</span>
                            </li>
                            <li class="p-service-merit__list">
                                <span>自分のマインドセットが変わり、周りの環境もガラッと変わった</span>
                            </li>
                            <li class="p-service-merit__list">
                                <span>好きな場所で、自由なライフスタイルを築けるようになった</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- p-service-case -->
    <div class="p-service-case">
        <div class="p-service-case__bg">
            <div class="p-service-case__inner l-inner">
                <div class="p-service-case__body">
                    <ul class="p-service-case__items">
                        <li class="p-service-case__item" id="well-being01">
                            <picture class="p-service-case__item-img">
                                <source
                                    srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img02.webp"
                                    type="image/webp">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img02.jpg"
                                    alt="飲食店で働く人のイメージ画像" width="683" height="385" loading="lazy">
                            </picture>
                            <div class="p-service-case__item-content">
                                <div class="p-service-case__item-title">
                                    <div class="p-service-case__item-number">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/case01.svg"
                                            alt="case01" width="67" height="58" loading="lazy">
                                    </div>
                                    <div class="p-service-case__item-lead">
                                        <div class="p-service-case__item-sub-lead">和歌山県のイタリアンレストラン
                                        </div>
                                        <div class="p-service-case__item-main-lead">目標月商<br class="u-desktop">300万円を達成！
                                        </div>
                                    </div>
                                </div>
                                <p class="p-service-case__item-text">
                                    いずれ飲食店を辞めたいと思っていたところから、「バスクチーズケーキ」の通販を始めることにしました。<br>
                                    特性に合ったモールを提案してもらい、問題点の答えを教えていただいたおかげで、目標だった月商300万円を達成。<br>
                                    コンサルを受ける中で、マインドセットが前向きになったのも良かった点です。
                                </p>
                            </div>
                        </li>
                        <li class="p-service-case__item" id="well-being02">
                            <picture class="p-service-case__item-img">
                                <source
                                    srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img03.webp"
                                    type="image/webp">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img03.jpg"
                                    alt="飲食店で働く人のイメージ画像" width="683" height="385" loading="lazy">
                            </picture>
                            <div class="p-service-case__item-content">
                                <div class="p-service-case__item-title">
                                    <div class="p-service-case__item-number">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/case02.svg"
                                            alt="case02" width="67" height="58" loading="lazy">
                                    </div>
                                    <div class="p-service-case__item-lead">
                                        <div class="p-service-case__item-sub-lead">岐阜県のピザ屋さん
                                        </div>
                                        <div class="p-service-case__item-main-lead">月商ではなく、<br
                                                class="u-desktop">日商100万円達成！
                                        </div>
                                    </div>
                                </div>
                                <p class="p-service-case__item-text">
                                    店舗営業の弊害、商圏という枠を抜け、全国の人に店舗ピザを知ってもらいたかったので通販を始めました。<br>
                                    コンサルを受けAmazonにてブラックフライデー販売をすると、月商ではなく日商100万円を達成。<br>
                                    店舗で暇な時もピコンピコンとスマホに注文の通知がくるようになり、何もしなくても売上が上がっていくのが楽しくなりました。
                                </p>
                            </div>
                        </li>
                        <li class="p-service-case__item" id="well-being03">
                            <picture class="p-service-case__item-img">
                                <source
                                    srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img04.webp"
                                    type="image/webp">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img04.jpg"
                                    alt="飲食店で働く人のイメージ画像" width="683" height="385" loading="lazy">
                            </picture>
                            <div class="p-service-case__item-content">
                                <div class="p-service-case__item-title">
                                    <div class="p-service-case__item-number">
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/case03.svg"
                                            alt="case03" width="67" height="58" loading="lazy">
                                    </div>
                                    <div class="p-service-case__item-lead">
                                        <div class="p-service-case__item-sub-lead">IT企業勤めから飲食の通販を開始
                                        </div>
                                        <div class="p-service-case__item-main-lead"><span>クラウドファンディングで</span><br
                                                class="u-desktop">800万円達成！
                                        </div>
                                    </div>
                                </div>
                                <p class="p-service-case__item-text">
                                    IT企業が本業でしたが、美味しいもの好きというのもあり、飲食を通じて本当に美味しいものを提供したいと思いコンサルを受けることを決めました。<br>
                                    通販の基本的なことや結果を出す上で、結果を出すうんぬんというより成功するための本質的な考え方や概念を学ぶことができました。
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- p-service -->
    <section class="p-service">
        <div class="p-service__inner l-inner">
            <div class="p-service__en-title">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service-white.svg"
                    alt="service" width="556" height="362" loading="lazy">
            </div>
            <h2 class="p-service__title">
                <span class="p-service__sub-title-wrapper c-service-sub18">
                    <span class="p-service__deco">豊</span>
                    <span class="p-service__deco">富</span>
                    <span class="p-service__deco">な</span>
                    <span class="p-service__deco">実</span>
                    <span class="p-service__deco">績</span>
                    <span class="p-service__sub-title">に基づく独自ノウハウを詰め込んだ</span>
                </span>
                <span class="p-service__main-title c-service-title">リコシェの飲食店<br class="u-mobile">ネット通販アカデミー</span>
            </h2>
            <div class="p-service__body">
                <ul class="p-service__items">
                    <li class="p-service__item">
                        <picture class="p-service__img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img05-sp.webp"
                                type="image/webp" media="(max-width: 768px)">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img05.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img05.png"
                                alt="コンサルティングのイメージ画像" width="283" height="206" loading="lazy">
                        </picture>
                        <div class="p-service__content">
                            <h3 class="p-service__lead">3,000人以上のコンサル実績</h3>
                            <div class="p-service__text">これまでに3,000人以上の企業オーナー様に対してコンサルティングを提供し、その実績を築いてまいりました。<br>
                                数多くの事例から得た知識とノウハウから、お客様のニーズに合わせた戦略を構築し、成功への道を導きます。</div>
                        </div>
                    </li>
                    <li class="p-service__item">
                        <picture class="p-service__img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img06-sp.webp"
                                type="image/webp" media="(max-width: 768px)">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img06.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img06.png"
                                alt="コンサルティングのイメージ画像" width="283" height="206" loading="lazy">
                        </picture>
                        <div class="p-service__content">
                            <h3 class="p-service__lead">「極上カビなしコーヒー豆」で全自動化&月商600万円</h3>
                            <div class="p-service__text">
                                自社プロダクトである「極上カビなしコーヒー豆」を活用し、全自動化を徹底。このアプローチにより、月商を600万円にまで引き上げることに成功しました。<br>
                                具体的で実証された成功事例が、お客様の成功に直結しています。</div>
                        </div>
                    </li>
                    <li class="p-service__item">
                        <picture class="p-service__img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img07-sp.webp"
                                type="image/webp" media="(max-width: 768px)">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img07.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/service_img07.png"
                                alt="コンサルティングのイメージ画像" width="283" height="206" loading="lazy">
                        </picture>
                        <div class="p-service__content">
                            <h3 class="p-service__lead">飲食店に特化した独自のノウハウと最新情報の提供</h3>
                            <div class="p-service__text">
                                急速に変化する市場において、最新かつ実践的なノウハウを提供することで、お客様の事業が競争力を保ち、成長するお手伝いをいたします。<br>飲食店特有の課題や機会に精通した私が、お客様のビジネスに合わせた最適なアドバイスを提供いたします。
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- p-service-flow -->
    <section class="p-service-flow">
        <div class="p-service-flow__inner l-inner">
            <div class="p-service__en-title">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/flow-white.svg"
                    alt="flow" width="483" height="424" loading="lazy">
            </div>
            <h2 class="p-service-flow__title">ヒアリングから役務提供の流れ
            </h2>
            <div class="p-service-flow__body">
                <ul class="p-service-flow__items">
                    <li class="p-service-flow__item">
                        <div class="p-service-flow__number">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/number01.svg"
                                alt="1" width="71" height="71" loading="lazy">
                        </div>
                        <div class="p-service-flow__box">
                            <picture class="p-service-flow__img">
                                <source
                                    srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/flow_img09.webp"
                                    type="image/webp">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/flow_img09.png"
                                    alt="LPからお申し込み" width="273" height="154" loading="lazy">
                            </picture>
                            <div class="p-service-flow__content">
                                <div class="p-service-flow__lead">LPからお申し込み</div>
                                <div class="p-service-flow__text">
                                    初めに、飲食店ネット通販アカデミーのサービスについて詳しく解説したページがありますので確認いただき、ページ下部にあるボタンから参加お申し込みを完了してください。
                                </div>
                                <div class="p-service-flow__btn">
                                    <a href="https://ricochet.co.jp/online-shopping-academy/" class="c-btn"
                                        target="_blank" rel="noopener noreferrer">LPはこちら</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-service-flow__item">
                        <div class="p-service-flow__number">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/number02.svg"
                                alt="2" width="71" height="71" loading="lazy">
                        </div>
                        <div class="p-service-flow__box">
                            <picture class="p-service-flow__img">
                                <source
                                    srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/flow_img02.webp"
                                    type="image/webp">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/flow_img02.png"
                                    alt="サロンへの招待リンク発行" width="273" height="154" loading="lazy">
                            </picture>
                            <div class="p-service-flow__content">
                                <div class="p-service-flow__lead">サロンへの招待リンク発行</div>
                                <div class="p-service-flow__text">
                                    お客様からのお申し込みを確認次第、こちらでサロンへの招待リンクをお客様専用で発行し、ご登録いただいたご連絡先へ送付いたしますので、リンクをクリックしてサロンに参加してください。
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-service-flow__item">
                        <div class="p-service-flow__number">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/number03.svg"
                                alt="3" width="71" height="71" loading="lazy">
                        </div>
                        <div class="p-service-flow__box">
                            <picture class="p-service-flow__img">
                                <source
                                    srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/flow_img08.webp"
                                    type="image/webp">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/flow_img08.png"
                                    alt="飲食店ネット通販アカデミーへご参加" width="273" height="154" loading="lazy">
                            </picture>
                            <div class="p-service-flow__content">
                                <div class="p-service-flow__lead">飲食店ネット通販アカデミーへご参加</div>
                                <div class="p-service-flow__text">
                                    サロン参加まで完了しましたら、飲食店ネット通販アカデミーのコンテンツをサロン内にてお受け取りいただけます。参加後の流れもご案内されますのでご安心ください。当サロンのノウハウを存分に事業に活かしていただけます。
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>

    <!-- p-service-voice -->
    <section class="p-service-voice">
        <div class="p-service-voice__inner l-inner">
            <div class="p-service__en-title">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/voice-white.svg"
                    alt="case" width="369" height="396" loading="lazy">
            </div>
            <h2 class="p-service-voice__title">
                <span class="p-service-voice__sub-title c-service-sub18">お客様の声</span>
                <span class="p-service-voice__main-title c-service-title">「効率が上がった」「楽になった」<br>
                    等の声が寄せられています</span>
            </h2>
            <div class="p-service-voice__body">
                <ul class="p-service-voice__items">
                    <li class="p-service-voice__item">
                        <picture class="p-service-voice__img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/voice_img01.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/voice_img01.jpg"
                                alt="お客様の声" width="220" height="220" loading="lazy">
                        </picture>
                        <div class="p-service-voice__message">
                            <div class="p-service-voice__lead">コンサル入会後月商300万円を達成！新たな収入の柱に。</div>
                            <div class="p-service-voice__text">
                                企業として一つの柱だけではリスクがあると感じ通販事業を始めましたが、作成しただけでは売れない事を認識。<br>
                                コンサル入会後、売上ゼロから月商300万円を達成。仕組みを構築していくにはピッタリのコンサルです！
                            </div>
                            <div class="p-service-voice__name">岐阜県　ピッツェリア　白木様</div>
                        </div>
                    </li>
                    <li class="p-service-voice__item">
                        <picture class="p-service-voice__img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/voice_img04.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/voice_img04.jpg"
                                alt="お客様の声" width="220" height="220" loading="lazy">
                        </picture>
                        <div class="p-service-voice__message">
                            <div class="p-service-voice__lead">チャンスは一度。あの時即決して良かったと思っています。</div>
                            <div class="p-service-voice__text">
                                コンサル参加から３年、通販なんて個人店でできるわけがないと勝手に思っていたのが初月に全国から50万近く注文をいただき驚きました。「お客様が望むものを売る」それをどうやって見つけだすかを教わり続けています。
                            </div>
                            <div class="p-service-voice__name">東京都　焼肉　多賀様</div>
                        </div>
                    </li>
                    <li class="p-service-voice__item">
                        <picture class="p-service-voice__img">
                            <source
                                srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/voice_img05.webp"
                                type="image/webp">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/voice_img05.jpg"
                                alt="お客様の声" width="220" height="220" loading="lazy">
                        </picture>
                        <div class="p-service-voice__message">
                            <div class="p-service-voice__lead">お客さんに寄り添う発想ができるようになり、全てが解決。</div>
                            <div class="p-service-voice__text">
                                当初は売上補充になればとの割と浅い考えで、どこへ向かうのか見えていない中がむしゃらにやっていました。<br>
                                コンサルの参加費は安くはないので躊躇するかもしれませんが、今では実にそれ以上の収穫を得ています！
                            </div>
                            <div class="p-service-voice__name">北海道　ネット通販　根布様</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- p-service-price--online -->
    <section class="p-service-price--online">
        <div class="p-service-price--online__inner">
            <div class="p-service__en-title">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/below/price-white.svg"
                    alt="price" width="415" height="362" loading="lazy">
            </div>
            <h2 class="p-service-price--online__title c-service-title">飲食店ネット通販アカデミー<br class="u-mobile">ご参加料金
            </h2>
            <div class="p-service-price--online__body">
                <div class="p-service-price--online__label">
                    <p class="p-service-price--online__label36">初月無料</p>
                </div>
                <div class="p-service-price--online__box">
                    <ul class="p-service-price--online__lists">
                        <li class="p-service-price--online__list">実践フィードバック</li>
                        <li class="p-service-price--online__list">ノウハウ発信</li>
                    </ul>
                    <div class="p-service-price--online__box-btn">
                        <a href="https://ricochet.co.jp/online-shopping-academy/" class="c-btn" target="_blank"
                            rel="noopener noreferrer">詳しくはこちら</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- p-service-faq -->
    <section class="p-service-faq">
        <div class="p-service-faq__inner l-inner">
            <h2 class="p-service-faq__title">
                <span class="p-service-faq__sub-title c-service-sub18">よくあるご質問</span>
                <span class="p-service-faq__main-title c-service-title">よくご質問いただく内容をご紹介します</span>
            </h2>
            <div class="p-service-faq__body">
                <ul class="p-service-faq__items">
                    <li class="p-service-faq__item">
                        <div class="p-service-faq__lead">
                            <span>Q1.</span>
                            <p>商品が決まっていなくても大丈夫ですか？</p>
                        </div>
                        <div class="p-service-faq__text">
                            はい。通販で何を売るかが決まっていなくとも問題ありません。むしろ、まだ商品が決まっていない段階のお客様も多く、そういった場合こそ大きく成功する可能性に満ちていますので、ぜひ一度ご相談ください。
                        </div>
                    </li>
                    <li class="p-service-faq__item">
                        <div class="p-service-faq__lead">
                            <span>Q2.</span>
                            <p>通販をやったことがない初心者ですが大丈夫ですか？　</p>
                        </div>
                        <div class="p-service-faq__text">
                            飲食店ネット通販アカデミーに参加する多くの方が通販初心者であり、未経験から通販事業を成功させた方も多数いらっしゃいます。同じスタートラインからの仲間が大勢いるのでご安心ください。
                        </div>
                    </li>
                    <li class="p-service-faq__item">
                        <div class="p-service-faq__lead">
                            <span>Q3.</span>
                            <p>通販に挑戦していますが売上が上がらなかったのですが大丈夫ですか？</p>
                        </div>
                        <div class="p-service-faq__text">
                            現在、または過去に通販に挑戦したことがある方にもおすすめです。コンサルやアカデミーなどの学びを通して、成長できる環境が整っています。実際に未経験の方もこのノウハウを用いて通販事業を成功させることができています。さらに返金保証もお付けしておりますので、安心して取り組むことができます。
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- p-common-download -->
    <?php get_template_part('template/common-download'); ?>

</main>
<?php get_footer(); ?>