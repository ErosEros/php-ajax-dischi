console.log('ok js!')

const app = new Vue({
    el: '#app',
    mounted() {
        console.log('vue is ok!');
        axios.get('albums.php')
        .then((result)=>{
            console.log(result)
        })
        .catch((e) => console.log(e));
    },
});