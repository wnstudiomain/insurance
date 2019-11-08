<template>
  <form @submit.prevent="onSubmit" class="form">
    <div class="form-block">
      <div class="form-input" :class="{ error: $v.name.$error }">
        <div class="field required">
          <input class="form-control" :class="{ 'hasValue':this.name }" type="text" name="text"
            v-model.trim="$v.name.$model">
          <label>Ваше имя</label>
          <span class="focus-border"></span>
        </div>
        <p class="help is-danger error-message" v-if="$v.name.required">Это поле обязательно для заполнения</p>
      </div>
      <div class="form-input">
        <div class="field">
          <input class="form-control" :class="{ 'hasValue':this.post }" type="text" name="post" v-model="post">
          <label>Должность</label>
          <span class="focus-border"></span>
        </div>
      </div>
    </div>
    <div class="form-block">
      <div class="form-input" :class="{ error: $v.email.$error }">
        <div class="field required">
          <input class="form-control" :class="{ 'hasValue':this.email }" type="email" name="email"
            v-model.trim="$v.email.$model">
          <label>Email</label>
          <span class="focus-border"></span>
        </div>
        <p class="help is-danger error-message" v-if="!$v.email.required">Это поле обязательно для заполнения</p>
        <p class="help is-danger error-message" v-if="!$v.email.email">Введите верный email</p>
      </div>
      <div class="form-input">
        <div class="field">
          <input class="form-control" :class="{ 'hasValue':this.company }" type="text" name="company" v-model="company">
          <label>Компания</label>
          <span class="focus-border"></span>
        </div>
      </div>
    </div>
    <div class="form-block">
      <div class="form-input" :class="{ error: $v.phone.$error }">
        <div class="field required">
          <input class="form-control" :class="{ 'hasValue':this.phone }" type="tel" name="phone"
            v-model.trim="$v.phone.$model" v-mask="'(###) ### - ## - ##'" />
          <label>Телефон</label>
          <span class="focus-border"></span>
        </div>
        <p class="help is-danger error-message" v-if="!$v.phone.required">Это поле обязательно для заполнения</p>
      </div>
      <div class="form-input">
        <div class="field">
          <div class="select">
            <select class="form-control" v-model="experience">
              <option value="" disabled>Управленческий опыт</option>
              <option>до 2 лет</option>
              <option>от 2 до 5 лет</option>
              <option>от 5 до 10 лет</option>
              <option>свыше 10 лет</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="form-block">
      <div class="form-input">
        <div class="field">
          <div class="select">
            <select class="form-control" v-model="interests">
              <option value="" disabled>Сфера профессиональных интересов (укажите один или несколько вариантов)</option>
              <option>маркетинг, PR</option>
              <option>разработка и проектирование продукта</option>
              <option>закупки</option>
              <option>производство</option>
              <option>продажи</option>
              <option>инновации, проектная деятельность</option>
              <option>бизнес-проектирование, организационное развитие</option>
              <option>производство</option>
              <option>HR</option>
              <option>экономика, финансы, инвестиции</option>
              <option>предпринимательство</option>
              <option>производство</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="buttons">
      <button class="button main-button" type="submit">Участвовать</button>
          <p class="secp">
      Нажимая кнопку "Участвовать" вы соглашаетесь с условиями <a href="https://keaz.ru/help/support/politika-konfidencialnosti"> Политики конфедециальности </a>
    </p>
      </div>
  </form>
</template>

<script>
  import {
    required,
    minLength,
    email
  } from "vuelidate/lib/validators"
  import {
    mask
  } from 'vue-the-mask'

  export default {
    directives: {
      mask
    },
    name: "VueliForm",
    data() {
      return {
        email: "",
        name: "",
        phone: "",
        post: "",
        experience: "",
        interests: "",
        company: "",
      };
    },
    validations: {
      email: {
        required,
        email
      },
      name: {
        required
      },
      phone: {
        required
      },
    },
    methods: {
      async onSubmit () {
        this.$v.$touch()
        if (this.$v.$anyError) {
				return
			}
        let formData = new FormData();
        formData.append('name', this.name);
        formData.append('email', this.email);
        formData.append('phone', this.phone);
        formData.append('post', this.post);
        formData.append('company', this.company);
        formData.append('experience', this.experience);
        formData.append('interests', this.interests);
        console.log( formData );
        await this.$axios.post('http://hunter.wnstudio.ru/api/lead-feedback.php', formData, {
				  headers: {
					  'Content-Type': 'multipart/form-data'
				  }
			  }).then((response) => {
          console.log(response)
        }).catch((error) => {
            console.log(error);
        });
      }
      }
  };

</script>
