<template>

    <div class="max-w-md flex flex-col mx-auto pt-2">
        
        <h3 class="mb-2">Edit project</h3>

        <input v-model="name" name="name" class="mb-2" placeholder="name">

        <textarea v-model="description" class="mb-2" name="description" placeholder="description"></textarea>
        
        <input v-model="github" name="github" class="mb-2" placeholder="github">

        <input v-model="production_url" name="production_url" class="mb-2" placeholder="production_url">

        <input v-model="tags" name="tags" class="mb-2" placeholder="tags">

        <input v-model="project_members" name="project_members" class="mb-2" placeholder="project_members">

        <img :src="image" class="img-responsive self-center">

        <input type="file" v-on:change="onFileChange" class="form-control">

        <button class="mt-2 bg-primary1 hover:bg-primary3 text-white font-bold py-2 px-4 rounded" @click="update">Update</button>
        <button class="mt-2 bg-primary1 hover:bg-primary3 text-white font-bold py-2 px-4 rounded" @click="back">Back</button>
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
        props: [
            'projectId'
        ],

        data(){
            return {
                image: '',
                name: '',
                description: '',
                github: '',
                production_url: '',
                tags: '',
                project_members: ''
            }
        },

        mounted() {
            fetch('/api/projects/' + this.projectId).then(data => {
                data.json().then(project => {
                    this.name = project.name;
                    this.description = project.description;
                    this.github = project.github;
                    this.production_url = project.production_url;
                    this.tags = project.tags;
                    //this.project_members = project.project_members;
                    console.log(project.project_members)

                    this.project_members = project.project_members.map(item => {
                        return item.user.nickname;
                    }).join(", ")
                    
                })
            })
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
            update(){
                axios.post(
                    '/projects/' + this.projectId,
                    {
                        _method: 'patch',
                        //image: this.image,
                        name: this.name,
                        description: this.description,
                        github: this.github,
                        production_url: this.production_url,
                        tags: this.tags,
                        project_members: this.project_members
                    },
                    {
                        headers: {
                            //'Content-Type': 'multipart/form-data'
                    }
                }).then(response => {
                    alert("Ok finished!")
                });
            },

            back() {
                window.location.href = '/projects';
            }
        }
    }
</script>