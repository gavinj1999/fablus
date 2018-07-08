$(document).ready(function() {
  if (window.location.href.indexOf("newsmanager") > -1) {

    var app = new Vue({
      el: '#app',
      data: {
        message: 'Message',
        newscategory: [],
        articles: [],
        tweets:[],
        search:[],
        tweetsearch:'',
        article: [],
        category:'',
        articleid:''
      },
      mounted() {
        this.getCategories();
        this.getAllArticles();
      },
      methods: {
        getCategories() {
          axios.get('/api/allcategories')
            .then((response) => {

              this.newscategory = response.data;

            })
            .catch(function(error) {

            });
        },
        getArticles(){
          axios.get('/api/articlecategories/'+this.category)
          .then((response) => {
            this.articles = response.data;

          })
        },
        getAllArticles(){
          axios.get('/api/allarticlecategories/')
          .then((response) => {
            this.articles = response.data;

          })
        },
        getArticle : function(art){
          axios.get('/api/article/'+art)
          .then((response) => {
            this.article = response.data;
          })
        },
        orderArticlesBy: function(filter){
          console.log(filter.value);
        },
        getTweets: function(){
          axios.get('/api/tweets/'+this.tweetsearch)
          .then((response) =>{
            this.tweets = (response.data);
          })

        }

      }
    })



  }




});
