<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="images/favicon.604825ed.ico" type="image/x-icon">
	<link href="css/common.css" rel="stylesheet">
</head>

<body>
	<!-- Шаблон -->
	<div id="barba-wrapper">
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<?
			// Настройки элемента из публички
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="article-list">
				<a class="article-item article-list__item" href="<? echo $arItem["DETAIL_PAGE_URL"] ?>" data-anim="anim-3">
					<!-- Изображение -->
					<div class="article-item__background">
						<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<? echo $arItem["NAME"] ?>" />
					</div>
					<div class="article-item__wrapper">
						<!-- Заголовок -->
						<div class="article-item__title">
							<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])) : ?>
								<a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a>
							<? else : ?>
								<? echo $arItem["NAME"] ?>
							<? endif; ?>
						</div>
						<!-- Тело -->
						<div class="article-item__content">
							<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]) : ?>
								<p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
							<? endif; ?>
						</div>
						<!-- Кнопка -->
						<!-- <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>" class="btn btn-primary">Подробнее</a> -->
					</div>
				</a>
			</div>
		<? endforeach; ?>
	</div>
</body>

