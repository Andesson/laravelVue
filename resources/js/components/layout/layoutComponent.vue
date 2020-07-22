<template>
  <v-app id="inspire">
    <v-navigation-drawer
      v-model="drawer"
      app
      clipped
    >

    <!--~~~~~~~~ MENU LISTA ~~~~~~~~-->
      <v-list dense>
        <v-list-item to="/dashboard">
          <v-list-item-action>
            <v-icon>mdi-view-dashboard</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Dashboard</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item to="/pedidos">
          <v-list-item-action>
            <v-icon>mdi-clipboard-list-outline</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Pedidos</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-subheader>CADASTRO</v-subheader>

        <v-list-item  to="/categoria">
          <v-list-item-action>
            <v-icon>mdi-shape</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Categoria</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item  to="/produto">
          <v-list-item-action>
            <v-icon>mdi-box</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Produto</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item  to="/status">
          <v-list-item-action>
            <v-icon>mdi-alarm-light-outline</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Status</v-list-item-title>
          </v-list-item-content>
        </v-list-item>

        <v-list-item to="new-user" link>
          <v-list-item-action>
            <v-icon>mdi-cog</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Configurações</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      app
      clipped-left
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>Delivery</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-avatar color="indigo" size="50" aling="center" justify="center">
      <img
        src="D:\Downloads\unnamed.jpg"
        alt="ADM"
      >
    </v-avatar>
    </v-app-bar>

    <!--~~~~~~~~ Container ~~~~~~~-->
    <v-content>
      <v-container class="" fluid>
        <v-row align="center" justify="center">
            <router-view></router-view>
        </v-row>
      </v-container>
    </v-content>

    <v-footer app>
      <span>&copy; {{ new Date().getFullYear() }}</span>
    </v-footer>
  </v-app>
</template>

<script>


  export default {
    components: {

    },
    props: {
      source: String,
    },
    data: () => ({
      drawer: null,
    }),
    created () {
      this.$vuetify.theme.dark = true
    },
  }
</script>
