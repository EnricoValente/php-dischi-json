const { createApp } = Vue;

createApp({
    data() {
        return {
            
        }
    },
    created() {
       axios
            .get('http://localhost/php-dischi-json/api.php')
            .then(response => {
                console.log(response.data);
            });
    }
}).mount('#app');