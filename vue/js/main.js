const viewDisks = new Vue({

    el: '#root',
    data: {
        disks: [],
        genreChosed: "All"
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/index.php')
        .then((response) => {
            this.disks = response.data;
        })
        .catch(function (error){
            console.log(error);
        })
    },
    methods: {
        whichGenre() {
            axios.get('http://localhost/php-ajax-dischi/api/index.php', {
                params: {
                    "genre": this.genreChosed
                }
            })
                
            .then((response) => {
            this.disks = response.data;
        })
        .catch(function (error){
            console.log(error);
        })
        }
    }

});