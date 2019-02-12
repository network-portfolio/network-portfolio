<template>
    <div>
        <div class="max-w-md  mx-auto flex flex-col" v-for="project in projects" :key="project.name" :project="project">
            <div class="flex justify-between">
                <p class="p-2">
                    {{ project.name }} 
                </p>
                <div class="flex">
                    <a v-bind:href="'/projects/' + project.id + '/edit'">
                        <button class="mt-2 bg-primary1 hover:bg-primary3 text-white font-bold py-2 px-4 rounded m-2">edit</button>
                    </a>
                    
                    <button @click="deleteProject(project.id)" class="mt-2 bg-red-dark hover:bg-primary3 text-white font-bold py-2 px-4 rounded m-2">delete</button>
                    
                </div>                        
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data: function () {
            return {
                projects: []
            }
        },

        mounted() {
            fetch('api/users/1/projects').then(data => {
                data.json().then(projects => {
                    this.projects = projects                    
                })
            })
        },

        methods: {
            deleteProject(projectId) {
                if(confirm("You sure? This action cant be undone.")) {
                    axios.delete('api/projects/' + projectId, {params: {'id': projectId}}).then(response => {
                        location.reload();
                    });
                }
            }
        }
    }
</script>