<?php
/* API call handler
make a SQL query based on the given parameters:

parameters:
- title
- post_content
- tag
- author
*/
$path = $_SERVER['DOCUMENT_ROOT'].'/ii';

include_once $path . '/wp-config.php';
include_once $path . '/wp-load.php';
include_once $path . '/wp-includes/wp-db.php';
include_once $path . '/wp-includes/pluggable.php';
global $wpdb;
if (count($_GET) != 0){
	if (isset($_GET['title'])){
		$where = " AND wp_posts.post_title LIKE '%".wp_unslash($_GET['title'])."%'";
	}
	if (isset($_GET['post_content'])){
		$where .= " AND wp_posts.post_content LIKE '%".wp_unslash($_GET['post_content'])."%'";
	}
	if (isset($_GET['excerpt'])){
		$where .= " AND wp_posts.post_excerpt LIKE '%".wp_unslash($_GET['excerpt'])."%'";
	}
	if (isset($where)){
		if (isset($_GET['count_only']) && $_GET['count_only'] == 1){
			$query = "SELECT count(post_title) FROM wp_posts WHERE 1=1".$where;
			$results = $wpdb->get_results( $query, OBJECT );
			header("Content-Type: text/json");
			echo json_encode($results);
		}else {
			$query = "SELECT post_title, post_excerpt, post_content FROM wp_posts WHERE 1=1".$where;
			$results = $wpdb->get_results( $query, OBJECT );
			header("Content-Type: text/json");
			echo json_encode($results);
		}
	}
	
} else {
echo("<html>");
echo("<head>");
echo("</head>");
echo("<body>");
echo("<h1> Person of Interest API help</h1>");
echo("</br>");
echo("</br>");
echo("<p> This API allows other application to connect to the Person of Interest Database</p>");

echo("<p>Usage:</p>");
echo("<p>A GET request should be sent to the same URL with any of the following paramaters</p>");
echo("<ul>");
echo("<li> title</li>");
echo("<li> post_content</li>");
echo("<li> tag</li>");
echo("<li> author</li>");
echo("<li> count_only: if 1 it returns only the number of results</li>");
echo("</ul>");
echo("</body>");
echo("</html>");
}
?>
