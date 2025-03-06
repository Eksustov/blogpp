<?php
require "models/Blog.php";

class BlogController {
    public function index() {
        $posts = Blog::all();

        require "views/blog/index.view.php";
    }    

    public function show() {
        $id = $_GET["id"];
        $post = Blog::find($id);
        require "views/blog/show.view.php";
    }

    public function create() {
        require "views/blog/create.view.php"; // Show the form
    }

    public function store() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $content = $_POST["content"] ?? "";

            if (!empty($content)) {
                Blog::create(["content" => $content]);
                header("Location: /");
                exit;
            }
        }

        require "views/blog/create.view.php"; // Show the form again if validation fails
    }

    public function edit() {
        $id = $_GET["id"] ?? null;
        if (!$id) {
            echo "Invalid post ID.";
            return;
        }

        $post = Blog::find($id);
        if (!$post) {
            echo "Post not found.";
            return;
        }

        require "views/blog/edit.view.php";
    }

    public function update() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = $_POST["id"] ?? null;
            $content = $_POST["content"] ?? "";

            if ($id && !empty($content)) {
                $post = Blog::find($id);
                if ($post) {
                    $post["content"] = $content;
                    Blog::save($id, $post);
                    header("Location: /show?id=" . $id);
                    exit;
                }
            }
        }

        echo "Failed to update post.";
    }

    public function destroy() {
        $id = $_POST["id"] ?? null;

        if ($id) {
            Blog::delete($id);
            header("Location: /");
            exit;
        }

        echo "Failed to delete post.";
    }
}
