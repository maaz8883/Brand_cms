<?php
function minifyCSS($css) {
    $css = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css);
    $css = str_replace(["\r\n", "\r", "\n", "\t"], '', $css);
    $css = preg_replace('/\s+/', ' ', $css);
    $css = str_replace([' {', '{ ', ' }', '} ', '; ', ' ;', ': ', ' :'], ['{', '{', '}', '}', ';', ';', ':', ':'], $css);
	$css = preg_replace('/\s*([{}|:;,])\s*/', '$1', $css);
    $css = str_replace(';}', '}', $css);
    return trim($css);
}
function minifyJS($js) {
    $js = preg_replace('/\/\/.*$/m', '', $js);
    $js = preg_replace('/\/\*[\s\S]*?\*\//', '', $js);
    $js = str_replace(["\r\n", "\r", "\n", "\t"], '', $js);
    $js = preg_replace('/\s+/', ' ', $js);
    $js = str_replace(
        [' {', '{ ', ' }', '} ', ' (', '( ', ' )', ') ', ' ;', '; ', ' ,', ', ', ' =', '= ', ' +', '+ ', ' -', '- ', ' *', '* ', ' /', '/ ', ' <', '< ', ' >', '> '],
        ['{', '{', '}', '}', '(', '(', ')', ')', ';', ';', ',', ',', '=', '=', '+', '+', '-', '-', '*', '*', '/', '/', '<', '<', '>', '>'],$js);
    $js = str_replace([' ==', '== ', ' !=', '!= ', ' ===', '=== ', ' !==', '!== '], ['==', '==', '!=', '!=', '===', '===', '!==', '!=='], $js);
    $js = str_replace(';}', '}', $js);
    return trim($js);
}


function generateMinifiedCSS() {
    $cssFile = __DIR__ . '/../assets/css/style.css'; 
    $minifiedFile = __DIR__ . '/../assets/css/style.min.css';
    
    if (!file_exists($cssFile)) {
        return false;
    }
    $css = file_get_contents($cssFile);
    $minifiedCSS = minifyCSS($css);
    $result = file_put_contents($minifiedFile, $minifiedCSS);
    return $result !== false;
}

function getCSSPath() {
    $originalFile = 'assets/css/style.css';
    $minifiedFile = 'assets/css/style.min.css';
    $originalPath = __DIR__ . '/../' . $originalFile;
    $minifiedPath = __DIR__ . '/../' . $minifiedFile;
    
    if (file_exists($minifiedPath) && file_exists($originalPath)) {
        $originalTime = filemtime($originalPath);
        $minifiedTime = filemtime($minifiedPath);
        if ($minifiedTime >= $originalTime) {
            return $minifiedFile;
        }
    }
    if (generateMinifiedCSS()) {
        return $minifiedFile;
    }
    return $originalFile;
}
$cssPath = getCSSPath();
function generateMinifiedJS() {
    $jsFile = __DIR__ . '/../assets/js/custom.js';
    $minifiedFile = __DIR__ . '/../assets/js/custom.min.js';
    
    if (!file_exists($jsFile)) {
        return false;}
    $js = file_get_contents($jsFile);
    $minifiedJS = minifyJS($js);
    $result = file_put_contents($minifiedFile, $minifiedJS);
    return $result !== false;
}

function getJSPath() {
    $originalFile = 'assets/js/custom.js';
    $minifiedFile = 'assets/js/custom.min.js';
    $originalPath = __DIR__ . '/../' . $originalFile;
    $minifiedPath = __DIR__ . '/../' . $minifiedFile;
    
    if (file_exists($minifiedPath) && file_exists($originalPath)) {
        $originalTime = filemtime($originalPath);
        $minifiedTime = filemtime($minifiedPath);
        if ($minifiedTime >= $originalTime) {
            return $minifiedFile;}}
    if (generateMinifiedJS()) {
        return $minifiedFile;}
    return $originalFile;
}
$jsPath = getJSPath();


function getImagePath($folder, $filename)
{
    $folder = rtrim($folder, '/') . '/';
    $extensions = ['webp', 'svg', 'png', 'jpg'];
    foreach ($extensions as $ext) {
        $fullPath = $folder . $filename . '.' . $ext;
        if (file_exists($fullPath)) {
            return $fullPath;
        }
    }
    return null;
}
function getAnchorButton($href, $className, $text)
{
	$output = "<a href='{$href}' class='{$className} fw-600'>{$text}</a>";
	return $output;
};

function getCallButton()
{	global $no;
	$output = "<a href='tel:$no' class='d-flex mb-3'><span class='clr-1 icon-Group-15959 f-30 me-2'></span> <span class='d-none d-md-block'>Call Us At<br><span class='clr-1'>$no</span></span></a>";
	return $output;
	
};
function getModalButton($className, $text)
{
	$output = "<button type='button' class='{$className}'  data-bs-toggle='modal' data-bs-target='#quote'><span class='d-flex justify-content-center align-items-center'>{$text}<span class='line'><span class='circle'></span></span></span></button>";
	return $output;

	
};

function getChatButton($text, $text1)
{
	$output = "<a href='javascript:;' class='d-flex chat justify-content-end justify-content-start'> <span class='clr-1 icon-Group-15958 f-30 me-2'></span><span class='d-none d-md-block'> {$text}<br><span class='clr-1'>{$text1}</span></span></a>";
	return $output;
};

function logo($logo_name)
{
	$imagePath = getImagePath("assets/img/", $logo_name);
	global $base_url, $bname;
	$output = '<a href="' . $base_url . '" class="logo d-block" aria-label="Home page">
        <img class="lozad obj-ctn" alt="' . $bname . '" data-src="' . $imagePath . '"></a>';
	return $output;
};





