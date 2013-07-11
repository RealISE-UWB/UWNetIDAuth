<?
$out = array("result" => "error", "error" => array("code" => 0, "msg" => ""));
if(isset($_GET['token'])) {
    if(preg_match("/^[a-z0-9]{13}$/", $_GET['token'])) {
        if(file_exists("auth/tmp/".$_GET['token'])) {
            $out['result'] = "success";
            $out['username'] = file_get_contents("auth/tmp/".$_GET['token']);
            unlink("auth/tmp/".$_GET['token']);
        } else {
            $out['error']['code'] = 1;
        }
    } else {
        $out['error']['code'] = 2;
    }
} else {
    $out['error']['code'] = 3;
}
echo json_encode($out);
