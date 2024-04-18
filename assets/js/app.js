console.log('ciao')

const { createApp } = Vue
createApp({
    data() {
        return {
            productions: [],
            productionActive: [],
            display: false,

        }
    },
    methods: {
        modal(production) {
            console.log(production);
            this.productionActive = production;
            console.log(this.productionActive)
            this.display = !this.display
        }

    },
    mounted() {
        axios.get('db.php')
            .then(response => {
                console.log(response.data);
                this.productions = response.data;
            }).catch((err) => {
                console.log(err.message);
            })
    }
}).mount('#app')