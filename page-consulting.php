<?php 
/**
* Template Name: 事業コンサルティング
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--service">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service-white.svg"
                    alt="service" width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title">
                <?php the_title(); ?>
            </h1>
            <div class="c-below-mv__message">飲食業界における成功は、豊富な経験と適切なサポートが不可欠です。<br>
                これまで3,000人以上の方のコンサルティングを行ってきたノウハウを活かし、<br class="u-desktop">
                独自のECコンサルティングサービスをご提案いたします。<br>
                共に成功への一歩を踏み出して、お客様自身が望む未来を実現させましょう。
            </div>
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
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img01.webp"
                        type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img01.png"
                        alt="悩んでいる男性のイメージイラスト" width="160" height="260" loading="lazy">
                </picture>
                <ul class="p-service-top__lists">
                    <li class="p-service-top__list">
                        <span>店舗の売上が中々上がらず課題を感じている…</span>
                    </li>
                    <li class="p-service-top__list">
                        <span>お金が原因で自分が描いているお店の経営ができていない…</span>
                    </li>
                    <li class="p-service-top__list">
                        <span>開業資金の返済に追われていて経営が楽しめていない…</span>
                    </li>
                    <li class="p-service-top__list">
                        <span>店舗の運営をやめたいけどやめられない…</span>
                    </li>
                    <li class="p-service-top__list">
                        <span>現場を抜けたいがスタッフを雇用する余裕がない…</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- p-service-merit -->
    <section class="p-service-merit">
        <div class="p-service-merit__bg">
            <div class="p-service-merit__inner l-inner">
                <span class="p-service-merit__sub-title">リコシェの1on1事業コンサルティングなら…</span>
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
        <div class="p-service-case__inner l-inner">
            <div class="p-service-case__body">
                <ul class="p-service-case__items">
                    <li class="p-service-case__item" id="well-being01">
                        <picture class="p-service-case__item-img">
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img02.webp"
                                type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img02.jpg"
                                alt="飲食店で働く人のイメージ画像" width="683" height="385" loading="lazy">
                        </picture>
                        <div class="p-service-case__item-content">
                            <div class="p-service-case__item-title">
                                <div class="p-service-case__item-number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/case01.svg"
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
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img03.webp"
                                type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img03.jpg"
                                alt="飲食店で働く人のイメージ画像" width="683" height="385" loading="lazy">
                        </picture>
                        <div class="p-service-case__item-content">
                            <div class="p-service-case__item-title">
                                <div class="p-service-case__item-number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/case02.svg"
                                        alt="case02" width="67" height="58" loading="lazy">
                                </div>
                                <div class="p-service-case__item-lead">
                                    <div class="p-service-case__item-sub-lead">岐阜県のピザ屋さん
                                    </div>
                                    <div class="p-service-case__item-main-lead">月商ではなく、<br class="u-desktop">日商100万円達成！
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
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img04.webp"
                                type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img04.jpg"
                                alt="飲食店で働く人のイメージ画像" width="683" height="385" loading="lazy">
                        </picture>
                        <div class="p-service-case__item-content">
                            <div class="p-service-case__item-title">
                                <div class="p-service-case__item-number">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/case03.svg"
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

    <!-- p-service -->
    <section class="p-service">
        <div class="p-service__inner l-inner">
            <div class="p-service__en-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service-white.svg"
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
                <span class="p-service__main-title c-service-title">リコシェの1on1<br class="u-mobile">事業コンサルティングサービス</span>
            </h2>
            <div class="p-service__body">
                <ul class="p-service__items">
                    <li class="p-service__item">
                        <picture class="p-service__img">
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img05-sp.webp"
                                type="image/webp" media="(max-width: 768px)">
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img05.webp"
                                type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img05.png"
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
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img06-sp.webp"
                                type="image/webp" media="(max-width: 768px)">
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img06.webp"
                                type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img06.png"
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
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img07-sp.webp"
                                type="image/webp" media="(max-width: 768px)">
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img07.webp"
                                type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/service_img07.png"
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/flow-white.svg" alt="flow"
                    width="483" height="424" loading="lazy">
            </div>
            <h2 class="p-service-flow__title c-service-title">ヒアリングから役務提供の流れ
            </h2>
            <div class="p-service-flow__body">
                <ul class="p-service-flow__items">
                    <li class="p-service-flow__item">
                        <div class="p-service-flow__number">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/number01.svg"
                                alt="1" width="71" height="71" loading="lazy">
                        </div>
                        <div class="p-service-flow__box">
                            <picture class="p-service-flow__img">
                                <source
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/flow_img01.webp"
                                    type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/flow_img01.png"
                                    alt="Zoomにて初回ヒアリング" width="273" height="154" loading="lazy">
                            </picture>
                            <div class="p-service-flow__content">
                                <div class="p-service-flow__lead">Zoomにて初回ヒアリング</div>
                                <div class="p-service-flow__text">
                                    初めに、お客様とのコミュニケーションを深めるためにZoomを活用したヒアリングを行います。このセッションでは、お客様のビジネスに関する基本的な情報や課題、目標などをお伺いし、現状の把握を行います。
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-service-flow__item">
                        <div class="p-service-flow__number">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/number02.svg"
                                alt="2" width="71" height="71" loading="lazy">
                        </div>
                        <div class="p-service-flow__box">
                            <picture class="p-service-flow__img">
                                <source
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/flow_img02.webp"
                                    type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/flow_img02.png"
                                    alt="コンサルティングを実施できるかの確認" width="273" height="154" loading="lazy">
                            </picture>
                            <div class="p-service-flow__content">
                                <div class="p-service-flow__lead">コンサルティングを実施できるかの確認</div>
                                <div class="p-service-flow__text">
                                    ヒアリングの結果をもとに、コンサルタントが提供可能なサービスや支援内容を明確に提示いたします。お客様の課題や目標に対して、どのようなアプローチでサポートできるかを具体的に説明し、お客様の期待に添えるかどうかを確認いたします。
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/voice-white.svg" alt="voice"
                    width="369" height="396" loading="lazy">
            </div>
            <h2 class="p-service-voice__title">
                <span class="p-service-voice__sub-title c-service-sub16">お客様の声</span>
                <span class="p-service-voice__main-title c-service-title">「効率が上がった」「楽になった」<br>
                    等の声が寄せられています</span>
            </h2>
            <div class="p-service-voice__body">
                <ul class="p-service-voice__items">
                    <li class="p-service__item">
                        <picture class="p-service__img">
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/voice_img01.webp"
                                type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/voice_img01.jpg"
                                alt="お客様の声" width="220" height="220" loading="lazy">
                        </picture>
                        <div class="p-service__message">
                            <div class="p-service__lead">これまで大変だった〇〇〇〇が〇〇〇〇になりました！</div>
                            <div class="p-service__text">
                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストす説明テキストが入ります説明テキストが入ります説明テキストが入ります。
                            </div>
                            <div class="p-service__name">〇〇業界　K様</div>
                        </div>
                    </li>
                    <li class="p-service__item">
                        <picture class="p-service__img">
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/voice_img02.webp"
                                type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/voice_img02.jpg"
                                alt="お客様の声" width="220" height="220" loading="lazy">
                        </picture>
                        <div class="p-service__message">
                            <div class="p-service__lead">これまで大変だった〇〇〇〇が〇〇〇〇になりました！</div>
                            <div class="p-service__text">
                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストす説明テキストが入ります説明テキストが入ります説明テキストが入ります。
                            </div>
                            <div class="p-service__name">〇〇業界　K様</div>
                        </div>
                    </li>
                    <li class="p-service__item">
                        <picture class="p-service__img">
                            <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/images/below/voice_img03.webp"
                                type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/voice_img03.jpg"
                                alt="お客様の声" width="220" height="220" loading="lazy">
                        </picture>
                        <div class="p-service__message">
                            <div class="p-service__lead">これまで大変だった〇〇〇〇が〇〇〇〇になりました！</div>
                            <div class="p-service__text">
                                説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストす説明テキストが入ります説明テキストが入ります説明テキストが入ります。
                            </div>
                            <div class="p-service__name">〇〇業界　K様</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- p-service-price -->
    <section class="p-service-price">
        <div class="p-service-price__inner l-inner">
            <div class="p-service__en-title">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/price-white.svg" alt="price"
                    width="415" height="362" loading="lazy">
            </div>
            <h2 class="p-service-price__title c-service-title">コンサルティング料金
            </h2>
            <div class="p-service-price__body">
                <div class="p-service-price__label">
                    <p class="p-service-price__label30">初期費用</p>
                    <p class="p-service-price__label36">30,000円</p>
                    <small class="p-service-price__label18">（税抜）</small>
                </div>
                <div class="p-service-price__box">
                    <p class="p-service-price__label30">月額費用</p>
                    <small class="p-service-price__label18">（半年更新）</small>
                    <p class="p-service-price__label36">ご希望のプランごとの金額</p>
                    <p class="p-service-price__label16">※詳しくはZoomにてご説明いたします</p>
                </div>
            </div>
        </div>
    </section>

    <!-- p-service-faq -->
    <section class="p-service-faq">
        <div class="p-service-faq__inner l-inner">
            <h2 class="p-service-faq__title">
                <span class="p-service-faq__sub-title">よくあるご質問</span>
                <span class="p-service-faq__main-title">よくご質問いただく内容をご紹介します</span>
            </h2>
            <div class="p-service-faq__body">
                <ul class="p-service-faq__items">
                    <li class="p-service__item">
                        <div class="p-service__lead">
                            <span>Q1.</span>
                            <p>店舗事業だけでなく通販のコンサルティングも相談可能ですか？</p>
                        </div>
                        <div class="p-service__text">はい。お客様がご希望の場合は、通販事業に関してもコンサルティング提供可能です。
                        </div>
                    </li>
                    <li class="p-service__item">
                        <div class="p-service__lead">
                            <span>Q2.</span>
                            <p>料金や決済についてご相談可能でしょうか？</p>
                        </div>
                        <div class="p-service__text">
                            Zoomでの面談の際に、お客様のご要望に合わせて料金体系をご提示可能ですのでご安心ください。また決済についても、分割決済などに対応しております。
                        </div>
                    </li>
                    <li class="p-service__item">
                        <div class="p-service__lead">
                            <span>Q3.</span>
                            <p>コンサル内容が自分にあっているか心配です</p>
                        </div>
                        <div class="p-service__text">
                            具体的なコンサル内容については、Zoomヒアリングを通してお客様一人ひとりに合った最適なプランをご説明しております。さらに返金保証もお付けしておりますのでご安心ください。
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!-- p-below-download -->
    <?php get_template_part('template/below-download'); ?>

</main>
<?php get_footer(); ?>