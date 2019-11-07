<template>
  <div class="faq">
    <div class="faq-trigger" @click="open=!open" :class="open?'active':''">
      <h3>{{ title }}</h3>
      <div class="faq-icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><path d="M42 20H22V0h-2v20H0v2h20v20h2V22h20z"/></svg>
      </div>
    </div>
    <transition name="slideDown">
      <div class="faq-body" v-show="open">
        <slot></slot>
      </div>
    </transition>
  </div>
</template>
<script>
export default {
    props: {
		title: {
			type: String,
		}
	},
	data() {
		return {
			open: false
		}
	}
}
</script>
