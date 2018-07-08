@extends('voyager::master')

@section('page_header')
<div id="app" class="container">
  <h1 class="page-title">
        News Manager @{{message}}
        </h1>

  <div class="row">


    <div class="col-md-4">
      <form class="form-inline" action="index.html" method="post">
        <select @change.prevent="orderArticlesBy"  class="form-control" v-model="articles">
        <option value="featured">Sort by Name</option>
        <option value="title">Sort by Value</option>
        </select>
        <select @change.prevent="getArticles"  class="form-control" v-model="category">

        <option v-for="cat in newscategory">
          @{{cat.name}}</option>

            </select>
      </form>
      <ul class="list-group">
        <li class="list-group-item" @click.prevent="getArticle(art.id)"  value="art.id" v-for="art in articles" >
        <span class="label label-danger" v-if="art.featured == '1'">Featured</span>
        @{{art.title}}
        </li>
      </ul>



      </select>
    </div>
    <div class="col-md-4">

      <form id="form1" name="form1" method="post" action="{{ route('updateArticle') }}">
        {{ csrf_field() }}
        <div class="panel panel-default">
  <div class="panel-heading">
    <div class="col-md-6">
        <span class="label label-danger" v-if="article.featured == '1'">Featured</span>
    </div>
    <div class="col-md-6">
        <h5>@{{article.source_name}}</h5>
    </div>

  </div>
  <div class="panel-body">
    <div class="row">

      <div class="col-md-12">
        <div class="form-group">
          <h3>@{{article.title}}</h3>
          <hr />
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <img class="img-responsive" v-bind:src="article.urlToImage" alt="">
          <input class="form-control" type="text" name="urlToImage" id="urlToImage" v-model="article.urlToImage" />
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" style="min-width: 100%;min-height:180px;" name="description" id="description" form="form1" v-model="article.description"></textarea>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <label for="featured">Featured</label>
          <input type="checkbox" name="featured" id="featured" v-model="article.featured" checked="0" />

        </div>
      </div>
      <div class="col-md-12">
        <button class="btn btn-block btn-success">Submit</button>
      </div>

    </div>
  </div>
</div>


        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="source_id">Source Id</label>
              <input class="form-control" type="text" name="source_id" id="source_id" v-model="article.source_id" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="source_name">Source Name</label>
              <input class="form-control" type="text" name="source_name" id="source_name" v-model="article.source_name" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="author">Author</label>
              <input class="form-control" type="text" name="author" id="author" v-model="article.author" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="url"><a v-bind:href="article.url">Story</a></label>
              <input class="form-control" type="text" name="url" id="url" v-model="article.url" />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="published_at">Published At</label>
              <input class="form-control" type="text" name="published_at" id="published_at" v-model="article.published_at" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="attribution">Attribution</label>
              <input class="form-control" type="text" name="attribution" id="attribution" v-model="article.attributiona" />
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="category">Category</label>
              <input class="form-control" type="text" name="category" id="category" v-model="article.category" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="topic">Topic</label>
              <input class="form-control" type="text" name="topic" id="topic" v-model="article.topic" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="country">Country</label>
              <input class="form-control" type="text" name="country" id="country" v-model="article.country" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="score">Score</label>
              <input class="form-control" type="text" name="score" id="score" v-model="article.score" />
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="slug">Slug</label>
              <input class="form-control" type="text" name="slug" id="slug" v-model="article.slug" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="created_at">Created At</label>
              <input class="form-control" type="text" name="created_at" id="created_at" v-model="article.created_at" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="updated_at">Updated At</label>
              <input class="form-control" type="text" name="updated_at" id="updated_at" v-model="article.updated_at" />
            </div>
          </div>
        </div>



      </form>

    </div>
  <div class="col-md-4">
    <form>


      <input  @keyup.prevent="getTweets('sdfsda')" type="text" name="tweet" v-model="tweetsearch" value="tweetsearch">
    </form>
<div>
<ul class="list-group">
  <li class="list-group-item" v-for="tweet in tweets">@{{tweet.text}}<a target="_blank" :href="'https://twitter.com/'+tweet.user.screen_name+'/status/'+tweet.id"><span class="badge">Tweet</span></a></li>
</ul>

</div>

  </div>

  </div>

</div>


@endsection
