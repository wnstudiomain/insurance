<template>
  <div class="home main-block home-thanks">
    <div class="home-wrapper container is-widescreen">
        <h1>
          Спасибо за вашу заявку
        </h1>
        <p class="sub-title">
          В ближайшее время мы свяжемся с Вами для уточнения деталей
        </p>
        <div class="buttons">
            <a @click="back()" class="button main-button">Назад</a>
          </div>
        <div class="main-sponsor">
          <img src="~/assets/img/sponsor2-m.png" />
          <img src="~/assets/img/sponsor3-m.png" />
          <img src="~/assets/img/keaz-m.svg" />
        </div>
      </div>
    </div>
</template>
<script>
export default {
  layout: 'thanksl',
     head: {
    title: 'Спасибо за вашу заявку'
  },
  methods: {
      back() {
        this.$router.back()
        }
  }
}
</script>
<style>
.home-thanks .home-wrapper .sub-title {
  margin-top: 40px
}
</style>
