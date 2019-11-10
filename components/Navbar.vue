<template>
  <nav role="navigation" aria-label="main navigation" @scroll="handleSCroll">
    <div class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://keaz.ru/">
            <img src="~/assets/img/logo.svg">
          </a>
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
            data-target="navbarBasicExample" @click="open=!open" :class="classObject">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu" :class="classObject">
          <div class="navbar-start">
            <a href="#" v-scroll-to="'#about'" class="navbar-item" @click="open=!open">
              О встрече
            </a>
            <a href="#" v-scroll-to="'#schedule'" class="navbar-item" @click="open=!open">
              программа
            </a>
            <a href="#" v-scroll-to="'#game'" class="navbar-item" @click="open=!open">
              бизнес-игра
            </a>
            <a href="#" v-scroll-to="'#workshop'" class="navbar-item" @click="open=!open">
              Мастерская
            </a>
            <a href="#" v-scroll-to="'#speakers'" class="navbar-item" @click="open=!open">
              Спикеры
            </a>
          </div>
          <div class="navbar-end">
            <a herf="tel:+7 967 231-11-88" class="navbar-item">
              +7 967 231-11-88
            </a>
          </div>
        </div>
      </div>
      <div class="overlay" @click="open=!open" :class="open?'show':''"></div>
    </div>
    <div class="navbar navbar-menu-sticky" id="navbar-sticky">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://keaz.ru/">
            <img src="~/assets/img/logo.svg">
          </a>
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
            data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a href="#" v-scroll-to="'#about'" class="navbar-item">
              О встрече
            </a>
            <a href="#" v-scroll-to="'#schedule'" class="navbar-item">
              программа
            </a>
            <a href="#" v-scroll-to="'#game'" class="navbar-item">
              бизнес-игра
            </a>
            <a href="#" v-scroll-to="'#workshop'" class="navbar-item">
              Мастерская
            </a>
            <a href="#" v-scroll-to="'#speakers'" class="navbar-item">
              Спикеры
            </a>
          </div>
          <div class="navbar-end">
          <div class="buttons">
            <a href="#" v-scroll-to="'#registration'" class="button main-button">Участвовать</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>
<script>

export default {
  data () {
    return {
    open: false
    }
  },
  methods: {
    handleSCroll(event) {
			let nav = document.querySelector("#navbar-sticky");
			if (window.scrollY > 1100) {
				nav.classList.add("fixed-top");
			} else {
				nav.classList.remove("fixed-top");
			}
		}
  },
  computed: {
    classObject: function () {
      return {
        'is-active': this.open
      }
  }
},
  beforeMount() {
		window.addEventListener('scroll', this.handleSCroll);
  },
  beforeDestroy() {
		window.removeEventListener('scroll', this.handleSCroll);
	}
}
</script>
