<?php


namespace App\Http\Controllers;


use App\Http\Requests\AddPost;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;


class PostController extends Controller {

	protected $folderPath = 'post.';

	function getAll() {
		$posts = \App\Models\Post::orderBy( 'created_at', 'desc' )->get();
		debug( $posts );

		return view( $this->folderPath . 'all', [ 'posts' => $posts, ] );
	}

	function getSingle( $slug ) {
		$post = Post::where( 'slug', $slug )->first();
		if ( empty( $post ) ) {
			return view( 404 );
		}
		$tags = $post->tags;
		if ( $tags->isEmpty() ) {
			$tags = false;
		}
		$date = date( "d F Y", strtotime( $post->created_at ) );

		return view( $this->folderPath . 'single', [ 'post' => $post, 'tags' => $tags, 'date' => $date ] );
	}


	public function addPostGet() {
		return view( $this->folderPath . 'addPostForm' );
	}

	public function addPostPost( AddPost $request ) {

		$title    = $request->input( 'title' );
		$slug     = str_slug( $title, '_' );
		$announce = $request->input( 'announce' );
		$content  = $request->input( 'content' );
		$img      = $request->input( 'img' );
		//удаляем все пробелы
		if ( ! empty( $request->input( 'tags' ) ) ) {
			$tags = str_replace( ' ', '', $request->input( 'tags' ) );
			$tags = explode( ',', $tags );
			//собираем айдишники тагов в один массив
			$tagsID = [];
			foreach ( $tags as $tagName ) {
				$findTag = Tag::where( 'name', $tagName )->first();
				//Ищем таг по имени
				if ( $findTag ) {
					$tagsID[] = $findTag->id;
				} else {
					//если не нашли, создаем новый
					$newTag = new Tag( [
						'name' => $tagName,
					] );
					$newTag->save();
					$tagsID[] = $newTag->id;
				}
			}

		}


		$post = new Post( [
			'title'    => $title,
			'slug'     => $slug,
			'announce' => $announce,
			'fulltext' => $content,
			'image'    => $img,
			'user_id'  => 1
		] );
		$post->save();

		//задаем посту теги, если они есть
		if ( ! empty( $request->input( 'tags' ) ) && ! empty( $tagsID ) ) {
			$post->tags()->sync( $tagsID );
		}



		if ( $post ) {
			$postUrl    = route( 'index' ) . '/post/' . $post->slug;
			$homeUrl    = route( 'index' );
			$addPostUrl = route( 'addPostGet' );

			return "<a href='$postUrl'>Пост</a> был успешно добавлен, можете перейти на <a href='$homeUrl'>главную страницу</a> или <a href='$addPostUrl'>добавить</a> еще один пост";
		} else {
			return view( $this->folderPath . 'addPostForm', [ 'errorMessage' => 'Не удалось добавить пост' ] );
		}

	}

}