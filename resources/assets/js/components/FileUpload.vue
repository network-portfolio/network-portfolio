<template>
    <div class="max-w-md flex flex-col mx-auto pt-2">
        <input v-model="name" name="name" class="mb-2" placeholder="name">

        <textarea class="mb-2" name="description" placeholder="description"></textarea>
        
        <img :src="image" class="img-responsive">
        <input type="file" v-on:change="onFileChange" class="form-control">
        <button class="mt-2 bg-primary1 hover:bg-primary3 text-white font-bold py-2 px-4 rounded" @click="upload">Upload</button>
    </div>
</template>
<style scoped>
    img{
        max-height: 36px;
    }
</style>
<script>
    import axios from 'axios';
    export default{
        
        data(){
            return {
                image: '',
                name: ''
            }
        },
        methods: {
            onFileChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            upload(){
                axios.post(
                    '/api/projects',
                    {
                        image: this.image,
                        name: this.name
                    },
                    {
                        headers: {
                            //'Content-Type': 'multipart/form-data'
                    }
   }).then(response => {
                    alert("Ok finished!")
                });
            }
        }
    }
</script>