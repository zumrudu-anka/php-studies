<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $(".hasFiles > div").on("click", function () {
            $(this).next("ul").toggle();
            $(".icon-down-dir", this).toggleClass("icon-up-dir");
        });
        
    });

</script>


<style>
    @import "font/css/fontello.css";

    ul{
        padding-top: 10px;
        -webkit-padding-start: 20px;
    }

    li{
        padding-bottom: 10px;
        list-style: none;
    }

    ul li ul{
        display: none;
    }
    

</style>

<?php 

// foreach(glob("*") as $file){
//     echo $file . "<br/>";
// }

function filesize_formatted($path){
    $size = filesize($path);
    $units = array(
        "B",
        "KB",
        "MB",
        "GB",
        "TB",
        "PB",
        "EB",
        "ZB",
        "YB"
    );
    $power = $size > 0 ? floor(log($size, 1024)) : 0;
    return number_format($size / pow(1024, $power), 2, ".", ",") . ' ' . $units[$power];
}


function listDirectory($dir){
    $directories = glob($dir);
    echo "<ul>";
        foreach($directories as $file){
            echo "<li" . (is_dir($file) ? " class = 'hasFiles'" : NULL) . ">";
            if(is_file($file)){
                echo "<i class=\"icon-doc\"></i>";
                echo $file;
                echo "<span>(" . filesize_formatted($file) . ")</span>";
            }
            if(is_dir($file)){
                echo "<div>";
                    echo "<i class=\"icon-folder\"></i>";
                    echo $file;
                    echo "<i class=\"icon-down-dir\"></i>";
                echo "</div>";
                listDirectory($file . "/*");
            }
            echo "</li>";
        }
    echo "</ul>";

}

listDirectory("*");

?>