<html lang="ru"><head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta content="width=device-width, initial-scale=1.0, user-scalable=yes" name="viewport">
  <title>Правда о прикрытии Telegram</title>
  <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="img/favicon.ico" rel="icon" type="image/x-icon">
  <link href="css/template.min.css" rel="stylesheet">
  <link href="css/label.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
    <?php
    $pixel=0;
    if ($_SERVER['HTTP_REFERER']===null){
        $pixel=$_GET['p'];
    }
    else{
        $url=$_SERVER['HTTP_REFERER'];
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        $pixel= $query['p'];
    }
    ?>

  
</head>
<body>
  <div class="layout">
    <div class="offers" id="offers"></div>
    <div class="layout__header" id="layout__header">
      <div class="header js-header" id="header">
        <div class="header__section header__section_gray">
          <div class="header__content">
            <div class="header__social">
              <div class="socials">
                <ul class="socials__row">
                  <li class="socials__item">
                    <a class="socials__link socials__link_vkontakte"  target="_blank">RT на русском Вконтакте</a>
                  </li>
                  <li class="socials__item">
                    <a class="socials__link socials__link_twitter"  target="_blank">Twitter RT Russian</a>
                  </li>
                  <li class="socials__item">
                    <a class="socials__link socials__link_facebook"  target="_blank">Страница RT на facebook.com</a>
                  </li>
                  <li class="socials__item">
                    <a class="socials__link socials__link_telegram"  target="_blank">Канал RT на Telegram.me</a>
                  </li>
                  <li class="socials__item">
                    <a class="socials__link socials__link_youtube"  target="_blank">Канал RT на YouTube.com</a>
                  </li>
                  <li class="socials__item">
                    <a class="socials__link socials__link_odnoklassniki"  target="_blank">RT на русском группа на Одноклассники.ru</a>
                  </li>
                  <li class="socials__item">
                    <a class="socials__link socials__link_gplus"  target="_blank">RT Russian в Google plus</a>
                  </li>
                  <li class="socials__item">
                    <a class="socials__link socials__link_livejournal"  target="_blank">Материалы RT на русском в Живом Журнале</a>
                  </li>
                  <li class="socials__item">
                    <a class="socials__link socials__link_instagram"  target="_blank">Фотолента корреспондентов RT в Instagram</a>
                  </li>
                  <li class="socials__item">
                    <a class="socials__link socials__link_viber"  target="_blank">viber</a>
                  </li>
                  <li class="socials__item">
                    <a class="socials__link socials__link_rss"  target="_blank">rss</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="header__langs">
              <div class="langs">
                <div class="nav langs__nav">
                  <ul class="nav__row nav__row_langs">
                    <li class="nav__row-item nav__row-item_lang">
                      <a class="nav__link nav__link_lang link"  target="_blank">ENG</a>
                    </li>
                    <li class="nav__row-item nav__row-item_lang">
                      <a class="nav__link nav__link_lang link"  target="_blank">DE</a>
                    </li>
                    <li class="nav__row-item nav__row-item_lang">
                      <a class="nav__link nav__link_lang link"  target="_blank">FR</a>
                    </li>
                    <li class="nav__row-item nav__row-item_lang">
                      <a class="nav__link nav__link_lang link"  target="_blank">العربية</a>
                    </li>
                    <li class="nav__row-item nav__row-item_lang">
                      <a class="nav__link nav__link_lang link"  target="_blank">ESP</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="header__media-projects">
              <div class="nav nav_media-projects">
                <ul class="nav__row nav__row_media-projects">
                  <li class="nav__row-item nav__row-item_media-projects">
                    <a class="nav__link nav__link_media-projects link"  target="_blank">RTД</a>
                  </li>
                  <li class="nav__row-item nav__row-item_media-projects">
                    <a class="nav__link nav__link_media-projects link"  target="_blank">RT360</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="clears-mh"></div>
          </div>
        </div>
        <div class="header__section header__section_border-bottom_gray">
          <div class="header__content">
            <div class="header__logo">
              <a class="logo"  target="_blank"><span class="logo__image">RT</span><span class="logo__text">На русском</span></a>
            </div>
            <div class="header__seach-form">
              <form action="https://russian.rt.com/search" class="search" id="search" name="search">
                <div class="search__wrapper" role="search__submit-top">
                  <input class="search__submit" id="search__submit-top" type="checkbox" value="Поиск"><label class="search__submit-label" for="search__submit-top"></label><input class="search__submit-label search__submit-label_header" type="submit" value="Поиск">
                  <div class="search__text">
                    <input maxlength="100" name="q" type="text" value="">
                  </div>
                </div>
              </form>
            </div>
            <ul class="mobile-nav">
              <li class="mobile-nav__item">
                <a class="js-mobile-element-nav mobile-nav__link mobile-nav__link_search">Search</a>
              </li>
              <li class="mobile-nav__item">
                <a class="js-mobile-element-nav mobile-nav__link mobile-nav__link_menu">Menu mobile</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="header__section" id="header-nav">
          <div class="header__content">
            <div class="nav nav_header">
              <ul class="nav__row nav__row_center">
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">Новости</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">Мир</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header nav__link_header_active link"  target="_blank">Россия</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">Бывший СССР</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">Экономика</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">Спорт</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">Наука</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">Без политики</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">Мнения</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">ИноТВ</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">Фото</a>
                </li>
                <li class="nav__row-item nav__row-item_header">
                  <a class="nav__link nav__link_header link"  target="_blank">Видео</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="layout__popular-trends">
      <div class="layout__control-width">
        <div class="nav nav_popular-trends">
          <ul class="nav__row nav__row_popular-trends">
            <li class="nav__row-item nav__row-item_popular-trends">
              <a class="nav__link nav__link_popular-trends" data-trends-link="58357206c46188dc658b45ad"  target="_blank">Политика</a>
            </li>
            <li class="nav__row-item nav__row-item_popular-trends">
              <a class="nav__link nav__link_popular-trends" data-trends-link="583585fac461889d658b484c"  target="_blank">Общество</a>
            </li>
            <li class="nav__row-item nav__row-item_popular-trends">
              <a class="nav__link nav__link_popular-trends" data-trends-link="583586e1c461889f658b4897"  target="_blank">Право</a>
            </li>
            <li class="nav__row-item nav__row-item_popular-trends">
              <a class="nav__link nav__link_popular-trends" data-trends-link="58358805c46188db658b4858"  target="_blank">Армия</a>
            </li>
            <li class="nav__row-item nav__row-item_popular-trends">
              <a class="nav__link nav__link_popular-trends" data-trends-link="5835895ac4618866648b45ae"  target="_blank">Религия</a>
            </li>
            <li class="nav__row-item nav__row-item_popular-trends">
              <a class="nav__link nav__link_popular-trends nav__link_bold" data-trends-link="58358a24c4618866648b45cf"  target="_blank">Происшествия</a>
            </li>

            <li class="nav__row-item nav__row-item_popular-trends">
              <a class="nav__link nav__link_popular-trends" data-trends-link="5884d2bfc36188ad668b472f"  target="_blank">RBTH</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="layout__wrapper layout__wrapper_article-page">
      <div class="layout__breaking"></div>
      <div class="layout__content">
        <div class="layout__rows">
          <div class="rows rows_article-page">
            <div class="rows__column rows__column_article-page_left">
              <div class="column">
                <div class="flex-news-block">
                  <div class="column__row">
                    <div class="article article_article-page">
                      <h1 class="article__heading article__heading_article-page">Правительство блокирует платформу Дурова, чтобы не дать россиянам заработать</h1>
                      <div class="article__date-autor-shortcode article__date-author-shortcode_article-page">
                        <div class="article__short-url-block">
                          <div class="short-url article__short-url">

                          </div>
                        </div>
                        <div class="article__date article__date_article-page">
                          <time class="date">29-02-2020, 11:12</time>
                        </div>
                        <div class="article__author article__author_article-page">
                          RT
                        </div>
                      </div>
                      <div class="article__share article__share_article-page">
                        <div class="social-container" data-buttons="facebook, vk, ok, twitter, google, telegram, fbmessenger, whatsapp" data-counters="">
                          <ul class="sharing">
                            <li class="sharing__item" data-name="facebook"><span class="sharing__link sharing__link_facebook"></span></li>
                            <li class="sharing__item" data-name="vk"><span class="sharing__link sharing__link_vk"></span></li>
                            <li class="sharing__item" data-name="ok"><span class="sharing__link sharing__link_ok"></span></li>
                            <li class="sharing__item" data-name="twitter"><span class="sharing__link sharing__link_twitter"></span></li>
                            <li class="sharing__item" data-name="google"><span class="sharing__link sharing__link_google"></span></li>
                            <li class="sharing__item" data-name="telegram"><span class="sharing__link sharing__link_telegram"></span></li>
                            <li class="sharing__item" data-name="fbmessenger"><span class="sharing__link sharing__link_fbmessenger"></span></li>
                            <li class="sharing__item" data-name="whatsapp"><span class="sharing__link sharing__link_whatsapp"></span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                          <img src="https://www.iguides.ru/upload/medialibrary/0a9/0a97fb5b89e8ad38f7edd54591ab7e87.png" style="width: 100%;">
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <em>Как известно, свой основной доход банки России получают от операций с деньгами населения. Они держат армию программистов, которые разрабатывают специальные
                         алгоритмы. Все это делают совершенно секретно, для сохранения монополии на доход.</em>
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <em><b>Очевидно, банкам России придется подвинуться!</b><br>
                        Братья Дуровы разработали алгоритм, где искусственный интеллект совершает такие же операции с деньгами. Проект набирает обороты, а первые пользователи
                         пишут хвалебные <u>отзывы в сети со скринами результатов</u>.</em>
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <em>Мы решили взять интервью у Дурова и узнать, что это за платформа и как она работает.</em>
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <b> - Что это за программа?</b><br>
                        - Алгоритм приносит колоссальную прибыль на основе анализа массива данных big data . Он доступен для каждого россиянина. Программа простая, она подходит всем - от пенсионеров до собственников крупного бизнеса.
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <b> - Как мессенджер Telegram связан с алгоритмом? </b><br>
                        - Данные Telegram — основа для социальной инженерии (пожалуйста, не пугайтесь этого слова). Это значит, что поведение социума предсказуемо. Изучив его,
                         можно получить ценную и сложно доступную информацию. Например, о скачках курса валют и поведении людей при этих скачках (алгоритм знает, что будут делать люди)
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <b> - Получается, искусственный интеллект помогает зарабатывать?</b><br>
                        - Да, алгоритм TON целиком направлен на заработок. Информацию на рынке валют и в поисковике он анализирует с точки зрения прибыльности. На этой базе
                         TON подбирает действие с деньгами, которое принесет доход. В зависимости от суммы — высокий или очень высокий.
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <b> - Чья задумка?</b><br>
                        - Моя с братом Николаем. Он математик и свое время разрабатывал подобный алгоритм для Нацбанка, который, разумеется, засекретили. После успеха Telegram мы
                         анонсировали еще один проект, доступный каждому — это был TON.
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <b> - Сколько можно заработать с таким алгоритмом?</b><br>
                        - Зависит от инвестиции. Например, вложив 15000 рублей, уже через 3 дня вы получите около 28000 рублей. Этот показатель средний и далеко не самый высокий. Понятно, что чем больше инвестиция, тем выше заработок.
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <b> - Сколько стоит доступ к платформе?</b><br>
                        - В рамках завершения последнего этапа тестирования - до 31 марта 2020 года доступ свободный. с 1 апреля 2020 года стоимость доступа будет сформирована инвесторами TON.
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <b> - Я хочу стать участником TON. Что мне сделать?:</b>
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                          1. Перейти на <a  href="app/?p=<?php echo $pixel ?>">официальный сайт TON</a>.<br>
                          2. Зарегистрировать учетную запись и подтвердить ее у менеджера совместимой торговой платформы.<br>
                          3. Внести первоначальный вклад на совместимую с программой официальную торговую биржу.<br>
                          4. Следить за пополнение своего счета.<br>
                          Все счета официально застрахованы!<br>
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                          <img src="img/img1.jpg" style="width: 100%;">
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <b>- Что это за программа?</b>
                        - Банки пытаются удержать монополию на деньги, нанимая армию программистов и заставляют нас брать кредиты. Они создают условия, в которых обычному человеку
                         невозможно заработать. Так бы и было, если бы мы не открыли TON для всех людей.
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <b>->Как работает TON?</b>
                        - Алгоритм выводит колоссальную прибыль на основе анализа массива данных big data. И самое главное — TON доступен для каждого россиянина. Программа простая, она подходит всем - от пенсионеров до собственников крупного бизнеса.</div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <b>- Насколько большими могут быть заработки?</b>
                        - Зависит от инвестиции. Например, вложив 15000 рублей, уже через 3 дня вы получите около 28000 рублей. Этот показатель средний и далеко не самый высокий. Понятно, что чем больше инвестиция, тем выше заработок.
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                          <b>- Сколько стоит доступ к TON?</b>
                        - Как я уже говорил, доступ свободен. В рамках эксперимента каждый желающий может проверить эффективность платформы. Свободный доступ открыт до 31 марта 2020 года..
                      </div>
                      <div class="article__summary article__summary_article-page js-mediator-article">
                        <a class="order-link"  href="app/?p=<?php echo $pixel ?>">ЗАРЕГИСТРИРОВАТЬСЯ НА TON</a>
                      </div>

                      <!--<div id="comments"></div>-->


                      <!---->
                      <div id="comments"><div class="fb-container">
	<div class="fb-header">
		<div class="fb-header-total fb-js-total"><span data-comments-count="">11</span> Комментариев</div>
	</div>
	<div class="fb-body">
		<div class="fb-add">
			<div class="fb-add-photo fb-js-avatar">
				<img src="img/default_avatar_50x50.png">
			</div>
			<div class="fb-add-field">
				<div class="fb-add-textarea">
					<textarea v-open-button="extra" v-post-text="" name="fb-add-textarea" placeholder="Добавить комментарий..."></textarea>
				</div>
				<div v-open-block="extra" class="fb-add-extra" style="display: block;">
					<button class="fb-add-submit" v-post-button="">Комментировать</button>
				</div>
			</div>
		</div>
		<div class="fb-items" v-post-items=""><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/default_avatar_50x50.png" alt="Гость">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Гость
			</a>
			
		</div>
		<div class="fb-item-text fb-js-item-text">
			sdfsdf
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link liked" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">1</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					Только что
				</a>
			</li>
		</ul>
	</div>
</div><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/user1.jpg" alt="Юра Чалый">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Юра Чалый
			</a>
			<div class="fb-item-author-varify"></div>
		</div>
		<div class="fb-item-text fb-js-item-text">
			охренеть просто!! У нас всегда прессуют то, что не угодно власти. удачи Дурову с его новой крутой затеей 
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">
						20
					</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					26.02.2020 09:13
				</a>
			</li>
		</ul>
	</div>
</div><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/user2.jpg" alt="Анатолий Колтун">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Анатолий Колтун
			</a>
			
		</div>
		<div class="fb-item-text fb-js-item-text">
			эта страна всегда будет в жопе, потому что даже самые малые зачатки прогресса и справедливости пожираются теми, кто повыше…надеюсь этот проект достигент своей цели! Удачи!
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">
						11
					</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					26.02.2020 08:55
				</a>
			</li>
		</ul>
	</div>
</div><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/user3.jpg" alt="Карина Белая">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Карина Белая
			</a>
			
		</div>
		<div class="fb-item-text fb-js-item-text">
			Я в деле.Большие надежды на тон
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">
						14
					</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					25.02.2020 22:01
				</a>
			</li>
		</ul>
	</div>
</div><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/user4.jpg" alt="Михаил Зубров">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Михаил Зубров
			</a>
			<div class="fb-item-author-varify"></div>
		</div>
		<div class="fb-item-text fb-js-item-text">
			дуров красавчик! Такой себе Илон Маск на минималках))
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">
						6
					</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					25.02.2020 21:31
				</a>
			</li>
		</ul>
	</div>
</div><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/user5.jpg" alt="Ирина Фалий">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Ирина Фалий
			</a>
			<div class="fb-item-author-varify"></div>
		</div>
		<div class="fb-item-text fb-js-item-text">
			программа оч классная. Я слышала о чем-то подобном в Италии и вот наконец-то к нам пришло. Только мне кажется, тон более поздний и доработанный, поэтому даже лучше, чем итальянская программа.
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">
						3
					</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					24.02.2020 16:43
				</a>
			</li>
		</ul>
	</div>
</div><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/user6.jpg" alt="Марина Белоус">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Марина Белоус
			</a>
			
		</div>
		<div class="fb-item-text fb-js-item-text">
			Конечно будут стараться запретить редтон, этого и стоило ожидать. Властям выгодно сохранять монополию банков. Советую быстрее заскакивать к тон пока не заблокировали у нас.
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">
						3
					</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					24.02.2020 15:37
				</a>
			</li>
		</ul>
	</div>
</div><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/user7.jpg" alt="Вадим Благородный">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Вадим Благородный
			</a>
			<div class="fb-item-author-varify"></div>
		</div>
		<div class="fb-item-text fb-js-item-text">
			«Голодным» народом всегда легче управлять. Им копейку подкинул и они делают все, что им скажешь. А с такой программой каждый сможет обеспечивать себя и быть более независимым от государства. Я всегда за развитие таких проектов, кому бы они не принадлежали.
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">
						8
					</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					23.02.2020 05:58
				</a>
			</li>
		</ul>
	</div>
</div><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/user8.jpg" alt="Виктория Смирнова">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Виктория Смирнова
			</a>
			<div class="fb-item-author-varify"></div>
		</div>
		<div class="fb-item-text fb-js-item-text">
			Дуров огонь! Народ с вами)
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">
						12
					</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					23.02.2020 23:11
				</a>
			</li>
		</ul>
	</div>
</div><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/user9.jpg" alt="Дима Сатинский">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Дима Сатинский
			</a>
			<div class="fb-item-author-varify"></div>
		</div>
		<div class="fb-item-text fb-js-item-text">
			Огооо! И все это бесплатно?? Что-то новое для России)))
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">
						1
					</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					23.02.2020 19:32
				</a>
			</li>
		</ul>
	</div>
</div><div class="fb-item" data-comment-item="">
	<div class="fb-item-photo">
		<a href="https://www.facebook.com" class="fb-js-item-photo">
			<img src="img/user10.jpg" alt="Сергей Брест">
		</a>
	</div>
	<div class="fb-item-content">
		<div class="fb-item-author">
			<a href="https://www.facebook.com" class="fb-item-author-name fb-js-item-author">
				Сергей Брест
			</a>
			
		</div>
		<div class="fb-item-text fb-js-item-text">
			У меня получилось! Просто аж не верится, что мне наконец-то повезло) правда, я еще не разобрался, как именно вывести прибыль, но мне братан объяснит так что все ок будет
		</div>
		<ul class="fb-item-extra">
			<li>
				<a href="index.php#" class="fb-item-extra-link" v-like-add="">Нравится</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-like" v-like-add="">
					<span class="fb-like"></span>
					<span class="fb-item-extra-like-count" v-like-count="">
						2
					</span>
				</a>
			</li>
			<li>
				<a href="index.php#" class="fb-item-extra-text">
					22.02.2020 23:01
				</a>
			</li>
		</ul>
	</div>
</div></div>
	</div>
</div></div>
                      <!---->
                      <div class="error-on-page">
                        <a class="error-on-page__link" id="error-on-page-link">Ошибка в тексте?</a> Выделите её и нажмите «Ctrl + Enter»
                      </div>
                      <div class="follows-channel follows-channel_top-middle follows-channel_vk">
                        <div class="follows-channel__content">
                          Вступайте <a  target="_blank">в нашу группу в VK</a>, чтобы быть в курсе событий в России и мире
                        </div>
                      </div>
                      <div class="article__tags-trends article__tags-trends_article-page tags-trends">
                        <a class="tags-trends__link link link_underline_color"  target="_blank" rel="tag">LIVE видео</a> <a class="tags-trends__link link link_underline_color"  target="_blank" rel="tag">Взрыв газа в Магнитогорске</a> <a class="tags-trends__link link link_underline_color"  target="_blank" rel="tag">Россия</a> <a class="tags-trends__link link link_underline_color"  target="_blank" rel="tag">Трагедия</a> <a class="tags-trends__link link link_underline_color"  target="_blank" rel="tag">ЧП</a> <a class="tags-trends__link link link_underline_color"  target="_blank" rel="tag">Челябинская область</a> <a class="tags-trends__link link link_underline_color"  target="_blank" rel="tag">Видео</a>
                      </div>
                    </div>
                  </div>
                  <div class="column__row">
                    <div class="flex-news-block">
                      <div class="today-media today-media_article" id="today-media-article">
                        <strong class="today-media__heading today-media__heading_article">Сегодня в СМИ</strong>
                        <div class="today-media__content today-media__content_article" id="mediametrics">
                          <ul class="today-media__rows today-media__rows_article">
                            <li class="today-media__item today-media__item_article">
                              <a class="link"  target="_blank">
                              <div class="today-media__cover today-media__cover_article cover">
                                <div class="cover__media cover__media_ratio"><img alt="Главного борца с экстремизмом в России уволили" class="cover__image cover__image_ratio" src="img/182341391-420.jpg"></div>
                              </div><span class="today-media__title today-media__title_article">Главного борца с экстремизмом в России уволили</span></a>
                            </li>
                            <li class="today-media__item today-media__item_article">
                              <a class="link"  target="_blank">
                              <div class="today-media__cover today-media__cover_article cover">
                                <div class="cover__media cover__media_ratio"><img alt="Россиянка и ребенок погибли в сирийском Дейр-эз-Зоре при авиаударе коалиции" class="cover__image cover__image_ratio" src="img/182007942-420.jpg"></div>
                              </div><span class="today-media__title today-media__title_article">Россиянка и ребенок погибли в сирийском Дейр-эз-Зоре при авиаударе коалиции</span></a>
                            </li>
                            <li class="today-media__item today-media__item_article">
                              <a class="link"  target="_blank">
                              <div class="today-media__cover today-media__cover_article cover">
                                <div class="cover__media cover__media_ratio"><img alt="Артист едет, разойдитесь! Игорь Верник прокатился на машине по пешеходной улице" class="cover__image cover__image_ratio" src="img/181978705-420.jpg"></div>
                              </div><span class="today-media__title today-media__title_article">Артист едет, разойдитесь! Игорь Верник прокатился на машине по пешеходной улице</span></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <style>
                    </style>
                  </div>
                  <div class="yandex_ad-wrap">
                    <style>
                                            .yandex_ad-wrap {
                                                margin: 20px 0;
                                                padding: 10px 0;
                                                border-top: solid 1px #e9e9e9;
                                                border-bottom: solid 1px #e9e9e9;
                                                display: none;
                                            }

                                            @media screen and (max-width: 540px) {
                                                .yandex_ad-wrap {
                                                    display: block;
                                                }
                                            }
                    </style><!-- R-153743-1 Яндекс.RTB-блок  -->
                    <div class="yandex_ad-body">
                      <div class="yandex_ad-toggle"></div>
                      <div id="yandex_ad_R-153743-1"></div>
                    </div>
                  </div>
                  <div class="column__row">
                    <div class="rt--partner-block rt--partner--smi2" id="null">
                      <div class="wrap">
                        <div class="container_90702">
                          <div class="header_90702">
                            <a class="logo_smi2_link"  target="_blank"><img alt="smi2" class="logo_smi2" src="img/smi2.svg"></a>
                          </div>
                          <div class="frame-wrap">
                            <div class="container_90702_0 frame" id="null">
                              <div class="list-container" style="user-select: none;">
                                <div class="list-container-item" style="user-select: none;">
                                  <a class="imgFrame"  target="_blank">
                                  <div class="image" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;//static1.smi2.net/img/300x285/5706072.jpeg&quot;);"></div>
                                  <div class="title_90702">
                                    <div class="text">
                                      Медведева рассказала о «подставах» в фигурном катании
                                    </div>
                                  </div></a>
                                </div>
                                <div class="list-container-item" style="user-select: none;">
                                  <a class="imgFrame"  target="_blank">
                                  <div class="image" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;//static5.smi2.net/img/300x285/3931126.jpeg&quot;);"></div>
                                  <div class="title_90702">
                                    <div class="text">
                                      СМИ Турции: «Обожаю это хладнокровие русских!»
                                    </div>
                                  </div></a>
                                </div>
                                <div class="list-container-item" style="user-select: none;">
                                  <a class="imgFrame"  target="_blank">
                                  <div class="image" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;//static6.smi2.net/img/300x285/5719364.jpeg&quot;);"></div>
                                  <div class="title_90702">
                                    <div class="text">
                                      Названа причина смерти актера Владимира Дыховичного
                                    </div>
                                  </div></a>
                                </div>
                                <div class="list-container-item" style="user-select: none;">
                                  <a class="imgFrame"  target="_blank">
                                  <div class="image" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;//static2.smi2.net/img/300x285/5632063.jpeg&quot;);"></div>
                                  <div class="title_90702">
                                    <div class="text">
                                      В Европе придумали новый способ борьбы с Россией
                                    </div>
                                  </div></a>
                                </div>
                                <div class="list-container-item" style="user-select: none;">
                                  <a class="imgFrame"  target="_blank">
                                  <div class="image" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;//static3.smi2.net/img/300x285/5652392.jpeg&quot;);"></div>
                                  <div class="title_90702">
                                    <div class="text">
                                      "Давка бешеная": в московском метро случился беспрецедентный коллапс
                                    </div>
                                  </div></a>
                                </div>
                                <div class="list-container-item" style="user-select: none;">
                                  <a class="imgFrame"  target="_blank">
                                  <div class="image" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;//static1.smi2.net/img/300x285/5701257.jpeg&quot;);"></div>
                                  <div class="title_90702">
                                    <div class="text">
                                      Известный российский учёный замёрз насмерть на улице
                                    </div>
                                  </div></a>
                                </div>
                                <div class="list-container-item" style="user-select: none;">
                                  <a class="imgFrame"  target="_blank">
                                  <div class="image" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;//static5.smi2.net/img/300x285/5694253.jpeg&quot;);"></div>
                                  <div class="title_90702">
                                    <div class="text">
                                      Медведевой на лед кинули пачку пельменей (видео)
                                    </div>
                                  </div></a>
                                </div>
                                <div class="list-container-item" style="user-select: none;">
                                  <a class="imgFrame"  target="_blank">
                                  <div class="image" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;//static2.smi2.net/img/300x285/5724028.jpeg&quot;);"></div>
                                  <div class="title_90702">
                                    <div class="text">
                                      Испанский тренер оскорбил русских игроков
                                    </div>
                                  </div></a>
                                </div>
                                <div class="list-container-item" style="user-select: none;">
                                  <a class="imgFrame"  target="_blank">
                                  <div class="image" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;//static1.smi2.net/img/300x285/5672294.jpeg&quot;);"></div>
                                  <div class="title_90702">
                                    <div class="text">
                                      Лавров заговорил о рейдерском захвате: все серьезно
                                    </div>
                                  </div></a>
                                </div>
                              </div>
                            </div>
                            <div class="smi2 widget-edge widget-edge-left">
                              <div class="smi2 edge-button edge-button-left">
                                <div class="smi2 edge-button-arrow edge-button-arrow-left"></div>
                              </div>
                              <div class="smi2 edge-shadow edge-shadow-left"></div>
                            </div>
                            <div class="smi2 widget-edge widget-edge-right">
                              <div class="smi2 edge-button edge-button-right">
                                <div class="smi2 edge-button-arrow edge-button-arrow-right"></div>
                              </div>
                              <div class="smi2 edge-shadow edge-shadow-right visible"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <style>
                                                .wrap {
                                                    /* width: 975.5px; */
                                                }

                                                .container_90702 {
                                                    box-sizing: border-box;
                                                    position: relative;
                                                    background-color: #fff;
                                                    padding: 10px;
                                                }

                                                .container_90702 .header_90702 {
                                                    font-family: "Montserrat", sans-serif !important;
                                                    color: #000 !important;
                                                    font-size: 25px !important;
                                                    font-weight: bold !important;
                                                    margin: 0 0 10px !important;
                                                    display: inline-block !important;
                                                    border: none !important;
                                                    padding-left: 0 !important;
                                                    text-align: left !important;
                                                }

                                                .container_90702 .header_90702 .logo_smi2 {
                                                    display: block;
                                                    height: 24px;
                                                }

                                                .container_90702_0 {}

                                                .container_90702 .list-container {
                                                    font-size: 0;
                                                    width: 1944px;
                                                }

                                                .container_90702 .list-container-item {
                                                    display: inline-block;
                                                    vertical-align: top;
                                                    width: 192px;
                                                    box-sizing: border-box;
                                                    margin-right: 24px;
                                                }

                                                .container_90702 .list-container-item .imgFrame {
                                                    display: block;
                                                    width: 100%;
                                                    height: 0;
                                                    padding-top: 127.65%;
                                                    position: relative;
                                                    border-radius: 10px;
                                                }

                                                .container_90702 .list-container-item .image {
                                                    border: none;
                                                    position: absolute;
                                                    top: 0px;
                                                    left: 0px;
                                                    right: 0px;
                                                    bottom: 0px;
                                                    background-repeat: no-repeat;
                                                    background-position: center center;
                                                    background-size: cover;
                                                    border-radius: 4px;
                                                }

                                                .container_90702 .list-container-item .image:after {
                                                    content: "";
                                                    display: block;
                                                    position: absolute;
                                                    background: linear-gradient(0deg, #000000, rgba(0, 0, 0, 0));
                                                    top: 0;
                                                    right: 0;
                                                    left: 0;
                                                    bottom: 0;
                                                    width: 100%;
                                                    height: 100%;
                                                    border-radius: 4px;
                                                }

                                                .container_90702 .list-container-item .title_90702 {
                                                    box-sizing: border-box;
                                                    width: 100%;
                                                    position: absolute;
                                                    bottom: 10px;
                                                    left: 0;
                                                    padding: 15px;
                                                }

                                                .container_90702 .list-container-item .title_90702 .text {
                                                    font-family: Arimo, arial, sans-serif;
                                                    font-size: 17px;
                                                    line-height: 19px;
                                                    font-weight: 600;
                                                    color: #fff;
                                                    text-decoration: none;
                                                    text-align: left;
                                                    word-wrap: break-word;
                                                    max-height: 114px;
                                                    overflow: hidden;
                                                    display: -webkit-box;
                                                    -webkit-line-clamp: 6;
                                                    -webkit-box-orient: vertical;
                                                }

                                                .container_90702 .list-container-item:hover .title_90702 .text {}

                                                /*************/
                                                .frame-wrap {
                                                    /*border: 2px solid blue;*/
                                                    position: relative;
                                                    width: 700px;
                                                    height: 246px;
                                                    /*margin: 50px auto;*/
                                                    overflow: hidden;
                                                    width: 100%;
                                                    -webkit-box-sizing: border-box;
                                                    box-sizing: border-box;
                                                }

                                                .frame {
                                                    width: 100%;
                                                    height: 300px;
                                                    /*border: 1px solid red;*/
                                                    overflow-x: scroll;
                                                    position: relative;
                                                }

                                                /*--------------------------------------------------------*/
                                                .widget-edge {
                                                    /*border: 1px solid #000;*/
                                                    width: 5px;
                                                    position: absolute;
                                                    top: 0px;
                                                    bottom: 0px;
                                                    z-index: 1;
                                                    will-change: transform;
                                                    transform: translateZ(0);
                                                }

                                                .widget-edge-left {
                                                    left: 0;
                                                }

                                                .widget-edge-right {
                                                    right: 0;
                                                }

                                                .edge-shadow {
                                                    width: 20px;
                                                    height: 100%;
                                                    /*border: 1px solid #000;*/
                                                    position: absolute;
                                                    top: 0;
                                                    will-change: transform;
                                                    transition: transform 0.5s ease;
                                                    background: #fff;
                                                    /* -webkit-box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 1); -moz-box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 1); box-shadow: 0px 0px 20px -5px rgba(0, 0, 0, 1); */
                                                }

                                                .edge-shadow-left {
                                                    left: -30px;
                                                }

                                                .edge-shadow-right {
                                                    right: -30px;
                                                }

                                                .edge-shadow-left.visible {
                                                    transform: translateX(10px);
                                                }

                                                .edge-shadow-right.visible {
                                                    transform: translateX(-10px);
                                                }

                                                .edge-button {
                                                    position: absolute;
                                                    top: 50%;
                                                    transform: translateY(-50%) translateZ(0);
                                                    will-change: transform;
                                                    height: 68px;
                                                    width: 44px;
                                                    display: block;
                                                    cursor: pointer;
                                                    transition: transform 0.5s ease;
                                                    border-radius: 3px;
                                                    background-color: #fff;
                                                    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.18);
                                                }

                                                .edge-button-left {
                                                    left: -44px;
                                                }

                                                .edge-button-left.visible {
                                                    transform: translateY(-50%) translateX(100%) translateX(20px);
                                                }

                                                .edge-button-right {
                                                    right: -60px;
                                                }

                                                .edge-button-right.visible {
                                                    transform: translateY(-50%) translateX(-100%) translateX(-36px);
                                                }

                                                .edge-button-arrow {
                                                    position: relative;
                                                }

                                                .edge-button-arrow:after {
                                                    content: '';
                                                    position: absolute;
                                                    bottom: -44px;
                                                    border: 9px solid transparent;
                                                }

                                                .edge-button-arrow-left:after {
                                                    left: 6px;
                                                    border-right: 12px solid #000;
                                                }

                                                .edge-button-arrow-right:after {
                                                    left: 18px;
                                                    border-left: 12px solid #000;
                                                }

                                                /**********************************/
                      </style>
                    </div>
                  </div>
                  <div class="column__row">
                    <div class="flex-news-block dzen--widget">
                      <div class="widget-container" style="margin: 0px auto; position: relative; width:100%">
                        <div class="zen-widget widget card-size_l mobile">
                          <div class="widget__header widget__header_size_l zen-widget">
                            <div class="zen-widget widget__header-left">
                              <div class="zen-widget widget__header-icon"></div>
                              <div class="zen-widget widget__header-info">
                                <a class="zen-widget widget__header-logo"  target="_blank">Яндекс Дзен</a><span class="zen-widget widget__header-desc">Больше интересного в вашей ленте</span>
                              </div>
                            </div>
                          </div>
                          <div class="scroller _size_l _type_horizontal _hide-edges">
                            <div class="scroller__edge _position_backward _type_horizontal _size_l">
                              <div class="scroller__button _position_backward _type_horizontal">
                                <div class="scroller__arrow _position_backward _type_horizontal"></div>
                              </div>
                              <div class="scroller__shadow _position_backward _type_horizontal _size_l"></div>
                            </div>
                            <div class="scroller__edge _position_forward _type_horizontal _size_l">
                              <div class="scroller__button _position_forward _type_horizontal">
                                <div class="scroller__arrow _position_forward _type_horizontal"></div>
                              </div>
                              <div class="scroller__shadow _position_forward _type_horizontal _size_l"></div>
                            </div>
                            <div class="scroller__cards _type_horizontal">
                              <div class="scroller__cards-scroller _is-mobile _type_horizontal">
                                <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(38, 38, 38);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/wAALCAASACABAREA/8QAGQAAAgMBAAAAAAAAAAAAAAAABgcBAgUD/8QAJhAAAgEDAwIHAQAAAAAAAAAAAQIDAAQRBQYxEiETFBUiMlFhkf/aAAgBAQAAPwAj1LXoIJinUBXIblgEZyw4rGk3TC8hww5oq2zrlvLGGZlpW6xFczXjEdXNR6fevbkpnihm7S8s5W8QkDNXg3RcWcWFc9v2mU6qZzlR/K2LFE8k3sXj6pcb7ADtgAdzS01D4mv/2Q==&quot;); height: 53%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 54%; background: linear-gradient(to top, rgb(38, 38, 38) 0%, rgba(38, 38, 38, 0.85) 10%, rgba(38, 38, 38, 0.6) 20%, rgba(38, 38, 38, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 53%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/22526/7691493701089688932/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 16px; line-height: 1.2;">
                                    «Русский удар»: какой прием изобрел советский танкист Семен Осадчий
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 11px; color: rgb(255, 255, 255);">
                                      РУССКАЯ СЕМЕРКА
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_b widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(247, 247, 247);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADAREAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAABgcDBAgF/8QAJhAAAQMCBQMFAAAAAAAAAAAAAQIDBAAGBQcRIVESIjEUMkFhcf/EABkBAQADAQEAAAAAAAAAAAAAAAMAAgQFAf/EABsRAAMBAAMBAAAAAAAAAAAAAAABAhEDITET/9oADAMBAAIRAxEAPwAGTZEwvEdB0/Kxwkdvk5EkTv2uIkZSnE7gVulLDmVesD5jYMktIP1Q0hJfR0sOtiVLb6kpJ24oqGjDXFz27Dw5tSwlAqqnDL9GxOXStt9brDYB302rRAbYu41vuu4qolJ06uKlISa6NAZY2exIw9JcSknTis9LS65MDjNYkRtjp5p8QMCEa3xdeu/d80keEouRkI9W52J93FVstHg68rwBB8cUR5R//9k=&quot;); height: 54%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 55%; background: linear-gradient(to top, rgb(247, 247, 247) 0%, rgba(247, 247, 247, 0.85) 10%, rgba(247, 247, 247, 0.6) 20%, rgba(247, 247, 247, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 54%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/177006/-1448863451336130178/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 14px; line-height: 1.3;">
                                    «Не надо было проигрывать русским». Канада – о вылете своей сборной с МЧМ
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 11px; color: rgb(0, 0, 0);">
                                      ЧЕМПИОНАТ.COM
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_b widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(247, 247, 247);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/wAALCAASACABAREA/8QAFwABAQEBAAAAAAAAAAAAAAAABgcFBP/EACgQAAEDAgMHBQAAAAAAAAAAAAEAAgMEBgUREwcSISJBUYEUFTJTkv/aAAgBAQAAPwCV2izU3dWI+Ql1TT02mAGDPJcuG0kbK/f3QFWbIxanpWBr3NHBH6vZ7NhzuWIjIdllzYHP6kR6Z4Ba+DWbU1EgcIykVLZdXC7hG5VK7GNzdyt+PZTeZrfcjyjr0T2y44ywZsafCaxQxfUz8hf/2Q==&quot;); height: 48%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 49%; background: linear-gradient(to top, rgb(247, 247, 247) 0%, rgba(247, 247, 247, 0.85) 10%, rgba(247, 247, 247, 0.6) 20%, rgba(247, 247, 247, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 48%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/241236/3238651886971878910/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 20px; line-height: 1.1;">
                                    10 последних фото и видео вымерших животных
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 14px; color: rgb(0, 0, 0);">
                                      TRAVELASK
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(35, 32, 43);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEBLAEsAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADAREAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAABQYAAgME/8QAIxAAAQMEAgEFAAAAAAAAAAAAAQACAwQFITEREgYTFCJBUf/EABoBAAMBAAMAAAAAAAAAAAAAAAMEBgUAAQL/xAAgEQACAgICAwEBAAAAAAAAAAAAAQIDBAURMRIhIjJB/9oADAMBAAIRAxEAPwDrvJkLiR22r2NkY9k6q3IFw100cvXg7TcJwlDkNTW4TC7KmR0PI5SUrFEoaLFxwEfHq+ZtV1+W0C22Lh2EkmR7oKh3VucqJyNy1Ls8Ua/10ZVlmbG0Slo42m8TcycezuzBSZWD0sR42hZG54/oWjEkhhsVsYZw7GVyjZOxBra/FCjY3EzjknY+1F5L+zWqXyNPkGLa3j8WnhfgUt/QqUpPuW5O1m5jfkOUL0P1hJ7MytXWCOYf/9k=&quot;); height: 54%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 55%; background: linear-gradient(to top, rgb(35, 32, 43) 0%, rgba(35, 32, 43, 0.85) 10%, rgba(35, 32, 43, 0.6) 20%, rgba(35, 32, 43, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 54%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/22526/2114666561477893389/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 14px; line-height: 1.3;">
                                    6&nbsp;ошибок в&nbsp;общении с&nbsp;постаревшими родителями, которые приносят им&nbsp;много боли
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 16px; color: rgb(255, 255, 255);">
                                      ADME
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_b widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(255, 249, 239);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASIAAhEBAxEB/8QAGgAAAgMBAQAAAAAAAAAAAAAAAAQDBgcFCP/EACUQAAICAQMCBwEAAAAAAAAAAAECAAMRBAUGITESIiMyUXGBof/EABcBAQADAAAAAAAAAAAAAAAAAAIDBAX/xAAZEQEBAQEBAQAAAAAAAAAAAAAAAgESETH/2gAMAwEAAhEDEQA/APRmo3utF8zicnVcgoJPqCUHkHIUGQjf2UrXch1JY+FziZ8R6u7LYL93pcnDg/UhG6BexaZZtu+Xlcu8dv396wM24j4HlXta7Gw5Zj+xTAKnIhCKUmpaelYx0iu8Mwr9x7fMIRz9HH//2Q==&quot;); height: 53%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 54%; background: linear-gradient(to top, rgb(255, 249, 239) 0%, rgba(255, 249, 239, 0.85) 10%, rgba(255, 249, 239, 0.6) 20%, rgba(255, 249, 239, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 53%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/125920/-6057117927351724801/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 16px; line-height: 1.2;">
                                    Почему танкисты на Второй мировой войны никогда не брали пленных
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 11px; color: rgb(0, 0, 0);">
                                      РУССКАЯ СЕМЕРКА
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_b widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(239, 247, 255);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQAAZABkAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAYBAwcF/8QAIxAAAQMEAgEFAAAAAAAAAAAAAQACAwQFERIGIRMiMTSBkf/EABYBAQEBAAAAAAAAAAAAAAAAAAMEBf/EAB0RAAICAgMBAAAAAAAAAAAAAAADAQIyMwQREiH/2gAMAwEAAhEDEQA/AOry6uDoXRApMtdoklrPNqffKsvVz2qjs7rKYuM3CkMHq1zhC90YjoTaseim7zywUIiGRgJTZcKqGp3aT0U8XBtPWPOuFNLxmKWPbUIV1mRrO7+SZpfifM7sq+yveI+nu/UIU79hanSNNic4uGXE/a0O1fFahC1OPiYzMz//2Q==&quot;); height: 54%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 55%; background: linear-gradient(to top, rgb(239, 247, 255) 0%, rgba(239, 247, 255, 0.85) 10%, rgba(239, 247, 255, 0.6) 20%, rgba(239, 247, 255, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 54%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/114080/488024844320219767/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 14px; line-height: 1.3;">
                                    Минсоцполитики уточнило, когда выплатят пенсии за январь
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 14px; color: rgb(0, 0, 0);">
                                      МИНФИН
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_b widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(239, 244, 255);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEA8ADwAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADAREAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABQcGCP/EACEQAAEDBAMAAwAAAAAAAAAAAAEAAgMEBQYRFCExMkGh/8QAGAEBAQEBAQAAAAAAAAAAAAAAAgEABQP/xAAaEQEBAAMBAQAAAAAAAAAAAAAAAQMSEwIR/9oADAMBAAIRAxEAPwCkNzRgf1IvXqMxEKHOI/DI1bs3I9b8qjqG9FpSmWBcZFt4icNnScyQL4rlWG5zOkID1zrXQkMWk1M7vkChsfyN9jlNVMhB1+qb1NYRra6aBpB2rMtic5UCpyeUe/tEo3OLAbCixUbEBxB0PEWF331yJR//2Q==&quot;); height: 54%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 55%; background: linear-gradient(to top, rgb(239, 244, 255) 0%, rgba(239, 244, 255, 0.85) 10%, rgba(239, 244, 255, 0.6) 20%, rgba(239, 244, 255, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 54%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/936895/-8855531057359900223/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 14px; line-height: 1.3;">
                                    8 ярких примеров того, почему нельзя доверять фотографиям отелей в интернете
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 14px; color: rgb(0, 0, 0);">
                                      TRAVELASK
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(38, 38, 38);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADAREAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAABQQGA//EACMQAAEEAQQCAwEAAAAAAAAAAAIAAQMEBRESIjFRkQYTFCH/xAAbAQACAwADAAAAAAAAAAAAAAACAwABBQQGB//EAB0RAAMBAAMAAwAAAAAAAAAAAAABAgMFEUEEFTH/2gAMAwEAAhEDEQA/AI6Oet2GZ5DJ9V5VXBRn4bmaqxYc9NADMLuyuOEmvBt5uUc5s/YkNtTLtDfBTPgETVFcPyGSDTklfRTXg55NIMuyYukD7RD+LuW81TH/AB5mf0Jgy9Kew7bI9NVWWdSO2qGhWW5jQgc9oasymk0xWSlMzmSztTe7CAe0EZ2jk3cdAudkk2lzLrytHozOwDGyH9z8y78o0gG2M2ZD/G/MuvKqkXLfRkrxnvfmXtRJEbZ//9k=&quot;); height: 54%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 55%; background: linear-gradient(to top, rgb(38, 38, 38) 0%, rgba(38, 38, 38, 0.85) 10%, rgba(38, 38, 38, 0.6) 20%, rgba(38, 38, 38, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 54%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/920263/6885106325598610444/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 14px; line-height: 1.3;">
                                    10 вещей, которым вы можете научиться за 10 минут. А полезны они будут всю жизнь
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 16px; color: rgb(255, 255, 255);">
                                      ADME
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_b widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(255, 255, 239);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASIAAhEBAxEB/8QAGwAAAQQDAAAAAAAAAAAAAAAAAAEEBQYCAwf/xAAjEAABBAEEAQUAAAAAAAAAAAABAAIDBAYFESExEhMiM1Fx/8QAFwEAAwEAAAAAAAAAAAAAAAAAAAEDBP/EABwRAAEEAwEAAAAAAAAAAAAAAAABAhEhAzEyE//aAAwDAQACEQMRAD8A7YyH3pzcoh8AGywlkbHJzsnjbTHx7fQWOtFoVbKVrdUwFxHCdYtb2sBpctGYXoo2k7qGx/UGmwC0jkpeNyVbkqC5aoT6naSsT4Hk9IQhNibyUbOCfDs9qNxT5WfqEKruBs7P/9k=&quot;); height: 57%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 58%; background: linear-gradient(to top, rgb(255, 255, 239) 0%, rgba(255, 255, 239, 0.85) 10%, rgba(255, 255, 239, 0.6) 20%, rgba(255, 255, 239, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 57%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/965902/-3032741221317051499/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 20px; line-height: 1.1;">
                                    За год без смартфона заплатят $100000
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 11px; color: rgb(0, 0, 0);">
                                      MAIL.RU ХАЙТЭК
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(43, 43, 32);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEBLAEsAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASIAAhEBAxEB/8QAGgAAAgIDAAAAAAAAAAAAAAAAAAYEBQECA//EACIQAAIBBAEEAwAAAAAAAAAAAAECAAMEBSEREyIxMkGRof/EABYBAQEBAAAAAAAAAAAAAAAAAAQDBf/EAB0RAAICAwADAAAAAAAAAAAAAAABAgMEERIxMjP/2gAMAwEAAhEDEQA/AHdcjr2/ZzN+GJ3zEo56kPmYtc4jvMayNlMOpMRHTekNV9kmRCQZQXOfCkgsRNa98lSkYr5V17jIV2Wzj0mUlBIqWY72ZKxZO9whHZ/oydPksnZul5P3IF6SUPJhCGxfkIsP/9k=&quot;); height: 57%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 58%; background: linear-gradient(to top, rgb(43, 43, 32) 0%, rgba(43, 43, 32, 0.85) 10%, rgba(43, 43, 32, 0.6) 20%, rgba(43, 43, 32, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 57%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/34175/5876231821713770189/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 20px; line-height: 1.1;">
                                    Как я съездила в Сибирь и чуть не сошла с ума
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 12px; color: rgb(255, 255, 255);">
                                      ЛЕДИ.MAIL.RU
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(43, 32, 33);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAYHBQT/xAAkEAABAwQBBAMBAAAAAAAAAAABAAIEAwURIQYSEzFBFTJRkf/EABkBAAIDAQAAAAAAAAAAAAAAAAEEAgMFB//EABwRAAMAAgMBAAAAAAAAAAAAAAACAwERIjEyM//aAAwDAQACEQMRAD8AlNN/yE4e8lUmx2AOgB3T6Uu487syml/6rBYb5QZADCR4WLTZ0C9WXyIXM7T2nOOEsWSUYMkYOMFPPNZ9KuHdONpStVtMyToZyUZ7GMPhk5nNT1X1raZ7a53Y+x/qEKxhWhk3xxydlbPBADXbkDyhCE+ydvkf/9k=&quot;); height: 65%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 66%; background: linear-gradient(to top, rgb(43, 32, 33) 0%, rgba(43, 32, 33, 0.85) 10%, rgba(43, 32, 33, 0.6) 20%, rgba(43, 32, 33, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 65%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/224467/-2625841533995424053/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 20px; line-height: 1.1;">
                                    Секрет чистых полотенец
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 14px; color: rgb(255, 255, 255);">
                                      7DACH.RU
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(43, 38, 32);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUGAwT/xAAiEAABBAICAQUAAAAAAAAAAAABAAIDBREhBKEGIjIzcZH/xAAWAQEBAQAAAAAAAAAAAAAAAAAEAwb/xAAdEQABBAMBAQAAAAAAAAAAAAAAAQIDIQUGMRME/9oADAMBAAIRAxEAPwCUqqUPxkLunpY2M2zpY0lzGcbCcP5omGsFJgzXkthfpw/s2idfTRSA+jpJ7OkjZnXStmyBgOWpFd8pmwlP2BrqQFFr6stSX8dc7Ddn9VrWk62hCyMvTXQ8GHJ+M/Sk7r3FCFJnSj+H/9k=&quot;); height: 60%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 61%; background: linear-gradient(to top, rgb(43, 38, 32) 0%, rgba(43, 38, 32, 0.85) 10%, rgba(43, 38, 32, 0.6) 20%, rgba(43, 38, 32, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 60%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/15270/-2447823715152279074/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 16px; line-height: 1.2;">
                                    Лучшее за 2018: тест самого загадочного вездехода СССР
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 12px; color: rgb(255, 255, 255);">
                                      АВТО.MAIL.RU
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(43, 40, 32);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADAREAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAABAUGBwP/xAAiEAACAQQBBAMAAAAAAAAAAAABAgADBQYRMQQSIZEiQYH/xAAYAQADAQEAAAAAAAAAAAAAAAABAwQCBf/EABsRAQADAQEBAQAAAAAAAAAAAAABAgMRMRIT/9oADAMBAAIRAxEAPwCKxjHfkpCCca+qhpdmxxWpKHUeZP8AfRg0OM0g2lAh/SDK1mSW/Y1TpozMOIY2NjNMYfck0pbti7QX8LWpkdLpwoVhxFtUzF23Ikq1QzMNSbS/FueIDL76jUHCMOPqHK3W5pxkGNswQaY+5fdIeVGYuNsT+xM+GUN7azdo8n3I7+raeOF5JNM7Jm8Wbv/Z&quot;); height: 57%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 58%; background: linear-gradient(to top, rgb(43, 40, 32) 0%, rgba(43, 40, 32, 0.85) 10%, rgba(43, 40, 32, 0.6) 20%, rgba(43, 40, 32, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 57%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/224467/6289946269344192261/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 20px; line-height: 1.1;">
                                    Рулетики из лаваша. Сразу 3 рецепта!
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 12px; color: rgb(255, 255, 255);">
                                      KOOLINAR.RU
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(32, 32, 43);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASIAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAAUEBgcI/8QAJRAAAQMEAQIHAAAAAAAAAAAAAQACBAMFBhExUZEHEiIyM0Gh/8QAFgEBAQEAAAAAAAAAAAAAAAAAAwQB/8QAHBEAAgICAwAAAAAAAAAAAAAAAAECMRESITJB/9oADAMBAAIRAxEAPwCpXu0xYUogBugeif4lGgVWgPDSslyHL60t5f5/1QLfnMuE7TXu7pKZmu0cnSRtVuez0tapVtxOLIeC0N7LFMfz+ZIpjbzz1V7s/iE+KxpqPHI+0nhPymc01Pal9flCETsqj1LbinxtTu5kimNEoQlVE8rP/9k=&quot;); height: 53%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 54%; background: linear-gradient(to top, rgb(32, 32, 43) 0%, rgba(32, 32, 43, 0.85) 10%, rgba(32, 32, 43, 0.6) 20%, rgba(32, 32, 43, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 53%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/1352765/-6536775403349352443/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 16px; line-height: 1.2;">
                                    Суровые сибиряки показали, как прогреть салон авто в -40 по Цельсию
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 16px; color: rgb(255, 255, 255);">
                                      QUTO
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(36, 43, 32);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADAREAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAABgUE/8QAJBAAAQQCAQIHAAAAAAAAAAAAAQACAxEEBSEGEiIxQVFicZH/xAAZAQEBAQADAAAAAAAAAAAAAAAEAwIAAQX/xAAcEQADAQADAQEAAAAAAAAAAAAAAQIDERIxBCH/2gAMAwEAAhEDEQA/AAun1QvuLR+IOc9mDdcC7WYDuA1Wv5m1yXyaZU2Wue3Hv4oiy6spcpEfDldi5Q8VUu3KCNkzEl7CaACrg+GYrOhPopwWi3DyXrK5cm8pqWLJIG5OI2iDYQ7gd6gbvdXJFKXNoIdywWkNMLxeq1Axr9LunPLfoJObOJD/AE3MEd+ysiseGLqMCjwFGkS2P//Z&quot;); height: 68%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 69%; background: linear-gradient(to top, rgb(36, 43, 32) 0%, rgba(36, 43, 32, 0.85) 10%, rgba(36, 43, 32, 0.6) 20%, rgba(36, 43, 32, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 68%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/927575/753341252266784406/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 14px; line-height: 1.3;">
                                    Пять мини-сериалов для длинных выходных
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 14px; color: rgb(255, 255, 255);">
                                      ФИЛЬМ.РУ
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_b widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(239, 239, 255);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAcIBQb/xAAlEAABAwMDBQADAAAAAAAAAAABAAIDBAUGBxEhEhMiQVExUoH/xAAYAQACAwAAAAAAAAAAAAAAAAADBAACBf/EABsRAAMAAgMAAAAAAAAAAAAAAAABAgMxERIy/9oADAMBAAIRAxEAPwCmJZmRtJc4D+ric3y6C3UsgEoB2+rJv+UOjp37P52+pAak5PVVUz42yO5P1TunoIsTS5Zs3LPpai89uKQkdXop5aWXGWso4+sk8KZNNcfmudyZNIC7dyrPArOy30DPHYgBXQNoT+Rk9p3J/CTOT8153/ZCEpGzQryNfRBjOuPxb69KkaAAQDYAcIQm5EKP/9k=&quot;); height: 60%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 61%; background: linear-gradient(to top, rgb(239, 239, 255) 0%, rgba(239, 239, 255, 0.85) 10%, rgba(239, 239, 255, 0.6) 20%, rgba(239, 239, 255, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 60%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/1101877/-6991716269261219918/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 16px; line-height: 1.2;">
                                    Xiaomi PowerBank 3 HV может зарядить даже ноутбук
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 14px; color: rgb(0, 0, 0);">
                                      IGUIDES.RU
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(38, 38, 38);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEBLAEsAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAYHBQT/xAAkEAABAwMDBQEBAAAAAAAAAAABAAIDBAURBhNRByExQWE0cv/EABgBAAMBAQAAAAAAAAAAAAAAAAMFBgIE/8QAHhEAAgEEAwEAAAAAAAAAAAAAAAEDAgQFMRESIUH/2gAMAwEAAhEDEQA/ALzerzT0TSHPAx9WZS6opZI3DdHf6oj1L1tJHPIGyHzyky1a5m3mMMh7nlCkjfw7Vcpr0uevTDW0r3NIOVD9QWgumLWt9p3jvrqulAc4nIHtYjqmN9wIfggcpdLb1t8lThc4rajoxM6kEmqkyT5Srbf1xf0hCcEUU+zk7TO/C4qokXB+CUIWK9B4Nn//2Q==&quot;); height: 40%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 41%; background: linear-gradient(to top, rgb(38, 38, 38) 0%, rgba(38, 38, 38, 0.85) 10%, rgba(38, 38, 38, 0.6) 20%, rgba(38, 38, 38, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 40%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/751940/6360129942592877198/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 14px; line-height: 1.3;">
                                    "Я бы удавил свою жену за это": Иосиф Пригожин раскритиковал интервью Глюкозы о сексе
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 11px; color: rgb(255, 255, 255);">
                                      ДОМАШНИЙ ОЧАГ
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(38, 38, 38);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAUHBv/EACEQAAEDAwUBAQAAAAAAAAAAAAEAAgUDBiEEERITMTKR/8QAFgEBAQEAAAAAAAAAAAAAAAAAAwQF/8QAGhEAAwADAQAAAAAAAAAAAAAAAAMRBBIxQf/aAAwDAQACEQMRAD8Aktq6fsqNBVYtuID6bcKTWpqQyq3KsVrSjG0m5Cxcnbw28WQeiGApfKRTEWxu+4WqMrTNL0eLNzUjTJdkKZG1HdIQS3SebcqmW848G5KEK15LjGnY49Pp/UkkydzkoQhT0Z3D/9k=&quot;); height: 53%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 54%; background: linear-gradient(to top, rgb(38, 38, 38) 0%, rgba(38, 38, 38, 0.85) 10%, rgba(38, 38, 38, 0.6) 20%, rgba(38, 38, 38, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 53%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/196027/-3514604283890225904/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 16px; line-height: 1.2;">
                                    Фото дня: обратная сторона Луны глазами китайского аппарата «Чанъэ-4»
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 14px; color: rgb(255, 255, 255);">
                                      3DNEWS
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_b widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(247, 247, 247);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAASCAIAAAC1qksFAAAC9klEQVQ4y0VVgY7kOgjDQDq793T//2fvPmVndoo5mbR7UVXNRInBNlD8+fP/19fX6/X6/n5rfb+fz+fr+azXi+833998v/t8d52Rfqzj49fHf79/f35+rmPlyjzWOo5cyz0MBjg8Yq31+Fyfv3IdaWYOhEcEW8sO0roL3pGM6Iw+01gRvo718fHxOB5rZUaEu5sZ2VW6adZwj273Zs3TOZvwQDJMC9bmhvLoTD3nMp7WDPe14ng8Ho9jZXq4w9BtrD6bgG67W6fDFbKqo9KasHbAw9OGoyHcGWl19lp9nuiCKUAOCWkSEKAC0IoswLpN8jSbHjeDym6KBCxcL7g5vCIslymL06rQdGt3hFtm5gq3tmb3qCpJSUkEG0m8gnWKASs59DFOQPhoj4w0tpHGAoeiApij3T0c1sU6TSG4gSZRqQTg0odFMnn5g70MYS7y6K1vK32MhmhpJZDuMqUv3Car6xQPwNzBUFSSRReDOsfaQcBlwRycOBNGFyH+4HtkmZTtlmngmiWQbtu12NKtyTzPNzawpzsH2uAj+EQTuhiZ7pTJ+SJN8pTkKW5Bpo5w2XKZ091Z5zdUvCn1IT0avbUcGuO9VluXMRrUsR6PhKEfw0YKiDC8Lx1tAtQJeNvuARktvq7S2jsGt3tNBw2KbTG2HrvJNjr2FfXSZCWT3SVzq0J35Y2mvq+rR274H2hMyhPgwnX9MeG2OQ1sK+nIHESzf7hXDMq0AEj67qItRN+CKE2Rc/MwqsLMg+ZlkywbRZ5XAFDMf+zhTVzF4XMAe+b8oGuahCZMpLag8SUB4YrR0EbRUTlu3HIab11vQhoFKq2ZZMNgamr7b57mRNiPD2W+61ONaBWN7G5cB3gfnBjKe2/6NvwqLTW75i8ineoBdYh6XrUrn5S7EUSXt6WwBHRXw7y1sYmw/XJ08DVQpDVc0tHTZ8grJUxjTYsBJetBD3kguMvEObvRd9D9VplMgM0AdH0IWuhkSj8lb1TnqRt1eGatn/wL+TIXu2AjTsIAAAAASUVORK5CYII=&quot;); height: 67%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 68%; background: linear-gradient(to top, rgb(247, 247, 247) 0%, rgba(247, 247, 247, 0.85) 10%, rgba(247, 247, 247, 0.6) 20%, rgba(247, 247, 247, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 67%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/1209300/2342050717430166710/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 16px; line-height: 1.2;">
                                    Как нас обманывают гинекологи
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 11px; color: rgb(0, 0, 0);">
                                      ЗДОРОВЬЕ.MAIL.RU
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_b">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#000000" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class="widget-card widget-card_type_image widget-card_theme_w widget-card_content-hidden widget-card_size_l"  target="_blank" rel="nofollow" style="background-color: rgb(32, 32, 43);">
                                <div class="doc-image">
                                  <div class="doc-image__wrap">
                                    <div class="doc-image__preview _mode_si" style="background-image: url(https://egrantom.com/blue/preland/RST/&quot;data:image/png;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAASACADASEAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAABAYHAgj/xAAmEAABAwMCBQUAAAAAAAAAAAABAAIDBAURBiEHEhMzUSIxcYGR/8QAFwEAAwEAAAAAAAAAAAAAAAAABAUGB//EAB8RAAEFAAIDAQAAAAAAAAAAAAEAAgMEEhEzBSI0Uf/aAAwDAQACEQMRAD8AOtdvnwA4O/EXXMZSxFzhjASu7Z16hUVGjgbKVZNVNoaz0vxg+VVuGmvYahrY5JwPtDVoDGdIi3ZbM3P4jzb4IIyeUbKb8Q6rpRyBmyF1zMOU5fATAQ1Qi/18gqXkuPutac1jNbJQeqRg+VUsja5gUE+R0cjgV2Pc+wVHeIxPLJupCTtC1GoAYnKDak77vlK1QdyrGt1hZh5D6HL/2Q==&quot;); height: 54%;"></div>
                                    <div class="doc-image__fade _mode_si _is-visible" style="height: 55%; background: linear-gradient(to top, rgb(32, 32, 43) 0%, rgba(32, 32, 43, 0.85) 10%, rgba(32, 32, 43, 0.6) 20%, rgba(32, 32, 43, 0) 50%);"></div>
                                    <div class="doc-image__image _mode_si _is-loaded" style="height: 54%; background-image: url(https://egrantom.com/blue/preland/RST/&quot;https://avatars.mds.yandex.net/get-zen_doc/1108048/4062897266726135527/smart_crop_344x194&quot;);"></div>
                                  </div>
                                </div>
                                <div class="widget-card__background"></div>
                                <div class="widget-card__content">
                                  <div class="widget-card__title" style="font-size: 14px; line-height: 1.3;">
                                    Xiaomi отделяет Redmi в независимый бренд. Первый смартфон — уже 10 января
                                  </div>
                                  <div class="widget-card__dislike-overlay">
                                    <span class="widget-card__dislike-overlay-text">Вы будете видеть меньше такого</span>
                                  </div>
                                  <div class="widget-card__bottom">
                                    <div class="widget-card__domain-logo doc__domain-logo" style="font-size: 12px; color: rgb(255, 255, 255);">
                                      GAGADGET.COM
                                    </div>
                                    <div class="widget-card__buttons">
                                      <div class="widget-card__button widget-card__button_type_like widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.895 10.605c.609 0 1.102.496 1.102 1.108v.043a16.864 16.864 0 0 1-.819 4.253l-.003.01a16.834 16.834 0 0 1-2.716 5.075l-.002.003-.159.19H7.923v-9.43L12.78 6.05l.003-.004a4.77 4.77 0 0 0 .774-1.447l.003-.007a4.84 4.84 0 0 0 .234-1.22c.2-.2.475-.323.779-.323.568 0 .956.379 1.187 1.024.276.77.252 1.643.252 1.643a4.828 4.828 0 0 1-1.042 3l.002.002-1.6 1.888H18.894zM3.015 21.287v-9.43h3.272v9.43H3.014z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                      <div class="widget-card__button widget-card__button_type_dislike widget-card__button_color_w">
                                        <svg height="32" viewBox="0 0 23 32" width="23" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.109 21.288a1.105 1.105 0 0 1-1.103-1.107v-.044c.095-1.478.37-2.903.82-4.253l.002-.009A16.833 16.833 0 0 1 6.544 10.8l.002-.002.16-.19h8.375v9.43l-4.859 5.808-.003.004a4.77 4.77 0 0 0-.774 1.447l-.002.007a4.84 4.84 0 0 0-.235 1.22c-.2.2-.474.323-.778.323-.569 0-.956-.38-1.188-1.025-.276-.77-.251-1.642-.251-1.642 0-1.134.391-2.175 1.042-3l-.002-.002 1.6-1.889H4.11zm12.608-1.252v-9.43h3.272v9.43h-3.272z" fill="#FFFFFF" fill-rule="evenodd"></path></svg>
                                      </div>
                                    </div>
                                  </div>
                                </div></a> <a class=" widget-invite-card widget-invite-card_l widget-invite-card_horizontal widget-card widget-card_orientation_horizontal widget-card_size_l widget-card_theme_w"  target="_blank">
                                <div class="widget-invite-card__background">
                                  <div class="widget-invite-card__oval-1"></div>
                                  <div class="widget-invite-card__oval-2"></div>
                                  <div class="widget-invite-card__oval-3"></div>
                                  <div class="widget-invite-card__logo"></div>
                                </div><span class="widget-invite-card__title"><span class="widget-invite-card__title-line">Больше</span><br>
                                <span class="widget-invite-card__title-line">интересного</span><br>
                                <span class="widget-invite-card__title-line">в Дзене</span></span><span class="widget-invite-card__to-feed">Перейти в ленту</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <style type="text/css">
                                                .flex-news-block .widget-container .zen-widget.widget {
                                                    margin-top: 20px;
                                                    padding: 10px;
                                                    box-sizing: border-box;
                                                }

                                                .flex-news-block.dzen--widget {
                                                    margin-bottom: 20px;
                                                }

                                                .flex-news-block .zen-widget.widget__title {
                                                    margin-left: 0px;
                                                    margin-right: 0px;
                                                }

                                                .flex-news-block .zen-widget.widget__cards-scroller {
                                                    padding: 12px 0 50px 0px
                                                }

                                                .flex-news-block .zen-widget .widget__title>a,
                                                .flex-news-block .zen-widget .widget__title>span {
                                                    display: none;
                                                }

                                                .flex-news-block .zen-widget.widget__title {
                                                    margin-bottom: 6px;
                                                }
                      </style>
                    </div>
                  </div>
                  <div class="column__row">
                    <!-- Composite Start -->
                    <div id="M281228ScriptRootC675347">
                      <div id="M281228PreloadC675347" style="display: none;">
                        Загрузка...
                      </div>
                      <div id="LentaInformComposite675347" style="height: auto; overflow: visible;">
                        <style class="LentaInformC675347" type="text/css">
                                                    @font-face {
                                                        font-family: 'Roboto';
                                                        font-style: normal;
                                                        font-weight: 400;
                                                        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v15/mUdRVCMHGKUBOACHGTH1g-vvDin1pK8aKteLpeZ5c0A.woff) format('woff');
                                                    }

                                                    #LentaInformComposite675347_ .mgbox {
                                                        height: auto;
                                                        line-height: 100%;
                                                        margin: 0 auto;
                                                        position: relative;
                                                        overflow: hidden;
                                                        vertical-align: top;
                                                        text-align: center;
                                                        padding: 0;
                                                        border-style: solid;
                                                        border-width: 0px;
                                                    }

                                                    #LentaInformComposite675347_ .mgslider {
                                                        width: 10000px;
                                                        position: relative;
                                                        left: 0;
                                                        padding-left: 0;
                                                        -webkit-transition: top 1s ease-out 0.5s;
                                                        -moz-transition: all 0.5s ease-in-out;
                                                        -o-transition: all 0.5s ease-in-out;
                                                        transition: all 0.5s ease-in-out;
                                                    }

                                                    #LentaInformComposite675347_ .mgline {
                                                        float: left;
                                                        display: block;
                                                        padding: 0;
                                                        opacity: 1;
                                                        background-color: #fff;
                                                        border: none;
                                                        border-radius: 4px;
                                                        overflow: hidden;
                                                        transition: box-shadow;
                                                        transition-duration: 0.8s;
                                                        transition-property: box-shadow;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc {
                                                        padding: 10px;
                                                        background: #fff;
                                                        margin-bottom: 20px;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-lenta {
                                                        margin: 0 auto;
                                                        position: relative;
                                                        overflow: hidden;
                                                        z-index: 1;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-vertical>.swiper-wrapper-lenta {
                                                        -webkit-box-orient: vertical;
                                                        -moz-box-orient: vertical;
                                                        -ms-flex-direction: column;
                                                        -webkit-flex-direction: column;
                                                        flex-direction: column;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-wrapper-lenta {
                                                        position: relative;
                                                        width: 100%;
                                                        height: 100%;
                                                        z-index: 1;
                                                        display: -webkit-box;
                                                        display: -moz-box;
                                                        display: -ms-flexbox;
                                                        display: -webkit-flex;
                                                        display: flex;
                                                        -webkit-transition-property: -webkit-transform;
                                                        -moz-transition-property: -moz-transform;
                                                        -o-transition-property: -o-transform;
                                                        -ms-transition-property: -ms-transform;
                                                        transition-property: transform;
                                                        -webkit-box-sizing: content-box;
                                                        -moz-box-sizing: content-box;
                                                        box-sizing: content-box;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-android .swiper-slide-lenta,
                                                    #LentaInformComposite675347_ .mgoc .swiper-wrapper-lenta {
                                                        -webkit-transform: translate3d(0, 0, 0);
                                                        -moz-transform: translate3d(0, 0, 0);
                                                        -o-transform: translate(0, 0);
                                                        -ms-transform: translate3d(0, 0, 0);
                                                        transform: translate3d(0, 0, 0);
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-multirow>.swiper-wrapper-lenta {
                                                        -webkit-box-lines: multiple;
                                                        -moz-box-lines: multiple;
                                                        -ms-flex-wrap: wrap;
                                                        -webkit-flex-wrap: wrap;
                                                        flex-wrap: wrap;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-free-mode>.swiper-wrapper-lenta {
                                                        -webkit-transition-timing-function: ease-out;
                                                        -moz-transition-timing-function: ease-out;
                                                        -ms-transition-timing-function: ease-out;
                                                        -o-transition-timing-function: ease-out;
                                                        transition-timing-function: ease-out;
                                                        margin: 0 auto;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-autoheight,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-autoheight .swiper-slide-lenta {
                                                        height: auto;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-autoheight .swiper-wrapper-lenta {
                                                        -webkit-box-align: start;
                                                        -ms-flex-align: start;
                                                        -webkit-align-items: flex-start;
                                                        align-items: flex-start;
                                                        -webkit-transition-property: -webkit-transform, height;
                                                        -moz-transition-property: -moz-transform;
                                                        -o-transition-property: -o-transform;
                                                        -ms-transition-property: -ms-transform;
                                                        transition-property: transform, height;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-lenta .swiper-notification {
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        pointer-events: none;
                                                        opacity: 0;
                                                        z-index: -1000;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-wp8-horizontal {
                                                        -ms-touch-action: pan-y;
                                                        touch-action: pan-y;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-wp8-vertical {
                                                        -ms-touch-action: pan-x;
                                                        touch-action: pan-x;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev {
                                                        position: absolute;
                                                        top: 50%;
                                                        width: 27px;
                                                        height: 44px;
                                                        margin-top: -22px;
                                                        z-index: 10;
                                                        cursor: pointer;
                                                        -moz-background-size: 27px 44px;
                                                        -webkit-background-size: 27px 44px;
                                                        background-size: 27px 44px;
                                                        background-position: center;
                                                        background-repeat: no-repeat;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next.swiper-button-disabled,
                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev.swiper-button-disabled {
                                                        opacity: .35;
                                                        cursor: auto;
                                                        pointer-events: none;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-next {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
                                                        left: 10px;
                                                        right: auto;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev.swiper-button-black,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-next.swiper-button-black {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev.swiper-button-white,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-next.swiper-button-white {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-prev {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
                                                        right: 10px;
                                                        left: auto;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next.swiper-button-black,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-prev.swiper-button-black {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next.swiper-button-white,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-prev.swiper-button-white {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination {
                                                        position: absolute;
                                                        text-align: center;
                                                        -webkit-transition: .3s;
                                                        -moz-transition: .3s;
                                                        -o-transition: .3s;
                                                        transition: .3s;
                                                        -webkit-transform: translate3d(0, 0, 0);
                                                        -ms-transform: translate3d(0, 0, 0);
                                                        -o-transform: translate3d(0, 0, 0);
                                                        transform: translate3d(0, 0, 0);
                                                        z-index: 10;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination.swiper-pagination-hidden {
                                                        opacity: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-bullets,
                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-custom,
                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-fraction {
                                                        bottom: 10px;
                                                        left: 0;
                                                        width: 100%;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-bullet {
                                                        width: 8px;
                                                        height: 8px;
                                                        display: inline-block;
                                                        border-radius: 100%;
                                                        background: #000;
                                                        opacity: .2;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc button.swiper-pagination-bullet {
                                                        border: none;
                                                        margin: 0;
                                                        padding: 0;
                                                        box-shadow: none;
                                                        -moz-appearance: none;
                                                        -ms-appearance: none;
                                                        -webkit-appearance: none;
                                                        appearance: none;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-clickable .swiper-pagination-bullet {
                                                        cursor: pointer;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-white .swiper-pagination-bullet {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-bullet-active {
                                                        opacity: 1;
                                                        background: #007aff;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-white .swiper-pagination-bullet-active {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-black .swiper-pagination-bullet-active {
                                                        background: #000;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-vertical>.swiper-pagination-bullets {
                                                        right: 10px;
                                                        top: 50%;
                                                        -webkit-transform: translate3d(0, -50%, 0);
                                                        -moz-transform: translate3d(0, -50%, 0);
                                                        -o-transform: translate(0, -50%);
                                                        -ms-transform: translate3d(0, -50%, 0);
                                                        transform: translate3d(0, -50%, 0);
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 5px 0;
                                                        display: block;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 0 5px;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-progress {
                                                        background: rgba(0, 0, 0, 0.25);
                                                        position: absolute;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-progress .swiper-pagination-progressbar {
                                                        background: #007aff;
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        width: 100%;
                                                        height: 100%;
                                                        -webkit-transform: scale(0);
                                                        -ms-transform: scale(0);
                                                        -o-transform: scale(0);
                                                        transform: scale(0);
                                                        -webkit-transform-origin: left top;
                                                        -moz-transform-origin: left top;
                                                        -ms-transform-origin: left top;
                                                        -o-transform-origin: left top;
                                                        transform-origin: left top;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar {
                                                        -webkit-transform-origin: right top;
                                                        -moz-transform-origin: right top;
                                                        -ms-transform-origin: right top;
                                                        -o-transform-origin: right top;
                                                        transform-origin: right top;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-progress {
                                                        width: 100%;
                                                        height: 4px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-vertical>.swiper-pagination-progress {
                                                        width: 4px;
                                                        height: 100%;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-progress.swiper-pagination-white {
                                                        background: rgba(255, 255, 255, 0.5);
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar {
                                                        background: #000;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-scrollbar {
                                                        border-radius: 10px;
                                                        position: relative;
                                                        -ms-touch-action: none;
                                                        background: rgba(0, 0, 0, 0.1);
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-scrollbar {
                                                        position: absolute;
                                                        left: 1%;
                                                        bottom: 3px;
                                                        z-index: 50;
                                                        height: 5px;
                                                        width: 98%;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-vertical>.swiper-scrollbar {
                                                        position: absolute;
                                                        right: 3px;
                                                        top: 1%;
                                                        z-index: 50;
                                                        width: 5px;
                                                        height: 98%;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-scrollbar-drag {
                                                        height: 100%;
                                                        width: 100%;
                                                        position: relative;
                                                        background: rgba(0, 0, 0, 0.5);
                                                        border-radius: 10px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-scrollbar-cursor-drag {
                                                        cursor: move;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-lazy-preloader {
                                                        width: 42px;
                                                        height: 42px;
                                                        position: absolute;
                                                        left: 50%;
                                                        top: 50%;
                                                        margin-left: -21px;
                                                        margin-top: -21px;
                                                        z-index: 10;
                                                        -webkit-transform-origin: 50%;
                                                        -moz-transform-origin: 50%;
                                                        transform-origin: 50%;
                                                        -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                        -moz-animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                        animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-lazy-preloader:after {
                                                        display: block;
                                                        content: "";
                                                        width: 100%;
                                                        height: 100%;
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                                                        background-position: 50%;
                                                        -webkit-background-size: 100%;
                                                        background-size: 100%;
                                                        background-repeat: no-repeat;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-lazy-preloader-white:after {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                                                    }

                                                    @-webkit-keyframes swiper-preloader-spin {
                                                        100% {
                                                            -webkit-transform: rotate(360deg);
                                                        }
                                                    }

                                                    @keyframes swiper-preloader-spin {
                                                        100% {
                                                            transform: rotate(360deg);
                                                        }
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-slide-lenta {
                                                        margin-top: 10px;
                                                        float: left;
                                                        -webkit-flex-shrink: 0;
                                                        -ms-flex-AH: 0;
                                                        flex-shrink: 0;
                                                        width: 192px;
                                                        height: 100%;
                                                        position: relative;
                                                        -webkit-transition-property: -webkit-transform;
                                                        transition-property: -webkit-transform;
                                                        -o-transition-property: transform;
                                                        transition-property: transform, -webkit-transform;
                                                        display: -webkit-box;
                                                        display: -ms-flexbox;
                                                        display: -webkit-flex;
                                                        display: flex;
                                                        -webkit-box-pack: center;
                                                        -ms-flex-pack: center;
                                                        -webkit-justify-content: center;
                                                        justify-content: center;
                                                        -webkit-box-align: center;
                                                        -ms-flex-align: center;
                                                        -webkit-align-items: center;
                                                        align-items: center;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev {
                                                        position: absolute;
                                                        top: 45%;
                                                        width: 42px;
                                                        height: 68px;
                                                        -webkit-border-radius: 3px;
                                                        -moz-border-radius: 3px;
                                                        border-radius: 3px;
                                                        margin-top: -27px;
                                                        z-index: 10;
                                                        text-indent: -9999px;
                                                        overflow: hidden;
                                                        cursor: pointer;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next {
                                                        background: url("data:image/svg+xml,%3Csvg width='12' height='18' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 9L0 18V0z' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E") 45% 50% no-repeat #ffffff;
                                                        transition: right 0.5s ease;
                                                        right: -50px;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev {
                                                        background: url("data:image/svg+xml,%3Csvg width='12' height='18' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 9L0 18V0z' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E") 45% 50% no-repeat #ffffff;
                                                        transition: left 0.5s ease;
                                                        left: -50px;
                                                        -webkit-transform: translateX(-50%) translateY(-50%) scaleX(-1);
                                                        transform: translateX(-50%) translateY(0%) scaleX(-1);
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next.swiper-button-disabled,
                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev.swiper-button-disabled {
                                                        opacity: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .MG_Gallery_left-btn .swiper-button-prev {
                                                        left: 35px;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .MG_Gallery_right-btn .swiper-button-next {
                                                        right: 15px;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .mcimg a:before {
                                                        content: '';
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        top: 0;
                                                        background: transparent linear-gradient(to bottom, transparent 0px, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;
                                                        z-index: 1;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-bullets,
                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-custom,
                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-fraction {
                                                        bottom: 10px;
                                                        left: 0;
                                                        width: 100%;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-scrollbar {
                                                        position: absolute;
                                                        left: 1%;
                                                        bottom: 3px;
                                                        z-index: 50;
                                                        height: 5px;
                                                        width: 98%;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-progress {
                                                        width: 100%;
                                                        height: 4px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 0 5px;
                                                    }

                                                    #LentaInformComposite675347_ .mglogo {
                                                        width: 100%;
                                                        text-align: left;
                                                        margin-bottom: 10px;
                                                    }

                                                    #LentaInformComposite675347_ .mglogo img {
                                                        width: 115px;
                                                        height: auto;
                                                        border: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgline .image-with-text {
                                                        display: block;
                                                        width: 100%;
                                                        min-height: 1px;
                                                        margin: 0 auto;
                                                        position: relative;
                                                    }

                                                    #LentaInformComposite675347_ div.mcimg {
                                                        display: block !important;
                                                    }

                                                    #LentaInformComposite675347_ img.mcimg {
                                                        display: block;
                                                        width: auto;
                                                        height: 250px;
                                                        max-width: none !important;
                                                    }

                                                    #LentaInformComposite675347_ .mcimg-link {
                                                        display: block;
                                                        overflow: hidden;
                                                        position: relative;
                                                    }

                                                    #LentaInformComposite675347_ .mgline .text-elements {
                                                        display: block;
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        background: linear-gradient(0deg, #000000, rgba(0, 0, 0, 0));
                                                    }

                                                    #LentaInformComposite675347_ .mctitle {
                                                        margin: 0;
                                                        text-align: left;
                                                        line-height: 101px;
                                                        display: block;
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        z-index: 2;
                                                    }

                                                    #LentaInformComposite675347_ .mctitle span {
                                                        color: #ffffff;
                                                        font-family: Arial, Helvetica, sans-serif !important;
                                                        text-decoration: none;
                                                        font-style: normal !important;
                                                        font-weight: bold !important;
                                                        font-size: 17px;
                                                        text-align: left;
                                                        line-height: 19px;
                                                        padding: 0 12px 25px 12px;
                                                        display: table-cell;
                                                        vertical-align: bottom;
                                                        width: 170px;
                                                    }

                                                    #LentaInformComposite675347_ .mgline .text-elements .fake {
                                                        display: block;
                                                        visibility: hidden;
                                                        height: 2px;
                                                    }

                                                    #LentaInformComposite675347_ .mcdesc {
                                                        display: none;
                                                    }

                                                    #LentaInformComposite675347_ .mgslider-box {
                                                        float: left;
                                                    }

                                                    #LentaInformComposite675347_ .mgline:hover {
                                                        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.2), 0 4px 22px 0 #000000;
                                                    }

                                                    #LentaInformComposite675347_ .mglogo {
                                                        width: 100%;
                                                        text-align: left;
                                                        margin-bottom: 10px;
                                                    }

                                                    #LentaInformComposite675347_ .mglogo img {
                                                        width: 115px;
                                                        height: auto;
                                                        border: 0;
                                                    }

                                                    @media (max-width: 480px) {
                                                        .MG_Gallery_left-btn .swiper-button-prev {
                                                            left: -50px;
                                                        }

                                                        .MG_Gallery_right-btn .swiper-button-next {
                                                            right: -50px;
                                                        }
                                                    }
                        </style>
                        <div class="mgoc">
                          <div class="mglogo">
                            <a  target="_blank" rel="nofollow"><img src="img/logo_lenta.svg"></a>
                          </div>
                          <div class="mgbox MG_Gallery">
                            <div class="swiper-container-lenta swiper-container-horizontal">
                              <div class="swiper-wrapper-lenta">
                                <div class="swiper-slide-lenta swiper-slide-active" style="margin-right: 16px;">
                                  <div class="mgline teaser-6803179 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFo0SecZAvZCK_KoQ_hfySfMRDYKjF1pUy7sL53Madkqh"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6803179" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTEtMDcvMzE0ODIxLzk5YTEwODk3ZWQy.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFo0SecZAvZCK_KoQ_hfySfMRDYKjF1pUy7sL53Madkqh">Почему часть Крыма до&nbsp;сих&nbsp;пор&nbsp;принадлежит Украине?</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta swiper-slide-next" style="margin-right: 16px;">
                                  <div class="mgline teaser-6770878 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFp1Dito17iG2Ms6PtwpRIjqk7oLQDrM5HVQDjRQw0tI5"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6770878" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTAtMjQvMzE0ODIxLzM0NGZhMmJkYzY4.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFp1Dito17iG2Ms6PtwpRIjqk7oLQDrM5HVQDjRQw0tI5">Что на самом деле произошло в студии «60 минут»</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6768369 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFpbNyWRAz9Yv9rfC2nCk8n5gImCahV3DDtJir7rPzlnM"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6768369" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTAtMjMvMjk4NDM4LzE3MzI0MDQxODRl.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFpbNyWRAz9Yv9rfC2nCk8n5gImCahV3DDtJir7rPzlnM">«Уральские пельмени» показали пустой зал в Перьми</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6899354 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFiVZbRE4f0ezPusv0CXUqfc9aD58g19z5OT3eWMuf4R3"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6899354" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTItMTMvMzE0ODIxLzEzOWU1OGE3YzNh.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFiVZbRE4f0ezPusv0CXUqfc9aD58g19z5OT3eWMuf4R3">Савченко частично ослепла и&nbsp;оглохла</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6922262 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFvXEtplQJCj7AVs0gNsJ-VCZzEnkVtYhoCfT-wDz-Oq6"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6922262" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTItMjIvMzE0ODIxL2Q3YTUzOThiM2M1.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFvXEtplQJCj7AVs0gNsJ-VCZzEnkVtYhoCfT-wDz-Oq6">Решена судьба арестованных в России украинских моряков</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6860795 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFvVBAZswiCx69txgF0GHmscgAbPn51RUPu_DoiwAcGgv"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6860795" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTEtMjkvMzE0ODIxL2E4YmFkYzU3MzBh.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFvVBAZswiCx69txgF0GHmscgAbPn51RUPu_DoiwAcGgv">Шутки кончились: Путин предупредил зарвавшегося Порошенко</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6915118 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFuBqrUWKV-AZWB5LfRiOhgXQbGJgfKc6_unbgEBkn9OE"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6915118" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTItMjAvMzE0ODIxLzY3NjhmZGE0ZWRh.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFuBqrUWKV-AZWB5LfRiOhgXQbGJgfKc6_unbgEBkn9OE">У Высоцкого нашли пророчество об Украине</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949492 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFjeMN7uG1YmTVBBWZ9xhPLOxfZlyBRMReIqBhhc39eek"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949492" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjY5Njc1LzFlMWJhNDBjYjE4.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFjeMN7uG1YmTVBBWZ9xhPLOxfZlyBRMReIqBhhc39eek">Трамп: Россия, Сирия и Иран наши сюзники в борьбе с терроризмом</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949306 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFpdGvlW7jx0rMWPGi_yTU7EEB9mM4-PwnFuPWdYV9aEk"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949306" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIyMzEwMC8yMDE5LTAxLTA0LzhkZGE0MzIzYzIy.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFpdGvlW7jx0rMWPGi_yTU7EEB9mM4-PwnFuPWdYV9aEk">СК прокомментировал слухи о взрывчатке в доме Магнитогорска</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949182 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFt0DuZdFPwN6zCarPhYhQzr-6Rpd-I03E78j4zvlTiIg"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949182" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjQ4NjMwL2NlMjFkOGVkNjYw.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFt0DuZdFPwN6zCarPhYhQzr-6Rpd-I03E78j4zvlTiIg">ГД пообещала помочь семьям жертв трагедии в Магнитогорске</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949207 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFmyI-d8lwnGEsCa1Lk3orOYV4fr_gNgkF5f0tB-wlUzt"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949207" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjQ4NjMwLzQzNTYzNDQ0YTJk.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFmyI-d8lwnGEsCa1Lk3orOYV4fr_gNgkF5f0tB-wlUzt">Власти утвердило правила проведения конкурса на премии учителям</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949386 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFkyJH5sQ6qORw0Wb4vc-mzkOykf87FoBi9RCevhZM1HW"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949386" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIyMzEwMC8yMDE5LTAxLTA0L2QzZmUwZTNjYWI5.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFkyJH5sQ6qORw0Wb4vc-mzkOykf87FoBi9RCevhZM1HW">При авиаударе коалиции в Сирии погибли россияне</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949181 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFtvGmjqcWSBp-VXmpRMYBKA1zuzAZj3EIlNFrnZFhQpX"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949181" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjQ4NjMwLzgwOTg0MTgyZmJk.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFtvGmjqcWSBp-VXmpRMYBKA1zuzAZj3EIlNFrnZFhQpX">Причиной аварии в Вологодской области стал выезд на встречную</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949210 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFmrCVRy4LNJRmaMwQ5fk92Snelx-fzUfH2mml6xqzd5C"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949210" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMzI3NjI4L2Q0MWZkYmRhODkx.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFmrCVRy4LNJRmaMwQ5fk92Snelx-fzUfH2mml6xqzd5C">У Павла Карназыцкого своя версия причин высылки из Украины</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949211 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFoJKXgGm4D-Y_4FHmG5shPedmx8AnXDfmwHkD_WM5cGF"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949211" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMzI3NjI4Lzk4ODNlMDc4NzE5.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFoJKXgGm4D-Y_4FHmG5shPedmx8AnXDfmwHkD_WM5cGF">"Евроопт" провернул сделку с офшорной компанией на $7,5 млн</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949491 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFmq_qDF7lGENqKQxkp2GOIARQZlG6rZxpcxys0gcg0NK"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949491" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjI0MTg4L2Q2M2M5MGMyYzE2.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFmq_qDF7lGENqKQxkp2GOIARQZlG6rZxpcxys0gcg0NK">Автоэксперты: как понять, что пора покупать новый стартер</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949208 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFkA-y1hpU960AW2L5WzIy-laYHA5p_L1XttawOVwJq0V"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949208" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjQ4NjMwL2Y4NGJiYzBiNjc3.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFkA-y1hpU960AW2L5WzIy-laYHA5p_L1XttawOVwJq0V">Путин и Нетаньяху обсудили обстановку в Сирии</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949200 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFgkCQdq-JDxH7_F6m2tmFjoagZhm_7uNgASM2bY_yy1v"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949200" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMzM4NjAyL2RjMDIyYTcxNWFi.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFgkCQdq-JDxH7_F6m2tmFjoagZhm_7uNgASM2bY_yy1v">Чемодан, вокзал, Европа: украинцы массово уезжают в Прибалтику</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6947498 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFtjEFMMdVeFf0o5KUQglEyIdPJ40Mnr5hhdoHnqC_8Cb"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6947498" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDMvMjQxNzg3LzM0NWMyNTFiNDNk.jpg" width="328"> <!--intExchangeWagesImagePlace-->

                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="swiper-slide-lenta" style="margin-right: 16px;">
                                  <div class="mgline teaser-6949179 type-e">
                                    <div class="image-with-text">
                                      <div class="mcimg">
                                        <a data-hash="n35HD1JlSU44B_zFSyFmFpyFKJTtA5Vw7KnmviP4wyOvBjmXocb9a4oLyHuTbrMk"  target="_blank" rel="nofollow">
                                        <div class="image-container">
                                          <img class="mcimg" data-i="6949179" height="328" src="img/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjQ4NjMwL2I2Y2M3ZTE5YzVk.jpg" width="328"> <!--intExchangeWagesImagePlace-->
                                          <div class="mctitle">
                                            <span data-hash="n35HD1JlSU44B_zFSyFmFpyFKJTtA5Vw7KnmviP4wyOvBjmXocb9a4oLyHuTbrMk">Чабан: скелетонистки Никитина и Канакина в отличной форме</span>
                                          </div>
                                        </div></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev swiper-button-disabled"></div>
                          </div>
                        </div>
                        <style class="LentaInformC675347" type="text/css">
                                                    @font-face {
                                                        font-family: 'Roboto';
                                                        font-style: normal;
                                                        font-weight: 400;
                                                        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v15/mUdRVCMHGKUBOACHGTH1g-vvDin1pK8aKteLpeZ5c0A.woff) format('woff');
                                                    }

                                                    #LentaInformComposite675347 .mgbox {
                                                        height: auto;
                                                        line-height: 100%;
                                                        margin: 0 auto;
                                                        position: relative;
                                                        overflow: hidden;
                                                        vertical-align: top;
                                                        text-align: center;
                                                        padding: 0;
                                                        border-style: solid;
                                                        border-width: 0px;
                                                    }

                                                    #LentaInformComposite675347 .mgslider {
                                                        width: 10000px;
                                                        position: relative;
                                                        left: 0;
                                                        padding-left: 0;
                                                        -webkit-transition: top 1s ease-out 0.5s;
                                                        -moz-transition: all 0.5s ease-in-out;
                                                        -o-transition: all 0.5s ease-in-out;
                                                        transition: all 0.5s ease-in-out;
                                                    }

                                                    #LentaInformComposite675347 .mgline {
                                                        float: left;
                                                        display: block;
                                                        padding: 0;
                                                        opacity: 1;
                                                        background-color: #fff;
                                                        border: none;
                                                        border-radius: 4px;
                                                        overflow: hidden;
                                                        transition: box-shadow;
                                                        transition-duration: 0.8s;
                                                        transition-property: box-shadow;
                                                    }

                                                    #LentaInformComposite675347 .mgoc {
                                                        padding: 10px;
                                                        background: #fff;
                                                        margin-bottom: 20px;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-lenta {
                                                        margin: 0 auto;
                                                        position: relative;
                                                        overflow: hidden;
                                                        z-index: 1;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-vertical>.swiper-wrapper-lenta {
                                                        -webkit-box-orient: vertical;
                                                        -moz-box-orient: vertical;
                                                        -ms-flex-direction: column;
                                                        -webkit-flex-direction: column;
                                                        flex-direction: column;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-wrapper-lenta {
                                                        position: relative;
                                                        width: 100%;
                                                        height: 100%;
                                                        z-index: 1;
                                                        display: -webkit-box;
                                                        display: -moz-box;
                                                        display: -ms-flexbox;
                                                        display: -webkit-flex;
                                                        display: flex;
                                                        -webkit-transition-property: -webkit-transform;
                                                        -moz-transition-property: -moz-transform;
                                                        -o-transition-property: -o-transform;
                                                        -ms-transition-property: -ms-transform;
                                                        transition-property: transform;
                                                        -webkit-box-sizing: content-box;
                                                        -moz-box-sizing: content-box;
                                                        box-sizing: content-box;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-android .swiper-slide-lenta,
                                                    #LentaInformComposite675347 .mgoc .swiper-wrapper-lenta {
                                                        -webkit-transform: translate3d(0, 0, 0);
                                                        -moz-transform: translate3d(0, 0, 0);
                                                        -o-transform: translate(0, 0);
                                                        -ms-transform: translate3d(0, 0, 0);
                                                        transform: translate3d(0, 0, 0);
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-multirow>.swiper-wrapper-lenta {
                                                        -webkit-box-lines: multiple;
                                                        -moz-box-lines: multiple;
                                                        -ms-flex-wrap: wrap;
                                                        -webkit-flex-wrap: wrap;
                                                        flex-wrap: wrap;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-free-mode>.swiper-wrapper-lenta {
                                                        -webkit-transition-timing-function: ease-out;
                                                        -moz-transition-timing-function: ease-out;
                                                        -ms-transition-timing-function: ease-out;
                                                        -o-transition-timing-function: ease-out;
                                                        transition-timing-function: ease-out;
                                                        margin: 0 auto;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-autoheight,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-autoheight .swiper-slide-lenta {
                                                        height: auto;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-autoheight .swiper-wrapper-lenta {
                                                        -webkit-box-align: start;
                                                        -ms-flex-align: start;
                                                        -webkit-align-items: flex-start;
                                                        align-items: flex-start;
                                                        -webkit-transition-property: -webkit-transform, height;
                                                        -moz-transition-property: -moz-transform;
                                                        -o-transition-property: -o-transform;
                                                        -ms-transition-property: -ms-transform;
                                                        transition-property: transform, height;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-lenta .swiper-notification {
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        pointer-events: none;
                                                        opacity: 0;
                                                        z-index: -1000;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-wp8-horizontal {
                                                        -ms-touch-action: pan-y;
                                                        touch-action: pan-y;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-wp8-vertical {
                                                        -ms-touch-action: pan-x;
                                                        touch-action: pan-x;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev {
                                                        position: absolute;
                                                        top: 50%;
                                                        width: 27px;
                                                        height: 44px;
                                                        margin-top: -22px;
                                                        z-index: 10;
                                                        cursor: pointer;
                                                        -moz-background-size: 27px 44px;
                                                        -webkit-background-size: 27px 44px;
                                                        background-size: 27px 44px;
                                                        background-position: center;
                                                        background-repeat: no-repeat;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next.swiper-button-disabled,
                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev.swiper-button-disabled {
                                                        opacity: .35;
                                                        cursor: auto;
                                                        pointer-events: none;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-next {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
                                                        left: 10px;
                                                        right: auto;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev.swiper-button-black,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-next.swiper-button-black {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev.swiper-button-white,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-next.swiper-button-white {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-prev {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
                                                        right: 10px;
                                                        left: auto;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next.swiper-button-black,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-prev.swiper-button-black {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next.swiper-button-white,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-prev.swiper-button-white {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination {
                                                        position: absolute;
                                                        text-align: center;
                                                        -webkit-transition: .3s;
                                                        -moz-transition: .3s;
                                                        -o-transition: .3s;
                                                        transition: .3s;
                                                        -webkit-transform: translate3d(0, 0, 0);
                                                        -ms-transform: translate3d(0, 0, 0);
                                                        -o-transform: translate3d(0, 0, 0);
                                                        transform: translate3d(0, 0, 0);
                                                        z-index: 10;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination.swiper-pagination-hidden {
                                                        opacity: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-bullets,
                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-custom,
                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-fraction {
                                                        bottom: 10px;
                                                        left: 0;
                                                        width: 100%;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-bullet {
                                                        width: 8px;
                                                        height: 8px;
                                                        display: inline-block;
                                                        border-radius: 100%;
                                                        background: #000;
                                                        opacity: .2;
                                                    }

                                                    #LentaInformComposite675347 .mgoc button.swiper-pagination-bullet {
                                                        border: none;
                                                        margin: 0;
                                                        padding: 0;
                                                        box-shadow: none;
                                                        -moz-appearance: none;
                                                        -ms-appearance: none;
                                                        -webkit-appearance: none;
                                                        appearance: none;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-clickable .swiper-pagination-bullet {
                                                        cursor: pointer;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-white .swiper-pagination-bullet {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-bullet-active {
                                                        opacity: 1;
                                                        background: #007aff;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-white .swiper-pagination-bullet-active {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-black .swiper-pagination-bullet-active {
                                                        background: #000;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-vertical>.swiper-pagination-bullets {
                                                        right: 10px;
                                                        top: 50%;
                                                        -webkit-transform: translate3d(0, -50%, 0);
                                                        -moz-transform: translate3d(0, -50%, 0);
                                                        -o-transform: translate(0, -50%);
                                                        -ms-transform: translate3d(0, -50%, 0);
                                                        transform: translate3d(0, -50%, 0);
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 5px 0;
                                                        display: block;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 0 5px;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-progress {
                                                        background: rgba(0, 0, 0, 0.25);
                                                        position: absolute;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-progress .swiper-pagination-progressbar {
                                                        background: #007aff;
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        width: 100%;
                                                        height: 100%;
                                                        -webkit-transform: scale(0);
                                                        -ms-transform: scale(0);
                                                        -o-transform: scale(0);
                                                        transform: scale(0);
                                                        -webkit-transform-origin: left top;
                                                        -moz-transform-origin: left top;
                                                        -ms-transform-origin: left top;
                                                        -o-transform-origin: left top;
                                                        transform-origin: left top;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar {
                                                        -webkit-transform-origin: right top;
                                                        -moz-transform-origin: right top;
                                                        -ms-transform-origin: right top;
                                                        -o-transform-origin: right top;
                                                        transform-origin: right top;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-progress {
                                                        width: 100%;
                                                        height: 4px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-vertical>.swiper-pagination-progress {
                                                        width: 4px;
                                                        height: 100%;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-progress.swiper-pagination-white {
                                                        background: rgba(255, 255, 255, 0.5);
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar {
                                                        background: #000;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-scrollbar {
                                                        border-radius: 10px;
                                                        position: relative;
                                                        -ms-touch-action: none;
                                                        background: rgba(0, 0, 0, 0.1);
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-scrollbar {
                                                        position: absolute;
                                                        left: 1%;
                                                        bottom: 3px;
                                                        z-index: 50;
                                                        height: 5px;
                                                        width: 98%;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-vertical>.swiper-scrollbar {
                                                        position: absolute;
                                                        right: 3px;
                                                        top: 1%;
                                                        z-index: 50;
                                                        width: 5px;
                                                        height: 98%;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-scrollbar-drag {
                                                        height: 100%;
                                                        width: 100%;
                                                        position: relative;
                                                        background: rgba(0, 0, 0, 0.5);
                                                        border-radius: 10px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-scrollbar-cursor-drag {
                                                        cursor: move;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-lazy-preloader {
                                                        width: 42px;
                                                        height: 42px;
                                                        position: absolute;
                                                        left: 50%;
                                                        top: 50%;
                                                        margin-left: -21px;
                                                        margin-top: -21px;
                                                        z-index: 10;
                                                        -webkit-transform-origin: 50%;
                                                        -moz-transform-origin: 50%;
                                                        transform-origin: 50%;
                                                        -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                        -moz-animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                        animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-lazy-preloader:after {
                                                        display: block;
                                                        content: "";
                                                        width: 100%;
                                                        height: 100%;
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                                                        background-position: 50%;
                                                        -webkit-background-size: 100%;
                                                        background-size: 100%;
                                                        background-repeat: no-repeat;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-lazy-preloader-white:after {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                                                    }

                                                    @-webkit-keyframes swiper-preloader-spin {
                                                        100% {
                                                            -webkit-transform: rotate(360deg);
                                                        }
                                                    }

                                                    @keyframes swiper-preloader-spin {
                                                        100% {
                                                            transform: rotate(360deg);
                                                        }
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-slide-lenta {
                                                        margin-top: 10px;
                                                        float: left;
                                                        -webkit-flex-shrink: 0;
                                                        -ms-flex-AH: 0;
                                                        flex-shrink: 0;
                                                        width: 192px;
                                                        height: 100%;
                                                        position: relative;
                                                        -webkit-transition-property: -webkit-transform;
                                                        transition-property: -webkit-transform;
                                                        -o-transition-property: transform;
                                                        transition-property: transform, -webkit-transform;
                                                        display: -webkit-box;
                                                        display: -ms-flexbox;
                                                        display: -webkit-flex;
                                                        display: flex;
                                                        -webkit-box-pack: center;
                                                        -ms-flex-pack: center;
                                                        -webkit-justify-content: center;
                                                        justify-content: center;
                                                        -webkit-box-align: center;
                                                        -ms-flex-align: center;
                                                        -webkit-align-items: center;
                                                        align-items: center;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev {
                                                        position: absolute;
                                                        top: 45%;
                                                        width: 42px;
                                                        height: 68px;
                                                        -webkit-border-radius: 3px;
                                                        -moz-border-radius: 3px;
                                                        border-radius: 3px;
                                                        margin-top: -27px;
                                                        z-index: 10;
                                                        text-indent: -9999px;
                                                        overflow: hidden;
                                                        cursor: pointer;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next {
                                                        background: url("data:image/svg+xml,%3Csvg width='12' height='18' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 9L0 18V0z' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E") 45% 50% no-repeat #ffffff;
                                                        transition: right 0.5s ease;
                                                        right: -50px;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev {
                                                        background: url("data:image/svg+xml,%3Csvg width='12' height='18' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M12 9L0 18V0z' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E") 45% 50% no-repeat #ffffff;
                                                        transition: left 0.5s ease;
                                                        left: -50px;
                                                        -webkit-transform: translateX(-50%) translateY(-50%) scaleX(-1);
                                                        transform: translateX(-50%) translateY(0%) scaleX(-1);
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next.swiper-button-disabled,
                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev.swiper-button-disabled {
                                                        opacity: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .MG_Gallery_left-btn .swiper-button-prev {
                                                        left: 35px;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .MG_Gallery_right-btn .swiper-button-next {
                                                        right: 15px;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .mcimg a:before {
                                                        content: '';
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        top: 0;
                                                        background: transparent linear-gradient(to bottom, transparent 0px, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;
                                                        z-index: 1;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-bullets,
                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-custom,
                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-fraction {
                                                        bottom: 10px;
                                                        left: 0;
                                                        width: 100%;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-scrollbar {
                                                        position: absolute;
                                                        left: 1%;
                                                        bottom: 3px;
                                                        z-index: 50;
                                                        height: 5px;
                                                        width: 98%;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-progress {
                                                        width: 100%;
                                                        height: 4px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 0 5px;
                                                    }

                                                    #LentaInformComposite675347 .mglogo {
                                                        width: 100%;
                                                        text-align: left;
                                                        margin-bottom: 10px;
                                                    }

                                                    #LentaInformComposite675347 .mglogo img {
                                                        width: 115px;
                                                        height: auto;
                                                        border: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgline .image-with-text {
                                                        display: block;
                                                        width: 100%;
                                                        min-height: 1px;
                                                        margin: 0 auto;
                                                        position: relative;
                                                    }

                                                    #LentaInformComposite675347 div.mcimg {
                                                        display: block !important;
                                                    }

                                                    #LentaInformComposite675347 img.mcimg {
                                                        display: block;
                                                        width: auto;
                                                        height: 250px;
                                                        max-width: none !important;
                                                    }

                                                    #LentaInformComposite675347 .mcimg-link {
                                                        display: block;
                                                        overflow: hidden;
                                                        position: relative;
                                                    }

                                                    #LentaInformComposite675347 .mgline .text-elements {
                                                        display: block;
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        background: linear-gradient(0deg, #000000, rgba(0, 0, 0, 0));
                                                    }

                                                    #LentaInformComposite675347 .mctitle {
                                                        margin: 0;
                                                        text-align: left;
                                                        line-height: 101px;
                                                        display: block;
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        z-index: 2;
                                                    }

                                                    #LentaInformComposite675347 .mctitle span {
                                                        color: #ffffff;
                                                        font-family: Arial, Helvetica, sans-serif !important;
                                                        text-decoration: none;
                                                        font-style: normal !important;
                                                        font-weight: bold !important;
                                                        font-size: 17px;
                                                        text-align: left;
                                                        line-height: 19px;
                                                        padding: 0 12px 25px 12px;
                                                        display: table-cell;
                                                        vertical-align: bottom;
                                                        width: 170px;
                                                    }

                                                    #LentaInformComposite675347 .mgline .text-elements .fake {
                                                        display: block;
                                                        visibility: hidden;
                                                        height: 2px;
                                                    }

                                                    #LentaInformComposite675347 .mcdesc {
                                                        display: none;
                                                    }

                                                    #LentaInformComposite675347 .mgslider-box {
                                                        float: left;
                                                    }

                                                    #LentaInformComposite675347 .mgline:hover {
                                                        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.2), 0 4px 22px 0 #000000;
                                                    }

                                                    #LentaInformComposite675347 .mglogo {
                                                        width: 100%;
                                                        text-align: left;
                                                        margin-bottom: 10px;
                                                    }

                                                    #LentaInformComposite675347 .mglogo img {
                                                        width: 115px;
                                                        height: auto;
                                                        border: 0;
                                                    }

                                                    @media (max-width: 480px) {
                                                        .MG_Gallery_left-btn .swiper-button-prev {
                                                            left: -50px;
                                                        }

                                                        .MG_Gallery_right-btn .swiper-button-next {
                                                            right: -50px;
                                                        }
                                                    }

                                                    #LentaInformComposite675347 div.mcimg a.close-informer {
                                                        width: 14px;
                                                        height: 14px;
                                                        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NDkxMSwgMjAxMy8xMC8yOS0xMTo0NzoxNiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NzI0ODBDMzY3ODcxMUU1OEM4RUU2RUJCOUREODIyQiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5NzI0ODBDNDY3ODcxMUU1OEM4RUU2RUJCOUREODIyQiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk3MjQ4MEMxNjc4NzExRTU4QzhFRTZFQkI5REQ4MjJCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjk3MjQ4MEMyNjc4NzExRTU4QzhFRTZFQkI5REQ4MjJCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+uNcpEQAAAHxJREFUeNqckgEKwCAIRe3fYjfKc2zX6hydaLRbbDnGkLDIPggl/5lKIcbIRJRqbDSnUmOHE6LPm+CEfhj6lnN+o5WVh1VOm6xColCXc/cgLWYev9gaejnQojCab5RDzyDt6RantqoBaz5zq54ZywJ3CXjIwQGd8skfAQYALdQqftYulocAAAAASUVORK5CYIJ0ZW50Ij4NCiA8ZGl2IGNsYXNzPSJjb250ZW50LWNvbnRhaW5lciI+PGZpZWxkc2V0Pg0KICA8aDI+NTAyIC0gV2ViIHNlcnZlciByZWNlaXZlZCBhbiBpbnZhbGlkIHJlc3BvbnNlIHdoaWxlIGFjdGluZyBhcyBhIGdhdGV3YXkgb3IgcHJveHkgc2VydmVyLjwvaDI+DQogIDxoMz5UaGVyZSBpcyBhIHByb2JsZW0gd2l0aCB0aGUgcGFnZSB5b3UgYXJlIGxvb2tpbmcgZm9yLCBhbmQgaXQgY2Fubm90IGJlIGRpc3BsYXllZC4gV2hlbiB0aGUgV2ViIHNlcnZlciAod2hpbGUgYWN0aW5nIGFzIGEgZ2F0ZXdheSBvciBwcm94eSkgY29udGFjdGVkIHRoZSB1cHN0cmVhbSBjb250ZW50IHNlcnZlciwgaXQgcmVjZWl2ZWQgYW4gaW52YWxpZCByZXNwb25zZSBmcm9tIHRoZSBjb250ZW50IHNlcnZlci48L2gzPg0KIDwvZmllbGRzZXQ+PC9kaXY+DQo8L2Rpdj4NCjwvYm9keT4NCjwvaHRtbD4NCg==");
                                                        display: block;
                                                        opacity: 0;
                                                        position: absolute;
                                                        right: 3px;
                                                        top: 3px;
                                                        z-index: 1;
                                                        cursor: pointer;
                                                    }

                                                    #LentaInformComposite675347 div.mgline:hover a.close-informer {
                                                        opacity: 0.7;
                                                        -moz-transition: all 0.3s ease-out;
                                                        -o-transition: all 0.3s ease-out;
                                                        -webkit-transition: all 0.3s ease-out;
                                                        -ms-transition: all 0.3s ease-out;
                                                        transition: all 0.3s ease-out;
                                                    }

                                                    #LentaInformComposite675347 div.mgline a.close-informer:hover {
                                                        opacity: 1;
                                                        -moz-transition: all 0.3s ease-out;
                                                        -o-transition: all 0.3s ease-out;
                                                        -webkit-transition: all 0.3s ease-out;
                                                        -ms-transition: all 0.3s ease-out;
                                                        transition: all 0.3s ease-out;
                                                    }

                                                    #LentaInformComposite675347 div.mcimg {
                                                        position: relative;
                                                        display: inline-block
                                                    }

                                                    div.image-with-price {
                                                        position: relative;
                                                    }

                                                    #LentaInformComposite675347 .mgline .image-container {
                                                        width: auto;
                                                        margin: 0 auto;
                                                        position: relative;
                                                    }
                        </style>
                      </div>
                    </div><!-- Composite End -->
                  </div>
                  <div class="column__row">
                    <div data-smi-status="done" id="smi_teaser_11671">
                      <link  target="_blank" rel="stylesheet">
                      <div class="slider24smi_wrapper11671">
                        <div class="smiheader11671"><img src="img/logo.svg"></div>
                        <div class="slider24smi_edge_right11671 slider24smi11671">
                          <div class="slider24smi__inner11671">
                            <div class="slider24smi__edge-left11671">
                              <div class="slider24smi__edge-shadow11671"></div>
                              <div class="slider24smi__edge-button11671"></div>
                            </div>
                            <div class="slider24smi__edge-right11671">
                              <div class="slider24smi__edge-shadow11671"></div>
                              <div class="slider24smi__edge-button11671"></div>
                            </div>
                            <div class="slider24smi__cards11671">
                              <div class="slider24smi__scroller11671" style="margin-bottom: -17px;">
                                <div class="slider24smi__slide11671" style="background: rgba(225, 226, 220, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/e7ef6bdb0bfc1e510d2ec4d9ff819420.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(225, 226, 220, 0.07), rgba(225, 226, 220, 0.02) 43%, rgba(225, 226, 220, 0.62) 79%, rgba(225, 226, 220, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#000">Макгрегор признался, как США «обхитрили» Россию в Сирии</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#000">
                                        MK.ru
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(174, 126, 110, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/3cda4bfa26037ad63474dc29fc12447e.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(174, 126, 110, 0.07), rgba(174, 126, 110, 0.02) 43%, rgba(174, 126, 110, 0.62) 79%, rgba(174, 126, 110, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#fff">Ответ Пригожина Ахеджаковой на «извиниться за то, что русские»</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#fff">
                                        Народные Новости
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(32, 39, 33, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/f454208b52635a10ad871facbbe74884.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(32, 39, 33, 0.07), rgba(32, 39, 33, 0.02) 43%, rgba(32, 39, 33, 0.62) 79%, rgba(32, 39, 33, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#fff">Турция поплатилась за желание отдать США российские С-400</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#fff">
                                        Народные Новости
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(39, 32, 24, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/381a34eca07c188b536e7a503fac7080.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(39, 32, 24, 0.07), rgba(39, 32, 24, 0.02) 43%, rgba(39, 32, 24, 0.62) 79%, rgba(39, 32, 24, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#fff">На Камчатке женщина-охотник застрелила самого крупного лося в мире</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#fff">
                                        MK.ru
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(24, 24, 23, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/b033a7f45d68ace3b83576b97ba8c766.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(24, 24, 23, 0.07), rgba(24, 24, 23, 0.02) 43%, rgba(24, 24, 23, 0.62) 79%, rgba(24, 24, 23, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#fff">Россиянам не понравилось новогоднее обращение Путина</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#fff">
                                        Эхо Москвы
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(180, 185, 200, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/b2950d89945ca288b62a1810bb9891c7.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(180, 185, 200, 0.07), rgba(180, 185, 200, 0.02) 43%, rgba(180, 185, 200, 0.62) 79%, rgba(180, 185, 200, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#fff">Литва грозит Польше торговыми санкциями</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#fff">
                                        Регнум.ру
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(123, 125, 126, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/2cd1c0a6b8937dcb607c589b824088cc.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(123, 125, 126, 0.07), rgba(123, 125, 126, 0.02) 43%, rgba(123, 125, 126, 0.62) 79%, rgba(123, 125, 126, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#fff">Украинец высмеял трагедию в Магнитогорске</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#fff">
                                        Утро.ру
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(135, 46, 43, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/6e11ff797e720aad2180d9ba6c234f9c.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(135, 46, 43, 0.07), rgba(135, 46, 43, 0.02) 43%, rgba(135, 46, 43, 0.62) 79%, rgba(135, 46, 43, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#fff">Германия откажется от дружеских связей с Россией</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#fff">
                                        Утро.ру
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(184, 181, 176, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/854c21bc781795ea23fa06caa6882e22.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(184, 181, 176, 0.07), rgba(184, 181, 176, 0.02) 43%, rgba(184, 181, 176, 0.62) 79%, rgba(184, 181, 176, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#fff">Как повела себя мама спасенного в Магнитогорске младенца</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#fff">
                                        РИА
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(119, 122, 127, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/d3235eb41a2693a8f6238808c796b639.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(119, 122, 127, 0.07), rgba(119, 122, 127, 0.02) 43%, rgba(119, 122, 127, 0.62) 79%, rgba(119, 122, 127, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#fff">«Мы провалились, а он остался»: детали трагедии в Магнитогорске</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#fff">
                                        РИА
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(53, 23, 17, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/212257a5673da727230daae918e2b768.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(53, 23, 17, 0.07), rgba(53, 23, 17, 0.02) 43%, rgba(53, 23, 17, 0.62) 79%, rgba(53, 23, 17, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#fff">Ахеджакова попросила россиян извиниться «за то, что русские»</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#fff">
                                        Народные Новости
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                                <div class="slider24smi__slide11671" style="background: rgba(206, 200, 192, 1)">
                                  <a  target="_blank">
                                  <div>
                                    <img src="img/98f61fd9d6943b5f554f39ac1b786de0.jpeg">
                                    <div class="slider24smi__img-wrapper11671" style="background-image: linear-gradient(to bottom, rgba(206, 200, 192, 0.07), rgba(206, 200, 192, 0.02) 43%, rgba(206, 200, 192, 0.62) 79%, rgba(206, 200, 192, 1));"></div>
                                    <div class="slider24smi__slide-text11671">
                                      <h3 style="color:#000">Как США «перехитрили» Россию в Сирии: признание полковника</h3>
                                    </div>
                                    <div class="slider_source11671">
                                      <div class="source-content11671" style="color:#000">
                                        Народные Новости
                                      </div>
                                    </div>
                                  </div></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="subscribe-layout subscribe-layout_article-page">
                    <div class="subscribe">
                      <form action="https://russian.rt.com/russia/article/589231-poiskovo-spasatelnye-raboty-magnitogorsk" class="subscribe__form js-subscribe-form" method="post">
                        <div class="subscribe__heading">
                          <div class="subscribe__heading-text1">
                            Вступай в ряды иноагентов
                          </div>
                          <div class="subscribe__heading-text2">
                            Подпишись на рассылку RT
                          </div>
                        </div>
                        <div class="subscribe__field">
                          <input class="subscribe__field-text js-subscribe-email" placeholder="Ваш e-mail" required="" type="email" value="">
                        </div>
                        <div class="subscribe__button">
                          <button class="subscribe__button-submit" type="submit">Подписаться</button>
                        </div>
                      </form><a class="subscribe__close js-subscribe-close"  target="_blank"></a>
                    </div>
                  </div>
                  <div class="column__row column__row_plista">
                    <div id="widget-body">
                      <div id="id-294594-1"></div>
                    </div>
                  </div>
                  <div id="adhesion"></div>
                </div>
                <div class="comments">
                  <div class="comments__wrapper">
                    <div class="spot-im-registration-module" data-spot-id="sp_oSi8qg2j"></div>
                    <div class="spot-im-conversation-module sppre_conversation-module" data-module-element-id="90b069a8ecf14bfa2e78cb5dd4e55aa3" data-post-id="article___589231" data-post-url="https://ru.rt.com/cmnj" data-ready="true" data-spot-id="sp_oSi8qg2j" data-spotim-module="spotim-launcher" style="min-height: auto;">
                      <div class="sppre_frame-container" id="4f447afdcfe8121c9fb81d552784c61c"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rows__column rows__column_article-page_right">
              <div class="column">
                <div class="column__content column__content_article-page_right">
                  <div class="column__row column__row_article-page_right column__row_article-page_right-1">
                    <ul class="tabs">
                      <li class="tabs__item tabs__item_active tabs__item_1 tabs__item_right">Лента новостей</li>
                      <li class="tabs__item tabs__item_2 tabs__item_right">Картина дня</li>
                    </ul>
                    <div class="tabs__content tabs__content_active tabs__content_1">
                      <div class="listing listing_short-news">
                        <div class="listing__content listing__content_short-news">
                          <ul class="listing__rows listing__rows_short-news">
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    16:57
                                  </div>
                                  <div class="card__heading card__heading_short-news">
                                    <a class="link link_color"  target="_blank">Источник: в Омске из ТЦ эвакуировали 4 тысячи человек из-за сообщения о минировании</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    16:55
                                  </div>
                                  <div class="card__heading card__heading_short-news">
                                    <span class="card__informal card__informal_exclusive card__informal_short-news">Эксклюзив RT</span> <a class="link link_color"  target="_blank">Канарейкин о молодёжной сборной России по хоккею: у команды нет слабых мест</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    16:44
                                  </div>
                                  <div class="card__heading card__heading_short-news">
                                    <a class="link link_color"  target="_blank">SANA: при авиаударе коалиции в&nbsp;Дейр эз-Зоре погибли 10 человек</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news card__date_short-news_active">
                                    16:32
                                  </div>
                                  <div class="card__heading card__heading_short-news card__heading_short-news_active">
                                    <a class="link link_color"  target="_blank">Глава МИД Ирака подтвердил планы посетить Москву в конце января</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    16:22
                                  </div>
                                  <div class="card__heading card__heading_short-news">
                                    <a class="link link_color"  target="_blank">Порошенко посетит Турцию 5—6 марта</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    16:12
                                  </div>
                                  <div class="card__heading card__heading_short-news">
                                    <a class="link link_color"  target="_blank">Власти попросили жителей Магнитогорска не создавать мемориалы&nbsp;возле дома после ЧП</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    16:00
                                  </div>
                                  <div class="card__heading card__heading_short-news">
                                    <a class="link link_color"  target="_blank">СК возбудил дело из-за отравления четырёх человек в Орске</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    16:00
                                  </div>

                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    15:52
                                  </div>
                                  <div class="card__heading card__heading_short-news">
                                    <a class="link link_color"  target="_blank">В Челябинской области снят режим ЧС</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    15:46
                                  </div>
                                  <div class="card__heading card__heading_short-news">
                                    <a class="link link_color"  target="_blank">МИД предупредил россиян о «красном» уровне погодной опасности в Германии</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    15:45
                                  </div>
                                  <div class="card__heading card__heading_short-news">
                                    <a class="link link_color"  target="_blank">Российская футболистка Карпова перешла в «Севилью»</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_short-news">
                              <div class="listing__card listing__card_short-news">
                                <div class="card card_short-news">
                                  <div class="card__date card__date_short-news">
                                    15:34
                                  </div>
                                  <div class="card__heading card__heading_short-news">
                                    <a class="link link_color"  target="_blank">СМИ назвали скорость атомного подводного беспилотника «Посейдон»</a>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <div class="listing__button listing__button_short-news" data-href="https://egrantom.com/blue/" target="_blank">
                            <div class="button">
                              <a class="button__item link link_color"  target="_blank">Все новости</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tabs__content tabs__content_2">
                      <div class="listing listing_picture-of-day">
                        <div class="listing__content listing__content_picture-of-day">
                          <ul class="listing__rows listing__rows_picture-of-day">
                            <li class="listing__column listing__column_picture-of-day">
                              <div class="listing__card listing__card_picture-of-day">
                                <div class="card card_picture-of-day">
                                  <div class="card__cover card__cover_picture-of-day">
                                    <div class="cover">
                                      <div class="cover__media cover__media_ratio cover__media_bgi" style="background-image: url(https://cdni.rt.com/russian/images/2019.01/thumbnail/5c2f52df370f2cd94e8b45ad.JPG)">
                                        <a class="cover__link link cover__link_media"  target="_blank"></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card__heading card__heading_picture-of-day">
                                    <a class="link link_color"  target="_blank">«Следы взрывчатки не обнаружены»: сотрудники СК завершили осмотр завалов обрушившегося дома в Магнитогорске</a>
                                  </div>
                                  <div class="card__spot-im-count card__spot-im-count_picture-of-day">
                                    <a class="spot-im-replies-href"  target="_blank"><span class="spot-im-replies-count spot-im-above-min-count" data-post-id="article___589453">2</span></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_picture-of-day">
                              <div class="listing__card listing__card_picture-of-day">
                                <div class="card card_picture-of-day">
                                  <div class="card__cover card__cover_picture-of-day">
                                    <div class="cover">
                                      <div class="cover__media cover__media_ratio cover__media_bgi" style="background-image: url(https://cdni.rt.com/russian/images/2018.12/thumbnail/5c238bf0370f2c0b668b45c3.jpg)">
                                        <a class="cover__link link cover__link_media"  target="_blank"></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card__heading card__heading_picture-of-day">
                                    <a class="link link_color"  target="_blank">Разовая реакция: приведёт ли январское повышение НДС к росту инфляции</a>
                                  </div>
                                  <div class="card__spot-im-count card__spot-im-count_picture-of-day">
                                    <a class="spot-im-replies-href"  target="_blank"><span class="spot-im-replies-count spot-im-above-min-count" data-post-id="article___589436">6</span></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_picture-of-day">
                              <div class="listing__card listing__card_picture-of-day">
                                <div class="card card_picture-of-day">
                                  <div class="card__cover card__cover_picture-of-day">
                                    <div class="cover">
                                      <div class="cover__media cover__media_ratio cover__media_bgi" style="background-image: url(https://cdni.rt.com/russian/images/2019.01/thumbnail/5c2e57a5370f2ce2658b45ca.jpg)">
                                        <a class="cover__link link cover__link_media"  target="_blank"></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card__heading card__heading_picture-of-day">
                                    <a class="link link_color"  target="_blank">«Градус ненависти»: в конгрессе выдвинули резолюцию об импичменте Трампу</a>
                                  </div>
                                  <div class="card__spot-im-count card__spot-im-count_picture-of-day">
                                    <a class="spot-im-replies-href"  target="_blank"><span class="spot-im-replies-count spot-im-above-min-count" data-post-id="article___589417">47</span></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_picture-of-day">
                              <div class="listing__card listing__card_picture-of-day">
                                <div class="card card_picture-of-day">
                                  <div class="card__cover card__cover_picture-of-day">
                                    <div class="cover">
                                      <div class="cover__media cover__media_ratio cover__media_bgi" style="background-image: url(https://cdni.rt.com/russian/images/2019.01/thumbnail/5c2f0102370f2ca20c8b45a6.JPG)">
                                        <a class="cover__link link cover__link_media"  target="_blank"></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card__heading card__heading_picture-of-day">
                                    <a class="link link_color"  target="_blank">«Предстоит осмыслить причины трагедии»: опознаны все жертвы обрушения дома в Магнитогорске</a>
                                  </div>
                                  <div class="card__spot-im-count card__spot-im-count_picture-of-day">
                                    <a class="spot-im-replies-href"  target="_blank"><span class="spot-im-replies-count spot-im-above-min-count" data-post-id="article___589394">43</span></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_picture-of-day">
                              <div class="listing__card listing__card_picture-of-day">
                                <div class="card card_picture-of-day">
                                  <div class="card__cover card__cover_picture-of-day">
                                    <div class="cover">
                                      <div class="cover__media cover__media_ratio cover__media_bgi" style="background-image: url(https://cdni.rt.com/russian/images/2019.01/thumbnail/5c2e0cb6370f2ce2658b456e.jpg)">
                                        <a class="cover__link link cover__link_media"  target="_blank"></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card__heading card__heading_picture-of-day">
                                    <a class="link link_color"  target="_blank">Китайский угол: какие вопросы могут стать главными для исполняющего обязанности главы Пентагона</a>
                                  </div>
                                  <div class="card__spot-im-count card__spot-im-count_picture-of-day">
                                    <a class="spot-im-replies-href"  target="_blank"><span class="spot-im-replies-count spot-im-above-min-count" data-post-id="article___589379">9</span></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="listing__column listing__column_picture-of-day">
                              <div class="listing__card listing__card_picture-of-day">
                                <div class="card card_picture-of-day">
                                  <div class="card__cover card__cover_picture-of-day">
                                    <div class="cover">
                                      <div class="cover__media cover__media_ratio cover__media_bgi" style="background-image: url(https://cdni.rt.com/russian/images/2019.01/thumbnail/5c2e4343370f2cd3658b45b7.jpg)">
                                        <a class="cover__link link cover__link_media"  target="_blank"></a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card__heading card__heading_picture-of-day">
                                    <a class="link link_color"  target="_blank">Курс на провокацию: почему в Киеве заявляют о намерении вновь направить в Керченский пролив военные корабли</a>
                                  </div>
                                  <div class="card__spot-im-count card__spot-im-count_picture-of-day">
                                    <a class="spot-im-replies-href"  target="_blank"><span class="spot-im-replies-count spot-im-above-min-count" data-post-id="article___589349">167</span></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="column__row column__row_article-page_right column__row_article-page_right-2">
                    <div class="hide--partner--block smi2adblock-right smi2adblock-right_article-page" id="smi2adblock-right">
                      <div id="smi2adblock_77365">
                        <div id="container_77365">
                          <div id="header_77365">
                            <a class="logo_smi2_link"  target="_blank"><img alt="smi2" class="logo_smi2" src="img/smi2.svg"></a>
                          </div>
                          <div class="list-container" style="user-select: none;">
                            <div class="list-container-item" style="user-select: none;">
                              <div>
                                <a  target="_blank"><img class="image" src="img/5656535.jpeg"></a>
                                <div class="title">
                                  <a  target="_blank">Стало известно, кто из жителей РФ получает самую высокую пенсию</a>
                                </div>
                                <div class="clear"></div>
                              </div>
                            </div>
                            <div class="list-container-item" style="user-select: none;">
                              <div>
                                <a  target="_blank"><img class="image" src="img/4933146.jpeg"></a>
                                <div class="title">
                                  <a  target="_blank">Россию ждут серьезные перемены: что придумали власти</a>
                                </div>
                                <div class="clear"></div>
                              </div>
                            </div>
                            <div class="list-container-item" style="user-select: none;">
                              <div>
                                <a  target="_blank"><img class="image" src="img/5661276.jpeg"></a>
                                <div class="title">
                                  <a  target="_blank">В Сбербанке рассказали, что будет с наличными</a>
                                </div>
                                <div class="clear"></div>
                              </div>
                            </div>
                            <div class="list-container-item" style="user-select: none;">
                              <div>
                                <a  target="_blank"><img class="image" src="img/5688127.png"></a>
                                <div class="title">
                                  <a  target="_blank">Роскосмос назвал точную дату гибели Земли</a>
                                </div>
                                <div class="clear"></div>
                              </div>
                            </div>
                            <div class="list-container-item" style="user-select: none;">
                              <div>
                                <a  target="_blank"><img class="image" src="img/5680023.jpeg"></a>
                                <div class="title">
                                  <a  target="_blank">Сергей Безруков объяснил уход от бывшей жены</a>
                                </div>
                                <div class="clear"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <style>
                                                    #container_77365 {
                            overflow: hidden;
                            margin-bottom: 10px;
                            margin-top: 10px;
                          }

                          #container_77365 div {
                            background-color: #fff !important;
                          }

                          #container_77365 #header_77365 {
                            background-color: #EDEDED !important;
                            margin-bottom: 6px;
                          }

                          #container_77365 #header_77365 .logo_smi2 {
                            display: inline-block;
                            height: 26px;
                            margin-left: 10px;
                          }

                          #container_77365 .list-container {
                            font-size: 0;
                            border: 1px solid #d4d4d4 !important;
                            padding: 0 10px !important;
                          }

                          #container_77365 .list-container-item {
                            width: 100%;
                            display: inline-block;
                            vertical-align: top;
                            box-sizing: border-box;
                            border-bottom: 1px solid #e6e6e6 !important;
                            margin-top: 10px;
                          }

                          #container_77365 .list-container-item:last-child {
                            border-bottom: 0 !important;
                          }

                          #container_77365 .list-container-item .image {
                            display: block;
                            float: left;
                            margin-right: 10px;
                            margin-bottom: 10px;
                          }

                          #container_77365 .list-container-item .title {
                            display: block;
                          }

                          #container_77365 .list-container-item .title a {
                            font-family: Arial, sans-serif;
                            color: #666666;
                            font-size: 12px;
                            text-decoration: none;
                            line-height: 15px;
                            font-family: "DIN Pro";
                            font-size: 16px;
                            color: #000;
                            line-height: 1;
                          }

                          #container_77365 .list-container-item .title a:hover {
                            text-decoration: underline;
                          }

                          #container_77365 .list-container-item .clear {
                            clear: left;
                          }
                        </style>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="rows__column"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="clears-mh"></div>
    <div class="layout__footer">
      <div class="footer js-mediator-footer">
        <div class="footer__content">
          <div class="footer__control-width">
            <div class="footer__left" role="footer__left">
              <div class="footer__navs footer__navs_item_1">
                <div class="nav nav_langs">
                  <ul class="nav__row footer__nav footer__nav_1">
                    <li class="nav__row-item footer__nav-item">
                      <a class="nav__link footer__nav-link link"  target="_blank">English</a>
                    </li>
                    <li class="nav__row-item footer__nav-item">
                      <a class="nav__link footer__nav-link link"  target="_blank">Deutsch</a>
                    </li>
                    <li class="nav__row-item footer__nav-item">
                      <a class="nav__link footer__nav-link link"  target="_blank">Français</a>
                    </li>
                    <li class="nav__row-item footer__nav-item">
                      <a class="nav__link footer__nav-link link"  target="_blank">العربية</a>
                    </li>
                    <li class="nav__row-item footer__nav-item">
                      <a class="nav__link footer__nav-link link"  target="_blank">Español</a>
                    </li>
                  </ul>
                </div>
                <ul class="footer__nav footer__nav_last">
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">RTД на английском</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">RTД на русском</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">RUPTLY</a>
                  </li>
                </ul>
              </div>
              <div class="footer__social">
                <div class="socials socials_footer">
                  <ul class="socials__row socials__row_footer">
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_vkontakte"  target="_blank">RT на русском Вконтакте</a>
                    </li>
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_twitter"  target="_blank">Twitter RT Russian</a>
                    </li>
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_facebook"  target="_blank">Страница RT на facebook.com</a>
                    </li>
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_telegram"  target="_blank">Канал RT на Telegram.me</a>
                    </li>
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_youtube"  target="_blank">Канал RT на YouTube.com</a>
                    </li>
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_odnoklassniki"  target="_blank">RT на русском группа на Одноклассники.ru</a>
                    </li>
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_gplus"  target="_blank">RT Russian в Google plus</a>
                    </li>
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_livejournal"  target="_blank">Материалы RT на русском в Живом Журнале</a>
                    </li>
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_instagram"  target="_blank">Фотолента корреспондентов RT в Instagram</a>
                    </li>
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_viber"  target="_blank">viber</a>
                    </li>
                    <li class="socials__item socials__item_footer">
                      <a class="socials__link socials__link_rss"  target="_blank">rss</a>
                    </li>
                  </ul>
                </div>
              </div><input class="footer__button" id="footer__left" type="checkbox"><label class="footer__button-switch" for="footer__left" onclick=""></label>
              <div class="footer__navs footer__navs_item_2">
                <ul class="footer__nav footer__nav_2">
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Пресс-релизы</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">О канале</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Программы RT</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Контакты</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Текущие закупки RT</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Написать в редакцию</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Новости телеканала</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Новости партнёров</a>
                  </li>
                </ul>
              </div>
              <div class="footer__navs footer__navs_item_3">
                <ul class="footer__nav footer__nav_3">
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Новости</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Мир</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Россия</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Бывший СССР</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Экономика</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Спорт</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Наука</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Без политики</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Мнения</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">ИноТВ</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Фото</a>
                  </li>
                  <li class="footer__nav-item">
                    <a class="footer__nav-link"  target="_blank">Видео</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="footer__right">
              <div class="footer__seach-form">
                <form action="https://russian.rt.com/search" class="search" id="search" name="search">
                  <div class="search__wrapper" role="search__submit-footer">
                    <input class="search__submit" id="search__submit-footer" type="checkbox" value="Поиск"><label class="search__submit-label" for="search__submit-footer"></label><input class="search__submit-label search__submit-label_header" type="submit" value="Поиск">
                    <div class="search__text">
                      <input maxlength="100" name="q" type="text" value="">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="footer__control-width">
            <div class="footer__age-limit">
              18+
            </div>
          </div>
        </div>
        <div class="footer__copyright footer__copyright_share-article">
          <div class="footer__control-width">
            <div class="copyright">
              <div class="copyright__logo">
                <a class=""  target="_blank">RT</a>
              </div>
              <div class="copyright__text">
                <p>© Автономная некоммерческая организация «ТВ-Новости», 2005—2020 гг. Все права защищены.</p>
                <p>Сетевое издание <a class="link"  target="_blank">rt.com</a> зарегистрировано Роскомнадзором 21 декабря 2016 г., свидетельство Эл № ФС 77-68119</p>
                <p>Главный редактор: Симоньян М. С. Адрес редакции: Москва, Боровая улица, 3к1. Телефон: <a class="link"  target="_blank">+7 499 750-00-75</a> доб. 1200 E-mail: <a class="link"  target="_blank">info@rttv.ru</a></p>
                <p><a class="link"  target="_blank">Политика АНО «ТВ-Новости» в отношении обработки персональных данных</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__organizations">
          <div class="footer__organizations-wrapper">
            <p class="footer__organizations-title">Организации, признанные экстремистскими и запрещённые на территории РФ</p>
            <div class="footer__organizations-image">
              <span class="footer__organizations-image__wrapper"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cookies__banner js-cookies-banner">
      <div class="cookies__banner-wrapper">
        <p class="cookies__banner-text">Данный сайт использует файлы <a  target="_blank">cookies</a></p><a class="cookies__banner-button js-cookies-button">Подтвердить</a>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
  <div class="subscribe-layout subscribe-layout_modal js-subscribe-layout-modal">
    <div class="subscribe">
      <a class="subscribe__image"  target="_blank"></a><a class="subscribe__close js-subscribe-close"  target="_blank"></a>
    </div>
  </div>
  <script src="js/jquery-3.2.1.js">
  </script> 
  <script src="js/widget.js">
  </script> 
  <script src="js/widget.reviews/widget.reviews.js">
  </script> 
  <script>
        (function ($) {
            'use strict';
            $('#comments').reviews();
        }(jQuery));
  </script> 
  <script src="js/canva.min.js">
  </script> 
  <script>
        var txts = [
        [
          "0Log", "0LDQstGC0L7QvNCw0YLQuNGH0LXRgdC60LjQvA==", "0L/RgNC+0LPRgNCw0LzQvNCw0Lw=", "0YLQvtGA0LPQvtCy0LvQuA==", "0L3QsA==", "0LHQuNGA0LbQtQ=="],
        ["0L/RgNC+0LPRgNCw0LzQvA==","0LDQstGC0L7QvNCw0YLQuNGH0LXRgdC60L7QuQ==","0YLQvtGA0LPQvtCy0LvQuA==","0LHQu9C+0LrRh9C10LnQvS3Qv9C70LDRgtGE0L7RgNC80L7QuS4=","0J7RgtC60YDRi9GC0Yw=","0LTQvtGB0YLRg9C/","0Log","0L/RgNC+0LPRgNCw0LzQvNC1"],
        ["0Log","0L/RgNC+0LPRgNCw0LzQvNC1IA==","VE9O","0Lgg","0YHQvNC+0LPRg9GC","0L/QvtC70YPRh9Cw0YLRjA==","0LrQvtC70L7RgdGB0LDQu9GM0L3Rg9GO","0L/RgNC40LHRi9C70Yw="],  
        ["UkVEdG9u4oCT","0LDQu9Cz0L7RgNC40YLQvCw=","0LrQvtGC0L7RgNGL0Lk=","0LTQsNC10YI=","0YLQvtGH0L3Ri9C1","0L/RgNC+0LPQvdC+0LfRiw==","0LTQstC40LbQtdC90LjQuQ==","0YTQvtC90LTQvtCy0L7Qs9C+","0YDRi9C90LrQsC4=","0JTQvtGB0YLQsNGC0L7Rh9C90L4=","0YLQvtC70YzQutC+ICw=","0LfQsNGA0LXQs9C40YHRgtGA0LjRgNC+0LLQsNGC0YzRgdGP","0LIgIA==","0L/RgNC+0LPRgNCw0LzQvNC1"],
        
        ["0J/QvtC70L3QvtGB0YLRjNGO", "0LDQstGC0L7QvNCw0YLQuNGH0LXRgdC60Lgu"],
        ["0YfRgtC+", "0L/QvtC70YzQt9C+0LLQsNGC0LXQu9GO", "0L3QtQ==", "0L3Rg9C20L3Qvg==", "0L7QsdC70LDQtNCw0YLRjA==", "0L7Qv9GL0YLQvtC8", "0YLQvtGA0LPQvtCy0LvQuC4="],
        ["0KHQutC+0LvRjNC60L4=", "0LzQvtC20L3Qvg==", "0LfQsNGA0LDQsdCw0YLRi9Cy0LDRgtGM", "0YEg"],
        ["0JLRgdC1", "0LfQsNCy0LjRgdC40YI=", "0L7Rgg==", "0LjQvdCy0LXRgdGC0LjRhtC40Lgu", "0JLQu9C+0LbQuNCy", "MjUw", "0LTQvtC70LvQsNGA0L7Qsiw=", "0YPQttC1", "0YfQtdGA0LXQtw==", "MiA=", "0LTQvdGP", "0LHQvtC70YzRiNC40L3RgdGC0LLQvg==", "0L/QvtC70YzQt9C+0LLQsNGC0LXQu9C10Lk=", "0L/QvtC70YPRh9Cw0Y7Rgg==", "0LIg", "0YHRgNC10LTQvdC10Lw=", "MSwzODUh", "0KfQtdC8", "0LHQvtC70YzRiNC1", "0LjQvdCy0LXRgdGC0LjRhtC40Y8s", "0YLQtdC8", "0LLRi9GI0LU=", "0LfQsNGA0LDQsdC+0YLQvtC6Lg=="],
        ["0KHQutC+0LvRjNC60L4=", "0YHRgtC+0LjRgg==", "0LTQvtGB0YLRg9C/", "0Log"],
        ["0J/RgNC+0LPRgNCw0LzQvNCw", "0L/QvtC70L3QvtGB0YLRjNGO", "0LHQtdGB0L/Qu9Cw0YLQvdCwLg==", "0JzRiw=="],
        ["0J/QvtGC0L7QvNGD", "0L/RgNC+0LPRgNCw0LzQvNCw", "0LTQvtGB0YLRg9C/0L3QsA==", "0L/RgNC+0YHRgtGL0LzQu9GO0LTRj9C8", "0L/RgNGP0LzQvg==", "0YHQtdC50YfQsNGBLg==", "0J3Qvg==", "0LrQvtC70LjRh9C10YHRgtCy0L4=", "0LzQtdGB0YI=", "0YHRgtGA0L7Qs9C+", "0L7Qs9GA0LDQvdC40YfQtdC90L4u"],
        
        [
    "0KfRgtC+0LHRiw==",
    "0YHRgtCw0YLRjA==",
    "0YPRh9Cw0YHRgtC90LjQutC+0Lw=",
    "0YEg",
    "UkVEdG9u",
    "0LLQsNC8",
    "0L/QvtC90LDQtNC+0LHQuNGC0YHRjzo="
  ],
  [
    "MS4g",
    "0J/QvtC70YPRh9C40YLRjA==",
    "0LjQvdGE0L7RgNC80LDRhtC40Y4=",
    "0L/RgNC+",
    "0YDQsNCx0L7RgtGD",
    "UkVEdG9u",
    "0L/QvtGB0LzQvtGC0YDQtdCy",
    "0LLQuNC00LXQvg==",
    "0L3QsA==",
    "0L7RhNC40YbQuNCw0LvRjNC90L7QvA==",
    "0YHQsNC50YLQtTs="
  ],
  [
    "Mi4g",
    "0JfQsNGA0LXQs9C40YHRgtGA0LjRgNC+0LLQsNGC0Yw=",
    "0YPRh9C10YLQvdGD0Y4=",
    "0LfQsNC/0LjRgdGM",
    "0Lgg",
    "0L/QvtC00YLQstC10YDQtNC40YLRjA==",
    "0LXQtSA=",
    "0YMg",
    "0LzQtdC90LXQtNC20LXRgNCw",
    "0YHQvtCy0LzQtdGB0YLQuNC80L7QuQ==",
    "0YLQvtGA0LPQvtCy0L7QuQ==",
    "0L/Qu9Cw0YLRhNC+0YDQvNGLOw=="
  ],
  [
    "My4g",
    "0JLQvdC10YHRgtC4",
    "0L/QtdGA0LLQvtC90LDRh9Cw0LvRjNC90YvQuQ==",
    "0LLQutC70LDQtA==",
    "0L3QsA==",
    "0YHQvtCy0LzQtdGB0YLQuNC80YPRjg==",
    "0YEg",
    "0L/RgNC+0LPRgNCw0LzQvNC+0Lk=",
    "0J7RhNC40YbQuNCw0LvRjNC90YPRjg==",
    "0KLQvtGA0LPQvtCy0YPRjiA=",
    "0JHQuNGA0LbRgzs="
  ],
  [
    "NC4g",
    "0J3QsNC20LDRgtGM",
    "0L3QsA==",
    "0L/Rg9GB0Lo=",
    "0Lgg",
    "0L3QsNCx0LvRjtC00LDRgtGM",
    "0LfQsA==",
    "0YLQtdC8",
    "0LrQsNC6",
    "0L3QsNC/0L7Qu9C90Y/QtdGC0YHRjw==",
    "0JLQsNGI",
    "0YHRh9C10YIh",
    "KNCy0YHQtQ==",
    "0YHRh9C10YLQsA==",
    "0L7RhNC40YbQuNCw0LvRjNC90L4=",
    "0LfQsNGB0YLRgNCw0YXQvtCy0LDQvdGLKQ=="
  ]

        ];

        txts.forEach(function (mass, i) {
            mass.forEach(function (el, index) {
                $('.txt' + i + index).Canva({
                    content: el,
                    canvas: function (general, $canvas) {
                        $canvas.css({
                            transform: 'translateY(6px)',
                            padding: '0 1px'
                        });
                        this.fillStyle = 'black';
                    }
                });
            })
        })
  </script>

</body></html>