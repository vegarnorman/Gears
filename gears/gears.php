<?php

require "settings.php";

class Gears {


  //  Gears::Run()
  //  Sets up the automated content retriever

  public static function Run() {
    if (isset($_GET["page"])) {
      self::getPage();
    }

    else if (isset($_GET["post"])) {
      self::getPost();
    }

    else if (isset($_GET["post"]) && isset($_GET["page"])) {
      require PAGES_FOLDER . "404.php";
    }

    else if (empty($_GET)) {
      require PAGES_FOLDER . "main.php";
    }

    else {
      require PAGES_FOLDER . "main.php";
    }
  } 


  //  Gears::getPage()
  //  Returns a single page.

  public static function getPage() {
    if (!isset($_GET["page"])) {
      require NOT_FOUND_PAGE;
    }

    else {
      $url = PAGES_FOLDER . $_GET["page"] . DOCUMENT_EXTENSION;
      
      if (!file_exists($url)) {
        require NOT_FOUND_PAGE;
      }

      else {
        if (WRAP_PAGE) {
          if (WRAP_PAGE_CLASS !== null) {
            echo '<' . WRAP_PAGE_TAG . ' class="' . WRAP_PAGE_CLASS . '">\n';
          }

          else {
            echo '<' . WRAP_PAGE_TAG . '>\n';
          }

          require $url;
          echo '\n<' . WRAP_PAGE_TAG . '>';
        }

        else {
          require $url;
        }
      }
    }
  }


  //  Gears::getPost()
  //  Returns a single post.

  public static function getPost() {
    if (!isset($_GET["post"])) {
      require NOT_FOUND_PAGE;
    }

    else {
      $url = POSTS_FOLDER . $_GET["post"] . DOCUMENT_EXTENSION;
      
      if (!file_exists($url)) {
        require NOT_FOUND_PAGE;
      }

      else {
        if (WRAP_POST) {
          if (WRAP_POST_CLASS !== null) {
            echo '<' . WRAP_POST_TAG . ' class="' . WRAP_POST_CLASS . '">' . "\n";
          }

          else {
            echo "<" . WRAP_POST_TAG . ">\n";
          }

          require $url;
          echo "\n<" . WRAP_POST_TAG . ">";
        }

        else {
          require $url;
        }
      }
    }
  }


  //  Gears::Blog()
  //  Returns a blog containing posts.

  public static function Blog() {
    $index = self::Index();
    $stop = false;

    if(!isset($_GET["p"]) || !is_numeric($_GET["p"]) || $_GET["p"] <= 0) {
      $page = 1;
    }

    else {
      $page = $_GET["p"];
    }

    if (count($index) == 0) {
      require NO_POSTS_EXIST_PAGE;
    }

    else {
      for ($i = ($page * PAGINATION) - PAGINATION; $i < ($page * PAGINATION); $i++) {
        require $index[$i];

        if (SHOW_PERMALINK) {
          $folder_length = strlen(POSTS_FOLDER);
          $extension_length = strlen(DOCUMENT_EXTENSION);

          $permalink = substr($index[$i], $folder_length);
          $permalink = substr($permalink, 0, -$extension_length);
          $permalink = SINGLE_POST_PAGE . '?post=' . $permalink;
        }

        if (SHOW_POST_FOOTER) {
          echo '<footer class="gears-post-footer">';
          
          if (SHOW_PERMALINK) {
            echo '<a href="' . $permalink .'">' . LABEL_PERMALINK . '</a>';
          }
          
          echo '<span class="gears-post-last-changed">' . LABEL_LAST_CHANGED . ' ' . date(POST_DATE_FORMAT, filectime($index[$i])) .'</span> ' .
          '</footer>';
        }

        if ($i == count($index) - 1) {
          $stop = true;
          break;
        }
      }

      echo '<div class="gears-pagination container">';

      if (!$stop) {
        $link = BLOG_PAGE . "?p=" . ($page + 1);
        echo '<a href="' . $link . '" class="gears-previous-page">' . LABEL_PREVIOUS_PAGE . '</a>';
      }

      if ($page > 1) {
        $link = BLOG_PAGE . "?p=" . ($page - 1);
        echo '<a href="' . $link . '" class="gears-next-page">' . LABEL_NEXT_PAGE . '</a>';
      }

      echo '</div>';
    }
  }


  //  Gears::Index()
  //  Returns an index of all the blog posts available.

  private static function Index() {
    $index = glob(POSTS_FOLDER . "*" . DOCUMENT_EXTENSION, GLOB_NOSORT);
    array_multisort(array_map('filectime', $index), SORT_NUMERIC, SORT_DESC, $index);
    
    return $index;
  }


  //  Gears::makeLink()
  //  Returns a link for a specific page

  public static function makeLink($what) {
    return SINGLE_PAGE_PAGE . '?page=' . $what;
  }


  //  Gears::loadPage()
  //  Load a specific page

  public static function loadPage($what) {
    $url = PAGES_FOLDER . $what . DOCUMENT_EXTENSION;

    if (!file_exists($url)) {
      echo "<p>Error: Page not found.</p>";
    }

    else {
      include $url;
    }
  }


  //  Gears::loadPost()
  //  Load a specific blog post

  public static function loadPost($what) {
    $url = POSTS_FOLDER . $what . DOCUMENT_EXTENSION;

    if (!file_exists($url)) {
      echo "<p>Error: Post not found.</p>";
    }

    else {
      include $url;
    }
  }


}

?>
