<?php 
$page_title = "О компании";
$header_style = "header-background";
$features_style = "header-features-dark"; 

include_once('header-page.php');

include_once('./template-parts/breadcrumbs-block.php');
include_once('./template-parts/intro-block.php');
$production_title = "Наше производство";
$production_text = "Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в&nbsp;формировании глубокомысленных рассуждений. Но&nbsp;граница обучения кадров создаёт необходимость включения в&nbsp;производственный план целого ряда внеочередных мероприятий с&nbsp;учётом комплекса кластеризации усилий.<br /><br /> Реализация намеченных плановых заданий, а&nbsp;также свежий взгляд на&nbsp;привычные вещи&nbsp;&mdash; безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа существующих паттернов поведения.";
$production_image = "production-blog.png";
$production_items = [
  ['icon' => 'autohim', 'text' => 'Автомобильная химия'],
  ['icon' => 'househim', 'text' => 'Бытовая химия'],
  ['icon' => 'dez', 'text' => 'Дезинфицирующие средства'],
  ['icon' => 'foodhim', 'text' => 'Пищевые аэрозоли'],
  ['icon' => 'cosmetic', 'text' => 'Косметическая продукция'],
  ['icon' => 'brush', 'text' => 'Краски аэрозольные'],
];

include_once('./template-parts/production-info-block.php');
$hide_founder_link = true;
include_once('./template-parts/founder-block.php');
include_once('./template-parts/research-block.php');
include_once('./template-parts/clients-block.php');
include_once('footer.php');
?>
     
