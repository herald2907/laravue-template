<script>
import { ref, onMounted } from 'vue'
export default {
    /* data() {
        return {
            data: [],
        };
    },
    methods: {
        api(data) {
            axios.get("/sanctum/csrf-cookie").then((response) => {
                axios
                    .post("/api/login", data)
                    .then((response) => {
                        this.data = response;
                    })
                    .catch((error) => {
                        console.log("error");
                    });
            });
        },
    }, */

    setup () {
    const articles = ref([])
    const searchParameters = ref([])

    onMounted(() => {
      this.articles = ArticlesAPI.loadArticles()
    })

    const searchArticles = (id) => {
      return articles.filter(() => {
        // Some search codes
      })
    }

    return {
      articles,
      searchParameters,
      searchArticles
    }
  }
};
</script>
