<template>
  <main>
    <section class="home">
      <div class="home-wrapper container is-widescreen">
        <div class="date">
          <div class="calendar">
            <ul>
              <li>
                <img src="~/assets/img/calendar.svg">
                <span>
                  7 дек. 2019 г.
                </span>
              </li>
              <li>
                <img src="~/assets/img/placeholder.svg">
                <span>
                  ТЦ Мегагринн, зал «Соловьиный»
                </span>
              </li>
            </ul>
          </div>
          <h1>
            <span>Бизнес-субботник</span>«Управление со смыслом»
          </h1>
          <p class="sub-title">
            Прокачай свои управленческие навыки<span><span>. </span>Будь среди лидеров изменений</span>
          </p>
          <div class="buttons">
            <a href="#" v-scroll-to="'#registration'" class="button main-button">Участвовать</a>
          </div>
          <div class="main-sponsor">
            <img src="~/assets/img/sponsor2-m.png" />
            <img src="~/assets/img/sponsor3-m.png" />
            <img src="~/assets/img/keaz-m.svg" />
          </div>
        </div>
      </div>
    </section>
    <section class="about main-block" id="about">
      <div class="container">
        <div class="about-wrapper">
          <h2>
            О встрече
          </h2>
          <p class="subtitle about-subtitle">
            Бизнес-субботник "Управление со смыслом"
            — это открытая площадка
            для ключевых руководителей компаний нашего города, для лидеров
            транcформаций и изменений, для проактивных управленцев
          </p>
          <p class="free">Участие бесплатное</p>
          <span class="dedline">Количество мест ограничено</span>
        </div>
      </div>
    </section>
    <section class="for main-block">
      <div class="line">
        <span></span>
        <span></span>
      </div>
      <div class="container">
        <h2>
          Для кого
        </h2>
        <p class="subtitle">
          для всех, кто хочет развиваться в управленческой деятельности
        </p>
        <div class="columns for-items border-items">
          <div class="column is-4">
            <div class="for-item">
              <img src="~/assets/img/pen.svg" />
              <h3>Создать</h3>
              <p>
                план действий, который реально сработает
              </p>
            </div>
          </div>
          <div class="column is-4">
            <div class="for-item">
              <img src="~/assets/img/idea.svg" />
              <h3>Обрести</h3>
              <p>
                новый смысл в бизнесе и жизни
              </p>
            </div>
          </div>
          <div class="column is-4">
            <div class="for-item">
              <img src="~/assets/img/progress-circles.svg" />
              <h3>Перезагрузиться</h3>
              <p>
                в кругу понимающих тебя людей
              </p>
            </div>
          </div>
        </div>
        <div class="columns for-items padding-mobile">
          <div class="column is-4">
            <div class="for-item">
              <img src="~/assets/img/find.svg" />
              <h3>раскрыть</h3>
              <p>
                потенциал себя и своего бизнеса
              </p>
            </div>
          </div>
          <div class="column is-4">
            <div class="for-item">
              <img src="~/assets/img/magic.svg" />
              <h3>Усилить</h3>
              <p>
                и вдохновить команду на развитие
              </p>
            </div>
          </div>
          <div class="column is-4">
            <div class="for-item">
              <img src="~/assets/img/checklist.svg" />
              <h3>реализовать</h3>
              <p>
                масштабные проекты в следующем году
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="schedule main-block" id="schedule">
      <div class="container">
        <h2>Программа</h2>
        <p class="subtitle">
          Суббота, 7 декабря
        </p>
        <div class="schedule-wrapper">
          <div class="schedule-items white">
            <div class="schedule-item item-top schedule-item__left-col">
              <p class="time">
                9:30 - 10:00
              </p>
              <div class="circle">
                <span class="elipse-1"></span>
                <span class="elipse-2"></span>
                <span class="elipse-3"></span>
              </div>
            </div>
            <div class="schedule-item item-top schedule-item__right-col">
              <p>
                Сбор гостей и регистрация участников
              </p>
            </div>
          </div>
          <div class="schedule-items orange">
            <div class="schedule-item schedule-item__left-col">
              <p class="time">
                10:00 - 10:30
              </p>
              <div class="circle">
                <span class="elipse-1"></span>
                <span class="elipse-2"></span>
                <span class="elipse-3"></span>
              </div>
            </div>
            <div class="schedule-item schedule-item__right-col">
              <div class="schedule-item__about">
                <p>Открытие мероприятия</p>
                <span>Ярослав Иванов, управляющий директор ГК КЭАЗ «Руководитель нового поколения: вызовы современного
                  управления»</span>
              </div>
            </div>
          </div>
          <div class="schedule-items white">
            <div class="schedule-item schedule-item__left-col">
              <p class="time">
                10:30 - 14:30
              </p>
              <div class="circle">
                <span class="elipse-1"></span>
                <span class="elipse-2"></span>
                <span class="elipse-3"></span>
              </div>
            </div>
            <div class="schedule-item schedule-item__right-col">
              <p>Бизнес-игра «Завод 2020»</p>
            </div>
          </div>
          <div class="schedule-items orange">
            <div class="schedule-item schedule-item__left-col">
              <p class="time">
                14:30 - 15:30
              </p>
              <div class="circle">
                <span class="elipse-1"></span>
                <span class="elipse-2"></span>
                <span class="elipse-3"></span>
              </div>
            </div>
            <div class="schedule-item schedule-item__right-col">
              <p>Перерыв</p>
            </div>
          </div>
          <div class="schedule-items white">
            <div class="schedule-item schedule-item__left-col">
              <p class="time">
                15:00 - 18:00
              </p>
              <div class="circle">
                <span class="elipse-1"></span>
                <span class="elipse-2"></span>
                <span class="elipse-3"></span>
              </div>
            </div>
            <div class="master schedule-item schedule-item__right-col">
              <p>Мастер-классы</p>
              <ul>
                <li>
                  <span class="title-master">Зара Егиазарян</span>
                  <span>«Создание смыслов в управлении ключевые тренды и технологии»</span>
                </li>
                <li>
                  <span class="title-master">Дмитрий Коробка</span>
                  <span>«Новые смыслы производства: от стояния у стоянка до инновационных разработок»</span>
                </li>
                <li>
                  <span class="title-master">Ольга Панова</span>
                  <span>«КЭАЗ: завод или все же люди: истинный смысл нашего бизнеса»</span>
                </li>
                <li>
                  <span class="title-master">Ярослав Иванов</span>
                  <span>«Управление смыслами при трансформации предприятия и ГК»</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="schedule-items orange">
            <div class="schedule-item last-item item-top schedule-item__left-col">
              <p class="time">
                18:00 - 18:30
              </p>
              <div class="circle">
                <span class="elipse-1"></span>
                <span class="elipse-2"></span>
                <span class="elipse-3"></span>
              </div>
            </div>
            <div class="schedule-item last-item item-top schedule-item__right-col">
              <p>Подведение итогов. Награждение победителей</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="timer-block main-block">
      <div class="container">
        <timer starttime="Nov 5, 2019 15:37:25" endtime="Dec 7, 2019 09:30:00"></timer>
      </div>
    </section>
    <section class="game main-block" id="game">
      <div class="container">
        <div class="game-description">
          <span>бизнес-игра</span>
          <h2>
            Завод 2020
          </h2>
          <p>
            Компании способны успешно реализовывать только те долгосрочные планы, которые полностью созвучны их
            корпоративной культуре. Все, что противоречит этой культуре, - не работает и становится токсичным!
          </p>
          <div class="line">
            <span></span>
            <span></span>
          </div>
          <p>Постройте качественные коммуникации, чтобы победить в бизнес-игре</p>
        </div>
        <span>Условия игры</span>
        <div class="columns">
          <div class="column">
            <div class="conditions">
              <div class="box-game">
                <p>
                  Для участия в игре необходимо наличие <span>управленческого опыта</span>
                </p>
              </div>
              <div class="box-game">
                <p>
                  Только слаженная команда одержит <span> победу </span>
                </p>
              </div>
              <div class="box-game">
                <p>
                  Победители и лучшие игроки получат <span> приятные бонусы </span>
                </p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="numbers-game">
              <div class="nambers-wrapper">
                <div class="number-item">
                  <span class="number__game">
                    4
                  </span>
                  <p>
                    часа игры
                  </p>
                </div>
                <div class="number-item">
                  <span class="number__game">
                    10
                  </span>
                  <p>
                    команд
                  </p>
                </div>
                <div class="number-item">
                  <span class="number__game">
                    10
                  </span>
                  <p>
                    победителей
                  </p>
                </div>
              </div>
              <div class="buttons">
                <a href="#" v-scroll-to="'#registration'" class="button main-button">Участвовать</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="workshop main-block" id="workshop">
      <div class="container">
        <div class="work-shop-wrapper">
          <span>МАСТЕР-КЛАСС</span>
          <h2>
            Создание смыслов в управлении
          </h2>
          <div class="work-shop__items">
            <div class="columns work-shop__columns">
              <div class="column work-shop__block">
                <p>
                  <span>Блок 1.</span> Карта организационного развития. От миссии и ценностей к системе управления
                </p>
              </div>
              <div class="column">
                <faq title="Результат">
                  <p>Руководители осознают взаимосвязь между миссией, ценностями, системой управления, эффективностью и
                    требованиями к компетенциям лидеров</p>
                </faq>
              </div>
            </div>
            <div class="columns work-shop__columns">
              <div class="column work-shop__block">
                <p>
                  <span>Блок 2.</span> Вызовы современного лидера: организационные и культурные факторы успеха
                </p>
              </div>
              <div class="column">
                <faq title="Результат">
                  <p>Руководители знакомы с факторами организационной, культурной и личной трансформации</p>
                </faq>
              </div>
            </div>
            <div class="columns work-shop__columns">
              <div class="column work-shop__block">
                <p>
                  <span>Блок 3.</span> Матрица диагностики ценностей
                </p>
              </div>
              <div class="column">
                <faq title="Результат">
                  <p>Руководители могут определить собственные ценности, обеспечивающие ядро эффективности и могут в
                    дальнейшем применить инструмент для диагностики своих команд</p>
                </faq>
              </div>
            </div>
            <div class="columns work-shop__columns">
              <div class="column work-shop__block">
                <p>
                  <span>Блок 4.</span> Семь типов сознательности современной организации. Управление со смыслом по
                  Р.Барретту
                </p>
              </div>
              <div class="column">
                <faq title="Результат">
                  <p>Руководители могут системно представить трансформационный путь организации на каждом этапе, выявить
                    драйверы и деструкторы каждого этапа, узнать о технологиях мотивации и развития сотрудников на
                    каждом из этапов</p>
                </faq>
              </div>
            </div>
            <div class="columns work-shop__columns">
              <div class="column work-shop__block">
                <p>
                  <span>Блок 5.</span> Пять граней лидерства: директивный, вовлекающий, командообразующий, визионерский
                  и
                  коучинговый. Матрица самооценки лидерских качеств
                </p>
              </div>
              <div class="column">
                <faq title="Результат">
                  <p>Руководителям представлены все 5 аспектов с возможностью диагностики своих слабых и сильных сторон
                    и кратким инструментарием в рамках каждого аспекта лидерства, а также ситуациями применения каждого
                    из подходов.</p>
                </faq>
              </div>
            </div>
            <div class="columns work-shop__columns">
              <div class="column work-shop__block">
                <p>
                  <span>Блок 6.</span> Квадрант Офмана
                </p>
              </div>
              <div class="column">
                <faq title="Результат">
                  <p>Участники имеют коучинговый инструмент для корректировки своих деструкторов и поиска
                    комплиментарных качеств, в дальнейшем смогут применить для работы со своими сотрудниками</p>
                </faq>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="main-block why">
      <div class="container">
        <h2>Зачем идти</h2>
        <div class="why-items">
          <div class="columns">
            <div class="why-wrapper column">
              <div class="why-wrapper__title">
                <span class="number-why">
                  1
                </span>
                <h3>
                  Прокачайте свои управленческие компетенции
                </h3>
              </div>
            </div>
            <div class="why-wrapper column">
              <div class="why-wrapper__title">
                <span class="number-why">
                  2
                </span>
                <h3>
                  Станьте частью сообщества <br> управленцев
                </h3>
              </div>
            </div>
          </div>
          <div class="columns why-2">
            <div class="why-wrapper column">
              <div class="why-wrapper__title">
                <span class="number-why">
                  3
                </span>
                <h3>
                  Постройте сеть деловых <br> связей
                </h3>
              </div>
            </div>
            <div class="why-wrapper column">
              <div class="why-wrapper__title">
                <span class="number-why">
                  4
                </span>
                <h3>
                  Вдохновитесь новыми <br> идеями
                </h3>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="why-wrapper column">
              <div class="why-wrapper__title">
                <span class="number-why">
                  5
                </span>
                <h3>
                  Развивайте стратегическое <br> мышление
                </h3>
              </div>
            </div>
            <div class="why-wrapper column">
              <div class="why-wrapper__title">
                <span class="number-why">
                  6
                </span>
                <h3>
                  Выйдите на новый уровень <br> управления
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="main-block speakers" id="speakers">
      <div class="container">
        <h2>Спикеры</h2>
        <div class="speakers-items">
          <div class="columns">
            <div class="column">
              <div class="speakers-wrapper">
                <div class="speaker-1">
                  <img src="~/assets/img/speaker-1.png" />
                  <h3>Ярослав Иванов</h3>
                  <p>Управляющий группы компаний КЭАЗ, архитектор результативных и эффективных организаций</p>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="speakers-wrapper">
                <div class="speaker-2">
                  <img src="~/assets/img/speaker-2.png" />
                  <h3>Зара Егиазарян</h3>
                  <p>Бизнес-тренер и эксперт по оценке управленческих компетенций, фасилитатор, эксперт по талантам</p>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="speakers-wrapper">
                <div class="speaker-3">
                  <img src="~/assets/img/speaker-3.png" />
                  <h3>Дмитрий Коробка</h3>
                  <p>Директор по производству ГК КЭАЗ</p>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="speakers-wrapper">
                <div class="speaker-4">
                  <img src="~/assets/img/speaker-4.png" />
                  <h3>Ольга Панова</h3>
                  <p>Директор по персоналу ГК КЭАЗ</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sponsors main-block">
      <div class="container">
        <h2>Организаторы</h2>
        <div class="sponsor columns">
          <div class="sponsor-item">
            <img src="~/assets/img/AI-1.svg" />
            <p>Курский электроаппаратный завод</p>
          </div>
          <div class="sponsor-item">
            <img src="~/assets/img/sponsor2.png" />
            <p>Администрация города Курска</p>
          </div>
          <div class="sponsor-item">
            <img src="~/assets/img/sponsor3.png" />
            <p>Business Life Stream</p>
          </div>
        </div>
      </div>
    </section>
    <section class="partners main-block">
      <div class="container">
        <h2>Партнеры</h2>
        <div class="partners-wrapper">
          <slider></slider>
        </div>
      </div>
    </section>
    <section class="main-block registration" id="registration">
     <div class="line">
        <span></span>
        <span></span>
      </div>
      <div class="container">
        <vueliForm />
      </div>
    </section>
  </main>
</template>
<script>
  import Faq from '~/components/Faq.vue'
  import Slider from '~/components/Slider.vue'
  import Timer from '~/components/Timer.vue'
  import VueliForm from '~/components/VueliForm.vue'
  export default {
    head: {
    title: 'Бизнес - субботник «Управление со смыслом»'
  },
    components: {
      Faq,
      Slider,
      Timer,
      VueliForm
    }
  }

</script>
