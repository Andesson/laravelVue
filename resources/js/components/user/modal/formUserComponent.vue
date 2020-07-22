<template>
  <v-row justify="center">
    <v-dialog v-model="dialog" persistent max-width="600px">
      <template v-slot:activator="{ on, attrs }">
        <v-btn v-bind="attrs" v-on="on" class="mx-2" fab dark color="indigo">
            <v-icon dark>mdi-plus</v-icon>
        </v-btn>
      </template>
      <v-card>
        <v-card-title>
          <span class="headline">Usuário perfil</span>
        </v-card-title>
        <v-card-text>
          <v-container>
            <v-row>

              <v-col cols="12" sm="4">
                <v-text-field  label="Nome" counter="15"></v-text-field>
              </v-col>
              <v-col cols="12" sm="8">
                <v-text-field label="Sobrenome" hint="sobrenome completo"></v-text-field>
              </v-col>
              <v-col cols="12">
                <v-text-field label="Email*"  :rules="emailRules" required></v-text-field>
              </v-col>
              <v-col cols="12">
                <v-text-field label="Password*" type="password" :rules="senhaRules" required></v-text-field>
              </v-col>

            </v-row>
          </v-container>
          <small>*indica campo obrigatório</small>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="dialog = false">Fechar</v-btn>
          <v-btn color="blue darken-1" text >Salvar</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-row>
</template>


<script>
  export default {
    data: () => ({
      dialog: false,

     //rules
      nomeRules: [
        v => !!v || 'Nome é obrigatorio',
        v => v.length <= 15 || 'O nome deve ter menos de 15 caracteres',
      ],

      emailRules: [
        v => !!v || 'E-mail é obrigatório',
        v => /.+@.+/.test(v) || 'E-mail não é valido',
      ],

      senhaRules: [
        v => !!v || 'Nome é obrigatorio',
        v => v.length <= 15 || 'O nome deve ter menos de 15 caracteres',
      ],

    }),

    methods: {

    },
  }
</script>
