<?php
/**
 * ==============================================================================
 * Common Reusable Button Component - SS Healing Rays
 * Matches the reference design: Clean text + circular badge icon (diagonal arrow ↗)
 * ==============================================================================
 * 
 * Supports both function call and file include:
 * 1) Function call:
 *    render_button([
 *        'text'  => 'Explore Services',
 *        'url'   => '#services',
 *        'class' => 'Btn-Header'
 *    ]);
 * 
 * 2) Direct file include:
 *    $btn_text  = 'Explore Services';
 *    $btn_url   = '#services';
 *    $btn_class = 'Btn-Header';
 *    include 'common/button.php';
 * ==============================================================================
 */

if (!function_exists('render_button')) {
    function render_button($options = []) {
        $text       = $options['text'] ?? 'Explore Services';
        $url        = $options['url'] ?? $options['href'] ?? null;
        $type       = $options['type'] ?? 'button';
        $bg         = $options['bg'] ?? null;
        $icon_bg    = $options['icon_bg'] ?? null;
        $text_color = $options['text_color'] ?? null;
        $icon_color = $options['icon_color'] ?? null;
        $icon       = $options['icon'] ?? 'bi bi-arrow-up-right';
        $class      = $options['class'] ?? '';
        $id         = $options['id'] ?? '';
        $attr       = $options['attr'] ?? '';

        $styles = [];
        if (!empty($bg))         $styles[] = "--btn-bg: {$bg};";
        if (!empty($icon_bg))    $styles[] = "--btn-icon-bg: {$icon_bg};";
        if (!empty($text_color)) $styles[] = "--btn-text-color: {$text_color};";
        if (!empty($icon_color)) $styles[] = "--btn-icon-color: {$icon_color};";
        $styleAttr = !empty($styles) ? ' style="' . htmlspecialchars(implode(' ', $styles)) . '"' : '';

        $idAttr = !empty($id) ? ' id="' . htmlspecialchars($id) . '"' : '';

        // If diagonal arrow is requested, render pixel-crisp SVG matching the exact reference image
        $isDiagonalArrow = ($icon === 'bi bi-arrow-up-right' || $icon === 'arrow' || empty($icon));
        $iconMarkup = $isDiagonalArrow
            ? '<svg class="btn-arrow-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>'
            : '<i class="' . htmlspecialchars($icon) . '"></i>';

        $tag = !empty($url) ? 'a' : 'button';
        $hrefAttr = !empty($url) ? ' href="' . htmlspecialchars($url) . '"' : ' type="' . htmlspecialchars($type) . '"';

        echo sprintf(
            '<%s%s class="Btn-Container %s"%s%s %s>' .
            '<span class="text">%s</span>' .
            '<span class="icon-Container">%s</span>' .
            '</%s>',
            $tag,
            $hrefAttr,
            htmlspecialchars($class),
            $styleAttr,
            $idAttr,
            $attr,
            htmlspecialchars($text),
            $iconMarkup,
            $tag
        );
    }
}

// Support direct include with variables
$btn_text       = $btn_text ?? 'Explore Services';
$btn_url        = $btn_url ?? $btn_href ?? null;
$btn_type       = $btn_type ?? 'button';
$btn_bg         = $btn_bg ?? null;
$btn_icon_bg    = $btn_icon_bg ?? null;
$btn_text_color = $btn_text_color ?? null;
$btn_icon_color = $btn_icon_color ?? null;
$btn_icon       = $btn_icon ?? 'bi bi-arrow-up-right';
$btn_class      = $btn_class ?? '';
$btn_id         = $btn_id ?? '';
$btn_attr       = $btn_attr ?? '';

$styles = [];
if (!empty($btn_bg))         $styles[] = "--btn-bg: {$btn_bg};";
if (!empty($btn_icon_bg))    $styles[] = "--btn-icon-bg: {$btn_icon_bg};";
if (!empty($btn_text_color)) $styles[] = "--btn-text-color: {$btn_text_color};";
if (!empty($btn_icon_color)) $styles[] = "--btn-icon-color: {$btn_icon_color};";
$styleAttrString = !empty($styles) ? ' style="' . htmlspecialchars(implode(' ', $styles)) . '"' : '';
$idAttrString    = !empty($btn_id) ? ' id="' . htmlspecialchars($btn_id) . '"' : '';

$isDiagonalArrow = ($btn_icon === 'bi bi-arrow-up-right' || $btn_icon === 'arrow' || empty($btn_icon));
$iconMarkup = $isDiagonalArrow
    ? '<svg class="btn-arrow-svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>'
    : '<i class="' . htmlspecialchars($btn_icon) . '"></i>';
?>

<?php if (!empty($btn_url)): ?>
    <a href="<?= htmlspecialchars($btn_url) ?>" 
       class="Btn-Container <?= htmlspecialchars($btn_class) ?>" 
       <?= $styleAttrString ?>
       <?= $idAttrString ?> 
       <?= $btn_attr ?>><span class="text"><?= htmlspecialchars($btn_text) ?></span><span class="icon-Container"><?= $iconMarkup ?></span></a>
<?php else: ?>
    <button type="<?= htmlspecialchars($btn_type) ?>" 
            class="Btn-Container <?= htmlspecialchars($btn_class) ?>" 
            <?= $styleAttrString ?>
            <?= $idAttrString ?> 
            <?= $btn_attr ?>><span class="text"><?= htmlspecialchars($btn_text) ?></span><span class="icon-Container"><?= $iconMarkup ?></span></button>
<?php endif; ?>

<?php
// Clear temporary component variables to prevent scope bleed
unset($btn_text, $btn_url, $btn_href, $btn_type, $btn_bg, $btn_icon_bg, $btn_text_color, $btn_icon_color, $btn_icon, $btn_class, $btn_id, $btn_attr, $styles, $styleAttrString, $idAttrString, $isDiagonalArrow, $iconMarkup);
?>