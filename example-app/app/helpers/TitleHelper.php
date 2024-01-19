<?php

function getPageTitle($pageTitle = null) {
    $baseTitle = 'Melody';
    return $pageTitle ? "$baseTitle | $pageTitle" : $baseTitle;
}
