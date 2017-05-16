<template lang="pug">
.main-container
  .main-content
    .row
      .col-sm-10.col-sm-offset-1
        .login-container
          .center
            h1
              i.ace-icon.fa.fa-leaf.green
              |
              span.red Ace
              |
              span#id-text2.white Application
            |
            h4#id-company-text.blue © Company Name
          |
          .space-6
          |
          .position-relative
            #login-box.login-box.visible.widget-box.no-border
              .widget-body
                .widget-main
                  h4.header.blue.lighter.bigger
                    i.ace-icon.fa.fa-coffee.green
                    |                     Please Enter Your Information
                  |
                  .space-6
                  |
                  form
                    fieldset
                      label.block.clearfix
                        span.block.input-icon.input-icon-right
                          input.form-control(type="text", placeholder="Phone", v-model="data.body.phone")
                          |
                          i.ace-icon.fa.fa-user
                      |
                      label.block.clearfix
                        span.block.input-icon.input-icon-right
                          input.form-control(type="password", placeholder="Password", v-model="data.body.password")
                          |
                          i.ace-icon.fa.fa-lock
                      |
                      .space
                      |
                      .clearfix
                        label.inline
                          input.ace(type="checkbox")
                          |
                          span.lbl  Remember Me
                        |
                        button.width-35.pull-right.btn.btn-sm.btn-primary(@click="login", type="button")
                          i.ace-icon.fa.fa-key
                          |
                          span.bigger-110 Login
                      |
                      .space-4
                  |
                  .social-or-login.center
                    span.bigger-110 Or Login Using
                  |
                  .space-6
                  |
                  .social-login.center
                    a.btn.btn-primary
                      i.ace-icon.fa.fa-facebook
                    |
                    a.btn.btn-info
                      i.ace-icon.fa.fa-twitter
                    |
                    a.btn.btn-danger
                      i.ace-icon.fa.fa-google-plus
                // /.widget-main
                .toolbar.clearfix
                  div
                    a.forgot-password-link(href="#", data-target="#forgot-box")
                      i.ace-icon.fa.fa-arrow-left
                      |                       I forgot my password
                  |
                  div
                    a.user-signup-link(href="#", data-target="#signup-box")
                      | I want to register
                      i.ace-icon.fa.fa-arrow-right
              // /.widget-body
            // /.login-box
            #forgot-box.forgot-box.widget-box.no-border
              .widget-body
                .widget-main
                  h4.header.red.lighter.bigger
                    i.ace-icon.fa.fa-key
                    |                     Retrieve Password
                  |
                  .space-6
                  |
                  p
                    | Enter your email and to receive instructions
                  |
                  form
                    fieldset
                      label.block.clearfix
                        span.block.input-icon.input-icon-right
                          input.form-control(type="email", placeholder="Email")
                          |
                          i.ace-icon.fa.fa-envelope
                      |
                      .clearfix
                        button.width-35.pull-right.btn.btn-sm.btn-danger(type="button")
                          i.ace-icon.fa.fa-lightbulb-o
                          |
                          span.bigger-110 Send Me!
                |
                .toolbar.center
                  a.back-to-login-link(href="#", data-target="#login-box")
                    | Back to login
                    i.ace-icon.fa.fa-arrow-right
            |
            #signup-box.signup-box.widget-box.no-border
              .widget-body
                .widget-main
                  h4.header.green.lighter.bigger
                    i.ace-icon.fa.fa-users.blue
                    |                     New User Registration
                  |
                  .space-6
                  |
                  p  Enter your details to begin:
                  |
                  form
                    fieldset
                      label.block.clearfix
                        span.block.input-icon.input-icon-right
                          input.form-control(type="email", placeholder="Email")
                          |
                          i.ace-icon.fa.fa-envelope
                      |
                      label.block.clearfix
                        span.block.input-icon.input-icon-right
                          input.form-control(type="text", placeholder="Phone")
                          |
                          i.ace-icon.fa.fa-user
                      |
                      label.block.clearfix
                        span.block.input-icon.input-icon-right
                          input.form-control(type="password", placeholder="Password")
                          |
                          i.ace-icon.fa.fa-lock
                      |
                      label.block.clearfix
                        span.block.input-icon.input-icon-right
                          input.form-control(type="password", placeholder="Repeat password")
                          |
                          i.ace-icon.fa.fa-retweet
                      |
                      label.block
                        input.ace(type="checkbox")
                        |
                        span.lbl
                          | I accept the
                          a(href="#") User Agreement
                      |
                      .space-24
                      |
                      .clearfix
                        button.width-30.pull-left.btn.btn-sm(type="reset")
                          i.ace-icon.fa.fa-refresh
                          |
                          span.bigger-110 Reset
                        |
                        button.width-65.pull-right.btn.btn-sm.btn-success(type="button")
                          span.bigger-110 Register
                          |
                          i.ace-icon.fa.fa-arrow-right.icon-on-right
                |
                .toolbar.center
                  a.back-to-login-link(href="#", data-target="#login-box")
                    i.ace-icon.fa.fa-arrow-left
                    |                     Back to login
          |
          .navbar-fixed-top.align-right
            br
            |              
            |
            a#btn-login-dark(href="#") Dark
            |              
            |
            span.blue /
            |              
            |
            a#btn-login-blur(href="#") Blur
            |              
            |
            span.blue /
            |              
            |
            a#btn-login-light(href="#") Light
    | <

</template>
<script>
export default {
    data() {
        return {
          context: 'login context',
          data: {
            body: {
              phone: '13602630455',
              password: '88888888'
            }
          }
        };
    },
    computed: {
      vrcode_disabled: function() {
        return !(/^1[34578]\d{9}$/).test(this.data.body.phone)
      },
      login_disabled: function() {
      // password must have more than one char and number and no special char
        return (/^1[34578]\d{9}$/).test(this.data.body.phone) && (/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/).test(this.data.body.password)
      }
    },
    mounted() {
        // Can set query parameter here for auth redirect or just do it silently in login redirect.
        console.log(this.$auth.redirect());

    },

    methods: {
      login() {
        var redirect = this.$auth.redirect();
        console.log("this is redirect");
        console.log(redirect);
        this.$auth.login({
            body: this.data.body,
            rememberMe: this.data.rememberMe,
            redirect: {name: redirect ? redirect.from.name : 'index'},
            fetchUser: this.data.fetchUser,
            success(res) {
                console.log('success ' + this.context);
                console.log(res);
            },
            error(res) {
                console.log('error ' + this.context);

                this.error = res.data;
            }
        });
      },
      getVrCode() {
          this.$http.get("/api/getVrCode?phone="+this.data.body.phone).then(function(res) {
            console.log(res.body);
          })
      }
    }
}
</script>
<style lang="scss">

</style>
