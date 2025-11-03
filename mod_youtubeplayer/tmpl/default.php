<?php
defined('_JEXEC') or die;

$videoId = $params->get('videoid', 'dQw4w9WgXcQ');
$width   = $params->get('width', '560');
$height  = $params->get('height', '315');
?>

<div class="youtube-player">
  <iframe 
    width="<?php echo htmlspecialchars($width); ?>"
    height="<?php echo htmlspecialchars($height); ?>"
    src="https://www.youtube.com/embed/<?php echo htmlspecialchars($videoId); ?>"
    frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen>
  </iframe>
</div>
