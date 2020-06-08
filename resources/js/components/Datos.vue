<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Datos</div>
                <div class="card-body">
                    <form action="" v-on:submit="newDates()">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nombres</label>
                        <input type="text" class="form-control" id="nombres" placeholder="Nombres" v-model="nombres">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" v-model="apellidos">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="decha" placeholder="fecha" v-model="fecha">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">documento</label>
                        <input type="text" class="form-control" id="documento" placeholder="Documento" v-model="documento">
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    export default {
        data(){
        return{
          datos: []
        }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            newDates(){
            var urlUsers = "dato";
            axios.post(urlDato).then(response=>{
            this.dato = response.data
            });
            }
        }
    }
</script>
