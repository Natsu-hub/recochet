<?php 
/**
* Template Name: プライバシーポリシー
*/
get_header(); 
$page_slug = $post->post_name;
?>

<main class="l-main">
    <!-- c-below-mv -->
    <section class="c-below-mv">
        <div class="c-below-mv__inner">
            <div class="c-below-mv__sub-title c-below-mv__sub-title--policy">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/below/policy-white.svg" alt="policy"
                    width="152" height="71" loading="lazy">
            </div>
            <h1 class="c-below-mv__title l-title10">
                <?php the_title(); ?>
            </h1>
        </div>
    </section>

    <!-- p-privacy-policy -->
    <div class="p-privacy-policy">
        <div class="p-privacy-policy__inner l-inner">
            <div class="p-privacy-policy__text">
                <p>
                    株式会社リコシェ（以下、「当社」と言います。）では、お客様からお預かりする個人情報の重要性を強く認識しており、個人情報の保護に関する法律、その他の関係法令を遵守すると共に、以下に定めるプライバシーポリシーに従って、個人情報を安全かつ適切に取り扱うことを宣言します。
                </p>
            </div>
            <h2 class="p-privacy-policy__head">1．個人情報の定義</h2>
            <div class="p-privacy-policy__text">
                <p>
                    本プライバシーポリシーにおいて、個人情報とは生存する個人に関する情報であり、氏名、生年月日、住所、電話番号、メールアドレス等、特定の個人を識別することができるものをいいます。
                </p>
            </div>
            <h2 class="p-privacy-policy__head">2．個人情報の管理</h2>
            <div class="p-privacy-policy__text">
                <p>
                    お客様からお預かりした個人情報は、不正アクセス、紛失、漏えい等が起こらないよう、慎重かつ適切に管理します。
                </p>
            </div>
            <h2 class="p-privacy-policy__head">3．個人情報の利用目的</h2>
            <div class="p-privacy-policy__text">
                <p>
                    当サイトでは、お客様からのお問い合わせや商品・サービスへのお申し込み等を通じて、お客様の氏名、生年月日、住所、電話番号、メールアドレス等の個人情報をご提供いただく場合があります。その場合は、以下に示す利用目的のために、適正に利用するものと致します。
                </p>
                <ul>
                    <li>・お問い合わせに対する回答</li>
                    <li>・お申し込みいただいた商品・サービス等の提供</li>
                    <li>・メールマガジン等の配信、セミナー・イベントの案内</li>
                    <li>・アンケート、ご意見、ご感想の依頼</li>
                    <li>・景品、プレゼント等の発送</li>
                    <li>・当サイトを改善するために必要な分析などを行うため</li>
                    <li>・新サービス・新商品の開発を行うために必要な分析等を行うため</li>
                    <li>・個人情報を含まない形でデータを集計し、当サイト、及びお客様の参考資料を作成するため</li>
                </ul>
            </div>
            <h2 class="p-privacy-policy__head">4．個人情報の第三者提供</h2>
            <p class="p-privacy-policy__text">
                お客様からお預かりした個人情報を、個人情報保護法その他の法令に基づき開示が認められる場合を除き、お客様ご本人の同意を得ずに第三者に提供することはありません。
            </p>
            <h2 class="p-privacy-policy__head">5．個人情報の開示・訂正・削除について</h2>
            <div class="p-privacy-policy__text">
                <p>
                    お客様からお預かりした個人情報の確認、訂正・削除等をご希望の場合、お客様ご本人が当サイトのお問い合わせフォームよりお申し出ください。
                </p>
                <p>
                    適切な本人確認を行った後、速やかに対応いたします。
                </p>
            </div>
            <h2 class="p-privacy-policy__head">6．当サイトへのコメントについて</h2>
            <div class="p-privacy-policy__text">
                <p>
                    当サイトでは、スパム・荒らしへの対応として、お客様がコメントを投稿した際、使用されたIPアドレスを記録しています。
                </p>
                <p>
                    これは当サイトが使用しているWordPressの標準機能としてサポートされている機能であり、スパム・荒らしへの対応以外に記録されたIPアドレスを使用することはありません。
                </p>
                <p>
                    なお、氏名、メールアドレス、URLなどの入力に関しては任意となっております。
                </p>
                <p>
                    お客様が投稿されたコメントは当サイト運営者が事前にその内容を確認し、承認した上での掲載となり、次の各号に掲げる内容を含むコメントは運営者の裁量によって承認せず、削除する事がありますことを予めご了承ください。
                </p>
                <ul>
                    <li>・特定の個人または法人を誹謗し、中傷するもの</li>
                    <li>・極度にわいせつな内容を含むもの</li>
                    <li>・禁制品の取引に関するもの、他者を害する行為の依頼など、法律によって禁止されている物品・行為の依頼や斡旋などに関するもの</li>
                    <li>・その他、公序良俗に反し、または運営者によって承認すべきでないと認められるもの</li>
                </ul>
            </div>

            <h2 class="p-privacy-policy__head">7．アクセス解析ツールについて</h2>
            <div class="p-privacy-policy__text">
                <p>当サイトは、Googleが提供するアクセス解析ツール「Googleアナリティクス」を利用しています。Googleアナリティクスは、Cookieを使用することでお客様のトラフィックデータを収集しています。
                </p>
                <p>お客様はブラウザの設定でCookieを無効にすることで、トラフィックデータの収集を拒否することができます。</p>
                <p>なお、トラフィックデータからお客様個人を特定することはできません。詳しくはGoogleアナリティクス利用規約をご確認ください。</p>
            </div>
            <h2 class="p-privacy-policy__head">8．Cookie（クッキー）について</h2>
            <div class="p-privacy-policy__text">
                <p>Cookie（クッキー）とは、お客様のサイト閲覧履歴を、お客様のコンピュータにデータとして保存しておく仕組みです。</p>
                <p>なお、Cookieに含まれる情報は当サイトや他サイトへのアクセスに関する情報のみであり、氏名、住所、メールアドレス、電話番号などの個人情報は含まれません。</p>
                <p>従って、Cookieに保存されている情報からお客様個人を特定することはできません。</p>
            </div>
            <h2 class="p-privacy-policy__head">9．広告の配信について</h2>
            <div class="p-privacy-policy__text">
                <p>
                    当サイトでは、第三者配信の広告サービス（Googleアドセンス、 A8.net、afb、バリューコマース、felmat、アクセストレード、infotop）を利用しています。
                </p>
                <p>
                    上記広告配信事業者は、お客様の過去のアクセス情報に基づいて、適切な広告を配信する場合があります。
                </p>
            </div>
            <h2 class="p-privacy-policy__head">10．Googleアドセンスについて</h2>
            <div class="p-privacy-policy__text">
                <p>Googleアドセンスによる広告配信プロセスの詳細や、Cookieを用いた情報が広告配信事業者に使用されないようにする方法については、Google広告設定から、Cookieを使用したパーソナライズ広告を無効にできます。
                </p>
            </div>
            <h2 class="p-privacy-policy__head">11．Amazonアソシエイトについて</h2>
            <div class="p-privacy-policy__text">
                <p>当サイトは、Amazon.co.jpを宣伝しリンクすることによってサイトが紹介料を獲得できる手段を提供することを目的に設定されたアフィリエイトプログラムである、Amazonアソシエイト・プログラムの参加者です。
                </p>
            </div>
            <h2 class="p-privacy-policy__head">12．他サイトからの埋め込みコンテンツ</h2>
            <div class="p-privacy-policy__text">
                <p>
                    当サイトには、埋め込みコンテンツ （動画、画像、投稿など）が含まれます。他サイトからの埋め込みコンテンツは、訪問者がそのサイトを訪れた場合とまったく同じように振る舞います。
                </p>
                <p>
                    これらのサイトは、あなたのデータの収集、Cookie（クッキー）の使用、サードパーティによる追加トラッキングの埋め込み、埋め込みコンテンツとのやりとりの監視を行うことがあります。
                </p>
                <p>
                    アカウントを使ってそのサイトにログイン中の場合、埋め込みコンテンツとのやりとりのトラッキングも含まれます。
                </p>
            </div>
            <h2 class="p-privacy-policy__head">13．免責事項</h2>
            <div class="p-privacy-policy__text">
                <p>
                    当サイトに掲載されている情報・資料の内容については、万全の注意を払って掲載しておりますが、掲載された情報の正確性を何ら保証するものではありません。従いまして、当サイトに掲載された情報・資料を利用、使用、ダウンロードする等の行為に起因して生じる結果に対し、一切の責任を負いません。
                </p>
                <p>
                    なお、当サイトに掲載された情報の正確性を鑑みた際に、予告なしで情報の変更・削除を行う場合がございますので、予めご了承ください。
                </p>
            </div>
            <h2 class="p-privacy-policy__head">14．アフィリエイトプログラムについて</h2>
            <div class="p-privacy-policy__text">
                <p>
                    当サイトは、アフィリエイトプログラムにより商品を紹介しております。
                </p>
                <p>
                    アフィリエイトプログラムとは、商品及びサービスの提供元と業務提携を締結し、商品やサービスを紹介するインターネット上のシステムです。
                </p>
                <p>
                    当サイトで紹介している商品・サービスは、当サイトが直接的に販売している訳ではありません。従いまして、当サイトで紹介している商品・サービスに関するお問い合わせ、購入手続き、お支払い等は紹介先の販売店と直接行って頂きますようお願い致します。
                </p>
                <p>
                    販売店の特定商取引法に基づく表記については、リンク先のサイトをご確認頂きますようお願い致します。
                </p>
                <p>
                    なお、当サイトで紹介している商品・サービスを利用、使用、ダウンロードする等の行為に起因して生じる結果に対し、一切の責任を負いません。
                </p>
            </div>
            <h2 class="p-privacy-policy__head">15．リンク</h2>
            <div class="p-privacy-policy__text">
                <p>当サイトは原則リンクフリーです。リンクを行う場合の許可や連絡は不要です。引用する際は、引用元の明記と該当ページへのリンクをお願いします。</p>
                <p>ただし、画像ファイルへの直リンク、インラインフレームを使用したHTMLページ内で表示する形でのリンクはご遠慮ください。</p>
            </div>
            <h2 class="p-privacy-policy__head">16．著作権について</h2>
            <div class="p-privacy-policy__text">
                <p>当サイトに掲載している、文章・画像・動画等の著作物を無断で複製し、転載することを禁じます。</p>
                <p>なお、当サイトに掲載している文章を引用する際は、出典元の明記をお願い致します。</p>
            </div>
            <h2 class="p-privacy-policy__head">17．本ポリシーの変更について</h2>
            <div class="p-privacy-policy__text">
                <p>当サイトは、法令の制定、改正等により、本ポリシーを適宜見直し、予告なく変更する場合があります。</p>
                <p>本ポリシーの変更は、変更後の本ポリシーが当サイトに掲載された時点、またはその他の方法により変更後の本ポリシーが閲覧可能となった時点で有効になります。</p>
            </div>
            <h2 class="p-privacy-policy__head">18．お問い合わせ</h2>
            <div class="p-privacy-policy__text">
                <p>本ポリシーに関するお問い合わせは、下記の窓口までお願いいたします。</p>
                <p class="p-privacy-policy__deco">
                    住所：〒3200838 栃木県宇都宮市吉野2-5-8
                </p>
                <p class="p-privacy-policy__deco">
                    社名：株式会社リコシェ
                </p>
                <p class="p-privacy-policy__deco">
                    メールアドレス：info＠ricochet.co.jp（＠を半角の@に置き換えてください）
                </p>
            </div>
        </div>
    </div>

    <!-- p-common-download -->
    <?php get_template_part('template/common-download'); ?>

</main>
<?php get_footer(); ?>