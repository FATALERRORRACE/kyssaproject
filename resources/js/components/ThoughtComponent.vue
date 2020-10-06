<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card-header">{{ thought.id }} {{ thought.created_at }}</div>
        
        <div class="card-body">
          <p class="card-text" v-bind:style="styleText">{{ thought.desc }}</p>
          <input type="text" name="" id="" v-bind:style="styleInput" v-model="thought.desc" > 
        </div>
        <div class="card-footer">
          <button type="submit" v-bind:class="editButton" v-on:click="actionThought('edit')" :disabled="disableEdit" >{{ editar }}</button>  
          <button v-bind:class="deleteButton" data-toggle="modal" data-target="#areyousure" :disabled="disableDelete" >{{ eliminar }} </button>
          <!-- Modal -->
          <div class="modal fade" id="areyousure" role="dialog" aria-labelledby="areyousureLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="areyousureLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ¿Esta seguro de eliminar este comentario?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" v-on:click="deleteThought(true)" >Save changes</button> 
                </div>
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
        return {
          styleText:{
            display: "block"
          },
          styleInput:{
            display: "none"
          },
          editar: "editar",
          eliminar: "eliminar",
          editButton: "btn btn-warning",
          deleteButton: "btn btn-danger",
          clickCount: 0,
          disableEdit: false,
          disableDelete: false,
          
        }
      },
      props:["thought"],
      mounted() {
        console.log('single thoughts mounted.')
      },
      methods:{
        actionThought(){
          if(this.clickCount == 0 ){
                this.editar = "guardar";
                this.clickCount =+ 1;
                this.styleText.display = "none";
                this.styleInput.display = "block";
                this.editButton = "btn btn-secondary";
                this.deleteButton = "btn btn-danger disabled";
                this.disableDelete = true
                return;
              };
              this.disableDelete = false
              this.clickCount = 0;
              this.editar = "editar";
              this.styleText.display = "block";
              this.styleInput.display = "none";
              this.editButton = "btn btn-warning";
              this.deleteButton = "btn btn-danger";
              console.log(this.thought);
          
          
          },
          deleteThought(){
            this.$emit("deleteThought");
          }
          
        }
      }
    
</script>
