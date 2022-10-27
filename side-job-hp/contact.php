<!-- header読み込み -->
<?php include "include/header.php" ?>

        <main>
            <div class="contact page__wrapper">          
                <h2 class="page__title" title="お問い合わせ">Contact</h2>
                <img class="page__img" src="img/contact__bg.png" alt="">

                <div class="contact__inner">
                    <p class=contact__info>株式会社テックコーポレートに関するお問い合わせ、ご不明な点やご相談がございましたら、<br>
                        下記フォームからお気軽にお問い合わせください。</p>
                    <div class="form">
                        <div class="form__item">
                            <p class="form__lavel">お名前<span class="form__required">*</span></p>
                            <input type="text" class="form__input" placeholder="佐藤 太郎">
                        </div>
                        <div class="form__item">
                            <p class="form__lavel">会社名<span class="form__required">*</span></p>
                            <input type="text" class="form__input" placeholder="株式会社テックコーポレート">
                        </div>
                        <div class="form__item">
                            <p class="form__lavel">部署名<span class="form__required">*</span></p>
                            <input type="text" class="form__input" placeholder="経営企画部">
                        </div>
                        <div class="form__item">
                            <p class="form__lavel">電話番号<span class="form__required">*</span></p>
                            <input type="email" class="form__input" placeholder="180−1234−5678">
                        </div>
                        <div class="form__item">
                            <p class="form__lavel">メールアドレス<span class="form__required">*</span></p>
                            <input type="email" class="form__input" placeholder="XXX@XXX.XX">
                        </div>
                        <div class="form__item">
                            <p class="form__lavel isMsg">お問い合わせ内容<span class="form__required">*</span></p>
                            <textarea class="form__textarea" placeholder="内容を入力してください"></textarea>
                        </div>
                        <input type="submit" class="form__btn" value="送信する">
                    </div>
                </div>
            </div>  

        </main>

        <!-- footer読み込み -->
        <?php include "include/footer.php" ?>

    </body>
</html>


