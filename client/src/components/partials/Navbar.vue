<template lang="pug">
#navbar.navbar.navbar-default.ace-save-state
  #navbar-container.navbar-container.ace-save-state
    button#menu-toggler.navbar-toggle.menu-toggler.pull-left(type="button", data-target="#sidebar")
      span.sr-only Toggle sidebar
      |
      span.icon-bar
      |
      span.icon-bar
      |
      span.icon-bar
    |
    .navbar-header.pull-left
      a.navbar-brand(href="index.html")
        small
          i.fa.fa-leaf
          | 							Ace Admin
    |
    .navbar-buttons.navbar-header.pull-right(role="navigation")
      ul.nav.ace-nav
        li.grey.dropdown-modal
          a.dropdown-toggle(data-toggle="dropdown", href="#")
            i.ace-icon.fa.fa-tasks
            |
            span.badge.badge-grey 4
          |
          ul.dropdown-menu-right.dropdown-navbar.dropdown-menu.dropdown-caret.dropdown-close
            li.dropdown-header
              i.ace-icon.fa.fa-check
              | 									4 Tasks to complete
            |
            li.dropdown-content
              ul.dropdown-menu.dropdown-navbar
                li
                  a(href="#")
                    .clearfix
                      span.pull-left Software Update
                      |
                      span.pull-right 65%
                    |
                    .progress.progress-mini
                      .progress-bar(style="width:65%")
                |
                li
                  a(href="#")
                    .clearfix
                      span.pull-left Hardware Upgrade
                      |
                      span.pull-right 35%
                    |
                    .progress.progress-mini
                      .progress-bar.progress-bar-danger(style="width:35%")
                |
                li
                  a(href="#")
                    .clearfix
                      span.pull-left Unit Testing
                      |
                      span.pull-right 15%
                    |
                    .progress.progress-mini
                      .progress-bar.progress-bar-warning(style="width:15%")
                |
                li
                  a(href="#")
                    .clearfix
                      span.pull-left Bug Fixes
                      |
                      span.pull-right 90%
                    |
                    .progress.progress-mini.progress-striped.active
                      .progress-bar.progress-bar-success(style="width:90%")
            |
            li.dropdown-footer
              a(href="#")
                | See tasks with details
                i.ace-icon.fa.fa-arrow-right
        |
        li.purple.dropdown-modal
          a.dropdown-toggle(data-toggle="dropdown", href="#")
            i.ace-icon.fa.fa-bell.icon-animated-bell
            |
            span.badge.badge-important 8
          |
          ul.dropdown-menu-right.dropdown-navbar.navbar-pink.dropdown-menu.dropdown-caret.dropdown-close
            li.dropdown-header
              i.ace-icon.fa.fa-exclamation-triangle
              | 									8 Notifications
            |
            li.dropdown-content
              ul.dropdown-menu.dropdown-navbar.navbar-pink
                li
                  a(href="#")
                    .clearfix
                      span.pull-left
                        i.btn.btn-xs.no-hover.btn-pink.fa.fa-comment
                        | 														New Comments
                      |
                      span.pull-right.badge.badge-info +12
                |
                li
                  a(href="#")
                    i.btn.btn-xs.btn-primary.fa.fa-user
                    | 												Bob just signed up as an editor ...
                |
                li
                  a(href="#")
                    .clearfix
                      span.pull-left
                        i.btn.btn-xs.no-hover.btn-success.fa.fa-shopping-cart
                        | 														New Orders
                      |
                      span.pull-right.badge.badge-success +8
                |
                li
                  a(href="#")
                    .clearfix
                      span.pull-left
                        i.btn.btn-xs.no-hover.btn-info.fa.fa-twitter
                        | 														Followers
                      |
                      span.pull-right.badge.badge-info +11
            |
            li.dropdown-footer
              a(href="#")
                | See all notifications
                i.ace-icon.fa.fa-arrow-right
        |
        li.green.dropdown-modal
          a.dropdown-toggle(data-toggle="dropdown", href="#")
            i.ace-icon.fa.fa-envelope.icon-animated-vertical
            |
            span.badge.badge-success 5
          |
          ul.dropdown-menu-right.dropdown-navbar.dropdown-menu.dropdown-caret.dropdown-close
            li.dropdown-header
              i.ace-icon.fa.fa-envelope-o
              | 									5 Messages
            |
            li.dropdown-content
              ul.dropdown-menu.dropdown-navbar
                li
                  a.clearfix(href="#")
                    img.msg-photo(src="../../assets/images/avatars/avatar.png", alt="Alex's Avatar")
                    |
                    span.msg-body
                      span.msg-title
                        span.blue Alex:
                        | 														Ciao sociis natoque penatibus et auctor ...
                      |
                      span.msg-time
                        i.ace-icon.fa.fa-clock-o
                        |
                        span a moment ago
                |
                li
                  a.clearfix(href="#")
                    img.msg-photo(src="../../assets/images/avatars/avatar3.png", alt="Susan's Avatar")
                    |
                    span.msg-body
                      span.msg-title
                        span.blue Susan:
                        | 														Vestibulum id ligula porta felis euismod ...
                      |
                      span.msg-time
                        i.ace-icon.fa.fa-clock-o
                        |
                        span 20 minutes ago
                |
                li
                  a.clearfix(href="#")
                    img.msg-photo(src="../../assets/images/avatars/avatar4.png", alt="Bob's Avatar")
                    |
                    span.msg-body
                      span.msg-title
                        span.blue Bob:
                        | 														Nullam quis risus eget urna mollis ornare ...
                      |
                      span.msg-time
                        i.ace-icon.fa.fa-clock-o
                        |
                        span 3:15 pm
                |
                li
                  a.clearfix(href="#")
                    img.msg-photo(src="../../assets/images/avatars/avatar2.png", alt="Kate's Avatar")
                    |
                    span.msg-body
                      span.msg-title
                        span.blue Kate:
                        | 														Ciao sociis natoque eget urna mollis ornare ...
                      |
                      span.msg-time
                        i.ace-icon.fa.fa-clock-o
                        |
                        span 1:33 pm
                |
                li
                  a.clearfix(href="#")
                    img.msg-photo(src="../../assets/images/avatars/avatar5.png", alt="Fred's Avatar")
                    |
                    span.msg-body
                      span.msg-title
                        span.blue Fred:
                        | 														Vestibulum id penatibus et auctor  ...
                      |
                      span.msg-time
                        i.ace-icon.fa.fa-clock-o
                        |
                        span 10:09 am
            |
            li.dropdown-footer
              a(href="inbox.html")
                | See all messages
                i.ace-icon.fa.fa-arrow-right
        |
        li.light-blue.dropdown-modal
          a.dropdown-toggle(data-toggle="dropdown", href="#")
            img.nav-user-photo(src="../../assets/images/avatars/user.jpg", alt="Jason's Photo")
            |
            span.user-info
              small Welcome,
              | 									Jason
            |
            i.ace-icon.fa.fa-caret-down
          |
          ul.user-menu.dropdown-menu-right.dropdown-menu.dropdown-yellow.dropdown-caret.dropdown-close
            li
              a(href="#")
                i.ace-icon.fa.fa-cog
                | 										Settings
            |
            li
              a(href="profile.html")
                i.ace-icon.fa.fa-user
                | 										Profile
            |
            li.divider
            |
            li
              a(@click="loginout()")
                i.ace-icon.fa.fa-power-off
                | 										Logout

  // /.navbar-container

</template>
<script type="text/ecmascript-6">
export default {
  data () {
    return {

    }
  },
  created: function() {
  },
  components: {
  },
  methods: {
    loginout () {
      this.$auth.logout({
        makeRequest: true,
        params: {},
        redirect: '/login'
      });
    }

  }
}
</script>
