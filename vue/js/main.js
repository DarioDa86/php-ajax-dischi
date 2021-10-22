const viewDisks = new Vue({

    el: '#root',
    data: {
        disks: null
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/index.php')
        .then((response) => {
            this.disks = response.data;
        })
        .catch(function (error){
            console.log(error);
        })
    }

});