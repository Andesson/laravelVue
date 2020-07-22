<template>
    <div>
        <h1>Produto</h1>
        <v-text-field
            v-model="text"
            :rules="nomeRules"
            label="Nome"
            required
          ></v-text-field>
        <v-text-field
            v-model="text"
            label="Descrição"
            required
          ></v-text-field>
    </div>
</template>

<script>
export default {

    data() {
        return {
        nameRules: [
        v => !!v || 'Name is required',
        v => v.length <= 10 || 'Name must be less than 10 characters',
        ],
        }
    },

    mounted() {

    },

}
</script>
