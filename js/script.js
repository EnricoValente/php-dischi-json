const { createApp } = Vue;

createApp({
    data() {
        return {
            disks:[]
        }
            
    },
    created() {
       axios
            .get('http://localhost/php-dischi-json/api.php')
            .then(response => {
                console.log(response.data);
                this.disks = response.data
            });
    }
}).mount('#app');