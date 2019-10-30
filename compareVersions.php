<?
$v1 = $_GET['v1'];
$v2 = $_GET['v2'];

// Standard reqex for Semantic Versioning 2.0, https://semver.org/
// More restrictive than exercise example so simpler regex pattern
// will be used to validate arguments
$regExVersionPatternStd = "/^(?P<major>0|[1-9]\d*)\.(?P<minor>0|[1-9]\d*)\.(?P<patch>0|[1-9]\d*)(?:-(?P<prerelease>(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*)(?:\.(?:0|[1-9]\d*|\d*[a-zA-Z-][0-9a-zA-Z-]*))*))?(?:\+(?P<buildmetadata>[0-9a-zA-Z-]+(?:\.[0-9a-zA-Z-]+)*))?$/";

$regExVersionPattern = "/^(?:(\d+)\.)?(?:(\d+)\.)?(\d+)$/";

if (preg_match($regExVersionPattern, $v1)!=1) {
    echo("argument 1 not a valid version number");
    http_response_code('400');
    return;
}

if (preg_match($regExVersionPattern, $v2)!=1) {
    echo("argument 2 not a valid version number");
    http_response_code('400');
    return;
}

switch (version_compare($v1, $v2)) {
    case -1:
        echo "before";
        break;
    case 0:
        echo "equal";
        break;
    case 1:
        echo "after";
        break;
    default:
        echo "unexpected result";
        http_response_code('400');
        return;
}

http_response_code('200');

?>
