console.log('ciao')

const { createApp } = Vue
createApp({
    data() {
        return {

        }
    },
    mounted() {
        axios.get('api.php')
            .then(response => {
                console.log(response.data)
            }).catch((err) => {
                console.log(err.message)
            })
    }
}).mount('#app')