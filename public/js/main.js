const app = new Vue({
    el: '#app',
    data: {
        name: '',
        description: ''
    },
    methods: {
        onSubmit() {
            axios.post('/projects/store', this.$data)
                .then(response => console.log(response))
                .catch(error => console.log(error));
        }
    }
})