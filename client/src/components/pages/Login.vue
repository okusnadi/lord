<template lant="pug">
  .login
      img.logo(src="")
      .login-box
        .phone
          input(type="tel", name="phone", placeholder="手机号", v-model="data.body.phone")
          .get-vrcode 获取验证码
        .vrcode
          input(type="num", name="vrcode", placeholder="验证码", v-model="data.body.vrcode")
        .sing-in(@click="login") 登录
</template>

<script>
    export default {
        data() {
            return {
                data: {
                    body: {
                        phone: 'admin',
                        password: 'secret'
                    },
                },
            };
        },

        mounted() {
            console.log(this.$auth.redirect());

            // Can set query parameter here for auth redirect or just do it silently in login redirect.
        },

        methods: {
            login() {
                var redirect = this.$auth.redirect();

                this.$auth.login({
                    body: this.data.body,
                    rememberMe: this.data.rememberMe,
                    redirect: {name: redirect ? redirect.from.name : 'account'},
                    fetchUser: this.data.fetchUser,
                    success() {
                        console.log('success ' + this.context);
                    },
                    error(res) {
                        console.log('error ' + this.context);

                        this.error = res.data;
                    }
                });
            }
        }
    }
</script>
<style lang="scss">
.login {

}
</style>
