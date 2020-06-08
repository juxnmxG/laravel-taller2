<template>
<div class="contenedor">
  <table class="table table-dark contenedor">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre de usuario</th>
        <th scope="col">Email</th>
        <th scope="col">Datos</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="user in users">
        <th scope="row">1</th>
        <td>{{ user.name }}</td>
        <td>{{ user.email }}</td>
        <td>
          <a href="/listad">Listar Datos</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</template>
<script>
    export default {
    data(){
      return {
        users: []
      }
    },
        mounted() {
            this.getUsers()
        },
        methods:{
        getUsers(){
          var urlUsers = "users";
          axios.get(urlUsers).then(response=>{
          this.users = response.data
          });
        }
        }
    }
</script>
