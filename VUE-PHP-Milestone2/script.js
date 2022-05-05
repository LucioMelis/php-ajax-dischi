console.log('Js Ok!')

const app = new Vue({
    el: '#app',
    data() {
        return {
            dischi: [],
        }
    },
    mounted() {
        axios
            .get("http://localhost/php-ajax-dischi/VUE-PHP-Milestone2/apiDischi.php")
            .then((response) => {
                this.dischi = response.data;
                console.log(this.dischi);

            })
            .catch((error) => {
                console.log(error);
            });
    }
});   
