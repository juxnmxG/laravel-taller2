<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Datos</div>
                <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Nombres</label>
                        <h1>{{ datos.nombres }}</h1>
                        <div class="form-group">
                          <button type="button" class="btn btn-danger"><a href="/listad">Eliminar</a></button>
                          <button type="button" class="btn btn-warning"><a href="/listad">Editar</a></button>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Apellidos</label>
                        <h1>{{ datos.apellidos }}</h1>
                        <div class="form-group">
                          <button type="button" class="btn btn-danger"><a href="/listad">Eliminar</a></button>
                          <button type="button" class="btn btn-warning"><a href="/listad">Editar</a></button>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Fecha de nacimiento</label>
                        <h1>{{ datos.fecha }}</h1>
                        <div class="form-group">
                          <button type="button" class="btn btn-danger"><a href="/listad">Eliminar</a></button>
                          <button type="button" class="btn btn-warning"><a href="/listad">Editar</a></button>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">documento</label>
                        <h1>{{ datos.documento }}</h1>
                        <div class="form-group">
                          <button type="button" class="btn btn-danger"><a href="/listad">Eliminar</a></button>
                          <button type="button" class="btn btn-warning"><a href="/listad">Editar</a></button>
                        </div>
                      </div>
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
        methods:{
        getdato(){
          var urldatos = "dato";
          axios.get(urldato).then(response=>{
          this.datos = response.data
          });
        }
        }
    }
</script>
