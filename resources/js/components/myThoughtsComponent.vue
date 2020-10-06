<template>
    <div class="container">
        <form-component @new="addThought"></form-component>
        <thought-component 
            v-for="thought in thoughts" 
            :key="thought.id"
            :thought='thought'
            @deleteThought="deleteThought" >
            </thought-component>                   
        </div>
           
</template>

<script>
    export default {
        data(){
            return{
                thoughts:[{
                    'id': 1,
                    'desc': "any trought",
                    'created_at': ''

                },{

                    'id': 2,
                    'desc': "any trought",
                    'created_at': ""
    
                },{

                    'id': 3,
                    'desc': "any troughts",
                    'created_at': ""

                }]
            }
        },
        mounted() {
            console.log('all thoughts mounted.')
        },
        methods:{
            addThought(thought){
                thought.id = this.thoughts.length + 1
                thought.created_at = Date.now()
                console.log(thought)
                this.thoughts.push(thought);

                },
            deleteThought(){
                }
            }
            
    }
</script>
