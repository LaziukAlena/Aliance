<?php
$page_title = "Автохимия AG-Tech";
$header_style = "header-background-with-image";
$parent_title = "Собственные торговые марки";
$parent_url = "./trademarks.php";
$features_style = "header-features-dark";


include_once("./header-page.php");
include_once('./template-parts/breadcrumbs-block.php'); 

$product_intro__title = "Собственное производство автохимия AG-Tech";
$product_image = "intro-ag-tech.png";
$product_description = '
  <p>Прежде всего, начало повседневной работы по&nbsp;формированию позиции однозначно фиксирует необходимость приоритизации разума над эмоциями. Кстати, представители современных социальных резервов неоднозначны и&nbsp;будут описаны максимально подробно.</p>
  <p>Но&nbsp;социально-экономическое развитие напрямую зависит от&nbsp;поставленных обществом задач! Безусловно, постоянный количественный рост и&nbsp;сфера нашей активности предоставляет широкие возможности для системы обучения кадров, соответствующей насущным потребностям. В&nbsp;целом, конечно, выбранный нами инновационный путь обеспечивает широкому кругу (специалистов) участие в&nbsp;формировании своевременного выполнения сверхзадачи. А&nbsp;ещё элементы политического процесса представлены в&nbsp;исключительно положительном свете. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада создаёт предпосылки для глубокомысленных рассуждений. В&nbsp;своём стремлении повысить качество жизни, они забывают, что дальнейшее развитие различных форм деятельности, а&nbsp;также свежий взгляд на&nbsp;привычные вещи&nbsp;&mdash; безусловно открывает новые горизонты для поставленных обществом задач.</p>
';
include_once('./template-parts/product-intro-block.php');
$production_bg = "bg-grey";
$production_title = "Генеральный дистрибьютор<br />премиальной автохимии";
$production_text = "Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими общечеловеческие нормы этики и&nbsp;морали.";
$production_image = "catalog.png";
$production_download_url = "#";
$production_image_class = "production-info-image-edge";
$production_items = [
  ['icon' => 'him', 'text' => 'Полное описание товаров'],
  ['icon' => 'autohim', 'text' => 'Актуальные цены'],
  ['icon' => 'brush', 'text' => 'Лаки и краски'],
  ['icon' => 'him', 'text' => 'Химические производства'],
];


include_once('./template-parts/production-info-block.php');
include_once('./template-parts/research-block.php');
include_once('./template-parts/steps-block.php');
include_once('./template-parts/clients-block.php');


include_once('footer.php');
?>
