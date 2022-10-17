console.log('ok js!')

const app = new Vue({
    el: '#app',
    data() {
        return {
            allMusic: [],
        };
    },
    mounted() {
        console.log('vue is ok!');
        axios
        .get('albums.php')
        .then((result)=>{
            console.log(result.data)
            this.allMusic = result.data;
        })
        .catch((e) => console.log(e));
    },
});