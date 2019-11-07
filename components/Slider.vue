<template>
  <!-- You can find this swiper instance object in current component by the "mySwiper"  -->
  <div v-swiper:mySwiper="swiperOption">
    <div class="swiper-wrapper">
      <div class="siper-partners swiper-slide" v-for="banner in banners" :key="banner.img">
        <img :src="banner.img" />
      </div>
    </div>
    <div class="swiper-pagination swiper-pagination-bullets"></div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        banners: [
          {
            img: '/partners/donat.svg'
          },
          {
            img: '/partners/fabrika.png'
          },
          {
            img: '/partners/lifestream.png'
          },
          {
            img: '/partners/serfing.png'
          },
          {
            img: '/partners/vertical.png'
          },
          {
            img: '/partners/voda.png'
          },
          {
            img: '/partners/kb.png'
          },
          {
            img: '/partners/star.png'
          }
        ],
        swiperOption: {
          grabCursor: true,
          slidesPerView: 4,
          slidesPerGroup: 3,
          spaceBetween: 30,
          pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true
          }
        }
      }
    }
  }

</script>
