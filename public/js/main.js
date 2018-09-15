const Errors = new class {
    constructor() {
        this.errors = {}
    }

    has(field) {
        return this.errors.hasOwnProperty(field)
    }

    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0]
        }
    }

    clear(field) {
        delete this.errors[field]
    }

    any() {
        return Object.keys(this.errors).length > 0
    }

    record(errors) {
        this.errors = errors
    }
}

const app = new Vue({
    el: '#app',
    data: {
        name: '',
        description: '',
        errors: Errors
    },
    methods: {
        onSubmit() {
            axios.post('/projects/store', this.$data)
                .then(response => alert(response.data.message))
                .catch(error => this.errors.record(error.response.data.errors));
        }
    }
})