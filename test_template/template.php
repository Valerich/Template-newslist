<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
<!-- Шаблон -->
<div id="barba-wrapper">
	<div class="article-list">
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<?
			// Настройки элемента из публички
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<a class="article-item article-list__item" href="<? echo $arItem["DETAIL_PAGE_URL"] ?>" data-anim="anim-3">
				<!-- Изображение -->
				<div class="article-item__background">
					<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<? echo $arItem["NAME"] ?>" />
				</div>
				<div class="article-item__wrapper">
					<!-- Заголовок -->
					<div class="article-item__title">
						<? echo $arItem["NAME"] ?>
					</div>
					<!-- Тело -->
					<div class="article-item__content">
						<p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
					</div>
				</div>
			</a>
		<? endforeach; ?>
	</div>
</div>