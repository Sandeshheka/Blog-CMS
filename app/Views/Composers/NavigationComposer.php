<?php
    namespace App\Views\Composers;
    use Illuminate\View\View;
    use App\Category;
    use App\Post;
    use App\Tag;
    class NavigationComposer
    {
        public function compose(View $view)
        {
            $this->composeCategories($view);
            $this->composePopularPosts($view);
            $this->composeTags($view);
            $this->composeArchives($view);
        }

        public function composeCategories(View $view)
        {
            $categories=Category::with(['posts' => function($query)
            {
                $query->published();
            }])->orderBy('title','asc')->get();

             $view->with('categories', $categories);
        }

        public function composeTags(View $view)
        {
            $tags = Tag::has('posts')->get();
            $view->with('tags', $tags);

        }
        public function composeArchives(View $view)
        {
            $archives = Post::archives();
            $view->with('archives', $archives);

        }
 

        public function composePopularPosts(View $view)
        {
            $popularPosts=Post::published()->popular()->take(3)->get();
             $view->with('popularPosts', $popularPosts); 
        }
    }