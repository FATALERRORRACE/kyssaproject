<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                    <div class="card-body" v-on:submit.prevent="newThought()" >
                        <form action="">
                            <label for="pensamiento"></label>
                            <input type="text" name="pensamiento" v-model="desc">
                            <button type="submit" class="btn btn-primary">enviar pensamiento</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                desc:''
            }
        },
        async getEvents() {
            let res = await axios.get("http://localhost:8000/events");
            return res.data;
        },
        mounted() {
            console.log('form mounted.')
        },
        methods: {
            newThought(){
                let newthought = {
                    desc: this.desc,
                };
                this.$emit('new',newthought)
            },
            saveThought(){
                
            }
        }
    }
</script>
