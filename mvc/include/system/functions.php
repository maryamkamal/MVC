<?php


function redirect($url = "", $statusCode = 303)
{
    header("location: " . SITE_URL . $url, true, $statusCode);
    die();
}

function site_url($controller="",$action = "" , $data =[] )
{

    $url = "index.php?action=";

    $siteUrl = SITE_URL . $url . "{$controller}"."/"."{$action}";

    if (!empty($data)) {

        $attr=[];
        foreach ($data as $key => $value) {
            $attr["{$key}"] ="{$value}";
        }
        $result= join('/' ,$attr);

        $siteUrl = $siteUrl .'/'. $result;

        return $siteUrl;

    }

    return $siteUrl;

  }




/**
 * layout_element function to include an element from /views/elements
 * @param $element_name the name of file inside /views/elements
 */
function layout_element($element_name = "" , $data=[])
{


    if (!empty($data)) {

        foreach ($data as $key => $value) {

            $$key = $value;


        }

    }

    require(DIR_ELEMENTS . DS . $element_name . ".php");


}


/**
 *
 * layout_element function to include a content from /views/main_content/* folder
 * @see $content_name = "user/add";
 * @param null $content_name the name of module + the content file to include ie
 * $content_name = "user/add";
 */
function load_templete($main_content = "",$data=[])
{


if (!empty($data)) {

        foreach ($data as $key => $value) {

            $$key = $value;

        }

    }

   
    include(DIR_LAYOUTS . DS . "default.php");

}

?>
